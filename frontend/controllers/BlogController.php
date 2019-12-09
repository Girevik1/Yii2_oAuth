<?php

namespace frontend\controllers;

use frontend\controllers\behaviors\AccessBehavior;
use Yii;
use common\models\Blog;
use backend\models\search\BlogSearch;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
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
     * @return string
     */
    public function actionIndex()
    {
        $blogs = Blog::find()->andWhere(['status_id' => 1])->orderBy('sort')->all();
        return $this->render('all', ['blogs' => $blogs]);
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
