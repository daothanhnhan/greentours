<?php 
	$id = $_GET['id'];
	$sql = "DELETE FROM cam_nhan WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header('location: index.php?page=cam-nhan');
?>