<?php 
	$id = $_GET['id'];
	$sql = "DELETE FROM order_visa WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header('location: index.php?page=dat-visa');
?>