<?php 
    function uploadPicture($src, $img_name, $img_temp){

		$src = $src.$img_name;//echo $src;

		if (!@getimagesize($src)){

			if (move_uploaded_file($img_temp, $src)) {

				return true;

			}

		}

	}

	

	function why ($id) {
		global $conn_vn;
		if (isset($_POST['add_promises'])) {
			$src= "../images/";
			// $src = "uploads/";

			$image = '';
			if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){

				uploadPicture($src, $_FILES['image']['name'], $_FILES['image']['tmp_name']);
				$image = $_FILES['image']['name'];
			}

			$name = $_POST['name'];
			$note = $_POST['note'];
			// $icon = $_POST['icon'];
			$add = '';;
			if ($image != '') {
				$add = ", icon = '$image'";
			}

			$sql = "UPDATE why SET name = '$name', note = '$note' $add WHERE id = $id";
			$result = mysqli_query($conn_vn, $sql);
			if ($result) {
				echo '<script type="text/javascript">alert(\'Bạn đã sửa được một why.\')</script>';
			} else {
				echo '<script type="text/javascript">alert(\'Có lỗi xảy ra.\')</script>';
			}
			
		}
	}

	why($_GET['id']);
	$info = $action->getDetail('why', 'id', $_GET['id']);
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="rowNodeContentPage">
        <div class="leftNCP">
            <span class="titLeftNCP">Nội dung </span>
            <p class="subLeftNCP">Nhập thông tin why<br /><br /></p>     
            <p class="subLeftNCP"><a href="index.php?page=why">Quay lại</a><br /><br /></p>     
                    
        </div>
        <div class="boxNodeContentPage">
            <p class="titleRightNCP">Icon </p>
            <input type="file" class="txtNCP1" name="image" value=""  />
            <img src="/images/<?= $info['icon'] ?>" alt="" style="width: 100px;">
            <p class="titleRightNCP">Note </p>
            <input type="text" class="txtNCP1" name="note" value="<?= $info['note'] ?>" required />
            <p class="titleRightNCP">Name </p>
            <input type="text" class="txtNCP1" name="name"  value="<?= $info['name'] ?>" required />
            
        </div>
    </div><!--end rowNodeContentPage-->
    
    <button class="btn btnSave" type="submit" name="add_promises">Lưu</button>
</form>
            
<p class="footerWeb">Cảm ơn quý khách hàng đã tin dùng dịch vụ của chúng tôi<br />Sản phẩm thuộc Công ty TNHH Truyền Thông Và Công Nghệ Cafelink Việt Nam</p>
<!-- fa fa-handshake-o  fa fa-globe  fa fa-archive -->