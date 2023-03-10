<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "rbac_auth_item_child".
 *
 * @property string $parent
 * @property string $child
 *
 * @property \common\models\RbacAuthItem $child0
 * @property \common\models\RbacAuthItem $parent0
 * @property string $aliasModel
 */
abstract class RbacAuthItemChild extends \common\models\base\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rbac_auth_item_child';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent', 'child'], 'required'],
            [['parent', 'child'], 'string', 'max' => 64],
            [['parent', 'child'], 'unique', 'targetAttribute' => ['parent', 'child']],
            [['parent'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\RbacAuthItem::className(), 'targetAttribute' => ['parent' => 'name']],
            [['child'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\RbacAuthItem::className(), 'targetAttribute' => ['child' => 'name']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'parent' => 'Parent',
            'child' => 'Child',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChild0()
    {
        return $this->hasOne(\common\models\RbacAuthItem::className(), ['name' => 'child']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent0()
    {
        return $this->hasOne(\common\models\RbacAuthItem::className(), ['name' => 'parent']);
    }


    
    /**
     * @inheritdoc
     * @return \common\models\RbacAuthItemChildQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\RbacAuthItemChildQuery(get_called_class());
    }


}
