<?php
    $message = "";

    function update_infor(){
        global $conn_vn;
        if(isset($_POST['update_infor'])){
            $name = ($_POST['name']==NULL) ? '' : $_POST['name'];
            $email = ($_POST['email']==NULL) ? '' : $_POST['email'];
            $address = ($_POST['address']==NULL) ? '' : $_POST['address'];
            $phone = ($_POST['phone']==NULL) ? '' : $_POST['phone'];

            $sql = "UPDATE user SET user_name = '$name', user_phone = '$phone', user_address = '$address' Where user_id = " . $_SESSION['user_id_gbvn'];
            $result = mysqli_query($conn_vn, $sql) or die('error: ' . mysqli_error($conn_vn));
            echo '<script type="text/javascript">alert(\'Information updated successfully!\'); window.location.href = "/thong-tin-tai-khoan";</script>';
        }
    }

    update_infor();

    function get_list_user(){
        global $conn_vn;
        $id = $_SESSION['user_id_gbvn'];
        $sql = "SELECT * FROM user Where user_id = '$id'";
        $result = mysqli_query($conn_vn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    $list_user = get_list_user();
?>
<div class="gb-register1">
     <h1 class="title-khoahoc"><i class="fa fa-bookmark" aria-hidden="true"></i> My account</h1>
    <form action="" method="post">
        <div class="form-group">
            <label>Full name:</label>
            <input type="text" class="form-control" name="name" placeholder="Họ và tên" value="<?= $list_user['user_name'] ?>" required>
        </div>
        <div class="form-group">
                <label>Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Địa chỉ Email" value="<?= $list_user['user_email'] ?>" disabled>
        </div>
        <div class="form-group">
            <label>Address:</label>
            <input type="text" class="form-control" name="address" placeholder="Địa chỉ" value="<?= $list_user['user_address'] ?>" required>
        </div>
        <div class="form-group">
            <label>Number phone:</label>
            <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" value="<?= $list_user['user_phone'] ?>" required>
        </div>
        <div class="form-group">
            <button type="submit" name="update_infor" class="btn btn-success" style="background: #6d9524;">Update</button>
            <!-- <a href="/thong-tin-ca-nhan" class="btn btn-danger" role="button">Hủy</a> -->
        </div>
    </form>
</div>
<style type="text/css" media="screen">
	.gb-register1 label{padding-bottom: 10px;}
    .title-khoahoc{
        font-size: 18px;
        text-transform: uppercase;
        padding-bottom: 15px;
        color: #6d9524;
    }
    .ten-khoahoc{color: #207244;}
</style>