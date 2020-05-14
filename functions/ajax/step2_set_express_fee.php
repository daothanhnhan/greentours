<?php 
	session_start();
	$count = count($_SESSION['info_order_visa']['price']);
	if ($_SESSION['info_order_visa']['rush'] == 180) {
		$total = 0;
	} else {
		$total = $_SESSION['info_order_visa']['time'] * $count;
	}
	echo $total . " USD";
?>