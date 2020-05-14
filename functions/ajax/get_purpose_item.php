<?php 
	include_once dirname(__FILE__) . "/../database.php";
	$country = $_GET['country'];
	if ($country == 230) {
		$sql = "SELECT * FROM purpose_visa WHERE id = 3";
	} else {
		$sql = "SELECT * FROM purpose_visa WHERE id = 1";
	}
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	echo $row['name'];
?>