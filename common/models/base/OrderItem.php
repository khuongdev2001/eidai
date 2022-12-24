<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "order_item".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $product_id
 * @property integer $product_variant_id
 * @property integer $number_inventory
 * @property double $unit_price
 * @property double $sub_total
 * @property integer $quantity
 * @property double $total_price
 * @property string $created_at
 * @property string $note
 * @property double $discount_price
 * @property double $discount
 * @property string $data_discount
 * @property double $tax_price
 * @property string $data_tax
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $status
 * @property string $aliasModel
 */
abstract class OrderItem extends \common\models\base\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'product_variant_id', 'number_inventory', 'quantity', 'status'], 'integer'],
            [['unit_price', 'sub_total', 'total_price', 'discount_price', 'discount', 'tax_price'], 'number'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['note', 'data_discount', 'data_tax'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'product_variant_id' => 'Product Variant ID',
            'number_inventory' => 'Number Inventory',
            'unit_price' => 'Unit Price',
            'sub_total' => 'Sub Total',
            'quantity' => 'Quantity',
            'total_price' => 'Total Price',
            'created_at' => 'Created At',
            'note' => 'Note',
            'discount_price' => 'Discount Price',
            'discount' => 'Discount',
            'data_discount' => 'Data Discount',
            'tax_price' => 'Tax Price',
            'data_tax' => 'Data Tax',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'status' => 'Status',
        ];
    }


    
    /**
     * @inheritdoc
     * @return \common\models\OrderItemQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\OrderItemQuery(get_called_class());
    }


}
