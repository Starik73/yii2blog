<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BlogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-search container">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?php  echo $form->field($model, 'id') ?>

    <?php  echo $form->field($model, 'title') ?>

    <?php  echo $form->field($model, 'author') ?>

    <?php  // echo $form->field($model, 'created_at') ?>

    <?php  // echo $form->field($model, 'updated_at') ?>

    <?php  echo $form->field($model, 'h2') ?>

    <?php  echo $form->field($model, 'content') ?>

    <?php  echo $form->field($model, 'blog_img') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'keywords') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
