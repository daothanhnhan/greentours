<?php 
	$id = $_GET['id'];
	$sql = "DELETE FROM apply_job WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header('location: index.php?page=apply-job');
?>