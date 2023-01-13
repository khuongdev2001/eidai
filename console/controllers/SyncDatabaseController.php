<?php

namespace console\controllers;

use common\models\Product;
use common\models\ProductCategory;
use common\models\ProductProperty;
use common\models\Property;
use common\models\Slider;
use Yii;
use yii\base\InvalidConfigException;
use yii\console\Controller;
use yii\db\Connection;
use yii\db\Exception;
use yii\db\Query;
use yii\helpers\Inflector;
use function GuzzleHttp\Promise\all;

class SyncDatabaseController extends Controller
{
    protected $db_wp = "db_wp";

    /**
     * @throws InvalidConfigException
     */
    public function beforeAction($action)
    {
        Yii::$app->set($this->db_wp, [
            'class' => Connection::className(),
            'dsn' => env('DB_DSN_SYNC'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'tablePrefix' => env('DB_TABLE_PREFIX'),
            'charset' => env('DB_CHARSET', 'utf8'),
            'enableSchemaCache' => YII_ENV_PROD,
        ]);
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    public function actionRun()
    {
        $this->syncProductPropertySlug();
        echo "Syncing Slider" . PHP_EOL;
        $this->syncSlider();
        echo "Sync Done Slider" . PHP_EOL;
        echo "Syncing Product Category" . PHP_EOL;
        $this->syncProductCategory();
        echo "Sync Done Product Category" . PHP_EOL;
        echo "Syncing Properties" . PHP_EOL;
        $this->syncProperties();
        echo "Sync Done Properties" . PHP_EOL;
        echo "Syncing Product" . PHP_EOL;
        $this->syncProduct();
        echo "Sync Done Product" . PHP_EOL;
    }

    public function syncProductPropertySlug()
    {
        $productProperies = ProductProperty::find()->all();
        foreach ($productProperies as $productPropery) {
            $productPropery->property_slug = Inflector::slug($productPropery->property_value,"-",50);
            $productPropery->save(false);
        }
        die("oke");
    }

    public function syncProductCategory()
    {
        $this->deleteAllProductCategory();
        $query = new Query();
        $wpProductCategorys = $query->from("wp_terms")
            ->select("*")
            ->andWhere(["wp_term_taxonomy.taxonomy" => "product_cat"])
            ->leftJoin("wp_term_taxonomy", "`wp_term_taxonomy`.`term_id`=`wp_terms`.`term_id`")
            ->createCommand(Yii::$app->{$this->db_wp})
            ->queryAll();
        foreach ($wpProductCategorys as $wpProductCategory) {
            $productCategory = new ProductCategory();
            $productCategory->id = $wpProductCategory["term_id"];
            $productCategory->category_name = $wpProductCategory["name"];
            $productCategory->category_slug = $wpProductCategory["slug"];
            $productCategory->status = 1;
            $productCategory->parent_id = $wpProductCategory["parent"];
            $productCategory->tree = ($wpProductCategory["parent"] ?: "") . "," . $wpProductCategory["term_id"];
            $productCategory->save(false);
        }
    }

    /**
     * @throws Exception
     */
    public function syncProperties()
    {
        $this->deleteAllProperties();
        $query = new Query();
        $wpProperties = $query->from("wp_woocommerce_attribute_taxonomies")
            ->createCommand(Yii::$app->{$this->db_wp})
            ->queryAll();
        foreach ($wpProperties as $wpProperty) {
            $propertiy = new Property();
            $propertiy->id = $wpProperty["attribute_id"];
            $propertiy->property_name = $wpProperty["attribute_label"];
            $propertiy->property_slug = $wpProperty["attribute_name"];
            $propertiy->status = 1;
            $propertiy->save(false);
        }
    }

    public function syncProduct()
    {
        $this->deleteAllProduct();
        $this->deleteAllProductProperty();
        $query = new Query();
        $wpProducts = $query->from("wp_posts")
            ->andWhere(["wp_posts.post_type" => "product"])
            ->andWhere(["wp_posts.post_status" => "publish"])
            ->createCommand(Yii::$app->{$this->db_wp})
            ->queryAll();
        foreach ($wpProducts as $wpProduct) {
            $product = new Product();
            $product->id = $wpProduct["ID"];
            $product->product_title = $wpProduct["post_title"];
            $product->product_slug = $wpProduct["post_name"];
            $product->category_id = $this->getCategoryByProductId($wpProduct["ID"]);
            $product->product_excerpt = $wpProduct["post_excerpt"];
            $product->product_content = $wpProduct["post_content"];
            $product->images = json_encode($this->getImagesProductByProductId($wpProduct["ID"]));
            $product->price = $this->getPriceProductByProductId($wpProduct["ID"]);
            $product->status = 1;
            $product->publish_at = date("Y-m-d H:i:s");
            $product->save(false);
            $this->syncProductPropertyByProductId($wpProduct["ID"]);
        }
    }

    protected function getCategoryByProductId($product_id)
    {
        $query = new Query();
        $wpCategory = $query->from("wp_term_relationships")
            ->leftJoin("wp_term_taxonomy", "`wp_term_taxonomy`.`term_taxonomy_id`=`wp_term_relationships`.`term_taxonomy_id`")
            ->andWhere(["wp_term_relationships.object_id" => $product_id])
            ->andWhere(["wp_term_taxonomy.taxonomy" => "product_cat"])
            ->createCommand(Yii::$app->{$this->db_wp})
            ->queryOne();
        return $wpCategory["term_id"] ?? null;
    }

    protected function getImagesProductByProductId($product_id)
    {
        $images = [];
        $query = new Query();
        $wpImages = $query->from("wp_posts")
            ->andWhere(["wp_posts.post_type" => "attachment"])
            ->andWhere(["wp_posts.post_parent" => $product_id])
            ->createCommand(Yii::$app->{$this->db_wp})
            ->queryAll();
        foreach ($wpImages as $wpImage) {
            $images[] = $wpImage["guid"];
        }
        return $images;
    }

    protected function syncProductPropertyByProductId($product_id)
    {
        $query = new Query();
        $wpProductProperties = $query->from("wp_wc_product_attributes_lookup")
            ->leftJoin("wp_woocommerce_attribute_taxonomies", "wp_woocommerce_attribute_taxonomies.attribute_name=SUBSTRING(wp_wc_product_attributes_lookup.taxonomy,4)")
            ->leftJoin("wp_terms", "wp_terms.term_id=wp_wc_product_attributes_lookup.term_id")
            ->andWhere(["product_id" => $product_id])
            ->createCommand(Yii::$app->{$this->db_wp})
            ->queryAll();
        foreach ($wpProductProperties as $wpProductProperty) {
            $productProperty = new ProductProperty();
            $productProperty->product_id = $product_id;
            $productProperty->property_id = $wpProductProperty["attribute_id"];
            $productProperty->property_value = $wpProductProperty["name"];
            $productProperty->save(false);
        }
    }

    public function getPriceProductByProductId($product_id)
    {
        $query = new Query();
        $wpPriceProduct = $query->from("wp_postmeta")
            ->andWhere(["post_id" => $product_id])
            ->andWhere(["meta_key" => "_price"])
            ->createCommand(Yii::$app->{$this->db_wp})
            ->queryOne();
        return $wpPriceProduct["meta_value"];
    }

    public function syncSlider()
    {
        $this->deleteAllSlider();
        $query = new Query();
        $wpSliders = $query->from("wp_nextend2_smartslider3_slides")
            ->leftJoin("wp_posts", "wp_posts.post_title=wp_nextend2_smartslider3_slides.title")
            ->createCommand(Yii::$app->{$this->db_wp})
            ->queryAll();
        foreach ($wpSliders as $wpSlider) {
            if (empty($wpSlider["guid"])) {
                continue;
            }
            $slider = new Slider();
            $slider->id = $wpSlider["id"];
            $slider->image = $wpSlider["guid"];
            $slider->status = 1;
            $slider->save(false);
        }
    }

    protected function deleteAllProductCategory()
    {
        ProductCategory::deleteAll([">", "id", 0]);
    }

    protected function deleteAllProperties()
    {
        Property::deleteAll([">", "id", 0]);
    }

    protected function deleteAllProduct()
    {
        Product::deleteAll([">", "id", 0]);
    }

    protected function deleteAllProductProperty()
    {
        ProductProperty::deleteAll([">", "id", 0]);
    }

    protected function deleteAllSlider()
    {
        Slider::deleteAll([">", "id", 0]);
    }
}
