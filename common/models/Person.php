<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $country_id
 * @property string $parent_id
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'country_id'], 'required'],
            [['last_name', 'first_name'], 'string', 'max' => 255],
            [['parent_id'], 'string', 'max' => 50],
            [['country_id'], 'integer']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'country_id' => 'Страна',
            'parent_id' => 'Parent ID',
            'fullName' => 'ФИО',
        ];
    }


    /* Геттер для полного имени человека */
    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name;
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    public function getCountryName()
    {
        return (isset($this->country)) ? $this->country->country_name :' не задан';
    }
}
