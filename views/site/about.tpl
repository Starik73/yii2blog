{set title=$title}
{use class="yii\helpers\Url"}
{use class="yii\helpers\Html"}
{use class="yii\widgets\Breadcrumbs"}
{use class="yii\bootstrap\ActiveForm"}
<!-- section about -->
<section aria-label="about" class="whitepage no-bottom" id="about">
    <div class="container">
        <div class="row">
            {Breadcrumbs::widget(['links' => $breadcrumbs])}
            <div class="col-md-5 col-xs-11">
                <div class="onStep" data-animation="fadeInUp" data-time="300">
                    <article>
                        <h2>
                            Программист
                        </h2>
                        <span class="devider-cont"></span>
                        <p>
                            <em>
                                Программи́ст — специалист, занимающийся программированием, то есть созданием
                                компьютерных программ.
                            </em>
                            В настоящее время, как и ранее широко применяется классификация программистов на прикладных
                            и системных. Прикладным называется программист, программы которого предназначены для решения
                            прикладной задачи, удовлетворяющей потребности конечного пользователя и, по замыслу
                            классификации, лежащей вне компьютерной сферы. Системным называется программист, программы
                            которого предназначены для обеспечения работы компьютера и используются другими
                            компьютерными специалистами.
                        </p>
                    </article>
                </div>
                <div class="space-half"></div>
            </div>
            <!-- text end -->
            <!-- col -->
            <div class="col-md-7 col-xs-11">
                <div class="onStep" data-animation="fadeInUp" data-time="600">
                    <div class="filter-wraper">
                        <ul class="animfadeInUpBig" data-time="1200" id="filters">
                            <li class="filt-serv selected" data-filter=".passion">
                                HTML5
                            </li>
                            <li class="space">•
                            </li>
                            <li class="filt-serv" data-filter=".honcap">
                                JavaScript
                            </li>
                            <li class="space">•
                            </li>
                            <li class="filt-serv" data-filter=".webuild">
                                CSS (Cascading Style Sheets)
                            </li>
                        </ul>
                    </div>
                    <div class="space-half">
                    </div>
                </div>
                <div class="onStep" data-animation="fadeInUp" data-time="900" id="services">
                    <div class="service passion">
                        <img alt="img" class="img-responsive"  src="/img/logos/html5.jpg">
                        <h4>
                            HTML5
                        </h4>
                        <p>
                            HTML5 — это не продолжатель языка разметки гипертекста, а новая открытая платформа,
                            предназначенная для создания веб-приложений использующих аудио, видео, графику, анимацию и
                            многое другое.
                        </p>
                    </div>
                    <div class="service honcap">
                        <img alt="img" class="img-responsive" src="/img/logos/js.jpg">
                        <h4>
                            JavaScript
                        </h4>
                        <p>
                            JavaScript — это язык, программы на котором можно выполнять в разных средах. В нашем случае
                            речь идёт о браузерах и о серверной платформе Node.js. Если до сих пор вы не написали ни
                            строчки кода на JS и читаете этот текст в браузере, на настольном компьютере, это значит,
                            что вы буквально в считанных секундах от своей первой JavaScript-программы.
                        </p>
                    </div>
                    <div class="service webuild">
                        <img alt="img" class="img-responsive"  src="/img/logos/css.jpg">
                        <h4>
                            CSS (Cascading Style Sheets)
                        </h4>
                        <p>
                            CSS (Cascading Style Sheets) — язык таблиц стилей, который позволяет прикреплять стиль
                            (например, шрифты и цвет) к структурированным документам (например, документам HTML и
                            приложениям XML).
                        </p>
                    </div>
                </div>
            </div>
            <!-- col end -->
        </div>
    </div>
</section>
<!-- section about end -->

<section aria-label="brands" class="brand-page" id="brand">
    <div class="container">
        <div class="row">
            <!-- brands-->
            <div class="container">
                <div class="row">

                    <div class="owl-carousel" id="owl-brand">

                        <div class="item">
                            <img alt="background" src="/img/ourclients/1.png">
                        </div>

                        <div class="item">
                            <img alt="background" src="/img/ourclients/2.png">
                        </div>

                        <div class="item">
                            <img alt="background" src="/img/ourclients/3.png">
                        </div>

                        <div class="item">
                            <img alt="background" src="/img/ourclients/4.png">
                        </div>

                        <div class="item">
                            <img alt="background" src="/img/ourclients/5.png">
                        </div>

                        <div class="item">
                            <img alt="background" src="/img/ourclients/6.png">
                        </div>

                        <div class="item">
                            <img alt="background" src="/img/ourclients/1.png">
                        </div>

                        <div class="item">
                            <img alt="background" src="/img/ourclients/2.png">
                        </div>

                        <div class="item">
                            <img alt="background" src="/img/ourclients/3.png">
                        </div>

                        <div class="item">
                            <img alt="background" src="/img/ourclients/4.png">
                        </div>

                        <div class="item">
                            <img alt="background" src="/img/ourclients/5.png">
                        </div>

                        <div class="item">
                            <img alt="background" src="/img/ourclients/6.png">
                        </div>

                    </div>

                </div>
            </div>
            <!-- brands end-->
        </div>
    </div>
</section>