<?php 
	if (isset($_SESSION['info_order_visa'])) {
		unset($_SESSION['info_order_visa']);
		// echo '<script type="text/javascript">alert(\'here\');</script>';
		echo '<script type="text/javascript">location.reload();</script>';
	}
	
	$country = $action->getList('country', '', '', 'id', 'asc', '', '', '');
	$purpose = $action->getList('purpose_visa', '', '', 'id', 'asc', '', '', '');
	$visa = $action->getList('visa_type', 'purpose_visa_id', '1', 'id', 'asc', '', '', '');
	$airport = $action->getList('laos_port_evisa', '', '', 'id', 'asc', '', '', '');
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
<div class="container info-visa-1">
	<div>
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#">1. VISA OPTIONS</a></li>
		  <li><a href="#">2. ADD APPLICANT FILL FORM</a></li>
		  <li><a href="#">3. REVIEW & PAYMENT</a></li>
		  <li><a href="#">4. COMPLETE</a></li>
		</ul>
	</div>
	<div class="row">
		<div class="col-md-7">
			<form class="form-horizontal" action="/action_page.php">
		    	<div class="form-group">
			      <label class="control-label col-sm-4 left" for="email">Nationality (as in Passport *)</label>
			      <div class="col-sm-8">
			        <select name="country" id="country" class="form-control selectpicker" data-live-search="true" onchange="countryf(this)">
			        	<option value="0">Select Nationality</option>
						<?php foreach ($country as $item) { ?>
						<option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
						<?php } ?>
			        </select>
			        <div style="margin-top: 7px;"><span style="color: #3287a9;">Add more people next step.</span></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-4 left" for="email">Purpose of visit (*)</label>
			      <div class="col-sm-8">
			        <select name="purpose" id="purpose" class="form-control" onchange="purposef(this)" disabled="">
						<?php foreach ($purpose as $item) { ?>
						<option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
						<?php } ?>
			        </select>
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-4 left" for="email">Visa type (*)</label>
			      <div class="col-sm-8">
			        <select name="type" id="type" class="form-control" onchange="typef(this)" disabled="">
						<?php foreach ($visa as $item) { ?>
						<option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
						<?php } ?>
			        </select>
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-4 left" for="email">Entry date (*)</label>
			      <div class="col-sm-8">
			        <select name="month1" id="month1" class="form-control" style="width: 32%;display: inline-block;" onchange="check_date()">
						<option value="0" selected="">Month</option>
						<option value="01">Jan</option>
						<option value="02">Feb</option>
						<option value="03">Mar</option>
						<option value="04">Apr</option>
						<option value="05">May</option>
						<option value="06">Jun</option>
						<option value="07">Jul</option>
						<option value="08">Aug</option>
						<option value="09">Sep</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
			        </select>
			        <select name="day1" id="day1" class="form-control" style="width: 32%;display: inline-block;" onchange="check_date()">
						<option value="0">Day</option>
						<?php 
						for ($i=1;$i<=31;$i++) { 
							if ($i < 10) {
								$j = "0" . $i;
							} else {
								$j = $i;
							}
						?>
						<option value="<?= $j ?>"><?= $i ?></option>
						<?php } ?>
			        </select>
			        <select name="year1" id="year1" class="form-control" style="width: 32%;display: inline-block;">
						<?php 
						$year = date('Y');
						for ($i=0;$i<=5;$i++) { 
							$value = $year + $i;
						?>
						<option value="<?= $value ?>"><?= $value ?></option>
						<?php } ?>
			        </select>
			        <div style="margin-top: 7px;"><span style="color: red;">Noted: It’s the date of arrival Laos airport</span></div>
			        <div style="padding: 15px 10px;background: #f2dede;border: 1px solid #ebccd1;border-radius: 3px;line-height: 1.3;font-weight: bold;display: none;" id="visa-danger">
			        	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Your choosen date of arrival is Urgent, the extra fee has been charged
			        </div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-4 left" for="email">Exit date (*)</label>
			      <div class="col-sm-8">
			        <select name="month2" id="month2" class="form-control" style="width: 32%;display: inline-block;">
						<option value="0" selected="">Month</option>
						<option value="01">Jan</option>
						<option value="02">Feb</option>
						<option value="03">Mar</option>
						<option value="04">Apr</option>
						<option value="05">May</option>
						<option value="06">Jun</option>
						<option value="07">Jul</option>
						<option value="08">Aug</option>
						<option value="09">Sep</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
			        </select>
			        <select name="day2" id="day2" class="form-control" style="width: 32%;display: inline-block;">
						<option value="0">Day</option>
						<?php 
						for ($i=1;$i<=31;$i++) { 
							if ($i < 10) {
								$j = "0" . $i;
							} else {
								$j = $i;
							}
						?>
						<option value="<?= $j ?>"><?= $i ?></option>
						<?php } ?>
			        </select>
			        <select name="year2" id="year2" class="form-control" style="width: 32%;display: inline-block;">
						<?php 
						$year = date('Y');
						for ($i=0;$i<=5;$i++) { 
							$value = $year + $i;
						?>
						<option value="<?= $value ?>"><?= $value ?></option>
						<?php } ?>
			        </select>
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-4 left" for="email">Arrival port (*)</label>
			      <div class="col-sm-8">
			        <select name="airport" id="airport" class="form-control">
						<?php foreach ($airport as $item) { ?>
						<option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
						<?php } ?>
			        </select>
			      </div>
			    </div>
			    <hr>
			    
			    <div class="form-group">        
			      <div class="col-sm-offset-4 col-sm-8 item-button">
			        <button type="button" class="btn btn-default" onclick="nextf()">NEXT</button>
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
						<span id="purpose_of_visit">Tourist Visa</span>
					</div>
					<div class="item">
						<label>Visa type:</label>
						<span id="visa_type">1 month single entry</span>
						<p style="color: red;">noted: Allow to exit Laos anytime & any ports during valid visa</p>
					</div>
					<div class="item">
						<label>Arrival port:</label>
						<span><?= $airport[0]['name'] ?></span>
					</div>
					<div class="item">
						<label style="float: left;">Processing time:</label>
						<span id="processing_time">Standard 3 Working days (Business hour Mon to Fri)</span>
					</div>
					<div class="item">
						<label>Visa service fee:</label>
						<span id="service_fee"><?= $visa[0]['price'] ?>$ x 1 Person = <?= $visa[0]['price'] ?>$ USD</span>
					</div>
					<div class="item">
						<label>Government Evisa fee:</label>
						<span>45$ x 1 Person = 45$ USD</span>
					</div>
					<div class="item" style="display: none" id="private">
						<label style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">Private/confidential Letter (show me in private letter):</label>
						<span id="aa">8 USD</span>
					</div>
					<div class="item" style="display: none" id="fasttrack1">
						<label style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">Airport Fasttrack - Normal:</label>
						<span id="aa">30 USD</span>
					</div>
					<div class="item" style="display: none" id="fasttrack2">
						<label style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">Airport Fasttrack - VIP:</label>
						<span id="aa">45 USD</span>
					</div>
					<hr style="border-bottom: 1px solid #6d9524;">
					<div class="item_total">
						<label>Total fee:</label>
						<span id="total_fee"><?= $visa[0]['price'] ?> USD</span>
					</div>
					<div class="item-button">
						<button onclick="nextf()">NEXT</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
	var express_fee = 0;
	var country_fee = 0;
	var government_fee = 45;
	function radio_check (id) {
		for (var i=1;i<=3;i++) {
			if (i == id) {
				document.getElementById("radio-visa-time-"+i).style.display = 'block';
			} else {
				document.getElementById("radio-visa-time-"+i).style.display = 'none';
			}
		}
		if (id == 1) {
			document.getElementById("express_fee").innerHTML = '0 USD';
			document.getElementById("processing_time").innerHTML = 'Standard 2 Working days (Business hour Mon to Fri)';
			express_fee = 0;
		}
		if (id == 2) {
			document.getElementById("express_fee").innerHTML = '20 USD';
			document.getElementById("processing_time").innerHTML = 'Rush 4-8 Working Hours (Business hour Mon to Fri)';
			express_fee = 20;
		}
		if (id == 3) {
			document.getElementById("express_fee").innerHTML = '180 USD';
			document.getElementById("processing_time").innerHTML = 'Emergency Processing (Support 24/7)';
			express_fee = 180;
		}
		if (rush == 180) {
			document.getElementById("express_fee").innerHTML = '0 USD';
		}
		set_total();
	}

	var fasttrack = 0;
	var private_price = 0;
	var fasttrack_price = 0;
	function radio_check_extra (id) {
		for (var i=1;i<=3;i++) {
			if (i == id) {
				document.getElementById("radio-visa-extra-"+i).style.display = 'block';
			} else {
				document.getElementById("radio-visa-extra-"+i).style.display = 'none';
			}
		}
		if (id == 1) {
			var private = document.getElementById("private").style.display;
			if (private == 'none') {
				document.getElementById("private").style.display = 'block';
				private_price = 8;
			} else {
				document.getElementById("private").style.display = 'none';
				private_price = 0;
			}
			set_total();
		} else {
			// alert(fasttrack);
			var radio = id - 1;
			if (fasttrack == 0) {
				if (radio == 1) {
					fasttrack = 1;
				} else {
					fasttrack = 2;
				}
			} else {
				if (fasttrack == radio) {
					fasttrack = 0;
				} else {
					if (radio == 1) {
						fasttrack = 1;
					} else {
						fasttrack = 2;
					}
				}
			}

			if (fasttrack == 0) {
				document.getElementById("fasttrack1").style.display = 'none';
				document.getElementById("fasttrack2").style.display = 'none';
				fasttrack_price = 0;
				set_total();
			}
			if (fasttrack == 1) {
				document.getElementById("fasttrack1").style.display = 'block';
				document.getElementById("fasttrack2").style.display = 'none';
				fasttrack_price = 30;
				set_total();
			}
			if (fasttrack == 2) {
				document.getElementById("fasttrack1").style.display = 'none';
				document.getElementById("fasttrack2").style.display = 'block';
				fasttrack_price = 45;
				set_total();
			}
		}
	}
