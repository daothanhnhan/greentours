<?php 
	include_once dirname(__FILE__) . "/../database.php";
	$country = $_GET['country'];
	if ($country == 230) {
		$sql = "SELECT * FROM visa_type WHERE purpose_visa_id = 3";
	} else {
		$sql = "SELECT * FROM visa_type WHERE purpose_visa_id = 1";
	}
	$result = mysqli_query($conn_vn, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
?>
<option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
<?php } ?>