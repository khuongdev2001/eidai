<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "product_category".
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $category_id
 * @property integer $priority
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $status
 * @property string $aliasModel
 */
abstract class ProductCategory extends \common\models\base\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'category_id', 'priority', 'status'], 'integer'],
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
            'product_id' => 'Product ID',
            'category_id' => 'Category ID',
            'priority' => 'Priority',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'status' => 'Status',
        ];
    }


    
    /**
     * @inheritdoc
     * @return \common\models\ProductCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\ProductCategoryQuery(get_called_class());
    }


}
