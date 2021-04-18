{set title="Форма обратной связи"}
{use class="yii\helpers\Url"}
{use class="yii\helpers\Html"}
{use class="yii\widgets\Breadcrumbs"}
{use class="yii\bootstrap\ActiveForm"}
<!-- section contact -->
<section aria-label="contact" class="whitepage">
    <div class="container">
        <div class="row">
        {Breadcrumbs::widget(['links' => $breadcrumbs])}

            <div class="no-gutter">

                <!-- contact form -->
                <div class="col-md-8 col-sm-7 m-2">
                    <div class="panel panel-default well">
                        <h1>Оставить сообщение:</h1>

                        {if Yii::$app->session->hasFlash('contactFormSubmitted')}
                            <div class="alert alert-success">
                                Спасибо за обратную связь. При необходимости - мы с вами свяжемся.
                            </div>
                            <p>
                                Note that if you turn on the Yii debugger, you should be able
                                to view the mail message on the mail panel of the debugger.
                                {Yii::$app->mailer->useFileTransport}
                                Because the application is in development mode, the email is not sent but saved as
                                a file under
                                <code>
                                    {Yii::getAlias(Yii::$app->mailer->fileTransportPath)}
                                </code>.
                                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                                application component to be false to enable email sending.
                            </p>
                        {else}
                            <p>
                                Если есть что сказать - пишите :)
                            </p>
                            <div class="row">
                                <div class="col-lg-10" style="padding: auto;">
                                    <div class="form-group">
                                      {$form = ActiveForm::begin(['id' => 'contact-form'])}
                                        {$form->field($model, 'name')->textInput(['autofocus' => true])}
                                        {$form->field($model, 'email')}
                                        {$form->field($model, 'subject')}
                                        {$form->field($model, 'body')->textarea(['rows' => 6])}
                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                            <div class="btn-group" role="group">
                                                {Html::submitButton('Отправить', ['class' => 'btn-blog', 'name' => 'contact-button'])}
                                            </div>
                                        </div>
                                    </div>
                                    {$form = ActiveForm::end()}
                                </div>
                            </div>
                        {/if}
                    </div>
                </div>
                <!-- contact form end -->

                <!-- address -->
                <div class="col-md-3 col-sm-5">
                    <div class="wrapaddres onStep" data-animation="fadeInRight" data-time="600">
                        <address>
                            <h4><strong>Контакты:</strong></h4>
                            <span><strong>Тел:</strong> <a href="tel:+79021290036"> (+7) 902 129 0036</a></span>
                            <span><strong>EMAIL:</strong> <a
                                    href="mailto:companyname@gmail.com">stariktz@gmail.com</a></span>
                            <span><strong>SITE:</strong> <a href="/">
                                    {Yii::$app->name}
                                </a></span>
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