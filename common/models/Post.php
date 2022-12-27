<?php

namespace common\models;

use Yii;
use \common\models\base\Post as BasePost;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "posts".
 */
class Post extends BasePost
{

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function getCategory()
    {
        return $this->hasOne(PostCategory::className(), ["id" => "category_id"]);
    }

    public function formName()
    {
        return "";
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
            ]
        );
    }

    public function getNext() {
        $next = $this->find()->where(['>', 'id', $this->id])->orderBy('id asc')->one();
        return $next;
    }
    
    public function getPrev() {
        $prev = $this->find()->where(['<', 'id', $this->id])->orderBy('id desc')->one();
        return $prev;
    }
}
