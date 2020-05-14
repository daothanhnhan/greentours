<?php 
	$info = $action->getDetail('order_visa', 'id', $_GET['trang']);
	$contact = $action->getDetail('info_contact', 'order_visa_id', $_GET['trang']);
	$price = json_decode($info['price']);
	$count = count($price);
	$total = 0;
	foreach ($price as $item) {
		$total += $item;
	}
	///////////
	$person = $action->getList('info_person', 'order_visa_id' , $_GET['trang'], 'id', 'asc', '', '', '');
?>
<div class="container">
	<p><a href="/list-order-visa" title="">Back</a></p>
	<h1>Information Options</h1>
	<table class="table table-striped">
	    <tbody>
	      <tr>
	        <td>Visa type</td>
	        <td><?= $info['type'] ?></td>
	      </tr>
	      <tr>
	        <td>Purpose of visit</td>
	        <td><?= $info['purpose'] ?></td>
	      </tr>
	      <tr>
	        <td>Arrival airport</td>
	        <td><?= $info['airport'] ?></td>
	      </tr>
	      <tr>
	        <td>Entry date</td>
	        <td><?= $info['entry_date'] ?></td>
	      </tr>
	      <tr>
	        <td>Exit date</td>
	        <td><?= $info['exit_date'] ?></td>
	      </tr>
	      <tr>
	        <td>Processing time</td>
	        <td>
	        	<?php 
	        	$time = $info['time'] * $count;
	        	if ($info['time'] == 0) {
	        		echo 'Standard 2 Working days (Business hour Mon to Fri)';
	        	}
	        	if ($info['time'] == 20) {
	        		echo 'Rush 4-8 Working Hours (Business hour Mon to Fri)';
	        	}
	        	if ($info['time'] == 180) {
	        		echo 'Emergency Processing (Support 24/7)';
	        	}
	        	if ($info['rush'] == 180) {
	        		echo ' - 0$';
	        		$total += $info['rush'] * $count;
	        	} else {
	        		echo ' - '.$time.'$';
	        		$total += $time;
	        	}
	        	?>
	        </td>
	      </tr>
	      <tr>
	        <td>Urgent</td>
	        <td><?= $info['rush'] * $count ?>$</td>
	      </tr>
	      <tr>
	        <td>Private/confidential Letter (show me in private letter)</td>
	        <td><?= $info['private'] * $count ?>$</td>
	      </tr>
	      <tr>
	        <td>Airport Fasttrack - Normal</td>
	        <td>
	        	<?php
	        	if ($info['fasttrack'] == 30) {
	        		echo $info['fasttrack'] * $count;echo '$';
	        	} else {
	        		echo '0$';
	        	}
	        	?>
	        </td>
	      </tr>
	      <tr>
	        <td>Airport Fasttrack - VIP</td>
	        <td>
	        	<?php
	        	if ($info['fasttrack'] == 45) {
	        		echo $info['fasttrack'] * $count;echo '$';
	        	} else {
	        		echo '0$';
	        	}
	        	?>
	        </td>
	      </tr>
	      <tr>
	        <td style="font-weight: bold;">Total</td>
	        <td>
	        	<?php 
	        	$total += ($info['private'] + $info['fasttrack']) * $count;
	        	echo $total.'$';
	        	?>
	        </td>
	      </tr>
	    </tbody>
  	</table>
  	<h1>Information for applications</h1>
  	<table class="table table-bordered">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Full Name</th>
	        <th>Date of Birth</th>
	        <th>Gender</th>
	        <th>Nationality</th>
	        <th>Passport</th>
	        <th>Passport Expiry</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php 
	    $d = 0;
	    foreach ($person as $item) { 
	    	$d++;
	    ?>
	      <tr>
	        <td><?= $d ?></td>
	        <td><?= $item['name'] ?></td>
	        <td><?= $item['birthday'] ?></td>
	        <td><?= $item['gender'] ?></td>
	        <td><?= $item['nationality'] ?></td>
	        <td><?= $item['passport'] ?></td>
	        <td><?= $item['expiry'] ?></td>
	      </tr>
	    <?php } ?>
	    </tbody>
  	</table>
  	<h1>Information for contact</h1>
  	<table class="table table-bordered">
	    <thead>
	      <tr>
	        <th>Primary email</th>
	        <th>Alternative email</th>
	        <th>Phone number</th>
	        <th>Special Request</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td><?= $contact['email_1'] ?></td>
	        <td><?= $contact['email_2'] ?></td>
	        <td><?= $contact['phone'] ?></td>
	        <td><?= $contact['note'] ?></td>
	      </tr>
	    </tbody>
  	</table>
</div>