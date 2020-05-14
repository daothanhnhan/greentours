<?php 
	include_once dirname(__FILE__) . "/../database.php";
	$id = $_GET['id'];

	$sql = "SELECT * FROM visa_type WHERE purpose_visa_id = $id";
	$result = mysqli_query($conn_vn, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
?>
<option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
<?php } ?>