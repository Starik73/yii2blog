<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form container row">
    <div class="col-lg-11 panel panel-info">

        <?php $form = ActiveForm::begin() ?>

        <div class="row panel-heading">
            <div class="col-lg-6">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
            </div>
        </div>

        <div class="row panel-body">
            <div class="col-lg-4">
                <label>Загруженное изображение (750х370):</label>
                <div class="panel-footer">
                    <?php
                    if (file_exists($model->blog_img)) { ?>
                        <img style="max-width: 100%;" src="/<?= $model->blog_img ?>" alt="альтернативный текст">
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
                <?= $form->field($model, 'h2')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'created_at')->textInput(['value' => date("d / m / Y")]) ?>
                <?= $form->field($model, 'updated_at')->textInput(['value' => date("d / m / Y")]) ?>
            </div>
        </div>
        <div class="row panel-body">
            <div class="col-lg-12">
                <?= $form->field($model, 'content')->widget(Widget::className(), [
                    'settings' => [
                        'lang' => 'ru',
                        'minHeight' => 200,
                        'imageUpload' => Url::to(['default/image-upload']),
                        'imageManagerJson' => Url::to(['/default/images-get']),
                        'plugins' => [
                            'imagemanager',
                        ],
                        'clips' => [
                            ['Lorem ipsum...', 'Lorem...'],
                            ['red', '<span class="label-red">red</span>'],
                            ['green', '<span class="label-green">green</span>'],
                            ['blue', '<span class="label-blue">blue</span>'],
                        ],
                    ],
                ]); ?>
            </div>
        </div>
        <div class="row panel-footer">
            <div class="col-lg-6">
                <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-6">
                <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>
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