<?php 
    $message = "";
    function doi_pass () {
        global $conn_vn;
        global $message;
        if (isset($_POST['change_pass'])) {
            $pass1 = trim($_POST['pass1']);
            $pass2 = trim($_POST['pass2']);
            $user_id = $_SESSION['user_id_gbvn'];
            if ($pass1 != $pass2) {
                $message = "Password incorrect.";
            } else {
                $pass = password_hash($pass1, PASSWORD_DEFAULT);
                $sql = "UPDATE user SET user_password = '$pass' WHERE user_id = $user_id";
                $result = mysqli_query($conn_vn, $sql);
                if ($result) {
                    echo '<script>alert(\'You have successfully changed your password.\');</script>';
                } else {
                    echo '<script>alert(\'An error occurred.\');</script>';
                }
                
            }
        }
    }
    if (isset($_SESSION['user_id_gbvn'])) {
        doi_pass();
    }
    
?>
<?php $title = 'Transaction management'; ?>
<div class="container">
    <?php include DIR_BREADCRUMBS."MS_BREADCRUMS_DENMOC_0004.php";?>
    <div class="row">
        <div class="col-md-3">
            <?php include DIR_REGISTER."MS_REGISTER_EXCEL_0006.php";?>
        </div>
        <div class="col-md-9">
            <h1 class="title-khoahoc"><i class="fa fa-bookmark" aria-hidden="true"></i> Change Password</h1>
            <p style="color: red;"><?= $message ?></p>
            <form action="" method="post">
                <div class="form-group">
                    <label>Enter password:</label>
                    <input type="password" class="form-control" name="pass1" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label>Confirm password:</label>
                    <input type="password" class="form-control" name="pass2" placeholder="Password" required>
                </div>
                
                <div class="form-group">
                    <button type="submit" name="change_pass" class="btn btn-success" style="background: #6d9524;">Update</button>
                    <!-- <a href="/thong-tin-ca-nhan" class="btn btn-danger" role="button">Hủy</a> -->
                </div>
            </form>
        </div>
    </div>
</div>                            