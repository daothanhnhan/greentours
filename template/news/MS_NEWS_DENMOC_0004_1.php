<?php 
    // $tours_hot = $action->getList('product', 'product_hot', '1', 'product_id', 'desc', '', '6', '');
    $tours_hot = $action_product->getListProductHot_hasLimit(6);
    $home_page_1 = $action->getDetail('page', 'page_id', 36);
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<link rel="stylesheet" href="/plugin/animsition/css/animate.css">
<div class="gb-news-blog-home_denmoc">
    <div class="container">
        <div class="gb-news-blog-home_denmoc-title">
            <p class="tin-tuc-1"><i><?= $home_page_1['page_name'] ?></i></p>
            <p class="tin-tuc-2"><?= str_replace("\r\n", "<br>", $home_page_1['page_des']) ?></p>
        </div>
        <div class="tin-tuc">
            <p class="tin-tuc-3"><b>INSPIRING ACTIVITIES</b></p>
            <p class="http"></p>
            <p class="tin-tuc-4">A hand-picked selection of our favorites from our destination experts</p>

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
                    <div class="card-product__image">
                        <a class="card-product__image-link" href="/<?= $row['friendly_url'] ?>">
                            <div class="image-placeholder" style="padding-bottom:calc(66.666666666667%)">
                                <img src="/images/<?= $row['product_img'] ?>" style="width: 100%;">
                            </div>
                        </a>
                    </div>
                    
                    <div class="card-product__bottom">
                        <div class="card-product__description1">
                            <div class="tt">
                                <h3><?= $name_2 ?></h3>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <p> <?= $count ?> DAY | <?= $count-1 ?> NIGHT</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <p>
                                        <?= $hanh_trinh ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <span class="glyphicon glyphicon-tag"></span>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <p>From: US$ <?= number_format($row['product_price']) ?>/Person</p>
                                </div>
                            </div>

                        </div>
                        <div class="card-product__action">
                            <a href="/<?= $row['friendly_url'] ?>" class="btn btn-action">View Trip
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
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