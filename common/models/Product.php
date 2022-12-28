<?php

namespace common\models;

use common\models\base\Category;
use Yii;
use \common\models\base\Product as BaseProduct;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "products".
 */
class Product extends BaseProduct
{

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
            ]
        );
    }

    public function getCategory()
    {
        return $this->hasOne(ProductCategory::className(), ["id" => "category_id"]);
    }

    public function getCountProperty()
    {
        return $this->hasOne(ProductProperty::className(), ["product_id" => "id"])->count();
    }

    public function getProductSames()
    {
        $categorys = ProductCategory::find()->andWhere(["like", "tree", $this->category_id])->all();
        return Product::find()->where(["category_id" => array_column($categorys, "id")])
            ->andWhere(["<>", "id", $this->id])
            ->limit(5)
            ->all();
    }

    
    public function getNext() {
        $next = $this->find()->where(['>', 'id', $this->id])->orderBy('id asc')->one();
        return $next;
    }
    
    public function getPrev() {
        $prev = $this->find()->where(['<', 'id', $this->id])->orderBy('id desc')->one();
        return $prev;
    }
}
