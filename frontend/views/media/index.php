<?php
/* @var $this yii\web\View */

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
            <div class="card">
                <img src="<?= Yii::getAlias('@web').'/'.$media->filepath; ?>" alt="" class="card-mg-top" width="100%">
                <div class="card-body">
                    <h5 class="card-title"><?php $media->filename; ?></h5>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>

