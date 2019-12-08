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
        'css/site.css',
         'css/util.css',
        'css/main.css',
        'css/site.css',
        'vendor/daterangepicker/daterangepicker.css',
        'vendor/select2/select2.min.css',
        'vendor/animsition/css/animsition.min.css',
        'vendor/css-hamburgers/hamburgers.min.css',
       'fonts/Linearicons-Free-v1.0.0/icon-font.min.css',
        'vendor/bootstrap/css/bootstrap.min.css',
        'fonts/font-awesome-4.7.0/css/font-awesome.min.css',
        'vendor/animate/animate.css',
       'vendor/css-hamburgers/hamburgers.min.css',
       //
       "https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css",
  "assets/css/bootstrap.min.css",
  "assets/css/paper-dashboard.css?v=2.0.0",
  "assets/demo/demo.css",

    ];
    public $js = [
        'vendor/jquery/jquery-3.2.1.min.js',

           'vendor/animsition/js/animsition.min.js',

   'vendor/bootstrap/js/popper.js',
   'vendor/bootstrap/js/bootstrap.min.js',

   'vendor/select2/select2.min.js',

   'vendor/daterangepicker/moment.min.js',
   'vendor/daterangepicker/daterangepicker.js',

   'vendor/countdowntime/countdowntime.js',

   'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
