<?php 
    $limit = 12;                                                                           
   
    $rows = $action_product->search_spec($trang, $limit);
?>
<div class="trips-header">
                <h2 class="trips-header__title" id="trips" data-anchortext="Our trips">Our trips</h2>
                <!-- <a href="https://www.intrepidtravel.com/en/search?country=Vietnam"
                    class="btn btn-special trips-header__link"><i class="fa fa-search"></i>Search all similar trips</a> -->
            </div>

            <div show-more="" data-limit="6" class="l-grid l-grid--padded shortcode-layout ng-scope">
                <div class="l-grid__row row">
                    <?php 
                    $d = 0;
                    foreach ($rows['data'] as $item) {
                        $d++;
                        $row = $action_product->getProductDetail_byId($item['product_id'], $lang);
                        $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
                        $itinerary = $action->getList('itinerary', 'product_id', $row['product_id'], 'id', 'asc', '', '', '');
                        $count = count($itinerary);
                    ?>
                    <div class="l-grid__col col-xs-12 col-sm-4 col-md-4 col-lg-4 tour-item load-more1">
                        


                        <div class="card-product card-product--map ">
                            
                            <div class="card-product__image">
                                <div class="heart" onclick="favorite(<?= $row['product_id'] ?>)">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </div>
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

                                    

                                </a>

                                

                            </div>
                            <div class="clearfix">
                                
                            </div>
                            <div>
                                <h4><?= $rowLang['lang_product_name'] ?></h4>
                            </div>

                            <div class="info-tour">
                                <div class="col6">
                                    <p>Arrival: <?= $row['finish'] ?></p>
                                    <p>Departure: <?= $row['start'] ?></p>
                                </div>
                                <div class="col6">
                                    <p><?= $count ?> Days <?= $count-1 ?> Nights</p>
                                    <p>From: US$ <?= $row['product_price'] ?>/Person</p>
                                </div>
                            </div>

                            <div class="card-product__bottom">

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
                <?php 
                    echo $rows['paging'];
                ?>
                </div>
            </div>