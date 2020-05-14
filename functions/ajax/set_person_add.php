<?php 
	include_once dirname(__FILE__) . "/../database.php";
	session_start();
	$type = $_SESSION['info_order_visa']['type'];
	$country = $_SESSION['info_order_visa']['country'];

	$sql = "SELECT * FROM visa_type WHERE id = '$type'";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	$price1 = $row['price'];

	$sql = "SELECT * FROM country WHERE id = $country";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	$price2 = $row['price'];
	
	// $_SESSION['info_order_visa']['price'][] = $price;
	foreach ($_SESSION['info_order_visa']['price'] as $key => $item) {
		$_SESSION['info_order_visa']['price'][$key] = $price1 + $price2;
	}
	$_SESSION['info_order_visa']['price'][] = $price1 + $price2;
?>