<?php
	include_once dirname(__FILE__) . "/../database.php";	

	$num = $_GET['num'];
	$money = $_GET['money'];
	$product_id = $_GET['product_id'];

	$sql = "UPDATE bao_gia_item SET price_$num = $money WHERE product_id = $product_id";
	// echo $sql;
	$result = mysqli_query($conn_vn, $sql);
?>