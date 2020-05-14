<div class="gb-breadcrum">
    <!-- <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href=""><?= $title;?></a></li>
    </ul> -->
    <?php if ($use_breadcrumb) { ?>
        <!-- Breadcrumbs -->
        <ul class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li><a href="/<?= $breadcrumb_url ?>"><?= $breadcrumb_name ?></a></li>
            <li><a href="#"><?= $title ?></a></li>
        </ul>
        <!-- End breadcrumbs -->
        <?php } else { ?>
        <!-- Breadcrumbs -->
        <ul class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li><a href="#">
                <?php
                    if($_GET['page'] == "san-pham"){
                ?>
                <?php echo "Tất cả sản phẩm";}else{ ?>
                <?= $title ?>
            </a></li>
        </ul>
        <?php } }?>
</div>