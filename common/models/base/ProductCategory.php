<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "product_categories".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $category_slug
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $category_name
 * @property string $aliasModel
 */
abstract class ProductCategory extends \common\models\base\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'status'], 'integer'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['category_slug', 'category_name'], 'string', 'max' => 500]
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
            'category_slug' => 'Category Slug',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'category_name' => 'Category Name',
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
