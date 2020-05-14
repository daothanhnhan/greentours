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
<section id="block-peak-merchandise-peak-merchandise-banner"
    class="block block-peak-merchandise block-peak-merchandise-banner b-peak-merchandise-banner clearfix">
    <div class="banner" data-template="peak-merchandise--banner">
        <div class="banner__image">
            <div class="banner__image-wrapper">
                <div class="image-placeholder1" style=""><img src="/images/green/banner/about.jpg" style="width: 100%;">
                </div>
            </div>
        </div>
        <div class="banner__overlay"></div>
        <div class="banner__content">
            <div class="banner__content-inner">
                <h1 class="banner__heading"><?= $row['product_name'] ?></h1>
            </div>
        </div>
    </div>

</section>
<div class="gb-page-blog_denmoc">
    <?php include DIR_BREADCRUMBS."MS_BREADCRUMS_DENMOC_0002.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <?php 
                    $d = 0;
                    foreach ($rows['data'] as $item) {
                        $d++;
                        $rowLang = $action_news->getNewsLangDetail_byId($item['news_id'],$lang); 
                    ?>

                    <div class="gb-news-blog_denmoc-item">
                        <div class="col-sm-6">
                            <div class="gb-news-blog_denmoc-item-img">
                                <a href="/<?= $rowLang['friendly_url'] ?>"><img src="/images/<?= $item['news_img'] ?>"
                                        alt="<?= $rowLang['lang_news_name'] ?>" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div class="gb-news-blog_denmoc-item-text">
                                <div class="gb-news-blog_denmoc-item-title">
                                    <h3><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_news_name'] ?></a>
                                    </h3>
                                </div>
                                <div class="caption caption-large">
                                    <time class="the-date"><?= substr($item['news_created_date'], 0, 10) ?></time>
                                </div>
                                <div class="gb-news-blog_denmoc-item-text-des">
                                    <p><?= $rowLang['lang_news_des'] ?></p>
                                </div>
                            </div>
                            <div class="gb-news-blog_denmoc-item-button">
                                <a href="/<?= $rowLang['friendly_url'] ?>">
                                    <button type="button" class="btn gb-btn-readmore">MORE DETAILS</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php 
                    if ($d%1==0) {
                        echo '<hr style="width:100%;border:0;" />';
                    }
                    } ?>
                </div>
                <div style="text-align: center;"><?= $rows['paging'] ?></div>
            </div>
            <!--<div class="col-md-4">
                <?php //include DIR_SIDEBAR."MS_SIDEBAR_DENMOC_0001.php";?>
                <?php //include DIR_SIDEBAR."MS_SIDEBAR_DENMOC_0003.php";?>
            </div>-->
        </div>
    </div>
</div>