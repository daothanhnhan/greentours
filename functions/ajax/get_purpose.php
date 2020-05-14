<?php 
	include_once dirname(__FILE_) . "/../database.php";
	$country = $_GET['country'];
	if ($country == 230) {
		$sql = "SELECT * FROM purpose_visa WHERE id = 3 OR id = 4";
	} else {
		$sql = "SELECT * FROM purpose_visa WHERE id = 1 OR id = 2";
	}
	$result = mysqli_query($conn_vn, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
?>
	<option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
<?php } ?>