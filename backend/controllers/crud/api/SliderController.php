<?php

namespace backend\controllers\crud\api;

/**
* This is the class for REST controller "SliderController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class SliderController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Slider';
}
