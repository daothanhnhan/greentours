<link rel="stylesheet" href="./plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="./plugin/owl-carouse/owl.theme.default.min.css">
<div class="des_danhmuc">
    <?php                                                                        
    if (isset($_GET['slug']) && $_GET['slug'] != '') {
        $slug = $_GET['slug'];

        $rowCatLang = $action_product->getProductCatLangDetail_byUrl($slug,$lang);
        $rowCat = $action_product->getProductCatDetail_byId($rowCatLang['productcat_id'],$lang);
        $rows = $action_product->getProductList_byMultiLevel_orderProductId($rowCat['productcat_id'],'desc',$trang,12,$slug);//var_dump($rows);
    }else{
        $rows = $action->getList('product','','','product_id','desc',$trang,12,'san-pham');
    }
    
    $_SESSION['sidebar'] = 'productCat';
    echo $rowCatLang['lang_productcat_des'];
?>
</div>
<?php
$product_type = new action_product();
$product_hot = $product_type->getListProductHot_hasLimit(12);
$product_promotions = $product_type->getListProductSaleOff_hasLimit(12);
$product_new = $product_type->getListProductNew_hasLimit(12);?>
<div class="gb-product-home">
    <!--SHOW PRODUCT ITEM-->
    <div class="gb-product-show">
        <div class="panel-body">
            <div class="tab-content">
                <!--SẢN PHẨM KHUYẾN MẠI-->
                <h2 class="list_trips"> Top Vietnam travel deals</h2>
                <div class="table-departure ng-scope" data-template="peak-shortcode-departure--display-table"
                    peak-departure-show-more="">
                    <div class="table-departure__collection">
                        <table class="table table-striped table-td-middle-align">
                            <thead>
                                <tr>
                                    <th>Departing</th>
                                    <th class="hidden-xs">Trip name</th>
                                    <th class="hidden-xs hidden-sm"></th>
                                    <th>Days</th>
                                    <th class="text-center">From USD</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-departure__item ">
                                    <td class="table-departure__date">
                                        <h5><a href="/en/vietnam/cycle-northern-vietnam-115665">8 Sep 2019</a></h5>
                                        <span class="visible-xs"><a
                                                href="/en/vietnam/cycle-northern-vietnam-115665">Cycle Northern
                                                Vietnam</a></span>
                                    </td>
                                    <td class="hidden-xs">
                                        <p><a href="/en/vietnam/cycle-northern-vietnam-115665">Cycle Northern
                                                Vietnam</a></p>
                                        <p>Hanoi to Hanoi</p>
                                    </td>
                                    <td class="hidden-xs hidden-sm">
                                        <div class="map-circle" data-toggle="modal"
                                            data-target=".departure-modal-5d68969d67578-0" title="View trip map">
                                            <div class="image-placeholder1" style="padding-bottom:calc(100%)"><img
                                                    class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"
                                                    width="75" height="75"
                                                    alt="Map of Cycle Northern Vietnam including Vietnam"
                                                    title="Map of Cycle Northern Vietnam"
                                                    data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvxs_2020.gif"
                                                    data-sizes="auto" data-expand="100"
                                                    data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvxs_2020.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvxs_2020.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvxs_2020.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvxs_2020.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvxs_2020.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvxs_2020.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvxs_2020.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvxs_2020.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvxs_2020.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvxs_2020.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvxs_2020.gif 1400w,"
                                                    sizes="75px"
                                                    srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvxs_2020.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvxs_2020.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvxs_2020.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvxs_2020.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvxs_2020.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvxs_2020.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvxs_2020.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvxs_2020.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvxs_2020.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvxs_2020.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvxs_2020.gif 1400w,"
                                                    src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvxs_2020.gif">
                                            </div>
                                        </div>
                                        <div class="modal fade departure-modal-5d68969d67578-0" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                            open-modal="">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">×</span></button>
                                                        <h4 class="modal-title">Cycle Northern Vietnam</h4>
                                                    </div>
                                                    <div class="modal-hero-image">
                                                        <div class="image-placeholder1"
                                                            style="padding-bottom:calc(66.818181818182%)"><img
                                                                class="img-responsive image lazyload peak-image-responsive ng-scope"
                                                                width="2200" height="1470"
                                                                alt="Map of Cycle Northern Vietnam including Vietnam"
                                                                title="Map of Cycle Northern Vietnam"
                                                                data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvxs_2020.gif"
                                                                data-sizes="auto" data-expand="100"
                                                                data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvxs_2020.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvxs_2020.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvxs_2020.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvxs_2020.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvxs_2020.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvxs_2020.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvxs_2020.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvxs_2020.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvxs_2020.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvxs_2020.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvxs_2020.gif 1400w,">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>8</td>
                                    <td class="table-departure__price text-center">
                                        <s class="table-departure__price--discount"><span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="1080">$1,080</span></s>
                                        <div class="table-departure__price--sale">
                                            <i class="fa fa-fire"></i> <span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="972">$972</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn-icon hidden-lg"
                                            href="/en/vietnam/cycle-northern-vietnam-115665"><i
                                                class="fa fa-arrow-circle-right"></i></a>
                                        <a href="/en/vietnam/cycle-northern-vietnam-115665"
                                            class="btn btn-action visible-lg">View Trip <i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="table-departure__item ">
                                    <td class="table-departure__date">
                                        <h5><a href="/en/vietnam/cambodia-vietnam-experience-118942">9 Sep 2019</a></h5>
                                        <span class="visible-xs"><a
                                                href="/en/vietnam/cambodia-vietnam-experience-118942">Cambodia &amp;
                                                Vietnam Experience</a></span>
                                    </td>
                                    <td class="hidden-xs">
                                        <p><a href="/en/vietnam/cambodia-vietnam-experience-118942">Cambodia &amp;
                                                Vietnam Experience</a></p>
                                        <p>Bangkok to Hanoi</p>
                                    </td>
                                    <td class="hidden-xs hidden-sm">
                                        <div class="map-circle" data-toggle="modal"
                                            data-target=".departure-modal-5d68969d67578-1" title="View trip map">
                                            <div class="image-placeholder1" style="padding-bottom:calc(100%)"><img
                                                    class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"
                                                    width="75" height="75"
                                                    alt="Map of Cambodia &amp; Vietnam Experience including Cambodia, Thailand and Vietnam"
                                                    title="Map of Cambodia &amp; Vietnam Experience"
                                                    data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/TKRNC_2019.gif"
                                                    data-sizes="auto" data-expand="100"
                                                    data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/TKRNC_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/TKRNC_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/TKRNC_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/TKRNC_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/TKRNC_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/TKRNC_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/TKRNC_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/TKRNC_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/TKRNC_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/TKRNC_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/TKRNC_2019.gif 1400w,"
                                                    sizes="75px"
                                                    srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/TKRNC_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/TKRNC_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/TKRNC_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/TKRNC_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/TKRNC_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/TKRNC_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/TKRNC_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/TKRNC_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/TKRNC_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/TKRNC_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/TKRNC_2019.gif 1400w,"
                                                    src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/TKRNC_2019.gif">
                                            </div>
                                        </div>
                                        <div class="modal fade departure-modal-5d68969d67578-1" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                            open-modal="">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">×</span></button>
                                                        <h4 class="modal-title">Cambodia &amp; Vietnam Experience</h4>
                                                    </div>
                                                    <div class="modal-hero-image">
                                                        <div class="image-placeholder1"
                                                            style="padding-bottom:calc(66.818181818182%)"><img
                                                                class="img-responsive image lazyload peak-image-responsive ng-scope"
                                                                width="2200" height="1470"
                                                                alt="Map of Cambodia &amp; Vietnam Experience including Cambodia, Thailand and Vietnam"
                                                                title="Map of Cambodia &amp; Vietnam Experience"
                                                                data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/TKRNC_2019.gif"
                                                                data-sizes="auto" data-expand="100"
                                                                data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/TKRNC_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/TKRNC_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/TKRNC_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/TKRNC_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/TKRNC_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/TKRNC_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/TKRNC_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/TKRNC_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/TKRNC_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/TKRNC_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/TKRNC_2019.gif 1400w,">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>26</td>
                                    <td class="table-departure__price text-center">
                                        <s class="table-departure__price--discount"><span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="2065">$2,065</span></s>
                                        <div class="table-departure__price--sale">
                                            <i class="fa fa-fire"></i> <span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="1859">$1,859</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn-icon hidden-lg"
                                            href="/en/vietnam/cambodia-vietnam-experience-118942"><i
                                                class="fa fa-arrow-circle-right"></i></a>
                                        <a href="/en/vietnam/cambodia-vietnam-experience-118942"
                                            class="btn btn-action visible-lg">View Trip <i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="table-departure__item ">
                                    <td class="table-departure__date">
                                        <h5><a href="/en/thailand/epic-cambodia-vietnam-118434">10 Sep 2019</a></h5>
                                        <span class="visible-xs"><a
                                                href="/en/thailand/epic-cambodia-vietnam-118434">Epic Cambodia to
                                                Vietnam</a></span>
                                        <div class="table-departure__badge visible-xs">Ages 18 to 29</div>
                                    </td>
                                    <td class="hidden-xs">
                                        <p><a href="/en/thailand/epic-cambodia-vietnam-118434">Epic Cambodia to
                                                Vietnam</a></p>
                                        <p>Bangkok to Hanoi</p>
                                        <div class="table-departure__badge">Ages 18 to 29</div>
                                    </td>
                                    <td class="hidden-xs hidden-sm">
                                        <div class="map-circle" data-toggle="modal"
                                            data-target=".departure-modal-5d68969d67578-2" title="View trip map">
                                            <div class="image-placeholder1" style="padding-bottom:calc(100%)"><img
                                                    class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"
                                                    width="75" height="75"
                                                    alt="Map of Epic Cambodia to Vietnam including Cambodia, Thailand and Vietnam"
                                                    title="Map of Epic Cambodia to Vietnam"
                                                    data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/TKYMC_2019.gif"
                                                    data-sizes="auto" data-expand="100"
                                                    data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/TKYMC_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/TKYMC_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/TKYMC_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/TKYMC_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/TKYMC_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/TKYMC_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/TKYMC_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/TKYMC_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/TKYMC_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/TKYMC_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/TKYMC_2019.gif 1400w,"
                                                    sizes="75px"
                                                    srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/TKYMC_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/TKYMC_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/TKYMC_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/TKYMC_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/TKYMC_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/TKYMC_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/TKYMC_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/TKYMC_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/TKYMC_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/TKYMC_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/TKYMC_2019.gif 1400w,"
                                                    src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/TKYMC_2019.gif">
                                            </div>
                                        </div>
                                        <div class="modal fade departure-modal-5d68969d67578-2" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                            open-modal="">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">×</span></button>
                                                        <h4 class="modal-title">Epic Cambodia to Vietnam</h4>
                                                    </div>
                                                    <div class="modal-hero-image">
                                                        <div class="image-placeholder1"
                                                            style="padding-bottom:calc(66.818181818182%)"><img
                                                                class="img-responsive image lazyload peak-image-responsive ng-scope"
                                                                width="2200" height="1470"
                                                                alt="Map of Epic Cambodia to Vietnam including Cambodia, Thailand and Vietnam"
                                                                title="Map of Epic Cambodia to Vietnam"
                                                                data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/TKYMC_2019.gif"
                                                                data-sizes="auto" data-expand="100"
                                                                data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/TKYMC_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/TKYMC_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/TKYMC_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/TKYMC_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/TKYMC_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/TKYMC_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/TKYMC_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/TKYMC_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/TKYMC_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/TKYMC_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/TKYMC_2019.gif 1400w,">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>24</td>
                                    <td class="table-departure__price text-center">
                                        <s class="table-departure__price--discount"><span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="1745">$1,745</span></s>
                                        <div class="table-departure__price--sale">
                                            <i class="fa fa-fire"></i> <span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="1484">$1,484</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn-icon hidden-lg"
                                            href="/en/thailand/epic-cambodia-vietnam-118434"><i
                                                class="fa fa-arrow-circle-right"></i></a>
                                        <a href="/en/thailand/epic-cambodia-vietnam-118434"
                                            class="btn btn-action visible-lg">View Trip <i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="table-departure__item ">
                                    <td class="table-departure__date">
                                        <h5><a href="/en/vietnam/explore-vietnam-117076">11 Sep 2019</a></h5>
                                        <span class="visible-xs"><a href="/en/vietnam/explore-vietnam-117076">Explore
                                                Vietnam</a></span>
                                    </td>
                                    <td class="hidden-xs">
                                        <p><a href="/en/vietnam/explore-vietnam-117076">Explore Vietnam</a></p>
                                        <p>Hanoi to Ho Chi Minh City</p>
                                    </td>
                                    <td class="hidden-xs hidden-sm">
                                        <div class="map-circle" data-toggle="modal"
                                            data-target=".departure-modal-5d68969d67578-3" title="View trip map">
                                            <div class="image-placeholder1" style="padding-bottom:calc(100%)"><img
                                                    class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"
                                                    width="75" height="75"
                                                    alt="Map of Explore Vietnam including Vietnam"
                                                    title="Map of Explore Vietnam"
                                                    data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvrr_2019.gif"
                                                    data-sizes="auto" data-expand="100"
                                                    data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvrr_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvrr_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvrr_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvrr_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvrr_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvrr_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvrr_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvrr_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvrr_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvrr_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvrr_2019.gif 1400w,"
                                                    sizes="75px"
                                                    srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvrr_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvrr_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvrr_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvrr_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvrr_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvrr_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvrr_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvrr_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvrr_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvrr_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvrr_2019.gif 1400w,"
                                                    src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvrr_2019.gif">
                                            </div>
                                        </div>
                                        <div class="modal fade departure-modal-5d68969d67578-3" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                            open-modal="">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">×</span></button>
                                                        <h4 class="modal-title">Explore Vietnam</h4>
                                                    </div>
                                                    <div class="modal-hero-image">
                                                        <div class="image-placeholder1"
                                                            style="padding-bottom:calc(66.818181818182%)"><img
                                                                class="img-responsive image lazyload peak-image-responsive ng-scope"
                                                                width="2200" height="1470"
                                                                alt="Map of Explore Vietnam including Vietnam"
                                                                title="Map of Explore Vietnam"
                                                                data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvrr_2019.gif"
                                                                data-sizes="auto" data-expand="100"
                                                                data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvrr_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvrr_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvrr_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvrr_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvrr_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvrr_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvrr_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvrr_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvrr_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvrr_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvrr_2019.gif 1400w,">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>11</td>
                                    <td class="table-departure__price text-center">
                                        <s class="table-departure__price--discount"><span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="835">$835</span></s>
                                        <div class="table-departure__price--sale">
                                            <i class="fa fa-fire"></i> <span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="668">$668</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn-icon hidden-lg" href="/en/vietnam/explore-vietnam-117076"><i
                                                class="fa fa-arrow-circle-right"></i></a>
                                        <a href="/en/vietnam/explore-vietnam-117076"
                                            class="btn btn-action visible-lg">View Trip <i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="table-departure__item ">
                                    <td class="table-departure__date">
                                        <h5><a href="/en/vietnam/vietnam-discovery-117075">13 Sep 2019</a></h5>
                                        <span class="visible-xs"><a href="/en/vietnam/vietnam-discovery-117075">Vietnam
                                                Discovery</a></span>
                                    </td>
                                    <td class="hidden-xs">
                                        <p><a href="/en/vietnam/vietnam-discovery-117075">Vietnam Discovery</a></p>
                                        <p>Ho Chi Minh City to Hanoi</p>
                                    </td>
                                    <td class="hidden-xs hidden-sm">
                                        <div class="map-circle" data-toggle="modal"
                                            data-target=".departure-modal-5d68969d67578-4" title="View trip map">
                                            <div class="image-placeholder1" style="padding-bottom:calc(100%)"><img
                                                    class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"
                                                    width="75" height="75"
                                                    alt="Map of Vietnam Discovery including Vietnam"
                                                    title="Map of Vietnam Discovery"
                                                    data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/tvrn_2019.gif"
                                                    data-sizes="auto" data-expand="100"
                                                    data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/tvrn_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/tvrn_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/tvrn_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/tvrn_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/tvrn_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/tvrn_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/tvrn_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/tvrn_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/tvrn_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/tvrn_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/tvrn_2019.gif 1400w,"
                                                    sizes="75px"
                                                    srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/tvrn_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/tvrn_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/tvrn_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/tvrn_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/tvrn_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/tvrn_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/tvrn_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/tvrn_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/tvrn_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/tvrn_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/tvrn_2019.gif 1400w,"
                                                    src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/tvrn_2019.gif">
                                            </div>
                                        </div>
                                        <div class="modal fade departure-modal-5d68969d67578-4" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                            open-modal="">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">×</span></button>
                                                        <h4 class="modal-title">Vietnam Discovery</h4>
                                                    </div>
                                                    <div class="modal-hero-image">
                                                        <div class="image-placeholder1"
                                                            style="padding-bottom:calc(66.818181818182%)"><img
                                                                class="img-responsive image lazyload peak-image-responsive ng-scope"
                                                                width="2200" height="1470"
                                                                alt="Map of Vietnam Discovery including Vietnam"
                                                                title="Map of Vietnam Discovery"
                                                                data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/tvrn_2019.gif"
                                                                data-sizes="auto" data-expand="100"
                                                                data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/tvrn_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/tvrn_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/tvrn_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/tvrn_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/tvrn_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/tvrn_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/tvrn_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/tvrn_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/tvrn_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/tvrn_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/tvrn_2019.gif 1400w,">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>15</td>
                                    <td class="table-departure__price text-center">
                                        <s class="table-departure__price--discount"><span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="1155">$1,155</span></s>
                                        <div class="table-departure__price--sale">
                                            <i class="fa fa-fire"></i> <span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="982">$982</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn-icon hidden-lg" href="/en/vietnam/vietnam-discovery-117075"><i
                                                class="fa fa-arrow-circle-right"></i></a>
                                        <a href="/en/vietnam/vietnam-discovery-117075"
                                            class="btn btn-action visible-lg">View Trip <i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="table-departure__item ">
                                    <td class="table-departure__date">
                                        <h5><a href="/en/vietnam/epic-vietnam-cambodia-118365">15 Sep 2019</a></h5>
                                        <span class="visible-xs"><a href="/en/vietnam/epic-vietnam-cambodia-118365">Epic
                                                Vietnam to Cambodia</a></span>
                                        <div class="table-departure__badge visible-xs">Ages 18 to 29</div>
                                    </td>
                                    <td class="hidden-xs">
                                        <p><a href="/en/vietnam/epic-vietnam-cambodia-118365">Epic Vietnam to
                                                Cambodia</a></p>
                                        <p>Hanoi to Bangkok</p>
                                        <div class="table-departure__badge">Ages 18 to 29</div>
                                    </td>
                                    <td class="hidden-xs hidden-sm">
                                        <div class="map-circle" data-toggle="modal"
                                            data-target=".departure-modal-5d68969d67578-5" title="View trip map">
                                            <div class="image-placeholder1" style="padding-bottom:calc(100%)"><img
                                                    class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"
                                                    width="75" height="75"
                                                    alt="Map of Epic Vietnam to Cambodia including Cambodia, Thailand and Vietnam"
                                                    title="Map of Epic Vietnam to Cambodia"
                                                    data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvysc_2019.gif"
                                                    data-sizes="auto" data-expand="100"
                                                    data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvysc_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvysc_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvysc_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvysc_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvysc_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvysc_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvysc_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvysc_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvysc_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvysc_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvysc_2019.gif 1400w,"
                                                    sizes="75px"
                                                    srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvysc_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvysc_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvysc_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvysc_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvysc_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvysc_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvysc_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvysc_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvysc_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvysc_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvysc_2019.gif 1400w,"
                                                    src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvysc_2019.gif">
                                            </div>
                                        </div>
                                        <div class="modal fade departure-modal-5d68969d67578-5" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                            open-modal="">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">×</span></button>
                                                        <h4 class="modal-title">Epic Vietnam to Cambodia</h4>
                                                    </div>
                                                    <div class="modal-hero-image">
                                                        <div class="image-placeholder1"
                                                            style="padding-bottom:calc(66.666666666667%)"><img
                                                                class="img-responsive image lazyload peak-image-responsive ng-scope"
                                                                width="2205" height="1470"
                                                                alt="Map of Epic Vietnam to Cambodia including Cambodia, Thailand and Vietnam"
                                                                title="Map of Epic Vietnam to Cambodia"
                                                                data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvysc_2019.gif"
                                                                data-sizes="auto" data-expand="100"
                                                                data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvysc_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvysc_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvysc_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvysc_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvysc_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvysc_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvysc_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvysc_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvysc_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvysc_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvysc_2019.gif 1400w,">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>22</td>
                                    <td class="table-departure__price text-center">
                                        <s class="table-departure__price--discount"><span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="1750">$1,750</span></s>
                                        <div class="table-departure__price--sale">
                                            <i class="fa fa-fire"></i> <span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="1575">$1,575</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn-icon hidden-lg" href="/en/vietnam/epic-vietnam-cambodia-118365"><i
                                                class="fa fa-arrow-circle-right"></i></a>
                                        <a href="/en/vietnam/epic-vietnam-cambodia-118365"
                                            class="btn btn-action visible-lg">View Trip <i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="table-departure__item">
                                    <td class="table-departure__date">
                                        <h5><a href="/en/vietnam/vietnam-hike-bike-kayak-117071">15 Sep 2019</a></h5>
                                        <span class="visible-xs"><a
                                                href="/en/vietnam/vietnam-hike-bike-kayak-117071">Vietnam: Hike, Bike
                                                &amp; Kayak</a></span>
                                    </td>
                                    <td class="hidden-xs">
                                        <p><a href="/en/vietnam/vietnam-hike-bike-kayak-117071">Vietnam: Hike, Bike
                                                &amp; Kayak</a></p>
                                        <p>Hanoi to Hanoi</p>
                                    </td>
                                    <td class="hidden-xs hidden-sm">
                                        <div class="map-circle" data-toggle="modal"
                                            data-target=".departure-modal-5d68969d67578-6" title="View trip map">
                                            <div class="image-placeholder1" style="padding-bottom:calc(100%)"><img
                                                    class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"
                                                    width="75" height="75"
                                                    alt="Map of Vietnam: Hike, Bike &amp; Kayak including Vietnam"
                                                    title="Map of Vietnam: Hike, Bike &amp; Kayak"
                                                    data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvxa_2019.gif"
                                                    data-sizes="auto" data-expand="100"
                                                    data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvxa_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvxa_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvxa_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvxa_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvxa_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvxa_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvxa_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvxa_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvxa_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvxa_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvxa_2019.gif 1400w,"
                                                    sizes="75px"
                                                    srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvxa_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvxa_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvxa_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvxa_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvxa_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvxa_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvxa_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvxa_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvxa_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvxa_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvxa_2019.gif 1400w,"
                                                    src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvxa_2019.gif">
                                            </div>
                                        </div>
                                        <div class="modal fade departure-modal-5d68969d67578-6" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                            open-modal="">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">×</span></button>
                                                        <h4 class="modal-title">Vietnam: Hike, Bike &amp; Kayak</h4>
                                                    </div>
                                                    <div class="modal-hero-image">
                                                        <div class="image-placeholder1"
                                                            style="padding-bottom:calc(66.818181818182%)"><img
                                                                class="img-responsive image lazyload peak-image-responsive ng-scope"
                                                                width="2200" height="1470"
                                                                alt="Map of Vietnam: Hike, Bike &amp; Kayak including Vietnam"
                                                                title="Map of Vietnam: Hike, Bike &amp; Kayak"
                                                                data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvxa_2019.gif"
                                                                data-sizes="auto" data-expand="100"
                                                                data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvxa_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvxa_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvxa_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvxa_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvxa_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvxa_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvxa_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvxa_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvxa_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvxa_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvxa_2019.gif 1400w,">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>11</td>
                                    <td class="table-departure__price text-center">
                                        <s class="table-departure__price--discount"><span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="1425">$1,425</span></s>
                                        <div class="table-departure__price--sale">
                                            <i class="fa fa-fire"></i> <span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="1212">$1,212</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn-icon hidden-lg"
                                            href="/en/vietnam/vietnam-hike-bike-kayak-117071"><i
                                                class="fa fa-arrow-circle-right"></i></a>
                                        <a href="/en/vietnam/vietnam-hike-bike-kayak-117071"
                                            class="btn btn-action visible-lg">View Trip <i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="table-departure__item">
                                    <td class="table-departure__date">
                                        <h5><a href="/en/vietnam/essential-vietnam-118334">15 Sep 2019</a></h5>
                                        <span class="visible-xs"><a
                                                href="/en/vietnam/essential-vietnam-118334">Essential Vietnam</a></span>
                                        <div class="table-departure__badge visible-xs">Ages 18 to 29</div>
                                    </td>
                                    <td class="hidden-xs">
                                        <p><a href="/en/vietnam/essential-vietnam-118334">Essential Vietnam</a></p>
                                        <p>Hanoi to Ho Chi Minh City</p>
                                        <div class="table-departure__badge">Ages 18 to 29</div>
                                    </td>
                                    <td class="hidden-xs hidden-sm">
                                        <div class="map-circle" data-toggle="modal"
                                            data-target=".departure-modal-5d68969d67578-7" title="View trip map">
                                            <div class="image-placeholder1" style="padding-bottom:calc(100%)"><img
                                                    class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"
                                                    width="75" height="75"
                                                    alt="Map of Essential Vietnam including Vietnam"
                                                    title="Map of Essential Vietnam"
                                                    data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvye_2019.gif"
                                                    data-sizes="auto" data-expand="100"
                                                    data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvye_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvye_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvye_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvye_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvye_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvye_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvye_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvye_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvye_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvye_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvye_2019.gif 1400w,"
                                                    sizes="75px"
                                                    srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvye_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvye_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvye_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvye_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvye_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvye_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvye_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvye_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvye_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvye_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvye_2019.gif 1400w,"
                                                    src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvye_2019.gif">
                                            </div>
                                        </div>
                                        <div class="modal fade departure-modal-5d68969d67578-7" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                            open-modal="">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">×</span></button>
                                                        <h4 class="modal-title">Essential Vietnam</h4>
                                                    </div>
                                                    <div class="modal-hero-image">
                                                        <div class="image-placeholder1"
                                                            style="padding-bottom:calc(66.666666666667%)"><img
                                                                class="img-responsive image lazyload peak-image-responsive ng-scope"
                                                                width="2205" height="1470"
                                                                alt="Map of Essential Vietnam including Vietnam"
                                                                title="Map of Essential Vietnam"
                                                                data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvye_2019.gif"
                                                                data-sizes="auto" data-expand="100"
                                                                data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvye_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvye_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvye_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvye_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvye_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvye_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvye_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvye_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvye_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvye_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvye_2019.gif 1400w,">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>11</td>
                                    <td class="table-departure__price text-center">
                                        <s class="table-departure__price--discount"><span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="845">$845</span></s>
                                        <div class="table-departure__price--sale">
                                            <i class="fa fa-fire"></i> <span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="761">$761</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn-icon hidden-lg" href="/en/vietnam/essential-vietnam-118334"><i
                                                class="fa fa-arrow-circle-right"></i></a>
                                        <a href="/en/vietnam/essential-vietnam-118334"
                                            class="btn btn-action visible-lg">View Trip <i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="table-departure__item">
                                    <td class="table-departure__date">
                                        <h5><a href="/en/vietnam/real-vietnam-118348">19 Sep 2019</a></h5>
                                        <span class="visible-xs"><a href="/en/vietnam/real-vietnam-118348">Real
                                                Vietnam</a></span>
                                        <div class="table-departure__badge visible-xs">Ages 18 to 29</div>
                                    </td>
                                    <td class="hidden-xs">
                                        <p><a href="/en/vietnam/real-vietnam-118348">Real Vietnam</a></p>
                                        <p>Ho Chi Minh City to Hanoi</p>
                                        <div class="table-departure__badge">Ages 18 to 29</div>
                                    </td>
                                    <td class="hidden-xs hidden-sm">
                                        <div class="map-circle" data-toggle="modal"
                                            data-target=".departure-modal-5d68969d67578-8" title="View trip map">
                                            <div class="image-placeholder1" style="padding-bottom:calc(100%)"><img
                                                    class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"
                                                    width="75" height="75" alt="Map of Real Vietnam including Vietnam"
                                                    title="Map of Real Vietnam"
                                                    data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/GTVB-TVYB_2019.gif"
                                                    data-sizes="auto" data-expand="100"
                                                    data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/GTVB-TVYB_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/GTVB-TVYB_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/GTVB-TVYB_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/GTVB-TVYB_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/GTVB-TVYB_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/GTVB-TVYB_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/GTVB-TVYB_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/GTVB-TVYB_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/GTVB-TVYB_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/GTVB-TVYB_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/GTVB-TVYB_2019.gif 1400w,"
                                                    sizes="75px"
                                                    srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/GTVB-TVYB_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/GTVB-TVYB_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/GTVB-TVYB_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/GTVB-TVYB_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/GTVB-TVYB_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/GTVB-TVYB_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/GTVB-TVYB_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/GTVB-TVYB_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/GTVB-TVYB_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/GTVB-TVYB_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/GTVB-TVYB_2019.gif 1400w,"
                                                    src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/GTVB-TVYB_2019.gif">
                                            </div>
                                        </div>
                                        <div class="modal fade departure-modal-5d68969d67578-8" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                            open-modal="">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">×</span></button>
                                                        <h4 class="modal-title">Real Vietnam</h4>
                                                    </div>
                                                    <div class="modal-hero-image">
                                                        <div class="image-placeholder1"
                                                            style="padding-bottom:calc(66.666666666667%)"><img
                                                                class="img-responsive image lazyload peak-image-responsive ng-scope"
                                                                width="2205" height="1470"
                                                                alt="Map of Real Vietnam including Vietnam"
                                                                title="Map of Real Vietnam"
                                                                data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/GTVB-TVYB_2019.gif"
                                                                data-sizes="auto" data-expand="100"
                                                                data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/GTVB-TVYB_2019.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/GTVB-TVYB_2019.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/GTVB-TVYB_2019.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/GTVB-TVYB_2019.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/GTVB-TVYB_2019.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/GTVB-TVYB_2019.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/GTVB-TVYB_2019.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/GTVB-TVYB_2019.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/GTVB-TVYB_2019.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/GTVB-TVYB_2019.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/GTVB-TVYB_2019.gif 1400w,">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>15</td>
                                    <td class="table-departure__price text-center">
                                        <s class="table-departure__price--discount"><span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="1080">$1,080</span></s>
                                        <div class="table-departure__price--sale">
                                            <i class="fa fa-fire"></i> <span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="918">$918</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn-icon hidden-lg" href="/en/vietnam/real-vietnam-118348"><i
                                                class="fa fa-arrow-circle-right"></i></a>
                                        <a href="/en/vietnam/real-vietnam-118348" class="btn btn-action visible-lg">View
                                            Trip <i class="fa fa-angle-right"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="table-departure__item">
                                    <td class="table-departure__date">
                                        <h5><a href="/en/vietnam/vietnam-express-northbound-117045">19 Sep 2019</a></h5>
                                        <span class="visible-xs"><a
                                                href="/en/vietnam/vietnam-express-northbound-117045">Vietnam Express
                                                Northbound</a></span>
                                    </td>
                                    <td class="hidden-xs">
                                        <p><a href="/en/vietnam/vietnam-express-northbound-117045">Vietnam Express
                                                Northbound</a></p>
                                        <p>Ho Chi Minh City to Hanoi</p>
                                    </td>
                                    <td class="hidden-xs hidden-sm">
                                        <div class="map-circle" data-toggle="modal"
                                            data-target=".departure-modal-5d68969d67578-9" title="View trip map">
                                            <div class="image-placeholder1" style="padding-bottom:calc(100%)"><img
                                                    class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"
                                                    width="75" height="75"
                                                    alt="Map of Vietnam Express Northbound including Vietnam"
                                                    title="Map of Vietnam Express Northbound"
                                                    data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvsq_2018.gif"
                                                    data-sizes="auto" data-expand="100"
                                                    data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvsq_2018.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvsq_2018.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvsq_2018.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvsq_2018.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvsq_2018.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvsq_2018.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvsq_2018.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvsq_2018.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvsq_2018.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvsq_2018.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvsq_2018.gif 1400w,"
                                                    sizes="75px"
                                                    srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvsq_2018.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvsq_2018.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvsq_2018.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvsq_2018.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvsq_2018.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvsq_2018.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvsq_2018.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvsq_2018.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvsq_2018.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvsq_2018.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvsq_2018.gif 1400w,"
                                                    src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvsq_2018.gif">
                                            </div>
                                        </div>
                                        <div class="modal fade departure-modal-5d68969d67578-9" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                            open-modal="">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">×</span></button>
                                                        <h4 class="modal-title">Vietnam Express Northbound</h4>
                                                    </div>
                                                    <div class="modal-hero-image">
                                                        <div class="image-placeholder1"
                                                            style="padding-bottom:calc(66.818181818182%)"><img
                                                                class="img-responsive image lazyload peak-image-responsive ng-scope"
                                                                width="2200" height="1470"
                                                                alt="Map of Vietnam Express Northbound including Vietnam"
                                                                title="Map of Vietnam Express Northbound"
                                                                data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvsq_2018.gif"
                                                                data-sizes="auto" data-expand="100"
                                                                data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvsq_2018.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvsq_2018.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvsq_2018.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvsq_2018.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvsq_2018.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvsq_2018.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvsq_2018.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvsq_2018.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvsq_2018.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvsq_2018.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvsq_2018.gif 1400w,">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>10</td>
                                    <td class="table-departure__price text-center">
                                        <s class="table-departure__price--discount"><span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="1205">$1,205</span></s>
                                        <div class="table-departure__price--sale">
                                            <i class="fa fa-fire"></i> <span
                                                class="price-formatter ng-binding ng-isolate-scope"
                                                price-value="1085">$1,085</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn-icon hidden-lg"
                                            href="/en/vietnam/vietnam-express-northbound-117045"><i
                                                class="fa fa-arrow-circle-right"></i></a>
                                        <a href="/en/vietnam/vietnam-express-northbound-117045"
                                            class="btn btn-action visible-lg">View Trip <i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-lg btn-passive table-departure__pagination"
                                    data-departure-col="6" disabled="disabled" style="display: none;">
                                    Show more </button>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="list_trips"> Our Vietnam trips</h2>
                <!--SẢN PHẨM NỔI BẬT-->
                <div class="gb-product-show_slide list_product owl-carousel owl-theme">
                    <?php                            foreach ($product_hot as $item) {                             $rowLang = $product_type->getProductLangDetail_byId($item['product_id'], $lang);                            $row1 = $product_type->getProductDetail_byId($item['product_id'], $lang);                        ?>
                    <div class="item">
                        <div class="product-item">
                            <!--BOX SALE--> <?php //include DIR_PRODUCT."MS_PRODUCT_SPRO_0005.php";?> <div
                                class="item-img"> <a href="/<?= $rowLang['friendly_url'] ?>"><img
                                        src="images/<?= $row1['product_img'] ?>" alt="" class="img-responsive"></a>
                            </div>
                            <div class="item-text1">
                                <div class="caption caption-large1">
                                    <h3><a
                                            href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_product_name'] ?></a>
                                        <span class="fa fa-heart icon-heart"></span>
                                    </h3>
                                </div>
                                <!--PRICE--> <?php include DIR_PRODUCT."MS_PRODUCT_SPRO_0002.php";?>
                                <!--Mô tả ngắn--> <?php include DIR_PRODUCT."MS_PRODUCT_SPRO_0012.php";?>
                                <!--Add to cart--> <?php include DIR_CART."MS_CART_SPRO_0003.php";?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="des_danhmuc">
    <h2 class="list_trips">Video</h2>
    <iframe width="100%" height="415" src="https://www.youtube.com/embed/M2o-AnFChT4" frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="des_danhmuc">
    <h2 class="list_trips">Transport in vietnam</h2>
    <p>At Buffalo Tours, we specialise in tailor, guided tours to Vietnam, Cambodia, Thailand, Myanamar, Laos, China,
        HongKong, Singapore, Indonesia and Japan, as well as multi-country tours acrouss the region. We offer an
        expansive portolio of tours carefully crafted to showcase the very best of Asia. Our travel experts create
        tailor made travel packages to match all your travel preferences and needs</p>
    <div class="row">
        <div class="col-md-6">
            <img
                src="http://www.adventurefaktory.com/wp-content/uploads/2015/05/AF_transportvietnam_xitlo-1-600x400.jpg">
        </div>
        <div class="col-md-6">
            <h3>Over night sleeper train</h3>
            <p>At Buffalo Tours, we specialise in tailor, guided tours to Vietnam, Cambodia, Thailand, Myanamar, Laos,
                China, HongKong</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img
                src="http://www.adventurefaktory.com/wp-content/uploads/2015/05/AF_transportvietnam_xitlo-1-600x400.jpg">
        </div>
        <div class="col-md-6">
            <h3>Over night sleeper train</h3>
            <p>At Buffalo Tours, we specialise in tailor, guided tours to Vietnam, Cambodia, Thailand, Myanamar, Laos,
                China, HongKong</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img
                src="http://www.adventurefaktory.com/wp-content/uploads/2015/05/AF_transportvietnam_xitlo-1-600x400.jpg">
        </div>
        <div class="col-md-6">
            <h3>Over night sleeper train</h3>
            <p>At Buffalo Tours, we specialise in tailor, guided tours to Vietnam, Cambodia, Thailand, Myanamar, Laos,
                China, HongKong</p>
        </div>
    </div>
</div>
<div class="des_danhmuc">
    <h2 class="list_trips">Accomodation in Vietnam</h2>
    <div class="row">
        <div class="col-md-6">
            <img src="http://www.destination360.com/asia/vietnam/images/s/vietnam-hotels.jpg">
        </div>
        <div class="col-md-6">
            <h3>Over night sleeper train</h3>
            <p>At Buffalo Tours, we specialise in tailor, guided tours to Vietnam, Cambodia, Thailand, Myanamar, Laos,
                China, HongKong</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="http://www.destination360.com/asia/vietnam/images/s/vietnam-hotels.jpg">
        </div>
        <div class="col-md-6">
            <h3>Over night sleeper train</h3>
            <p>At Buffalo Tours, we specialise in tailor, guided tours to Vietnam, Cambodia, Thailand, Myanamar, Laos,
                China, HongKong</p>
        </div>
    </div>
</div>
<div class="u-margin-top-3 itinerary-section">
    <h2 id="itinerary" data-anchortext="Itinerary" data-faicon="map-o">
        Vietnam travel FAQs <div class="pull-right">
            <div class="expand-toggle">
                <a class="expand-toggle__button expand-toggle__button--plus">
                    <i class="expand-toggle__icon fa fa-plus-circle"></i> Expand All </a>
                <a class="expand-toggle__button expand-toggle__button--minus">
                    <i class="expand-toggle__icon fa fa-minus-circle"></i> Collapse All </a>
            </div>
        </div>
    </h2>
    <div class="panel-group" data-template="peak-shortcode-aggregate--display-accordion">
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title1">
                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed"
                        href="#OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo0">
                        Do i need a visa to travel to Vietnam <div class="pull-right accordion-expander">
                            <i class="fa fa-plus-circle"></i>
                            <i class="fa fa-minus-circle"></i>
                        </div>
                    </a>
                </h4>
            </div>
            <div id="OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo0" class="panel-collapse collapse">
                <div class="panel-body">
                    <div>
                        Xin chao! Welcome to Ho Chi Minh City, Vietnam. Your adventure begins with a welcome meeting at
                        6 pm. Please look for a note in the hotel lobby or ask reception where it will take place. We'll
                        be collecting insurance details and next of kin information at this meeting, so please ensure
                        you bring these details to provide to your leader. <br>
                        Because this trip doesn’t spend much time in Ho Chi Minh City, why not arrive a day or two early
                        to see the sights? Ho Chi Minh City has a dynamic atmosphere and a French influence. Perhaps
                        head to Pham Ngu Lao Street to see the local open-aired market, visit Vinh Nghiem Pagoda or take
                        an Urban Adventure with an expert local guide.</div>
                    <h5>Accommodation</h5>
                    <ul>
                        <li>
                            Hotel (1 night)
                        </li>
                    </ul>
                    <h5>Optional Activities</h5>

                    <ul>
                        <li>Ho Chi Minh City - Cu Chi Tunnel Experience Urban Adventure - USD43</li>
                        <li>Ho Chi Minh City - Cyclos &amp; Markets Urban Adventure - USD41</li>
                    </ul>
                    <h5>Meals Included</h5>
                    There are no meals included on this day. <h5>Special Information</h5>
                    You may wish to arrive a day early so you're able to attend the group meeting and have time to
                    explore Ho Chi Minh City. We'll be happy to book additional accommodation for you (subject to
                    availability). <br>
                    If you're expecting to be late for your welcome meeting, please inform the hotel reception or your
                    booking agent in advance.
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title1">
                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed"
                        href="#OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo1">
                        Is tipping customary in Vietnam? <div class="pull-right accordion-expander">
                            <i class="fa fa-plus-circle"></i>
                            <i class="fa fa-minus-circle"></i>
                        </div>
                    </a>
                </h4>
            </div>
            <div id="OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo1" class="panel-collapse collapse">
                <div class="panel-body">
                    <div>
                        Today you'll travel south by private bus (approximately 3 hours) for a day trip to explore the
                        Mekong Delta. When you arrive, you’ll board a boat and explore the intricate waterways of the
                        Mekong Delta. Often referred to as ‘the rice bowl’ of Vietnam, the fertile delta is where rice,
                        tropical fruit and flowers are grown for the whole country. The views along the canal will take
                        your breath away. Disembark at Ben Tre and visit the coconut gardens, stopping at a local home
                        to sample tropical fruits &amp; coconut jams. Afterwards, paddle in sampans (small rowing boats)
                        past water coconut trees along the Mekong. Take a tuk-tuk tour around the villages, learning
                        about local rural life and how they make their living making coconuts products like brooms and
                        coconut fibre mats. Eat lunch at a restaurant in the heart of the delta, sampling regional
                        specialties such as the famous Elephant Ear fish. Then it’s back to the private boat to cruise
                        the delta’s major waterways to Ben Tre boat pier. After the cruise return via bus to Ho Chi Minh
                        City.</div>
                    <h5>Accommodation</h5>
                    <ul>
                        <li>
                            Hotel (1 night)
                        </li>
                    </ul>
                    <h5>Included Activities</h5>

                    <ul>
                        <li>HCMC - Mekong Delta day trip including coconut gardens &amp; village tuk-tuk tour</li>
                    </ul>
                    <h5>Meals Included</h5>
                    <ul>
                        <li>Breakfast</li>
                        <li>Lunch</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title1">
                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed"
                        href="#OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo2">
                        What is the Internet access like in Vietnam? <div class="pull-right accordion-expander">
                            <i class="fa fa-plus-circle"></i>
                            <i class="fa fa-minus-circle"></i>
                        </div>
                    </a>
                </h4>
            </div>
            <div id="OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo2" class="panel-collapse collapse">
                <div class="panel-body">
                    <div>
                        This morning, say goodbye to Ho Chi Minh City and fly north to Danang (approximately 1 hour).
                        From here you’ll take a forty-five minute bus ride to Hoi An with the five spectacular peaks of
                        the Marble Mountains as a backdrop. Once in Hoi An, your leader will take you on a walking of
                        this unique town, influenced over the years by Europe, China and Vietnam. The town was a major
                        trading port from the 17th century onwards, and the outside influences can be seen all over its
                        architecture, with pagodas and assembly halls found across the town. For a small place it has a
                        liveliness alongside its charm and serenity. The tour will take you down the streets that are
                        being restored and look much like they did over a century ago. Past low tiled buildings, you'll
                        take in a historic house (formerly home to a prominent trader), the Japanese Covered Bridge, a
                        Chinese assembly hall and a museum.</div>
                    <h5>Accommodation</h5>
                    <ul>
                        <li>
                            Hotel (1 night)
                        </li>
                    </ul>
                    <h5>Included Activities</h5>

                    <ul>
                        <li>Hoi An - Old Town walking tour</li>
                    </ul>
                    <h5>Meals Included</h5>
                    <ul>
                        <li>Breakfast</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title1">
                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed"
                        href="#OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo3">
                        Can I user my mobile/cell phone while in Vietnam? <div class="pull-right accordion-expander">
                            <i class="fa fa-plus-circle"></i>
                            <i class="fa fa-minus-circle"></i>
                        </div>
                    </a>
                </h4>
            </div>
            <div id="OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo3" class="panel-collapse collapse">
                <div class="panel-body">
                    <div>
                        Enjoy a free day in the world heritage listed Hoi An. You may like to wander the Central Market
                        and the street stalls selling paintings, woodwork, ceramics, lanterns and much more. Hoi An is
                        also famous for its talented tailors who can make beautiful items to order within a few hours.
                        For those still feeling adventurous, why not hire a bicycle and tour the surrounding
                        countryside? This is one of the best ways to get an insight into rural Vietnam. Other optional
                        activities include a day trip to My Son Cham (elaborate World Heritage-listed temples that
                        reflect the rich cultural traditions of the Cham civilisation), a cruise along the Thu Bon River
                        and a trip to the nearby Cua Dai Beach.</div>
                    <h5>Accommodation</h5>
                    <ul>
                        <li>
                            Hotel (1 night)
                        </li>
                    </ul>
                    <h5>Optional Activities</h5>

                    <ul>
                        <li>Hoi An - My Son Cham tour (entrance fee, guide and transport included) - USD35</li>
                        <li>Hoi An - Food Adventure Urban Adventure - USD28</li>
                        <li>Hoi An - Hoi An Walking &amp; Cooking Class Urban Adventure - USD49</li>
                        <li>Hoi An - Hoi An Boat &amp; Bike with Sunset BBQ Urban Adventure - USD51</li>
                    </ul>
                    <h5>Meals Included</h5>
                    <ul>
                        <li>Breakfast</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title1">
                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed"
                        href="#OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo4">
                        What will it cost for a...? <div class="pull-right accordion-expander">
                            <i class="fa fa-plus-circle"></i>
                            <i class="fa fa-minus-circle"></i>
                        </div>
                    </a>
                </h4>
            </div>
            <div id="OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo4" class="panel-collapse collapse">
                <div class="panel-body">
                    <div>
                        Leave Hoi An today and on your journey you’ll cross the dramatic Hai Van Pass, a sometimes bumpy
                        but incredibly scenic stretch of highway with views of Lang Co Beach. Make a quick stop at the
                        fishing village of Lang Co, then continue to your final destination of Hue (approximately 5
                        hours including stops). Arrive in Hue, the former imperial capital of Vietnam. Hue contains the
                        treasures of Vietnam’s royal history, and has a interesting blend of bustling streets and
                        tranquil settings. Your excursion here will be to the Imperial Citadel. This fortress houses the
                        Imperial City and the citadel-within-a-citadel, the Forbidden Purple City. This icon was almost
                        completely destroyed during the Vietnam War, and the ruins and holes left by bombs are a
                        reminder of the destruction caused by the war. In your free time you might like to visit to Dong
                        Ba Market which offers locally made goods, fresh produce and tantalising street food. This is a
                        good place to try the specialties enjoyed by Emperor Nguyen such as the banh khoai royal rice
                        cake.</div>
                    <h5>Accommodation</h5>
                    <ul>
                        <li>
                            Hotel (1 night)
                        </li>
                    </ul>
                    <h5>Included Activities</h5>

                    <ul>
                        <li>Hue - Imperial Citadel</li>
                    </ul>
                    <h5>Meals Included</h5>
                    <ul>
                        <li>Breakfast</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title1">
                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed"
                        href="#OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo5">
                        Can I drink the warter in Vietnam? <div class="pull-right accordion-expander">
                            <i class="fa fa-plus-circle"></i>
                            <i class="fa fa-minus-circle"></i>
                        </div>
                    </a>
                </h4>
            </div>
            <div id="OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo5" class="panel-collapse collapse">
                <div class="panel-body">
                    <div>
                        Today’s adventure will be taken on the back of a motorbike. You’ll have your own driver who will
                        take you first on a drive around the Imperial Citadel, then to the Thien My Pagoda, the
                        unofficial symbol of Hue. This site dates back to 1601 and is still an active Buddhist
                        monastery. Here you’ll also see the car left by a monk who set himself alight to protest the
                        treatment of Buddhists by the South Vietnamese regime. Hop off the motorbike for a bit and go on
                        a dragon boat cruise along the Perfume River. After the 40-minute cruise get back on your
                        motorbike and ride to a special lunch spot at a convent or Buddhist monastery. After lunch,
                        drive to the royal tomb of Emperor Tu Duc, set amid a lake, frangipani bushes and pine trees. In
                        the evening, board an overnight train to Hanoi (approximately 12 hours). Although conditions are
                        basic, overnight trains are a true Intrepid experience and the best way to travel long distances
                        with the locals.<br>
                        <br>
                        Shared day use hotel rooms are available today after check out if you would like to freshen up
                        or organise your luggage. There is one room provided between up to 6 members of the group.
                        Single supplements exclude day rooms. </div>
                    <h5>Accommodation</h5>
                    <ul>
                        <li>
                            Overnight sleeper train (1 night)
                        </li>
                    </ul>
                    <h5>Included Activities</h5>

                    <ul>
                        <li>Hue - Perfume River boat ride</li>
                        <li>Hue - Royal tomb of Emperor Tu Duc</li>
                        <li>Hue - Highlights &amp; back streets by motorbike (lunch included)</li>
                    </ul>
                    <h5>Meals Included</h5>
                    <ul>
                        <li>Breakfast</li>
                        <li>Lunch</li>
                    </ul>
                    <h5>Special Information</h5>
                    This motorbike activity has been assessed for safety and is closely monitored. To participate please
                    ensure your travel insurance covers riding pillion on a motorbike up to 125cc. If you prefer not to
                    participate, please let your leader know and they will arrange car transportation (cost included).
                    <br>
                    <br>
                    Boats along Perfume River may not be available during festival season. During these times, you’ll be
                    transported by land to reach the activities.<br>
                    <br>
                    Sleeper trains typically have four or six berth compartments with bench seats that convert into
                    sleeping bunks. A sheet, pillow and blanket are provided, although some travellers prefer to bring
                    their own sleeping sheet. Depending on the configuration of the group, you may have to share with
                    people of different genders or passengers who aren’t part of the group. Your leader will coordinate
                    and give further information on the trip. Most trains have a dining carriage serving simple food,
                    but we recommend that you stock up on snacks and drinks befo
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title1">
                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed"
                        href="#OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo6">
                        Are Credit cards accepted widely in VietNam? <div class="pull-right accordion-expander">
                            <i class="fa fa-plus-circle"></i>
                            <i class="fa fa-minus-circle"></i>
                        </div>
                    </a>
                </h4>
            </div>
            <div id="OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo6" class="panel-collapse collapse">
                <div class="panel-body">
                    <div>
                        Arrive in Hanoi early in the morning and transfer to your hotel. Vietnam’s capital is famous for
                        its beautiful lakes, shaded boulevards, public parks and Frenchy Old Quarter. As an emerging
                        city in Southeast Asian, Hanoi has an attractive contrast of modern office buildings, old
                        Buddhist temples and a labyrinth of ancient streets. Later in the day you'll take a walking tour
                        through the city. You’ll see Ho Chi Minh’s former stilt house and other icons such as the Temple
                        of Literature. In your free time, perhaps stop by the ’36 Streets’ of the historic Old Quarter,
                        head to the beautiful Hoan Kiem Lake, or visit the Vietnam Fine Arts Museum. This Museum plays a
                        crucial role in maintaining and promoting the cultural heritage of Vietnam’s ethnic communities.
                    </div>
                    <h5>Accommodation</h5>
                    <ul>
                        <li>
                            Hotel (1 night)
                        </li>
                    </ul>
                    <h5>Included Activities</h5>

                    <ul>
                        <li>Hanoi - Temple of Literature</li>
                        <li>Hanoi - One Pillar Pagoda &amp; HCM stilt house</li>
                        <li>Hanoi - Old Quarter Walking Tour</li>
                    </ul>
                    <h5>Meals Included</h5>
                    There are no meals included on this day. <h5>Special Information</h5>
                    Prior to standard hotel check in this morning, shared day use rooms are provided with one room for
                    up to 6 members of the group.
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title1">
                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed"
                        href="#OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo7">
                        What is ATM access like in VietNam? <div class="pull-right accordion-expander">
                            <i class="fa fa-plus-circle"></i>
                            <i class="fa fa-minus-circle"></i>
                        </div>
                    </a>
                </h4>
            </div>
            <div id="OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo7" class="panel-collapse collapse">
                <div class="panel-body">
                    <div>
                        Travel by private minibus to the spectacular World Heritage site of Halong Bay (approximately 4
                        hours). This is one of Vietnam’s most beautiful places, a secluded bay of emerald waters flecked
                        with sandstone islands and caves. Here you’ll go on a cruise to explore the rock formations and
                        caves and in the warmer months perhaps go for a swim from Ti Top Island Beach or perhaps go
                        kayaking. <br>
                        <br>
                        There’ll be a dining room and bar on board where you’ll enjoy your meals, including fresh
                        seafood for lunch and dinner. Spend the night on board the boat beneath a sky alive with
                        starlight. The boat has twin-share cabins with air-conditioning and private facilities.</div>
                    <h5>Accommodation</h5>
                    <ul>
                        <li>
                            Overnight boat (1 night)
                        </li>
                    </ul>
                    <h5>Included Activities</h5>

                    <ul>
                        <li>Halong Bay - Overnight boat cruise with seafood lunch and dinner</li>
                    </ul>
                    <h5>Optional Activities</h5>

                    <ul>
                        <li>Halong Bay - Kayaking - VND250000</li>
                    </ul>
                    <h5>Meals Included</h5>
                    <ul>
                        <li>Breakfast</li>
                        <li>Lunch</li>
                        <li>Dinner</li>
                    </ul>
                    <h5>Special Information</h5>
                    It is recommended to pack a smaller overnight bag to take to Halong Bay for ease of boarding and
                    disembarking. You can store your main luggage in Hanoi for tonight.<br>
                    <br>
                    Kayaking and swimming is restricted to designated zones within the bay.<br>
                    <br>
                    There are restrictions on the number of boats that are permitted to stay in the bay overnight,
                    sometimes resulting in a shortage. To ensure all Intrepid travellers can enjoy the experience of a
                    night on the water, occasionally you will stay on a larger boat (with approximately 12 cabins) and
                    share your boat with another group. Or your group may be split across different vessels, in which
                    case an Intrepid group leader will be present on each boat, and the route taken and inclusions on
                    board will remain the same.
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title1">
                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed"
                        href="#OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo8">
                        Day 9: Hanoi <div class="pull-right accordion-expander">
                            <i class="fa fa-plus-circle"></i>
                            <i class="fa fa-minus-circle"></i>
                        </div>
                    </a>
                </h4>
            </div>
            <div id="OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo8" class="panel-collapse collapse">
                <div class="panel-body">
                    <div>
                        Leaving the memorable scenery of Halong Bay behind, return by bus to Hanoi (approximately 3.5
                        hours). Return to Hanoi late this afternoon, and enjoy a couple of free hours to explore Hanoi's
                        sights or do some last minute shopping. Otherwise, why not just relax at a cafe or stop for a
                        bia hoi (freshly brewed draught beer) at one of the microbars in the Old Quarter? Tonight there
                        will be a farewell dinner to enjoy with the group at KOTO restaurant, an organisation that
                        supports street kids with a career in the hospitality industry.</div>
                    <h5>Accommodation</h5>
                    <ul>
                        <li>
                            Hotel (1 night)
                        </li>
                    </ul>
                    <h5>Included Activities</h5>

                    <ul>
                        <li>Hanoi - KOTO dinner</li>
                    </ul>
                    <h5>Meals Included</h5>
                    <ul>
                        <li>Breakfast</li>
                        <li>Dinner</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title1">
                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed"
                        href="#OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo9">
                        Day 10: Hanoi <div class="pull-right accordion-expander">
                            <i class="fa fa-plus-circle"></i>
                            <i class="fa fa-minus-circle"></i>
                        </div>
                    </a>
                </h4>
            </div>
            <div id="OVecR9PjiowZbH4785YMuSEc9fffIjlzl0aSiQcuYeo9" class="panel-collapse collapse">
                <div class="panel-body">
                    <div>
                        Today your exploration of Vietnam comes to an end. There are no activities planned for the final
                        day and you are able to depart the accommodation at any time. Maybe consider continuing your
                        adventure with a short tour such as ‘Hanoi Street Food by Night’ or ‘Village Discovery by Bike’
                        with our partners Urban Adventures (see urbanadventures.com for more information). Or perhaps
                        visit the Hoa Lo Prison aka the ‘Hanoi Hilton’ which was used for prisoners of war during the
                        Vietnam War. There’s also the Museum of Ethnology with its fascinating indoor and outdoor
                        exhibits. Consider booking some extra nights in Hanoi to further explore this delightful city.
                    </div>
                    <h5>Optional Activities</h5>

                    <ul>
                        <li>Hanoi - Village Discovery by Bike Urban Adventure - USD33</li>
                        <li>Hanoi - Hanoi Street Food By Night Urban Adventure - USD31</li>
                        <li>Hanoi - Citadels, Karsts &amp; Cycle Urban Adventure - USD88</li>
                        <li>Hanoi - Hoa Lo 'Hanoi Hilton' Prison - VND30000</li>
                        <li>Hanoi - Fine Arts Museum - VND30000</li>
                    </ul>
                    <h5>Meals Included</h5>
                    <ul>
                        <li>Breakfast</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="des_danhmuc">
    <h2 class="list_trips">Responsiple travel</h2>
    <p>At Buffalo Tours, we specialise in tailor, guided tours to Vietnam, Cambodia, Thailand, Myanamar, Laos, China,
        HongKong, Singapore, Indonesia and Japan, as well as multi-country tours acrouss the region. We offer an
        expansive portolio of tours carefully crafted to showcase the very best of Asia. Our travel experts create
        tailor made travel packages to match all your travel preferences and needs</p>
    <div class="row">
        <div class="col-md-6">
            <img
                src="http://www.adventurefaktory.com/wp-content/uploads/2015/05/AF_transportvietnam_xitlo-1-600x400.jpg">
        </div>
        <div class="col-md-6">
            <h3>Over night sleeper train</h3>
            <p>At Buffalo Tours, we specialise in tailor, guided tours to Vietnam, Cambodia, Thailand, Myanamar, Laos,
                China, HongKong</p>
        </div>
    </div>
</div>
<script src="./plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.gb-product-show_slide').owlCarousel({
            loop: true,
            responsiveClass: true,
            nav: true,
            navText: [],
            dots: false,
            margin: 30,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
        $('.icons-nav-product').click(function () {
            $('.product-menu-content').slideToggle();
        });
    });
</script>
<script type="text/javascript">
    function load_url(id, name, price) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status ==
                200
            ) { // document.getElementById("demo").innerHTML = this.responseText;           
                // alert(this.responseText);           
                //alert('thanh cong.');           
                window.location.href = "/gio-hang";
            }
        };
        xhttp.open("POST", "/functions/ajax-add-cart.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("product_id=" + id + "&product_name=" + name + "&product_price=" + price +
            "&product_quantity=1&action=add");
        xhttp.send();
    }
</script>