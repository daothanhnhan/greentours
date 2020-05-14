<?php 
	$rowLang = $action_product->getProductTag_url($lang, $_GET['page']);
	$row = $action->getDetail('producttag', 'producttag_id', $rowLang['producttag_id']);//var_dump($row);
	$price = floor($row['producttag_price']/1000);
	$khoi_hanh = $action->getList('khoi_hanh', 'producttag_id', $row['producttag_id'], 'id', 'asc', '', '', '');
?>
<?php 
	function order_combo () {
		global $conn_vn;
		if (isset($_POST['send_combo'])) {
			// var_dump($_POST);
			$date = explode("/", $_POST['date']);
			$date = $date[2] . '-' . $date[1] . '-' . $date[0];
			$quantity = $_POST['quantity'];
			$room = $_POST['room'];
			$adult = $_POST['adult'];
			$children = $_POST['children'];
			$treem = json_encode($_POST['treem']);
			$treem = mysqli_real_escape_string($conn_vn, $treem);
			$depart = $_POST['depart'];
			$name =  mysqli_real_escape_string($conn_vn, $_POST['name']);
			$phone = $_POST['phone'];
			$email = $_POST['email'];

			$combo_id = $_POST['combo_id'];
			$combo_name = $_POST['combo_name'];

			$sql = "INSERT INTO order_combo (`date`, quantity, room, adult, children, treem, depart, name, phone, email, combo_id, combo_name) VALUES ('$date', '$quantity', $room, $adult, $children, '$treem', '$depart', '$name', '$phone', '$email', $combo_id, '$combo_name')";
			// echo $sql;
			$result = mysqli_query($conn_vn, $sql);
			if ($result) {
				echo '<script type="text/javascript">alert(\'Bạn đã đặt Combo tour thành công.\')</script>';
			} else {
				echo '<script type="text/javascript">alert(\'Có lỗi xảy ra.\')</script>';
			}
		}
	}
	order_combo();
?>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
<div class="container combo">
	<?php include DIR_SLIDESHOW . "MS_SLIDESHOW_DENMOC_0001.php"; ?>
	<!-- <div class="row" style="margin-top: 10px;">
		<div class="col-md-2">
			<img src="/images/green/default.jpg" alt="" style="width: 100%;">
			<i class="fa fa-youtube-play icn-youtube" aria-hidden="true"></i>
		</div>
		<div class="col-md-10">
			<div style="margin-top: 50px;">
				Video về <span style="font-weight: bold;"><?= $rowLang['lang_producttag_name'] ?></span>
			</div>
		</div>
	</div> -->
	<div class="row content" style="padding-top: 10px;">
		<div class="col-md-7">
			<p class="title"><?= $row['bao_gom'] ?></p>
			<div>
				<div>
					<?= $rowLang['lang_producttag_content'] ?>
				</div>
			</div>
		</div>
		<div class="col-md-5 siderbar">
			<div class="border">
				<?php 
				foreach ($khoi_hanh as $item) { 
					$giam = json_decode($item['giam']);
				?>
				<div class="item" style="margin-bottom: 20px;">
					<p style="padding-left: 20px;">Depart from <span style="font-weight: bold;"><?= $item['name'] ?></span></p>
					<p class="icon-calendar"><i class="far fa-calendar"></i> <?= date('d/m', strtotime($item['ngay_di'])) ?> → <?= date('d/m', strtotime($item['ngay_den'])) ?> <span style="float: right;color: #f59233;font-weight: bold;"><?= number_format($item['price'],0,',','.') ?><sup style="font-size: 14px;">$</sup></span></p>
					<?php foreach ($giam as $i_giam) { ?>
					<p class="icon-bolt"><i class="fas fa-bolt" style=""></i> <?= $i_giam ?></p>
					<?php } ?>
					<!-- <p style="text-align: right;"><a href="">Xem lịch khởi hành</a></p> -->
				</div>
				<?php } ?>
				
				<p style="text-align: right;font-style: italic;">*Per pax</p>
				<button type="button" class="send" data-toggle="modal" data-target="#myModal">Send us your inquiry</button>
				<p style="text-align: center;">Or contact via our phone number</p>
				<p style="text-align: center;color: #f59233;font-size: 34px;font-weight: bold;"><i class="fa fa-phone" aria-hidden="true"></i> 0084 24 3846 5156</p>
				<!-- <p style="text-align: center;color: #f59233;font-weight: bold;" class="icon-check"><i class="fa fa-check"></i> Nhận đến 55 điểm khi đặt combo</p> -->
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-top: 150px;">
  	<form action="" method="post">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title" style="font-weight: bold;">Booking request</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <div class="form-group">
		    <label for="date">Departure date</label>
		    <input type="text" class="form-control datepicker" id="date" name="date" autocomplete="off" required="">
		    <input type="hidden" name="combo_id" value="<?= $rowLang['producttag_id'] ?>">
		    <input type="hidden" name="combo_name" value="<?= $row['producttag_name'] ?>">
		</div>
		<div class="form-group">
		    <label for="quantity">Number of guest</label>
		    <input type="text" class="form-control" id="quantity" name="quantity" required="" value="2 adults, 0 children" onclick="show_person()">
		</div>
		<div style="position: relative;">
			<div id="person_select" style="position: absolute;border: 4px solid #ccc;left: 10px;right: 10px;background-color: #fff;display: none;padding: 20px;z-index: 9;">
				<div class="row" style="display: flex;vertical-align: middle;align-items: center;">
					<div class="col-md-6" style="min-width: 102px;">
						<span id="room_qty">1</span> Room
						<input type="hidden" id="room" name="room" value="1">
					</div>
					<div class="col-md-6" style="text-align: right;">
						<button type="button" class="btn btn-default btn-number" onclick="room_minus()">
		                  <span class="glyphicon glyphicon-minus"></span>
		                </button>
		                <button type="button" class="btn btn-default btn-number" onclick="room_plus()">
		                  <span class="glyphicon glyphicon-plus"></span>
		                </button>
					</div>
				</div>
				<hr>
				<div class="row" style="display: flex;vertical-align: middle;align-items: center;">
					<div class="col-md-6" style="min-width: 102px;">
						<span id="adult_qty">2</span> Adults
						<input type="hidden" id="adult" name="adult" value="2">
					</div>
					<div class="col-md-6" style="text-align: right;">
						<button type="button" class="btn btn-default btn-number" onclick="adult_minus()">
		                  <span class="glyphicon glyphicon-minus"></span>
		                </button>
		                <button type="button" class="btn btn-default btn-number" onclick="adult_plus()">
		                  <span class="glyphicon glyphicon-plus"></span>
		                </button>
					</div>
				</div>
				<hr>
				<div class="row" style="display: flex;vertical-align: middle;align-items: center;">
					<div class="col-md-6">
						<span id="children_qty">0</span> Children
						<input type="hidden" id="children" name="children" value="0">
					</div>
					<div class="col-md-6" style="text-align: right;">
						<button type="button" class="btn btn-default btn-number" onclick="children_minus()">
		                  <span class="glyphicon glyphicon-minus"></span>
		                </button>
		                <button type="button" class="btn btn-default btn-number" onclick="children_plus()">
		                  <span class="glyphicon glyphicon-plus"></span>
		                </button>
					</div>
				</div>
				<hr>
				<div class="row">
					<label class="col-md-12" id="text_children" style="display: none;">Child age</label>
					<div class="col-md-12" id="tre_em"></div>
				</div>
				<div class="row" style="text-align: center;">
					<span style="background-color: #ccc;padding: 2px 5px;" onclick="show_person()">
						<i class="fa fa-angle-double-up"></i>
					</span>
				</div>
			</div>
		</div>
		<div class="form-group">
		    <label>Depart from</label>
		    <br>
		    <?php 
		    $d = 0;
		    foreach ($khoi_hanh as $item) { 
		    	$d++;
		    ?>
		    <label class="radio-inline"><input type="radio" name="depart" value="<?= $item['name'] ?>" style="margin-top: 1px;" <?= $d==1 ? 'checked' : '' ?> ><?= $item['name'] ?></label>
			<?php } ?>
		</div>
		<div class="form-group">
		    <label for="name">Full name *</label>
		    <input type="text" class="form-control" id="name" name="name"required="">
		</div>
		<div class="form-group">
		    <label for="phone">Phone number</label>
		    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter the phone number for advice immediately">
		</div>
		<div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email to receive quotes">
		</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="send_combo">Send request</button>
      </div>
    </div>
	</form>
  </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
