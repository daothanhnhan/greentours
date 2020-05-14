<?php 
     $action_page = new action_page(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_page->getPageLangDetail_byUrl($slug,$lang);
    $row = $action_page->getPageDetail_byId($rowLang['news_id'],$lang);
    $_SESSION['sidebar'] = 'pageDetail';
?>
<style>
.gb-page-gioithieu-right h1, .gb-page-gioithieu-right h2, .gb-page-gioithieu-right h3, .gb-page-gioithieu-right h4, .gb-page-gioithieu-right h5, .gb-page-gioithieu-right h6 {
    color: #004a80;
}
</style>
<div class="gb-page-gioithieu">
    <?php include DIR_BREADCRUMBS."MS_BREADCRUMS_HNSTUDIO_0001.php";?>
    <div class="container">
        <div class="gb-page-gioithieu-right">
            <h2 style="font-size: 2em;"><?= $rowLang['lang_page_name'] ?></h2>
            <?= $rowLang['lang_page_content'] ?>
        </div>
    </div>
</div>