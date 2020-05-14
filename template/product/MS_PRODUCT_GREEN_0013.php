<?php 
    $rowCat = $action_product->getProductCatDetail_byId(146,$lang);

    // $rows = $action_product->getProductList_byMultiLevel_orderProductId(146,'desc',$trang,5,$slug);
    $rows['data'] = $action_product->getListProductHot_hasLimit(5);
?>
<!-- <section id="block-peak-merchandise-peak-merchandise-banner"

    class="block block-peak-merchandise block-peak-merchandise-banner b-peak-merchandise-banner clearfix ">

    <div class="banner" data-template="peak-merchandise--banner">

        <div class="banner__image">

            <div class="banner__image-wrapper">

                <div class="image-placeholder1" style="padding-bottom:calc(26.041666666667%)">
                    <img

                        class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"

                        width="1920" height="500" alt=""

                        title=""

                        data-src="/images/green/background-golf.PNG"

                        data-sizes="auto" data-expand="100"

                        data-srcset="/images/green/background-golf.PNG"

                        sizes="1349px"

                        srcset="/images/green/background-golf.PNG"

                        src="/images/green/background-golf.PNG">

                </div>

            </div>

        </div> -->

        <!-- <div class="banner__overlay"></div>

        <div class="banner__content">

            <div class="banner__content-inner">

                <h1 class="banner__heading"><?= $rowCat['productcat_name'] ?></h1>

            </div>

        </div> -->

    <!-- </div>



</section> -->
<section class="gb-banner banner-auto-center" style="background-image: url(/images/<?= $rowCat['productcat_img'] ?>);" title="Playing golf in Indochina">
    <!-- <img src="/images/green/banner/golf.jpg" class="img-banner" title="Playing golf in Indochina"> -->
    <div class="banner-text">
        <div class="container-fluid">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <h1>Playing golf in Indochina</h1>
            <p>Indochina is becoming a well known place for playing golf with a coddle of weather. 
                Here and there, new 27 hole golf courses built by famous designer in Laos and Cambodia. 
                And Vietnam becomes the world’ best golf destination 2019. Just come and play in real!</p>  
            </div>
        </div>
    </div>
    
</section>


