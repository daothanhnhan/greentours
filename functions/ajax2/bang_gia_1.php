<?php
	include_once dirname(__FILE__) . "/../database.php";	

	$num = $_GET['num'];
	$money = $_GET['money'];

	$sql = "UPDATE bao_gia SET price_$num = $money WHERE id = 1";
	// echo $sql;
	$result = mysqli_query($conn_vn, $sql);
?>