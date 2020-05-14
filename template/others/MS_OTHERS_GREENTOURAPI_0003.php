<?php 
	$info = $action->getDetail('order_evisa', 'id', $_GET['trang']);
	$contact = $action->getDetail('info_contact_evisa', 'order_evisa_id', $_GET['trang']);
	$price = json_decode($info['price']);
	$count = count($price);
	$total = 0;
	foreach ($price as $item) {
		$total += $item;
	}
	///////////
	$person = $action->getList('info_person_evisa', 'order_evisa_id' , $_GET['trang'], 'id', 'asc', '', '', '');
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
	        <td>Arrival port</td>
	        <td><?= $info['port'] ?></td>
	      </tr>
	      <tr>
	        <td>Entry date</td>
	        <td><?= $info['date_entry'] ?></td>
	      </tr>
	      <tr>
	        <td>Exit date</td>
	        <td><?= $info['date_exit'] ?></td>
	      </tr>
	      <tr>
	        <td>Processing time</td>
	        <td>
	        	<?php 
	        	echo $info['time'];
	        	?>
	        </td>
	      </tr>
	      
	      <tr>
	        <td style="font-weight: bold;">Total</td>
	        <td>
	        	<?php 
	        	$total += ($info['gov']) * $count;
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
	      <tr>
	      	<td colspan="3"><img src="/images/passport/<?= $item['photo'] ?>" alt="" style="width: 100%"></td>
	      	<td colspan="4"><img src="/images/passport/<?= $item['passport_img'] ?>" alt="" style="width: 100%"></td>
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