<?php 
	session_start();
	$country = $_GET['country'];
	$purpose = $_GET['purpose'];
	$type = $_GET['type'];
	$entry_date = $_GET['entry_date'];
	$exit_date = $_GET['exit_date'];
	$airport = $_GET['airport'];
	$time = $_GET['time'];
	$private = $_GET['private'];
	$fasttrack = $_GET['fasttrack'];
	$price = array($_GET['price']);
	$rush = $_GET['rush'];
	$government = $_GET['government'];
	$_SESSION['info_order_visa'] = array(
		'country' => $country,
		'purpose' => $purpose,
		'type' => $type,
		'entry_date' => $entry_date,
		'exit_date' => $exit_date,
		'airport' => $airport,
		'time' => $time,
		'private' => $private,
		'fasttrack' => $fasttrack,
		'price' => $price,
		'rush' => $rush,
		'government' => $government
	);
?>