<?php
namespace backend\modules\api;

class Module extends \yii\base\Module
{
    public function init()
    {
       $this->modules = [
         'product' => product\Module::className(),
       ];
       parent::init();
    }
}