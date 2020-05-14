<?php 
	include_once dirname(__FILE__) . "/../database.php";
	session_start();
	$value = $_GET['value'];
	$_SESSION['info_order_visa']['purpose'] = $value;

	function get_price_country ($country) {
		global $conn_vn;
		$sql = "SELECT * FROM country WHERE id = $country";
		$result = mysqli_query($conn_vn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row['price'];
	}

	$sql = "SELECT * FROM visa_type WHERE purpose_visa_id = $value";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	$price = $row['price'];
	$type = $row['id'];
	$_SESSION['info_order_visa']['type'] = $type;

	$total = 0;
	$d = 0;
	foreach ($_SESSION['info_order_visa']['price'] as $key => $item) {
		$price_country = get_price_country($_SESSION['person'][$d]['country']);
		$_SESSION['info_order_visa']['price'][$key] = $price + $price_country;
		$total += $price + $price_country;
		$d++;
	}
	echo $total;
?>