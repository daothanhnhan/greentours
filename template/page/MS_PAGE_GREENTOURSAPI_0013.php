
<?php 
	// echo '<pre>';
	// var_dump($_SESSION['info_order_visa']);
	// var_dump($_SESSION['contact_visa']);
	// var_dump($_SESSION['person']);
if (empty($_SESSION['contact_visa'])) {
  header('location: /applicant-details-vietnam-evisa');
}
if (empty($_SESSION['info_order_visa'])) {
    header('location: /apply-vietnam-evisa');
}
	try {
		// $country = $action->getDetail('country', 'id', $_SESSION['info_order_visa']['country'])['name'];//echo $country;
		$purpose = $action->getDetail('purpose_visa', 'id', $_SESSION['info_order_visa']['purpose'])['name'];
		$type = $action->getDetail('visa_type', 'id', $_SESSION['info_order_visa']['type'])['name'];
		$entry_date = str_replace("/", "-", $_SESSION['info_order_visa']['entry_date']);
		$exit_date = str_replace("/", "-", $_SESSION['info_order_visa']['exit_date']);
		$airport = $action->getDetail('vietnam_port_evisa', 'id', $_SESSION['info_order_visa']['airport'])['name'];
		$time = 'Standard 3 Working days (Business hour Mon to Fri)';
		$price = json_encode($_SESSION['info_order_visa']['price']);//var_dump($price);
		$gov = $_SESSION['info_order_visa']['government'];

		$sql = "INSERT INTO order_evisa (purpose, type, date_entry, date_exit, port, price, country, `time`, total, gov) VALUES ('$purpose', '$type', '$entry_date', '$exit_date', '$airport', ?, 1,'$time', 0, $gov)";
		// echo $sql;
		$stmt = $conn_vn->prepare($sql);
		$stmt->bind_param("s", $price);
		$stmt->execute();
		$id = $stmt->insert_id;
		///////////////////
		$email_1 = $_SESSION['contact_visa']['email_1'];
		$email_2 = $_SESSION['contact_visa']['email_2'];
		$phone = $_SESSION['contact_visa']['phone'];
		$request = $_SESSION['contact_visa']['request'];
		$sql = "INSERT INTO info_contact_evisa (email_1, email_2, phone, note, order_evisa_id) VALUES ('$email_1', '$email_2', ?, ?, $id)";//echo $sql;
		$stmt1 = $conn_vn->prepare($sql);
		$stmt1->bind_param("ss", $phone, $request);
		$stmt1->execute();
		/////////////////
		foreach ($_SESSION['person'] as $item) {
			$name = $item['fullname'];
			$day = $item['birthday'];
			$day = explode("-", $day);
			$birthday = $day[2].'-'.$day[1].'-'.$day[0];
			$gender = $item['gender'];
			$nationality = $action->getDetail('country', 'id', $item['country'])['name'];//echo $nationality;
			$passport = $item['passport'];
			$day = $item['expiry'];
			$day = explode("-", $day);
			$expiry = $day[2].'-'.$day[1].'-'.$day[0];
			$photo = $item['photo'];
			$passport_img = $item['passport_img'];

			$sql = "INSERT INTO info_person_evisa (name, birthday, gender, nationality, passport, expiry, order_evisa_id, photo, passport_img) VALUES (?, '$birthday', '$gender', ?, ?, '$expiry', $id, ?, ?)";
			// echo $sql;
			$stmt2 = $conn_vn->prepare($sql);
			$stmt2->bind_param("sssss", $name, $nationality, $passport, $photo, $passport_img);
			$stmt2->execute();
		}
	}
	catch (Exception $e) {
		echo '<script type="text/javascript">alert(\'An error occurred.\')</script>';
	}
?>
<img src="/images/green/thank-you.gif" alt="" width="100%">