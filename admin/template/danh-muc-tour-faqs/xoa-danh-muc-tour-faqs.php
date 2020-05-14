<?php 
	$id = $_GET['id'];
	$sql = "SELECT * FROM tourcat_faqs WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	$productcat_id = $row['productcat_id'];

	$sql = "DELETE FROM tourcat_faqs WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header('location: index.php?page=danh-muc-tour-faqs&productcat_id='.$productcat_id);
?>