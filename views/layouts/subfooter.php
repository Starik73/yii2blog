<?php

use yii\helpers\Url;
?>
<!-- subfooter -->
<section aria-label="footer" class="subfooter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="logo">
                    <img alt="logo" src="/img/logo.png">
                </div>
                <p>
                    Создавайте свое настроение каждый день.
                </p>
                <a href="<?= Url::toRoute('site/signup'); ?>">Регистрация</a>
            </div>
            <div class="col-md-6 col-xs-12">
                <h3>
                    Контактная информация
                </h3>
                <address>
                    <span><b>ул. Корунковой, Ульяновск, РФ 432069</b></span>
                    <span><strong>Тел:</strong> <a href="tel:+79021290036"> (+7) 902 129 0036 </a></span>
                    <span><strong>EMAIL:</strong> <a href="mailto:stariktz@gmail.com">stariktz@gmail.com</a></span>
                    <span><strong>SITE:</strong> <a href="/"><?= Yii::$app->name ?></a></span>
                </address>
            </div>
            <div class="col-md-3 col-xs-12">
                <h3>
                    Моя аватарка:
                </h3>
                <div id="flickr-photo-stream">
                    <a href="<?= Url::toRoute('site/login'); ?>">
                        <img alt="image_author" class="img-responsive" src="/img/photo/me.jpg">
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subfooter end -->