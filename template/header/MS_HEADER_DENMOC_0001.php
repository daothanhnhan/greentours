<?php 
    $heart_count = 0;
    foreach ($_SESSION['favorite'] as $item) {
        $heart_count++;
    }
?>
<?php include DIR_MENU."MS_MENU_DENMOC_0002.php";?>
<?php include DIR_MENU."MS_MENU_GREEN_0001.php";?>

<!--MENU DESTOP-->

<header class="sticky-menu-main">

    <div class="gb-header-denmoc">

        <div class="gb-header-top_denmoc">

            <div class="container">

                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">

                    </div>

                    <div class="col-md-8 hidden-sm hidden-xs">

                        <div class="gb-header-top_denmoc-left">

                            <ul>
                                <li style="word-spacing: 0;padding-left: 6px;"><a href="/">English</a> | <a href="http://www.greentours.com.vn/" target="_blank">Vietnamese</a></li>
                                <li class="icon-login"><a href="/login"><i class='fas fa-user-circle' style="font-size:24px;"></i></a></li>
                                <li><p class="glyphicon glyphicon-time"> 24/7</p></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><span style="word-spacing: 0;"><?= $rowConfig['content_home10'] ?></span></li>
                                <!-- <li>|</li> -->
                                <li><i class="fa fa-envelope" aria-hidden="true"></i> <?= $rowConfig['content_home5'] ?></li>
                                <!-- <li>|</li> -->
                                <!-- <li><p class="glyphicon glyphicon-user"> My Booking</p></li> -->
                                <li style="word-spacing: 0;"><a class="chuc-nang" href="/wishlist"><i class="fas fa-heart" style="margin-right: 2px;"></i><span id="heart-num-d"><?= $heart_count==0 ? '' : $heart_count ?></span> Wishlist</a></li>
                                <!-- <li><i class="fa fa-map-signs" aria-hidden="true"></i> <?= $rowConfig['content_home1'] ?></li> -->

                                <!--<li><i class="fa fa-envelope" aria-hidden="true"></i> <?= $rowConfig['content_home2'] ?></li>-->

                            </ul>

                        </div>

                    </div>

                    <!-- <div class="lang-text">
                        <a href="/">English</a> | <a href="http://www.greentours.com.vn/" target="_blank">Vietnamese</a>
                    </div> -->

                    <!-- <div class="col-sm-4">

                        <div class="gb-header-top_denmoc-right">

                            <ul>

                                <li>
                                    <?php if (isset($_SESSION['user_id_gbvn'])) { ?>
                                    <a href="dang-xuat"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng xuất</a>
                                    <?php } else { ?>
                                    <a href="dang-nhap"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập</a>
                                    <?php } ?>
                                </li>

                                <li>

                                    <a href="dang-ky"><i class="fa fa-registered" aria-hidden="true"></i> Đăng ký</a>

                                </li>

                            </ul>

                        </div>

                    </div> -->

                </div>

            </div>

        </div>

        <div class="gb-header-bottom_denmoc">

            <div class="container">

                <div class="row">

                    <div class="col-sm-3 col-xs-4">

                        <div class="gb-header-bottom_denmoc-logo">

                            <a href="/"><img src="/images/<?= $rowConfig['web_logo'] ?>" alt="logo" class="img-responsive"></a>

                        </div>

                    </div>
                    <div class="col-xs-6 db-mobile-slogan">

                        <!-- <h2>Greentours International</h2> -->
                        <!--<h3>Xe chạy cao tốc</h3>-->

                    </div>

                    <div class="col-sm-6">
                        

                        <div class="gb-header-bottom_denmoc-menu">

                            <?php include DIR_MENU."MS_MENU_DENMOC_0001.php";?>
                        </div>
                        

                    </div>
                    <div class="col-sm-3">
                        

                        <div class="">

                            <?php include DIR_SEARCH."MS_SEARCH_DENMOC_0002.php";?>
                        </div>
                        

                    </div>


                </div>

            </div>

        </div>

    </div>

</header>



<script src="/plugin/sticky/jquery.sticky.js"></script>

<script>

    $(document).ready(function () {

        // if ($(window).width() <= 992) {

            $(".sticky-menu-main").sticky({topSpacing:0});

        // } else {

            // $(".sticky-menu-main").trigger('sticky.destroy');

        // }

    });

</script>