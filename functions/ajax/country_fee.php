<?php 
	include_once dirname(__FILE__) . "/../database.php";
	$country_id = $_GET['id'];

	$sql = "SELECT * FROM country WHERE id = $country_id";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	echo $row['price'];
?>