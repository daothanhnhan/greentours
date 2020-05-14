<?php 
	$product = $action->getDetail('product', 'product_id', $_GET['trang']);
	$bang_gia = $action->getDetail('bao_gia_item', 'product_id', $product['product_id']);
	$itinerary = $action->getList('itinerary', 'product_id', $product['product_id'], 'id', 'asc', '', '', '');
	$count = count($itinerary);
	$ngay_del = json_decode($product['product_size']);
	$list_ngay_del = "";
	foreach ($ngay_del as $item) {
		$ngay_item = explode("-", $item);
		$ngay_item = $ngay_item[2] . '/' . $ngay_item[1] . '/' . $ngay_item[0];
		$list_ngay_del .= '"'.$ngay_item.'",';
	}
	// echo $list_ngay_del;
?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
<!-- <link rel="stylesheet" type="text/css" href="/css/style-map.css"> -->
<style type="text/css">
.tailor .tailor-how select, .tailor .tailor-what select {
	width: 112px;
	padding: 3px;
	float: right;
	border-radius: 5px;
	border-color: #004a80;
}
.tailor .tailor-how span {
	font-size: 20px;
	/*color: #ccc;*/
	font-weight: bold;
}
.tailor .tailor-what span, .tailor .tailor-date span {
	font-weight: bold;
	font-size: 20px;
}
.tailor > p {
	margin-bottom: 10px;
}
.tailor .tailor-how, .tailor .tailor-what {
	margin-bottom: 23px;
}
.tailor .tailor-date {
	/*margin-bottom: 246px;*/
}
.tailor .tailor-select {
	font-size: 20px;
	font-weight: bold;
	margin-bottom: 10px;
}
.tailor .box-tailor {
	background: #f4f4f4;
	padding: 4px;
	margin-bottom: 16px;
	border: 1px solid #004a80;
    border-radius: 10px;
}
.tailor .box-tailor input {
	float: right;
	margin-top: 10px;
	margin-right: 10px;
	width: 20px;
	height: 20px;
}
.title-tailor {
	font-size: 27px;
	/*color: red;*/
	text-align: center;
}


.circleBase {
    height: 25px;
  width: 25px;
  background-color: #004a80;
  border-radius: 50%;
  display: inline-block;
  text-align: center;
  line-height: 1.6;
  color: #fff;
}
.step-tour li {
	display: inline-block;
	color: #004a80;
	margin: 20px 0;
}
.step-tour li.arrow {
	padding-left: 30px;
	padding-right: 30px;
}
.tailor .direct #continue {
	padding: 10px 20px;
	background: #004a80;
	color: #fff;
	float: right;
	cursor: pointer;
	border-radius: 7px;
}
.tailor .direct #back {
	padding: 10px 20px;
	background: #004a80;
	color: #fff;
	float: left;
	cursor: pointer;
	border-radius: 7px;
	width: 116px;
}

.tailor .box-tailor .icon {
	height: 38px;
	width: 58px;
}
.tailor .box-tailor span {
	position: relative;
	top: -13px;
	left: 4px;
}

