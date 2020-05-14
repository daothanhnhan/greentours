<?php 
	$country = $action->getList('country', '', '', 'id', 'asc', '', '', '');
	function customize () {
		global $conn_vn;
		global $action;
		if (isset($_POST['custom'])) {
			$product_id = $_POST['product_id'];
			$product_name = $action->getDetail('product', 'product_id', $product_id)['product_name'];
			$first_name = mysqli_real_escape_string($conn_vn, $_POST['first_name']);
			$last_name = mysqli_real_escape_string($conn_vn, $_POST['last_name']);
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$nationality = $_POST['nationality'];
			$tell = mysqli_real_escape_string($conn_vn, $_POST['tell']);
			$days = $_POST['days'];
			$date = $_POST['date'];
			$group = $_POST['group'];
			$group_size = $_POST['group_size'];
			$adults = $_POST['adults'];
			$children = $_POST['children'];
			$infants = $_POST['infants'];

			$sql = "INSERT INTO customize (product_id, product_name, first_name, last_name, email, phone, nationality, tell, days, `date`, `group`, group_size, adults, children, infants) VALUES ($product_id, '$product_name', '$first_name', '$last_name', '$email', '$phone', $nationality, '$tell', $days, '$date', '$group', '$group_size', $adults, $children, $infants)";
			$result = mysqli_query($conn_vn, $sql);
			if ($result) {
				echo '<script type="text/javascript">alert(\'You have successfully registered.\')</script>';
			} else {
				echo '<script type="text/javascript">alert(\'An error occurred.\')</script>';
			}
		}
	}
	customize();
?>
<?php 
	$page_who = $action->getDetail('page', 'page_id', 48);
?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<div class="container">
	<div class="row">
		<!-- <div class="col-md-12">
			<h3>If you would like an Intrepid Real Life experience but prefer to travel with your own private group, our Tailor-Made Experiences can help.</h3>
			<p>For group of all sizes, we can organise a special departure of one of our 1,000+ pre-designed adventure, or tailor-make an Intrepid-style itinerary to one of our destinations around the world. Special interests or requirements? No problem! We can customize the itinerary and activities just for you by giving your trip an educational, physical or even historycal focus!</p>
			<p style="font-size: 50px;">Who should consider Tailor-Made Experience?</p>
		</div>
		<div>
			<div class="col-md-4">
				<img src="/images/green1/Intrepid Travel-thailand_trek.jpg" alt="" style="width: 100%;">
				<p style="font-size: 28px;font-weight: bold;">Schools</p>
				<p>From cultural and language to volunteer or educational immersions, let Intrepid take your students overseas.</p>
			</div>
			<div class="col-md-4">
				
				<img src="/images/green1/Intrepid Travel-canada_family_lake-louise_kids.jpg" alt="" style="width: 100%;">
				<p style="font-size: 28px;font-weight: bold;">Friends and family</p>
				<p>Let Intrepid help you plan your next vacation – whether it’s a tailor-made trip for your family or a special adventure for a group of friends!</p>
			</div>
			<div class="col-md-4">
				
				<img src="/images/green1/Intrepid Travel-Peru_Cusco_Traveller_Local_03.jpg" alt="" style="width: 100%;">
				<p style="font-size: 28px;font-weight: bold;">Universities and colleges</p>
				<p>We can customize trips for student clubs, business schools, study abroad programs, or special departments.</p>
			</div>
		</div> -->
		<div>
			<?= $page_who['page_content'] ?>
		</div>
		<div class="col-md-12">
			<div style="padding: 40px;background-color: #ccc;">
				<form action="" method="post">
				<div style="padding: 15px;background-color: #fff;">
					<div>
							<input type="hidden" name="product_id" value="<?= $_GET['trang'] ?>">
						  	<div class="form-group">
							    <label for="first_name">First Name *</label>
							    <input type="text" class="form-control" id="first_name" name="first_name" required="">
						  	</div>
						  	<div class="form-group">
							    <label for="last_name">Last Name *</label>
							    <input type="text" class="form-control" id="last_name" name="last_name" required="">
						  	</div>
						  	<div class="form-group">
							    <label for="email">E-mail *</label>
							    <input type="email" class="form-control" id="email" name="email" required="">
						  	</div>
						  	<div class="form-group">
							    <label for="phone">Phone Number</label>
							    <input type="text" class="form-control" id="phone" name="phone">
						  	</div>
						  	<div class="form-group">
							  	<label for="nationality">Nationality *</label>
							  	<select class="form-control selectpicker" id="nationality" name="nationality" data-live-search="true" required="">
							  		<?php foreach ($country as $item) { ?>
								    <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
								    <?php } ?>
							  	</select>
							</div>
							<div class="form-group">
							  <label for="tell">Tell us about the trip that you want:</label>
							  <textarea class="form-control" rows="10" id="tell" name="tell"></textarea>
							</div>
							<div class="form-group">
							    <label for="days">Number of Days</label>
							    <input type="number" class="form-control" id="days" name="days">
						  	</div>
						  	<div class="form-group">
							    <label for="date">Departure date *</label>
							    <input type="text" class="form-control datepicker" id="date" name="date" required="">
						  	</div>
						  	<div class="form-group">
							    <label for="group">Type of Group (friends, family, school group, business, social club)</label>
							    <input type="text" class="form-control" id="group" name="group">
						  	</div>
						  	<div class="form-group">
							    <label for="group_size">Group Size</label>
							    <input type="text" class="form-control" id="group_size" name="group_size">
						  	</div>
						  	<div class="row">
						  		<div class="col-md-4">
						  			<div class="form-group">
									  <label for="adults">Number of adults (including yourself)</label>
									  <select class="form-control" id="adults" name="adults">
									  	<?php for ($i=1;$i<=100;$i++) { ?>
									    <option value="<?= $i ?>"><?= $i ?></option>
									    <?php } ?>
									  </select>
									</div>
						  		</div>
						  		<div class="col-md-4">
						  			<div class="form-group">
									  <label for="children">Children (2 - 12 yrs)</label>
									  <select class="form-control" id="children" name="children">
									    <?php for ($i=0;$i<=50;$i++) { ?>
									    <option value="<?= $i ?>"><?= $i ?></option>
									    <?php } ?>
									  </select>
									</div>
						  		</div>
						  		<div class="col-md-4">
						  			<div class="form-group">
									  <label for="infants">Infant (s) (Under 2 yrs)</label>
									  <select class="form-control" id="infants" name="infants">
									    <?php for ($i=0;$i<=50;$i++) { ?>
									    <option value="<?= $i ?>"><?= $i ?></option>
									    <?php } ?>
									  </select>
									</div>
						  		</div>
						  	</div>
						
					</div>
				</div>
				<button type="submit" name="custom" style="padding: 12px;background-color: #00AB99;border: 0;margin-top: 20px;color: #fff;">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
	$('.datepicker').datepicker({
		format: 'yyyy-mm-dd'
	});
</script>