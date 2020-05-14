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
	background: #f4f4f4;
	padding: 10px;
	border-radius: 15px;
}
.input-info-detail {
	margin-bottom: 10px;
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
	width: 116px;
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
				<li><span class="circleBase">3</span> <span class="text-step">Payment</span></li>
			</ul>
		</div>
		<div class="col-md-12">
			<h1 class="title-detail">Your details</h1>
			<p class="text-tailor-des">This form should take you a few minutes to complete. In the meantime, if you have any questions,<br> feel free to chat or call us on: +84 85 241 2222 </p>
		</div>
		<div class="col-md-8 detail-tour">
			
			<form action="" method="post">
			<div id="add-remove-detail">
				<div class="input-info-detail">
					<p class="gb-text-color">Passenger 1 - lead traveller</p>
					<hr style="border-top: 1px solid #b4b5b5;">
					<input type="hidden" name="address_2[]" value="">
					<input type="hidden" name="postcode_zip[]" value="">
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
					    <label class="control-label col-sm-3" for="middlename">Middle name *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="middlename" name="middlename[]" placeholder="Enter middle name" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="lastname">Last name *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="lastname" name="lastname[]" placeholder="Enter last name" required="">
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
					    <label class="control-label col-sm-3" for="address_1">Address *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="address_1" name="address_1[]" placeholder="Enter address" required="">
					    </div>
					  </div>
					  <!-- <div class="form-group">
					    <label class="control-label col-sm-3" for="address_2">Address line 2</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="address_2" name="address_2[]" placeholder="Address line 2">
					    </div>
					  </div> -->
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
					  <!-- <div class="form-group">
					    <label class="control-label col-sm-3" for="postcode_zip">Postcode / Zip *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="postcode_zip" name="postcode_zip[]" placeholder="Postcode / Zip" required="">
					    </div>
					  </div> -->
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="country">Country *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="country" name="country[]" placeholder="Enter country" required="">
					    </div>
					  </div>
					  
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="email">Email *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="email" name="email[]" placeholder="Enter email" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="phone">Telephone *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="phone" name="phone[]" placeholder="Enter telephone number, ex: + 1 234 567 899" required="">
					    </div>
					  </div>
					  <p>* Indicates required field</p>
					</div>
				</div>
				<?php for ($k=1;$k<$_SESSION['tailor_tour']['people'];$k++) { ?>
				<div class="input-info-detail">
					<p class="gb-text-color">Passenger <?= $k+1 ?></p>
					<hr style="border-top: 1px solid #b4b5b5;">
					<input type="hidden" name="address_2[]" value="">
					<input type="hidden" name="postcode_zip[]" value="">
					<input type="hidden" name="address_1[]" value="">
					<input type="hidden" name="suburd_town[]" value="">
					<input type="hidden" name="stare_province[]" value="">
					<input type="hidden" name="country[]" value="">
					<input type="hidden" name="email[]" value="">
					<input type="hidden" name="phone[]" value="">
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
					    <label class="control-label col-sm-3" for="middlename">Middle name *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="middlename" name="middlename[]" placeholder="Enter middle name" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="lastname">Last name *</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="lastname" name="lastname[]" placeholder="Enter last name" required="">
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
			<div style="clear: both;height: 10px;">
				
			</div>
			</form>
		</div>
		<div class="col-md-4 info-tour">
			<div class="text">
				<p><?= $product['product_name'] ?></p>
			</div>
			<div class="tour-date">
				<p class="no-day"><?= $count ?> days <?= $count-1 ?> nights <span class="see" id="myImg" data-toggle="modal" data-target="#myModal">See trip map</span></p>
				<p><img src="/images/green/icon/Start-icon.png" alt="" class="icon"><span>Start: <?= $product['start'] ?></span></p>
				<div class="tour-start">
					<p><?= date('D d M Y', strtotime($date_step2)) ?></p>
				</div>
				<hr style="border-top: 1px solid #b4b5b5;">
				<p><img src="/images/green/icon/Finish-icon.png" alt="" class="icon"><span>Finish: <?= $product['finish'] ?></span></p>
				<div class="tour-finish">
					<p><?= date('D d M Y', strtotime("+$count day", strtotime($date_step2))) ?></p>
				</div>
				<hr style="border-top: 1px solid #b4b5b5;">
				<p><?= $_SESSION['tailor_tour']['people'] ?> passenger(s) x <?= number_format($price) ?> USD</p>
			</div>
			<div class="tour-total">
				<p>Total trip price: </p>
				<p class="usd"><span><?= number_format($price * $_SESSION['tailor_tour']['people']) ?> USD</span></p>
			</div>
			<div class="tour-contact">
				<p class="gb-text-color">Your details will be kept confidentially and used in case we contact you relating to your booking</p>
			</div>

			<div class="tour-end">
				<p class="gb-text-color">Your details are also needed to book services relating to your trip</p>
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