.info-date {
	font-size: 16px !important;
}
/*khác*/
.datepicker table tr td.disabled, .datepicker table tr td.disabled:hover {
	background-color: #fdf2bf;
}
.datepicker.datepicker-inline {
	border: 1px solid black;
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="step-tour">
				<li><span class="circleBase"><i class="fa fa-check" aria-hidden="true"></i></span> <span class="text-step">Tailor your trip</span></li>
				<li class="arrow"> > </li>
				<li><span class="circleBase">2</span> <span class="text-step">Your details</span></li>
				<li class="arrow"> > </li>
				<li><span class="circleBase">3</span> <span class="text-step">Payment</span></li>
			</ul>
		</div>
		<div class="col-md-12">
			<h1 class="title-tailor">Tailor your trip</h1>
			<!-- <hr style="border-top: 1px solid #b4b5b5;"> -->
			<p class="text-tailor-des">This form should take you a few minutes to complete. In the meantime, if you have any questions, <br> feel free to chat or call us on: +84 85 241 2222</p>
		</div>
		<div class="col-md-8 tailor">
			
			<div class="tailor-how">
				<input type="hidden" name="product_id" id="product_id" value="<?= $_GET['trang'] ?>">
				<span>How many people are you booking for?</span>
				<select name="people" style="" id="people" onchange="set_price_1(<?= $product['product_id'] ?>)">
					<?php for ($i=1;$i<=14;$i++) { ?>
					<option value="<?= $i ?>"><?= $i ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="tailor-what">
				<span>Which hotel standard would you like to book?</span>
				<select name="hotel" style="" id="hotel" onchange="set_price_1(<?= $product['product_id'] ?>)">
					<?php for ($i=3;$i<=5;$i++) { ?>
					<option value="<?= $i ?>"><?= $i ?></option>
					<?php } ?>
				</select>
				
			</div>
			<div class="tailor-date">
				<span>Start date?</span>
				<!-- <input type="text" name="" class="datepicker" id="select_date" data-date-format="dd/mm/yyyy" autocomplete="off"> -->
				<div id="datepicker" style="margin-left: 50px;"></div>
				<input type="hidden" id="my_hidden_input">
				<div style="margin: 10px 0;">
					<div style="background-color: #04c;height: 15px;width: 20px;border: 1px solid black;display: inline-block;"></div> <span class="info-date">Select day</span> - <div style="background-color: #fdf2bf;height: 15px;width: 20px;border: 1px solid black;display: inline-block;"></div> <span class="info-date">Not Available</span>
				</div>
			</div>
			<div class="tailor-select">
				<span>Select the extras you'd like us to arrange...</span>
			</div>
			<div class="box-tailor">
				<img src="/images/green/icon/Flights-icon.png" alt="" class="icon">
				<span> Flights to the destination and back home.</span>
				<input type="checkbox" name="flights" id="flights">
			</div>
			<div class="box-tailor">
				<img src="/images/green/icon/Accomodations-icon.png" alt="" class="icon">
				<span> Accommodation before your trip.</span>
				<input type="checkbox" name="before" id="before">
			</div>
			<div class="box-tailor">
				<img src="/images/green/icon/Accomodations-icon.png" alt="" class="icon">
				<span> Accommodation after your trip.</span>
				<input type="checkbox" name="after" id="after">
			</div>
			<div class="tailor-end">
				<p>Prices for selected extras will be listed in your confirmation invoice.</p>
			</div>
			<div class="direct">
				<a onclick="goBack()" id="back"><i class="fas fa-angle-left"></i> Back</a>
				<a title="" style="" id="continue" onclick="next()">Continue <i class="fas fa-angle-right"></i></a>
			</div>
			<div style="clear: both;height: 10px;">
				
			</div>
		</div>
		<div class="col-md-4 info-tour">
			<div class="text">
				<p><?= $product['product_name'] ?></p>
			</div>
			<div class="tour-date">
				<p class="no-day"><?= $count ?> days <?= $count-1 ?> nights <span class="see" id="myImg" data-toggle="modal" data-target="#myModal">See trip map</span></p>
				<p><img src="/images/green/icon/Start-icon.png" alt="" class="icon"><span>Start: <?= $product['start'] ?></span></p>
				<div class="tour-start">
					<p id="time-start"><?= date('D d M Y', strtotime('now')) ?></p>
				</div>
				<hr style="border-top: 1px solid #b4b5b5;">
				<p><img src="/images/green/icon/Finish-icon.png" alt="" class="icon"><span>Finish: <?= $product['finish'] ?></span></p>
				<div class="tour-finish">
					<p id="time-finish"><?= date('D d M Y', strtotime("+$count day", strtotime('now'))) ?></p>
				</div>
			</div>
			<div class="tour-total">
				<p class="text-trip-price">Trip price: </p>
				<p class="usd"><span id="price"><?= number_format($bang_gia['price_1']) ?></span> USD / Person</p>
			</div>
			
		</div>
	</div>
</div>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script language="javascript">
// $('.datepicker').datepicker({
//     format: 'dd/mm/yyyy',
//     startDate: '0d',
//     datesDisabled: ["11/10/2019"]
// });
// }).focus();

// $(document).ready(function () {
//     $input = $("#select_date");
//     $input.datepicker({
//         format: 'dd/mm/yyyy',
//         startDate: '0d',
//         datesDisabled: ['12/10/2019', '14/10/2019']
//     });
//     $input.data('datepicker').hide = function () {};
//     $input.datepicker('show');
// });

$('#datepicker').datepicker({
    format: 'dd/mm/yyyy',
    startDate: '0d',
    datesDisabled: [<?= $list_ngay_del ?>]
});
$('#datepicker').on('changeDate', function() {
    $('#my_hidden_input').val(
        $('#datepicker').datepicker('getFormattedDate')
    );
    // alert($('#datepicker').datepicker('getFormattedDate'));
    set_date($('#datepicker').datepicker('getFormattedDate'), <?= $count ?>);
});
</script>
<script>
function goBack() {
  window.history.back();
}
</script>
<script type="text/javascript">
	function next () {
		var product_id = document.getElementById("product_id").value;
		var people = document.getElementById("people").value;
		var hotel = document.getElementById("hotel").value;
		var date = document.getElementById("my_hidden_input").value;
		var flights = document.getElementById("flights").checked;
		var before = document.getElementById("before").checked;
		var after = document.getElementById("after").checked;
		
		if (date == '') {
			alert("Please Select date");
			return false;
		}

		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     // document.getElementById("demo").innerHTML = this.responseText;
		     	window.location.href = "/your-details";
		    }
		  };
		  xhttp.open("GET", "/functions/ajax1/next1_tour.php?product_id="+product_id+"&people="+people+"&hotel="+hotel+"&date="+date+"&flights="+flights+"&before="+before+"&after="+after, true);
		  xhttp.send();
	}

	function set_price (data) {
		var people = data.value;
		if (people == 1) {
			document.getElementById("price").innerHTML = '$1.350';
		}
		if (people == 2 || people == 3) {
			document.getElementById("price").innerHTML = '$1.250';
		}
		if (people == 4 || people == 5) {
			document.getElementById("price").innerHTML = '$1.150';
		}
		if (people == 6 || people == 7) {
			document.getElementById("price").innerHTML = '$1.050';
		}
		if (people == 8 || people == 9) {
			document.getElementById("price").innerHTML = '$950';
		}
		if (people == 10 || people == 11) {
			document.getElementById("price").innerHTML = '$850';
		}
		if (people == 12 || people == 13 || people == 14) {
			document.getElementById("price").innerHTML = '$750';
		}
	}

	function set_price_1 (product_id) {
		var people = document.getElementById("people").value;
		var hotel = document.getElementById("hotel").value;
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     	document.getElementById("price").innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET", "/functions/ajax1/set_price_1.php?people="+people+"&hotel="+hotel+"&product_id="+product_id, true);
		  xhttp.send();
	}

	function set_date (date, count) {
		// alert(date + count);
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		    	var obj = JSON.parse(this.responseText);
		    	// alert(obj.time1);
		     	document.getElementById("time-start").innerHTML = obj.time1;
		     	document.getElementById("time-finish").innerHTML = obj.time2;
		    }
		  };
		  xhttp.open("GET", "/functions/ajax1/time.php?date="+date+"&count="+count, true);
		  xhttp.send();
	}
</script>
<?php if (false) { ?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img src="/images/<?= $product['map_img'] ?>" class="modal-content" id="img01">
  <div id="caption">Map</div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  // modalImg.src = this.src;
  // captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
<?php } ?>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title"><?= $product['product_name'] ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <img src="/images/<?= $product['map_img'] ?>">
      </div>
      
    </div>

  </div>
</div>