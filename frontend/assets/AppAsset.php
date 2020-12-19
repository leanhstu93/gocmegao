<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/jquery.fancybox.css',
        'css/style.css',
        'css/jquery-ui.min.css',
        'css/responsive.css',
//        'libs/slick/slick.css',
//        'libs/fontawesome/css/all.css',
//        'libs/fontawesome/css/fontawesome.css',
//        'css/style.css',
    ];
    public $js = [
//        'js/jquery.js',
        'js/tether.min.js',
        'js/bootstrap.min.js',
        'js/jquery.waypoints.js',
        'js/jquery.circlechart.js',
        'js/easing.js',
        'js/jquery.flexslider-min.js',
        'js/owl.carousel.js',
        'js/jquery-ui.min.js',
        'js/jquery.mCustomScrollbar.js',
        'js/jquery.countdown.js',
        'js/main.js',
        'js/jquery.fancybox.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