<div class="gb-page-blog_denmoc">

    <div class="container-fluid">

        <div class="row">

            <aside class="hidden-xs hidden-sm col-md-2 menu-sidebar-margin-right-main1" role="complementary">



                <section id="block-peak-navigation-peak-anchor-side-menu "

                    class="block block-peak-navigation block-peak-anchor-side-menu b-peak-anchor-side-menu clearfix">

                    <div anchor-side-menu="" class="anchor-side-menu affix-top sticky-menu" ng-style="{ 'width' : width }"

                        style="width: 263px;">

                        <ul class="nav" role="navigation">

                            <!-- ngRepeat: item in visibleItems -->

                            <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                                <a class="anchor-side-menu__link ng-binding" ng-href="#overview"

                                    ng-bind-html="item.text" href="#overview"><i class="fa fa-list"></i> Overview</a>

                            </li><!-- end ngRepeat: item in visibleItems -->

                            <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                                <a class="anchor-side-menu__link ng-binding" ng-href="#golf" ng-bind-html="item.text"

                                    href="#golf"><i class="fa fa-eercast"></i> Golf Sevices</a>

                            </li><!-- end ngRepeat: item in visibleItems -->

                            

                            <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                                <a class="anchor-side-menu__link ng-binding" ng-href="#trips-golf"

                                    ng-bind-html="item.text" href="#trips-golf"><i class="fa fa-check"></i>

                                    Highlight Golf Tours</a>

                            </li><!-- end ngRepeat: item in visibleItems -->

                            <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                                <a class="anchor-side-menu__link ng-binding" ng-href="#trips-golf-vietnam"

                                    ng-bind-html="item.text" href="#trips-golf-vietnam"><i class="fa fa-check"></i>

                                    Vietnam Golf Tours</a>

                            </li><!-- end ngRepeat: item in visibleItems -->

                            <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                                <a class="anchor-side-menu__link ng-binding" ng-href="#trips-golf-laos"

                                    ng-bind-html="item.text" href="#trips-golf-laos"><i class="fa fa-check"></i>

                                    Laos Golf Tourss</a>

                            </li><!-- end ngRepeat: item in visibleItems -->

                            <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                                <a class="anchor-side-menu__link ng-binding" ng-href="#trips-golf-cambodia"

                                    ng-bind-html="item.text" href="#trips-golf-cambodia"><i class="fa fa-check"></i>

                                    Cambodia Golf Tours</a>

                            </li><!-- end ngRepeat: item in visibleItems -->

                            <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                                <a class="anchor-side-menu__link ng-binding" ng-href="#faq" ng-bind-html="item.text"

                                    href="#faq"><i class="fa fa-pencil-square-o"></i>

                                    FAQ's</a>

                            </li><!-- end ngRepeat: item in visibleItems -->

                            



                        </ul>

                    </div>

                </section>

            </aside>

            <div class="col-md-8">
                <?php $title = 'Golf'; ?>
                <?php include DIR_BREADCRUMBS."MS_BREADCRUMS_SPRO_0001.php";?>
                <h2 class="golf-title-h2">Why golf with us?</h2>
                <div class="des_danhmuc gb-text-color gb-center">

                    <?= $rowCat['productcat_des'] ?>

                </div>

                <!-- golf services -->

                <?php include DIR_NEWS."MS_NEWS_GREEN_0003.php";?>

                <!--Top Vietnam travel deals-->

                <?php //include DIR_PRODUCT."MS_PRODUCT_GREEN_0007_1.php";?>

                <!-- <div class="khuyen_mai">

                    <h3>30% OFF CYCLING</h3>

                    <p>Must deppart by Oct.31.2019. Discount automantically applied</p>

                </div> -->

                <!--Our Vietnam trips-->
                <h2 class="trips-header__title golf-title-h2" id="trips-golf" data-anchortext="Our trips">Highlight Golf Tours</h2>

                <?php include DIR_PRODUCT."MS_PRODUCT_GREEN_0014.php";?>

                <h2 class="trips-header__title golf-title-h2" id="trips-golf-vietnam" data-anchortext="Our trips">Vietnam Golf Tours</h2>
                <?php 
                $rowCat = $action_product->getProductCatDetail_byId(159,$lang);
                $rows = $action_product->getProductList_byMultiLevel_orderProductId(159,'desc',$trang,9996,$slug); 
                $slide = 159;
                ?>
                <?php include DIR_PRODUCT."MS_PRODUCT_GREEN_0015.php";?>

                <h2 class="trips-header__title golf-title-h2" id="trips-golf-laos" data-anchortext="Our trips">Laos Golf Tours</h2>
                <?php 
                $rowCat = $action_product->getProductCatDetail_byId(140,$lang);
                $rows = $action_product->getProductList_byMultiLevel_orderProductId(140,'desc',$trang,9996,$slug); 
                $slide = 140;
                ?>
                <?php include DIR_PRODUCT."MS_PRODUCT_GREEN_0015.php";?>

                <h2 class="trips-header__title golf-title-h2" id="trips-golf-cambodia" data-anchortext="Our trips">Cambodia Golf Tours</h2>
                <?php 
                $rowCat = $action_product->getProductCatDetail_byId(139,$lang);
                $rows = $action_product->getProductList_byMultiLevel_orderProductId(139,'desc',$trang,9996,$slug); 
                $slide = 139;
                ?>
                <?php include DIR_PRODUCT."MS_PRODUCT_GREEN_0015.php";?>

                <!--holiday infomaton-->

            <?php //include DIR_NEWS."MS_NEWS_DENMOC_0009.php";?>

            <!-- Vietnam travel FAQs-->
            <?php $rowCatLang['productcat_id'] = 146; ?>
            <?php include DIR_NEWS."MS_NEWS_GREEN_0010.php";?>

                <!--The best time to cycle in Asia-->

                <?php //include DIR_NEWS."MS_NEWS_GREEN_0002.php";?>

            </div>

            <div class="col-md-1">

                <?php //include DIR_SIDEBAR."MS_SIDEBAR_DENMOC_0001.php";?>

                <?php //include DIR_SIDEBAR."MS_SIDEBAR_DENMOC_0003.php";?>

            </div>

        </div>

    </div>

</div>
<!-- <script>
    $(document).ready(function () {
        $(".sticky-menu").sticky({
            topSpacing: 0
        });
    });
</script> -->