</script>
<script type="text/javascript">
var grd = function(){
  $("input[class='radio']").click(function() {
    var previousValue = $(this).attr('previousValue');
    var name = $(this).attr('name');

    if (previousValue == 'checked') {
      $(this).removeAttr('checked');
      $(this).attr('previousValue', false);
    } else {
      $("input[name="+name+"]:radio").attr('previousValue', false);
      $(this).attr('previousValue', 'checked');
    }
  });
};

grd('1');
</script>
<script type="text/javascript">
	var service_fee = <?= $visa[0]['price'] ?>;
	function countryf (data) {
		// alert(data.value);
		var national = data.value;
		if (national != 0) {
			// var xhttp = new XMLHttpRequest();
			//   xhttp.onreadystatechange = function() {
			//     if (this.readyState == 4 && this.status == 200) {
			//      document.getElementById("purpose").innerHTML = this.responseText;
			//     }
			//   };
			//   xhttp.open("GET", "/functions/ajax/get_purpose.php?country="+national, true);
			//   xhttp.send();

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

			var xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			    	var obj = JSON.parse(this.responseText);
			     	// document.getElementById("visa_type").innerHTML = obj.name;
			     	var fee_service_country = parseInt(obj.price) + parseInt(obj.price1);
			     	document.getElementById("service_fee").innerHTML = fee_service_country+'$ x 1 Person = '+fee_service_country+'$ USD';
			     	// service_fee = obj.price;
			     	country_fee = obj.price1;
			     	set_total();
			    }
			  };
			  xhttp.open("GET", "/functions/ajax/get_type_visa_item.php?country="+national, true);
			  xhttp.send();

			
		}
	}

	function purposef (data) {
		var country = document.getElementById("country").value;
		if (country == 0) {
			alert('Please Select Nationality');
		} else {
			var id = data.value;
			var xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     	obj = JSON.parse(this.responseText);
			     	// alert(obj.purpose);
			     	document.getElementById("purpose_of_visit").innerHTML = obj.purpose;
			     	document.getElementById("visa_type").innerHTML = obj.type_name;
			     	var fee_service_country = parseInt(country_fee) + parseInt(obj.type_price);
			     	document.getElementById("service_fee").innerHTML = fee_service_country+'$ x 1 Person = '+fee_service_country+'$ USD';
			     	service_fee = obj.type_price;
			     	set_total();
			    }
			  };
			  xhttp.open("GET", "/functions/ajax/purpose_select.php?id="+id, true);
			  xhttp.send();

			var xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("type").innerHTML = this.responseText;
			    }
			  };
			  xhttp.open("GET", "/functions/ajax/get_type_of_purpose.php?id="+id, true);
			  xhttp.send();
		}
	}

	function typef (data) {
		var country = document.getElementById("country").value;
		if (country == 0) {
			alert('Please Select Nationality');
		} else {
			var id = data.value;
			var xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			    	var obj = JSON.parse(this.responseText);
			    	// alert(obj.name);
			     	document.getElementById("visa_type").innerHTML = obj.name;
			     	var fee_service_country = parseInt(country_fee) + parseInt(obj.price);
			     	document.getElementById("service_fee").innerHTML = fee_service_country+'$ x 1 Person = '+fee_service_country+'$ USD';
			     	service_fee = obj.price;
			     	set_total();
			    }
			  };
			  xhttp.open("GET", "/functions/ajax/type_select.php?id="+id, true);
			  xhttp.send();
		}
	}

	function set_total () {
		if (rush == 180) {
			var total = parseInt(service_fee) +  parseInt(fasttrack_price) +  parseInt(private_price) +  parseInt(rush) +  parseInt(country_fee);
		} else {
			var total = parseInt(service_fee) +  parseInt(fasttrack_price) +  parseInt(private_price) +  parseInt(express_fee) +  parseInt(country_fee) + parseInt(government_fee);
		}
		
		// alert(total);
		document.getElementById("total_fee").innerHTML = total + ' USD';
	}
