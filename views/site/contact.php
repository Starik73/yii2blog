<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Оставить сообщение:';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- section contact -->
<section aria-label="contact" class="whitepage">
  <div class="container">
    <div class="row">

      <div class="no-gutter">

        <!-- contact form -->
        <div class="col-md-8 col-sm-7 m-2">
          <div class="panel panel-default well">
            <h1><?= Html::encode($this->title) ?></h1>

            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')) : ?>
              <div class="alert alert-success">
                Thank you for contacting us. We will respond to you as soon as possible.
              </div>
              <p>
                Note that if you turn on the Yii debugger, you should be able
                to view the mail message on the mail panel of the debugger.
                <?php if (Yii::$app->mailer->useFileTransport) : ?>
                  Because the application is in development mode, the email is not sent but saved as
                  a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                  Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                  application component to be false to enable email sending.
                <?php endif; ?>
              </p>
            <?php else : ?>
              <p>
                Если есть что сказать - пишите :)
              </p>
              <div class="row">
                <div class="col-lg-10" style="padding: auto;">
                  <div class="form-group">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'subject') ?>
                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                      <div class="btn-group" role="group">
                        <?= Html::submitButton('Submit', ['class' => 'btn-blog', 'name' => 'contact-button']) ?>
                      </div>
                    </div>
                  </div>
                  <?php ActiveForm::end(); ?>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <!-- contact form end -->

        <!-- address -->
        <div class="col-md-3 col-sm-5">
          <div class="wrapaddres onStep" data-animation="fadeInRight" data-time="600">
            <address>
              <h4><strong>Контакты:</strong></h4>
              <span><strong>Тел:</strong> (+7) 902 129 0036</span>
              <span><strong>EMAIL:</strong> <a href="mailto:companyname@gmail.com">stariktz@gmail.com</a></span>
              <span><strong>SITE:</strong> <a href="/"><?=Yii::$app->name?></a></span>
            </address>
            <div id="flickr-photo-stream">
                    <img alt="image_author" class="img-responsive" src="/img/photo/me.jpg">
                    <div class="clearfix">
                    </div>
                </div>
          </div>
        </div>
        <!-- address end -->
      </div>


    </div>
  </div>
</section>
<!-- section contact end -->