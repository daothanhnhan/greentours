<?php 
	include_once dirname(__FILE__) . "/../database.php";
	$people = $_GET['people'];
	$hotel = $_GET['hotel'];

	$sql = "SELECT * FROM bao_gia WHERE id = 1";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
// var_dump($row);die;
	if ($hotel == 3) {
		if ($people == 1) {
			echo number_format($row['price_1']);
		} elseif ($people == 2 || $people == 3) {
			echo number_format($row['price_2']);
		} elseif ($people == 4 || $people == 5) {
			echo number_format($row['price_3']);
		} elseif ($people == 6 || $people == 7) {
			echo number_format($row['price_4']);
		} elseif ($people == 8 || $people == 9) {
			echo number_format($row['price_5']);
		} elseif ($people == 10 || $people == 11) {
			echo number_format($row['price_6']);
		} elseif ($people == 12 || $people == 13 || $people == 14) {
			echo number_format($row['price_7']);
		}
	} elseif ($hotel == 4) {
		if ($people == 1) {
			echo number_format($row['price_8']);
		} elseif ($people == 2 || $people == 3) {
			echo number_format($row['price_9']);
		} elseif ($people == 4 || $people == 5) {
			echo number_format($row['price_10']);
		} elseif ($people == 6 || $people == 7) {
			echo number_format($row['price_11']);
		} elseif ($people == 8 || $people == 9) {
			echo number_format($row['price_12']);
		} elseif ($people == 10 || $people == 11) {
			echo number_format($row['price_13']);
		} elseif ($people == 12 || $people == 13 || $people == 14) {
			echo number_format($row['price_14']);
		}
	} elseif ($hotel == 5) {
		if ($people == 1) {
			echo number_format($row['price_15']);
		} elseif ($people == 2 || $people == 3) {
			echo number_format($row['price_16']);
		} elseif ($people == 4 || $people == 5) {
			echo number_format($row['price_17']);
		} elseif ($people == 6 || $people == 7) {
			echo number_format($row['price_18']);
		} elseif ($people == 8 || $people == 9) {
			echo number_format($row['price_19']);
		} elseif ($people == 10 || $people == 11) {
			echo number_format($row['price_20']);
		} elseif ($people == 12 || $people == 13 || $people == 14) {
			echo number_format($row['price_21']);
		}
	}
?>