<?php 
	$purpose_visa = $action->getList('purpose_visa', '', '', 'id', 'asc', '', '', '');
?>
<style type="text/css" media="screen">
.how-it-work .gb-list-2 li span {
	color: #4000cd;
}
.how-it-work .gb-step .gb-step-1 .gb-step-img {
	width: 220px;
	float: left;
	box-shadow: rgb(202, 44, 51) 5px 3px 0px;
	border-radius: 50%;
	margin-right: 95px;
	position: relative;
}
.how-it-work .gb-step .gb-step-1 .gb-step-img img {
	width: 100%;
	border-radius: 50%;
	position: relative;
	z-index: 10;
}
.how-it-work .gb-step .gb-step-1 .gb-step-img .gb-text-step {
	background-color: #ca2c33;
	color: #fff;
	padding: 7px 20px 7px 50px;
	border-radius: 8px;
	position: absolute;
	right: -83px;
	bottom: 30px;
	font-size: 18px;
	font-weight: bold;
	z-index: 9;
}
.how-it-work .gb-step .gb-step-1 .gb-step-des p {
	color: #e41e01;
	font-size: 18px;
}
.how-it-work .gb-step .gb-step-1 {
	margin-bottom: 15px;
}
.how-it-work .gb-price-visa table thead tr th {
	text-align: center;
	text-transform: uppercase;
	background-color: #ed1b24;
	color: #fff;
}
.how-it-work .gb-price-visa table tbody tr td a {
	border: 1px solid black;
	color: #000;
	padding: 10px 25px;
	background-color: #fff;
	transition: .5s ease;
}
.how-it-work .gb-price-visa table tbody tr {
	height: 63px;
}
.how-it-work .gb-price-visa table tbody tr td {
	vertical-align: middle;
}
.how-it-work .gb-price-visa table tbody tr td a:hover {
	color: #fff;
	background-color: #ed1b24;
}
.how-it-work .gb-price-visa .gb-price-visa-title {
	color: #e52a31;
	font-size: 27px;
	text-transform: uppercase;
	margin-bottom: 20px;
	margin-top: 30px;
}
.how-it-work .btn-apply {
	text-align: center;
}
.how-it-work .btn-apply a {
	background-color: #087aac;
	color: #fff;
	text-transform: uppercase;
	font-size: 13px;
	padding: 10px 20px;
	transition: .5s ease;
}
.how-it-work .btn-apply a:hover {
	background-color: #AB2732;
}
</style>
<div class="container how-it-work">
	<div class="gb-img">
		<img src="/images/green/how-it-work-visa.png" alt="" style="width: 100%;">
	</div>

	<div class="gb-list-1">
		<p>Vietnam Visa On Arrival online is one of the best choice & convenience for all applicants would like to visit Vietnam and have no time to visit Embassy.</p>
		<p>e-visavietnam.org launched a visa on arrival system for most travelers, businessmen from India can be easy to obtain a visa to Vietnam within 5 minute to fill out the application form online.</p>
	</div>
	<div class="gb-list-2" style="background-color: #e6f6fc;padding: 20px 0;">
		<ul style="list-style: disc;margin-left: 54px;">
			<li><span>Reasonable prices for (VOA) pre-approval letter for Visa upon arrival.</span></li>
			<li></li>
			<li><span>Hassle-free: 100% online procedures, no documents needed. All Countries Support, Visa On Arrival</span></li>
			<li></li>
			<li><span>Convenience: Applicable for all air-travelers to Vietnam with 24/7 support</span></li>
			<li></li>
			<li><span>Faster: 12 hours processing time or get emergency visa in 10 minutes. Even weekends & holiday</span></li>
			<li></li>
			<li><span>Cheaper: Low prices, no hidden charge.</li>
			<li></li>
			<li><span>More accessible: Best choice for those living far from Vietnamese Embassies.</span></li>
			<li></li>
			<li><span>Safe, Trusted, Reliable & Secure</span></li>
			<li></li>
			<li><span>Refund 100%: for visa decline, No Service fee will be charged. evisavietnam.in only charged for successful applicant.</span></li>
		</ul>
	</div>
	<div class="gb-step">
		<div class="gb-step-1">
			<div class="gb-step-img" style="">
				<img src="/images/green/step1.jpg" alt="" style="">
				<div style="width: 15px;height: 15px;">
				</div>
				<div class="gb-text-step" style="">
					STEP 1
				</div>
			</div>
			<div class="gb-step-des">
				<p style="">Fill out the secure online application form</p>
			</div>
			<div style="clear: both;">
			</div>
		</div>
		<div class="gb-step-1">
			<div class="gb-step-img" style="">
				<img src="/images/green/step2.jpg" alt="" style="">
				<div style="width: 15px;height: 15px;">
				</div>
				<div class="gb-text-step" style="">
					STEP 2
				</div>
			</div>
			<div class="gb-step-des">
				<p style="">Confirm and pay for service fee</p>
			</div>
			<div style="clear: both;">
			</div>
		</div>
		<div class="gb-step-1">
			<div class="gb-step-img" style="">
				<img src="/images/green/step3.jpg" alt="" style="">
				<div style="width: 15px;height: 15px;">
				</div>
				<div class="gb-text-step" style="">
					STEP 3
				</div>
			</div>
			<div class="gb-step-des">
				<p style="">Get approval letter and prepare for getting visa stamped on arrival</p>
			</div>
			<div style="clear: both;">
			</div>
		</div>
		<div class="gb-step-1">
			<div class="gb-step-img" style="">
				<img src="/images/green/step4.jpg" alt="" style="">
				<div style="width: 15px;height: 15px;">
				</div>
				<div class="gb-text-step" style="">
					STEP 4
				</div>
			</div>
			<div class="gb-step-des">
				<p style="">Get your visa stamped upon arrival</p>
			</div>
			<div style="clear: both;">
			</div>
		</div>
	</div>
	<div class="btn-apply">
		<a href="/apply-vietnam-visa" title="">Apply for a visa now</a>
	</div>
	<?php 
	foreach ($purpose_visa as $purpose) { 
		$list_visa = $action->getList('visa_type', 'purpose_visa_id', $purpose['id'], 'id', 'asc', '', '', '');
	?>
	<div class="gb-price-visa">
		<div class="gb-price-visa-title">
			<?= $purpose['name'] ?>
		</div>
		<table class="table table-bordered table-striped">
	    	<thead>
		      <tr>
		        <th style="width: 40%;">VISA TYPE</th>
		        <th style="width: 30%;">PRE-APPROVAL LETTER FEE</th>
		        <th style="width: 30%;"></th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php foreach ($list_visa as $item) { ?>
		      <tr>
		        <td><?= $item['name'] ?></td>
		        <td style="text-align: center;">$<?= $item['price'] ?>.pax</td>
		        <td style="text-align: center;"><a href="/apply-vietnam-visa" title="">Apply</a></td>
		      </tr>
		    <?php } ?>
		    </tbody>
	  	</table>
	</div>
	<?php } ?>
</div>