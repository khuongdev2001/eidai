<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ProductProperty as ProductPropertyModel;

/**
* ProductProperty represents the model behind the search form about `common\models\ProductProperty`.
*/
class ProductProperty extends ProductPropertyModel
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'user_id', 'product_id', 'property_id'], 'integer'],
            [['property_value', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
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
$query = ProductPropertyModel::find();

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
            'product_id' => $this->product_id,
            'property_id' => $this->property_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'property_value', $this->property_value]);

return $dataProvider;
}
}