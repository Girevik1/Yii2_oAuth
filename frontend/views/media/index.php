<?php
/* @var $this yii\web\View */
/* @var $medias array */

use yii\helpers\Html;

$this->title = "Галерея";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Загрузить', ['upload'], ['class' => 'btn btn-primary']) ?>
</p>

<div class="row">
    <?php
    foreach ($medias as $media) {
        ?>
        <div class="col-md-3">
            <div class="card" style="height:255px; width:200px">
                <img src="<?= Yii::getAlias('@web').'/'.$media->filepath; ?>" alt="" class="card-img-top" width="100%">
                <div class="card-body">
                    <h5 class="card-title" style="word-wrap: break-word"><?php $media->filename; ?></h5>
<div class="text-right">
    <?php
    echo Html::a('Download', ['download', 'id'=>$media->id], ['class'=>'btn btn-primary']);
    echo "&nbsp;";
    echo Html::a('Delete', ['delete', 'id'=>$media->id], ['class'=>'btn btn-danger']);
    ?>
</div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>

