<!-- <section id="block-peak-merchandise-peak-merchandise-banner"

    class="block block-peak-merchandise block-peak-merchandise-banner b-peak-merchandise-banner clearfix timkiemhome1">

            <div class="tim-kiem-home" style="height: 150px;">

            <?php //include DIR_SIDEBAR."MS_SIDEBAR_DENMOC_0001.php";?>

            </div>

</section> -->
<section class="gb-banner banner-auto-center" style="background-image: url(/images/<?= $rowCat['productcat_img'] ?>);" title="<?= $rowCat['title_seo'] ?>">
    <!-- <img src="/images/green/banner/main.jpg" class="img-banner" title="<?= $rowCat['title_seo'] ?>"> -->
    <div class="banner-text">
        <div class="container-fluid">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="gb-title-tour-detail"><?= $rowCat['productcat_name'] ?></h1>
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

                    <ul class="nav" role="navigation">

                        <!-- ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#asiacylingtours" ng-bind-html="item.text"

                                href="#overview">Overview</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#OurAsiaCylingTop5" ng-bind-html="item.text"

                                href="#OurAsiaCylingTop5">Our trips</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#besttime" ng-bind-html="item.text"

                                href="#besttime">Tips & Advices</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <!-- <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#Reamore" ng-bind-html="item.text"

                                href="#Reamore">Read more about cyclings</a>

                        </li> --><!-- end ngRepeat: item in visibleItems -->


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



            <div class="des_danhmuc gb-text-color" id="overview">

                <?= $rowCat['productcat_des'] ?>

            </div>

            <!--Top Vietnam travel deals-->

            <?php// include DIR_PRODUCT."MS_PRODUCT_GREEN_0007.php";?>

            

            <!--Our Vietnam trips-->
            <h2 class="trips-header__title gb-title" id="OurAsiaCylingTop5" data-anchortext="Our trips">Our trips</h2>

            <?php include DIR_PRODUCT."MS_PRODUCT_GREEN_0009.php";?>
            <!-- <div class="khuyen_mai">

                    <h3>30% OFF CYCLING</h3>

                    <p>Must deppart by Oct.31.2019. Discount automantically applied</p>

                </div> -->

            <!--holiday infomaton-->

            <?php //include DIR_NEWS."MS_NEWS_GREEN_0001.php";?>

            

            <!--holiday infomaton-->

            <?php //include DIR_NEWS."MS_NEWS_DENMOC_0009.php";?>

            <!-- Vietnam travel FAQs-->

            <?php //include DIR_NEWS."MS_NEWS_DENMOC_0008.php";?>

            <h2 id="besttime" class="gb-title" data-anchortext="Responsible Travel">Tips & Advices</h2>


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
