<?php
use frontend\assets\GalleryAsset;

/* @var $this yii\web\View */

GalleryAsset::register($this);
$this->registerJsFile('@web/js/gallery/script.js', ['depends' => [GalleryAsset::className()]]);

?>

<h1>jQuery Isotope</h1>

<div class="portfolioFilter">

    <a href="#" data-filter="*" class="current">All Categories</a>
    <a href="#" data-filter=".people">People</a>
    <a href="#" data-filter=".places">Places</a>
    <a href="#" data-filter=".food">Food</a>
    <a href="#" data-filter=".objects">Objects</a>

</div>

<div class="portfolioContainer">

    <div class="objects">
        <img src="/files/images/watch.jpg" alt="image">
    </div>

    <div class="people places">
        <img src="/files/images/surf.jpg" alt="image">
    </div>

    <div class="food">
        <img src="/files/images/burger.jpg" alt="image">
    </div>

    <div class="people places">
        <img src="/files/images/subway.jpg" alt="image">
    </div>

    <div class="places objects">
        <img src="/files/images/trees.jpg" alt="image">
    </div>

    <div class="people food objects">
        <img src="/files/images/coffee.jpg" alt="image">
    </div>

    <div class="food objects">
        <img src="/files/images/wine.jpg" alt="image">
    </div>

    <div class="food">
        <img src="/files/images/salad.jpg" alt="image">
    </div>

</div>
