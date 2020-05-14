<?php 
  function order () {
    global $conn_vn;
    global $action;
    if (isset($_POST['thanh_toan'])) {
      try {
        // $country = $action->getDetail('country', 'id', $_SESSION['info_order_visa']['country'])['name'];//echo $country;
        $purpose = $action->getDetail('purpose_visa', 'id', $_SESSION['info_order_visa']['purpose'])['name'];
        $type = $action->getDetail('visa_type', 'id', $_SESSION['info_order_visa']['type'])['name'];
        $entry_date = str_replace("/", "-", $_SESSION['info_order_visa']['entry_date']);
        $exit_date = str_replace("/", "-", $_SESSION['info_order_visa']['exit_date']);
        $airport = $action->getDetail('cambodia_port_evisa', 'id', $_SESSION['info_order_visa']['airport'])['name'];
        $time = 'Standard 3 Working days (Business hour Mon to Fri)';
        $price = json_encode($_SESSION['info_order_visa']['price']);//var_dump($price);
        $gov = $_SESSION['info_order_visa']['government'];

        $sql = "INSERT INTO order_evisa (purpose, type, date_entry, date_exit, port, price, country, `time`, total, gov) VALUES ('$purpose', '$type', '$entry_date', '$exit_date', '$airport', ?, 3,'$time', 0, $gov)";
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
      echo '<script type="text/javascript">alert(\'You have successfully booked the evisa.\')</script>';
    }
  }
  order();
?>
<?php 
function uploadPicture($src, $img_name, $img_temp){

    $src = $src.$img_name;//echo $src;

    if (!@getimagesize($src)){

      if (move_uploaded_file($img_temp, $src)) {

        return true;

      }

    }

}

function randomString($length = 6) {
    $str = "";
    $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    $time = time();
    return $str.$time;
}
  // var_dump($_POST);
  // var_dump($_FILES);
if (isset($_POST['phone'])) { 
  $count = count($_POST['fullname']);
  $_SESSION['person'] = array();
  for ($i=0;$i<$count;$i++) {
    $src= "images/passport/";
    $rand = randomString();
    $photo = 'photo'.$rand.$_FILES['photo']['name'][$i];
    if(isset($_FILES['photo']) && $_FILES['photo']['name'][$i] != ""){

        uploadPicture($src, $photo, $_FILES['photo']['tmp_name'][$i]);

    }
    $passport = 'passport'.$rand.$_FILES['passport']['name'][$i];
    if(isset($_FILES['passport']) && $_FILES['passport']['name'][$i] != ""){

        uploadPicture($src, $passport, $_FILES['passport']['tmp_name'][$i]);

    }

    if ($_POST['month'][$i] < 10) {
      $month = '0' . $_POST['month'][$i];
    } else {
      $month = $_POST['month'][$i];
    }

    if ($_POST['day'][$i] < 10) {
      $day = '0' . $_POST['day'][$i];
    } else {
      $day = $_POST['day'][$i];
    }

    $date = $day.'-'.$month.'-'.$_POST['year'][$i];
    $expiry = str_replace("/", "-", $_POST['date'][$i]);
    $arr = array(
      'country' => $_POST['country'][$i],
      'fullname' => $_POST['fullname'][$i],
      'gender' => $_POST['gender'][$i],
      'birthday' => $date,
      'passport' => $_POST['number'][$i],
      'expiry' => $expiry,
      'photo' => $photo,
      'passport_img' => $passport
    );
    $_SESSION['person'][] = $arr;
  }
  // var_dump($_SESSION['person']);
  $_SESSION['contact_visa'] = array(
    'email_1' => $_POST['email1'],
    'email_2' => $_POST['email2'],
    'phone' => $_POST['phone'],
    'request' => $_POST['request']
  );
  // var_dump($_SESSION['contact_visa']);
}
if (empty($_SESSION['contact_visa'])) {
  header('location: /applicant-details-cambodia-evisa');
}
if (empty($_SESSION['info_order_visa'])) {
    header('location: /apply-cambodia-evisa');
}
// var_dump($_SESSION['info_order_visa']);
  $purpose = $action->getList('purpose_visa', '', '', 'id', 'asc', '', '', '');
  $visa = $action->getList('visa_type', 'purpose_visa_id', $_SESSION['info_order_visa']['purpose'], 'id', 'asc', '', '', '');
  $airport_item = $action->getDetail('airport_arrival', 'id', $_SESSION['info_order_visa']['airport']);
  $airport = $action->getList('cambodia_port_evisa', '', '', 'id', 'asc', '', '', '');

  $price_country = 0;
  foreach ($_SESSION['info_order_visa']['price'] as $item) {
    $price_country += $item;
  }

  $purpose_order = array();
  if ($_SESSION['info_order_visa']['country'] == 230) {
    $purpose_order[] = $purpose[2];
    $purpose_order[] = $purpose[3];
  } else {
    $purpose_order[] = $purpose[0];
    $purpose_order[] = $purpose[1];
  }

  $date = explode("/", $_SESSION['info_order_visa']['entry_date']);
  $entry_date_1 = $date[1];
  $entry_date_2 = $date[2];
  $entry_date_3 = $date[0];

  $date = explode("/", $_SESSION['info_order_visa']['exit_date']);
  $exit_date_1 = $date[1];
  $exit_date_2 = $date[2];
  $exit_date_3 = $date[0];

  $count_price = count($_SESSION['info_order_visa']['price']);
?>
<?php 
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

// $action_email = new action_email();
  if (isset($_POST['thanh_toan'])) {

    // $name = $_POST['fullname'];
    // $email = $_POST['email'];
    // $amount = $_POST['amount'];
    // $description = $_POST['description'];
    // $appid = $_POST['appid'];
    $product = $_SESSION['person'][0]['fullname'] . '-' . $_SESSION['contact_visa']['email_1'] . '-' . $_SESSION['contact_visa']['phone'];
    // echo $product;

// $action_email->email_send($email, 'Confirmation of successful submission', $noidung);
// echo '<script type="text/javascript">alert(\'Payment Success.\')</script>';
    if ($_SESSION['info_order_visa']['rush'] == 180) {
      $amount = $price_country + ($_SESSION['info_order_visa']['rush'] + $_SESSION['info_order_visa']['private'] + $_SESSION['info_order_visa']['fasttrack']) * $count_price;
    } else {
      $amount = $price_country + ($_SESSION['info_order_visa']['time'] + $_SESSION['info_order_visa']['private'] + $_SESSION['info_order_visa']['fasttrack'] + $_SESSION['info_order_visa']['government']) * $count_price;
    }
// $amount = $price*$count;


$price = (float)$amount;
$shipping = 0.00;

$total = $price + $shipping;

$payer = new Payer();
$payer->setPaymentMethod('paypal');

$item = new Item();
$item->setName($product)
  ->setCurrency('USD')
  ->setQuantity(1)
  ->setPrice($price);

$itemList = new ItemList();
$itemList->setItems([$item]);

$details = new Details();
$details->setShipping($shipping)
  ->setSubtotal($price);

$amount = new Amount();
$amount->setCurrency('USD')
  ->setTotal($total)
  ->setDetails($details);

$transaction = new Transaction();
$transaction->setAmount($amount)
  ->setItemList($itemList)
  ->setDescription('mo ta o day')
  ->setInvoiceNumber(uniqid());

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl(SITE_URL . 'pay.php?success=true')
  ->setCancelUrl(SITE_URL . 'pay.php?success=false');

$payment = new Payment();
$payment->setIntent('sale')
  ->setPayer($payer)
  ->setRedirectUrls($redirectUrls)
  ->setTransactions([$transaction]);

try {
  $payment->create($paypal);
} catch (Exception $e) {
  echo '<pre>';
  var_dump($e);
  die();
}

$approvalUrl = $payment->getApprovalLink();
echo $approvalUrl;

header("location: {$approvalUrl}");
  }
?>
<style type="text/css" media="screen">
.payment {
  border: 1px solid #ddd;
  border-radius: 9px 9px 0 0;
  padding-bottom: 30px;
}
.payment .title {
  background-color: #6494B3;
  color: #fff;
  font-weight: bold;
  font-size: 16px;
  padding: 10px 20px;
  border-radius: 9px 9px 0 0;
}
/**/
.order1 select, .order2 select {
  border: 0;
}
.order1 .right, .order2 .right {
  /*line-height: 1.5;*/
  float: right;
}
.order1 .visa-type, .order2, .order3 {
  padding: 10px;
  border: 1px solid #ddd;
}
.order1 .title {
  font-weight: bold;
  font-size: 16px;
  text-transform: uppercase;
  padding: 13px 20px;
  color: #000;
  background-color: #f0f0f0;
}
.order1 .visa-type .text-visa-type, .order2 .text-visa-type, .order3 .text-visa-type {
  color: #000;
  font-weight: bold;
}
.visa-type .select-visa-type .item, .order2 .item {
  margin-top: 20px;
}
.table-visa tr th {
  text-transform: uppercase;
  background: #40a4c4;
  color: #fff;
  text-align: center;
}
/**/
ul.nav.nav-tabs {
  margin-bottom: 10px;
}
ul.nav.nav-tabs li.active a {
  background: #6d9524;
  color: #fff;
}
</style>
<div class="container">
  <div>
    <ul class="nav nav-tabs">
      <li><a href="#">1. VISA OPTIONS</a></li>
      <li><a href="#">2. ADD APPLICANT FILL FORM</a></li>
      <li class="active"><a href="#">3. REVIEW & PAYMENT</a></li>
      <li><a href="#">4. COMPLETE</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="order1">
        <div class="title">
          Order visa
        </div>
        <div class="visa-type">
          <div class="text-visa-type">
            VISA TYPE
          </div>
          <div class="select-visa-type">
            <div class="item">
              <select name="type" id="type" class="" onchange="typef(this)" disabled="">
                <?php foreach ($visa as $item) { ?>
                <option value="<?= $item['id'] ?>" <?= $item['id']==$_SESSION['info_order_visa']['type'] ? 'selected' : '' ?> ><?= $item['name'] ?></option>
                <?php } ?>
              </select>
              <div class="right" id="price_country" style="">
                $<?= $price_country ?>
              </div>
            </div>
            <div class="item">
              <div class="item-name" style="display: inline;">
                Purpose
              </div>
              <div class="right" style="">
                <select name="purpose" id="purpose" class="" onchange="purposef(this)" disabled="">
                  <?php foreach ($purpose_order as $item) { ?>
                  <option value="<?= $item['id'] ?>" <?= $item['id']==$_SESSION['info_order_visa']['purpose'] ? 'selected' : '' ?> ><?= $item['name'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="item">
              <div class="item-name" style="display: inline;">
                Arrival airport
              </div>
              <div class="right" style="">
                <select name="airport" id="airport" class="" onchange="set_airport(this)" disabled="">
                  <?php foreach ($airport as $item) { ?>
                  <option value="<?= $item['id'] ?>" <?= $item['id']==$_SESSION['info_order_visa']['airport'] ? 'selected' : '' ?> ><?= $item['name'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="item">
              <div class="item-name" style="display: inline;">
                Entry date
              </div>
              <div class="right" style="">
                <select name="month1" id="month1" class="" style="display: inline-block;" disabled>
                  <option value="0">Month</option>
                  <option value="01" <?= $entry_date_1=='01' ? 'selected' : '' ?> >Jan</option>
                  <option value="02" <?= $entry_date_1=='02' ? 'selected' : '' ?> >Feb</option>
                  <option value="03" <?= $entry_date_1=='03' ? 'selected' : '' ?> >Mar</option>
                  <option value="04" <?= $entry_date_1=='04' ? 'selected' : '' ?> >Apr</option>
                  <option value="05" <?= $entry_date_1=='05' ? 'selected' : '' ?> >May</option>
                  <option value="06" <?= $entry_date_1=='06' ? 'selected' : '' ?> >Jun</option>
                  <option value="07" <?= $entry_date_1=='07' ? 'selected' : '' ?> >Jul</option>
                  <option value="08" <?= $entry_date_1=='08' ? 'selected' : '' ?> >Aug</option>
                  <option value="09" <?= $entry_date_1=='09' ? 'selected' : '' ?> >Sep</option>
                  <option value="10" <?= $entry_date_1=='10' ? 'selected' : '' ?> >Oct</option>
                  <option value="11" <?= $entry_date_1=='11' ? 'selected' : '' ?> >Nov</option>
                  <option value="12" <?= $entry_date_1=='12' ? 'selected' : '' ?> >Dec</option>
                </select>
                <select name="day1" id="day1" class="" style="display: inline-block;" disabled>
                  <option value="0">Day</option>
                  <?php 
                  for ($i=1;$i<=31;$i++) { 
                    if ($i < 10) {
                      $j = "0" . $i;
                    } else {
                      $j = $i;
                    }
                  ?>
                  <option value="<?= $j ?>" <?= $j==$entry_date_2 ? 'selected' : '' ?> ><?= $i ?></option>
                  <?php } ?>
                </select>
                <select name="year1" id="year1" class="" style="display: inline-block;" disabled>
                  <?php 
                  $year = date('Y');
                  for ($i=0;$i<=5;$i++) { 
                    $value = $year + $i;
                  ?>
                  <option value="<?= $value ?>" <?= $value==$entry_date_3 ? 'selected' : '' ?> ><?= $value ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="item">
              <div class="item-name" style="display: inline;">
                Exit date
              </div>
              <div class="right" style="">
                <select name="month1" id="month1" class="" style="display: inline-block;" disabled>
                  <option value="0">Month</option>
                  <option value="01" <?= $exit_date_1=='01' ? 'selected' : '' ?> >Jan</option>
                  <option value="02" <?= $exit_date_1=='02' ? 'selected' : '' ?> >Feb</option>
                  <option value="03" <?= $exit_date_1=='03' ? 'selected' : '' ?> >Mar</option>
                  <option value="04" <?= $exit_date_1=='04' ? 'selected' : '' ?> >Apr</option>
                  <option value="05" <?= $exit_date_1=='05' ? 'selected' : '' ?> >May</option>
                  <option value="06" <?= $exit_date_1=='06' ? 'selected' : '' ?> >Jun</option>
                  <option value="07" <?= $exit_date_1=='07' ? 'selected' : '' ?> >Jul</option>
                  <option value="08" <?= $exit_date_1=='08' ? 'selected' : '' ?> >Aug</option>
                  <option value="09" <?= $exit_date_1=='09' ? 'selected' : '' ?> >Sep</option>
                  <option value="10" <?= $exit_date_1=='10' ? 'selected' : '' ?> >Oct</option>
                  <option value="11" <?= $exit_date_1=='11' ? 'selected' : '' ?> >Nov</option>
                  <option value="12" <?= $exit_date_1=='12' ? 'selected' : '' ?> >Dec</option>
                </select>
                <select name="day1" id="day1" class="" style="display: inline-block;" disabled>
                  <option value="0">Day</option>
                  <?php 
                  for ($i=1;$i<=31;$i++) { 
                    if ($i < 10) {
                      $j = "0" . $i;
                    } else {
                      $j = $i;
                    }
                  ?>
                  <option value="<?= $j ?>" <?= $j==$exit_date_2 ? 'selected' : '' ?> ><?= $i ?></option>
                  <?php } ?>
                </select>
                <select name="year1" id="year1" class="" style="display: inline-block;" disabled>
                  <?php 
                  $year = date('Y');
                  for ($i=0;$i<=5;$i++) { 
                    $value = $year + $i;
                  ?>
                  <option value="<?= $value ?>" <?= $value==$exit_date_3 ? 'selected' : '' ?> ><?= $value ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="order2" style="border-top: 0;border-bottom: 0;">
        <div class="text-visa-type">
          EXTRA SERVICE
        </div>
        <div class="item">
          <select name="express" id="express" class="express" disabled>  
            <option value="1" <?= $_SESSION['info_order_visa']['time']==0 ? 'selected' : '' ?> >Standard 3 Working days (Business hour Mon to Fri)</option>
            <option value="2" <?= $_SESSION['info_order_visa']['time']==20 ? 'selected' : '' ?> >Rush 4-8 Working Hours (Business hour Mon to Fri)</option>
            <option value="3" <?= $_SESSION['info_order_visa']['time']==180 ? 'selected' : '' ?> >Emergency Processing (Support 24/7)</option>
          </select>
          <div class="right" style="">
            <?php 
            if ($_SESSION['info_order_visa']['rush'] == 180) {
              $time_fee = 0;
            } else {
              $time_fee = $_SESSION['info_order_visa']['time'] * $count_price;
            }
            echo '$'.$time_fee;
            ?>
          </div>
        </div>
        <div class="item">
          <div class="item-name" style="display: inline;">
            Government fee
          </div>
          <div class="right" style="">
            <?php 
            echo '$';
            echo $_SESSION['info_order_visa']['government'] * $count_price;
            ?>
          </div>
        </div>
      </div>
      <div class="order3" style="padding: 0;">
        <div class="text-visa-type" style="display: inline-block;width: 70%;background: #f0f0f0;padding: 15px;float: left;">
          TOTAL FEE
        </div>
        <div style="width: 30%;display: inline-block;text-align: right;background: #fcf8e3;color: #BB0000;padding-top: 12px;padding-bottom: 12px;font-weight: bold;font-size: 22px;float: right;">
          <?php if ($_SESSION['info_order_visa']['rush'] == 180) { ?>
          <span style="margin-right: 10px;" id="total"><?= $price_country + ($_SESSION['info_order_visa']['rush'] + $_SESSION['info_order_visa']['private'] + $_SESSION['info_order_visa']['fasttrack']) * $count_price ?></span>
          <?php } else { ?>
          <span style="margin-right: 10px;" id="total"><?= $price_country + ($_SESSION['info_order_visa']['time'] + $_SESSION['info_order_visa']['private'] + $_SESSION['info_order_visa']['fasttrack'] + $_SESSION['info_order_visa']['government']) * $count_price ?></span>
          <?php } ?>
        </div>
        <div style="clear: both;">
        
        </div>
      </div>

    </div>
    <div class="col-sm-6">
      <div class="payment">
        <div class="title">
          PAYMENT METHOD
        </div>
        <div class="content">
          <img src="/images/green/paymentmethods.png" alt="" style="width: 100%;">
          <div class="hl" style="font-weight: bold;">PAY ONLINE with <span style="color: #2773A3;">PayPal</span></div>
          <div class="img-center" style="text-align: center;">
            <!-- <a href="/order-evisa-cambodia"><img src="/images/green/pay_paypal.png" alt=""></a> -->
            <a><img src="/images/green/pay_paypal.png" alt=""></a>
            <!-- <div style="background-color: #ccc;padding: 20px;">
              <?= str_replace("\r\n", "<br>", $rowConfig['content_home6']) ?>
            </div> -->
            <div style="text-align: center;margin-top: 10px;">
              <form action="" method="post">
                <button type="submit" name="thanh_toan" class="btn btn-primary">Order</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row applications">
    <div class="col-md-12">
      <div class="title" style="color: #d93240;margin: 10px 0;font-size: 23px;padding-bottom: 10px;text-transform: uppercase;font-weight: bold;">
        INFORMATION FOR APPLICATIONS
      </div>
      <div class="person">
        <table class="table table-bordered table-visa">
          <thead>
            <tr>
              <th>No.</th>
              <th>Full Name</th>
              <th>Date of birth</th>
              <th>Nationality</th>
              <th>Passport</th>
              <th>Passport Expiry</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $d = 0;
            foreach ($_SESSION['person'] as $item) { 
              $d++;
            ?>
            <tr>
              <td><?= $d ?></td>
              <td><?= $item['fullname'] ?></td>
              <td><?= $item['birthday'] ?></td>
              <td><?= $action->getDetail('country', 'id', $item['country'])['name'] ?></td>
              <td><?= $item['passport'] ?></td>
              <td><?= $item['expiry'] ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-12">
      
    </div>
  </div>
  <div class="row applications">
    <div class="col-md-6">
      <table class="table table-bordered table-hover" style="background: #ecf6f9;">
        <tbody>
          <tr>
            <td>Primary email</td>
            <td><?= $_SESSION['contact_visa']['email_1'] ?></td>
          </tr>
          <tr>
            <td>Alternative email</td>
            <td><?= $_SESSION['contact_visa']['email_2'] ?></td>
          </tr>
          <tr>
            <td>Phone number</td>
            <td><?= $_SESSION['contact_visa']['phone'] ?></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <p>Special Request :</p>
      <p><?= str_replace("\r\n", "<br>", $_SESSION['contact_visa']['request']) ?></p>
    </div>
  </div>
</div>
<script type="text/javascript">
var grd = function(){
  $("input[class='radio1']").click(function() {
    var previousValue = $(this).attr('previousValue');
    var name = $(this).attr('name');

    if (previousValue == 'checked') {
      $(this).removeAttr('checked');
      $(this).attr('previousValue', false);
    } else {
      $("input[name="+name+"]:radio").attr('previousValue', false);
      $(this).attr('previousValue', 'checked');
    }
  });
};

grd('1');
</script>
<script type="text/javascript">
  function set_airport (data) {
    var value = data.value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       // document.getElementById("demo").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "/functions/ajax/checkout_set_airport.php?value="+value, true);
    xhttp.send();
  }

  function set_private () {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("private").innerHTML = '$' + this.responseText;
        totalf();
      }
    };
    xhttp.open("GET", "/functions/ajax/checkout_set_private.php", true);
    xhttp.send();
  }

  var fasttrack_js = <?= $_SESSION['info_order_visa']['fasttrack'] ?>;
  function set_fasttrack (gia) {
    var count = <?= $count_price ?>;
    if (fasttrack_js == gia) {
      fasttrack_js = 0;
      document.getElementById("fasttrack1").innerHTML = '$0';
      document.getElementById("fasttrack2").innerHTML = '$0';
    } else {
      fasttrack_js = gia;
      var price = gia * count;
      if (gia == 30) {
        document.getElementById("fasttrack1").innerHTML = '$' + price;
        document.getElementById("fasttrack2").innerHTML = '$0';
      } else {
        document.getElementById("fasttrack1").innerHTML = '$0';
        document.getElementById("fasttrack2").innerHTML = '$' + price;
      }
    }
    // alert(fasttrack_js);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // document.getElementById("private").innerHTML = this.responseText;
        totalf();
      }
    };
    xhttp.open("GET", "/functions/ajax/checkout_set_fasttrack.php?value="+fasttrack_js, true);
    xhttp.send();
  }
</script>
<script type="text/javascript">
  function purposef (data) {
    // alert(data.value);
    var val = data.value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("price_country").innerHTML = '$' + this.responseText;
        totalf();
      }
    };
    xhttp.open("GET", "/functions/ajax/checkout_set_purpose.php?value="+val, true);
    xhttp.send();

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("type").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "/functions/ajax/get_type_of_purpose.php?id="+val, true);
    xhttp.send();
  }

  function typef (data) {
    var val = data.value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("price_country").innerHTML = '$' + this.responseText;
        totalf();
      }
    };
    xhttp.open("GET", "/functions/ajax/checkout_set_type.php?value="+val, true);
    xhttp.send();
  }

  function totalf () {
    // alert('total');
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // alert(this.responseText);
        document.getElementById("total").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "/functions/ajax/checkout_set_total.php", true);
    xhttp.send();
  }
</script>