</script>
<script type="text/javascript">
	function nextf () {
		var country = document.getElementById("country").value;
		if (country == 0) {
			alert('Please Select Nationality.');
		} else {
			var purpose = document.getElementById("purpose").value;
			var type = document.getElementById("type").value;

			var month1 = document.getElementById("month1").value;
			var day1 = document.getElementById("day1").value;
			var year1 = document.getElementById("year1").value;
			var month2 = document.getElementById("month2").value;
			var day2 = document.getElementById("day2").value;
			var year2 = document.getElementById("year2").value;

			var airport = document.getElementById("airport").value;
			var time = express_fee;
			var private = private_price;
			var fasttrack = fasttrack_price;
			var price = parseInt(service_fee) + parseInt(country_fee);
			var government = government_fee;

			if (month1 == 0 || day1 == 0) {
				alert('Please check entry date');
				return false;
			}

			if (month2 == 0 || day2 == 0) {
				alert('Please check exit date');
				return false;
			}

			var dt = new Date();
			var dt_m = dt.getMonth() + 1;
			if (dt_m < 10) {
				dt_m = "0" + dt_m;
			}
			var dt_d = dt.getDate();
			if (dt_d < 10) {
				dt_d = "0" + dt_d;
			}
			var now = dt.getFullYear() + "/" + (dt_m) + "/" + dt_d;

			var entry_date = year1 + "/" + month1 + "/" + day1;
			var exit_date = year2 + "/" + month2 + "/" + day2;

			if (entry_date < now) {
				alert('Please check entry date');
				return false;
			}

			if (exit_date <= entry_date) {
				alert('Please check exit date');
				return false;
			}

			if (!isValidDate(entry_date)) {
				alert('Entry date no exist.');
				return false;
			}

			if (!isValidDate(exit_date)) {
				alert('Exit date no exist.');
				return false;
			}

			// alert('time: '+time+', private: '+private+', fasttrack: '+fasttrack+', price: '+price);
			var xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     // document.getElementById("demo").innerHTML = this.responseText;
			     	window.location.href = "/applicant-details-laos-evisa";
			    }
			  };
			  xhttp.open("GET", "/functions/ajax/set_step_1_evisa.php?country="+country+"&purpose="+purpose+"&type="+type+"&entry_date="+entry_date+"&exit_date="+exit_date+"&airport="+airport+"&time="+time+"&private="+private+"&fasttrack="+fasttrack+"&price="+price+"&rush="+rush+"&government="+government, true);
			  xhttp.send();
		}
	}
