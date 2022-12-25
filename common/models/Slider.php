<?php

namespace common\models;

use Yii;
use \common\models\base\Slider as BaseSlider;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sliders".
 */
class Slider extends BaseSlider
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

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
