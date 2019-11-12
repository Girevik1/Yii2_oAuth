<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sklad".
 *
 * @property int $id
 * @property string $title
 * @property string $address
 */
class Sklad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sklad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address'], 'required'],
            [['title'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'address' => 'Address',
        ];
    }

    public static function getList()
    {
        return arrayHelper::map(self::Find()->All(),'id', 'title');
    }

    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['sklad_id' => 'id']);
    }

    public function getProductCost()
    {
        return (isset($this->product)) ? $this->product->cost :' не задан';
    }
}
