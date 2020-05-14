<?php 
	$date = $_GET['date'];
	$count = $_GET['count'];
	$date = explode("/", $date);
	$date = $date[2] . '-' . $date[1] . '-' . $date[0];
	$time1 = date("D d M Y", strtotime($date));
	$time2 = date("D d M Y", strtotime("+$count day", strtotime($date)));
	$arr = array(
		'time1' => $time1,
		'time2' => $time2
	);
	echo json_encode($arr);
?>