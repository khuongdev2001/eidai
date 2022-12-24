<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "customer_note".
 *
 * @property integer $id
 * @property integer $customer_id
 * @property integer $created_by
 * @property string $note
 * @property integer $group
 * @property integer $priority
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $status
 * @property string $aliasModel
 */
abstract class CustomerNote extends \common\models\base\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer_note';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'created_by', 'group', 'priority', 'status'], 'integer'],
            [['note'], 'string'],
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
            'customer_id' => 'Customer ID',
            'created_by' => 'Created By',
            'note' => 'Note',
            'group' => 'Group',
            'priority' => 'Priority',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'status' => 'Status',
        ];
    }


    
    /**
     * @inheritdoc
     * @return \common\models\CustomerNoteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\CustomerNoteQuery(get_called_class());
    }


}
