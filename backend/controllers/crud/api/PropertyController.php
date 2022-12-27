<?php

namespace backend\controllers\crud\api;

/**
* This is the class for REST controller "PropertyController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class PropertyController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Property';
}
