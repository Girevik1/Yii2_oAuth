<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sklad */

$this->title = 'Create Sklad';
$this->params['breadcrumbs'][] = ['label' => 'Sklads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sklad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
