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
}
