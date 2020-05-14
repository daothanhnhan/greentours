<?php 
    function uploadPicture($src, $img_name, $img_temp){

		$src = $src.$img_name;//echo $src;

		if (!@getimagesize($src)){

			if (move_uploaded_file($img_temp, $src)) {

				return true;

			}

		}

	}

	

	function khoi_hanh () {
		global $conn_vn;
		if (isset($_POST['add_trademark'])) {
			$src= "../images/";
			// $src = "uploads/";

			if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){

				uploadPicture($src, $_FILES['image']['name'], $_FILES['image']['tmp_name']);

			}

			$name = $_POST['name'];
			$ngay_di = $_POST['ngay_di'];
			$ngay_den = $_POST['ngay_den'];
			$price = $_POST['price'];
			$producttag_id = $_GET['producttag_id'];

			$giam = '';
			if (isset($_POST['giam'])) {
				$giam = json_encode($_POST['giam']);
                $giam = mysqli_real_escape_string($conn_vn, $giam);
			}

			$sql = "INSERT INTO khoi_hanh (name, ngay_di, ngay_den, price, giam, producttag_id) VALUES ('$name', '$ngay_di', '$ngay_den', $price, '$giam', $producttag_id)";//echo $sql;
			$result = mysqli_query($conn_vn, $sql);
			if ($result) {
				echo '<script type="text/javascript">alert(\'Bạn đã thêm được một Khởi hành.\');window.location.href="index.php?page=khoi-hanh&producttag_id='.$producttag_id.'"</script>';
			} else {
				echo '<script type="text/javascript">alert(\'Có lỗi xảy ra.\')</script>';
				// echo mysqli_error($conn_vn);
			}
			
		}
	}

	khoi_hanh();
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="rowNodeContentPage">
        <div class="leftNCP">
            <span class="titLeftNCP">Nội dung </span>
            <p class="subLeftNCP">Nhập thông tin khởi hành<br /><br /></p>     
            <p class="subLeftNCP"><a href="index.php?page=khoi-hanh&producttag_id=<?= $_GET['producttag_id'] ?>">Quay lại</a><br /><br /></p>     
                    
        </div>
        <div class="boxNodeContentPage">
            <p class="titleRightNCP">Tên</p>
            <input type="text" class="txtNCP1" name="name" required/>
            <p class="titleRightNCP">Ngày đi</p>
            <input type="date" class="txtNCP1" name="ngay_di" required/>
            <p class="titleRightNCP">Ngày đến</p>
            <input type="date" class="txtNCP1" name="ngay_den" required/>
            <p class="titleRightNCP">Giá</p>
            <input type="number" class="txtNCP1" name="price" required/>
            
        </div>
    </div><!--end rowNodeContentPage-->

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý Giảm giá</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <button type="button" onclick="add_size()">Thêm</button>

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Giảm giá</p>
                    <div id="size">
                                
                    </div>                    

                </div>    

            </div><!--end rowNCP-->

        </div>

    </div>

    <script type="text/javascript">
        function add_size () {
            var size = document.getElementById('size').innerHTML;
            document.getElementById('size').innerHTML = size + '<div class="del-input"><input type="text" class="txtNCP1" value="" name="giam[]"/><button type="button" onclick="del_size(this)">Xóa</button></div>';
        }

        function del_size (input) {
            document.getElementById('size').removeChild(input.parentNode);
        }
    </script>
    
    <button class="btn btnSave" type="submit" name="add_trademark">Lưu</button>
</form>
            
<p class="footerWeb">Cảm ơn quý khách hàng đã tin dùng dịch vụ của chúng tôi<br />Sản phẩm thuộc Công ty TNHH Truyền Thông Và Công Nghệ Cafelink Việt Nam</p>