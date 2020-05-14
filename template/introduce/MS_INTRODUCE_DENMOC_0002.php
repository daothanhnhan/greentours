<?php 

    $our_story = $action->getDetail('page', 'page_id', 39);

    $our_team = $action->getDetail('page', 'page_id', 40);

    $founder = $action->getDetail('page', 'page_id', 41);

    $certifications = $action->getDetail('page', 'page_id', 43);

    $missions = $action->getDetail('page', 'page_id', 53);

    $qua_trinh = $action->getDetail('page', 'page_id', 45);

    $board = $action->getDetail('page', 'page_id', 46);

    $team = $action->getList('team', '', '', 'id', 'asc', '', '', '');

?>

<link rel="stylesheet" href="./plugin/owl-carouse/owl.carousel.min.css">

<link rel="stylesheet" href="./plugin/owl-carouse/owl.theme.default.min.css">
<style>
h1, h2, h3, h4, h5, h6 {
    color: #000;
}
</style>
<section id="block-peak-merchandise-peak-merchandise-banner"

    class="block block-peak-merchandise block-peak-merchandise-banner b-peak-merchandise-banner clearfix">

    <div class="banner" data-template="peak-merchandise--banner">

        <div class="banner__image">

            <div class="banner__image-wrapper">

                <div class="image-placeholder1" style=""><img src="/images/green/banner/about.jpg" style="width: 100%;">

                </div>

            </div>

        </div>

        <div class="banner__overlay"></div>

        <div class="banner__content">

            <div class="banner__content-inner">

                <h1 class="banner__heading"><?= $row['product_name'] ?></h1>

            </div>

        </div>

    </div>



</section>

<div class="l-content container-fluid">

    <div class="row">

        <aside class="hidden-xs hidden-sm col-md-2 menu-sidebar-margin-right-main1" role="complementary">



            <section id="block-peak-navigation-peak-anchor-side-menu"

                class="block block-peak-navigation block-peak-anchor-side-menu b-peak-anchor-side-menu clearfix sticky-menu">

                <div anchor-side-menu="" class="anchor-side-menu affix-top" ng-style="{ 'width' : width }"

                    style="width: 263px;">



                    <ul class="nav" role="navigation">

                        <!-- ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#overview" ng-bind-html="item.text"

                                href="#ourstory"><i class="fa fa-list"></i> Our Story</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#gallery" ng-bind-html="item.text"

                                href="#missions"><i class="fa fa-photo"></i> Missions</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#itinerary" ng-bind-html="item.text"

                                href="#teams"><i class="fa fa-map-o"></i> Teams</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#inclusions" ng-bind-html="item.text"

                                href="#certifications"><i class="fa fa-check"></i> Certifications</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        

                    </ul>

                </div>



            </section>

        </aside>

        <section class="col-sm-12 col-md-8 col-lg-8">

            <article id="node-600" class="node node-page clearfix">



                <p class="lead" id="ourstory"><?= $our_story['page_des'] ?></p>

                <div>

                    <?= $our_story['page_content'] ?>

                </div>

                <!-- <img class="img-giayto" id="missions" src="/images/<?= $our_story['page_img'] ?>" style="padding-top:20px;"> -->

                <div id="missions">
                    <h2 class="ourstory-title-h2">Our missions</h2>
                    <?= $missions['page_content'] ?>
                </div>

                <div class="people_area">

                    <!-- <h1 class="title_area" id="teams"><span>Our</span>&nbsp;Team</h1> -->
                    <h2 class="ourstory-title-h2" id="teams">Our team</h2>

                    <div class="description_area">

                        <div style="text-align: center;"><?= $our_team['page_content'] ?></div>

                    </div>



                    <div class="gb-product-show">

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="gb-product-show_slide-three-item gb-product-show_slide-three-item_02 owl-carousel owl-theme"

                                    style=" font-size: 19px;padding-top: 20px;">

                                    <?php foreach ($team as $item) { ?>

                                    <div class="gb-maysanxuat_cuanhom">

                                        <div class="gb-product-item_cuanhom" style="margin-bottom: 33px;">



                                            <div class="gb-product-item_cuanhom-img">



                                                <a class="boxImgProductHome" href=""><img

                                                        src="/images/<?= $item['image'] ?>"

                                                        alt="" class="img-responsive1" style=""></a>


                                                <div style="text-align: center;">
                                                    <?= $item['name'] ?>
                                                </div>
                                            </div>



                                        </div>

                                    </div>

                                    <?php } ?>

                                </div>

                            </div>



                        </div>

                    </div>

                </div>

                <div class="founder">

                    <!-- <h1 class="title_area"><span>The</span> founder</h1> -->
                    <h2 class="ourstory-title-h2">Our leaders</h2>

                    <div class="row">

                        <div class="col-sm-4">
                            <img src="/images/<?= $founder['page_img'] ?>" class="ava_gd" alt="">
                            <div>
                                <p class="our-leaders-title"><?= $founder['page_name'] ?></p>
                                <?= $founder['page_content'] ?>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <img src="/images/<?= $board['page_img'] ?>" class="ava_gd" alt="">
                            <div>
                                <p class="our-leaders-title"><?= $board['page_name'] ?></p>
                                <?= $board['page_content'] ?>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="founder">

                    <!-- <h1 class="title_area" id="certifications"><span>Certifications</span></h1> -->
                    <h2 class="ourstory-title-h2" id="certifications">Certifications</h2>

                    <div class="row">

                        <div class="col-md-12">

                        <img class="img-giayto" src="/images/<?= $certifications['page_img'] ?>">

                        </div>

                        

                    </div>

                </div>

                <div class="process">
                    <!-- <h1 class="title_area" id="history"><span>Company development history</span></h1> -->
                    <!-- <h2 class="ourstory-title-h2" id="history">Company development history</h2> -->
                    <img src="/images/<?= $qua_trinh['page_img'] ?>" alt="" style="width: 100%;">
                </div>

            </article>

        </section>





    </div>

</div>

<script src="./plugin/owl-carouse/owl.carousel.min.js"></script>

<script>

    $(document).ready(function () {

        $('.gb-product-show_slide-three-item_02').owlCarousel({

            loop: true,

            responsiveClass: true,

            nav: true,

            navText: [],

            dots: false,

            margin: 0,

            responsive: {

                0: {

                    items: 2,

                    nav: false

                },

                560: {

                    items: 4,

                    slideBy: 3,

                    nav: true

                },

                768: {

                    items: 4,

                    slideBy: 4,

                    nav: true

                }

            }

        });

    });

</script>
<!-- <script>
    $(document).ready(function () {
        $(".sticky-menu").sticky({
            topSpacing: 0
        });
    });
</script> -->