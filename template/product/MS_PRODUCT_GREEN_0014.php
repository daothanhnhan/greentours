<div class="row">
	<div class="col-md-offset-6 col-md-6 col-sm-12 golf-title">
		<div><span class="days">Days</span></div>
		<div>Usd</div>
	</div>
</div>
<div class="row">
    <div class="col-md-6">
        <img src="/images/green/danh-golf.PNG" alt="" class="col6-none">
    </div>
    <div class="col-md-6 col-sm-12">
    	<?php 
    	$d = 0;
    	foreach ($rows['data'] as $item) {
    		$d++;
            $row = $item;
            $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
            $itinerary = $action->getList('itinerary', 'product_id', $row['product_id'], 'id', 'asc', '', '', '');
            $count = count($itinerary);
    	?>
        <div class="item-golf <?= $d==1 ? 'item-golf-child' : '' ?>">
            <div class="info">
            	<div>
            		<span class="days"><?= $count ?></span>
            	</div>
            	<div class="img">
            		<img src="/images/green/tab.PNG" alt="">
            	</div>
            	<div>
            		<p><span class="line-del">
					  <span><?= number_format($row['product_price']) ?></span>
					</span></p>
            		<p class="price"><?= number_format($action_product->percent1($row['product_price'], $row['product_price_sale'])) ?></p>
            	</div>
            	<div class="div-view-trip">
            		<a href="/<?= $rowLang['friendly_url'] ?>" title="" class="view-trip">View trip ></a>
            	</div>
            </div>
            <div class="text">
            	<h4><?= $rowLang['lang_product_name'] ?></h4>
            	<p>From <?= $row['start'] ?> to <?= $row['finish'] ?></p>
            </div>
            <div class="clearfix">
            	
            </div>
        </div>
    	<?php } ?>
    </div>
</div>
