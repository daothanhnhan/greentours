<?php 
	$id = $_GET['id'];
	$sql = "SELECT * FROM holiday_cat WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	$productcat_id = $row['productcat_id'];

	$sql = "DELETE FROM holiday_cat WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header('location: index.php?page=holiday-cat&productcat_id='.$productcat_id);
?>