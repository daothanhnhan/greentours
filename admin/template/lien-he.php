<?php 
$rows_lien_he = $action->getList('lien_he','','','id','desc',$trang,20,'lien-he');//var_dump($rows_lien_he);die();
?>
<div class="container">
  <h2>Bảng lên hệ.</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>FirstName</th>
      	<th>LastName</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Company</th>
        <th>Enquiry Detailse</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($rows_lien_he['data'] as $v_row_lh) { ?>
      <tr>
        <td><?php echo $v_row_lh['firstname'];?></td>
        <td><?php echo $v_row_lh['lastname'];?></td>
        <td><?php echo $v_row_lh['email'];?></td>
        <td><?php echo $v_row_lh['phone'];?></td>
        <td><?php echo $v_row_lh['company'];?></td>
        <td><?php echo $v_row_lh['comment'];?></td>
      </tr>
      <?php $i++; } ?>
    </tbody>
  </table>
</div>
<?php
    echo $rows_lien_he['paging']; 
?>