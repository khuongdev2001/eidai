<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "comment_like".
 *
 * @property integer $id
 * @property integer $status
 * @property integer $comment_id
 * @property integer $user_id
 * @property integer $options
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $aliasModel
 */
abstract class CommentLike extends \common\models\base\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment_like';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'comment_id', 'user_id', 'options'], 'integer'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'comment_id' => 'Comment ID',
            'user_id' => 'User ID',
            'options' => 'Options',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }


    
    /**
     * @inheritdoc
     * @return \common\models\CommentLikeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\CommentLikeQuery(get_called_class());
    }


}
