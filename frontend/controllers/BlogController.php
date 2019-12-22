<?php

namespace frontend\controllers;

use frontend\controllers\behaviors\AccessBehavior;
use common\models\Blog;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\filters\VerbFilter;

/**
 * BlogController implements the CRUD actions for Blog model.
 */
class BlogController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            AccessBehavior::className(),
        ];
    }


    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $blogs = Blog::find()->with('author')->andWhere(['status_id' => 1])->orderBy('sort');
        $dataProvider = new ActiveDataProvider([
            'query' => $blogs,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('all', ['dataProvider' => $dataProvider]);
    }


    /**
     * @param $url
     * @return string
     * @throws ForbiddenHttpException
     */
    public function actionOne($url)
    {
        if($blog = Blog::find()->andWhere(['url' => $url])->one()) {
            return $this->render('one', ['blog' => $blog]);
        }
        throw new ForbiddenHttpException('Упс, нет такого блога');
    }


}
