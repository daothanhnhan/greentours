<?php 
	session_start();
	$_SESSION['tailor_tour'] = array(
		'product_id' => $_GET['product_id'],
		'people' => $_GET['people'],
		'hotel' => $_GET['hotel'],
		'date' => $_GET['date'],
		'flights' => $_GET['flights'],
		'before' => $_GET['before'],
		'after' => $_GET['after']
	);
?>