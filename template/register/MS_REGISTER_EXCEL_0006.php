<?php
	if (!isset($_SESSION['user_id_gbvn'])) {
		header('location: /');
	}
	$slug = $_GET['slug'];
	$active = 'active';
	function check_type_account () {
		global $conn_vn;
		$user_id = $_SESSION['user_id_gbvn'];
		$sql = "SELECT * FROM user WHERE user_id = $user_id";
		$result = mysqli_query($conn_vn, $sql);
		$row = mysqli_fetch_assoc($result);
		if ($row['id_fb'] != '' || $row['id_go'] != '') {
			return 'false';
		} else {
			return 'true';
		}
	}
	$kq_check_type_account = check_type_account();
?>
<div class="order">
	<ul class="infor-user">
		<li><h3 class="title-infor">Transaction management</h3></li>		
		<li class="<?php if($slug == 'list-order-visa'){ echo $active; } ?>"><a href="/list-order-visa" title=""><i class="fa fa-shopping-bag" aria-hidden="true"></i> Visa application</a></li>
		<li class="<?php if($slug == 'thong-tin-tai-khoan'){ echo $active; } ?>"><a href="/thong-tin-tai-khoan" title=""><i class="fa fa-user" aria-hidden="true"></i> account information</a></li>
		<?php if ($kq_check_type_account == 'true') { ?>
		<li class="<?php if($slug == 'doi-mat-khau'){ echo $active; } ?>"><a href="/doi-mat-khau" title=""><i class="fa fa-user" aria-hidden="true"></i> Change Password</a></li>
		<?php } ?>
		<!-- <li class="<?php if($slug == 'thong-tin-bao-hanh'){ echo $active; } ?>"><a href="/thong-tin-bao-hanh" title=""><i class="fa fa-user" aria-hidden="true"></i> Thông tin bao hành</a></li> -->
		<li><a href="/dang-xuat"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></li>
	</ul>
</div>