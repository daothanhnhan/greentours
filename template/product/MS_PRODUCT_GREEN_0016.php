<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"> -->
<link rel="stylesheet" type="text/css" href="/plugin/green/slick.css">
<style type="text/css">
.slider-for{
    /*width: 500px;*/
    width: 100%;
    height: auto;
    margin: 0 auto 1px;
    overflow: hidden;
}
.slider-for img {
    border-radius: 10px;
}
img{
    width: 100%;
    min-height: 100%;
}
.slider-nav{
    /*width: 500px;*/
    width: 100%;
    /*height: 85px;*/
    height: auto;
    margin: auto;
}
.slider-nav .item {
    padding: 5px;
    width: 100%;
}
.slider-nav .slick-track{
    /*height: 107px;*/
}
.slick-arrow{
    position: absolute;
    top: 50%;
    z-index: 50;
    margin-top: -12px;
}
.slick-prev{
    left: 0;
}
.slick-next{
    right: 0;
}
.slick-slide img {
    border-radius: 5px;
}
/**/
.gb-map {
    width: 39%;
}
.gb-map img {
    border-radius: 10px;
}
.gb-gallery {
    width: 61%;
}
@media screen and (max-width: 992px) {
    .gb-map {
        width: 100%;
    }
    .gb-gallery {
        width: 100%;
    }
}
</style>
<div class="gb-product-top">
        <h2 id="gallery" class="gb-title">Map & gallery</h2>
        
    </div>
<div class="row">
                <div class="col-md-5 gb-map">
                    <img src="/images/<?= $row['map_img'] ?>" alt="map"/>
                </div>
                <div class="col-md-7 gb-gallery">
                    <div class="slider-for">
                        <div class="item">
                            <img src="/images/<?= $row['product_img'] ?>" alt="image"  draggable="false"/>
                        </div>
                        <?php 
                          $d = 1;
                          foreach ($img_sub as $item) {
                              $d++;
                              $image = json_decode($item, true);?>
                        <div class="item">
                            <img src="/images/<?= $image['image'] ?>" alt="image" draggable="false"/>
                        </div>
                        <?php } ?>
                    </div>

                    <div class="slider-nav">
                        <div class="item">
                            <img src="/images/<?= $row['product_img'] ?>" alt="image"  draggable="false"/>
                        </div>
                        <?php 
                          $d = 1;
                          foreach ($img_sub as $item) {
                              $d++;
                              $image = json_decode($item, true);?>
                        <div class="item">
                            <img src="/images/<?= $image['image'] ?>" alt="image" draggable="false"/>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                
            </div>

<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script> -->
<script type="text/javascript" src="/plugin/green/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            speed: 500,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true,
            slide: 'div',
            arrows: false,
            // centerMode: true,
        });
    });
</script>