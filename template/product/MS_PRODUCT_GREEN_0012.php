<?php 
	$combo = $action->getList('producttag', '', '', 'producttag_id', 'desc', $trang, 9996, $_GET['page'], $_GET['page']);
?>
<div class="container" style="margin-top: 20px;">
	<div class="row">
		<?php foreach ($combo['data'] as $item) { ?>
		<div class="col-md-4 load-more" style="margin-bottom: 10px">
			<div style="" class="combo-item">
				<div>
					<a href="/<?= $item['friendly_url'] ?>"><img src="/images/<?= $item['producttag_img'] ?>" alt=""></a>
				</div>
				<div>
					<p style="text-align: center;color: #06867a;font-weight: bold;"><a href="/<?= $item['friendly_url'] ?>"><?= $item['producttag_name'] ?></a></p>
					<p style="text-align: center;color: #e4e405;">
						<?php for ($i=1;$i<=$item['star'];$i++) { ?>
						<i class="fa fa-star" aria-hidden="true"></i>
						<?php } ?>
					</p>
					<!-- <p style="text-align: center;"><?= $item['bao_gom'] ?></p> -->
					<p style="text-align: center;"><span style="font-weight: bold;font-size: 20px;"><?= number_format($item['producttag_price'], 0, ',', '.') ?></span> USD/pax</p>
				</div>
				<!-- <div style="text-align: center;border-top: 1px solid #ccc;padding: 5px 0;">
					<?= date('d-m-Y', strtotime($item['ngay_di'])) ?> → <?= date('d-m-Y', strtotime($item['ngay_den'])) ?>
				</div> -->
			</div>
		</div>
		<?php } ?>
	</div>
	<div style="text-align: center;margin-top: 20px;">
		<a href="#" id="load">View more <i class="fa fa-angle-down"></i></a>
	</div>
</div>
<script type="text/javascript">
$(function(){
    $(".load-more").slice(0, 6).show(); // select the first ten
    $("#load").click(function(e){ // click event for load more
        e.preventDefault();
        $(".load-more:hidden").slice(0, 6).show(); // select next 10 hidden divs and show them
        if($(".load-more:hidden").length == 0){ // check if any hidden divs still exist
            alert("No more combo"); // alert if there are none left
        }
    });
});
</script>