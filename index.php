<?php
//phpinfo();die;
session_start();
ob_start();
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$folder = dirname(__FILE__);
include_once('config.php');
include_once('__autoload.php');
$action = new action();
include_once dirname(__FILE__).DIR_FUNCTIONS."database.php";
// $urlAnalytic = $action->showabc();    
include_once dirname(__FILE__).DIR_FUNCTIONS_PAGING."pagination.php";
include_once 'functions/phpmailer/class.smtp.php';
include_once 'functions/phpmailer/class.phpmailer.php';
include_once "functions/vi_en.php";
// // LÀM RÕ NHỮNG THƯ VIỆN NÀY
// // include_once('lib/vi_en.php');
// // include_once('lib/nganLuong/NL_Checkoutv3.php');

// // LÀM RÕ Install Cart

// Install MultiLanguage
include_once dirname(__FILE__).DIR_FUNCTIONS_LANGUAGE."lang_config.php";
include_once dirname(__FILE__).DIR_FUNCTIONS_LANGUAGE.$lang_file;
// Install Friendly Url
include_once dirname(__FILE__).DIR_FUNCTIONS_URL."url_config.php";
// Configure Website
include_once dirname(__FILE__).DIR_FUNCTIONS."website_config.php";
// echo $translate['link_contact'];die;
$trang = isset($_GET['trang']) ? $_GET['trang'] : '1';
// $action = new action();
$cart = new action_cart();
$menu = new action_menu();
$action_product = new action_product();
$action_news = new action_news();
$action_service = new action_service();
$action_page = new action_page();
if($lang == "vn"){
    $rowConfig_lang = $action->getDetail('config_languages','id',1);
}else{
    $rowConfig_lang = $action->getDetail('config_languages','id',2);
}


$rowConfig = $action->getDetail('config','config_id',1);
?>
<?php 
function curPageURL_paypal() {
     $pageURL = 'http';
     if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
     $pageURL .= "://";
     if ($_SERVER["SERVER_PORT"] != "80") {
      $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].'/';
     } else {
      $pageURL .= $_SERVER["SERVER_NAME"].'/';
     }
     return $pageURL;
}
$link_paypal = curPageURL_paypal();//die($link_paypal);

include_once dirname(__FILE__).'/functions/vendor/autoload.php';

// define('SITE_URL', 'http://vietnamfasttrack.org/');
define('SITE_URL', $link_paypal);

// tuan
// $paypal = new \PayPal\Rest\ApiContext(
//         new \PayPal\Auth\OAuthTokenCredential(
//                 'AYq5y9QlbbGxamZstVQWDD8-WzIgMcHfbcKJazHRSy7_ncmiedv-up80-JP7po2O1C2mvlif_GGShuVC',
//                 'EErTXQIqJyU6GFhvdlSC0nbCFqMEI4ztOa91xovHiBnPvERlnz8-0eyJJ129sBs7v6h5XnknLARise9y'
//             )
//     );

// khach
$paypal = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
                'AYS3rCRF665XENuRS53eeslt9i_1M7-A1txFjEGVtKzb9IlHttiy3Qt_OlFT_BJNUf6ziKBW-T3hPM2O',
                'EC_PgqKm0Cz5Wrp4ZIsYBYIK5jBT9cRJHdvZ5UCnK4W1bf6lqoYBIjEhWm-5iH59Ej2h98RtwSnSc-Du'
            )
    );


$paypal->setConfig([
    'mode' => ('live'),
]);
?>
<!doctype html>

