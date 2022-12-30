<?php

namespace backend\modules\end_user\product\controllers;

use Yii;
use backend\modules\end_user\product\models\Product;
use backend\modules\end_user\product\models\search\ProductSearch;
use common\models\ProductCategory;
use common\models\Property;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SiteController implements the CRUD actions for Product model.
 */
class SiteController extends Controller
{

    /** @inheritdoc */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $category = ProductCategory::find()->where(["id" => Yii::$app->request->get("category_id", 29)])->one();
        if (Yii::$app->request->isAjax) {
            return $this->renderAjax("index.php", [
                'searchModel' => $searchModel,
                'category' => $category,
                'dataProvider' => $dataProvider,
            ]);
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'category' => $category,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param $product_slug
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionView($product_slug)
    {
        $product = Product::find()->andWhere(["product_slug" => $product_slug])->one();
        if (!$product) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        $properties = Property::find()->all();
        return $this->render('view', [
            'product' => $product,
            "properties" => $properties
        ]);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
