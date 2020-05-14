<?php 
    $thuonghieu = $action->getList('trademark', '', '', 'id', 'asc', '', '', '');
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<link rel="stylesheet" href="/plugin/animsition/css/animate.css">
<div class="container gb-custommer-say_ldpvinhome">
    <div class="doi-tac">
        <p class="tin-tuc-3 home-title"><b>Our associations</b></p>
        <!-- <p class="tin-tuc-4">And we are really proud of them</p> -->
        <div class="row gb-partner-slide owl-carousel owl-theme trademark">
            <?php foreach ($thuonghieu as $item) { ?>
                 <div class="item">
                <img src="/images/<?= $item['image']?>" alt="<?= $item['name']?>" class="img-responsive">
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        $('.gb-partner-slide').owlCarousel({
            loop:true,
            margin:0,
            navSpeed:500,
            dots: false,
            autoplay: true,
            rewind: true,
            navText:[],
            // items:1,
            margin:10,
            responsive:{
                0:{
                    nav: false
                },
                767:{
                    nav:true
                },
                992:{
                    items:6,
                    nav:true
                }
            }
        });
    });
</script>