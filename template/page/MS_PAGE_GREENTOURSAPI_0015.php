<?php 
	$country = $action->getList('country', '', '', 'id', 'asc', '', '', '');
	$purpose = $action->getList('purpose_visa', '', '', 'id', 'asc', '', '', '');
	$visa = $action->getList('visa_type', 'purpose_visa_id', '1', 'id', 'asc', '', '', '');
	$airport = $action->getList('laos_port_evisa', '', '', 'id', 'asc', '', '', '');
	
	if (empty($_SESSION['info_order_visa'])) {
		header('location: /apply-laos-evisa');
	}
	///////////////
	if ($_SESSION['info_order_visa']['country'] == 230) {
		$country = $action->getList('country', 'id', '230', 'id', 'asc', '', '', '');
	} else {
		foreach ($country as $key => $item) {
			if ($item['id'] == 230) {
				unset($country[$key]);
			}
		}
	}
	//////////////
	$d = 0;
	foreach ($_SESSION['info_order_visa']['price'] as $key => $item) {
		$d++;
		if ($d > 1) {
			unset($_SESSION['info_order_visa']['price'][$key]);
		}
		// var_dump($_SESSION['info_order_visa']['price'][$key]);
	}
	$_SESSION['info_order_visa']['price'][0] = $action->set_price_country($_SESSION['info_order_visa']['country'], $_SESSION['info_order_visa']['type']);
	// var_dump($_SESSION['info_order_visa']);
