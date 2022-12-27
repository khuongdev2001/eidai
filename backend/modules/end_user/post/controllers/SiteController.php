<?php

namespace backend\modules\end_user\post\controllers;

use common\models\PostCategory;
use Yii;
use backend\modules\end_user\post\models\Post;
use backend\modules\end_user\post\models\search\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SiteController implements the CRUD actions for Post model.
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
     * Lists all Post models.
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $postCategory = PostCategory::find()->where(["id" => $searchModel->category_id])->one();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'postCategory' => $postCategory
        ]);
    }

    /**
     * Displays a single Post model.
     * @param $post_slug
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($post_slug)
    {
        $post = Post::find()->andWhere(["post_slug" => $post_slug])->one();
        if (!$post) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        return $this->render('view', [
            'post' => $post,
        ]);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
