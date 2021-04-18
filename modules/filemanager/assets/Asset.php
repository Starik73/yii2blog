<?php
namespace DeLuxis\Yii2SimpleFilemanager\assets;

use yidas\yii\fontawesome\FontawesomeAsset;
use app\assets\backend\AppAsset;

class Asset extends AppAsset
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        FontawesomeAsset::class
    ];
}