<?php 
    function uploadPicture($src, $img_name, $img_temp){

		$src = $src.$img_name;//echo $src;

		if (!@getimagesize($src)){

			if (move_uploaded_file($img_temp, $src)) {

				return true;

			}

		}

	}

	

	function hanh_trinh ($id) {
		global $conn_vn;
		if (isset($_POST['add_hanh_trinh'])) {
			$src= "../images/";
			// $src = "uploads/";

			if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){

				uploadPicture($src, $_FILES['image']['name'], $_FILES['image']['tmp_name']);

			}

			try {
				$name = $_POST['name'];
				$note = $_POST['note'];

				$sql = "UPDATE itinerary SET name = ?, note = ? WHERE id = $id";
				$stmt = $conn_vn->prepare($sql);
				$stmt->bind_param("ss", $name, $note);
				$stmt->execute();

				echo '<script type="text/javascript">alert(\'Bạn đã sửa được một hành trình.\')</script>';
			}
			catch (Exception $e) {
				echo '<script type="text/javascript">alert(\'Có lỗi xảy ra.\')</script>';
			}
			
		}
	}

	hanh_trinh($_GET['id']);

	$info = $action->getDetail('itinerary', 'id', $_GET['id']);
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="rowNodeContentPage">
        <div class="leftNCP">
            <span class="titLeftNCP">Nội dung </span>
            <p class="subLeftNCP">Nhập thông tin hành trình<br /><br /></p>     
            <p class="subLeftNCP"><a href="index.php?page=hanh-trinh&product_id=<?= $info['product_id'] ?>">Quay lại</a><br /><br /></p>     
                    
        </div>
        <div class="boxNodeContentPage">
            <p class="titleRightNCP">Tên</p>
            <input type="text" class="txtNCP1" name="name" value="<?= $info['name'] ?>" required/>
            <p class="titleRightNCP">Nội dung</p>
            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor4" name="note"><?= $info['note'] ?></textarea></p>
            
        </div>
    </div><!--end rowNodeContentPage-->
    
    <button class="btn btnSave" type="submit" name="add_hanh_trinh">Lưu</button>
</form>
            
<p class="footerWeb">Cảm ơn quý khách hàng đã tin dùng dịch vụ của chúng tôi<br />Sản phẩm thuộc Công ty TNHH Truyền Thông Và Công Nghệ Cafelink Việt Nam</p>