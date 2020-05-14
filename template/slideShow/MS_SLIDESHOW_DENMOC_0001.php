<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<link rel="stylesheet" href="/plugin/animsition/css/animate.css">
<div class="gb-slideshow_denmoc">
    <div class="gb-slideshow_denmoc-slide owl-carousel owl-theme">
            <div class="item">
                <img src="/images/<?= $row['producttag_img']?>" alt="slideshow" class="img-responsive">
            </div>
            <?php
            $img_sub = json_decode($row['producttag_sub_img']);
            foreach ($img_sub as $key => $val) {
                $img = json_decode($val, true);
                if ($img != '') {
                    ?> 
            <div class="item">
                <img src="/images/<?= $img['image']?>" alt="slideshow" class="img-responsive">
            </div>
            <?php                            
                  }
              }
            ?> 
    </div>
    <!-- <div class="text-block">
        Kỳ nghỉ yêu thương | <?= number_format($price, 0, ',', '.') ?> triệu/khách
    </div> -->
    <?php //include DIR_EMAIL."MS_EMAIL_DENMOC_0001.php";?>
</div>

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        $('.gb-slideshow_denmoc-slide').owlCarousel({
            loop:true,
            margin:0,
            navSpeed:500,
            dots: false,
            autoplay: true,
            rewind: true,
            navText:[],
            items:1,
            responsive:{
                0:{
                    nav: false
                },
                767:{
                    nav:true
                }
            }
        });
    });
</script>