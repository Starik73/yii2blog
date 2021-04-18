<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Breadcrumbs;

$this->title = 'Зарегистрированный пользователь';
$this->params['breadcrumbs'][] = $this->title;
?>
<section aria-label="about" class="whitepage no-bottom" id="about">
    <div class="container">
        <div class="card">
            <div class="card-content">
                <h1><?= Html::encode($this->title) ?></h1>
                <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>

                <p class="alert alert-info">Пожалуйста - заполните эти поля для входа в систему:</p>

                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-2 control-label'],
                    ],
                ]); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Имя: ') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('Пароль: ') ?>

                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                ])->label('Запомнить в системе') ?>

                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Вход', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>