<?php 
	function get_total_price () {
		global $conn_vn;
		$people = $_SESSION['tailor_tour']['people'];
		$hotel = $_SESSION['tailor_tour']['hotel'];
		$product_id = $_SESSION['tailor_tour']['product_id'];

		$sql = "SELECT * FROM bao_gia_item WHERE product_id = $product_id";
		$result = mysqli_query($conn_vn, $sql);
		$row = mysqli_fetch_assoc($result);

		if ($hotel == 3) {
			if ($people == 1) {
				return $row['price_1'];
			} elseif ($people == 2 || $people == 3) {
				return $row['price_2'];
			} elseif ($people == 4 || $people == 5) {
				return $row['price_3'];
			} elseif ($people == 6 || $people == 7) {
				return $row['price_4'];
			} elseif ($people == 8 || $people == 9) {
				return $row['price_5'];
			} elseif ($people == 10 || $people == 11) {
				return $row['price_6'];
			} elseif ($people == 12 || $people == 13 || $people == 14) {
				return $row['price_7'];
			}
		} elseif ($hotel == 4) {
			if ($people == 1) {
				return $row['price_8'];
			} elseif ($people == 2 || $people == 3) {
				return $row['price_9'];
			} elseif ($people == 4 || $people == 5) {
				return $row['price_10'];
			} elseif ($people == 6 || $people == 7) {
				return $row['price_11'];
			} elseif ($people == 8 || $people == 9) {
				return $row['price_12'];
			} elseif ($people == 10 || $people == 11) {
				return $row['price_13'];
			} elseif ($people == 12 || $people == 13 || $people == 14) {
				return $row['price_14'];
			}
		} elseif ($hotel == 5) {
			if ($people == 1) {
				return $row['price_15'];
			} elseif ($people == 2 || $people == 3) {
				return $row['price_16'];
			} elseif ($people == 4 || $people == 5) {
				return $row['price_17'];
			} elseif ($people == 6 || $people == 7) {
				return $row['price_18'];
			} elseif ($people == 8 || $people == 9) {
				return $row['price_19'];
			} elseif ($people == 10 || $people == 11) {
				return $row['price_20'];
			} elseif ($people == 12 || $people == 13 || $people == 14) {
				return $row['price_21'];
			}
		}
	}
?>
<?php 
	if (!isset($_SESSION['tailor_tour'])) {
		header('location: /');
	}
	if (!isset($_SESSION['passengers'])) {
		header('location: /');
	}
?>
<?php 
	$product = $action->getDetail('product', 'product_id', $_SESSION['tailor_tour']['product_id']);
	$itinerary = $action->getList('itinerary', 'product_id', $product['product_id'], 'id', 'asc', '', '', '');
	$count_day = count($itinerary);
	$date_step3 = explode("/", $_SESSION['tailor_tour']['date']);
	$date_step3 = $date_step3[2] . '-' . $date_step3[1] . '-' . $date_step3[0];
?>
<?php 
	// var_dump($_SESSION['tailor_tour']);
	// var_dump($_SESSION['passengers']);
	// $price = $action->getDetail('bang_gia', 'id', $_SESSION['tailor_tour']['people'])['price'];
	$price = get_total_price();
	$count = count($_SESSION['passengers']);
