<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<link rel="stylesheet" href="/plugin/animsition/css/animate.css">
<style type="text/css">
.owl-carousel .owl-nav .owl-prev,
  .owl-carousel .owl-nav .owl-next,
  .owl-carousel .owl-dot {
    font-family: 'fontAwesome';

}
.owl-carousel .owl-nav .owl-prev:before{
    /*// fa-chevron-left*/
    content: "\f053";
    margin-right:20px;
    font-size: 20px;
}
.owl-carousel .owl-nav .owl-next:after{
    /*//fa-chevron-right*/
    content: "\f054";
    margin-left:20px;
    font-size: 20px;
}
.owl-theme .owl-nav [class*=owl-] {
    background-color: #a6ce39;
}
</style>
<!-- <div class="trips-header"> -->

                

                <!-- <a href="https://www.intrepidtravel.com/en/search?country=Vietnam"

                    class="btn btn-special trips-header__link"><i class="fa fa-search"></i>Search all similar trips</a> -->

            <!-- </div> -->



            <div show-more="" data-limit="6" class="l-grid l-grid--padded shortcode-layout ng-scope">

                <div class=" gb-golf-item-tour-slide-<?= $slide ?> owl-carousel owl-theme">

                    <?php 

                    $d = 0;

                    foreach ($rows['data'] as $item) {

                        $d++;

                        $row = $item;

                        $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);

                        $itinerary = $action->getList('itinerary', 'product_id', $row['product_id'], 'id', 'asc', '', '', '');

                        $count = count($itinerary);

                    ?>

                    <div class="tour-item">



                        <div class="card-product card-product--map ">
                            <div class="overlay-1"></div>
                        
                            <div class="card-product__image">
                                <!-- <div class="heart" onclick="favorite(<?= $row['product_id'] ?>)">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </div> -->
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
                            <div class="clearfix height12">
                                
                            </div>
                            <div class="card-product__action home-item-see">
                                <a href="<?= $rowLang['friendly_url'] ?>" class="btn btn-action">See More
                                    
                                </a>
                            </div>

                        </div>

                    </div>

                    <?php } ?>

                </div>

                <div class="text-center">

                    

                </div>

            </div>
<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        $('.gb-golf-item-tour-slide-<?= $slide ?>').owlCarousel({
            loop:true,
            margin:0,
            navSpeed:500,
            dots: false,
            autoplay: true,
            rewind: true,
            navText:[],
            // items:1,
            // margin:10,
            responsive:{
                0:{
                    nav: true,
                    items: 1
                },
                767:{
                    nav:true,
                    items: 2,
                    margin:20
                },
                992:{
                    items:3,
                    nav:true,
                    margin:30
                }
            }
        });
    });
</script>