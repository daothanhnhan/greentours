<style>
.box-name:after {
  content: '\f107';
  font-family: FontAwesome;
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\f106";
}
</style>
<form action="/index.php">
<input type="hidden" name="page" value="search-spec">
<div class="row">
	<div class="col-md-4">
		<div class="item-box">
			<div class="box-name">Duration</div>
			<div class="box">
				<p><input type="checkbox" name="duration[]" value="1"> 1 - 5 days</p>
				<p><input type="checkbox" name="duration[]" value="2"> 6 - 10 days</p>
				<p><input type="checkbox" name="duration[]" value="3"> 11 - 15 days</p>
				<p><input type="checkbox" name="duration[]" value="4"> 15 days + </p>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="item-box">
			<div class="box-name">Destination</div>
			<div class="box">
				<p><input type="checkbox" name="destination[]" value="144"> Vietnam</p>
				<p><input type="checkbox" name="destination[]" value="145"> Laos</p>
				<p><input type="checkbox" name="destination[]" value="143"> Cambodia</p>
				
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="item-box">
			<div class="box-name">Theme</div>
			<div class="box">
				<p><input type="checkbox" name="theme[]" value="148"> Classic Tours</p>
				<p><input type="checkbox" name="theme[]" value="154"> Active Adventure</p>
				<p><input type="checkbox" name="theme[]" value="151"> Culinary Tours</p>
				<p><input type="checkbox" name="theme[]" value="150"> Family Packages</p>
				<p><input type="checkbox" name="theme[]" value="152"> Urban Tours</p>
				<p><input type="checkbox" name="theme[]" value="155"> Cruising</p>
			</div>
		</div>
	</div>
</div>
<div class="row" style="text-align: center;">
	<button class="search-spec">Search &nbsp;&nbsp;&nbsp; <i class="fa fa-search" aria-hidden="true"></i></button>
</div>
</form>
<script>
var acc = document.getElementsByClassName("box-name");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>