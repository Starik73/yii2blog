{use class="yii\helpers\Html"}
{use class="yii\helpers\Url"}
{use class="yii\web\YiiAsset"}
{set title='Blogs'}
<!-- section -->
<section aria-label="section-blogg" id="content">
    <div class="container">
        <div class="row">
            <!-- left content -->
            <div class="col-md-8">
                <div class="onStep" data-animation="fadeInUp" data-time="300">
                    <blockquote>
                        <p><a class="" href="{Yii::$app->homeUrl}">Home</a> / <a class=""
                                href="{Url::toRoute('blog/blogs')}">Blogs</a></p>
                    </blockquote>
                    {foreach from=$models item=$item}
                        <div class="blog-simple m-3 p-3">
                            <a href='{Url::toRoute("blog/view?id={$item->id}")}'><img class="img-responsive"
                                    src="/{$item.blog_img}" alt=""></a>
                            <div class="blog-text">
                                <h3><a href='{Url::toRoute("blog/view?id={$item->id}")}'>{$item.title}</a></h3>
                                <span class="user-post"><i class="ti-user"></i>{$item.author}</span>
                                <span class="date-post"><i class="ti-calendar"></i>{$item.updated_at}</span>
                                <p>{$item.description}</p>
                                <a class="btn-blog" href='{Url::toRoute("blog/view?id={$item->id}")}'>More Detail</a>
                            </div>
                        </div>
                    {/foreach}

                    <!-- Smaller pagination -->
                    {LinkPager::widget(['pagination' => $pages])}
                </div>
            </div>
            <!-- left content end -->

            <!-- right content -->
            <div class="col-md-4">
                <aside class="onStep" data-animation="fadeInUp" data-time="600">

                    <!-- widget -->
                    <div class="widget m-3 p-3">
                        <h5>
                           Недавние посты:
                        </h5>
                        <div class="devider-widget">
                        </div>
                        <div class="recent">
                        {foreach from=$models item=$item}
                            <div>
                                <img alt="#" class="pull-left" src="/img/blog/65x65/thumb1.jpg">
                                <h6>
                                <a href='{Url::toRoute("blog/view?id={$item->id}")}'>{$item.title}</a>
                                </h6>
                                <p>
                                    {$item.description}
                                </p>
                            </div>
                        {/foreach}
                        </div>
                    </div>
                    <!-- widget end -->

                    <!-- widget -->
                    <div class="widget m-3 p-3">
                        <h5>
                            Php программист кто это
                        </h5>
                        <div class="devider-widget">
                        </div>
                        <p>
                            Если вы хотите заниматься разработкой сайтов, эта профессия – для вас. Язык PHP – самый
                            востребованный в сфере веб-разработки. Его основы можно изучить самостоятельно, а вакансии
                            PHP-разработчиков есть во многих ИТ-компаниях и в большинстве веб-студий. Это очень
                            востребованная профессия.
                        </p>
                    </div>
                    <!-- widget end -->
                </aside>
            </div>
            <!-- right content end -->
        </div>
    </div>
</section>
<!-- section end -->