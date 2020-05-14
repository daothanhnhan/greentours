<?php 
	include_once dirname(__FILE__) . "/../database.php";
	$id = $_GET['id'];
	// 1. name purpose, 2. name type visa, 3. price of type visa.
	$sql = "SELECT * FROM purpose_visa WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	$purpose = mysqli_fetch_assoc($result)['name'];

	$sql = "SELECT * FROM visa_type WHERE purpose_visa_id = $id";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	$type_name = $row['name'];
	$type_price = $row['price'];

	$arr = array(
		'purpose' => $purpose,
		'type_name' => $type_name,
		'type_price' => $type_price
	);

	echo json_encode($arr);
?>
