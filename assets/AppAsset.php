<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animated-on3step.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/owl.transitions.css',
        'css/on3step-style.css',
        'css/queries-on3step.css',
        'css/themify-icons.css',
        'font-awesome/css/font-awesome.css',
        'css/fullscreen.css',
        'rs-plugin/css/settings.css',
        'css/rev-settings.css',
        'css/bootstrap.min.css',
        'css/site.css',
    ];
    public $js = [
        'js/map-1.js',
        'js/map.js',
        'plugin/pluginson3step.js',
        'rs-plugin/js/jquery.themepunch.revolution.min.js',
        'js/on3step.js',
        'js/plugin-set.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
