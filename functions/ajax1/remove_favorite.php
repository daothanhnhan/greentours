<?php 
	session_start();
	foreach ($_SESSION['favorite'] as $key => $item) {
		if ($item == $_GET['product_id']) {
			unset($_SESSION['favorite'][$key]);
		}
	}
?>