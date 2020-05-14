<?php 
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

// require 'app/start.php';
// function curPageURL_paypal() {
//      $pageURL = 'http';
//      if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
//      $pageURL .= "://";
//      if ($_SERVER["SERVER_PORT"] != "80") {
//       $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].'/';
//      } else {
//       $pageURL .= $_SERVER["SERVER_NAME"].'/';
//      }
//      return $pageURL;
// }
// $link_paypal = curPageURL_paypal();
////////////////
include_once dirname(__FILE__).'/functions/vendor/autoload.php';

define('SITE_URL', 'http://vietnamfasttrack.org/');
// define('SITE_URL', $link_paypal);

// tuan
// $paypal = new \PayPal\Rest\ApiContext(
//         new \PayPal\Auth\OAuthTokenCredential(
//                 'AYq5y9QlbbGxamZstVQWDD8-WzIgMcHfbcKJazHRSy7_ncmiedv-up80-JP7po2O1C2mvlif_GGShuVC',
//                 'EErTXQIqJyU6GFhvdlSC0nbCFqMEI4ztOa91xovHiBnPvERlnz8-0eyJJ129sBs7v6h5XnknLARise9y'
//             )
//     );

// khach
$paypal = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
                'AYS3rCRF665XENuRS53eeslt9i_1M7-A1txFjEGVtKzb9IlHttiy3Qt_OlFT_BJNUf6ziKBW-T3hPM2O',
                'EC_PgqKm0Cz5Wrp4ZIsYBYIK5jBT9cRJHdvZ5UCnK4W1bf6lqoYBIjEhWm-5iH59Ej2h98RtwSnSc-Du'
            )
    );

$paypal->setConfig([
    'mode' => ('live'),
]);
////////////////

if (!isset($_GET['success'], $_GET['paymentId'], $_GET['PayerID'])) {
	die('tuan');
}

if ((bool)$_GET['success'] === false) {
	die('Fail');
}

$paymentId = $_GET['paymentId'];
$payerId = $_GET['PayerID'];

$payment = Payment::get($paymentId, $paypal);

$execute = new PaymentExecution();
$execute->setPayerId($payerId);

try {
	$result = $payment->execute($execute, $paypal);
} catch (Exception $e) {
	die($e);
}

echo 'success thank ';
echo '<a href="/">tiếp tục</a>';