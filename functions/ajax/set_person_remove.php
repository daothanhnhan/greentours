<?php 
	session_start();

	$count = count($_SESSION['info_order_visa']['price']);
	if ($count > 1) {
		array_pop($_SESSION['info_order_visa']['price']);
	}
	
?>