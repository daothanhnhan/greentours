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
				return number_format($row['price_1']);
			} elseif ($people == 2 || $people == 3) {
				return number_format($row['price_2']);
			} elseif ($people == 4 || $people == 5) {
				return number_format($row['price_3']);
			} elseif ($people == 6 || $people == 7) {
				return number_format($row['price_4']);
			} elseif ($people == 8 || $people == 9) {
				return number_format($row['price_5']);
			} elseif ($people == 10 || $people == 11) {
				return number_format($row['price_6']);
			} elseif ($people == 12 || $people == 13 || $people == 14) {
				return number_format($row['price_7']);
			}
		} elseif ($hotel == 4) {
			if ($people == 1) {
				return number_format($row['price_8']);
			} elseif ($people == 2 || $people == 3) {
				return number_format($row['price_9']);
			} elseif ($people == 4 || $people == 5) {
				return number_format($row['price_10']);
			} elseif ($people == 6 || $people == 7) {
				return number_format($row['price_11']);
			} elseif ($people == 8 || $people == 9) {
				return number_format($row['price_12']);
			} elseif ($people == 10 || $people == 11) {
				return number_format($row['price_13']);
			} elseif ($people == 12 || $people == 13 || $people == 14) {
				return number_format($row['price_14']);
			}
		} elseif ($hotel == 5) {
			if ($people == 1) {
				return number_format($row['price_15']);
			} elseif ($people == 2 || $people == 3) {
				return number_format($row['price_16']);
			} elseif ($people == 4 || $people == 5) {
				return number_format($row['price_17']);
			} elseif ($people == 6 || $people == 7) {
				return number_format($row['price_18']);
			} elseif ($people == 8 || $people == 9) {
				return number_format($row['price_19']);
			} elseif ($people == 10 || $people == 11) {
				return number_format($row['price_20']);
			} elseif ($people == 12 || $people == 13 || $people == 14) {
				return number_format($row['price_21']);
			}
		}
	}
?>
<?php 
	if (!isset($_SESSION['tailor_tour'])) {
		header('location: /');
	}
?>
<?php 
	$product = $action->getDetail('product', 'product_id', $_SESSION['tailor_tour']['product_id']);
	$itinerary = $action->getList('itinerary', 'product_id', $product['product_id'], 'id', 'asc', '', '', '');
	$count = count($itinerary);
	$date_step2 = explode("/", $_SESSION['tailor_tour']['date']);
	$date_step2 = $date_step2[2] . '-' . $date_step2[1] . '-' . $date_step2[0];
?>
<?php 
	// var_dump($_SESSION['tailor_tour']);
	// $price = $action->getDetail('bang_gia', 'id', $_SESSION['tailor_tour']['people'])['price'];
	$price = get_total_price();
	function passenger () {
		if (isset($_POST['passengers'])) {
			// var_dump($_POST);
			$count = count($_POST['title']);
			$_SESSION['passengers'] = array();
			for ($i=0;$i<$count;$i++) {
				$j = $i + 1;
				$_SESSION['passengers'][] = array(
					'title' => $_POST['title'][$i],
					'gender' => $_POST['gender-'.$j],
					'firstname' => $_POST['firstname'][$i],
					'middlename' => $_POST['middlename'][$i],
					'lastname' => $_POST['lastname'][$i],
					'email' => $_POST['email'][$i],
					'birthday' => $_POST['year'][$i] . '-' . $_POST['month'][$i] . '-' . $_POST['day'][$i],
					'phone' => $_POST['phone'][$i],
					'address_1' => $_POST['address_1'][$i],
					'address_2' => $_POST['address_2'][$i],
					'suburd_town' => $_POST['suburd_town'][$i],
					'stare_province' => $_POST['stare_province'][$i],
					'postcode_zip' => $_POST['postcode_zip'][$i],
					'country' => $_POST['country'][$i]
				);
			}
			// var_dump($_SESSION['passengers']);
			header('location: /payment');
		}
	}
	passenger();