?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<style type="text/css">
.info-visa-1 {
	font-size: 13px;
}
.left {
	text-align: left !important;
}
.info-visa-1 .show-info-visa-title {
	background-color: #6d9524;
	text-transform: uppercase;
	font-size: 16px;
	color: #fff;
	padding: 20px;
	text-align: left;
	font-weight: bold;
}
.info-visa-1 .show-info-visa .show-info-visa-detail {
	padding: 20px;
	border: 1px solid #6d9524;
}
.info-visa-1 .show-info-visa .show-info-visa-detail .item {
	margin: 25px 0;
}
.info-visa-1 .show-info-visa .show-info-visa-detail .item label {
	width: 136px;
}
.info-visa-1 .show-info-visa .show-info-visa-detail .item span {
	display: inline-block;
	width: calc( 100% - 140px);
}
.info-visa-1 .show-info-visa .show-info-visa-detail .item_total label {
	color: #9e1c34;
	font-size: 19px;
	width: 30%;
}
.info-visa-1 .show-info-visa .show-info-visa-detail .item_total span {
	display: inline-block;
	font-size: 20px;
	color: #9e1c34;
	font-weight: bold;
}
.info-visa-1 .show-info-visa .show-info-visa-detail .item-button {
	text-align: center;
	margin-top: 10px;
}
.info-visa-1 .show-info-visa .show-info-visa-detail .item-button button, .info-visa-1 .item-button button {
	background-color: #6d9524;
	padding: 17px 28px;
	color: #fff;
	font-size: 18px;
	border: 0;
}
/**/
ul.nav.nav-tabs {
	margin-bottom: 10px;
}
ul.nav.nav-tabs li.active a {
	background: #6d9524;
	color: #fff;
}
</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
<div class="container info-visa-1">
	<div>
		<ul class="nav nav-tabs">
		  <li><a href="#">1. VISA OPTIONS</a></li>
		  <li class="active"><a href="#">2. ADD APPLICANT FILL FORM</a></li>
		  <li><a href="#">3. REVIEW & PAYMENT</a></li>
		  <li><a href="#">4. COMPLETE</a></li>
		</ul>
	</div>
	<div class="row">
		<div class="col-md-7">
			<div>
				<p style="font-size: 23px;color: #d93240;text-transform: uppercase;font-weight: bold;">2. Applicant Details</p>
			</div>
			<form class="form-horizontal" action="/check-out-laos-evisa" method="post" enctype="multipart/form-data">
				<div id="info-more">
					<div>
						<div style="border-bottom: 1px solid #0b71db;font-size: 18px;color: #0b71db;margin-bottom: 6px;font-weight: bold;">
							No 1.
						</div>
				    	<div class="form-group">
					      <label class="control-label col-sm-4 left" for="email">Nationality (as in Passport *)</label>
					      <div class="col-sm-8">
					        <select name="country[]" id="country" class="form-control selectpicker" data-live-search="true" onchange="countryf(this, 1)" required="">
					        	<!-- <option value="">Select Nationality</option> -->
								<?php foreach ($country as $item) { ?>
								<option value="<?= $item['id'] ?>" <?= $item['id']==$_SESSION['info_order_visa']['country'] ? 'selected' : '' ?> ><?= $item['name'] ?></option>
								<?php } ?>
					        </select>
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-4 left" for="email">Full name (as in Passport *)</label>
					      <div class="col-sm-8">
					        <input type="text" name="fullname[]" class="form-control" required="">
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-4 left" for="email">Gender (*)</label>
					      <div class="col-sm-8">
					        <select name="gender[]" class="form-control" required>
								<option value="">Select...</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
					        </select>
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-4 left" for="email">Birth date (*)</label>
					      <div class="col-sm-8">
					        <select name="month[]" class="form-control" style="width: 32%;display: inline-block;" required="">
								<option value="" selected="">Month</option>
								<option value="1">Jan</option>
								<option value="2">Feb</option>
								<option value="3">Mar</option>
								<option value="4">Apr</option>
								<option value="5">May</option>
								<option value="6">Jun</option>
								<option value="7">Jul</option>
								<option value="8">Aug</option>
								<option value="9">Sep</option>
								<option value="10">Oct</option>
								<option value="11">Nov</option>
								<option value="12">Dec</option>
					        </select>
					        <select name="day[]" class="form-control" style="width: 32%;display: inline-block;" required="">
								<option value="">Day</option>
								<?php for ($i=1;$i<=31;$i++) { ?>
								<option value="<?= $i ?>"><?= $i ?></option>
								<?php } ?>
					        </select>
					        <select name="year[]" class="form-control" style="width: 32%;display: inline-block;">
								<?php 
								$year = date('Y');
								for ($i=$year;$i>=1901;$i--) { 
								?>
								<option value="<?= $i ?>"><?= $i ?></option>
								<?php } ?>
					        </select>
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-4 left" for="email">Passport number (*)</label>
					      <div class="col-sm-8">
					        <input type="text" name="number[]" class="form-control" required="">
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-4 left" for="email">Passport expiry (*)</label>
					      <div class="col-sm-8">
					        <input type="text" name="date[]" class="form-control datepicker" data-date-format="dd/mm/yyyy" autocomplete="off" required="">
					      </div>
					    </div>
					    <div class="form-group">
							<div class="col-md-4">
								<div id="wrapper">
					                <input id="fileUpload1" type="file" name="photo[]" required="" />
					                <br />
					                <div id="image-holder1">
					                    <img src="/images/green/person.png" alt="">
					                </div>
								</div>
							</div>
							<div class="col-md-8">
								<div id="wrapper">
					                <input id="fileUpload2" type="file" name="passport[]" required="" />
					                <br />
					                <div id="image-holder2">
					                    <img src="/images/green/passport.jpg" alt="">
					                </div>
								</div>
				            </div> 
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-8">
						<button type="button" class="btn btn-primary" onclick="add_applicant()"><em class="glyphicon glyphicon-plus"></em> Add new applicants</button>
						<button type="button" class="btn btn-danger" onclick="remove_applicant()"><em class="glyphicon glyphicon-minus"></em> Remove</button>
					</div>
				</div>
				<div>
					<p style="font-size: 23px;color: #d93240;text-transform: uppercase;font-weight: bold;">3. Contact Infomation</p>
				</div>
				<div class="form-group">
			      <label class="control-label col-sm-4 left" for="email">Primary email (*)</label>
			      <div class="col-sm-8">
			        <input type="email" name="email1" class="form-control" required="">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-4 left" for="email">Alternative email</label>
			      <div class="col-sm-8">
			        <input type="email" name="email2" class="form-control">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-4 left" for="email">Phone number</label>
			      <div class="col-sm-8">
			        <input type="text" name="phone" class="form-control">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-4 left" for="email">Special request</label>
			      <div class="col-sm-8">
			        <textarea class="form-control" rows="5" id="comment" name="request" placeholder="Put your request here if any"></textarea>
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-12 left" for="email">
			      	<input type="checkbox" name="agree" required=""> I Agree To The Terms & Conditions*
			      </label>
			      
			    </div>
			    <div class="form-group">        
			      <div class="col-sm-offset-4 col-sm-8 item-button">
			        <button type="submit" class="btn btn-default" onclick="nextf()">Process to checkout <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
			      </div>
			    </div>
			</form>
		</div>
		<div class="col-md-5">
			<div class="show-info-visa">
				<div class="show-info-visa-title">
					<i class="fa fa-flag" aria-hidden="true"></i> Review Order Details
				</div>
				<div class="show-info-visa-detail">
					<div class="item">
						<label>Purpose of visit:</label>
						<span id="purpose_of_visit"><?= $action->getDetail('purpose_visa', 'id', $_SESSION['info_order_visa']['purpose'])['name'] ?></span>
					</div>
					<div class="item">
						<label>Visa type:</label>
						<span id="visa_type"><?= $action->getDetail('visa_type', 'id', $_SESSION['info_order_visa']['type'])['name'] ?></span>
					</div>
					<div class="item">
						<label>Arrival port:</label>
						<span><?= $action->getDetail('laos_port_evisa', 'id', $_SESSION['info_order_visa']['airport'])['name'] ?></span>
					</div>
					<div class="item">
						<label style="float: left;">Processing time:</label>
						<span id="processing_time">
							<?php 
								if ($_SESSION['info_order_visa']['time'] == 20) {
									echo 'Rush 4-8 Working Hours (Business hour Mon to Fri)';
								} elseif ($_SESSION['info_order_visa']['time'] == 180) {
									echo 'Emergency Processing (Support 24/7)';
								} else {
									echo 'Standard 3 Working days (Business hour Mon to Fri)';
								}
							?>
						</span>
					</div>
					<div class="item">
						<label>Number Person:</label>
						<span id="person">1</span>
					</div>
					<div class="item">
						<label>Visa service fee:</label>
						<span id="service_fee"><?= $_SESSION['info_order_visa']['price'][0] ?>$ x 1 Person = <?= $_SESSION['info_order_visa']['price'][0] ?>$ USD</span>
					</div>
					<div class="item">
						<label>Government Evisa fee:</label>
						<span id="government_fee"><?= $_SESSION['info_order_visa']['government'] ?>$ x 1 Person = <?= $_SESSION['info_order_visa']['government'] ?>$ USD</span>
					</div>
					<div class="item" style="display: <?= $_SESSION['info_order_visa']['private']=='8' ? 'block;' : 'none;' ?>" id="private">
						<label style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">Private/confidential Letter (show me in private letter):</label>
						<span id="private-fee">8 USD</span>
					</div>
					<div class="item" style="display: <?= $_SESSION['info_order_visa']['fasttrack']=='30' ? 'block;' : 'none;' ?>" id="fasttrack1">
						<label style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">Airport Fasttrack - Normal:</label>
						<span id="fasttrack-fee-1">30 USD</span>
					</div>
					<div class="item" style="display: <?= $_SESSION['info_order_visa']['fasttrack']=='45' ? 'block;' : 'none;' ?>" id="fasttrack2">
						<label style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">Airport Fasttrack - VIP:</label>
						<span id="fasttrack-fee-2">45 USD</span>
					</div>
					<hr style="border-bottom: 1px solid #6d9524;">
					<div class="item_total">
						<label>Total fee:</label>
						<?php if ($_SESSION['info_order_visa']['rush'] == 0) { ?>
						<span id="total_fee"><?= number_format($_SESSION['info_order_visa']['price'][0] + $_SESSION['info_order_visa']['private'] + $_SESSION['info_order_visa']['fasttrack'] + $_SESSION['info_order_visa']['time'] + $_SESSION['info_order_visa']['government']) ?> USD</span>
						<?php } else { ?>
							<span id="total_fee"><?= number_format($_SESSION['info_order_visa']['price'][0] + $_SESSION['info_order_visa']['private'] + $_SESSION['info_order_visa']['fasttrack'] + $_SESSION['info_order_visa']['rush']) ?> USD</span>
						<?php } ?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

