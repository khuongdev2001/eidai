<?php

namespace common\models;

use Yii;
use \common\models\base\PostCategory as BasePostCategory;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "post_categories".
 */
class PostCategory extends BasePostCategory
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
