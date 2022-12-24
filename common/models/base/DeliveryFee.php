<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "delivery_fee".
 *
 * @property integer $id
 * @property string $name
 * @property integer $price
 * @property string $created_at
 * @property string $updated_at
 * @property integer $status
 * @property string $aliasModel
 */
abstract class DeliveryFee extends \common\models\base\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'delivery_fee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }


    
    /**
     * @inheritdoc
     * @return \common\models\DeliveryFeeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\DeliveryFeeQuery(get_called_class());
    }


}
