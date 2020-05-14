<?php 
    function uploadPicture($src, $img_name, $img_temp){

		$src = $src.$img_name;//echo $src;

		if (!@getimagesize($src)){

			if (move_uploaded_file($img_temp, $src)) {

				return true;

			}

		}

	}

	

	function cam_nhan () {
		global $conn_vn;
		if (isset($_POST['add_camnhan'])) {
			$src= "../images/";
			// $src = "uploads/";

			if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){

				uploadPicture($src, $_FILES['image']['name'], $_FILES['image']['tmp_name']);

			}

			$name = $_POST['name'];
			$note = $_POST['note'];
			$tu = $_POST['tu'];
			$image = $_FILES['image']['name'];

			$sql = "INSERT INTO cam_nhan (name, note, tu, image) VALUES ('$name', ?, '$tu', '$image')";
			$stmt = $conn_vn->prepare($sql);
			$stmt->bind_param("s", $note);
			$stmt->execute();
			// $result = mysqli_query($conn_vn, $sql);
			echo '<script type="text/javascript">alert(\'Bạn đã thêm cảm nhận thành công.\');window.location.href="index.php?page=cam-nhan"</script>';
		}
	}

	cam_nhan();
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="rowNodeContentPage">
        <div class="leftNCP">
            <span class="titLeftNCP">Nội dung </span>
            <p class="subLeftNCP">Nhập thông tin Promises<br /><br /></p>     
                    
        </div>
        <div class="boxNodeContentPage">
            <p class="titleRightNCP">Tên</p>
            <input type="text" class="txtNCP1" name="name" required/>
            <p class="titleRightNCP">Nội dung</p>
            <textarea name="note" class="titleRightNCP" rows="5" required></textarea>
            <p class="titleRightNCP">Đến từ</p>
            <input type="text" class="txtNCP1" name="tu" />
            <p class="titleRightNCP">Ảnh</p>
            <input type="file" class="txtNCP1" name="image" required/>
            
        </div>
    </div><!--end rowNodeContentPage-->
    
    <button class="btn btnSave" type="submit" name="add_camnhan">Lưu</button>
</form>
            
<p class="footerWeb">Cảm ơn quý khách hàng đã tin dùng dịch vụ của chúng tôi<br />Sản phẩm thuộc Công ty TNHH Truyền Thông Và Công Nghệ GoldBridge Việt Nam</p>