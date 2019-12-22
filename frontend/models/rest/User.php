<?php

namespace frontend\models\rest;

use yii\helpers\Url;
use yii\web\Linkable;

class User extends \common\models\User implements Linkable
{
    public function fields()
    {
        return ['id',
            'email',
            'gibcost',
            'username',
            'test' => function($model) {
            return $model->id ==1?'это юзер 1':'';
            }];
    }

    public function extraFields()
    {
        return ['blog'];
    }

    public function getBlog()
    {
        return $this->hasOne(\common\models\Blog::className(), ['user_id' => 'id']);
    }

    public function getGibcost()
    {
        return $this->id . ' есть вот вот такая вот гибкость';
    }

    public function getLinks()
    {
        return [
            'vasia' => Url::to(['user/view', 'id' => $this->id], true),
        ];
    }
}