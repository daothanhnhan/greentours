<?php 
	session_start();
	$total = 0;
	$count = count($_SESSION['info_order_visa']['price']);
	foreach ($_SESSION['info_order_visa']['price'] as $item) {
		$total += $item;
	}
	$total += $_SESSION['info_order_visa']['private']*$count;
	$total += $_SESSION['info_order_visa']['fasttrack']*$count;
	if ($_SESSION['info_order_visa']['rush'] == 180) {
		$total += $_SESSION['info_order_visa']['rush']*$count;
	} else {
		$total += $_SESSION['info_order_visa']['time']*$count;
	}
	
	echo $total;
?>