<?php 
	session_start();
	$count = count($_SESSION['info_order_visa']['price']);
	
	$total = $_SESSION['info_order_visa']['fasttrack'] * $count;
	
	echo $total . " USD";
?>