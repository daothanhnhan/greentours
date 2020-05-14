<?php 
	include_once dirname(__FILE__) . "/../database.php";
	if ($_GET['id'] == 230) {
		$sql = "SELECT * FROM country WHERE id = 230";
	} else {
		$sql = "SELECT * FROM country WHERE id != 230";
	}
	
	$result = mysqli_query($conn_vn, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
		$selected = '';
		if ($row['id'] == $_GET['id']) {
			$selected = 'selected';
		}
		echo '<option value="'.$row['id'].'" '.$selected.' >'.$row['name'].'</option>';
	}
?>