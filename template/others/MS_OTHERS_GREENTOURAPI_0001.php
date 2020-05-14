<?php
//Hàm mã hóa dữ liệu
function Booking_MakeHash($AgentCode, $From, $To, $DayDepart, $MonthDepart, $YearDepart, $DayReturn, $MonthReturn, $YearReturn, $Type, $ADT, $CHD, $SecurityCode)
{
	return strtoupper(md5($AgentCode . $From . $To . $DayDepart . $MonthDepart . $YearDepart . $DayReturn . $MonthReturn . $YearReturn . $Type . $ADT . $CHD . $SecurityCode));
}

//*********************
$agentCode = "GRE"; 									//AgentCode trong tài liệu tích hợp
$securityCode = "3ov0q1q2kMonaaSrTLNJCibEUGpyYsTdZT1W6X0sn4C5LA1VCx4"; 								//SecurityCode trong tài liệu tích hợp
//*********************

$error_msg = "";
$redirectURL = "https://oth.muadi.com.vn/";			//Domain mặc định có thể thay đổi
$booking_url = "";

//Nhận dữ liệu truyền vào
$flightType = $_POST['flight_type'];
$dep = $_POST['ddlDepartCity'];
$ret = $_POST['ddlReturnCity'];
$departDate = $_POST['dtpDepartDate'];
$splitDate = split("/", $departDate);
$departDay = $splitDate[1];
$departMonth = $splitDate[0];
$departYear = $splitDate[2];

$returnDate = $_POST['dtpReturnDate'];
if($flightType == "roundway")
{
	$splitDate = split("/", $returnDate);
	$returnDay = $splitDate[1];
	$returnMonth = $splitDate[0];
	$returnYear = $splitDate[2];
}
else
{
	$returnDay = date("d");
	$returnMonth = date("m");
	$returnYear = date("Y");
}
$ADT = $_POST['ddlADT'];
$CHD = $_POST['ddlCHD'];
$INF = $_POST['ddlINF'];

$contact = '';
if ($_POST['name'] != '') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$contact = "&CustomerName=$name&CustomerEmail=$email&CustomerPhone=$phone&CustomerAddress=$address";
}

//Kiểm tra tính hợp lệ của dữ liệu
if($dep != "" && $ret != "" && is_numeric($departDay) && is_numeric($departMonth) && is_numeric($ADT) && is_numeric($CHD) && is_numeric($INF))
{
	$check = true;
	if(checkdate($departMonth, $departDay, $departYear))
	{
		if(mktime(0, 0, 0, $departMonth, $departDay, $departYear) < mktime(0, 0, 0))
		{
			$check = false;
			$error_msg = "Ngày đi sau ngày hiện tại";
		}
	}
	else
	{
		$check = false;
		$error_msg = "Ngày đi không hợp lệ";
	}
	if($flightType == "roundway")
	{
		if(checkdate($returnMonth, $returnDay, $returnYear))
		{
			if(mktime(0, 0, 0, $returnMonth, $returnDay, $returnYear) < mktime(0, 0, 0))
			{
				$check = false;
				$error_msg = "Ngày về sau ngày hiện tại";
			}
			if(mktime(0, 0, 0, $returnMonth, $returnDay, $returnYear) < mktime(0, 0, 0, $departMonth, $departDay, $departYear))
			{
				$check = false;
				$error_msg = "Ngày về sau ngày đi";
			}
		}
		else
		{
			$check = false;
			$error_msg = "Ngày về không hợp lệ";
		}
	}
	if($ADT == 0 && $CHD == 0)
	{
		$check = true;
		$error_msg = "Số người lớn và trẻ em đều bằng không";
	}
	if($ADT + $CHD > 9)
	{
		$check = true;
		$error_msg = "Tổng số người đi quá lớn";
	}
	
	//Kiểm tra dữ liệu thành công
	if($check)
	{
		
		//Mã hóa lại dữ liệu để tránh bị thay đổi trong quá trình truyền đi
		$hash = Booking_MakeHash($agentCode, $dep, $ret, $departDay, $departMonth, $departYear, $returnDay, $returnMonth, $returnYear, $flightType, $ADT, $CHD, $securityCode);
		
		//Ghép dữ liệu tạo ra chuỗi URL
		$booking_url = $redirectURL . "Booking_Redirect.aspx?From=" . $dep . "&DayDepart=" . $departDay . "&MonthDepart=" . $departMonth . "&YearDepart=" . $departYear . "&To=" . $ret . "&DayReturn=" . $returnDay . "&MonthReturn=" . $returnMonth . "&YearReturn=" . $returnYear . "&ADT=" . $ADT . "&CHD=" . $CHD . "&INF=" . $INF . "&Type=" . $flightType . "&Agent=" . $agentCode . "&vHash=2&Hash=" . $hash . "&Lang=en&Cur=USD";
	}
}
else
{
	$error_msg = "Các tham số truyền vào không hợp lệ";
}
//&Lang=vn&Cur=VND&Lang=us&Cur=USD
?>


    	<div style="color: red; font-weight:bold; text-align:center;"><?php echo $error_msg ?></div>
        <div class="container">
        	<?php
				if($booking_url != "")
				{
					echo "
					
					<iframe id='bookingframe' src='" . $booking_url . "' width='100%' height='1000' style='border: 0px none;'></iframe>";
				}
			?>
        </div>
        
        <script language="javascript">
			var frameID = 'bookingframe';
			var isLoadedFlight = false;
			var isNewPage = false;
		</script>
		<script type="text/javascript" src="https://oth.muadi.com.vn/JS/resizeFrame.js?v=22042014"></script>
