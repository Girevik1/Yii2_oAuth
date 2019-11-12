<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 25.10.2019
 * Time: 17:08
 */

namespace console\controllers;


class Test extends \yii\console\Controller
{
    public function actionSend()
    {
        echo "hello";
        die();
    }
}