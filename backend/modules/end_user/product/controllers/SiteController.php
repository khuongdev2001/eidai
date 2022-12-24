<?php

namespace backend\modules\end_user\product\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render("index");
    }

    public function actionView()
    {
        return $this->render("view");
    }
}