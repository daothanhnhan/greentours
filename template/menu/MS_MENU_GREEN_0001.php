<div class="mobile-search-icon" onclick="show_search()">
	<i class="fa fa-search" aria-hidden="true"></i>	
</div>

<div class="mobile-wishlist-icon">
	<a href="/wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span id="heart-num-m"><?= $heart_count==0 ? '' : $heart_count ?></span></a>
</div>

<div class="mobile-phone-icon">
	<a href="tel:+84 84 246 8888" title=""><i class="fa fa-phone" aria-hidden="true"></i></a>
</div>

<div class="mobile-search-bar" id="search_mobile" style="display: none;">
	<?php include DIR_SEARCH."MS_SEARCH_DENMOC_0003.php";?>
</div>

<script>
	function show_search () {
		var search = document.getElementById("search_mobile").style.display;
		if (search == 'none') {
			document.getElementById("search_mobile").style.display = 'block';
		} else {
			document.getElementById("search_mobile").style.display = 'none';
		}
	}
</script>