<script type="text/javascript">
	var service_fee = <?= $visa[0]['price'] ?>;
	function countryf (data, so) {
		// alert(so);
		var national = data.value;
		if (national != 0) {
			var xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			    	var service_fee_val = this.responseText;
			     	document.getElementById("service_fee").innerHTML = service_fee_val + '$ x ' + no + ' Person = ' + service_fee_val + '$ USD';
			     	set_total();
			    }
			  };
			  xhttp.open("GET", "/functions/ajax/step2_set_country_fee.php?country="+national+"&so="+so, true);
			  xhttp.send();

			// var xhttp = new XMLHttpRequest();
			//   xhttp.onreadystatechange = function() {
			//     if (this.readyState == 4 && this.status == 200) {
			//      document.getElementById("type").innerHTML = this.responseText;
			//     }
			//   };
			//   xhttp.open("GET", "/functions/ajax/get_type_visa.php?country="+national, true);
			//   xhttp.send();

			// var xhttp = new XMLHttpRequest();
			//   xhttp.onreadystatechange = function() {
			//     if (this.readyState == 4 && this.status == 200) {
			//      document.getElementById("purpose_of_visit").innerHTML = this.responseText;
			//     }
			//   };
			//   xhttp.open("GET", "/functions/ajax/get_purpose_item.php?country="+national, true);
			//   xhttp.send();

			// var xhttp = new XMLHttpRequest();
			//   xhttp.onreadystatechange = function() {
			//     if (this.readyState == 4 && this.status == 200) {
			//     	var obj = JSON.parse(this.responseText);
			//      	document.getElementById("visa_type").innerHTML = obj.name;
			//      	document.getElementById("service_fee").innerHTML = obj.price+'$ x 1 Person = '+obj.price+'$ USD';
			//      	service_fee = obj.price;
			//      	set_total();
			//     }
			//   };
			//   xhttp.open("GET", "/functions/ajax/get_type_visa_item.php?country="+national, true);
			//   xhttp.send();
		}
	}

