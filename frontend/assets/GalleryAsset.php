<?php
 namespace frontend\assets;

 use yii\web\AssetBundle;

 class GalleryAsset extends AssetBundle
 {
     public $css = [
        'css/gallery/style.css',
     ];

     public $js = [
         'js/isotope/jquery.isotope.js',
     ];

     public $depends = [
         'yii\web\JqueryAsset',
     ];
 }