<html lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0ZVKX9EXXV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0ZVKX9EXXV');
</script>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="<?= $meta_des ?>"> 

    <meta name="keywords" content="<?= $meta_key ?>">

    <title><?= $title ?></title>

    <link rel="icon" href="/images/<?= $rowConfig['icon_web'] ?>" type="image/gif" sizes="16x16">


    <link rel="stylesheet" href="/plugin/bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="/plugin/bootstrap/css/bootstrap-theme.css">
    
    <link rel="stylesheet" href="/plugin/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="/css/style-denmoc-1.css">
    <link rel="stylesheet" href="/css/style-greentours.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/style-order-trip.css">

    <script src="/plugin/jquery/jquery-2.0.2.min.js"></script>

    <script src="/plugin/bootstrap/js/bootstrap.js"></script>

    <meta name="google-site-verification" content="-sUCSddW-Itr3Qz_GTTAiFWnsZhN4droE0PlxQb4Y2w" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133347000-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133347000-1');
</script>
<meta name="google-site-verification" content="Q8N5g0xB4DasWDu7e8QLHAAtFguEEBNjgaEVOMWeB3o" />
</head>



<body>

<?php include_once dirname(__FILE__).DIR_THEMES."header.php";?>



<div class="gb-content">

    <?php

    if (isset($_GET['page'])){



        $urlAnalytic = $action->getTypePage_byUrl($_GET['page'],$lang);

         // echo $urlAnalytic;

        switch ($urlAnalytic) {

            case 'tin-tuc-nhanh':


                include_once dirname(__FILE__).DIR_THEMES."tintuc1.php"; break;


            case 'tin-tuc':



                include_once dirname(__FILE__).DIR_THEMES."tintuc.php"; break;
            
            case 'product_languages':



                include_once dirname(__FILE__).DIR_THEMES."vietnam_ex.php"; break;
            
            case 'vi-sa':


                include_once dirname(__FILE__).DIR_THEMES."visa.php"; break;
            case 'ourstory':


                include_once dirname(__FILE__).DIR_THEMES."ourstory.php"; break;

            case 'theme_employment':


                include_once dirname(__FILE__).DIR_THEMES."theme_employment.php"; break;
            
            case 'service_languages':


                include_once dirname(__FILE__).DIR_THEMES."theme_employment_cc.php"; break;


            case 'newscat_languages':
                include_once dirname(__FILE__).DIR_THEMES."tintuc.php"; break;

            case 'search-news':
                include_once dirname(__FILE__) . DIR_THEMES. "search-news.php";break;

            case 'news_languages':



                include_once dirname(__FILE__).DIR_THEMES."chitiettintuc.php"; break;

            case 'lien-he':



                include_once dirname(__FILE__).DIR_THEMES."lienhe.php"; break;



            case 'gio-hang':



                include_once dirname(__FILE__).DIR_THEMES."giohang.php"; break;



            case 'khuyen-mai':



                include_once dirname(__FILE__).DIR_THEMES."khuyenmai.php"; break;
            /*Trang: DESTINATIONS >> Vietnam*/ 

            case 'san-pham':



                include_once dirname(__FILE__).DIR_THEMES."sanpham.php"; break;
            
            case 'productcat_languages':



                include_once dirname(__FILE__).DIR_THEMES."sanpham.php"; break;

            case 'themes1':



                include_once dirname(__FILE__).DIR_THEMES."themes.php"; break;
            



            case 'hang-thanh-ly':



                include_once dirname(__FILE__).DIR_THEMES."hangthanhly.php"; break;



            case 'thanh-toan':



                include_once dirname(__FILE__).DIR_THEMES."thanhtoan.php"; break;

            case 'chi-tiet-san-pham':



                include_once dirname(__FILE__).DIR_THEMES."chitietsanpham.php"; break;

            case 'huong-dan-dat-hang':



                include_once dirname(__FILE__).DIR_THEMES."huongdanmuahang.php"; break;

            case 'huong-dan-thanh-toan':



                include_once dirname(__FILE__).DIR_THEMES."cachthucthanhtoan.php"; break;



            case 'chinh-sach-van-chuyen':



                include_once dirname(__FILE__).DIR_THEMES."chinhsachvanchuyen.php"; break;

            case 'page_language':



                include_once dirname(__FILE__).DIR_THEMES."gioithieu.php"; break;

            case 'dat-ve':

                include_once dirname(__FILE__).DIR_THEMES."datve.php"; break;

            case 'thong-tin-dat-ve':

                include_once dirname(__FILE__).DIR_THEMES."thongtindatve.php"; break;

            case 'dang-nhap':

                include_once dirname(__FILE__).DIR_THEMES."dangnhap.php"; break;
            case 'dang-ky':

                include_once dirname(__FILE__).DIR_THEMES."dangky.php"; break;

            case 'dang-xuat':
                include_once dirname(__FILE__) . DIR_THEMES . "dangxuat.php";break;

            case 'checkbooking':
                include_once dirname(__FILE__) . DIR_THEMES . "checkbooking.php";break;

            case 'flights':
                include_once dirname(__FILE__) . DIR_THEMES . "flights.php";break;

            case 'apply-vietnam-visa-voa':
                include_once dirname(__FILE__) . DIR_THEMES . "apply-vietnam-visa.php";break;

            case 'apply-vietnam-evisa':
                include_once dirname(__FILE__) . DIR_THEMES . "apply-vietnam-evisa.php";break;

            case 'apply-cambodia-evisa':
                include_once dirname(__FILE__) . DIR_THEMES . "apply-cambodia-visa.php";break;

            case 'apply-laos-evisa':
                include_once dirname(__FILE__) . DIR_THEMES . "apply-laos-visa.php";break;

            case 'applicant-details':
                include_once dirname(__FILE__) . DIR_THEMES . "applicant-details.php";break;

            case 'applicant-details-vietnam-evisa':
                include_once dirname(__FILE__) . DIR_THEMES . "applicant-details-vietnam-evisa.php";break;

            case 'applicant-details-laos-evisa':
                include_once dirname(__FILE__) . DIR_THEMES . "applicant-details-laos-evisa.php";break;

            case 'applicant-details-cambodia-evisa':
                include_once dirname(__FILE__) . DIR_THEMES . "applicant-details-cambodia-evisa.php";break;

            case 'check-out':
                include_once dirname(__FILE__) . DIR_THEMES . "check-out.php";break;

            case 'check-out-vietnam-evisa':
                include_once dirname(__FILE__) . DIR_THEMES . "check-out-vietnam-evisa.php";break;

            case 'check-out-laos-evisa':
                include_once dirname(__FILE__) . DIR_THEMES . "check-out-laos-evisa.php";break;

            case 'check-out-cambodia-evisa':
                include_once dirname(__FILE__) . DIR_THEMES . "check-out-cambodia-evisa.php";break;

            case 'order-visa':
                include_once dirname(__FILE__) . DIR_THEMES . "order-visa.php";break;

            case 'order-evisa-vietnam':
                include_once dirname(__FILE__) . DIR_THEMES . "order-evisa-vietnam.php";break;

            case 'order-evisa-laos':
                include_once dirname(__FILE__) . DIR_THEMES . "order-evisa-laos.php";break;

            case 'order-evisa-cambodia':
                include_once dirname(__FILE__) . DIR_THEMES . "order-evisa-cambodia.php";break;

            case 'login':
                include_once dirname(__FILE__) . DIR_THEMES . "dangnhap.php";break;

            case 'search-tour':
                include_once dirname(__FILE__) . DIR_THEMES . "search-tour.php";break;

            case 'tailor-your-trip':
                include_once dirname(__FILE__) . DIR_THEMES . "tailor-your-trip.php";break;

            case 'your-details':
                include_once dirname(__FILE__) . DIR_THEMES . "your-details.php";break;

            case 'producttag_languages':
                include_once dirname(__FILE__) . DIR_THEMES . "chitiet-combo.php";break;

            case 'visa-vietnam':
                include_once dirname(__FILE__) . DIR_THEMES . "visa-vietnam.php";break;

            case 'visa-cambodia':
                include_once dirname(__FILE__) . DIR_THEMES . "visa-cambodia.php";break;

            case 'visa-laos':
                include_once dirname(__FILE__) . DIR_THEMES . "visa-laos.php";break;

            case 'customize-this-tour':
                include_once dirname(__FILE__) . DIR_THEMES . "customize-this-tour.php";break;

            case 'payment':
                include_once dirname(__FILE__) . DIR_THEMES . "payment.php";break;

            case 'payment-success':
                include_once dirname(__FILE__) . DIR_THEMES . "payment-success.php";break;

            case 'wishlist':
                include_once dirname(__FILE__) . DIR_THEMES . "wishlist.php";break;

            case 'golf-special':
                include_once dirname(__FILE__) . DIR_THEMES . "golf-special.php";break;

            case 'thong-tin-tai-khoan':
                include_once dirname(__FILE__) . DIR_THEMES . "thong-tin-tai-khoan.php";break;

            case 'doi-mat-khau':
                include_once dirname(__FILE__). DIR_THEMES . "doi-mat-khau.php";break;

            case 'list-order-visa':
                include_once dirname(__FILE__) . DIR_THEMES . "don-dat-visa.php";break;

            case 'order-visa-detail':
                include_once dirname(__FILE__) . DIR_THEMES . "order-visa-detail.php";break;

            case 'order-evisa-detail':
                include_once dirname(__FILE__) . DIR_THEMES . "order-evisa-detail.php";break;

            case 'feedback':
                include_once dirname(__FILE__) . DIR_THEMES . "feedback.php";break;

            case 'search-spec':
                include_once dirname(__FILE__) . DIR_THEMES . "search-spec.php";break;

        }

    }

    else include_once dirname(__FILE__).DIR_THEMES."home.php";

    ?>

