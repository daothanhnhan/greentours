<?php 
	session_start();
	$count = count($_SESSION['info_order_visa']['price']);
	if ($_SESSION['info_order_visa']['rush'] == 180) {
		$total = 180 * $count;
	} else {
		$total = 0;
	}
	echo $total . " USD";
?>