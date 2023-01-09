<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Product as ProductModel;

/**
 * Product represents the model behind the search form about `common\models\Product`.
 */
class Product extends ProductModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'category_id', 'status'], 'integer'],
            [['product_title', 'product_slug', 'product_excerpt', 'images', 'publish_at', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
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
        $query = ProductModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
            'price' => $this->price,
            'old_price' => $this->old_price,
            'status' => $this->status,
            'publish_at' => $this->publish_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'product_title', $this->product_title])
            ->andFilterWhere(['like', 'product_slug', $this->product_slug])
            ->andFilterWhere(['like', 'product_excerpt', $this->product_excerpt])
            ->andFilterWhere(['like', 'images', $this->images]);

        return $dataProvider;
    }
}