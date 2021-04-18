<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form container row">
    <div class="col-lg-11 panel panel-info">

        <?php $form = ActiveForm::begin() ?>

        <div class="row panel-heading">
            <div class="col-lg-6">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
            </div>
        </div>

        <div class="row panel-body">
            <div class="col-lg-4">
                <label>Загруженное изображение (960x450):</label>
                <div class="panel-footer">
                    <?php
                    if (file_exists($model->banner_url)) { ?>
                        <img style="max-width: 100%;" src="/<?= $model->banner_url ?>" alt="альтернативный текст">
                    <?php
                    } else {
                        echo ('Необходимо загрузить изображение');
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <?= $form->field($model, 'image')->widget(FileInput::classname(), [
                        'options' => ['accept' => 'image/*'],
                    ]) ?>
                </div>
            </div>

            <div class="col-lg-4">
                <?= $form->field($model, 'alt')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                <?= $form->field($model, 'created_at')->textInput(['value' => date("d / m / Y")]) ?>
                <?= $form->field($model, 'updated_at')->textInput(['value' => date("d / m / Y")]) ?>
            </div>
        </div>
    </div>
    <div class="col-lg-1">
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>