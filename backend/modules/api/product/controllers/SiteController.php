<?php
namespace backend\modules\api\product\controllers;

use app\helpers\ApiConstant;
use app\helpers\ResponseHelper;
use backend\modules\api\product\models\Product;
use Yii;
use yii\rest\Controller;

class SiteController extends Controller
{
    public function actionList(){
    }

    public function actionDetail() {
        $id = Yii::$app->request->get('id');
        $product = Product::find()->where(['id' => $id, 'status' => [Product::STATUS_ACTIVE, Product::STATUS_INACTIVE]])->all();

        if (!empty($product)) {
            $response = new ResponseHelper(['status' => ApiConstant::STATUS_OK, 'data' => $product, 'ok_status' => ApiConstant::STATUS_OK]);
            return $response;
        }
    }
}