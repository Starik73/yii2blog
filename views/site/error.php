<?php

use yii\helpers\Html;

$this->title = $name;
?>
<section aria-label="about" class="whitepage no-bottom" id="about">
    <div class="container">
        <div class="row">
            <div class="site-error text-center">
                <h1><?= Html::encode($this->title) ?></h1>
                <div class="alert alert-primary">
                    <?= nl2br(Html::encode($message)) ?>
                </div>
                <p class="alert">
                    <a href="<?= Yii::$app->homeUrl ?>" class="btn"> Go home </a>
                </p>
            </div>
        </div>
    </div>
</section>