</div>





<?php include_once dirname(__FILE__).DIR_THEMES."footer.php"; ?>
<!-- <style>.fb-livechat, .fb-widget{display: none}.ctrlq.fb-button, .ctrlq.fb-close{position: fixed; right: 24px; cursor: pointer}.ctrlq.fb-button{z-index: 999; background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff; width: 60px; height: 60px; text-align: center; bottom: 50px; border: 0; outline: 0; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; -ms-border-radius: 60px; -o-border-radius: 60px; box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16); -webkit-transition: box-shadow .2s ease; background-size: 80%; transition: all .2s ease-in-out}.ctrlq.fb-button:focus, .ctrlq.fb-button:hover{transform: scale(1.1); box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)}.fb-widget{background: #fff; z-index: 1000; position: fixed; width: 360px; height: 435px; overflow: hidden; opacity: 0; bottom: 0; right: 24px; border-radius: 6px; -o-border-radius: 6px; -webkit-border-radius: 6px; box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16)}.fb-credit{text-align: center; margin-top: 8px}.fb-credit a{transition: none; color: #bec2c9; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-decoration: none; border: 0; font-weight: 400}.ctrlq.fb-overlay{z-index: 0; position: fixed; height: 100vh; width: 100vw; -webkit-transition: opacity .4s, visibility .4s; transition: opacity .4s, visibility .4s; top: 0; left: 0; background: rgba(0, 0, 0, .05); display: none}.ctrlq.fb-close{z-index: 4; padding: 0 6px; background: #365899; font-weight: 700; font-size: 11px; color: #fff; margin: 8px; border-radius: 3px}.ctrlq.fb-close::after{content: "X"; font-family: sans-serif}.bubble{width: 20px; height: 20px; background: #c00; color: #fff; position: absolute; z-index: 999999999; text-align: center; vertical-align: middle; top: -2px; left: -5px; border-radius: 50%;}.bubble-msg{width: 120px; left: -140px; top: 5px; position: relative; background: rgba(59, 89, 152, .8); color: #fff; padding: 5px 8px; border-radius: 8px; text-align: center; font-size: 13px;}</style><div class="fb-livechat"> <div class="ctrlq fb-overlay"></div><div class="fb-widget"> <div class="ctrlq fb-close"></div><div class="fb-page" data-href="https://www.facebook.com/xekhachhungduc" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"> </div><div class="fb-credit"> <a href="https://chanhtuoi.com" target="_blank">Powered by Chanhtuoi</a> </div><div id="fb-root"></div></div><a href="https://m.me/xekhachhungduc" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button"> <div class="bubble">1</div><div class="bubble-msg">Bạn cần hỗ trợ?</div></a></div><script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script><script>$(document).ready(function(){function detectmob(){if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ){return true;}else{return false;}}var t={delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")}; setTimeout(function(){$("div.fb-livechat").fadeIn()}, 8 * t.delay); if(!detectmob()){$(".ctrlq").on("click", function(e){e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({bottom: 0, opacity: 0}, 2 * t.delay, function(){$(this).hide("slow"), t.button.show()})) : t.button.fadeOut("medium", function(){t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)})})}});</script> -->

<style>.fb-livechat, .fb-widget{display: none}.ctrlq.fb-button, .ctrlq.fb-close{position: fixed; right: 24px; cursor: pointer}.ctrlq.fb-button{z-index: 999; background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff; width: 60px; height: 60px; text-align: center; bottom: 30px; border: 0; outline: 0; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; -ms-border-radius: 60px; -o-border-radius: 60px; box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16); -webkit-transition: box-shadow .2s ease; background-size: 80%; transition: all .2s ease-in-out}.ctrlq.fb-button:focus, .ctrlq.fb-button:hover{transform: scale(1.1); box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)}.fb-widget{background: #fff; z-index: 1000; position: fixed; width: 360px; height: 435px; overflow: hidden; opacity: 0; bottom: 0; right: 24px; border-radius: 6px; -o-border-radius: 6px; -webkit-border-radius: 6px; box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16)}.fb-credit{text-align: center; margin-top: 8px}.fb-credit a{transition: none; color: #bec2c9; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-decoration: none; border: 0; font-weight: 400}.ctrlq.fb-overlay{z-index: 0; position: fixed; height: 100vh; width: 100vw; -webkit-transition: opacity .4s, visibility .4s; transition: opacity .4s, visibility .4s; top: 0; left: 0; background: rgba(0, 0, 0, .05); display: none}.ctrlq.fb-close{z-index: 4; padding: 0 6px; background: #365899; font-weight: 700; font-size: 11px; color: #fff; margin: 8px; border-radius: 3px}.ctrlq.fb-close::after{content: "X"; font-family: sans-serif}.bubble{width: 20px; height: 20px; background: #c00; color: #fff; position: absolute; z-index: 999999999; text-align: center; vertical-align: middle; top: -2px; left: -5px; border-radius: 50%;}.bubble-msg{width: 120px; left: -140px; top: 5px; position: relative; background: rgba(59, 89, 152, .8); color: #fff; padding: 5px 8px; border-radius: 8px; text-align: center; font-size: 13px;}</style><div class="fb-livechat"> <div class="ctrlq fb-overlay"></div><div class="fb-widget"> <div class="ctrlq fb-close"></div><div class="fb-page" data-href="https://www.facebook.com/greentoursindochina" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"> </div><div class="fb-credit"> <a href="https://chanhtuoi.com" target="_blank">Powered by Chanhtuoi</a> </div><div id="fb-root"></div></div><a href="https://m.me/greentoursindochina" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button"> <div class="bubble">1</div><div class="bubble-msg">Send us a message?</div></a></div><script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script><script>jQuery(document).ready(function($){function detectmob(){if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ){return true;}else{return false;}}var t={delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")}; setTimeout(function(){$("div.fb-livechat").fadeIn()}, 8 * t.delay); if(!detectmob()){$(".ctrlq").on("click", function(e){e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({bottom: 0, opacity: 0}, 2 * t.delay, function(){$(this).hide("slow"), t.button.show()})) : t.button.fadeOut("medium", function(){t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)})})}});</script>

</body>



</html>



