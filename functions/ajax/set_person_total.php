<?php 
	session_start();
	$total = 0;
	foreach ($_SESSION['info_order_visa']['price'] as $item) {
		$total += $item;
	}
	echo $total;
?>