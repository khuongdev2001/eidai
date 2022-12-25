<?php

namespace backend\controllers\crud\api;

/**
* This is the class for REST controller "ProductCategoryController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ProductCategoryController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\ProductCategory';
}
