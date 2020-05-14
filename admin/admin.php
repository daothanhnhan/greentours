<?php
include_once('__autoload.php');


if (isset($_GET['logout'])) {
    $acc->logout();
    $acc->redirect("index.php");
}

$trang = isset($_GET['trang']) ? $_GET['trang'] : '1';
$infor = $acc->getLoginInfor();

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'vn';
if (isSet($_GET['lang'])) {
    $lang = $_GET['lang'];
    $id_lang = $_GET['lang'];
    // register the session and set the cookie
    $_SESSION['lang'] = $lang;

    //setcookie('lang', $lang, time() + (3600 * 24 * 30));
} else if (isSet($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
    $id_lang = $_SESSION['lang'];
} else if (isSet($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
    $id_lang = $_COOKIE['lang'];
} else {
    $lang = 'vn';
    $id_lang = 'vn';
}
switch ($lang) {
    case 'en':
        $lang_file = 'lang_en.php';
        break;

    case 'vn':
        $lang_file = 'lang_vn.php';
        break;

    default:
        $lang_file = 'lang_vn.php';

}
include_once '../languages/' . $lang_file;
$config_id = 1;
$rowConfigLang = $action->getDetail_New('config_languages', array('config_id', 'languages_code'), array(&$config_id, &$lang), 'is');
?>
<?php
    $hidden_multi_lang = 'hidden';// de an text laf hidden.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Quản trị</title>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/content.css"/>
    <link rel="stylesheet" type="text/css" href="css/header.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/content.css"/>
    <link rel="stylesheet" type="text/css" href="css/footer.css"/>
    <link rel="stylesheet" type="text/css" href="css/pageload.css"/>
    <link rel='stylesheet' type='text/css' href='css/chi-tiet-trang-noi-dung.css'/>
    <link rel='stylesheet' type='text/css' href='css/trac-nghiem-benh-tri.css'/>
    <link rel="stylesheet" type="text/css" href="css/font.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="https://rawgit.com/andrewng330/PreviewImage/master/preview.image.min.js"></script>
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="js/getslug.js"></script>
    <script src="js/action_query_ajax.js"></script>
    <script src="js/pageload.min.js"></script>

    <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        (function () {
            var link_element = document.createElement("link"),
                s = document.getElementsByTagName("script")[0];
            if (window.location.protocol !== "http:" && window.location.protocol !== "https:") {
                link_element.href = "http:";
            }
            link_element.href += "//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600italic,600,700italic,700,800italic,800";
            link_element.rel = "stylesheet";
            link_element.type = "text/css";
            s.parentNode.insertBefore(link_element, s);
        })();
    </script>
</head>


<body>
<div id="divWrapper">
    <?php include_once('fixedNav.php'); ?>
    <div class="centerWeb">
        <div class="coverWeb">
            <?php
            if (isset($_GET["page"])) {
                switch ($_GET["page"]) {

                    case 'trinh-don':
                        echo "<link rel='stylesheet' type='text/css' href='css/trang-noi-dung.css' />";
                        include_once('template/trinh-don/menu.php');
                        break;

                    case 'them-trinh-don':
                        include_once("template/trinh-don/them-menu.php");
                        break;

                    case 'sua-trinh-don':
                        include_once("template/trinh-don/sua-menu.php");
                        break;

                    /*----------- Bài viết ------------*/

                    case "bai-viet":
                        echo "<link rel='stylesheet' type='text/css' href='css/trang-noi-dung.css' />";
                        include_once("template/bai-viet/trang-noi-dung.php");
                        break;

                    case "sua-bai-viet":
                        include_once("template/bai-viet/chi-tiet-trang-noi-dung.php");
                        break;

                    case "them-bai-viet":
                        include_once("template/bai-viet/them-trang-noi-dung.php");
                        break;

                    /*----------- Danh mục bài viết ------------*/

                    case "danh-muc-tin-tuc":
                        echo "<link rel='stylesheet' type='text/css' href='css/trang-noi-dung.css' />";
                        include_once("template/danh-muc-tin-tuc/danh-muc-tin-tuc.php");
                        break;

                    case "sua-danh-muc-tin-tuc":
                        include_once("template/danh-muc-tin-tuc/sua-danh-muc-tin-tuc.php");
                        break;

                    case "them-danh-muc-tin-tuc":
                        include_once("template/danh-muc-tin-tuc/them-danh-muc-tin-tuc.php");
                        break;

                    /*------------- Tin tức ------------*/

                    case "them-tin-tuc":
                        include_once("template/tin-tuc/them-tin-tuc.php");
                        break;

                    case "sua-tin-tuc":
                        include_once("template/tin-tuc/sua-tin-tuc.php");
                        break;

                    case "tin-tuc":
                        echo "<link rel='stylesheet' type='text/css' href='css/trang-bai-viet.css' />";
                        include_once("template/tin-tuc/tin-tuc.php");
                        break;

                    /*----------- Danh mục dịch vụ ------------*/

                    case "danh-muc-dich-vu":
                        echo "<link rel='stylesheet' type='text/css' href='css/trang-danh-muc-dich-vu.css' />";
                        include_once("template/danh-muc-dich-vu/danh-muc-dich-vu.php");
                        break;

                    case "sua-danh-muc-dich-vu":
                        include_once("template/danh-muc-dich-vu/sua-danh-muc-dich-vu.php");
                        break;

                    case "them-danh-muc-dich-vu":
                        include_once("template/danh-muc-dich-vu/them-danh-muc-dich-vu.php");
                        break;

                    /*------------- Tin tức ------------*/

                    case "them-dich-vu":
                        include_once("template/dich-vu/them-dich-vu.php");
                        break;

                    case "sua-dich-vu":
                        include_once("template/dich-vu/sua-dich-vu.php");
                        break;

                    case "dich-vu":
                        echo "<link rel='stylesheet' type='text/css' href='css/trang-dich-vu.css' />";
                        include_once("template/dich-vu/dich-vu.php");
                        break;


                    /*-------------- Sản phẩm -----------*/

                    case "them-san-pham":
                        echo "<link rel='stylesheet' type='text/css' href='css/trang-san-pham-them-moi.css' />";
                        include_once("template/san-pham/them-san-pham.php");
                        break;

                    case "sua-san-pham":
                        echo "<link rel='stylesheet' type='text/css' href='css/trang-san-pham-them-moi.css' />";
                        include_once("template/san-pham/sua-san-pham.php");
                        break;

                    case "san-pham":
                        echo "<link rel='stylesheet' type='text/css' href='css/trang-noi-dung.css' />";
                        include_once("template/san-pham/san-pham.php");
                        break;

                    /*-------------- Danh mục sản phẩm -----------*/

                    case "them-danh-muc-san-pham":
                        include_once("template/danh-muc-san-pham/them-loai-san-pham.php");
                        break;

                    case "sua-danh-muc-san-pham":
                        include_once("template/danh-muc-san-pham/sua-loai-san-pham.php");
                        break;

                    case "danh-muc-san-pham":
                        echo "<link rel='stylesheet' type='text/css' href='css/trang-noi-dung.css' />";
                        include_once("template/danh-muc-san-pham/loai-san-pham.php");
                        break;

                    /*-------------- danh sach nguoi dung dang ky thong tin ... -----------*/

                    case "dang-ky":
                        include_once("template/dang-ky/dang-ky.php");
                        break;

                    case "sua-dang-ky":
                        include_once("template/dang-ky/sua-dang-ky.php");
                        break;

                    case "them-dang-ky":
                        include_once("template/dang-ky/them-dang-ky.php");
                        break;

                    /*-------------- danh sach nguoi dung dang ky thành viên -----------*/

                    // case thanh vien user
                     case "tai-khoan-user":
                        include_once("template/tai-khoan-user/tai-khoan-user.php");
                        break;

                    // 

                    case "thanh-vien":
                        include_once("template/thanh-vien/thanh-vien.php");
                        break;

                    case "sua-thanh-vien":
                        include_once("template/thanh-vien/sua-thanh-vien.php");
                        break;

                    case "them-thanh-vien":
                        include_once("template/thanh-vien/them-thanh-vien.php");
                        break;


                    /*------------- Tài khoản ------------*/

                    case "tai-khoan":
                        echo "<link rel='stylesheet' type='text/css' href='css/trang-san-pham.css' />";
                        include_once("template/tai-khoan/tai-khoan.php");
                        break;

                    case "them-tai-khoan":
                        echo "<link rel='stylesheet' type='text/css' href='css/trang-san-pham-them-moi.css' />";
                        include_once("template/tai-khoan/them-tai-khoan.php");
                        break;

                    case "sua-tai-khoan":
                        echo "<link rel='stylesheet' type='text/css' href='css/trang-san-pham-them-moi.css' />";
                        include_once("template/tai-khoan/sua-tai-khoan.php");
                        break;


                    /*--------- Config -------------*/

                    case 'config':
                        include_once('config.php');
                        break;

                    ///////////// Trang đơn hàng //////////////////

                    case "them-don-hang":
                        include_once("template/don-hang/them-don-hang.php");
                        break;

                    case "sua-don-hang":
                        echo "<link rel='stylesheet' type='text/css' href='css/sua-don-hang.css' />";
                        include_once("template/don-hang/sua-don-hang.php");
                        break;

                    case "don-hang":
                        echo "<link rel='stylesheet' type='text/css' href='css/trang-don-hang.css' />";
                        include_once("template/don-hang/don-hang.php");
                        break;

                    case 'lien-he':
                        include_once('template/lien-he.php');
                        break;
                    //////////////Slider///////////////////
                    case "slider":
                        include_once("slider.php");
                        break;

                    case "them-slider":
                        include_once("them-slider.php");
                        break;

                    case "sua-slider":
                        include_once("sua-slider.php");
                        break;
                    /////////////// Quảng cáo //////////////////////
                    case "quang-cao":
                        include_once("quang-cao.php");
                        break;

                    case "them-quang-cao":
                        include_once("them-quang-cao.php");
                        break;

                    case "sua-quang-cao":
                        include_once("sua-quang-cao.php");
                        break;
                    /////////////// video ////////////////
                    case "video":
                        include_once("template/video/video.php");
                        break;
                    case "them-video":
                        include_once("template/video/them-video.php");
                        break;
                    case "sua-video":
                        include_once("template/video/sua-video.php");
                        break;
                    case "xoa-video":
                        include_once("template/video/xoa-video.php");
                        break;
                    ///////////// cam nhan ///////////////
                    case "cam-nhan":
                        include_once("template/cam-nhan/cam-nhan.php");
                        break;
                    case "them-cam-nhan":
                        include_once("template/cam-nhan/them-cam-nhan.php");
                        break;
                    case "sua-cam-nhan":
                        include_once("template/cam-nhan/sua-cam-nhan.php");
                        break;
                    case "xoa-cam-nhan":
                        include_once("template/cam-nhan/xoa-cam-nhan.php");
                        break;
                    //////// tai khoan khách hang ////////
                    case "xoa-tai-khoan-user":
                        include_once("template/tai-khoan-user/xoa-tai-khoan-user.php");
                        break;
                    //////////// hanh trình ///////////////
                    case "hanh-trinh":
                        include_once("template/hanh-trinh/hanh-trinh.php");
                        break;
                    case "them-hanh-trinh":
                        include_once("template/hanh-trinh/them-hanh-trinh.php");
                        break;
                    case "sua-hanh-trinh":
                        include_once("template/hanh-trinh/sua-hanh-trinh.php");
                        break;
                    case "xoa-hanh-trinh":
                        include_once("template/hanh-trinh/xoa-hanh-trinh.php");
                        break;
                    ///////////// các câu hỏi /////////////
                    case "cau-hoi":
                        include_once("template/cau-hoi/cau-hoi.php");
                        break;
                    case "them-cau-hoi":
                        include_once("template/cau-hoi/them-cau-hoi.php");
                        break;
                    case "sua-cau-hoi":
                        include_once("template/cau-hoi/sua-cau-hoi.php");
                        break;
                    case "xoa-cau-hoi":
                        include_once("template/cau-hoi/xoa-cau-hoi.php");
                        break;
                    ////////////// team ///////////////////
                    case "team":
                        include_once("template/team/team.php");
                        break;
                    case "them-team":
                        include_once("template/team/them-team.php");
                        break;
                    case "sua-team":
                        include_once("template/team/sua-team.php");
                        break;
                    case "xoa-team":
                        include_once("template/team/xoa-team.php");
                        break;
                    ////////// apply for this job /////////
                    case "apply-job":
                        include_once("template/apply-job/apply-job.php");
                        break;
                    case "xoa-apply-job":
                        include_once("template/apply-job/xoa-apply-job.php");
                        break;
                    ///////////// our promises ////////////
                    case "loi-hua":
                        include_once("template/loi-hua/loi-hua.php");
                        break;
                    case "them-loi-hua":
                        include_once("template/loi-hua/them-loi-hua.php");
                        break;
                    case "sua-loi-hua":
                        include_once("template/loi-hua/sua-loi-hua.php");
                        break;
                    case "xoa-loi-hua":
                        include_once("template/loi-hua/xoa-loi-hua.php");
                        break;
                    ///////////// order visa //////////////
                    case "dat-visa":
                        include_once("template/dat-visa/dat-visa.php");
                        break;
                    case 'dat-visa-detail':
                        include_once("template/dat-visa/dat-visa-detail.php");
                        break;
                    case "xoa-dat-visa":
                        include_once("template/dat-visa/xoa-dat-visa.php");
                        break;
                    ///////////// order evisa vietnam //////////////
                    case "dat-evisa-vietnam":
                        include_once("template/dat-evisa-vietnam/dat-visa.php");
                        break;
                    case 'dat-evisa-vietnam-detail':
                        include_once("template/dat-evisa-vietnam/dat-visa-detail.php");
                        break;
                    case "xoa-dat-evisa-vietnam":
                        include_once("template/dat-evisa-vietnam/xoa-dat-visa.php");
                        break;
                    ///////////// order evisa lào //////////////
                    case "dat-evisa-laos":
                        include_once("template/dat-evisa-laos/dat-visa.php");
                        break;
                    case 'dat-evisa-laos-detail':
                        include_once("template/dat-evisa-laos/dat-visa-detail.php");
                        break;
                    case "xoa-dat-evisa-laos":
                        include_once("template/dat-evisa-laos/xoa-dat-visa.php");
                        break;
                    ///////////// order evisa lào //////////////
                    case "dat-evisa-cambodia":
                        include_once("template/dat-evisa-cambodia/dat-visa.php");
                        break;
                    case 'dat-evisa-cambodia-detail':
                        include_once("template/dat-evisa-cambodia/dat-visa-detail.php");
                        break;
                    case "xoa-dat-evisa-cambodia":
                        include_once("template/dat-evisa-cambodia/xoa-dat-visa.php");
                        break;
                    ///////////// holiday /////////////////
                    case "holiday":
                        include_once("template/holiday/holiday.php");
                        break;
                    case "them-holiday":
                        include_once("template/holiday/them-holiday.php");
                        break;
                    case "sua-holiday":
                        include_once("template/holiday/sua-holiday.php");
                        break;
                    case "xoa-holiday":
                        include_once("template/holiday/xoa-holiday.php");
                        break;
                    ////////////// golf ///////////////////
                    case "golf":
                        include_once("template/golf/golf.php");
                        break;
                    case "them-golf":
                        include_once("template/golf/them-golf.php");
                        break;
                    case "sua-golf":
                        include_once("template/golf/sua-golf.php");
                        break;
                    case "xoa-golf":
                        include_once("template/golf/xoa-golf.php");
                        break;
                    /////////// tab san pham //////////////
                    case "tag-san-pham":
                        include_once("template/tag-san-pham/loai-san-pham.php");
                        break;
                    case "them-tag-san-pham":
                        include_once("template/tag-san-pham/them-loai-san-pham.php");
                        break;
                    case "sua-tag-san-pham":
                        include_once("template/tag-san-pham/sua-loai-san-pham.php");
                        break;
                    ///////////// khoi hanh ///////////////
                    case "khoi-hanh":
                        include_once("template/khoi-hanh/khoi-hanh.php");
                        break;
                    case "them-khoi-hanh":
                        include_once("template/khoi-hanh/them-khoi-hanh.php");
                        break;
                    case "sua-khoi-hanh":
                        include_once("template/khoi-hanh/sua-khoi-hanh.php");
                        break;
                    case "xoa-khoi-hanh":
                        include_once("template/khoi-hanh/xoa-khoi-hanh.php");
                        break;
                    //////////// customize ////////////////
                    case "customize":
                        include_once("template/customize/customize.php");
                        break;
                    case "xoa-customize":
                        include_once("template/customize/xoa-customize.php");
                        break;
                    ///////////// book tour ///////////////
                    case "book-tour":
                        include_once("template/book-tour/book-tour.php");
                        break;
                    case "xoa-book-tour":
                        include_once("template/book-tour/xoa-book-tour.php");
                        break;
                    case "chi-tiet-book-tour":
                        include_once("template/book-tour/chi-tiet-book-tour.php");
                        break;
                    //////////// dat combo ////////////////
                    case "dat-combo":
                        include_once("template/dat-combo/dat-combo.php");
                        break;
                    case "xoa-dat-combo":
                        include_once("template/dat-combo/xoa-dat-combo.php");
                        break;
                    /////////////// why ///////////////////
                    case "why":
                        include_once("template/why/why.php");
                        break;
                    case "them-why":
                        include_once("template/why/them-why.php");
                        break;
                    case "sua-why":
                        include_once("template/why/sua-why.php");
                        break;
                    case "xoa-why":
                        include_once("template/why/xoa-why.php");
                        break;
                    ///////////// thuong hieu ////////////
                    case "them-thuong-hieu":
                        include_once("template/thuong-hieu/them-thuong-hieu.php");
                        break;

                    case "thuong-hieu":
                        include_once("template/thuong-hieu/thuong-hieu.php");
                        break;

                    case "sua-thuong-hieu":
                        include_once("template/thuong-hieu/sua-thuong-hieu.php");
                        break;

                    case "xoa-thuong-hieu":
                        include_once("template/thuong-hieu/xoa-thuong-hieu.php");
                        break;
                    ///////////// danh muc tour faqs //////
                    case "danh-muc-tour-faqs":
                        include_once("template/danh-muc-tour-faqs/danh-muc-tour-faqs.php");
                        break;
                    case "them-danh-muc-tour-faqs":
                        include_once("template/danh-muc-tour-faqs/them-danh-muc-tour-faqs.php");
                        break;
                    case "sua-danh-muc-tour-faqs":
                        include_once("template/danh-muc-tour-faqs/sua-danh-muc-tour-faqs.php");
                        break;
                    case "xoa-danh-muc-tour-faqs":
                        include_once("template/danh-muc-tour-faqs/xoa-danh-muc-tour-faqs.php");
                        break;
                    ///////////// our contact /////////////
                    case "our-contact":
                        include_once("template/our-contact/our-contact.php");
                        break;
                    case "them-our-contact":
                        include_once("template/our-contact/them-our-contact.php");
                        break;
                    case "sua-our-contact":
                        include_once("template/our-contact/sua-our-contact.php");
                        break;
                    case "xoa-our-contact":
                        include_once("template/our-contact/xoa-our-contact.php");
                        break;
                    //////////// faqs visa laos ///////////
                    case "faqs-visa-laos":
                        include_once("template/faqs-visa-laos/faqs-visa-laos.php");
                        break;
                    case "them-faqs-visa-laos":
                        include_once("template/faqs-visa-laos/them-faqs-visa-laos.php");
                        break;
                    case "sua-faqs-visa-laos":
                        include_once("template/faqs-visa-laos/sua-faqs-visa-laos.php");
                        break;
                    case "xoa-faqs-visa-laos":
                        include_once("template/faqs-visa-laos/xoa-faqs-visa-laos.php");
                        break;
                    ////////// faqs visa cambodia /////////
                    case "faqs-visa-cambodia":
                        include_once("template/faqs-visa-cambodia/faqs-visa-cambodia.php");
                        break;
                    case "them-faqs-visa-cambodia":
                        include_once("template/faqs-visa-cambodia/them-faqs-visa-cambodia.php");
                        break;
                    case "sua-faqs-visa-cambodia":
                        include_once("template/faqs-visa-cambodia/sua-faqs-visa-cambodia.php");
                        break;
                    case "xoa-faqs-visa-cambodia":
                        include_once("template/faqs-visa-cambodia/xoa-faqs-visa-cambodia.php");
                        break;
                    ///////////// holiday tour /////////////////
                    case "holiday-cat":
                        include_once("template/holiday-cat/holiday.php");
                        break;
                    case "them-holiday-cat":
                        include_once("template/holiday-cat/them-holiday.php");
                        break;
                    case "sua-holiday-cat":
                        include_once("template/holiday-cat/sua-holiday.php");
                        break;
                    case "xoa-holiday-cat":
                        include_once("template/holiday-cat/xoa-holiday.php");
                        break;
                    ///////////// bang gia ////////////////
                    case "bang-gia":
                        include_once("template/bang-gia/bang-gia.php");
                        break;
                    ///////////// feedback ////////////////
                    case "feedback":
                        include_once("template/feedback/feedback.php");
                        break;
                    case "xoa-feedback":
                        include_once("template/feedback/xoa-feedback.php");
                        break;
                    case "sua-feedback":
                        include_once("template/feedback/sua-feedback.php");
                        break;
                    ///////////// Default /////////////////
                    default:
                        include_once("homeAdmin.php");
                }
            } else {
                include_once("homeAdmin.php");
            }
            ?>

        </div><!--end coverWeb-->
    </div>
</div><!--end divWrapper-->
<link rel="stylesheet" type="text/css" href="../css/select2.min.css"/>
<script src="../js/select2.min.js"></script>
<script>
    $(function () {
        $('.select2').select2({
            width: '100%',
        });
    })
</script>
<style>
    .select2-results__option, .select2-results__options {
        width: 100%;
    }
</style>
</body>
</html>

