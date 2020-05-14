<?php 
  $user = $action->getDetail('user', 'user_id', $_SESSION['user_id_gbvn']);
  $user_email = $user['user_email'];
  $visa = $action->getList('info_contact', 'email_1', $user_email, 'id', 'asc', '', '', '');
  $evisa = $action->getList('info_contact_evisa', 'email_1', $user_email, 'id', 'asc', '', '', '');
?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Primary email</th>
        <th>Alternative email</th>
        <th>Phone number</th>
        <th>Special Request</th>
        <th>Detail</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($visa as $item) { ?>
      <tr>
        <td><?= $item['email_1'] ?></td>
        <td><?= $item['email_2'] ?></td>
        <td><?= $item['phone'] ?></td>
        <td><?= $item['note'] ?></td>
        <td><a href="/order-visa-detail/<?= $item['order_visa_id'] ?>">Detail</a></td>
      </tr>
      <?php } ?>
      <?php foreach ($evisa as $item) { ?>
      <tr>
        <td><?= $item['email_1'] ?></td>
        <td><?= $item['email_2'] ?></td>
        <td><?= $item['phone'] ?></td>
        <td><?= $item['note'] ?></td>
        <td><a href="/order-evisa-detail/<?= $item['order_evisa_id'] ?>">Detail</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
