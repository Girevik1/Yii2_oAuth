<?php
/* @var $this yii\web\View */
/* @var $blogs common\models\Blog */
?>

<div class="body-content">
        <div class="row">
    <?php foreach ($blogs as $blog) : ?>
            <div class="col-lg-12">
                <h2><?= $blog->title ?></h2>
                    <?= $blog->text ?>
                <?= \yii\helpers\Html::a('Подробнее', ['blog/one', 'url' => $blog->url], ['class' => 'btn btn-success']); ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