?>
<?php 
	function order () {
		global $conn_vn;
		global $action;
		if (isset($_POST['thanh_toan'])) {
			// $price = $action->getDetail('bang_gia', 'id', $_SESSION['tailor_tour']['people'])['price'];
			$price = get_total_price();
			$count = count($_SESSION['passengers']);
			$total = $price * $count;
			// var_dump($_SESSION['tailor_tour']);
			// var_dump($_SESSION['passengers']);
			$product_id = $_SESSION['tailor_tour']['product_id'];
			$product_name = $action->getDetail('product', 'product_id', $product_id)['product_name'];
			$product_name = mysqli_real_escape_string($conn_vn, $product_name);
			$people = $_SESSION['tailor_tour']['people'];
			$hotel = $_SESSION['tailor_tour']['hotel'];
			$date = explode("/", $_SESSION['tailor_tour']['date']);
			$date = $date[2] . '-' . $date[1] . '-' . $date[0];//die('tuan');
			if ($_SESSION['tailor_tour']['flights'] == 'false') {
				$flights = 0;
			} else {	
				$flights = 1;
			}
			if ($_SESSION['tailor_tour']['before'] == 'false') {
				$before = 0;
			} else {
				$before = 1;
			}
			if ($_SESSION['tailor_tour']['after'] == 'false') {
				$after = 0;
			} else {
				$after = 1;
			}
			$sql = "INSERT INTO book_tour (product_id, product_name, people, hotel, `date`, flights, `before`, `after`, price) VALUES ($product_id, '$product_name', $people, $hotel, '$date', $flights, $before, $after, $total)";//echo $sql;
			$result = mysqli_query($conn_vn, $sql);
			if ($result) {
				$last_id = mysqli_insert_id($conn_vn);
			} else {
				echo '<script type="text/javascript">alert(\'An error occurred.\');window.location.href="/tailor-your-trip/'.$product_id.'"</script>';
				// echo mysqli_error($conn_vn);
			}
			//////////////
			foreach ($_SESSION['passengers'] as $item) {
				$title = $item['title'];
				$gender = $item['gender'];
				$firstname = mysqli_real_escape_string($conn_vn, $item['firstname']);
				$middlename = mysqli_real_escape_string($conn_vn, $item['middlename']);
				$lastname = mysqli_real_escape_string($conn_vn, $item['lastname']);
				$email = $item['email'];
				$birthday = $item['birthday'];
				$phone = mysqli_real_escape_string($conn_vn, $item['phone']);
				$address_1 = mysqli_real_escape_string($conn_vn, $item['address_1']);
				$address_2 = mysqli_real_escape_string($conn_vn, $item['address_2']);
				$suburd_town = mysqli_real_escape_string($conn_vn, $item['suburd_town']);
				$stare_province = mysqli_real_escape_string($conn_vn, $item['stare_province']);
				$postcode_zip = mysqli_real_escape_string($conn_vn, $item['postcode_zip']);
				$country = mysqli_real_escape_string($conn_vn, $item['country']);

				$sql = "INSERT INTO passengers (book_tour_id, title, gender, firstname, middlename, lastname, email, birthday, phone, address_1, address_2, suburd_town, stare_province, postcode_zip, country) VALUES ($last_id, '$title', $gender, '$firstname', '$middlename', '$lastname', '$email', '$birthday', '$phone', '$address_1', '$address_2', '$suburd_town', '$stare_province', '$postcode_zip', '$country')";
				$result = mysqli_query($conn_vn, $sql);
				if ($result) {

				} else {
					echo '<script type="text/javascript">alert(\'An error occurred.\');window.location.href="/your-details"</script>';
					// echo mysqli_error($conn_vn);
				}
			}
			echo '<script type="text/javascript">alert(\'You have successfully booked the tour.\')</script>';
		}
	}
	order();
?>
<?php 
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

// $action_email = new action_email();
	if (isset($_POST['thanh_toan'])) {

		// $name = $_POST['fullname'];
		// $email = $_POST['email'];
		// $amount = $_POST['amount'];
		// $description = $_POST['description'];
		// $appid = $_POST['appid'];
		$product = $_SESSION['passengers'][0]['firstname'] . ' ' . $_SESSION['passengers'][0]['middlename'] . ' ' . $_SESSION['passengers'][0]['lastname'] . '-' . $_SESSION['passengers'][0]['email'] . '-' . $_SESSION['passengers'][0]['phone'];
		// echo $product;

// $action_email->email_send($email, 'Confirmation of successful submission', $noidung);
// echo '<script type="text/javascript">alert(\'Payment Success.\')</script>';
$amount = $price*$count;


$price = (float)$amount;
$shipping = 0.00;

$total = $price + $shipping;

$payer = new Payer();
$payer->setPaymentMethod('paypal');

$item = new Item();
$item->setName($product)
	->setCurrency('USD')
	->setQuantity(1)
	->setPrice($price);

$itemList = new ItemList();
$itemList->setItems([$item]);

$details = new Details();
$details->setShipping($shipping)
	->setSubtotal($price);

$amount = new Amount();
$amount->setCurrency('USD')
	->setTotal($total)
	->setDetails($details);

$transaction = new Transaction();
$transaction->setAmount($amount)
	->setItemList($itemList)
	->setDescription('mo ta o day')
	->setInvoiceNumber(uniqid());

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl(SITE_URL . 'pay.php?success=true')
	->setCancelUrl(SITE_URL . 'pay.php?success=false');

$payment = new Payment();
$payment->setIntent('sale')
	->setPayer($payer)
	->setRedirectUrls($redirectUrls)
	->setTransactions([$transaction]);

try {
	$payment->create($paypal);
} catch (Exception $e) {
	echo '<pre>';
	var_dump($e);
	die();
}

$approvalUrl = $payment->getApprovalLink();
echo $approvalUrl;

header("location: {$approvalUrl}");
	}
