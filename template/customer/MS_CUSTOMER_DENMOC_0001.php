<?php 
    $home_camnhan = $action->getList('cam_nhan', '', '', 'id', 'asc', '', '', '');
?>
<div class="gb-custommer-say_ldpvinhome">
    <div class="container">
        <h3 class="title3 home-title boldup">Our promises</h3>
        <div class="row">
            <?php foreach ($home_camnhan as $item) { ?>
            <div class="col-md-4">
                <div class="testimonial-customer_ldpvinhome">
                    <div class="testimonial-title_ldpvinhome"><img src="/images/<?= $item['image'] ?>" alt="" class="img-responsive">
                        <p><?= $item['name'] ?></p>
                    </div>
                    <div class="testimonial-content_ldpvinhome">
                       <?= $item['note'] ?>

                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>