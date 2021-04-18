<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\backend\AppAsset;
use app\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse',
            ],
        ]);
        $menuItems[] = '<li class="h4">'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout USER: <b>' . Yii::$app->user->identity->username . '</b>. User role = ' . Yii::$app->user->identity->user_role,
                ['class' => 'btn btn-block logout']
            )
            . Html::endForm()
            . '</li>';
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1 p-3 text-right" style="border-right: 2px solid gray">
                    <?php if (Yii::$app->user->identity->user_role > 4) { ?>
                        <div class="btn-group btn-group-vertical" role="group">
                            <a href="<?= Url::toRoute('/backend/banner/index') ?>" class="btn btn-default">Banners</a>
                            <a href="<?= Url::toRoute('/backend/blog/index') ?>" class="btn btn-default">Blogs</a>
                            <a href="<?= Url::toRoute('/backend/filemanager') ?>" class="btn btn-default">FileManager</a>
                            <a href="<?= Url::toRoute('/backend/blog/index') ?>" class="btn btn-default">Blogs</a>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-11">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>
                    <?= $content ?>
                </div>
            </div>
        </div>

        <footer class="footer bg-primary">
            <div class="container">
                <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>