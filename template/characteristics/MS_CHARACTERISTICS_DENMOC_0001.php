<?php 
    $home_taisao_arr = array(45, 44, 43);
?>
<link rel="stylesheet" href="/plugin/fonts/themify-icons/themify-icons.css">
<div class="gb-taisaolaichonchungtoi_denmoc">
    <div class="container">
        <div class="gb-taisaolaichonchungtoi_denmoc-title">
            <h2>Tại sao chọn chúng tôi</h2>
<!--             <p>
                Sứ mệnh của chúng tôi là tạo ra một môi trường học có thể đem lại ảnh hưởng tích cực, niềm vui, tình
                yêu và sự phát triển toàn diện cho học sinh. Bên cạnh các kiến thức chuyên môn, học sinh tại American
                Skills được bồi dưỡng nhân cách, phát triển sự tự tin, kỹ năng sống là bước đệm quan trọng, cần thiết
                cho sự thành công của các em trong tương lai.
            </p> -->
        </div>
        <div class="row">
            <?php 
            foreach ($home_taisao_arr as $item) { 
                $home_taisao = $action_page->getPageDetail_byId($item, $lang);
            ?>
            <div class="col-md-4">
                <div class="gb-taisaolaichonchungtoi_denmoc-item">
                    <div class="gb-taisaolaichonchungtoi_denmoc-item-img">
                        <img src="/images/<?= $home_taisao['page_img'] ?>" alt="<?= $home_taisao['page_name'] ?>" class="img-responsive">
                    </div>
                    <div class="gb-taisaolaichonchungtoi_denmoc-item-content">
                        <h4><?= $home_taisao['page_name'] ?></h4>
                        <p>
                            <?= $home_taisao['page_des'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>