<?php 
    function uploadPicture($src, $img_name, $img_temp){

		$src = $src.$img_name;//echo $src;

		if (!@getimagesize($src)){

			if (move_uploaded_file($img_temp, $src)) {

				return true;

			}

		}

	}

	

	function our_contact ($id) {
		global $conn_vn;
		if (isset($_POST['add_contact'])) {
			$src= "../images/";
			// $src = "uploads/";

			$image = '';
			if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){

				uploadPicture($src, $_FILES['image']['name'], $_FILES['image']['tmp_name']);
				$image = $_FILES['image']['name'];

			}

			$position = $_POST['position'];
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];

			$add = '';
			if ($image != '') {
				$add = ", image = '$image'";
			}

			$sql = "UPDATE our_contact SET position = '$position', name = '$name', phone = '$phone', email = '$email' $add WHERE id = $id";
			$result = mysqli_query($conn_vn, $sql);
			if ($result) {
				echo '<script type="text/javascript">alert(\'Bạn đã sửa được một our contact.\')</script>';
			} else {
				echo '<script type="text/javascript">alert(\'Có lỗi xảy ra.\')</script>';
			}
			
		}
	}

	our_contact($_GET['id']);

	$info = $action->getDetail('our_contact', 'id', $_GET['id']);
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="rowNodeContentPage">
        <div class="leftNCP">
            <span class="titLeftNCP">Nội dung </span>
            <p class="subLeftNCP">Nhập thông tin our contace<br /><br /></p>     
            <p class="subLeftNCP"><a href="index.php?page=our-contact">Quay lại</a><br /><br /></p>     
                    
        </div>
        <div class="boxNodeContentPage">
            <p class="titleRightNCP">Lĩnh vực</p>
            <input type="text" class="txtNCP1" name="position" value="<?= $info['position'] ?>" required/>
            <p class="titleRightNCP">Tên</p>
            <input type="text" class="txtNCP1" name="name" value="<?= $info['name'] ?>" required/>
            <p class="titleRightNCP">Phone</p>
            <input type="text" class="txtNCP1" name="phone" value="<?= $info['phone'] ?>" required/>
            <p class="titleRightNCP">Email</p>
            <input type="email" class="txtNCP1" name="email" value="<?= $info['email'] ?>" required/>
            <p class="titleRightNCP">Image</p>
            <input type="file" class="txtNCP1" name="image" />
            <img src="/images/<?= $info['image'] ?>" alt="" style="width: 200px;">
        </div>
    </div><!--end rowNodeContentPage-->
    
    <button class="btn btnSave" type="submit" name="add_contact">Lưu</button>
</form>
            
<p class="footerWeb">Cảm ơn quý khách hàng đã tin dùng dịch vụ của chúng tôi<br />Sản phẩm thuộc Công ty TNHH Truyền Thông Và Công Nghệ Cafelink Việt Nam</p>