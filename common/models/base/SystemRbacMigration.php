<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "system_rbac_migration".
 *
 * @property string $version
 * @property integer $apply_time
 * @property string $aliasModel
 */
abstract class SystemRbacMigration extends \common\models\base\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'system_rbac_migration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['version'], 'required'],
            [['apply_time'], 'integer'],
            [['version'], 'string', 'max' => 180],
            [['version'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'version' => 'Version',
            'apply_time' => 'Apply Time',
        ];
    }


    
    /**
     * @inheritdoc
     * @return \common\models\SystemRbacMigrationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\SystemRbacMigrationQuery(get_called_class());
    }


}
