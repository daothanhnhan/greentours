<section id="block-peak-merchandise-peak-merchandise-banner"
    class="block block-peak-merchandise block-peak-merchandise-banner b-peak-merchandise-banner clearfix">



    <div class="banner" data-template="peak-merchandise--banner">
        <div class="banner__image">
            <div class="banner__image-wrapper">
                <div class="image-placeholder" style="padding-bottom:calc(26.041666666667%)"><img
                        class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"
                        width="1920" height="500" alt="Street food sellers in Hoi An, Vietnam"
                        title="Street food sellers in Hoi An, Vietnam"
                        data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg"
                        data-sizes="auto" data-expand="100"
                        data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 1400w,"
                        sizes="1349px"
                        srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg 1400w,"
                        src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/pd/banner/Intrepid%20Travel-Vietnam-hoi-an-street-sellers-107.jpg">
                </div>
            </div>
        </div>
        <div class="banner__overlay"></div>
        <div class="banner__content">
            <div class="banner__content-inner">
            <h1 class="banner__heading">Cycling tous in VietNam</h1>
            </div>
        </div>
    </div>

</section>
<?php   
    if (isset($_GET['slug']) && $_GET['slug'] != '') {
        $slug = $_GET['slug'];//echo 'tuan';die;                    
        $rowCatLang = $action_news->getNewsCatLangDetail_byUrl($slug,$lang);
        $rowCat = $action_news->getNewsCatDetail_byId($rowCatLang[$nameColIdNewsCat_newsCatLanguage],$lang);
        if (newsCatPageHasSub) {
            $rows = $action_news->getNewsList_byMultiLevel_orderNewsId($rowCat[$nameColId_newsCat],'desc',$trang,6,$slug);
        } else {
            $rows = $action_news->getNewsCat_byNewsCatIdParentHighest($rowCat[$nameColId_newsCat],'desc');//var_dump($rows);die;
        }        
    }
    else $rows = $action->getList($nameTable_news,'','',$nameColId_news,'desc',$trang,6,'tin-tuc'); 
    // var_dump($rows);die;
?>
<div class="gb-page-blog_denmoc">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <?php include DIR_SIDEBAR."MS_SIDEBAR_DENMOC_0009.php";?>
            </div>
            <div class="col-md-9">
            <?php include DIR_BREADCRUMBS."MS_BREADCRUMS_SPRO_0001.php";?>
                <div class="des_danhmuc">
                    <h3>Vietnamese food is where it's at</h3>
                    <p>At Buffalo Tours, we specialise in tailor, guided tours to Vietnam, Cambodia, Thailand, Myanamar,
                        Laos, China, HongKong, Singapore, Indonesia and Japan, as well as multi-country tours acrouss
                        the
                        region. We offer an expansive portolio of tours carefully crafted to showcase the very best of
                        Asia.
                        Our travel experts create tailor made travel packages to match all your travel preferences and
                        needs
                    </p>
                </div>
                <div class="khuyen_mai">
                    <h3>30% OFF CYCLING</h3>
                    <p>Must deppart by Oct.31.2019. Discount automantically applied</p>
                </div>
                <div class="list_trips">
                    <h3>Top Vietnam travel deals</h3>
                    <div class="row">
                        <?php 
                    $d = 0;
                    foreach ($rows['data'] as $item) {
                        $d++;
                        $rowLang = $action_news->getNewsLangDetail_byId($item['news_id'],$lang); 
                    ?>
                        <div class="col-sm-4">
                            <div class="gb-news-blog_denmoc-item">
                                <div class="gb-news-blog_denmoc-item-img">
                                    <a href="/<?= $rowLang['friendly_url'] ?>"><img
                                            src="/images/<?= $item['news_img'] ?>"
                                            alt="<?= $rowLang['lang_news_name'] ?>" class="img-responsive"> <span
                                            class="fa fa-heart icon-heart"></span></a>
                                    <div class="caption caption-large">
                                        <time class="the-date"><?= substr($item['news_created_date'], 0, 10) ?></time>
                                    </div>
                                    <div class="caption caption-large1">
                                        <h3><a
                                                href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_news_name'] ?></a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="gb-news-blog_denmoc-item-text">
                                    <div class="gb-news-blog_denmoc-item-text-des">
                                        <p><?= $rowLang['lang_news_des'] ?></p>
                                    </div>
                                </div>
                                <div class="gb-news-blog_denmoc-item-button">
                                    <a href="/<?= $rowLang['friendly_url'] ?>">
                                        <button type="button" class="btn gb-btn-readmore">ĐỌC TIẾP</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php 
                    if ($d%3==0) {
                        echo '<hr style="width:100%;border:0;" />';
                    }
                    } ?>
                    </div>
                    <div style="text-align: center;"><?= $rows['paging'] ?></div>
                </div>
                <div class="des_danhmuc">
                    <h2 class="list_trips">The best time to cycle in Asia</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <img
                                src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/when-asia-cycle.jpg">
                        </div>
                        <div class="col-md-6">
                            <h3>Over night sleeper train</h3>
                            <p>At Buffalo Tours, we specialise in tailor, guided tours to Vietnam, Cambodia, Thailand,
                                Myanamar, Laos,
                                China, HongKong</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <?php //include DIR_SIDEBAR."MS_SIDEBAR_DENMOC_0001.php";?>
                <?php //include DIR_SIDEBAR."MS_SIDEBAR_DENMOC_0003.php";?>
            </div>
        </div>
    </div>
</div>