</script>
<script type="text/javascript">
	function isValidDate(s) {
	  var bits = s.split('/');
	  var d = new Date(bits[0], bits[1] - 1, bits[2]);

	  return d && (d.getMonth() + 1) == bits[1];
	}
</script>
<script type="text/javascript">
	var rush = 0;
	function check_date () {
		var year1 = document.getElementById("year1").value;
		var month1 = document.getElementById("month1").value;
		var day1 = document.getElementById("day1").value;

		if (month1 != 0 && day1 != 0) {
			var entry_date = year1 + "/" + month1 + "/" + day1;
			var date = new Date(entry_date).getTime();
			var now = Date.now();
			var today = get_today();

			if (entry_date >= today) {
				// alert('hơn');
				var range = date - now;
				if (range > 0) {
					range = range/86400000;
					range = Math.ceil(range);
					// alert(range);
				} else {
					// alert(0);
					range = 0;
				}

				if (range == 0 || range == 1 || range == 2) {
					// document.getElementById("visa-danger").style.display = 'block';
				} else {
					// document.getElementById("visa-danger").style.display = 'none';
				}

				// set_time_spec(range);
			}			
		}
	}

	function get_today () {
		var today = new Date(); 

        var dd = today.getDate(); 
        var mm = today.getMonth() + 1; 
  
        var yyyy = today.getFullYear(); 
        if (dd < 10) { 
            dd = '0' + dd; 
        } 
        if (mm < 10) { 
            mm = '0' + mm; 
        } 
        // var today = dd + '/' + mm + '/' + yyyy;
        var today = yyyy + '/' + mm + '/' + dd;
        return today;
	}

	function set_time_spec (danger) {
		if (danger == 0) {
			rush = 180;
			document.getElementById("radio-visa-time-stick-3").checked = true;
			radio_check(3);
			document.getElementById("show-time-1").style.display = 'none';
			document.getElementById("show-time-2").style.display = 'none';
			
			document.getElementById("rush-fee").innerHTML = "180$ x 1 person = 180$ USD";
		} else if (danger == 1) {
			rush = 180;
			document.getElementById("radio-visa-time-stick-2").checked = true;
			radio_check(2);
			document.getElementById("show-time-1").style.display = 'none';
			document.getElementById("show-time-2").style.display = 'block';
			
			document.getElementById("rush-fee").innerHTML = "180$ x 1 person = 180$ USD";
		} else if (danger == 2) {
			rush = 180;
			document.getElementById("radio-visa-time-stick-1").checked = true;
			radio_check(1);
			document.getElementById("show-time-1").style.display = 'block';
			document.getElementById("show-time-2").style.display = 'block';
			
			document.getElementById("rush-fee").innerHTML = "180$ x 1 person = 180$ USD";
		} else {
			rush = 0;
			document.getElementById("radio-visa-time-stick-1").checked = true;
			radio_check(1);
			document.getElementById("show-time-1").style.display = 'block';
			document.getElementById("show-time-2").style.display = 'block';
			
			document.getElementById("rush-fee").innerHTML = "0$ x 1 person = 0$ USD";
		}
		set_total();
	}
</script>