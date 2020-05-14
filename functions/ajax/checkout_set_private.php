<?php 
	session_start();
	$count = count($_SESSION['info_order_visa']['price']);
	if ($_SESSION['info_order_visa']['private'] == 0) {
		$_SESSION['info_order_visa']['private'] = 8;
	} else {
		$_SESSION['info_order_visa']['private'] = 0;
	}
	echo $_SESSION['info_order_visa']['private'] * $count;
?>