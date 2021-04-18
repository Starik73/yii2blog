<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<section aria-label="about" class="whitepage no-bottom" id="about">
    <div class="container">
        <div class="row">
            <div class="site-error">

                <h1><?= Html::encode($this->title) ?></h1>

                <div class="alert alert-danger">
                    <?= nl2br(Html::encode($message)) ?>
                </div>

                <p class="alert alert-primary">
                    The above error occurred while the Web server was processing your request.
                </p>
                <p class="alert alert-primary">
                    Please contact us if you think this is a server error. Thank you.
                </p>

            </div>
        </div>
    </div>
</section>