$('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
    startDate: '0d'
});
</script>
<script type="text/javascript">
	var room = 1;
	var adult = 2;
	var children = 0;
	function show_person () {
		var show = document.getElementById("person_select").style.display;
		if (show == 'none') {
			document.getElementById("person_select").style.display = 'block';
		} else {
			document.getElementById("person_select").style.display = 'none';
		}
	}

	function children_plus () {
		children += 1;
		document.getElementById("children").value = children;
		document.getElementById("children_qty").innerHTML = children;

		document.getElementById("text_children").style.display = 'block';
		set_quantity();

		var children_inner = document.getElementById("tre_em").innerHTML;
		var plus = '<select name="treem[]" class="form-control" style="width:100px;display:inline-block;">'
			+'<option value="0">< 1</option>'
			+'<option value="1">1</option>'
			+'<option value="2">2</option>'
			+'<option value="3">3</option>'
			+'<option value="4">4</option>'
			+'<option value="5">5</option>'
			+'<option value="6">6</option>'
			+'<option value="7">7</option>'
			+'<option value="8">8</option>'
			+'<option value="9">9</option>'
			+'<option value="10">10</option>'
			+'<option value="11">11</option>'
		+'</select>';
		document.getElementById("tre_em").innerHTML = children_inner + plus; 
	}

	function children_minus () {
		if (children > 0) {
			children -= 1;
			document.getElementById("children").value = children;
			document.getElementById("children_qty").innerHTML = children;
		}

		if (children == 0) {
			document.getElementById("text_children").style.display = 'none';
		}
		set_quantity();

		$('#tre_em select').last().remove();
	}

	function room_plus () {
		room += 1;
		document.getElementById("room").value = room;
		document.getElementById("room_qty").innerHTML = room;
	}

	function room_minus () {
		if (room > 1) {
			room -= 1;
			document.getElementById("room").value = room;
			document.getElementById("room_qty").innerHTML = room;
		}
	}

	function adult_plus () {
		adult += 1;
		document.getElementById("adult").value = adult;
		document.getElementById("adult_qty").innerHTML = adult;
		set_quantity();
	}

	function adult_minus () {
		if (adult > 1) {
			adult -= 1;
			document.getElementById("adult").value = adult;
			document.getElementById("adult_qty").innerHTML = adult;
			set_quantity();
		}
	}

	function set_quantity () {
		document.getElementById("quantity").value = adult + ' adults, ' + children + ' children';
		// alert('abc');
	}
</script>