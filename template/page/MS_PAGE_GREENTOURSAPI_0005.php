
<?php 
	// echo '<pre>';
	// var_dump($_SESSION['info_order_visa']);
	// var_dump($_SESSION['contact_visa']);
	// var_dump($_SESSION['person']);
if (empty($_SESSION['contact_visa'])) {
  header('location: /applicant-details');
}
if (empty($_SESSION['info_order_visa'])) {
    header('location: /apply-vietnam-visa-voa');
}
	try {
		$country = $action->getDetail('country', 'id', $_SESSION['info_order_visa']['country'])['name'];//echo $country;
		$purpose = $action->getDetail('purpose_visa', 'id', $_SESSION['info_order_visa']['purpose'])['name'];
		$type = $action->getDetail('visa_type', 'id', $_SESSION['info_order_visa']['type'])['name'];
		$entry_date = str_replace("/", "-", $_SESSION['info_order_visa']['entry_date']);
		$exit_date = str_replace("/", "-", $_SESSION['info_order_visa']['exit_date']);
		$airport = $action->getDetail('airport_arrival', 'id', $_SESSION['info_order_visa']['airport'])['name'];
		$time = $_SESSION['info_order_visa']['time'];
		$private = $_SESSION['info_order_visa']['private'];
		$fasttrack = $_SESSION['info_order_visa']['fasttrack'];
		$price = json_encode($_SESSION['info_order_visa']['price']);//var_dump($price);
		$rush = $_SESSION['info_order_visa']['rush'];

		$sql = "INSERT INTO order_visa (country, purpose, type, entry_date, exit_date, airport, `time`, private, fasttrack, price, rush) VALUES (?, '$purpose', '$type', '$entry_date', '$exit_date', '$airport', $time, $private, $fasttrack, ?, $rush)";
		// echo $sql;
		$stmt = $conn_vn->prepare($sql);
		$stmt->bind_param("ss", $country, $price);
		$stmt->execute();
		$id = $stmt->insert_id;
		///////////////////
		$email_1 = $_SESSION['contact_visa']['email_1'];
		$email_2 = $_SESSION['contact_visa']['email_2'];
		$phone = $_SESSION['contact_visa']['phone'];
		$request = $_SESSION['contact_visa']['request'];
		$sql = "INSERT INTO info_contact (email_1, email_2, phone, note, order_visa_id) VALUES ('$email_1', '$email_2', ?, ?, $id)";//echo $sql;
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

			$sql = "INSERT INTO info_person (name, birthday, gender, nationality, passport, expiry, order_visa_id) VALUES (?, '$birthday', '$gender', ?, ?, '$expiry', $id)";
			// echo $sql;
			$stmt2 = $conn_vn->prepare($sql);
			$stmt2->bind_param("sss", $name, $nationality, $passport);
			$stmt2->execute();
		}
	}
	catch (Exception $e) {
		echo '<script type="text/javascript">alert(\'An error occurred.\')</script>';
	}
?>
<img src="/images/green/thank-you.gif" alt="" width="100%">