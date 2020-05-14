<footer class="site-footer footer-default">
    <div class="footer-main-content_denmoc"style="margin-top: 20px;">
        <div class="container ">
            <div class="footer1">
                <li><a href="<?= $rowConfig['facebook'] ?>" title=""><span class="fa fa-facebook-square MXH"></span></a></li>
                <li><a href="<?= $rowConfig['twitter'] ?>" title=""><span class="fa fa-twitter-square MXH"></span></a></li>
                <li><a href="<?= $rowConfig['youtube'] ?>" title=""><span class="fa fa-youtube-square MXH"></span></a></li>
                <li><a href="<?= $rowConfig['instagram'] ?>" title=""><span class="fa fa-instagram MXH"></span></a></li>
                <li><a href="<?= $rowConfig['pinterest'] ?>" title=""><span class="fa fa-pinterest-square MXH"></span></a></li>
                <!-- <li><span class="fa fa-google-plus-square MXH"></span></li> -->
                <li class="google-map-icon"><a href="<?= $rowConfig['gmap'] ?>" title=""><img src="/images/green/icon/google-map.png" alt=""></a></li>
            </div>
        </div>
    </div>
    <div class="copyright-area_denmoc">
        <div class="container io">
            <div class="footer2">
                <div class="row">
                    <div class="col-md-6 text"><span class="footer-text-copyright">Copyright <?= date('Y') ?> <span class="green-footer-text">Green</span>tours Indochina</span></div>
                    <div class="col-md-6 text">We accept <img src="/images/green/footer/pay.PNG" alt="" class="img"></div>
                </div>
            </div>
            
        </div>
    </div>
    
</footer>
<script type="text/javascript">
    function favorite (product_id) {
        // alert('favorite'+product_id);

        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("heart-num-d").innerHTML = this.responseText;
                document.getElementById("heart-num-m").innerHTML = this.responseText;

                // if (confirm('Would you like to go to the wishlist.')) {
                //     window.location = '/wishlist';
                // }

                document.getElementById("heart-"+product_id).innerHTML = '<i class="fa fa-heart" aria-hidden="true"></i>';
            }
          };
          xhttp.open("GET", "/functions/ajax1/favorite.php?product_id="+product_id, true);
          xhttp.send();
    }
</script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active-faq");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>