<!-- <section id="block-peak-merchandise-peak-merchandise-banner" class="block block-peak-merchandise block-peak-merchandise-banner b-peak-merchandise-banner clearfix timkiemhome"> -->

            <!-- <div class="tim-kiem-home">

            <?php include DIR_SIDEBAR."MS_SIDEBAR_DENMOC_0001.php";?>

            </div> -->

<!-- </section> -->
<section class="gb-banner banner-auto-center" style="background-image: url(/images/<?= $rowCat['productcat_img'] ?>);" title="<?= $rowCat['productcat_sub_info1'] ?>">
    <!-- <img src="/images/green/banner/laos.jpg" class="destination-img" title="Laos Tours & Travel info"> -->
    <div class="banner-text">
        <div class="container-fluid">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <?php if ($rowCat['productcat_id'] == 143) { ?>
            <h1 class="gb-title-tour-detail">Cambodia Tours & Travel info</h1>
            <?php } elseif ($rowCat['productcat_id'] == 144) { ?>
            <h1 class="gb-title-tour-detail">Vietnam Tours & Travel info</h1>
            <?php } elseif ($rowCat['productcat_id'] == 145) { ?>
            <h1 class="gb-title-tour-detail">Laos Tours & Travel info</h1>
            <?php } ?>
            </div>        
        </div>
    </div>
</section>

<div class="l-content container-fluid">



    <div class="row">

        <aside class="hidden-xs hidden-sm col-md-2 menu-sidebar-margin-right-main1" role="complementary">



            <section id="block-peak-navigation-peak-anchor-side-menu"

                class="block block-peak-navigation block-peak-anchor-side-menu b-peak-anchor-side-menu clearfix">

                <div anchor-side-menu="" class="anchor-side-menu affix-top sticky-menu" ng-style="{ 'width' : width }"

                    style="width: 263px;">

                    <div class="hidden" id="mapModalContainer">

                        <div class="image-expand u-margin-top-1 u-margin-bottom-1" data-toggle="modal"

                            data-target="#side-nav-map-modal">

                            <img>

                            <span class="image-expand__icon"><i class="fa fa-arrows-alt"></i></span>

                        </div>

                        <div peak-add-to-shortlist="" product-code="" class="ng-isolate-scope">

                            <a href="" class="btn btn-add-to-shortlist" ng-click="heartClick()"

                                ng-class="{'shortlisted': inShortlist }"

                                ng-attr-data-analytic-event="{{'peak_shortlisted_trips'}}" data-trip-code=""

                                data-trip-shortlisted="false" peak-analytics=""

                                data-analytic-event="peak_shortlisted_trips">

                                <i ng-class="{ 'fa-heart-o': !inShortlist, 'fa-heart': inShortlist }"

                                    class="fa fa-heart-o"></i>

                                <!-- ngIf: !inShortlist --><span ng-if="!inShortlist" class="ng-scope">Add to

                                    wishlist</span><!-- end ngIf: !inShortlist -->

                                <!-- ngIf: inShortlist -->

                            </a>

                            <div ng-show="showPopover" class="popover shortlist-popover ng-hide"

                                ng-class="{'is-visible': showPopover}" role="tooltip">

                                <a class="close" ng-click="closePopover()">×</a><b>Want to see your Wishlist on all your

                                    devices?</b>

                                <div>

                                    <a href="" ng-click="customerAuth.goToLoginSignupPage('signup')">Sign up</a> so they

                                    are saved, and available wherever you log in</div>

                            </div>

                        </div>

                    </div>

                    <ul class="nav" role="navigation">

                        <!-- ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding menu-sidebar-margin-right" ng-href="#overview" ng-bind-html="item.text"

                                href="#overview">Overview</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding menu-sidebar-margin-right" ng-href="#trips" ng-bind-html="item.text"

                                href="#trips">Our trips</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding menu-sidebar-margin-right" ng-href="#video" ng-bind-html="item.text"

                                href="#video">Video</a>

                        </li><!-- end ngRepeat: item in visibleItems -->


                        <!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding menu-sidebar-margin-right" ng-href="#info" ng-bind-html="item.text"

                                href="#info">Holiday information</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding menu-sidebar-margin-right" ng-href="#faq" ng-bind-html="item.text"

                                href="#faq">FAQ's</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding menu-sidebar-margin-right" ng-href="#responsible" ng-bind-html="item.text"

                                href="#responsible">Responsible Travel</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                    </ul>

                </div>



                <div class="modal fade" id="side-nav-map-modal" tabindex="-1" role="dialog"

                    aria-labelledby="modalWithTripInfo" aria-hidden="true">

                    <div class="modal-dialog modal-lg">

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                <h2 class="modal-title ng-binding"></h2>

                                <strong>

                                    <p class="ng-binding"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                                    </p>

                                </strong>

                            </div>

                            <div class="modal-body">

                                <img>

                            </div>

                        </div>

                    </div>



                </div>

            </section>

        </aside>

        <section class="col-sm-12 col-md-8 col-lg-8">

        <?php include DIR_BREADCRUMBS."MS_BREADCRUMS_SPRO_0001.php";?>



            <div class="des_danhmuc gb-text-color">

                <?= $rowCat['productcat_des'] ?>

            </div>

            <!--Top Vietnam travel deals-->

            <?php// include DIR_PRODUCT."MS_PRODUCT_GREEN_0007.php";?>

            

            <!--Our Vietnam trips-->
            <h2 class="trips-header__title gb-title" id="trips" data-anchortext="Our trips">Our trips</h2>

            <?php include DIR_PRODUCT."MS_PRODUCT_GREEN_0009.php";?>

            <!--video-->

            <?php include DIR_NEWS."MS_NEWS_GREEN_0001.php";?>

            

            <!--holiday infomaton-->

            <?php include DIR_NEWS."MS_NEWS_DENMOC_0009.php";?>

            <!--  travel FAQs-->

            <?php include DIR_NEWS."MS_NEWS_GREEN_0010.php";?>


            <h2 id="responsible" class="gb-title" data-anchortext="Responsible Travel">Responsible Travel</h2>
            <!--Responsible Travel-->

            <?php include DIR_NEWS."MS_NEWS_DENMOC_0010.php";?>


        </section>

    </div>

</div>
<!-- <script>
    $(document).ready(function () {
        $(".sticky-menu").sticky({
            topSpacing: 0
        });
    });
</script> -->