</script>

<script type="text/javascript">
	var no = 1;
	var list_country = '';
	get_list_country();
	function add_applicant () {
		no++;
		var so = no - 1;
		var day = '';
		for (var i=1;i<=31;i++) {
			day += '<option value="'+i+'">'+i+'</option>';
		}
		var year = new Date();
  		year = year.getFullYear();
  		var nam = '';
  		for (var i=year;i>=1901;i--) { 
			nam += '<option value="'+i+'">'+i+'</option>';
		}
		var applicant = document.getElementById("info-more").innerHTML;
		
		document.getElementById("info-more").innerHTML = applicant + '<div>'
		+'<div style="border-bottom: 1px solid #0b71db;font-size: 18px;color: #0b71db;margin-bottom: 6px;font-weight: bold;">'
							+'No '+no+'.'
						+'</div>'
			+ '<div class="form-group">'
					      +'<label class="control-label col-sm-4 left" for="email">Nationality (as in Passport *)</label>'
					      +'<div class="col-sm-8">'
					        +'<select name="country[]" id="country" class="form-control selectpicker" data-live-search="true" onchange="countryf(this, '+no+')" required="">'
					        	// +'<option value="">Select Nationality</option>'
								+list_country
					        +'</select>'
					      +'</div>'
					    +'</div>'
			+ '<div class="form-group">'
					      +'<label class="control-label col-sm-4 left" for="email">Full name (as in Passport *)</label>'
					      +'<div class="col-sm-8">'
					        +'<input type="text" name="fullname[]" class="form-control" required="">'
					      +'</div>'
					    +'</div>'
					    +'<div class="form-group">'
					      +'<label class="control-label col-sm-4 left" for="email">Gender (*)</label>'
					      +'<div class="col-sm-8">'
					        +'<select name="gender[]" class="form-control" required>'
								+'<option value="">Select...</option>'
								+'<option value="Male">Male</option>'
								+'<option value="Female">Female</option>'
					        +'</select>'
					      +'</div>'
					    +'</div>'
			+'<div class="form-group">'
					      +'<label class="control-label col-sm-4 left" for="email">Birth date (*)</label>'
					      +'<div class="col-sm-8">'
					        +'<select name="month[]" class="form-control" style="width: 32%;display: inline-block;" required="">'
								+'<option value="" selected="">Month</option>'
								+'<option value="1">Jan</option>'
								+'<option value="2">Feb</option>'
								+'<option value="3">Mar</option>'
								+'<option value="4">Apr</option>'
								+'<option value="5">May</option>'
								+'<option value="6">Jun</option>'
								+'<option value="7">Jul</option>'
								+'<option value="8">Aug</option>'
								+'<option value="9">Sep</option>'
								+'<option value="10">Oct</option>'
								+'<option value="11">Nov</option>'
								+'<option value="12">Dec</option>'
					        +'</select>'
					        +'<select name="day[]" class="form-control" style="width: 32%;display: inline-block;" required="">'
								+'<option value="">Day</option>'
								+day
					        +'</select>'
					        +'<select name="year[]" class="form-control" style="width: 32%;display: inline-block;">'
								+nam
					        +'</select>'
					      +'</div>'
					    +'</div>'
			+'<div class="form-group">'
					      +'<label class="control-label col-sm-4 left" for="email">Passport number (*)</label>'
					      +'<div class="col-sm-8">'
					        +'<input type="text" name="number[]" class="form-control" required="">'
					      +'</div>'
					    +'</div>'
					    +'<div class="form-group">'
					      +'<label class="control-label col-sm-4 left" for="email">Passport expiry (*)</label>'
					      +'<div class="col-sm-8">'
					        +'<input type="text" name="date[]" class="form-control datepicker" data-date-format="dd/mm/yyyy" autocomplete="off" required="">'
					      +'</div>'
					    +'</div>'
					    +'<div class="form-group">'
							+'<div class="col-md-4">'
								+'<div id="wrapper">'
					                +'<input id="fileUpload'+no+'1" type="file" name="photo[]" required="" />'
					                +'<br />'
					                +'<div id="image-holder'+no+'1">'
					                    +'<img src="/images/green/person.png" alt="">'
					                +'</div>'
								+'</div>'
							+'</div>'
							+'<div class="col-md-8">'
								+'<div id="wrapper">'
					                +'<input id="fileUpload'+no+'2" type="file" name="passport[]" required="" />'
					                +'<br />'
					                +'<div id="image-holder'+no+'2">'
					                    +'<img src="/images/green/passport.jpg" alt="">'
					                +'</div>'
								+'</div>'
				            +'</div> '
						+'</div>'
		+'</div>';

		$('.datepicker').datepicker({
		    format: 'dd/mm/yyyy',
		    startDate: '0d'
		});
		$(".bootstrap-select").remove();
		$('.selectpicker').selectpicker();

		document.getElementById("person").innerHTML = no;

		set_person_add();
		reset_img_preview();
	}

	function remove_applicant () {
		if (no > 1) {
			no--;
			document.getElementById("person").innerHTML = no;
			$('#info-more').children().last().remove();

		}
		set_person_remove();
		// reset_img_preview();
	}

	function get_list_country () {
		var country_id = <?= $_SESSION['info_order_visa']['country'] ?>;
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     	list_country = this.responseText;
		    }
		  };
		  xhttp.open("GET", "/functions/ajax/get_list_country.php?id="+country_id, true);
		  xhttp.send();
	}

	function set_person_add () {
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     	// list_country = this.responseText;
		     	set_person_total();
		    }
		  };
		  xhttp.open("GET", "/functions/ajax/set_person_add.php", true);
		  xhttp.send();
	}

	function set_person_remove () {
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     	// list_country = this.responseText;
		     	set_person_total();
		    }
		  };
		  xhttp.open("GET", "/functions/ajax/set_person_remove.php", true);
		  xhttp.send();
	}

	function set_person_total () {
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     	var total = this.responseText;
		     	document.getElementById("service_fee").innerHTML = total + '$ x ' + no + ' Person = ' + total + '$ USD';
		     	set_government(no);
		     	set_total();
		     	set_rush();
		     	set_express_fee();
		     	set_private();
		     	set_fasttrack_1();
		     	set_fasttrack_2();
		    }
		  };
		  xhttp.open("GET", "/functions/ajax/set_person_total.php", true);
		  xhttp.send();
	}

	function set_total () {
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     document.getElementById("total_fee").innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET", "/functions/ajax/step2_set_total_evisa.php", true);
		  xhttp.send();
	}

	function set_rush () {
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     document.getElementById("rush-fee").innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET", "/functions/ajax/step2_set_rush.php", true);
		  xhttp.send();
	}

	function set_express_fee () {
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     document.getElementById("express_fee").innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET", "/functions/ajax/step2_set_express_fee.php", true);
		  xhttp.send();
	}

	function set_private () {
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     document.getElementById("private-fee").innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET", "/functions/ajax/step2_set_private.php", true);
		  xhttp.send();
	}

	function set_fasttrack_1 () {
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     document.getElementById("fasttrack-fee-1").innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET", "/functions/ajax/step2_set_fasttrack.php", true);
		  xhttp.send();
	}

	function set_fasttrack_2 () {
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     document.getElementById("fasttrack-fee-2").innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET", "/functions/ajax/step2_set_fasttrack.php", true);
		  xhttp.send();
	}

	function set_government (so) {
		var gov = <?= $_SESSION['info_order_visa']['government'] ?>;
		var gov_so = parseInt(gov) * parseInt(so);
		document.getElementById("government_fee").innerHTML = gov + '$ x '+ so +' person =' + gov_so + '$ USD';
	}
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<script language="javascript">
$('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
    startDate: '0d'
});
</script>

