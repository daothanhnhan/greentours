<?php 
	include_once dirname(__FILE__) . "/../database.php";
	$id = $_GET['id'];

	$sql = "SELECT * FROM visa_type WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	$name = $row['name'];
	$price = $row['price'];
	$arr = array(
		'name' => $name,
		'price' => $price
	);

	echo json_encode($arr);
?>