{use class="yii\helpers\Url"}
{use class="yii\widgets\Breadcrumbs"}
<!-- services -->
<section class="projects-detail whitepage">
    <div class="onStep" data-animation="fadeInUp" data-time="300">
        <div class="container">
            <div class="row">
            {Breadcrumbs::widget(['links' => $breadcrumbs])}
                <!-- detail img -->
                <div class="col-md-12">
                    <div id="detailpro" class="owl-carousel">
                    {foreach from=$models item=banner}
                        <div class="item"><img src="/{$banner->banner_url}" alt="{$banner->alt}"></div>
                    {/foreach}
                    </div>
                </div>
                <!-- detail img end -->

                <!-- text detail -->
                <div class="col-md-8">
                    <h2>Constructions Overview</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magnaaliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nullapariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa.Lorem ipsum dolor sit amet, consecteturadipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimveniam, quis nstrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolorin
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa cupidatat non proident, sunt in culpa.Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                        <br><br>
                        cupidatat non proident, sunt in culpa cupidatat non proident, sunt in culpa.Lorem ipsum dolor
                        sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                    </p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa cupidatat non proident, sunt in
                        culpa.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore.
                        cupidatat non proident, sunt in culpa cupidatat non proident, sunt in culpa.Lorem ipsum dolor
                        sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                    </p>
                </div>

                <div class="col-md-4">
                    <div class="detaillist">
                        <h2>Projects Detail</h2>
                        <span><strong>Categories:</strong> Architec, Renovation, Tilling</span>
                        <span><strong>Client:</strong> Johny Dono</span>
                        <span><strong>Date:</strong> Apr 05, 2017</span>
                        <span><strong>Budget:</strong> $ 8,00,000</span>
                        <span><strong>Duration:</strong> 6 Months</span>
                        <span><strong>Tags:</strong> Commercial</span>
                    </div>
                </div>
                <!-- text detail end -->

            </div>
        </div>
    </div>
</section>
<!-- services end -->

<!-- Related projects -->
<div class="container">
    <div class="row">

        <div id="owl-project" class="owl-carousel">

            <div class="item">
                <div class="gal-home">
                    <a href="project-detail.html">
                        <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="/img/gallery-home/img1.jpg">
                            <div class="overlay">
                                <h3>FONDATION BUILDING
                                    <span class="devider"></span>
                                </h3>
                                <p>MORE DETAIL</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item">
                <div class="gal-home">
                    <a href="project-detail.html">
                        <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="/img/gallery-home/img2.jpg">
                            <div class="overlay">
                                <h3>POLISHING BUILDING
                                    <span class="devider"></span>
                                </h3>
                                <p>MORE DETAIL</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item">
                <div class="gal-home">
                    <a href="project-detail.html">
                        <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="/img/gallery-home/img3.jpg">
                            <div class="overlay">
                                <h3>RESTORATION BUILDING
                                    <span class="devider"></span>
                                </h3>
                                <p>MORE DETAIL</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item">
                <div class="gal-home">
                    <a href="project-detail.html">
                        <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="/img/gallery-home/img4.jpg">
                            <div class="overlay">
                                <h3>CONCREATE BUILDING
                                    <span class="devider"></span>
                                </h3>
                                <p>MORE DETAIL</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item">
                <div class="gal-home">
                    <a href="project-detail.html">
                        <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="/img/gallery-home/img1.jpg">
                            <div class="overlay">
                                <h3>FONDATION BUILDING
                                    <span class="devider"></span>
                                </h3>
                                <p>MORE DETAIL</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item">
                <div class="gal-home">
                    <a href="project-detail.html">
                        <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="/img/gallery-home/img2.jpg">
                            <div class="overlay">
                                <h3>POLISHING BUILDING
                                    <span class="devider"></span>
                                </h3>
                                <p>MORE DETAIL</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item">
                <div class="gal-home">
                    <a href="project-detail.html">
                        <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="/img/gallery-home/img3.jpg">
                            <div class="overlay">
                                <h3>RESTORATION BUILDING
                                    <span class="devider"></span>
                                </h3>
                                <p>MORE DETAIL</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item">
                <div class="gal-home">
                    <a href="project-detail.html">
                        <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="/img/gallery-home/img4.jpg">
                            <div class="overlay">
                                <h3>CONCREATE BUILDING
                                    <span class="devider"></span>
                                </h3>
                                <p>MORE DETAIL</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Related projects end -->

<!-- spacer -->
<div class="space-double"></div>