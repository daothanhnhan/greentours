
<div class="container">
  <h2>Wishlist</h2>
              
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Name tour</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $d = 0;
      foreach ($_SESSION['favorite'] as $item) { 
        $d++;
        $product = $action->getDetail('product', 'product_id', $item);
      ?>
      <tr>
        <td><?= $d ?></td>
        <td><a href="/<?= $product['friendly_url'] ?>" title=""><?= $product['product_name'] ?></a></td>
        <td><span style="cursor: pointer;" onclick="remove(<?= $product['product_id'] ?>)">Remove</span></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<script type="text/javascript">
  function remove (product_id) {
    // alert(product_id);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       // document.getElementById("demo").innerHTML = this.responseText;
        location.reload();
      }
    };
    xhttp.open("GET", "/functions/ajax1/remove_favorite.php?product_id="+product_id, true);
    xhttp.send();
  }
</script>