<?php 
	$list_airport = $action->getList('airport', '', '', 'id', 'asc', '', '', '');
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<link rel="stylesheet" href="/plugin/animsition/css/animate.css">
<style type="text/css">
.flightHomeSearchPanelContainer {
	/*background-image: url(/images/background/ninh-binh.jpg);*/
	background-image: url(/images/green/banner/flight.jpg);
	background-repeat: no-repeat;
	background-position: center center;
    background-size: cover;
    object-fit: cover;

}
.carrier-list--panel {
    background: rgba(255,255,255,.5);
    border-radius: 15px;
}
.v-margin-top-15 {
    /*margin-top: 15px;*/
}
.vcolor-primary {
    color: #fff;
    font-size: 27px;
    text-transform: uppercase;
    font-weight: bold;
    background-color: #00000026;
    padding-top: 20px;
    padding-left: 20px;
}
.no-padding {
    padding: 0!important;
}
.carrier-list__logos .logo-item {
    padding: 5px;
    margin-bottom: 5px;
}
.carrier-list__logos .logo-item .logo-container {
    transition: all .15s linear;
    background: rgba(0,60,113,.03);
    border-radius: 50px;
    padding: 0;
    border: 1px solid rgba(0,60,113,.1);
    width: 75px;
    height: 75px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.carrier-list__logos .logo-item .logo-container:hover {
    border-color: rgba(0,60,113,.5);
}
.carrier-list__logos .logo-item .logo-container img {
    padding: 6px;
    width: 100%;
    display: block;
    margin: auto;
}
/**/

.flightHomeSearchForm {
    box-shadow: 0 1px 1px rgba(0,0,0,.1);
    padding-top: 15px;
    background-color: rgba(73,75,85,.4);
    color: #fff;
    min-height: 371px;
    border-radius: 15px;
    width: calc(66.666667% - 20px);
    margin-right: 20px;
}
.flightHomeSearchForm input, .flightHomeSearchForm select, .flightHomeSearchForm button {
	border-radius: 10px !important;
}
.flightHomeSearchForm .text-offer {
	float: right;
	top: 15px;
}
.flightHomeSearchForm .iconPlane {
    position: absolute;
    z-index: 1;
    right: 15px;
    top: -30px;
    display: block;
}
.flightHomeSearchForm .flightHomeIntro {
    color: #fff;
    font-size: 36px;

}
.flightHomeSearchForm .flightHomeIntro h1 {
	text-align: center;
}
/**/
.nav-tabs li a {
	color: #fff !important;
}
li.active a {
	background-color: #003c71 !important;
	color: #fff !important;
	border: 0 !important;
}
.nav-tabs>li>a:hover {
    background-color: #003c71 !important;
}
/*typehead*/
.twitter-typeahead {
	width: 100%;
}
.tt-menu {
	background-color: #fff;
	color: #000;
	width: 100%;
}
.tt-suggestion {
	padding: 5px;
}
/*datepicker*/
input {
  padding:10px;
	font-family: FontAwesome, "Open Sans", Verdana, sans-serif;
  font-style: normal;
  font-weight: normal;
  text-decoration: inherit;
  border-radius: 0 !important;
}

.form-control {
  border-radius: 0 !important;
  font-size: 12px;
}

.clickable { cursor: pointer; }
</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">

<div class="container-fluid flightHomeSearchPanelContainer" style="">
	<div class="row" style="margin-top: 50px;margin-bottom: 70px;">
		<div class="container">
			<div class="col-md-8 flightHomeSearchForm ">
				<!-- <img src="/images/logo/plane.svg" class="iconPlane"> -->
				<div class="col-md-12 flightHomeIntro">
					<h1>
	                    SEARCH FLIGHTS
	                </h1>
				</div>
				  <div style="margin-top: 70px;">
					<ul class="nav nav-tabs">
					  <li class="active"><a data-toggle="tab" href="#home">Round-trip</a></li>
					  <li><a data-toggle="tab" href="#menu1">One-way</a></li>
					  <li class="text-offer">We offer best airline rates in Vietnam</li>
					</ul>

					<div class="tab-content" style="margin-top: 10px;">
					  <div id="home" class="tab-pane fade in active">
					  	<form action="/checkbooking" method="post" accept-charset="utf-8">
					  		<input type="hidden" checked="checked" value="roundway" name="flight_type" id="optOneWay">
					    <div class="row">
					    	<div class="col-md-9">
					    		<div class="form-group">
								    <label for="form1">From:</label>
								    <select style="height:35px;width:100%;color: #333;" class="input1" id="ddlDepartCity" name="ddlDepartCity" required="">
<option value="">-- Select --</option><optgroup label="Viet Nam" id="vn"><option value="BMV">Ban Me Thuot (BMV)</option><option value="CAH">Ca Mau (CAH)</option><option value="VCA">Can Tho (VCA)</option><option value="VCS">Con Dao (VCS)</option><option value="DLI">Da Lat (DLI)</option><option value="DAD">Da Nang (DAD)</option><option value="DIN">Dien Bien (DIN)</option><option value="VDH">Dong Hoi (VDH)</option><option value="HAN">Ha Noi (HAN)</option><option value="HPH">Hai Phong (HPH)</option><option value="SGN">Ho Chi Minh City (SGN)</option><option value="HUI">Hue (HUI)</option><option value="NHA">Nha Trang (NHA)</option><option value="PQC">Phu Quoc (PQC)</option><option value="PXU">Pleiku (PXU)</option><option value="UIH">Quy Nhon (UIH)</option><option value="VKG">Rach Gia (VKG)</option><option value="VCL">Tam Ky (VCL)</option><option value="TMK">Tam Ky, Viet Nam (TMK)</option><option value="TBB">Tuy Hoa (TBB)</option><option value="VII">Vinh (VII)</option></optgroup>
<optgroup label="United States" id="us"><option value="ATL">Atlanta Hartsfield (ATL)</option><option value="AUS">Austin (AUS)</option><option value="BOS">Boston, Logan (BOS)</option><option value="CHI">Chicago, IL (CHI)</option><option value="DFW">Dallas/Fort Worth (DFW)</option><option value="DEN">Denver (DEN)</option><option value="IAD">Dulles, Washington (IAD)</option><option value="IAH">Geo Bush, Houston (IAH)</option><option value="HNL">Honolulu (HNL)</option><option value="HOU">Houston (HOU)</option><option value="LAX">Los Angeles (LAX)</option><option value="MIA">Miami (MIA)</option><option value="MSP">Minneapolis/St.Paul (MSP)</option><option value="ORD">Ohare, Chicago (ORD)</option><option value="PHL">Philadelphia (PHL)</option><option value="PDX">Portland (PDX)</option><option value="SFO">San Francisco (SFO)</option><option value="SEA">Seattle, Tacoma (SEA)</option><option value="STL">St Louis, Lambert (STL)</option><option value="WAS">Washington (WAS)</option></optgroup>
<optgroup label="Southeast Asia" id="seasia"><option value="BKK">Bangkok (BKK)</option><option value="KUL">Kuala Lumpur (KUL)</option><option value="MNL">Manila (MNL)</option><option value="SIN">Singapore (SIN)</option><option value="RGN">Yangon (RGN)</option></optgroup>
<optgroup label="East Asia" id="neasia"><option value="BJS">Beijing (BJS)</option><option value="PEK">Beijing (PEK)</option><option value="PUS">Busan (PUS)</option><option value="CTU">Chengdu (CTU)</option><option value="FUK">Fukuoka (FUK)</option><option value="CAN">Guangzhou (CAN)</option><option value="HND">Haneda, Tokyo (HND)</option><option value="HKG">Hong Kong (HKG)</option><option value="ICN">Incheon Int, Seoul (ICN)</option><option value="KIX">Kansai, Osaka (KIX)</option><option value="KHH">Kaohsiung (KHH)</option><option value="NGO">Nagoya (NGO)</option><option value="NRT">Narita, Tokyo (NRT)</option><option value="OSA">Osaka (OSA)</option><option value="PVG">Pudong, ShangHai (PVG)</option><option value="SEL">Seoul (SEL)</option><option value="SHA">Shanghai (SHA)</option><option value="TPE">Taipei (TPE)</option><option value="TYO">Tokyo (TYO)</option></optgroup>
<optgroup label="Indochina" id="indochina"><option value="LPQ">Luang Prabang (LPQ)</option><option value="PNH">Phnom Penh (PNH)</option><option value="REP">Siem Riep (REP)</option><option value="VTE">Vientiane (VTE)</option></optgroup>
<optgroup label="Europe" id="eu"><option value="AMS">Amsterdam (AMS)</option><option value="LCY">Arpt City, London (LCY)</option><option value="CDG">De Gaulle, Paris (CDG)</option><option value="DME">Domodedovo, Moscow (DME)</option><option value="FCO">Fiumicino, Rome (FCO)</option><option value="FRA">Frankfurt (FRA)</option><option value="LGW">Gatwick, London (LGW)</option><option value="LHR">Heathrow, London (LHR)</option><option value="LON">London (LON)</option><option value="MOW">Moscow (MOW)</option><option value="ORY">Orly, Paris (ORY)</option><option value="PAR">Paris (PAR)</option><option value="PRG">Praque (PRG)</option><option value="ROM">Rome (ROM)</option></optgroup>
<optgroup label="Australia" id="au"><option value="MEL">Melbourne (MEL)</option><option value="SYD">Sydney (SYD)</option></optgroup>

</select>
								</div>
								<div class="form-group">
								    <label for="to1">To:</label>
								    <select style="height:35px;width:100%;color: #333;" class="input" id="ddlNoiDen" name="ddlReturnCity" required="">
<option value="">-- Select --</option><optgroup label="Viet Nam" id="vn"><option value="BMV">Ban Me Thuot (BMV)</option><option value="CAH">Ca Mau (CAH)</option><option value="VCA">Can Tho (VCA)</option><option value="VCS">Con Dao (VCS)</option><option value="DLI">Da Lat (DLI)</option><option value="DAD">Da Nang (DAD)</option><option value="DIN">Dien Bien (DIN)</option><option value="VDH">Dong Hoi (VDH)</option><option value="HAN">Ha Noi (HAN)</option><option value="HPH">Hai Phong (HPH)</option><option value="SGN">Ho Chi Minh City (SGN)</option><option value="HUI">Hue (HUI)</option><option value="NHA">Nha Trang (NHA)</option><option value="PQC">Phu Quoc (PQC)</option><option value="PXU">Pleiku (PXU)</option><option value="UIH">Quy Nhon (UIH)</option><option value="VKG">Rach Gia (VKG)</option><option value="VCL">Tam Ky (VCL)</option><option value="TMK">Tam Ky, Viet Nam (TMK)</option><option value="TBB">Tuy Hoa (TBB)</option><option value="VII">Vinh (VII)</option></optgroup>
<optgroup label="United States" id="us"><option value="ATL">Atlanta Hartsfield (ATL)</option><option value="AUS">Austin (AUS)</option><option value="BOS">Boston, Logan (BOS)</option><option value="CHI">Chicago, IL (CHI)</option><option value="DFW">Dallas/Fort Worth (DFW)</option><option value="DEN">Denver (DEN)</option><option value="IAD">Dulles, Washington (IAD)</option><option value="IAH">Geo Bush, Houston (IAH)</option><option value="HNL">Honolulu (HNL)</option><option value="HOU">Houston (HOU)</option><option value="LAX">Los Angeles (LAX)</option><option value="MIA">Miami (MIA)</option><option value="MSP">Minneapolis/St.Paul (MSP)</option><option value="ORD">Ohare, Chicago (ORD)</option><option value="PHL">Philadelphia (PHL)</option><option value="PDX">Portland (PDX)</option><option value="SFO">San Francisco (SFO)</option><option value="SEA">Seattle, Tacoma (SEA)</option><option value="STL">St Louis, Lambert (STL)</option><option value="WAS">Washington (WAS)</option></optgroup>
<optgroup label="Southeast Asia" id="seasia"><option value="BKK">Bangkok (BKK)</option><option value="KUL">Kuala Lumpur (KUL)</option><option value="MNL">Manila (MNL)</option><option value="SIN">Singapore (SIN)</option><option value="RGN">Yangon (RGN)</option></optgroup>
<optgroup label="East Asia" id="neasia"><option value="BJS">Beijing (BJS)</option><option value="PEK">Beijing (PEK)</option><option value="PUS">Busan (PUS)</option><option value="CTU">Chengdu (CTU)</option><option value="FUK">Fukuoka (FUK)</option><option value="CAN">Guangzhou (CAN)</option><option value="HND">Haneda, Tokyo (HND)</option><option value="HKG">Hong Kong (HKG)</option><option value="ICN">Incheon Int, Seoul (ICN)</option><option value="KIX">Kansai, Osaka (KIX)</option><option value="KHH">Kaohsiung (KHH)</option><option value="NGO">Nagoya (NGO)</option><option value="NRT">Narita, Tokyo (NRT)</option><option value="OSA">Osaka (OSA)</option><option value="PVG">Pudong, ShangHai (PVG)</option><option value="SEL">Seoul (SEL)</option><option value="SHA">Shanghai (SHA)</option><option value="TPE">Taipei (TPE)</option><option value="TYO">Tokyo (TYO)</option></optgroup>
<optgroup label="Indochina" id="indochina"><option value="LPQ">Luang Prabang (LPQ)</option><option value="PNH">Phnom Penh (PNH)</option><option value="REP">Siem Riep (REP)</option><option value="VTE">Vientiane (VTE)</option></optgroup>
<optgroup label="Europe" id="eu"><option value="AMS">Amsterdam (AMS)</option><option value="LCY">Arpt City, London (LCY)</option><option value="CDG">De Gaulle, Paris (CDG)</option><option value="DME">Domodedovo, Moscow (DME)</option><option value="FCO">Fiumicino, Rome (FCO)</option><option value="FRA">Frankfurt (FRA)</option><option value="LGW">Gatwick, London (LGW)</option><option value="LHR">Heathrow, London (LHR)</option><option value="LON">London (LON)</option><option value="MOW">Moscow (MOW)</option><option value="ORY">Orly, Paris (ORY)</option><option value="PAR">Paris (PAR)</option><option value="PRG">Praque (PRG)</option><option value="ROM">Rome (ROM)</option></optgroup>
<optgroup label="Australia" id="au"><option value="MEL">Melbourne (MEL)</option><option value="SYD">Sydney (SYD)</option></optgroup>

</select>
								</div>
					    	</div>
					    	<div class="col-md-3">
					    		<div class="form-group">
								    <label for="dp1">Depart:</label>
								    <input id="dp1" type="text" class="form-control clickable input-md" id="DtChkIn" name="dtpDepartDate" placeholder="&#xf133;  Check-In" autocomplete="off" required="">
								</div>
								<div class="form-group">
								    <label for="dp2">Return:</label>
								    <input id="dp2" type="text" class="form-control clickable input-md" id="DtChkOut" name="dtpReturnDate" placeholder="&#xf133;  Check-Out" autocomplete="off" required="">
								</div>
					    	</div>
					    	<div class="col-md-12">
					    		<div class="row">
					    			<div class="col-md-3">
					    				<div class="form-group">
										  <label for="adult-1">Adults:</label>
										  <select class="form-control" id="adult-1" name="ddlADT">
										    <?php for ($i=1;$i<10;$i++) { ?>
										    <option value="<?= $i ?>"><?= $i ?></option>
										    <?php } ?>
										  </select>
										</div>
					    			</div>
					    			<div class="col-md-3">
					    				<div class="form-group">
										  <label for="child-1">Children (2-12 yrs):</label>
										  <select class="form-control" id="child-1" name="ddlCHD">
										    <?php for ($i=0;$i<10;$i++) { ?>
										    <option value="<?= $i ?>"><?= $i ?></option>
										    <?php } ?>
										  </select>
										</div>
					    			</div>
					    			<div class="col-md-3">
					    				<div class="form-group">
										  <label for="infant-1">Infant (< 2 yrs):</label>
										  <select class="form-control" id="infant-1" name="ddlINF">
										    <?php for ($i=0;$i<10;$i++) { ?>
										    <option value="<?= $i ?>"><?= $i ?></option>
										    <?php } ?>
										  </select>
										</div>
					    			</div>
					    			<div class="col-md-3">
					    				<label for="email">&nbsp;</label>
					    				<button type="submit" class="btn btn-default" style="width: 100%;" onmouseover="set_airport_1()" onclick="set_url_1a()"><i class="fa fa-search"></i> Search</button>
					    			</div>
					    		</div>
					    	</div>
					    </div>
					    </form>
					  </div>
					  <div id="menu1" class="tab-pane fade">
					  	<form action="/checkbooking" method="post" accept-charset="utf-8">
					  		<input type="hidden" checked="checked" value="oneway" name="flight_type" id="optOneWay">
					    <div class="row">
					    	<div class="col-md-9">
					    		<div class="form-group">
								    <label for="from2">From:</label>
								    <select style="height:35px;width:100%;color: #333;" class="input1" id="ddlDepartCity" name="ddlDepartCity" required="">
<option value="">-- Select --</option><optgroup label="Viet Nam" id="vn"><option value="BMV">Ban Me Thuot (BMV)</option><option value="CAH">Ca Mau (CAH)</option><option value="VCA">Can Tho (VCA)</option><option value="VCS">Con Dao (VCS)</option><option value="DLI">Da Lat (DLI)</option><option value="DAD">Da Nang (DAD)</option><option value="DIN">Dien Bien (DIN)</option><option value="VDH">Dong Hoi (VDH)</option><option value="HAN">Ha Noi (HAN)</option><option value="HPH">Hai Phong (HPH)</option><option value="SGN">Ho Chi Minh City (SGN)</option><option value="HUI">Hue (HUI)</option><option value="NHA">Nha Trang (NHA)</option><option value="PQC">Phu Quoc (PQC)</option><option value="PXU">Pleiku (PXU)</option><option value="UIH">Quy Nhon (UIH)</option><option value="VKG">Rach Gia (VKG)</option><option value="VCL">Tam Ky (VCL)</option><option value="TMK">Tam Ky, Viet Nam (TMK)</option><option value="TBB">Tuy Hoa (TBB)</option><option value="VII">Vinh (VII)</option></optgroup>
<optgroup label="United States" id="us"><option value="ATL">Atlanta Hartsfield (ATL)</option><option value="AUS">Austin (AUS)</option><option value="BOS">Boston, Logan (BOS)</option><option value="CHI">Chicago, IL (CHI)</option><option value="DFW">Dallas/Fort Worth (DFW)</option><option value="DEN">Denver (DEN)</option><option value="IAD">Dulles, Washington (IAD)</option><option value="IAH">Geo Bush, Houston (IAH)</option><option value="HNL">Honolulu (HNL)</option><option value="HOU">Houston (HOU)</option><option value="LAX">Los Angeles (LAX)</option><option value="MIA">Miami (MIA)</option><option value="MSP">Minneapolis/St.Paul (MSP)</option><option value="ORD">Ohare, Chicago (ORD)</option><option value="PHL">Philadelphia (PHL)</option><option value="PDX">Portland (PDX)</option><option value="SFO">San Francisco (SFO)</option><option value="SEA">Seattle, Tacoma (SEA)</option><option value="STL">St Louis, Lambert (STL)</option><option value="WAS">Washington (WAS)</option></optgroup>
<optgroup label="Southeast Asia" id="seasia"><option value="BKK">Bangkok (BKK)</option><option value="KUL">Kuala Lumpur (KUL)</option><option value="MNL">Manila (MNL)</option><option value="SIN">Singapore (SIN)</option><option value="RGN">Yangon (RGN)</option></optgroup>
<optgroup label="East Asia" id="neasia"><option value="BJS">Beijing (BJS)</option><option value="PEK">Beijing (PEK)</option><option value="PUS">Busan (PUS)</option><option value="CTU">Chengdu (CTU)</option><option value="FUK">Fukuoka (FUK)</option><option value="CAN">Guangzhou (CAN)</option><option value="HND">Haneda, Tokyo (HND)</option><option value="HKG">Hong Kong (HKG)</option><option value="ICN">Incheon Int, Seoul (ICN)</option><option value="KIX">Kansai, Osaka (KIX)</option><option value="KHH">Kaohsiung (KHH)</option><option value="NGO">Nagoya (NGO)</option><option value="NRT">Narita, Tokyo (NRT)</option><option value="OSA">Osaka (OSA)</option><option value="PVG">Pudong, ShangHai (PVG)</option><option value="SEL">Seoul (SEL)</option><option value="SHA">Shanghai (SHA)</option><option value="TPE">Taipei (TPE)</option><option value="TYO">Tokyo (TYO)</option></optgroup>
<optgroup label="Indochina" id="indochina"><option value="LPQ">Luang Prabang (LPQ)</option><option value="PNH">Phnom Penh (PNH)</option><option value="REP">Siem Riep (REP)</option><option value="VTE">Vientiane (VTE)</option></optgroup>
<optgroup label="Europe" id="eu"><option value="AMS">Amsterdam (AMS)</option><option value="LCY">Arpt City, London (LCY)</option><option value="CDG">De Gaulle, Paris (CDG)</option><option value="DME">Domodedovo, Moscow (DME)</option><option value="FCO">Fiumicino, Rome (FCO)</option><option value="FRA">Frankfurt (FRA)</option><option value="LGW">Gatwick, London (LGW)</option><option value="LHR">Heathrow, London (LHR)</option><option value="LON">London (LON)</option><option value="MOW">Moscow (MOW)</option><option value="ORY">Orly, Paris (ORY)</option><option value="PAR">Paris (PAR)</option><option value="PRG">Praque (PRG)</option><option value="ROM">Rome (ROM)</option></optgroup>
<optgroup label="Australia" id="au"><option value="MEL">Melbourne (MEL)</option><option value="SYD">Sydney (SYD)</option></optgroup>

</select>
								</div>
								<div class="form-group">
								    <label for="to2">To:</label>
								    <select style="height:35px;width:100%;color: #333;" class="input" id="ddlNoiDen" name="ddlReturnCity" required="">
<option value="">-- Select --</option><optgroup label="Viet Nam" id="vn"><option value="BMV">Ban Me Thuot (BMV)</option><option value="CAH">Ca Mau (CAH)</option><option value="VCA">Can Tho (VCA)</option><option value="VCS">Con Dao (VCS)</option><option value="DLI">Da Lat (DLI)</option><option value="DAD">Da Nang (DAD)</option><option value="DIN">Dien Bien (DIN)</option><option value="VDH">Dong Hoi (VDH)</option><option value="HAN">Ha Noi (HAN)</option><option value="HPH">Hai Phong (HPH)</option><option value="SGN">Ho Chi Minh City (SGN)</option><option value="HUI">Hue (HUI)</option><option value="NHA">Nha Trang (NHA)</option><option value="PQC">Phu Quoc (PQC)</option><option value="PXU">Pleiku (PXU)</option><option value="UIH">Quy Nhon (UIH)</option><option value="VKG">Rach Gia (VKG)</option><option value="VCL">Tam Ky (VCL)</option><option value="TMK">Tam Ky, Viet Nam (TMK)</option><option value="TBB">Tuy Hoa (TBB)</option><option value="VII">Vinh (VII)</option></optgroup>
<optgroup label="United States" id="us"><option value="ATL">Atlanta Hartsfield (ATL)</option><option value="AUS">Austin (AUS)</option><option value="BOS">Boston, Logan (BOS)</option><option value="CHI">Chicago, IL (CHI)</option><option value="DFW">Dallas/Fort Worth (DFW)</option><option value="DEN">Denver (DEN)</option><option value="IAD">Dulles, Washington (IAD)</option><option value="IAH">Geo Bush, Houston (IAH)</option><option value="HNL">Honolulu (HNL)</option><option value="HOU">Houston (HOU)</option><option value="LAX">Los Angeles (LAX)</option><option value="MIA">Miami (MIA)</option><option value="MSP">Minneapolis/St.Paul (MSP)</option><option value="ORD">Ohare, Chicago (ORD)</option><option value="PHL">Philadelphia (PHL)</option><option value="PDX">Portland (PDX)</option><option value="SFO">San Francisco (SFO)</option><option value="SEA">Seattle, Tacoma (SEA)</option><option value="STL">St Louis, Lambert (STL)</option><option value="WAS">Washington (WAS)</option></optgroup>
<optgroup label="Southeast Asia" id="seasia"><option value="BKK">Bangkok (BKK)</option><option value="KUL">Kuala Lumpur (KUL)</option><option value="MNL">Manila (MNL)</option><option value="SIN">Singapore (SIN)</option><option value="RGN">Yangon (RGN)</option></optgroup>
<optgroup label="East Asia" id="neasia"><option value="BJS">Beijing (BJS)</option><option value="PEK">Beijing (PEK)</option><option value="PUS">Busan (PUS)</option><option value="CTU">Chengdu (CTU)</option><option value="FUK">Fukuoka (FUK)</option><option value="CAN">Guangzhou (CAN)</option><option value="HND">Haneda, Tokyo (HND)</option><option value="HKG">Hong Kong (HKG)</option><option value="ICN">Incheon Int, Seoul (ICN)</option><option value="KIX">Kansai, Osaka (KIX)</option><option value="KHH">Kaohsiung (KHH)</option><option value="NGO">Nagoya (NGO)</option><option value="NRT">Narita, Tokyo (NRT)</option><option value="OSA">Osaka (OSA)</option><option value="PVG">Pudong, ShangHai (PVG)</option><option value="SEL">Seoul (SEL)</option><option value="SHA">Shanghai (SHA)</option><option value="TPE">Taipei (TPE)</option><option value="TYO">Tokyo (TYO)</option></optgroup>
<optgroup label="Indochina" id="indochina"><option value="LPQ">Luang Prabang (LPQ)</option><option value="PNH">Phnom Penh (PNH)</option><option value="REP">Siem Riep (REP)</option><option value="VTE">Vientiane (VTE)</option></optgroup>
<optgroup label="Europe" id="eu"><option value="AMS">Amsterdam (AMS)</option><option value="LCY">Arpt City, London (LCY)</option><option value="CDG">De Gaulle, Paris (CDG)</option><option value="DME">Domodedovo, Moscow (DME)</option><option value="FCO">Fiumicino, Rome (FCO)</option><option value="FRA">Frankfurt (FRA)</option><option value="LGW">Gatwick, London (LGW)</option><option value="LHR">Heathrow, London (LHR)</option><option value="LON">London (LON)</option><option value="MOW">Moscow (MOW)</option><option value="ORY">Orly, Paris (ORY)</option><option value="PAR">Paris (PAR)</option><option value="PRG">Praque (PRG)</option><option value="ROM">Rome (ROM)</option></optgroup>
<optgroup label="Australia" id="au"><option value="MEL">Melbourne (MEL)</option><option value="SYD">Sydney (SYD)</option></optgroup>

</select>
								</div>
					    	</div>
					    	<div class="col-md-3">
					    		<div class="form-group">
								    <label for="dp3">Depart:</label>
								    <input id="dp3" type="text" class="form-control clickable input-md" id="DtChkIn1" name="dtpDepartDate" placeholder="&#xf133;  Check-In" autocomplete="off" required>
								</div>
								
					    	</div>
					    	<div class="col-md-12">
					    		<div class="row">
					    			<div class="col-md-3">
					    				<div class="form-group">
										  <label for="adult-2">Adults:</label>
										  <select class="form-control" id="adult-2" name="ddlADT">
										    <?php for ($i=1;$i<10;$i++) { ?>
										    <option value="<?= $i ?>"><?= $i ?></option>
										    <?php } ?>
										  </select>
										</div>
					    			</div>
					    			<div class="col-md-3">
					    				<div class="form-group">
										  <label for="child-2">Children (2-12 yrs):</label>
										  <select class="form-control" id="child-2" name="ddlCHD">
										    <?php for ($i=0;$i<10;$i++) { ?>
										    <option value="<?= $i ?>"><?= $i ?></option>
										    <?php } ?>
										  </select>
										</div>
					    			</div>
					    			<div class="col-md-3">
					    				<div class="form-group">
										  <label for="infant-2">Infant (< 2 yrs):</label>
										  <select class="form-control" id="infant-2" name="ddlINF">
										    <?php for ($i=0;$i<10;$i++) { ?>
										    <option value="<?= $i ?>"><?= $i ?></option>
										    <?php } ?>
										  </select>
										</div>
					    			</div>
					    			<div class="col-md-3">
					    				<label for="email">&nbsp;</label>
					    				<button type="submit" class="btn btn-default" style="width: 100%;" onmouseover="set_airport_2()" onclick="set_url_2a()"><i class="fa fa-search"></i> Search</button>
					    			</div>
					    		</div>
					    	</div>
					    </div>
					    </form>
					  </div>
					</div>
				  </div>
			</div>
			<div class="col-md-4 carrier-list--panel no-padding">
				<div class="col-xs-12 no-padding">
	                <h3 class="v-margin-top-15 vcolor-primary">Airfare & Ticket Level 1</h3>
	                <div class="col-xs-12 no-padding carrier-list__logos " style="padding-left: 20px !important;">
	            <div class="gb-icon-flights owl-carousel owl-theme">
	                <div>
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Vietnam-airlines.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Vietnam Airlines">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Transaero_Airlines.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Transaero Airlines">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Vietjet-air.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Vietjet Air">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Thai-airways.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Thai airways">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Malaysia-airlines.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Malaysia Airlines">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Shenzhen.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="Shenzhen">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Qatar-airlines.png" class="img-responsive" data-toggle="tooltip" data-placement="top" title="" data-original-title="Qatar airlines">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Malindo-air.png" class="img-responsive" data-toggle="tooltip" data-placement="top" title="" data-original-title="Malindo air">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Korean-Air.png" class="img-responsive" data-toggle="tooltip" data-placement="top" title="" data-original-title="Korean Air">
	                        </div>
	                    </div>
	                </div>
	                <div>
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Lao-Airlines.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lao Airlines">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Hahn-airlines.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Hahn airlines">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Japan-airlines.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Japan airlines">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Hong-Kong-airlines.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="HongKong airlines">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Finair.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Finair">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Emirates.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Emirates">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/China-Southern-Airlines.png" class="img-responsive" data-toggle="tooltip" data-placement="top" title="" data-original-title="China Southern Airlines">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/China-airlines.png" class="img-responsive" data-toggle="tooltip" data-placement="top" title="" data-original-title="China Airlines">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Delta-airlines-INC.png" class="img-responsive" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delta airlines INC">
	                        </div>
	                    </div>
	                </div>
	                <div>
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Bangkok-Airways-logo.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bangkok Airways">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Air-France.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Air France">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/all-nippon-airways-logo.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ana">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Air-Europa.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Air Europa">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Cathay-pacific.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cathay pacific">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/EVA-AIR.png" class="img-responsive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eva Air">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Aeroflot-Russian-Airlines.png" class="img-responsive" data-toggle="tooltip" data-placement="top" title="" data-original-title="Aeroflot Russian Airlines">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Bamboo-airways.png" class="img-responsive" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bamboo airways">
	                        </div>
	                    </div>                                                
	                    <div class="col-xs-4 logo-item">
	                        <div class="col-xs-12 logo-container ">
	                            <img src="/images/green/icon/flights/Jetstar-Pacific.png" class="img-responsive" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jetstar Pacific">
	                        </div>
	                    </div>
	                </div>
	                
	            </div>
	                </div>
	            </div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.jquery.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
<script type="text/javascript">
var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};

