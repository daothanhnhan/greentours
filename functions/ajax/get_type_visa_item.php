<?php 
	include_once dirname(__FILE__) . "/../database.php";
	$country = $_GET['country'];
	if ($country == 230) {
		$sql = "SELECT * FROM visa_type WHERE purpose_visa_id = 3";
	} else {
		$sql = "SELECT * FROM visa_type WHERE purpose_visa_id = 1";
	}
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	$name = $row['name'];
	$price = $row['price'];

	$sql = "SELECT * FROM country WHERE id = $country";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	$price1 = $row['price'];

	$arr = array(
		'name' => $name,
		'price' => $price,
		'price1' => $price1
	);
	echo json_encode($arr);
?>