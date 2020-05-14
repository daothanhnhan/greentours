<?php 
	$id = $_GET['id'];
	$sql = "DELETE FROM book_tour WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header('location: index.php?page=book-tour');
?>