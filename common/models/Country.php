<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "country".
 *
 * @property int $id
 * @property string $country_name
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_name'], 'required'],
            [['country_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_name' => 'country Name',
        ];
    }

    /**
     * @return array
     */
    public static function getCountries()
    {
        return arrayHelper::map(self::Find()->All(),'id', 'country_name');
    }
}