?>
<style type="text/css">
.info-tour .text {
	background: #ccc;
	padding: 10px;
	font-weight: bold;
}
.info-tour .tour-date {
	background: #dedddd;
	padding: 20px;
}
.info-tour .tour-total {
	background: #000;
	color: #fff;
	padding: 10px;
}
.info-tour .tour-total .usd {
	font-weight: bold;
}
.info-tour .tour-total .usd span {
	font-size: 26px;
}
.info-tour .tour-contact {
	margin-top: 50px;
}
.info-tour .tour-contact .tour-contact-phone {
	font-size: 26px;
	font-weight: bold;
}
.info-tour .tour-date .tour-start, .info-tour .tour-date .tour-finish {
	margin-left: 30px;
}
.info-tour .tour-date p span {
	margin-left: 10px;
}
.title-detail {
	font-size: 27px;
	color: red;
}
.circleBase {
    height: 25px;
  width: 25px;
  background-color: #21b59e;
  border-radius: 50%;
  display: inline-block;
  text-align: center;
  line-height: 1.6;
  color: #fff;
}
.step-tour li {
	display: inline-block;
	color: #21b59e;
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
.detail-tour .direct #continue {
	padding: 10px 20px;
	background: #21b59e;
	color: #fff;
	float: right;
	border: 0;
}
.detail-tour .direct #back {
	padding: 10px 20px;
	color: #21b59e;
	float: left;
	cursor: pointer;
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="step-tour">
				<li><span class="circleBase"><i class="fa fa-check" aria-hidden="true"></i></span> Tailor your trip</li>
				<li class="arrow"> > </li>
				<li><span class="circleBase"><i class="fa fa-check" aria-hidden="true"></i></span> Your details</li>
				<li class="arrow"> > </li>
				<li><span class="circleBase">3</span> Payment</li>
			</ul>
		</div>
		<div class="col-md-12">
			<h1 class="title-detail">Your details</h1>
			<hr style="border-top: 1px solid #b4b5b5;">
		</div>
		<div class="col-md-8 detail-tour">
			<p>This form should take around five minutes to complete. After that, the countdown to adventure begins. In the meantime, if you have any questions feel to call us any time on +1-501-285-640</p>
			<form action="" method="post">
			<div id="add-remove-detail">
				<div class="input-info-detail">
					<p>Passenger 1 lead traveller</p>
					<hr style="border-top: 1px solid #b4b5b5;">
					<div class="form-horizontal">
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="title">Title *</label>
					    <div class="col-sm-9">
					      <select class="form-control" id="title" name="title[]" required="">
						    <option value="">-- Select --</option>
						    <option value="Mr">Mr</option>
						    <option value="Miss">Miss</option>
						    <option value="Mrs">Mrs</option>
						  </select>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="gender">Gender *</label>
					    <div class="col-sm-9" style="line-height: 1.42857143;">
					      	<label class="radio-inline">
						      <input type="radio" name="gender-1" value="1" required="">Male
						    </label>
						    <label class="radio-inline">
						      <input type="radio" name="gender-1" value="2">Female
						    </label>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="firstname">First name *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="firstname" name="firstname[]" placeholder="Enter first name" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="middlename">Middle name</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="middlename" name="middlename[]" placeholder="Enter middle name">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="lastname">Last name *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="lastname" name="lastname[]" placeholder="Enter last name" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="email">Email *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="email" name="email[]" placeholder="Enter email" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="pwd">Date of birth *</label>
					    <div class="col-sm-9">
					      <select class="form-control" id="day" name="day[]" style="width: 100px;display: inline-block;" required="">
						    <option value="">DD</option>
						    <?php for ($i=1;$i<=31;$i++) { 
						    	if ($i < 10) {
						    		$i = '0' . $i;
						    	}
						    	?>
						    <option value="<?= $i ?>"><?= $i ?></option>
						    <?php } ?>
						  </select>
						  <select class="form-control" id="month" name="month[]" style="width: 100px;display: inline-block;" required="">
						    <option value="">MM</option>
						    <?php for ($i=1;$i<=12;$i++) { 
						    	if ($i < 10) {
						    		$i = '0' . $i;
						    	}
						    	?>
						    <option value="<?= $i ?>"><?= $i ?></option>
						    <?php } ?>
						  </select>
						  <select class="form-control" id="year" name="year[]" style="width: 100px;display: inline-block;" required="">
						    <option value="">YYYY</option>
						    <?php 
						    $year = date('Y');
						    for ($i=1900;$i<=$year;$i++) { 
						    ?>
						    <option value="<?= $i ?>"><?= $i ?></option>
						    <?php } ?>
						  </select>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="phone">Contact number *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="phone" name="phone[]" placeholder="eg +61 3 9300 1212" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="address_1">Address line 1 *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="address_1" name="address_1[]" placeholder="Address line 1" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="address_2">Address line 2</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="address_2" name="address_2[]" placeholder="Address line 2">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="suburd_town">Suburb / Town *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="suburd_town" name="suburd_town[]" placeholder="Suburb / Town" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="stare_province">State / Province *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="stare_province" name="stare_province[]" placeholder="State / Province" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="postcode_zip">Postcode / Zip *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="postcode_zip" name="postcode_zip[]" placeholder="Postcode / Zip" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="country">Country *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="country" name="country[]" placeholder="Enter country" required="">
					    </div>
					  </div>
					  <p>* Indicates required field</p>
					</div>
				</div>
				<?php for ($k=1;$k<$_SESSION['tailor_tour']['people'];$k++) { ?>
				<div class="input-info-detail">
					<p>Passenger <?= $k+1 ?></p>
					<hr style="border-top: 1px solid #b4b5b5;">
					<div class="form-horizontal">
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="title">Title *</label>
					    <div class="col-sm-9">
					      <select class="form-control" id="title" name="title[]" required="">
						    <option value="">-- Select --</option>
						    <option value="Mr">Mr</option>
						    <option value="Miss">Miss</option>
						    <option value="Mrs">Mrs</option>
						  </select>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="gender">Gender *</label>
					    <div class="col-sm-9" style="line-height: 1.42857143;">
					      	<label class="radio-inline">
						      <input type="radio" name="gender-1" value="1" required="">Male
						    </label>
						    <label class="radio-inline">
						      <input type="radio" name="gender-1" value="2">Female
						    </label>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="firstname">First name *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="firstname" name="firstname[]" placeholder="Enter first name" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="middlename">Middle name</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="middlename" name="middlename[]" placeholder="Enter middle name">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="lastname">Last name *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="lastname" name="lastname[]" placeholder="Enter last name" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="email">Email *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="email" name="email[]" placeholder="Enter email" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="pwd">Date of birth *</label>
					    <div class="col-sm-9">
					      <select class="form-control" id="day" name="day[]" style="width: 100px;display: inline-block;" required="">
						    <option value="">DD</option>
						    <?php for ($i=1;$i<=31;$i++) { 
						    	if ($i < 10) {
						    		$i = '0' . $i;
						    	}
						    	?>
						    <option value="<?= $i ?>"><?= $i ?></option>
						    <?php } ?>
						  </select>
						  <select class="form-control" id="month" name="month[]" style="width: 100px;display: inline-block;" required="">
						    <option value="">MM</option>
						    <?php for ($i=1;$i<=12;$i++) { 
						    	if ($i < 10) {
						    		$i = '0' . $i;
						    	}
						    	?>
						    <option value="<?= $i ?>"><?= $i ?></option>
						    <?php } ?>
						  </select>
						  <select class="form-control" id="year" name="year[]" style="width: 100px;display: inline-block;" required="">
						    <option value="">YYYY</option>
						    <?php 
						    $year = date('Y');
						    for ($i=1900;$i<=$year;$i++) { 
						    ?>
						    <option value="<?= $i ?>"><?= $i ?></option>
						    <?php } ?>
						  </select>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="phone">Contact number *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="phone" name="phone[]" placeholder="eg +61 3 9300 1212" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="address_1">Address line 1 *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="address_1" name="address_1[]" placeholder="Address line 1" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="address_2">Address line 2</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="address_2" name="address_2[]" placeholder="Address line 2">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="suburd_town">Suburb / Town *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="suburd_town" name="suburd_town[]" placeholder="Suburb / Town" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="stare_province">State / Province *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="stare_province" name="stare_province[]" placeholder="State / Province" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="postcode_zip">Postcode / Zip *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="postcode_zip" name="postcode_zip[]" placeholder="Postcode / Zip" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="country">Country *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="country" name="country[]" placeholder="Enter country" required="">
					    </div>
					  </div>
					  <p>* Indicates required field</p>
					</div>
				</div>
				<?php } ?>
			</div>
			
			<!-- <div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="button" class="btn btn-primary" onclick="add_detail()"><em class="glyphicon glyphicon-plus"></em> Add new passenger</button>
					<button type="button" class="btn btn-danger" onclick="remove_detail()"><em class="glyphicon glyphicon-minus"></em> Remove</button>
				</div>
			</div> -->
			<!-- <button type="submit">Submit</button> -->
			<div class="direct">
				<a href="/tailor-your-trip/<?= $_SESSION['tailor_tour']['product_id'] ?>" id="back"><i class="fas fa-angle-left"></i> Back</a>
				<button type="submit" name="passengers" style="" id="continue">Continue <i class="fas fa-angle-right"></i></button>
			</div>
			<div style="clear: both;">
				
			</div>
			</form>
		</div>
		<div class="col-md-4 info-tour">
			<div class="text">
				<p>Explore Vietnam (TVRR)</p>
			</div>
			<div class="tour-date">
				<p>Days: <?= $count ?></p>
				<hr style="border-top: 1px solid #b4b5b5;">
				<p><i class="fa fa-star" aria-hidden="true"></i> <span>Start</span></p>
				<hr style="border-top: 1px solid #b4b5b5;">
				<div class="tour-start">
					<p><?= $product['start'] ?></p>
					<p><?= date('D d M Y', strtotime($date_step2)) ?></p>
				</div>
				<hr style="border-top: 1px solid #b4b5b5;">
				<p><i class="fa fa-star" aria-hidden="true"></i> <span>Finish</span></p>
				<hr style="border-top: 1px solid #b4b5b5;">
				<div class="tour-finish">
					<p><?= $product['finish'] ?></p>
					<p><?= date('D d M Y', strtotime("+$count day", strtotime($date_step2))) ?></p>
				</div>
			</div>
			<div class="tour-total">
				<p>Total trip price: </p>
				<p class="usd">USD <span>$<?= $price ?></span> / Person</p>
			</div>
			<div class="tour-contact">
				<p>Have a question or need some help with your booking</p>
				<p class="tour-contact-phone"><i class="fa fa-phone" aria-hidden="true"></i> +84 24 38 465 156</p>
			</div>
			<hr style="border-top: 1px solid #dfe0e0;">
			<div class="tour-end">
				<p>Your contact details are collected in case we need to contact you about your booking. We will not pass personal details onto any third party.</p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var no = 1;
	var people = <?= $_SESSION['tailor_tour']['people'] ?>;

	function add_detail () {
		if (no < people) {
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
							    +'<option value="Miss">Miss</option>'
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
						    +'<label class="control-label col-sm-3" for="suburd_town">Suburb / Town *</label>'
						    +'<div class="col-sm-9">'
						      +'<input type="text" class="form-control" id="suburd_town" name="suburd_town[]" placeholder="Suburb / Town" required="">'
						    +'</div>'
						  +'</div>'
						  +'<div class="form-group">'
						    +'<label class="control-label col-sm-3" for="stare_province">State / Province *</label>'
						    +'<div class="col-sm-9">'
						      +'<input type="text" class="form-control" id="stare_province" name="stare_province[]" placeholder="State / Province" required="">'
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