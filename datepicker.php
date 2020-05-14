<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css" media="screen">
.disabled{
    color:#cecece;
}
.picker{
    width:12em;
    margin:1em;
}
</style>
<input type="text" id="picker1" class="picker">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
$(".picker").datepicker({
	format: 'dd/mm/yyyy',
	startDate: '0d',
    datesDisabled:["10/10/2019","11/28/2016","12/02/2016","12/23/2016"]
}).focus();
</script>