var states = [
<?php 
foreach ($list_airport as $item) { 
	$city = vi_en($item['city']);
	$city = ucfirst($city);
	?>
'<?= preg_replace("/[^a-zA-Z0-9\s]/", "", $city) . ', ' . str_replace("'", "", $item['country']) . ' - ' . str_replace("'", "", $item['name']) . ' ('.$item['iata'].')'?>',
<?php } ?>
];

$('.typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 0
},
{
  name: 'states',
  limit: 10,
  source: substringMatcher(states)
});
</script>
<script type="text/javascript">
	function from1f (data) {
		alert(data.value);
		var str = data.value;
		var res = str.match(/\([a-zA-Z0-9]*\)/i);
		if (res) {
			// alert(typeof res);
			res = res[0];
			res = res.substring(1);
			res = res.substring(0, res.length - 1);
			// alert(res);
			document.getElementById("form-1").value = res;
		} else {
			document.getElementById("form-1").value = '';
		}
		
	}

	function to1f (data) {
		alert(data.value);
		var str = data.value;
		var res = str.match(/\([a-zA-Z0-9]*\)/i);
		if (res) {
			// alert(typeof res);
			res = res[0];
			res = res.substring(1);
			res = res.substring(0, res.length - 1);
			// alert(res);
			document.getElementById("to-1").value = res;
		} else {
			document.getElementById("to-1").value = '';
		}
		
	}

	function set_airport_1 () {
		var from = document.getElementById("form1").value;
		var res = from.match(/\([a-zA-Z0-9]*\)/i);
		if (res) {
			res = res[0];
			res = res.substring(1);
			res = res.substring(0, res.length - 1);
			document.getElementById("form-1").value = res;
		} else {
			document.getElementById("form-1").value = '';
		}
		///////////////
		var to = document.getElementById("to1").value;
		res = to.match(/\([a-zA-Z0-9]*\)/i);
		if (res) {
			res = res[0];
			res = res.substring(1);
			res = res.substring(0, res.length - 1);
			document.getElementById("to-1").value = res;
		} else {
			document.getElementById("to-1").value = '';
		}
	}

	function set_airport_2 () {
		var from = document.getElementById("from2").value;
		var res = from.match(/\([a-zA-Z0-9]*\)/i);
		if (res) {
			res = res[0];
			res = res.substring(1);
			res = res.substring(0, res.length - 1);
			document.getElementById("from-2").value = res;
		} else {
			document.getElementById("from-2").value = '';
		}
		///////////////
		var to = document.getElementById("to2").value;
		res = to.match(/\([a-zA-Z0-9]*\)/i);
		if (res) {
			res = res[0];
			res = res.substring(1);
			res = res.substring(0, res.length - 1);
			document.getElementById("to-2").value = res;
		} else {
			document.getElementById("to-2").value = '';
		}
	}

	function set_url_1 () {
		// alert('set_url');
		var from = document.getElementById("form-1").value;
		var to = document.getElementById("to-1").value;
		var checkin = document.getElementById("dp1").value;
		var checkout = document.getElementById("dp2").value;
		var adult = document.getElementById("adult-1").value;
		var child = document.getElementById("child-1").value;
		var infant =document.getElementById("infant-1").value;

		if (from == '' || to == '' || checkin == '' || checkout == '') {
			return false;
		}

		window.location.href = "/index.php?page=filter&from="+from+"&to="+to+"&checkin="+checkin+"&checkout="+checkout+"&adult="+adult+"&child="+child+"&infant="+infant;
	}

	function set_url_2 () {
		// alert('set_url');
		var from = document.getElementById("from-2").value;
		var to = document.getElementById("to-2").value;
		var checkin = document.getElementById("dp3").value;
		var adult = document.getElementById("adult-2").value;
		var child = document.getElementById("child-2").value;
		var infant =document.getElementById("infant-2").value;

		if (from == '' || to == '' || checkin == '') {
			return false;
		}

		window.location.href = "/index.php?page=filter&from="+from+"&to="+to+"&checkin="+checkin+"&checkout=&adult="+adult+"&child="+child+"&infant="+infant;
	}
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

