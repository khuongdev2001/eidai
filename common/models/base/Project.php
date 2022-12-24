<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "project".
 *
 * @property integer $id
 * @property string $_name
 * @property integer $_province_id
 * @property integer $_district_id
 * @property double $_lat
 * @property double $_lng
 * @property string $aliasModel
 */
abstract class Project extends \common\models\base\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_province_id', '_district_id'], 'integer'],
            [['_lat', '_lng'], 'number'],
            [['_name'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            '_name' => 'Name',
            '_province_id' => 'Province ID',
            '_district_id' => 'District ID',
            '_lat' => 'Lat',
            '_lng' => 'Lng',
        ];
    }


    
    /**
     * @inheritdoc
     * @return \common\models\ProjectQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\ProjectQuery(get_called_class());
    }


}
