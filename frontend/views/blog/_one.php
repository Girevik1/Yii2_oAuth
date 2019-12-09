<?php
?>
 <div class="col-lg-12">
                <h2><?= $blog->title ?></h2>
<?= $blog->text ?>
<?= \yii\helpers\Html::a('Подробнее', ['blog/one', 'url' => $blog->url], ['class' => 'btn btn-success']); ?>
</div>