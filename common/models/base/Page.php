<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "pages".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $status
 * @property string $page_title
 * @property string $page_content
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $page_slug
 * @property string $aliasModel
 */
abstract class Page extends \common\models\base\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'status'], 'integer'],
            [['page_content'], 'string'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['page_title', 'page_slug'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'status' => 'Status',
            'page_title' => 'Page Title',
            'page_content' => 'Page Content',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'page_slug' => 'Page Slug',
        ];
    }


    
    /**
     * @inheritdoc
     * @return \common\models\PageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\PageQuery(get_called_class());
    }


}
