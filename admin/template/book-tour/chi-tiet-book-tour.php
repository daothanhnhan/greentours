<?php 
  $passengers = $action->getList('passengers', 'book_tour_id', $_GET['id'], 'id', 'asc', '', '', '');
?>
<a href="index.php?page=book-tour" title="">Quay lại</a>
<table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Gender</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Birthday</th>
        <th>Address 1</th>
        <th>Address 2</th>
        <th>Suburd/Town</th>
        <th>Stare/Province</th>
        <th>Postcode/Zip</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($passengers as $item) { ?>
      <tr>
        <td><?= $item['title'] ?></td>
        <td><?= $item['gender']==1 ? 'Male' : 'Female' ?></td>
        <td><?= $item['firstname'] ?></td>
        <td><?= $item['middlename'] ?></td>
        <td><?= $item['lastname'] ?></td>
        <td><?= $item['email'] ?></td>
        <td><?= $item['phone'] ?></td>
        <td><?= $item['birthday'] ?></td>
        <td><?= $item['address_1'] ?></td>
        <td><?= $item['address_2'] ?></td>
        <td><?= $item['suburd_town'] ?></td>
        <td><?= $item['stare_province'] ?></td>
        <td><?= $item['postcode_zip'] ?></td>
        <td><?= $item['country'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
</table>