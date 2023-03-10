<?php

namespace backend\modules\end_user\product\models\search;

use backend\models\search\ProductCategory;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\end_user\product\models\Product;
use common\models\base\Category;

/**
 * ProductSearch represents the model behind the search form about `backend\modules\end_user\product\models\Product`.
 */
class ProductSearch extends Product
{
    public $s;
    public $max_price;
    public $min_price;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'category_id', 'status'], 'integer'],
            [['product_title', 'product_slug', 'product_excerpt', 'images', 'publish_at', 'created_at', 'updated_at', 'deleted_at', 's', 'max_price', 'min_price'], 'safe'],
            [['price', 'old_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Product::find()
            ->joinWith("category")
            ->joinWith("properties")
            ->groupBy("products.id")
            ->orderBy(['created_at' => SORT_DESC]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20
            ]
        ]);
        foreach ($params as $key => $param) {
            if (str_contains($key, "filter") && !empty($param)) {
                $query->orWhere([
                    "and",
                    ["properties.property_slug" => str_replace(["filter_"], "", $key)],
                    ["product_properties.property_slug" => explode(",", $param)]
                ]);
            }
        }
        $this->load($params, "");
        if (!$this->validate()) {
            return $dataProvider;
        }
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'category_id' => !empty($this->category_id) ? array_column(ProductCategory::find()->where(["like", "tree", $this->category_id])->all(), "id") ?: $this->category_id : null,
            'price' => $this->price,
            'old_price' => $this->old_price,
            'status' => $this->status,
            'publish_at' => $this->publish_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);


        $query->andFilterWhere(['like', 'product_title', $this->s])
            ->andFilterWhere(['like', 'product_slug', $this->product_slug])
            ->andFilterWhere(['like', 'product_excerpt', $this->product_excerpt])
            ->andFilterWhere(['like', 'images', $this->images])
            ->andFilterWhere(['between', 'products.price', $this->min_price, $this->max_price]);

        return $dataProvider;
    }
}