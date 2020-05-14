<?php 
	if (!isset($_SESSION['tailor_tour'])) {
		header('location: /');
	}
	$price = $action->getDetail('bang_gia', 'id', $_SESSION['tailor_tour']['people'])['price'];
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
	$date = $date[2] . '-' . $date[1] . '-' . $date[0];
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
?>

<img src="/images/green/success.jpg" alt="" style="width: 100%;">