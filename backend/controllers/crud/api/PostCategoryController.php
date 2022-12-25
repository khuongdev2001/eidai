<?php

namespace backend\controllers\crud\api;

/**
* This is the class for REST controller "PostCategoryController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class PostCategoryController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\PostCategory';
}
