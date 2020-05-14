<?php 
    $home_page_2 = $action->getDetail('page', 'page_id', 37);
    $why = $action->getList('why', '', '', 'id', 'asc', '', '', '');
?>
<div class="container">
    <div class="thong-tin-ho-tro">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="bottom: 21px;">
                <h3 class="title3 home-title boldup"><?= $home_page_2['page_name'] ?></h3>
                <p class="home-title home-text"><?= $home_page_2['page_des'] ?></p>
            </div>
        </div>
        <div class="row why-icon">
            <?php 
            $d = 0;
            foreach ($why as $item) { 
                $d++;
                ?>
            <div class="col-md-2 col-xs-6 col-sm-6 home-list-icon">
                <!-- <p class="<?= $item['icon'] ?>" style="color:#728b28"></p> -->
                <div style="" class="home-icon image-circle">
                    <img src="/images/<?= $item['icon'] ?>" alt="" class="">
                </div>
                
                <p class="text-icon-1"><?= $item['note'] ?></p>
                <p class="text-icon-2" style=""><?= $item['name'] ?></p>
            </div>
            <?php 
                if ($d%3==0) {
                    // echo '<hr style="width:100%;border:0;margin:0;" />';
                }
            } ?>
        </div>
        <!--<div class="row">
            <div class="col-md-1 col-sm-1 col-xs-3">
                <h3 class="fa fa-puzzle-piece icon1"></h3>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-9">
                <h3>Vietnam Trip Planning</h3>
                <p>Telephone and email supported 24 hours a day</p>
                <p>We alway think for customer</p>
                <p>Best value for money</p>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-3">
                <h3 class="fa fa-comment icon1"></h3>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-9">
                <h3>Local Expert Customer</h3>
                <p>10 Years'experience tailoring</p>
                <p>Vietnam vacation & Asia packages</p>
                <p>Your time, your pace-no change, withought change</p>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-3">
                <h3 class="fa fa-thumbs-up icon1"></h3>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-9">
                <h3>Authentic</h3>
                <p>Unlock the real Vietnam, local insights</p>
                <p>Visit local families, runral farmers, and experience local life</p>
            </div>
        </div>
        <div class="row" style="padding-top: 25px;">
            <div class="col-md-1 col-sm-1 col-xs-3">
                <h3 class="fa fa-heart icon1"></h3>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-9">
                <h3>Top Reviews</h3>
                <p>Tripadvisor Catificate of excellence of years</p>
                <p>Thousands of customer chose us each year including Celebrities, M.I.C.Es, TV Shows</p>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-3">
                <h3 class="fa fa-handshake icon1"></h3>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-9">
                <h3>Top Reviews</h3>
                <p>Tripadvisor Catificate of excellence of years</p>
                <p>Thousands of customer chose us each year including Celebrities, M.I.C.Es, TV Shows</p>
            </div>
        </div>-->
    </div>
</div>
<script type="text/javascript">
    var cw = $('.home-icon').width();
    $('.home-icon').css({'height':cw+'px'});
</script>