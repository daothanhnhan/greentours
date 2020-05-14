<?php 
    function uploadPicture($src, $img_name, $img_temp){

		$src = $src.$img_name;//echo $src;

		if (!@getimagesize($src)){

			if (move_uploaded_file($img_temp, $src)) {

				return true;

			}

		}

	}

	

	function cau_hoi () {
		global $conn_vn;
		if (isset($_POST['add_faqs'])) {
			$src= "../images/";
			// $src = "uploads/";

			$image = '';
			if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){

				uploadPicture($src, $_FILES['image']['name'], $_FILES['image']['tmp_name']);
				$image = $_FILES['image']['name'];

			}

			try {
				$productcat_id = $_POST['productcat_id'];
				$name = $_POST['name'];
				$name = mysqli_real_escape_string($conn_vn, $name);
				$note = $_POST['note'];

				$sql = "INSERT INTO tourcat_faqs (productcat_id, name, note) VALUES ($productcat_id, '$name', ?)";
				$stmt = $conn_vn->prepare($sql);
				$stmt->bind_param("s", $note);
				$stmt->execute();

				echo '<script type="text/javascript">alert(\'Bạn đã thêm được một câu hỏi.\');window.location.href="index.php?page=danh-muc-tour-faqs&productcat_id='.$productcat_id.'"</script>';
			}
			catch (Exception $e) {
				echo '<script type="text/javascript">alert(\'Có lỗi xảy ra.\')</script>';
			}
			
		}
	}

	cau_hoi();
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="rowNodeContentPage">
        <div class="leftNCP">
            <span class="titLeftNCP">Nội dung </span>
            <p class="subLeftNCP">Nhập thông tin FAQS<br /><br /></p>     
            <p class="subLeftNCP"><a href="index.php?page=danh-muc-tour-faqs&productcat_id=<?= $_GET['productcat_id'] ?>">Quay lại</a><br /><br /></p>     
                    
        </div>
        <div class="boxNodeContentPage">
        	<input type="hidden" name="productcat_id" value="<?= $_GET['productcat_id'] ?>">
            <p class="titleRightNCP">Tên FAQS</p>
            <input type="text" class="txtNCP1" name="name" required/>
            <p class="titleRightNCP">Nội dung</p>
            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor4" name="note"></textarea></p>
            
        </div>
    </div><!--end rowNodeContentPage-->
    
    <button class="btn btnSave" type="submit" name="add_faqs">Lưu</button>
</form>
            
<p class="footerWeb">Cảm ơn quý khách hàng đã tin dùng dịch vụ của chúng tôi<br />Sản phẩm thuộc Công ty TNHH Truyền Thông Và Công Nghệ Cafelink Việt Nam</p>