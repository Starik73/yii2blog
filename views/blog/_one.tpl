<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- section -->
<section aria-label="section-blogg" id="content">
    <div class="container">
        <div class="row">

            <!-- left content -->
            <div class="col-md-8">
                <div class="onStep" data-animation="fadeInUp" data-time="300">

                    <!-- article -->
                    <article>
                        <div class="blog-simple">
                            <a href="#"><img class="img-responsive" src="/img/blog/cover_bg_2.jpg" alt=""></a>
                            <div class="blog-text">
                                <h3><a href="" #>Web Design for the Future</a></h3>
                                <span class="user-post"><i class="ti-user"></i>Jhony Dono</span>
                                <span class="date-post"><i class="ti-calendar"></i>Sep. 15th</span>
                                <span class="comment"><a href=""><i class="ti-comment"></i>21</a></span>
                                <p>Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet,
                                    ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad
                                    qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam
                                    persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam
                                    salutatus sed. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>

                                <blockquote>
                                    <p>The world is a dangerous place to live; not because of the people who are evil,
                                        but because of the people who don't do anything about it.</p>
                                    <small>by <cite>Albert Einstein</cite></small>
                                </blockquote>

                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,
                                    consectetur
                                </p>

                            </div>
                        </div>
                    </article>
                    <!-- article end -->

                    <!-- comment blog -->
                    <div id="blog-comment">
                        <h5><span>Comments (5)</span></h5>

                        <ul>
                            <li>
                                <div class="avatar"><img alt="img" src="/img/avatar.jpg">
                                </div>
                                <div class="comment-info">
                                    <span class="c-name">John Smith</span>
                                    <span class="c-date"><i class="ti-calendar"></i>30 Jan 2017</span>
                                    <span class="c-reply"><a class="link" href="#">Reply</a></span>
                                </div>
                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                <!-- sub comment -->
                                <ul>
                                    <li>
                                        <div class="avatar"><img alt="img" src="/img/avatar.jpg">
                                        </div>
                                        <div class="comment-info">
                                            <span class="c-name">John Smith</span>
                                            <span class="c-date"><i class="ti-calendar"></i>30 Jan 2017</span>
                                            <span class="c-reply"><a class="link" href="#">Reply</a></span>
                                        </div>
                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                            quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                            explicabo.</div>
                                    </li>
                                </ul>
                                <!-- sub comment end -->
                            </li>
                        </ul>


                        <ul>
                            <li>
                                <div class="avatar"><img alt="img" src="/img/avatar.jpg">
                                </div>
                                <div class="comment-info">
                                    <span class="c-name">John Smith</span>
                                    <span class="c-date"><i class="ti-calendar"></i>30 Jan 2017</span>
                                    <span class="c-reply"><a class="link" href="#">Reply</a></span>
                                </div>
                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                            </li>
                        </ul>

                        <ul>
                            <li>
                                <div class="avatar"><img alt="img" src="/img/avatar.jpg">
                                </div>
                                <div class="comment-info">
                                    <span class="c-name">John Smith</span>
                                    <span class="c-date"><i class="ti-calendar"></i>30 Jan 2017</span>
                                    <span class="c-reply"><a class="link" href="#">Reply</a></span>
                                </div>
                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                            </li>
                        </ul>

                        <ul>
                            <li>
                                <div class="avatar"><img alt="img" src="/img/avatar.jpg">
                                </div>
                                <div class="comment-info">
                                    <span class="c-name">John Smith</span>
                                    <span class="c-date"><i class="ti-calendar"></i>30 Jan 2017</span>
                                    <span class="c-reply"><a class="link" href="#">Reply</a></span>
                                </div>
                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                            </li>
                        </ul>

                        <div id="comment-form-wrapper">
                            <h6>Leave a Comment</h6>
                            <form id="commentform" name="form1" method="post" action="#">
                                <input type="text" name="name" id="namecom" placeholder="name" />
                                <input type="text" name="email" id="emailcom" placeholder="email" />
                                <textarea cols="10" rows="10" name="message" id="messagecom"
                                    placeholder="Comment"></textarea>
                                <div id="mail_success" class="success"> Thanks for your comment</div>
                                <div id="mail_failed" class="error">Error, comment failed</div>
                                <button id="sendcomment" class="btn" type="submit">Comment</button>
                            </form>
                        </div>
                    </div>
                    <!-- comment blog end -->

                </div>
            </div>
            <!-- left content end -->

            <!-- right content -->
            <div class="col-md-4">
                <aside class="onStep" data-animation="fadeInUp" data-time="600">

                    <!-- widget -->
                    <div class="widget">
                        <form role="search">
                            <div class="input-group">
                                <input type="text" id="search" class="form-control" placeholder="SEARCH">
                                <div class="input-group-btn">
                                    <button type="submit"><span class="icon"><i
                                                class="fa fa-search"></i></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- widget end -->

                    <!-- widget -->
                    <div class="widget">
                        <h5>
                            Recent posts
                        </h5>

                        <div class="devider-widget">
                        </div>

                        <div class="recent">
                            <div>
                                <img alt="#" class="pull-left" src="/img/blog/65x65/thumb1.jpg">
                                <h6>
                                    <a class="link" href="#">Lorem ipsum dolor sit</a>
                                </h6>

                                <p>
                                    Mazim alienum appellantur eu cu ullum officiis pro pri
                                </p>
                            </div>

                            <div>
                                <a class="link" href="#"><img alt="#" class="pull-left"
                                        src="/img/blog/65x65/thumb2.jpg"></a>
                                <h6>
                                    <a class="link" href="#">Maiorum ponderum eum</a>
                                </h6>

                                <p>
                                    Mazim alienum appellantur eu cu ullum officiis pro pri
                                </p>
                            </div>

                            <div>
                                <a class="link" href="#"><img alt="#" class="pull-left"
                                        src="/img/blog/65x65/thumb3.jpg"></a>
                                <h6>
                                    <a class="link" href="#">Et mei iusto dolorum</a>
                                </h6>

                                <p>
                                    Mazim alienum appellantur eu cu ullum officiis pro pri
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- widget end -->

                    <!-- widget -->
                    <div class="widget">
                        <h5>
                            Tags
                        </h5>

                        <div class="devider-widget">
                        </div>

                        <div class="tags">
                            <div>
                                <a class="link" href="#">Photography</a>
                            </div>

                            <div>
                                <a class="link" href="#">Trends</a>
                            </div>

                            <div>
                                <a class="link" href="#">Interactive</a>
                            </div>

                            <div>
                                <a class="link" href="#">Personal</a>
                            </div>

                            <div>
                                <a class="link" href="#">Responsive</a>
                            </div>

                            <div>
                                <a class="link" href="#">Creative</a>
                            </div>

                            <div>
                                <a class="link" href="#">Design</a>
                            </div>

                            <div>
                                <a class="link" href="#">website</a>
                            </div>

                            <div>
                                <a class="link" href="#">application</a>
                            </div>
                        </div>
                    </div>
                    <!-- widget end -->

                    <!-- widget -->
                    <div class="widget">
                        <h5>
                            About Us
                        </h5>

                        <div class="devider-widget">
                        </div>

                        <p>
                            Proin hendrerit eget tellus sit amet vestibulum. Nullam a tincidunt leo. Sed eget sem
                            scelerisque, malesuada lectus sed, facilisis sapien. Pellentesque quis ullamcorper est,
                            vitae
                            condimentum enim. Phasellus suscipit eu lacus finibus rhoncus. Maecenas sed lacus aliquam,
                            vehicula sapien ac, cursus erat. Aenean vel erat a urna efficitur varius.
                        </p>
                    </div>
                    <!-- widget end -->
                </aside>
            </div>
            <!-- right content end -->

        </div>
    </div>
</section>
<!-- section -->