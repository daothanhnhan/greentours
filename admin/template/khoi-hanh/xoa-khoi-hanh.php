<?php 
	$id = $_GET['id'];
	$sql = "SELECT * FROM khoi_hanh WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	$producttag_id = $row['producttag_id'];

	$sql = "DELETE FROM khoi_hanh WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header('location: index.php?page=khoi-hanh&producttag_id='.$producttag_id);
?>