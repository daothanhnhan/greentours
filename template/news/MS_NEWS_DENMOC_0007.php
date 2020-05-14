<?php 

    $action_product = new action_product(); 

    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';



    $rowLang = $action_product->getProductLangDetail_byUrl($slug,$lang);

    $row = $action_product->getProductDetail_byId($rowLang[$nameColIdProduct_productLanguage],$lang);

    $_SESSION['productcat_id_relate'] = $row[$nameColIdProductCat_product];

    $_SESSION['sidebar'] = 'productDetail';

    $arr_id = $row['productcat_ar'];

    $arr_id = explode(',', $arr_id);

    $productcat_id = (int)$arr_id[0];



    $img_sub = json_decode($row['product_sub_img']);



    $itinerary = $action->getList('itinerary', 'product_id', $row['product_id'], 'id', 'asc', '', '', '');

    $bang_gia = $action->getDetail('bao_gia_item', 'product_id', $row['product_id']);//var_dump($bang_gia);

?>

<style type="text/css">

.sup{

  display: block;

  position: relative;

  width: 50%;

  float: left;

  padding-bottom: 15%;

  line-height: 100%;

  text-align: center;

  z-index: 1;

}



.inf{

  display: block;

  position: relative;

  width: 50%;

  float: left;

  padding-top: 15%;

  line-height: 100%;

  text-align: center;

  z-index: 1;

}

.line {

    background-image: linear-gradient(

    to top right,

    white 50%,

    black,

    white 52%

  );

}

#book-tour-1 {

    text-align: right;

    padding: 15px 0;



}

#book-tour-1 a {

    color: #fff;

    padding: 10px;

    background: #b51c1c;

    font-size: 24px;

    border-radius: 15px;

}

#book-tour-2 {

    text-align: left;

    padding: 15px 0;

}

#book-tour-2 a {

    color: #fff;

    padding: 10px;

    background: #b51c1c;

    font-size: 24px;

    border-radius: 15px;

}

@media screen and (max-width: 992px) {

    #book-tour-1, #book-tour-2 {

        text-align: center;

    }

}

.mau-vang {

    background: #e4d9b0;

}
/**/
.gb-text-color h1, .gb-text-color h2, .gb-text-color h3, .gb-text-color h4, .gb-text-color h5, .gb-text-color h6 {
    color: #004a80;
    font-weight: 400;
}

</style>

<!-- <section id="block-peak-merchandise-peak-merchandise-banner"

    class="block block-peak-merchandise block-peak-merchandise-banner b-peak-merchandise-banner clearfix">







    <div class="banner" data-template="peak-merchandise--banner">

        <div class="banner__image">

            <div class="banner__image-wrapper">

                <div class="image-placeholder1" style="padding-bottom:calc(26.041666666667%)"><img

                        class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"

                        width="1920" height="500" alt="Street food sellers in Hoi An, Vietnam"

                        title="<?= $row['product_name'] ?>"

                        src="/images/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg" data-sizes="auto"

                        data-expand="100"

                        data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 1400w,"

                        sizes="1349px"

                        srcset="/images/<?= $row['banner'] ?>"

                        src="/images/Vietnam-ho-chi-minh-street-night-pax.jpg">

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



