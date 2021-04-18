<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link href="/img/favicon.png" rel="icon" sizes="32x32" type="image/png">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <?php
    include_once 'header.php';
    include_once 'nav.php';
    ?>
     
 
    <div class="">
        <?php // Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
        <?php // Alert::widget() ?>

        <?= $content ?>

    </div>

    <!-- ScrolltoTop -->
    <div id="totop">
        <span class="ti-angle-up"></span>
    </div>

    </div>
    <!-- content wraper end -->

    <!-- Subscribe start -->
    <div class="white-popup-block mfp-hide animbounceInDown" data-time="0" id="subwrap">
        <h5>
            PLEASE FILL YOUR EMAIL BELOW
        </h5>
        <div class="space-half">
        </div>
        <form action="subscribe.php" id="subscribe" method="post" name="subscribe">
            <input class="subscribfield subscribeemail" id="subscribeemail" name="subscribeemail" type="text"> <button class="btn-form" id="submit-2" type="submit">Subscribe</button>
        </form>
        <div class="subscribesuccess">
            Thank you for fill your email
        </div>
    </div>
    <!-- Subscribe end -->
    <?php
    include_once 'subfooter.php';
    include_once 'footer.php';
    ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>