<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Breadcrumbs;
$this->title = 'Зарегистрированный пользователь';
$this->params['breadcrumbs'][] = $this->title;
?>
<section aria-label="about" class="whitepage no-bottom row" id="about">
    <div class="container">
    <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
        <div class="col-md-2"></div>
        <div class="col-md-8 card">
            <div class="card-content m-3 p-3">
                <h4 class="text-center"> <b> ОСТАВЬ НАДЕЖДУ ВСЯК СЮДА ВХОДЯЩИЙ: </b> </h4>
                <hr>
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                ]); ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Имя: ') ?>
                <?= $form->field($model, 'password')->passwordInput()->label('Пароль: ') ?>

                <div class="form-group">
                    <div class="text-center">
                        <?= Html::submitButton('Вход', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
                        <?= $form->field($model, 'rememberMe')->checkbox()->label('Запомнить в системе') ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</section>