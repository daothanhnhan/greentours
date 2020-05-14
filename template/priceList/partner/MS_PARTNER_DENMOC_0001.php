<?php 
    $partner = $action->getList('trademark', '', '', 'id', 'asc', '', '', '');
?>
<div class="container gb-custommer-say_ldpvinhome">
    <div class="doi-tac">
        <p class="tin-tuc-3"><b>OUR ASSOCIATIONS</b></p>
        <p class="tin-tuc-4">And we are really proud of them</p>
        <div class="row">
            <?php 
            $d = 0;
            foreach ($partner as $item) { 
                $d++;
            ?>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <img class="logo-partner" src="/images/<?= $item['image'] ?>">
            </div>
            <?php 
                if ($d%3==0) {
                    echo '</div><div class="row">';
                }
            }
            ?>
        </div>
        <!--<div class="row">
            <div class="col-md-2 col-sm-2 col-xs-4">
                <img class="logo-partner" src="/images/logo-atas.png">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-4">
                <img class="logo-partner" src="/images/ustoa-logo.png">
            </div>
        </div>-->
    </div>
</div>