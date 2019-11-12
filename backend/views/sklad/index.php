<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use common\models\Product;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SkladSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sklads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sklad-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sklad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'cost', 'filter' => Product::getList(),
                'value' => 'ProductCost' ],
            'id',
            'title',
            'address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