?>
<!-- <link rel="stylesheet" type="text/css" href="/css/style-map.css"> -->
<style type="text/css">

.title-detail {
	font-size: 27px;
	color: #000;
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
.detail-tour .input-info-detail {
	background: #ccc;
	padding: 10px;
}
.input-info-detail {
	margin-bottom: 10px;
}
.detail-tour .direct {
	margin-top: 20px;
}
.detail-tour .direct #continue {
	padding: 10px 20px;
	background: #004a80;
	color: #fff;
	float: right;
	border: 0;
	border-radius: 7px;
}
.detail-tour .direct #back {
	padding: 10px 20px;
	background: #004a80;
	color: #fff;
	float: left;
	cursor: pointer;
	border-radius: 7px;
}
.detail-tour .img-pay {
	border-top-left-radius: 15px;
	border-top-right-radius: 15px; 
}
.detail-tour .total-pay {
	border-bottom-left-radius: 15px;
	border-bottom-right-radius: 15px;
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="step-tour">
				<li><span class="circleBase"><i class="fa fa-check" aria-hidden="true"></i></span> <span class="text-step">Tailor your trip</span></li>
				<li class="arrow"> > </li>
				<li><span class="circleBase"><i class="fa fa-check" aria-hidden="true"></i></span> <span class="text-step">Your details</span></li>
				<li class="arrow"> > </li>
				<li><span class="circleBase"><i class="fa fa-check" aria-hidden="true"></i></span> <span class="text-step">Payment</span></li>
			</ul>
		</div>
		<div class="col-md-12">
			<h1 class="title-detail">Payment</h1>
			<p class="text-tailor-des">Please review your booking on the right. If there is something incorrect, you can adjust your details<br> by clicking “Back button”</p>
		</div>
		<div class="col-md-8 detail-tour">
			
			<!-- <form action="" method="post"> -->
			<div class="img-pay" style="background-color: #ccc;padding: 20px;">
				<img src="/images/green/PayPal2.png" alt="" style="width: 100%;">
				<?php //str_replace("\r\n", "<br>", $rowConfig['content_home6']) ?>
			</div>
			<div class="total-pay" style="background-color: #e8e8e8;padding: 40px 20px;">
				<span>Total to pay</span>
				<span style="float: right;"><span style="font-size: 20px;"><?= number_format($price*$count) ?></span> USD</span>
			</div>
			<!-- <p style="margin: 30px 0;">By clicking continue, you will be taken to our secure payment gateway to process your payment.</p> -->
			<div class="direct">
				<a href="/your-details" id="back"><i class="fas fa-angle-left"></i> Back</a>
				<!-- <a href="/payment-success" style="" id="continue">Continue <i class="fas fa-angle-right"></i></a> -->
				<form action="" method="post">
					<button type="submit" id="continue" name="thanh_toan">Book <i class="fas fa-angle-right"></i></button>
				</form>
			</div>
			<div style="clear: both;height: 10px;">
				
			</div>
			<!-- </form> -->
		</div>
		<div class="col-md-4 info-tour">
			<div class="text">
				<p><?= $product['product_name'] ?></p>
			</div>
			<div class="tour-date">
				<p class="no-day"><?= $count_day ?> days <?= $count_day-1 ?> nights <span class="see" id="myImg" data-toggle="modal" data-target="#myModal">See trip map</span></p>
				<p><img src="/images/green/icon/Start-icon.png" alt="" class="icon"><span>Start: <?= $product['start'] ?></span></p>
				<div class="tour-start">
					<p><?= date('D d M Y', strtotime($date_step3)) ?></p>
				</div>
				<hr style="border-top: 1px solid #b4b5b5;">
				<p><img src="/images/green/icon/Finish-icon.png" alt="" class="icon"><span>Finish: <?= $product['finish'] ?></span></p>
				<div class="tour-finish">
					<p><?= date('D d M Y', strtotime("+$count_day day", strtotime($date_step3))) ?></p>
				</div>
				<hr style="border-top: 1px solid #b4b5b5;">
				<?php 
				$d = 0;
				foreach ($_SESSION['passengers'] as $item) { 
					$d++;
				?>
				<p><?= $d ?>. <?= $item['title'] . '. ' . $item['firstname'] . ' ' . $item['middlename'] . ' ' . $item['lastname'] ?> <?= $d==1 ? ' (lead passenger)' : '' ?></p>
				<?php } ?>
				<hr style="border-top: 1px solid #b4b5b5;">
				<p><?= $count ?> passenger(s) x <?= number_format($price) ?> USD</p>
			</div>
			<div class="tour-total">
				<p>Total trip price: </p>
				<p class="usd"><span><?= number_format($price*$count) ?> USD</span></p>
			</div>
			
		</div>
	</div>
</div>
<script type="text/javascript">
	var no = 1;

	function add_detail () {
		no++;
		var day = '';
		for (var i=1;i<=31;i++) {
			day += '<option value="'+i+'">'+i+'</option>';
		}
		var month = '';
		for (var i=1;i<=12;i++) {
			month += '<option value="'+i+'">'+i+'</option>';
		}
		var year = '';
		var d = new Date();
  		var n = d.getFullYear();
  		for (var i=1900;i<=n;i++) {
			year += '<option value="'+i+'">'+i+'</option>';
		}

		var detail = document.getElementById("add-remove-detail").innerHTML;
		document.getElementById("add-remove-detail").innerHTML = detail
				+'<div class="input-info-detail">'
					+'<p>Passenger '+no+' lead traveller</p>'
					+'<hr style="border-top: 1px solid #b4b5b5;">'
					+'<div class="form-horizontal">'
					  +'<div class="form-group">'
					    +'<label class="control-label col-sm-3" for="title">Title *</label>'
					    +'<div class="col-sm-9">'
					      +'<select class="form-control" id="title" name="title[]" required="">'
						    +'<option value="">-- Select --</option>'
						    +'<option value="Mr">Mr</option>'
						    +'<option value="Mrs">Mrs</option>'
						  +'</select>'
					    +'</div>'
					  +'</div>'
					  +'<div class="form-group">'
					    +'<label class="control-label col-sm-3" for="gender">Gender *</label>'
					    +'<div class="col-sm-9" style="line-height: 1.42857143;">'
					      	+'<label class="radio-inline">'
						      +'<input type="radio" name="gender-'+no+'" value="1" required="">Male'
						    +'</label>'
						    +'<label class="radio-inline">'
						      +'<input type="radio" name="gender-'+no+'" value="2">Female'
						    +'</label>'
					    +'</div>'
					  +'</div>'
					  +'<div class="form-group">'
					    +'<label class="control-label col-sm-3" for="firstname">First name *</label>'
					    +'<div class="col-sm-9">'
					      +'<input type="text" class="form-control" id="firstname" name="firstname[]" placeholder="Enter first name" required="">'
					    +'</div>'
					  +'</div>'
					  +'<div class="form-group">'
					    +'<label class="control-label col-sm-3" for="middlename">Middle name</label>'
					    +'<div class="col-sm-9">'
					      +'<input type="text" class="form-control" id="middlename" name="middlename[]" placeholder="Enter middle name">'
					    +'</div>'
					  +'</div>'
					  +'<div class="form-group">'
					    +'<label class="control-label col-sm-3" for="lastname">Last name *</label>'
					    +'<div class="col-sm-9">'
					      +'<input type="text" class="form-control" id="lastname" name="lastname[]" placeholder="Enter last name" required="">'
					    +'</div>'
					  +'</div>'
					  +'<div class="form-group">'
					    +'<label class="control-label col-sm-3" for="email">Email *</label>'
					    +'<div class="col-sm-9">'
					      +'<input type="text" class="form-control" id="email" name="email[]" placeholder="Enter email" required="">'
					    +'</div>'
					  +'</div>'
					  +'<div class="form-group">'
					    +'<label class="control-label col-sm-3" for="pwd">Date of birth *</label>'
					    +'<div class="col-sm-9">'
					      +'<select class="form-control" id="day" name="day[]" style="width: 100px;display: inline-block;" required="">'
						    +'<option value="">DD</option>'
						    						    +day
						    						  +'</select>'
						  +'<select class="form-control" id="month" name="month[]" style="width: 100px;display: inline-block;" required="">'
						    +'<option value="">MM</option>'
						    						    +month
						    						  +'</select>'
						  +'<select class="form-control" id="year" name="year[]" style="width: 100px;display: inline-block;" required="">'
						    +'<option value="">YYYY</option>'
						    						    +year
						    						  +'</select>'
					    +'</div>'
					  +'</div>'
					  +'<div class="form-group">'
					    +'<label class="control-label col-sm-3" for="phone">Contact number *</label>'
					    +'<div class="col-sm-9">'
					      +'<input type="text" class="form-control" id="phone" name="phone[]" placeholder="eg +61 3 9300 1212" required="">'
					    +'</div>'
					  +'</div>'
					  +'<div class="form-group">'
					    +'<label class="control-label col-sm-3" for="address_1">Address line 1 *</label>'
					    +'<div class="col-sm-9">'
					      +'<input type="text" class="form-control" id="address_1" name="address_1[]" placeholder="Address line 1" required="">'
					    +'</div>'
					  +'</div>'
					  +'<div class="form-group">'
					    +'<label class="control-label col-sm-3" for="address_2">Address line 2</label>'
					    +'<div class="col-sm-9">'
					      +'<input type="text" class="form-control" id="address_2" name="address_2[]" placeholder="Address line 2">'
					    +'</div>'
					  +'</div>'
					  +'<div class="form-group">'
					    +'<label class="control-label col-sm-3" for="suburd_town">Suburd / Town *</label>'
					    +'<div class="col-sm-9">'
					      +'<input type="text" class="form-control" id="suburd_town" name="suburd_town[]" placeholder="Suburd / Town" required="">'
					    +'</div>'
					  +'</div>'
					  +'<div class="form-group">'
					    +'<label class="control-label col-sm-3" for="stare_province">State / Province *</label>'
					    +'<div class="col-sm-9">'
					      +'<input type="text" class="form-control" id="stare_province" name="stare_province[]" placeholder="State / Provice" required="">'
					    +'</div>'
					  +'</div>'
					  +'<div class="form-group">'
					    +'<label class="control-label col-sm-3" for="postcode_zip">Postcode / Zip *</label>'
					    +'<div class="col-sm-9">'
					      +'<input type="text" class="form-control" id="postcode_zip" name="postcode_zip[]" placeholder="Postcode / Zip" required="">'
					    +'</div>'
					  +'</div>'
					  +'<div class="form-group">'
					    +'<label class="control-label col-sm-3" for="country">Country *</label>'
					    +'<div class="col-sm-9">'
					      +'<input type="text" class="form-control" id="country" name="country[]" placeholder="Enter country" required="">'
					    +'</div>'
					  +'</div>'
					  +'<p>* Indicates required field</p>'
					+'</div>'
				+'</div>';
	}

	function remove_detail () {
		if (no > 1) {
			no--;
			$('#add-remove-detail').children().last().remove();
		}
	}
</script>
<script>
function goBack() {
  window.history.back();
}
</script>

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