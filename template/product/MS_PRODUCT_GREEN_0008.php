<link rel="stylesheet" href="./plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="./plugin/owl-carouse/owl.theme.default.min.css">
<div  class="gb-product-home">
    <!--HEADER PRODUICT TOP-->
    <div class="gb-product-top">
        <h2 id="gallery">Gallery</h2>
        
    </div>
    <!--SHOW PRODUCT ITEM-->
    <div class="gb-product-show">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="gb-product-show_slide-three-item gb-product-show_slide-three-item_02 owl-carousel owl-theme" style=" font-size: 19px;">
                    <div class="gb-maysanxuat_cuanhom">
                        <div class="gb-product-item_cuanhom" style="margin-bottom: 33px;">

                            <div class="gb-product-item_cuanhom-img">

                                <a class="boxImgProductHome" href=""><img src="/images/<?= $row['product_img'] ?>" alt="" class="img-responsive" style=""></a>
                                
                            </div>

                        </div>
                    </div>
                    <?php 
                      $d = 1;
                      foreach ($img_sub as $item) {
                          $d++;
                          $image = json_decode($item, true);?>
                    <div class="gb-maysanxuat_cuanhom">
                        <div class="gb-product-item_cuanhom" style="margin-bottom: 33px;">

                            <div class="gb-product-item_cuanhom-img">

                                <a class="boxImgProductHome" href=""><img src="/images/<?= $image['image'] ?>" alt="" class="img-responsive" style=""></a>
                                
                            </div>

                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
        </div>
    </div>
</div>
<script src="./plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.gb-product-show_slide-three-item_02').owlCarousel({
            loop: true,
            responsiveClass: true,
            nav: true,
            navText: [],
            dots: false,
            margin: 0,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                768: {
                    items: 1,
                    nav:true
                },
                992: {
                    items: 2,
                    nav:true
                }
            }
        });
    });
</script>

