<?php

use yii\helpers\Url;
?>
<!-- nav -->
<div class="navbar navbar-default navbar-fixed-top" style="background-color: #585858">
    <div class="container">
        <div class="row">
            <!-- menu mobile display -->
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <!-- logo -->
            <a class="navbar-brand" href="<?= Yii::$app->homeUrl ?>">
                <img alt="logo" src="/img/logo.png">
            </a>
            <!-- mainmenu start -->
            <div class="menu-init" id="main-menu">
                <nav id="menu-center nav-tabs">
                    <ul>
                        <li>
                            <a class="actived" href="<?= Yii::$app->homeUrl ?>">Главная</a>
                        </li>
                        <li>
                            <a href="<?= Url::toRoute('site/about'); ?>">Информация</a>
                        </li>
                        <li>
                            <a href="<?= Url::toRoute('site/project'); ?>">Работы</a>
                        </li>
                        <li>
                            <a href="<?= Url::toRoute('blog/blogs'); ?>">Блог</a>
                            <ul>
                                <li><a href="<?= Url::toRoute('blog/view?id=1'); ?>">Статья №1</a></li>
                                <li><a href="<?= Url::toRoute('site/signup'); ?>">Регистрация</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= Url::toRoute('site/contact'); ?>">Обратная связь</a>
                        </li>
                        <li class="btn"><a class="" href="<?= Url::toRoute('backend/') ?>">Админка</a></li>
                    </ul>
                </nav>
            </div>
            <!-- mainmenu end -->
        </div>
    </div>
    <!-- container -->
</div>
<!-- nav end -->