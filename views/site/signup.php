<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Breadcrumbs;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- section contact -->
<section aria-label="contact" class="whitepage">
    <div class="container">
        <div class="row">
            <div class="site-signup">
                <div class="row">
                <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 bg-info">
                        <h1><?= Html::encode($this->title) ?></h1>
                        <p>Заполните следующие поля для регистрации:</p>
                        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Ваше имя:') ?>
                        <?= $form->field($model, 'email')->label('Ваш адрес электронной почты:') ?>
                        <?= $form->field($model, 'password')->passwordInput()->label('Придумайте пароль:') ?>
                        <div class="form-group">
                            <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>