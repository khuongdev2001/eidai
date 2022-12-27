<?php

namespace backend\controllers\crud\api;

/**
* This is the class for REST controller "ProductPropertyController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ProductPropertyController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\ProductProperty';
}
