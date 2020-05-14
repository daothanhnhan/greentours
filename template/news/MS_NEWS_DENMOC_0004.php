<?php 
    // $tours_hot = $action->getList('product', 'product_hot', '1', 'product_id', 'desc', '', '6', '');
    $tours_hot = $action_product->getListProductNew_hasLimit(6);
    $home_page_1 = $action->getDetail('page', 'page_id', 36);
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<link rel="stylesheet" href="/plugin/animsition/css/animate.css">

<div class="gb-news-blog-home_denmoc">
    <div class="container">
        <!-- <div class="gb-news-blog-home_denmoc-title">
            <p class="tin-tuc-1"><i><?= $home_page_1['page_name'] ?></i></p>
            <p class="tin-tuc-2"><?= str_replace("\r\n", "<br>", $home_page_1['page_des']) ?></p>
        </div> -->
        <div class="tin-tuc">
            <p class="tin-tuc-3 home-title boldup"><b>Which tours popular?</b></p>
            <p class="http"></p>
            <p class="home-title home-text">A hand-picked selection of our favorites from our destination experts</p>

        </div>

        <div class="l-grid__row row">
            <?php
            foreach ($tours_hot as $item) { 
                $row = $item;
                $itinerary = $action->getList('itinerary', 'product_id', $row['product_id'], 'id', 'asc', '', '', '');
                $count = count($itinerary);
                $hanh_trinh = '';
                $d = 0;
                foreach ($itinerary as $item_iti) {
                    $d++;
                    $hanh_trinh .= $item_iti['name']." |";
                    if ($d >= 6) {
                        break;
                    }
                }
                if ($count > 0) {
                    $hanh_trinh = substr($hanh_trinh, 0, -1);
                }
                /////////
                $name = explode("-", $row['product_name']);
                $name_1 = $name[0];
                $name_2 = $name[1];
            ?>
            <div class="l-grid__col col-xs-12 col-sm-4 col-md-4 col-lg-4 ">

                <div class="card-product card-product--map triangle">
                    <span class="text-triangle"><?= $name_1 ?></span>
                    <div class="home-heart" onclick="favorite(<?= $row['product_id'] ?>)" id="heart-<?= $row['product_id'] ?>">
                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                    </div>
                    
                    <div class="card-product__image round-corner">
                        <a class="card-product__image-link" href="/<?= $row['friendly_url'] ?>">
                            <div class="image-placeholder" style="padding-bottom:calc(66.666666666667%)">
                                <img src="/images/<?= $row['product_img'] ?>" style="width: 100%;">
                                <div class="overlay">
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="card-product__bottom">
                        <div class="card-product__description1">
                            <div class="tt">
                                <h3><?= $name_2 ?></h3>
                            </div>
                            <div class="show-tour-info">
                                <div class="col6-1">
                                    <div style="" class="start">
                                        <div>
                                            <p>Start</p>
                                            <p><?= $row['start'] ?></p>
                                        </div>
                                    </div>
                                    <div style="" class="finish">
                                        <p>Finish</p>
                                        <p><?= $row['finish'] ?></p>
                                    </div>
                                </div>
                                <div class="col6-2">
                                    <p> <?= $count ?> Days <?= $count-1 ?> Nights</p>
                                    <p>From: US$ <?= $row['product_price'] ?>/Person</p>
                                </div>
                            </div>

                        </div>
                        <div class="card-product__action home-item-see">
                            <a href="/<?= $row['friendly_url'] ?>" class="btn btn-action">See More
                                
                            </a>
                        </div>
                    </div>
                    <div style="clear: both;">
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>

    </div>
</div>



<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.gb-news-blog-home_denmoc-slide').owlCarousel({
            loop: true,
            margin: 30,
            navSpeed: 500,
            dots: false,
            autoplay: true,
            rewind: true,
            navText: [],
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                767: {
                    items: 3,
                    nav: false
                }
            }
        });
    });
</script>