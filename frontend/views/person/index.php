<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'People';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create person', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'fullName',
            //'first_name',
            //'last_name',
            //'country_id',
            ['attribute' => 'country_id', 'value' => 'countryName', 'filter' => \common\models\Country::getCountries()],
            //['attribute' => 'sklad_id', 'value' => 'skladName' ],
            //'parent_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
