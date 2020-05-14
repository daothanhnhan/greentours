<?php 
  $bao_gia = $action->getDetail('bao_gia', 'id', '1');
?>
<div class="container-fluid">
  <h2>Bảng giá</h2>
           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Hotel</th>
        <th>1</th>
        <th>2 - 3</th>
        <th>4 - 5</th>
        <th>6 - 7</th>
        <th>8 - 9</th>
        <th>10 - 11</th>
        <th>12 - 14</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>3 stars</td>
        <td><input type="number" name="" value="<?= $bao_gia['price_1'] ?>" onchange="price(1, this)" onkeyup="price(1, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_2'] ?>" onchange="price(2, this)" onkeyup="price(2, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_3'] ?>" onchange="price(3, this)" onkeyup="price(3, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_4'] ?>" onchange="price(4, this)" onkeyup="price(4, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_5'] ?>" onchange="price(5, this)" onkeyup="price(5, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_6'] ?>" onchange="price(6, this)" onkeyup="price(6, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_7'] ?>" onchange="price(7, this)" onkeyup="price(7, this)"></td>
      </tr>
      <tr>
        <td>4 stars</td>
        <td><input type="number" name="" value="<?= $bao_gia['price_8'] ?>" onchange="price(8, this)" onkeyup="price(8, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_9'] ?>" onchange="price(9, this)" onkeyup="price(9, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_10'] ?>" onchange="price(10, this)" onkeyup="price(10, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_11'] ?>" onchange="price(11, this)" onkeyup="price(11, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_12'] ?>" onchange="price(12, this)" onkeyup="price(12, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_13'] ?>" onchange="price(13, this)" onkeyup="price(13, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_14'] ?>" onchange="price(14, this)" onkeyup="price(14, this)"></td>
      </tr>
      <tr>
        <td>5 stars</td>
        <td><input type="number" name="" value="<?= $bao_gia['price_15'] ?>" onchange="price(15, this)" onkeyup="price(15, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_16'] ?>" onchange="price(16, this)" onkeyup="price(16, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_17'] ?>" onchange="price(17, this)" onkeyup="price(17, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_18'] ?>" onchange="price(18, this)" onkeyup="price(18, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_19'] ?>" onchange="price(19, this)" onkeyup="price(19, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_20'] ?>" onchange="price(20, this)" onkeyup="price(20, this)"></td>
        <td><input type="number" name="" value="<?= $bao_gia['price_21'] ?>" onchange="price(21, this)" onkeyup="price(21, this)"></td>
      </tr>
    </tbody>
  </table>
</div>
<script>
  function price (num, data) {
    // alert(data.value);
    var money = data.value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       // document.getElementById("demo").innerHTML = this.responseText;
        // alert(this.responseText);
      }
    };
    xhttp.open("GET", "/functions/ajax2/bang_gia.php?num="+num+"&money="+money, true);
    xhttp.send();
  }
</script>