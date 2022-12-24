<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "countries".
 *
 * @property integer $id
 * @property string $name
 * @property string $iso3
 * @property string $iso2
 * @property string $phonecode
 * @property string $capital
 * @property string $currency
 * @property string $created_at
 * @property string $updated_at
 * @property integer $flag
 * @property string $aliasModel
 */
abstract class Country extends \common\models\base\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'countries';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['flag'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['iso3'], 'string', 'max' => 3],
            [['iso2'], 'string', 'max' => 2],
            [['phonecode', 'capital', 'currency'], 'string', 'max' => 255]
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
            'iso3' => 'Iso 3',
            'iso2' => 'Iso 2',
            'phonecode' => 'Phonecode',
            'capital' => 'Capital',
            'currency' => 'Currency',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'flag' => 'Flag',
        ];
    }


    
    /**
     * @inheritdoc
     * @return \common\models\CountryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\CountryQuery(get_called_class());
    }


}
