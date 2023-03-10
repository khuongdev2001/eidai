<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "price_policy".
 *
 * @property integer $id
 * @property string $office_ids
 * @property string $name
 * @property string $code
 * @property integer $type
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $status
 * @property string $aliasModel
 */
abstract class PricePolicy extends \common\models\base\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price_policy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'status'], 'integer'],
            [['description'], 'string'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['office_ids', 'name'], 'string', 'max' => 255],
            [['code'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'office_ids' => 'Office Ids',
            'name' => 'Name',
            'code' => 'Code',
            'type' => 'Type',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'status' => 'Status',
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return array_merge(parent::attributeHints(), [
            'id' => 'ID',
            'office_ids' => 'Office ID',
            'name' => 'Name of the office policy',
            'type' => 'Type of Price',
            'description' => 'Description of the policy',
        ]);
    }


    
    /**
     * @inheritdoc
     * @return \common\models\PricePolicyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\PricePolicyQuery(get_called_class());
    }


}
