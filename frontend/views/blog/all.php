<?php

use yii\widgets\ListView;


/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */

$blog = $dataProvider->getModels();
?>

<div class="content">
    <div class="row">
        <?=
        ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_one',
        ]) ?>
    </div>
</div>
