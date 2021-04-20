<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<header class="main-header">
    <?= Html::a('<span class="logo-mini">AP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Url::to('/backend/dashboard'), ['class' => 'logo']) ?>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="<?= Url::to('/backend/dashboard') ?>" class="" data-toggle="">
                        <img src="/img/photo/me.jpg" class="user-image" alt="Astashenkov" />
                        <span class="hidden-xs">Astashenkov</span>
                    </a>
                <li class="h4">
                    <?= Html::beginForm(['/site/logout'], 'post') ?>
                    <button class="btn btn-success logout" type="submit"> 
                        Logout <b> <?=Yii::$app->user->identity->username?> </b> 
                    </button>
                    <?= Html::endForm() ?>
                </li>
                </li>
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>