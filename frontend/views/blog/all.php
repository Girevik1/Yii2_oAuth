<?php
use yii\widgets\ListView;


/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */

$blog = $dataProvider->getModels();
?>

<div class="body-content">

    <?=
    ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_one',
    ]) ?>

</div>
