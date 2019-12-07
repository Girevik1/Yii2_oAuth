<?php

namespace common\models;

use Yii;
use common\models\Sklad;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $sklad_id
 * @property string $cost
 * @property string $type_id
 * @property string $text
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sklad_id', 'type_id'], 'required'],
            [['sklad_id'], 'integer'],
            [['text'], 'string'],
            [['cost', 'type_id'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sklad_id' => 'Sklad ID',
            'cost' => 'Cost',
            'type_id' => 'Type ID',
            'text' => 'Text',
        ];
    }
    public static function getTypeList ()
    {
        return [
            'первый',
            'второй',
            'третий',
            'четвертый'
        ];
    }

    public function getSklad()
    {
        return $this->hasOne(Sklad::className(), ['id' => 'sklad_id']);
    }

    public function getSkladName()
{
    return (isset($this->sklad)) ? $this->sklad->title :' не задан';
}

    public function getTypeName()
    {
        $list = $this->getTypeList();
        return $list[$this->type_id];
    }

    public static function getList()
    {
        return arrayHelper::map(self::Find()->All(),'id', 'cost');
    }
}
