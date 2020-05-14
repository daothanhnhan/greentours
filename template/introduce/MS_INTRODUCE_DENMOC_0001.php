<?php 
    $home_hasonhaivan = $action_page->getPageDetail_byId(46, $lang);
?>
<div class="gb-introvechungtoi_denmoc">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="gb-introvechungtoi_denmoc-left">
                    <h2><?= $home_hasonhaivan['page_name'] ?></h2>
                    <div class="gb-divider"></div>
                    <p>
                        <?= $home_hasonhaivan['page_des'] ?>
                    </p>
                    <a href="/<?= $home_hasonhaivan['friendly_url'] ?>" class="gb-introvechungtoi_denmoc-doctiep">Đọc tiếp</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="gb-introvechungtoi_denmoc-right">
                    <?= $home_hasonhaivan['page_sub_info1'] ?>
                </div>
            </div>
        </div>
    </div>
</div>