</section> -->
<section class="gb-banner banner-auto-center" style="background-image: url(/images/<?= $row['banner'] ?>);" title="<?= $row['banner_text'] ?>">
    <!-- <img src="/images/<?= $row['banner'] ?>" title="<?= $row['banner_text'] ?>"> -->
    <div class="banner-text">
        <div class="container-fluid">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <?php if ($row['banner'] != '') { ?>
            <h1 class="gb-title-tour-detail"><?= $row['product_name'] ?></h1>
            <?php } ?>
            </div>
            <div class="col-md-2"></div>
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

                                href="#overview"><i class="fa fa-list"></i> Overview</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#gallery" ng-bind-html="item.text"

                                href="#gallery"><i class="fa fa-photo"></i> Gallery</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#itinerary" ng-bind-html="item.text"

                                href="#itinerary"><i class="fa fa-map-o"></i> Itinerary</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#inclusions" ng-bind-html="item.text"

                                href="#inclusions"><i class="fa fa-check"></i> Inclusions</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#dates" ng-bind-html="item.text"

                                href="#Dates"><i class="fa fa-calendar"></i> Dates &amp; availability</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#fact-box-notes"

                                ng-bind-html="item.text" href="#fact-box-notes"><i class="fa fa-pencil-square-o"></i>

                                Important notes</a>

                        </li><!-- end ngRepeat: item in visibleItems -->

                        <!-- <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#essential-trip-info"

                                ng-bind-html="item.text" href="#essential-trip-info"><i class="fa fa-file-text-o"></i>

                                Essential trip information</a>

                        </li> --><!-- end ngRepeat: item in visibleItems -->

                        <!-- <li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

                            <a class="anchor-side-menu__link ng-binding" ng-href="#reviews" ng-bind-html="item.text"

                                href="#reviews"><i class="fa fa-star"></i> Reviews</a>

                        </li> --><!-- end ngRepeat: item in visibleItems -->

                    </ul>

                </div>



                

            </section>

        </aside>

        <section class="col-sm-12 col-md-8 col-lg-8">

            <!-- <ol class="breadcrumb">

                <li><a href="/en">Home</a></li>

                <li><a href="/en/asia">Asia</a></li>

                <li><a href="/en/vietnam">Vietnam</a></li>

                <li>Vietnam Express Northbound</li>

            </ol> <a id="main-content"></a> -->

            <?php include DIR_BREADCRUMBS."MS_BREADCRUMS_SPRO_0002.php";?>







            <div class="map-shortlist-section hidden u-margin-bottom-1">

                <div class="u-margin-bottom-1">



                    <div class="image-placeholder" style="padding-bottom:calc(66.818181818182%)"><img

                            class="img-responsive image lazyload peak-image-responsive ng-scope" width="2200"

                            height="1470" alt="Map of Vietnam Express Northbound including Vietnam"

                            title="Map of Vietnam Express Northbound"

                            data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvsq_2018.gif"

                            data-sizes="auto" data-expand="100"

                            data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvsq_2018.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvsq_2018.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvsq_2018.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvsq_2018.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvsq_2018.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvsq_2018.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvsq_2018.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvsq_2018.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvsq_2018.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvsq_2018.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvsq_2018.gif 1400w,">

                    </div>

                </div>

                <div peak-add-to-shortlist="" product-code="TVSQ" class="visible-xs ng-isolate-scope">

                    <a href="" class="btn btn-add-to-shortlist" ng-click="heartClick()"

                        ng-class="{'shortlisted': inShortlist }"

                        ng-attr-data-analytic-event="{{'peak_shortlisted_trips'}}" data-trip-code="TVSQ"

                        data-trip-shortlisted="false" peak-analytics="" data-analytic-event="peak_shortlisted_trips">

                        <i ng-class="{ 'fa-heart-o': !inShortlist, 'fa-heart': inShortlist }" class="fa fa-heart-o"></i>

                        <!-- ngIf: !inShortlist --><span ng-if="!inShortlist" class="ng-scope">Add to wishlist</span>

                        <!-- end ngIf: !inShortlist -->

                        <!-- ngIf: inShortlist -->

                    </a>

                    <div ng-show="showPopover" class="popover shortlist-popover ng-hide"

                        ng-class="{'is-visible': showPopover}" role="tooltip">

                        <a class="close" ng-click="closePopover()">×</a><b>Want to see your Wishlist on all your

                            devices?</b>

                        <div>

                            <a href="" ng-click="customerAuth.goToLoginSignupPage('signup')">Sign up</a> so they are

                            saved, and available wherever you log in</div>

                    </div>

                </div>

            </div>





            <div class="overview-section gb-text-color" id="overview">

                <?= $rowLang['lang_product_content'] ?>

            </div>





            <div peak-add-to-shortlist="" product-code="TVSQ"

                class="visible-xs add-to-shortlist-button-xs ng-isolate-scope">

                <a href="" class="btn btn-add-to-shortlist" ng-click="heartClick()"

                    ng-class="{'shortlisted': inShortlist }" ng-attr-data-analytic-event="{{'peak_shortlisted_trips'}}"

                    data-trip-code="TVSQ" data-trip-shortlisted="false" peak-analytics=""

                    data-analytic-event="peak_shortlisted_trips">

                    <!-- <i ng-class="{ 'fa-heart-o': !inShortlist, 'fa-heart': inShortlist }" class="fa fa-heart-o"></i> -->

                    <!-- ngIf: !inShortlist --><!-- <span ng-if="!inShortlist" class="ng-scope">Add to wishlist</span> -->

                    <!-- end ngIf: !inShortlist -->

                    <!-- ngIf: inShortlist -->

                </a>

                <div ng-show="showPopover" class="popover shortlist-popover ng-hide"

                    ng-class="{'is-visible': showPopover}" role="tooltip">

                    <a class="close" ng-click="closePopover()">×</a><b>Want to see your Wishlist on all your

                        devices?</b>

                    <div>

                        <a href="" ng-click="customerAuth.goToLoginSignupPage('signup')">Sign up</a> so they are saved,

                        and available wherever you log in</div>

                </div>

            </div>







            <hr class="hr-tour-detail">



            <div class="row highlights-table-section">

                <div class="col-sm-6">

                    <dl class="dl-horizontal text-left left-col">

                        <dt>Start</dt>

                        <dd>

                            <?= $row['start'] ?></dd>

                        <dt>Finish</dt>

                        <dd>

                            <?= $row['finish'] ?></dd>

                        <dt>Destination</dt>

                        <dd><?= $row['destination'] ?></dd>

                        <!-- <dt>Style</dt> -->

                        <!-- <dd>

                            <?= $row['style'] ?> </dd> -->

                        

                    </dl>

                </div>

                <div class="col-sm-6">

                    <dl class="dl-horizontal text-left right-col">

                        <dt>Code</dt>

                        <dd>

                            <?= $row['code'] ?></dd>

                        <dt>Physical rating</dt>

                        <dd>

                            <div class="rating-circle rating-circle--20"></div>
                            <?php for ($i=1;$i<=$row['rating'];$i++) { ?>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <?php } ?>
                        </dd>

                        <!-- <dt>Ages</dt>

                        <dd><?= $row['ages'] ?></dd> -->

                        <!-- <dt>Group size</dt>

                        <dd><?= $row['group_size'] ?></dd> -->

                        <dt>Theme</dt>

                        <dd>

                            <?= $row['theme'] ?></dd>

                    </dl>

                </div>

            </div>



            <hr class="hr-tour-detail">





            <div class="u-margin-top-3 why-you-love-this-trip-section">

                <!-- <h2>Why you'll love this trip</h2> -->

                <?php //$rowLang['lang_product_des2'] ?>

            </div>



            <div class="u-margin-top-2 is-trip-right-for-you-section">

                <!-- <h2>Is this trip right for you?</h2> -->

                <?php //$rowLang['lang_product_des3'] ?>

            </div>

            <!-- <div class="wishlist-item"onclick="favorite(<?= $row['product_id'] ?>)">
                <i ng-class="{ 'fa-heart-o': !inShortlist, 'fa-heart': inShortlist }" class="fa fa-heart-o color-main-text"></i>
                <span ng-if="!inShortlist" class="ng-scope color-main-text">Add to wishlist</span>
            </div> -->

            <?php //include DIR_PRODUCT."MS_PRODUCT_GREEN_0008.php";?>
            <?php include DIR_PRODUCT."MS_PRODUCT_GREEN_0016.php";?>




            <div class="u-margin-top-3 itinerary-section">

                <h2 id="itinerary" class="gb-title" data-anchortext="Itinerary" data-faicon="map-o">

                    Itinerary <div class="pull-right">

                        <!-- <div class="expand-toggle">

                            <a class="expand-toggle__button expand-toggle__button--plus">

                                <i class="expand-toggle__icon fa fa-plus-circle"></i> Expand All </a>

                            <a class="expand-toggle__button expand-toggle__button--minus">

                                <i class="expand-toggle__icon fa fa-minus-circle"></i> Collapse All </a>

                        </div> -->

                    </div>

                </h2>

                <!-- <div class="alert alert-info">

                    <div class="alert__icon">

                        <i class="fa fa-map-o"></i>

                    </div>

                    <div class="alert__message">

                        <span class="hidden-sm hidden-xs">This itinerary is valid for departures from 01 January 2019 to

                            31 December 2019.<br></span>

                        <span class="visible-sm visible-xs">This itinerary is valid for departures from 01 Jan 2019 to

                            31 Dec 2019.<br></span>

                        <span class="hidden-sm hidden-xs"><a href="/en/vietnam/vietnam-express-northbound-125390">View

                                the itinerary for departures between 01 January 2020 - 31 December 2020</a><br></span>

                        <span class="visible-sm visible-xs"><a href="/en/vietnam/vietnam-express-northbound-125390">View

                                the 2020 itinerary</a></span>

                    </div>

                </div> -->

                <div class="panel-group" data-template="peak-shortcode-aggregate--display-accordion">

                    <?php 

                    $d = 0;

                    foreach ($itinerary as $item) { 

                        $d++;

                    ?>

                    
                    <h3 class="accordion">Day <?= $d ?>: <?= $item['name'] ?></h3>
                    
                    <div class="panel-faq">
                      <?= $item['note'] ?>
                    </div>

                    <?php } ?>

                </div>

            </div>



            <div class="row inclusions-section hidden-xs u-margin-top-3">

                <div class="col-sm-12">

                    <h2 id="inclusions" class="gb-title" data-anchortext="Inclusions" data-faicon="check">Inclusions</h2>

                    <div class="activity col-xs-3 col-sm-12">

                        <div class="activity-icon">

                            <i class="fa fa-cutlery fa-2x"></i>

                        </div>

                        <div class="activity-description hidden-xs gb-text-color">

                            <h4>Meals</h4>





                            <?= str_replace("\r\n", "<br>", $rowLang['lang_product_sub_info1']) ?>

                        </div>

                    </div>

                    <div class="activity col-xs-3 col-sm-12">

                        <div class="activity-icon">

                            <i class="fa fa-train fa-2x"></i>

                        </div>

                        <div class="activity-description hidden-xs gb-text-color">

                            <h4>Transport</h4>

                            <?= str_replace("\r\n", "<br>", $rowLang['lang_product_sub_info2']) ?>

                        </div>

                    </div>

                    <div class="activity col-xs-3 col-sm-12">

                        <div class="activity-icon">

                            <i class="fa fa-bed fa-2x"></i>

                        </div>

                        <div class="activity-description hidden-xs gb-text-color">

                            <h4>Accommodation</h4>



                            <?= str_replace("\r\n", "<br>", $rowLang['lang_product_sub_info3']) ?>

                        </div>

                    </div>

                    <div class="activity col-xs-3 col-sm-12">

                        <div class="activity-icon">

                            <i class="fa fa-camera fa-2x"></i>

                        </div>

                        <div class="activity-description hidden-xs gb-text-color">

                            <h4>Included activities</h4>



                            <?= str_replace("\r\n", "<br>", $rowLang['lang_product_sub_info4']) ?>

                        </div>

                    </div>

                </div>

            </div>



            <div class="row inclusions-section-tabs visible-xs-block u-margin-top-3">

                <div class="col-xs-12">

                    <ul class="nav nav-tabs" role="tablist">

                        <li role="presentation" class="active"><a href="#meals" aria-controls="meals" role="tab"

                                data-toggle="tab"><i class="fa fa-cutlery fa-2x"></i></a></li>

                        <li role="presentation"><a href="#transport" aria-controls="transport" role="tab"

                                data-toggle="tab"><i class="fa fa-train fa-2x"></i></a></li>

                        <li role="presentation"><a href="#accomadation" aria-controls="accomadation" role="tab"

                                data-toggle="tab"><i class="fa fa-bed fa-2x"></i></a></li>

                        <li role="presentation"><a href="#activities" aria-controls="activities" role="tab"

                                data-toggle="tab"><i class="fa fa-camera fa-2x"></i></a></li>

                    </ul>

                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane fade in active gb-text-color" id="meals">

                            <h4>Meals</h4>

                            <?= str_replace("\r\n", "<br>", $rowLang['lang_product_sub_info1']) ?>

                        </div>

                        <div role="tabpanel" class="tab-pane fade gb-text-color" id="transport">

                            <h4>Transport</h4>

                            <?= str_replace("\r\n", "<br>", $rowLang['lang_product_sub_info2']) ?>

                        </div>

                        <div role="tabpanel" class="tab-pane fade gb-text-color" id="accomadation">

                            <h4>Accommodation</h4>

                            <?= str_replace("\r\n", "<br>", $rowLang['lang_product_sub_info3']) ?>

                        </div>

                        <div role="tabpanel" class="tab-pane fade gb-text-color" id="activities">

                            <h4>Included activities</h4>

                            <?= str_replace("\r\n", "<br>", $rowLang['lang_product_sub_info4']) ?>

                        </div>

                    </div>

                </div>

            </div>



            <div class="u-margin-bottom-1 u-margin-top-1 related-trips hidden">

                <h2>Related Trips</h2>

                <div class="carousel-responsive carousel-responsive--padded shortcode-layout ng-isolate-scope"

                    carousel-responsive="" slides-pagination="false" slides-xs="1" slides-sm="2" slides-md="3"

                    slides-lg="3" data-template="peak-shortcode--layout-carousel">

                    <div class="carousel-responsive__container slick-initialized slick-slider">

                        <div aria-live="polite" class="slick-list draggable" tabindex="0">

                            <div class="slick-track"

                                style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);">

                                <div class="carousel-responsive__item slick-slide slick-active" data-slick-index="0"

                                    aria-hidden="false" style="width: 0px;">



                                    <div class="card-product card-product--map related part-of-package">

                                        <div class="card-product__image">

                                            <a class="card-product__image-link"

                                                href="/en/vietnam/best-cambodia-vietnam-117805">





                                                <div class="image-placeholder"

                                                    style="padding-bottom:calc(26.071428571429%)"><img

                                                        class="img-responsive image lazyload peak-image-responsive ng-scope"

                                                        alt="Map of Best of Cambodia &amp; Vietnam including Cambodia, Thailand and Vietnam"

                                                        title="Map of Best of Cambodia &amp; Vietnam"

                                                        data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tkskc_2018.gif"

                                                        data-sizes="auto" data-expand="100"

                                                        data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tkskc_2018.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tkskc_2018.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tkskc_2018.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tkskc_2018.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tkskc_2018.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tkskc_2018.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tkskc_2018.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tkskc_2018.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tkskc_2018.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tkskc_2018.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tkskc_2018.gif 1400w,">

                                                </div>

                                                <div class="card-product__title">

                                                    <h4 class="card-product__heading">Best of Cambodia &amp; Vietnam

                                                    </h4>

                                                </div>

                                            </a>

                                            <div class="card-product__shortlist">

                                                <div peak-shortlist-heart="" product-code="TKSKC"

                                                    class="ng-isolate-scope">

                                                    <div ng-click="heartClick()"

                                                        ng-class="{'is-shortlisted': inShortlist}"

                                                        class="shortlist-heart"

                                                        ng-attr-data-analytic-event="{{'peak_shortlisted_trips'}}"

                                                        data-trip-code="TKSKC" data-trip-shortlisted="false"

                                                        peak-analytics="" data-analytic-event="peak_shortlisted_trips">

                                                        <i

                                                            class="fa fa-heart-o shortlist-heart__icon shortlist-heart__icon--empty"></i>

                                                        <i

                                                            class="fa fa-heart shortlist-heart__icon shortlist-heart__icon--full"></i>

                                                    </div>

                                                    <div ng-show="showPopover" class="popover shortlist-popover ng-hide"

                                                        ng-class="{'is-visible': showPopover}" role="tooltip">

                                                        <a class="close" ng-click="closePopover()">×</a><b>Want to see

                                                            your Wishlist on all your devices?</b>

                                                        <div>

                                                            <a href=""

                                                                ng-click="customerAuth.goToLoginSignupPage('signup')">Sign

                                                                up</a> so they are saved, and available wherever you log

                                                            in</div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="card-product__top">

                                            <h5 class="card-product__info-heading">

                                                <span class="pull-left">

                                                    18 Days </span>

                                                <span class="pull-right">

                                                    <span class="card-product__from-price">From</span>

                                                    <span class="price-formatter ng-binding ng-isolate-scope"

                                                        price-value="2235">$2,235</span>

                                                </span>

                                            </h5>

                                        </div>

                                        <div class="card-product__bottom">

                                            <div class="card-product__description">

                                                <p>Jump on this adventurous three-week journey to see the very best of

                                                    Cambodia and...</p>

                                            </div>

                                            <div class="card-product__action">

                                                <a href="/en/vietnam/best-cambodia-vietnam-117805"

                                                    class="btn btn-action">View Trip <i class="fa fa-angle-right"></i>

                                                </a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="carousel-responsive__item slick-slide slick-active" data-slick-index="1"

                                    aria-hidden="false" style="width: 0px;">



                                    <div class="card-product card-product--map related recommendation">

                                        <div class="card-product__image">

                                            <a class="card-product__image-link"

                                                href="/en/vietnam/vietnam-discovery-117075">





                                                <div class="image-placeholder"

                                                    style="padding-bottom:calc(26.071428571429%)"><img

                                                        class="img-responsive image lazyload peak-image-responsive ng-scope"

                                                        alt="Map of Vietnam Discovery including Vietnam"

                                                        title="Map of Vietnam Discovery"

                                                        data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/tvrn_2019.gif"

                                                        data-sizes="auto" data-expand="100"

                                                        data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/tvrn_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/tvrn_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/tvrn_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/tvrn_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/tvrn_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/tvrn_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/tvrn_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/tvrn_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/tvrn_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/tvrn_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/tvrn_2019.gif 1400w,">

                                                </div>

                                                <div class="card-product__title">

                                                    <h4 class="card-product__heading">Vietnam Discovery</h4>

                                                </div>

                                            </a>

                                            <div class="card-product__shortlist">

                                                <div peak-shortlist-heart="" product-code="TVRN"

                                                    class="ng-isolate-scope">

                                                    <div ng-click="heartClick()"

                                                        ng-class="{'is-shortlisted': inShortlist}"

                                                        class="shortlist-heart"

                                                        ng-attr-data-analytic-event="{{'peak_shortlisted_trips'}}"

                                                        data-trip-code="TVRN" data-trip-shortlisted="false"

                                                        peak-analytics="" data-analytic-event="peak_shortlisted_trips">

                                                        <i

                                                            class="fa fa-heart-o shortlist-heart__icon shortlist-heart__icon--empty"></i>

                                                        <i

                                                            class="fa fa-heart shortlist-heart__icon shortlist-heart__icon--full"></i>

                                                    </div>

                                                    <div ng-show="showPopover" class="popover shortlist-popover ng-hide"

                                                        ng-class="{'is-visible': showPopover}" role="tooltip">

                                                        <a class="close" ng-click="closePopover()">×</a><b>Want to see

                                                            your Wishlist on all your devices?</b>

                                                        <div>

                                                            <a href=""

                                                                ng-click="customerAuth.goToLoginSignupPage('signup')">Sign

                                                                up</a> so they are saved, and available wherever you log

                                                            in</div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="card-product__top">

                                            <h5 class="card-product__info-heading">

                                                <span class="pull-left">

                                                    15 Days </span>

                                                <span class="pull-right">

                                                    <span class="card-product__from-price">From</span>

                                                    <span class="price-formatter ng-binding ng-isolate-scope"

                                                        price-value="982">$982</span>

                                                </span>

                                            </h5>

                                        </div>

                                        <div class="card-product__bottom">

                                            <div class="card-product__description">

                                                <p>Discover Vietnam and all its wonders on this exciting two-week tour.

                                                    Uncover hidden...</p>

                                            </div>

                                            <div class="card-product__action">

                                                <a href="/en/vietnam/vietnam-discovery-117075"

                                                    class="btn btn-action">View Trip <i class="fa fa-angle-right"></i>

                                                </a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="carousel-responsive__item slick-slide slick-active" data-slick-index="2"

                                    aria-hidden="false" style="width: 0px;">



                                    <div class="card-product card-product--map related recommendation">

                                        <div class="card-product__image">

                                            <a class="card-product__image-link" href="/en/vietnam/best-vietnam-117047">





                                                <div class="image-placeholder"

                                                    style="padding-bottom:calc(26.071428571429%)"><img

                                                        class="img-responsive image lazyload peak-image-responsive ng-scope"

                                                        alt="Map of Best of Vietnam including Vietnam"

                                                        title="Map of Best of Vietnam"

                                                        data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/TVST_2019.gif"

                                                        data-sizes="auto" data-expand="100"

                                                        data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/TVST_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/TVST_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/TVST_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/TVST_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/TVST_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/TVST_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/TVST_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/TVST_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/TVST_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/TVST_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/TVST_2019.gif 1400w,">

                                                </div>

                                                <div class="card-product__title">

                                                    <h4 class="card-product__heading">Best of Vietnam</h4>

                                                </div>

                                            </a>

                                            <div class="card-product__shortlist">

                                                <div peak-shortlist-heart="" product-code="TVST"

                                                    class="ng-isolate-scope">

                                                    <div ng-click="heartClick()"

                                                        ng-class="{'is-shortlisted': inShortlist}"

                                                        class="shortlist-heart"

                                                        ng-attr-data-analytic-event="{{'peak_shortlisted_trips'}}"

                                                        data-trip-code="TVST" data-trip-shortlisted="false"

                                                        peak-analytics="" data-analytic-event="peak_shortlisted_trips">

                                                        <i

                                                            class="fa fa-heart-o shortlist-heart__icon shortlist-heart__icon--empty"></i>

                                                        <i

                                                            class="fa fa-heart shortlist-heart__icon shortlist-heart__icon--full"></i>

                                                    </div>

                                                    <div ng-show="showPopover" class="popover shortlist-popover ng-hide"

                                                        ng-class="{'is-visible': showPopover}" role="tooltip">

                                                        <a class="close" ng-click="closePopover()">×</a><b>Want to see

                                                            your Wishlist on all your devices?</b>

                                                        <div>

                                                            <a href=""

                                                                ng-click="customerAuth.goToLoginSignupPage('signup')">Sign

                                                                up</a> so they are saved, and available wherever you log

                                                            in</div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="card-product__top">

                                            <h5 class="card-product__info-heading">

                                                <span class="pull-left">

                                                    20 Days </span>

                                                <span class="pull-right">

                                                    <span class="card-product__from-price">From</span>

                                                    <span class="price-formatter ng-binding ng-isolate-scope"

                                                        price-value="2057">$2,057</span>

                                                </span>

                                            </h5>

                                        </div>

                                        <div class="card-product__bottom">

                                            <div class="card-product__description">

                                                <p>From bustling Ho Chi Minh City to historical Hanoi, the Best of

                                                    Vietnam tour is an...</p>

                                            </div>

                                            <div class="card-product__action">

                                                <a href="/en/vietnam/best-vietnam-117047" class="btn btn-action">View

                                                    Trip <i class="fa fa-angle-right"></i>

                                                </a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>





                    </div>

                    <div class="carousel-controls">

                        <button class="btn carousel-controls__button carousel-controls__button--next">

                            <i class="fa fa-angle-right fa-2x"></i>

                        </button>

                        <button class="btn carousel-controls__button carousel-controls__button--previous">

                            <i class="fa fa-angle-left fa-2x"></i>

                        </button>

                    </div>

                </div>

            </div>



            <div class="u-margin-top-3 important-notes-section">

                <h2 id="Dates" class="gb-title" data-anchortext="Important notes" data-faicon="pencil-square-o">Dates & Price

                </h2>

                <!-- <div style="text-align: center;background-color: #ccc;padding: 10px;">

                    Prices may, so secure your trip today!

                </div> -->

                <!-- <div style="color: #b51c1c;font-size: 20px;font-weight: bold;margin: 20px 0;">

                    PRICE

                </div> -->

                <p class="gb-text-color">

                    Start price per person based on hotel standard and number of travellers. The price is subject to change depending upon availability and high or low season. Prices may change, so secure your trip today!

                </p>

                <p style="font-weight: bold;">Price Per Person In USD</p>

                <table class="table table-bordered table-price" style="">

                    <!-- <thead>

                        <tr class="">

                            <th class="line1">

                                <span class="inf">Hotel</span>

                                <span class="sup">Pax</span>
                                Hotel

                            </th>

                            <th>Single traveller</th>

                            <th>2 - 3</th>

                            <th>4 - 5</th>

                            <th>6 - 7</th>

                            <th>8 - 9</th>

                            <th>10 - 11</th>

                            <th>12 -14</th>

                        </tr>

                    </thead> -->

                    <tbody>

                        <tr class="">

                            <td>

                                Hotel

                            </td>

                            <td>Single traveller</td>

                            <td>2 - 3</td>

                            <td>4 - 5</td>

                            <td>6 - 7</td>

                            <td>8 - 9</td>

                            <td>10 - 11</td>

                            <td>12 -14</td>

                        </tr>

                        <tr>

                            <td>3 Stars</td>

                            <td><?= $bang_gia['price_1'] ?></td>

                            <td><?= $bang_gia['price_2'] ?></td>

                            <td><?= $bang_gia['price_3'] ?></td>

                            <td><?= $bang_gia['price_4'] ?></td>

                            <td><?= $bang_gia['price_5'] ?></td>

                            <td><?= $bang_gia['price_6'] ?></td>

                            <td><?= $bang_gia['price_7'] ?></td>

                        </tr>

                        <tr>

                            <td>4 Stars</td>

                            <td><?= $bang_gia['price_8'] ?></td>

                            <td><?= $bang_gia['price_9'] ?></td>

                            <td><?= $bang_gia['price_10'] ?></td>

                            <td><?= $bang_gia['price_11'] ?></td>

                            <td><?= $bang_gia['price_12'] ?></td>

                            <td><?= $bang_gia['price_13'] ?></td>

                            <td><?= $bang_gia['price_14'] ?></td>

                        </tr>

                        <tr>

                            <td>5 Stars</td>

                            <td><?= $bang_gia['price_15'] ?></td>

                            <td><?= $bang_gia['price_16'] ?></td>

                            <td><?= $bang_gia['price_17'] ?></td>

                            <td><?= $bang_gia['price_18'] ?></td>

                            <td><?= $bang_gia['price_19'] ?></td>

                            <td><?= $bang_gia['price_20'] ?></td>

                            <td><?= $bang_gia['price_21'] ?></td>

                        </tr>

                    </tbody>

                </table>

                

                <div class="row" style="display: <?= $bang_gia == NULL ? 'none' : 'block'; ?>">

                    <div class="col-md-5" id="book-tour-1" style="">

                        <a href="/tailor-your-trip/<?= $row['product_id'] ?>" style="">Book this tour</a>

                    </div>

                    <div class="col-md-2" style="text-align: center;padding: 15px 0;">

                        <a style="font-size: 24px;padding: 15px 40px;">Or</a>

                    </div>

                    <div class="col-md-5" id="book-tour-2" style="">

                        <a href="/customize-this-tour/<?= $row['product_id'] ?>" style="">Customize trip</a>

                    </div>

                </div>

            </div>



            <div class="u-margin-top-3 important-notes-section">

                <h2 id="fact-box-notes" class="gb-title" data-anchortext="Important notes" data-faicon="pencil-square-o">Important notes

                </h2>


                <div class="gb-text-color">
                    <?= $rowLang['lang_product_content2'] ?>
                </div>
                

            </div>





            <!-- <div class="well well-lg essential-info-section u-margin-top-4 text-center">

                <img class="lazyload" src="/images/icon-eti-intrepid.png" width="80px" height="75px">

                <h2 id="essential-trip-info" data-anchortext="Essential trip information" data-faicon="file-text-o">

                    Essential trip information</h2>

                <p>Want an in-depth insight into this trip? Essential Trip Information provides a detailed itinerary,

                    visa info, how to get to your hotel, what's included - pretty much everything you need to know about

                    this adventure and more.</p>

                <a href="">View Essential Trip Information</a>

            </div> -->



            



            <div class="visible-xs-block l-float-bottom affix">

                <a href="#dates" anchor-offset="50" class="btn btn-primary btn-block ng-scope">

                    <i class="fa fa-calendar"></i> Go to dates </a>

            </div>

            
        </section>
    </div>

</div>

<!-- <script>

    $(document).ready(function () {



        $("#owl-demo").owlCarousel({



            autoPlay: 3000, //Set AutoPlay to 3 seconds



            items: 4,

            itemsDesktop: [1199, 3],

            itemsDesktopSmall: [979, 3]



        });



    });

</script> -->
