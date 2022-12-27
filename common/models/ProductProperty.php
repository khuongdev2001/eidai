<?php

namespace common\models;

use Yii;
use \common\models\base\ProductProperty as BaseProductProperty;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "product_properties".
 */
class ProductProperty extends BaseProductProperty
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
}