<!-- <script src="https://rawgit.com/andrewng330/PreviewImage/master/preview.image.min.js"></script> -->
<script type="text/javascript">
	$("#fileUpload1").on('change', function() {
        //Get count of selected files
        var countFiles = $(this)[0].files.length;
        var imgPath = $(this)[0].value;
        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        var image_holder = $("#image-holder1");
        image_holder.empty();
        if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              	for (var i = 0; i < countFiles; i++){
	                var reader = new FileReader();
	                reader.onload = function(e) {
	                  	$("<img />", {
		                    "src": e.target.result,
		                    "class": "thumb-image"
	                  	}).appendTo(image_holder);
	                }
	                image_holder.show();
	                reader.readAsDataURL($(this)[0].files[i]);
	             }
            } else {
              	alert("This browser does not support FileReader.");
            }
        } else {
            alert("Pls select only images");
        }
    });

    $("#fileUpload2").on('change', function() {
        //Get count of selected files
        var countFiles = $(this)[0].files.length;
        var imgPath = $(this)[0].value;
        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        var image_holder = $("#image-holder2");
        image_holder.empty();
        if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              	for (var i = 0; i < countFiles; i++){
	                var reader = new FileReader();
	                reader.onload = function(e) {
	                  	$("<img />", {
		                    "src": e.target.result,
		                    "class": "thumb-image"
	                  	}).appendTo(image_holder);
	                }
	                image_holder.show();
	                reader.readAsDataURL($(this)[0].files[i]);
	             }
            } else {
              	alert("This browser does not support FileReader.");
            }
        } else {
            alert("Pls select only images");
        }
    });

    

    function reset_img_preview () {
    	$("#fileUpload1").on('change', function() {
        //Get count of selected files
	        var countFiles = $(this)[0].files.length;
	        var imgPath = $(this)[0].value;
	        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
	        var image_holder = $("#image-holder1");
	        image_holder.empty();
	        if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
	            if (typeof(FileReader) != "undefined") {
	              //loop for each file selected for uploaded.
	              	for (var i = 0; i < countFiles; i++){
		                var reader = new FileReader();
		                reader.onload = function(e) {
		                  	$("<img />", {
			                    "src": e.target.result,
			                    "class": "thumb-image"
		                  	}).appendTo(image_holder);
		                }
		                image_holder.show();
		                reader.readAsDataURL($(this)[0].files[i]);
		             }
	            } else {
	              	alert("This browser does not support FileReader.");
	            }
	        } else {
	            alert("Pls select only images");
	        }
	    });

	    $("#fileUpload2").on('change', function() {
	        //Get count of selected files
	        var countFiles = $(this)[0].files.length;
	        var imgPath = $(this)[0].value;
	        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
	        var image_holder = $("#image-holder2");
	        image_holder.empty();
	        if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
	            if (typeof(FileReader) != "undefined") {
	              //loop for each file selected for uploaded.
	              	for (var i = 0; i < countFiles; i++){
		                var reader = new FileReader();
		                reader.onload = function(e) {
		                  	$("<img />", {
			                    "src": e.target.result,
			                    "class": "thumb-image"
		                  	}).appendTo(image_holder);
		                }
		                image_holder.show();
		                reader.readAsDataURL($(this)[0].files[i]);
		             }
	            } else {
	              	alert("This browser does not support FileReader.");
	            }
	        } else {
	            alert("Pls select only images");
	        }
	    });

    	<?php for ($i=2;$i<=100;$i++) { ?>

	    $("#fileUpload<?= $i ?>1").on('change', function() {
	        //Get count of selected files
	        var countFiles = $(this)[0].files.length;
	        var imgPath = $(this)[0].value;
	        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
	        var image_holder = $("#image-holder<?= $i ?>1");
	        image_holder.empty();
	        if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
	            if (typeof(FileReader) != "undefined") {
	              //loop for each file selected for uploaded.
	              	for (var i = 0; i < countFiles; i++){
		                var reader = new FileReader();
		                reader.onload = function(e) {
		                  	$("<img />", {
			                    "src": e.target.result,
			                    "class": "thumb-image"
		                  	}).appendTo(image_holder);
		                }
		                image_holder.show();
		                reader.readAsDataURL($(this)[0].files[i]);
		             }
	            } else {
	              	alert("This browser does not support FileReader.");
	            }
	        } else {
	            alert("Pls select only images");
	        }
	    });

	    $("#fileUpload<?= $i ?>2").on('change', function() {
	        //Get count of selected files
	        var countFiles = $(this)[0].files.length;
	        var imgPath = $(this)[0].value;
	        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
	        var image_holder = $("#image-holder<?= $i ?>2");
	        image_holder.empty();
	        if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
	            if (typeof(FileReader) != "undefined") {
	              //loop for each file selected for uploaded.
	              	for (var i = 0; i < countFiles; i++){
		                var reader = new FileReader();
		                reader.onload = function(e) {
		                  	$("<img />", {
			                    "src": e.target.result,
			                    "class": "thumb-image"
		                  	}).appendTo(image_holder);
		                }
		                image_holder.show();
		                reader.readAsDataURL($(this)[0].files[i]);
		             }
	            } else {
	              	alert("This browser does not support FileReader.");
	            }
	        } else {
	            alert("Pls select only images");
	        }
	    });
    	<?php } ?>
    }
</script>