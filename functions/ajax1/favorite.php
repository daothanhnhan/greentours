<?php 
	session_start();
	if (!isset($_SESSION['favorite'])) {
		$_SESSION['favorite'] = array();
		$_SESSION['favorite'][] = $_GET['product_id'];
	} else {
		if (!in_array($_GET['product_id'], $_SESSION['favorite'])) {
			$_SESSION['favorite'][] = $_GET['product_id'];
		}
	}

	$count = 0;
	foreach ($_SESSION['favorite'] as $item) {
		$count++;
	}
	echo $count;
?>