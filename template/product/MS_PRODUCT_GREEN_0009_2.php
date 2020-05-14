<div class="trips-header">

                

                <!-- <a href="https://www.intrepidtravel.com/en/search?country=Vietnam"

                    class="btn btn-special trips-header__link"><i class="fa fa-search"></i>Search all similar trips</a> -->

            </div>



            <div show-more="" data-limit="6" class="l-grid l-grid--padded shortcode-layout ng-scope">

                <div class="l-grid__row row">

                    <?php 

                    $d = 0;

                    foreach ($rows['data'] as $item) {

                        $d++;

                        $row = $item;

                        $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);

                        $itinerary = $action->getList('itinerary', 'product_id', $row['product_id'], 'id', 'asc', '', '', '');

                        $count = count($itinerary);

                    ?>

                    <div class="l-grid__col col-xs-12 col-sm-4 col-md-4 col-lg-4 ">



                        <div class="card-product card-product--map ">

                            <div class="card-product__image">

                                <a class="card-product__image-link"

                                    href="/<?= $rowLang['friendly_url'] ?>">





                                    <div class="image-placeholder1" style="padding-bottom:calc(66.666666666667%)"><img

                                            class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"

                                            width="720" height="480"

                                            alt="<?= $rowLang['lang_product_name'] ?>"

                                            title="<?= $rowLang['lang_product_name'] ?>"

                                            

                                            data-sizes="auto" data-expand="100"

                                            

                                            sizes="262px"

                                            

                                            src="/images/<?= $row['product_img'] ?>">

                                    </div>

                                    <div class="card-product__title">

                                        <h4 class="card-product__heading"><?= $rowLang['lang_product_name'] ?></h4>

                                    </div>

                                </a>

                                <div class="card-product__shortlist" onclick="favorite(<?= $row['product_id'] ?>)">

                                    <div peak-shortlist-heart="" product-code="TVSF" class="ng-isolate-scope">

                                        <div ng-click="heartClick()" ng-class="{'is-shortlisted': inShortlist}"

                                            class="shortlist-heart"

                                            ng-attr-data-analytic-event="{{'peak_shortlisted_trips'}}"

                                            data-trip-code="TVSF" data-trip-shortlisted="false" peak-analytics=""

                                            data-analytic-event="peak_shortlisted_trips">

                                            <i

                                                class="fa fa-heart-o shortlist-heart__icon shortlist-heart__icon--empty"></i>

                                            <i

                                                class="fa fa-heart shortlist-heart__icon shortlist-heart__icon--full"></i>

                                        </div>

                                        <div ng-show="showPopover" class="popover shortlist-popover ng-hide"

                                            ng-class="{'is-visible': showPopover}" role="tooltip">

                                            <a class="close" ng-click="closePopover()">×</a><b>Want to see your Wishlist

                                                on all your devices?</b>

                                            <div>

                                                <a href="" ng-click="customerAuth.goToLoginSignupPage('signup')">Sign

                                                    up</a> so they are saved, and available wherever you log in</div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="card-product__top">

                                <h5 class="card-product__info-heading">

                                    <span class="pull-left">

                                        <?= $count ?> Days </span>

                                    <span class="pull-right">

                                        <span class="card-product__from-price">From</span>

                                        <span class="price-formatter ng-binding ng-isolate-scope"

                                            price-value="1029">$<?= number_format($row['product_price']) ?></span>

                                    </span>

                                </h5>

                            </div>

                            <div class="card-product__bottom">

                                <div class="card-product__description">

                                    <p><?= $rowLang['lang_product_des'] ?></p>

                                </div>

                                <div class="card-product__action">

                                    <a href="/<?= $rowLang['friendly_url'] ?>" class="btn btn-action">View

                                        Trip <i class="fa fa-angle-right"></i>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php } ?>

                </div>

                <div class="text-center">

                    <!-- <button ng-click="showMoreClick()" class="btn btn-lg btn-passive l-grid__button-pagination"

                        data-limit="6">Show more trips</button> -->

                        <?= $rows['paging'] ?>

                </div>

            </div>
