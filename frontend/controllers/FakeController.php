<?php

namespace frontend\controllers;

use common\models\Blog;
use Faker\Factory;

class FakeController extends \yii\web\Controller
{
    public function actionGenerate()
    {
        for ($i=0; $i < 100; $i++)
        {
            $itemsModel = new Blog();
            $faker = Factory::create();

            $itemsModel->title = $faker->name(rand(10,40));
            $itemsModel->text = $faker->text(rand(1000,2000));
            $itemsModel->url = $faker->address;
            $itemsModel->status_id = rand(1,0);
            $itemsModel->sort = rand(1,100);
            $itemsModel->user_id = rand(1,3);
            $itemsModel->save();
        }
die('stop');
    }
}