var checkin = $('#dp1').datepicker({

  beforeShowDay: function(date) {
    return date.valueOf() >= now.valueOf();
  },
  autoclose: true

}).on('changeDate', function(ev) {
  if (ev.date.valueOf() >= checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

    var newDate = new Date(ev.date);
    newDate.setDate(newDate.getDate() + 0);
    checkout.datepicker("update", newDate);

  }
  $('#dp2')[0].focus();
});


var checkout = $('#dp2').datepicker({
  beforeShowDay: function(date) {
    if (!checkin.datepicker("getDate").valueOf()) {
      return date.valueOf() >= new Date().valueOf();
    } else {
      return date.valueOf() >= checkin.datepicker("getDate").valueOf();
    }
  },
  autoclose: true

}).on('changeDate', function(ev) {});

var checkin1 = $('#dp3').datepicker({

  beforeShowDay: function(date) {
    return date.valueOf() >= now.valueOf();
  },
  autoclose: true

}).on('changeDate', function(ev) {});

</script>

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        $('.gb-icon-flights').owlCarousel({
            loop:true,
            margin:0,
            navSpeed:500,
            dots: true,
            autoplay: true,
            rewind: true,
            navText:[],
            items:1,
            responsive:{
                0:{
                    nav: false
                },
                767:{
                    nav:false
                }
            }
        });
    });
</script>