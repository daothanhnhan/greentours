<?php 
	session_start();
	include_once dirname(__FILE__) . "/../database.php";

	$country = $_GET['country'];
	$d = $_GET['so'];
	$type = $_SESSION['info_order_visa']['type'];

	$sql = "SELECT * FROM visa_type WHERE id = $type";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	$price_type = $row['price'];

	$sql = "SELECT * FROM country WHERE id = $country";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	$price_country = $row['price'];

	$i = 0;
	foreach ($_SESSION['info_order_visa']['price'] as $key => $item) {
		$i++;
		if ($i == $d) {
			$_SESSION['info_order_visa']['price'][$key] = $price_type + $price_country;
		}
	}

	$total = 0;
	foreach ($_SESSION['info_order_visa']['price'] as $item) {
		$total += $item;
	}
	echo $total;
?>