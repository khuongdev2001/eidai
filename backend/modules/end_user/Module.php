<?php

namespace backend\modules\end_user;

use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    public function init()
    {
        $this->modules = [
            "home" => home\Module::className(),
            "product" => product\Module::className(),
            "post" => post\Module::className(),
            "page" => page\Module::className()
        ];
        $this->layout = "@backend/views/layouts/end_user/main.php";
        parent::init(); // TODO: Change the autogenerated stub
    }
}