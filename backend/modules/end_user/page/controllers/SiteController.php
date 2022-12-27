<?php

namespace backend\modules\end_user\page\controllers;

use common\models\Page;
use common\models\Post;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SiteController implements the CRUD actions for Page model.
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
     * Displays a single Page model.
     * @param int $id ID
     * @return mixed
     */
    public function actionView($page_slug)
    {
        $page = Page::find()->andWhere(["page_slug" => $page_slug])->one();
        if (!$page) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        $post = new Post(["id" => 1]);
        return $this->render('view', [
            'page' => $page,
            'post' => $post
        ]);
    }

    /**
     * Finds the Page model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Page the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Page::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
