<?php 
    $message = "";

    function dangky () {
        global $conn_vn;
        global $message;
        if (isset($_POST['register'])) {
            $check = 'true';
            $name = ($_POST['name']==NULL) ? '' : trim($_POST['name']);
            $phone = ($_POST['phone']==NULL) ? '' : $_POST['phone'];
            $birthday = ($_POST['birthday']==NULL) ? '' : $_POST['birthday'];
            $pass1 = ($_POST['pass1']==NULL) ? '' : $_POST['pass1'];
            $pass2 = ($_POST['pass2']==NULL) ? '' : $_POST['pass2'];
            $address = $_POST['address'];

            // Check email isset
            $sql_phone = "SELECT * FROM user Where user_phone = '$phone'";
            $result_phone = mysqli_query($conn_vn, $sql_phone);
            $row_phone = mysqli_num_rows($result_phone);

            if ($row_phone > 0) {
                $check = "false";
                $message .= "<div class='alert alert-danger'>Số điện thoại đã tồn tại</div>";
            }

            if ($pass1 != $pass2) {
                $check = "false";
                $message .= "<div class='alert alert-danger'>Mật khẩu không khớp</div>";
            }

            if ($check == "true") {
                $pass = password_hash($pass1, PASSWORD_DEFAULT);
                $sql = "INSERT INTO user (user_name, user_phone, user_birthday, user_address, user_password) VALUES ('$name', '$phone', '$birthday', '$address', '$pass')";
                $result = mysqli_query($conn_vn, $sql);
                if ($result) {
                    $sql_user = "SELECT * FROM user Where user_phone = '$phone'";
                    $result_user = mysqli_query($conn_vn, $sql_user);
                    $row_user = mysqli_fetch_assoc($result_user);
                    $_SESSION['user_id_gbvn'] = $row_user['user_id'];
                    $_SESSION['user_phone_gbvn'] = $row_user['user_phone'];
                    $_SESSION['user_name_gbvn'] = $row_user['user_name'];
                    echo '<script type="text/javascript">alert(\'Bạn đã đăng ký thành công!\'); window.location.href = "/dang-nhap";</script>';
                } else {
                    echo '<script type="text/javascript">alert(\'Có lỗi xảy ra!\')</script>';
                }
                
            }
        }
    }

    dangky();
?>
<div class="gb-lienhe">

    <?php include DIR_CONTACT . "MS_CONTACT_CHILI_0001.php"; ?>

    <div class="container">



        <h2 class="gb-team-chili-ttlienhe">Đăng Ký Tài Khoản</h2>

        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">

                <div class="gb-form-dangky">

                    <form action="" method="post">
                        <?= $message ?>
                        <div class="form-group">

                            <div class="row">

                                <div class="col-sm-3">

                                    <label>Họ Và Tên*</label>

                                </div>

                                <div class="col-sm-9 gb-formsdt">

                                    <input placeholder="Họ Và Tên" type="text" name="name" class="form-control" required>

                                </div>

                            </div>

                        </div>

                        <div class="form-group">

                            <div class="row">

                                <div class="col-sm-3">

                                    <label>Số Điện Thoại*</label>

                                </div>

                                <div class="col-sm-9 gb-formsdt">

                                    <input placeholder="Số Điện Thoại" type="number" name="phone" class="form-control" required>

                                </div>

                            </div>

                        </div>



                        <div class="form-group">

                            <div class="row">

                                <div class="col-sm-3">

                                    <label>Địa Chỉ</label>

                                </div>

                                <div class="col-sm-9 gb-formsdt">

                                    <input placeholder="Địa chỉ" type="text" name="address" class="form-control" >

                                </div>

                            </div>

                        </div>





                        <div class="form-group">

                            <div class="row">

                                <div class="col-sm-3">

                                    <label>Ngày Sinh*</label>

                                </div>

                                <div class="col-sm-9 gb-formsdt">

                                    <input type="date" name="birthday" class="form-control" required>

                                </div>

                            </div>

                        </div>


                        <div class="gb-matkhau">
                        <div class="form-group">

                            <div class="row">

                                <div class="col-sm-3">

                                    <label>Mật Khẩu*</label>

                                </div>

                                <div class="col-sm-9">

                                    <input placeholder="Mật Khẩu" type="password" name="pass1"

                                           class="form-control" required>

                                </div>

                            </div>

                        </div>
                        </div>
                        <div class="form-group">
                            <div class="row">

                                <div class="col-sm-3">

                                    <label>Nhập Lại Mật Khẩu*</label>

                                </div>

                                <div class="col-sm-9">

                                    <input placeholder="Nhập Lại Mật Khẩu" type="password" name="pass2"

                                           class="form-control" required>

                                </div>

                            </div>
                        </div>
                        <div class="row">

                            <div class=" col-sm-4 col-sm-offset-3">

                                <button class="btn btn-gui" name="register">Đăng Ký</button>

                            </div>

                        </div>

                    </form>



                </div>



                <!-- <div class="gb-checkbox">

                    <input type="checkbox">

                    Đăng ký chương trình khuyễn mại dành cho sinh viên.

                </div>



                <div class="gb-checkbox">

                    <input type="checkbox">

                    Đăng ký khách hàng thân thiết.

                </div> -->

                

                <div class="gb-dangkytk"><a href="dang-nhap">Bạn đã có tài khoản? Đăng Nhập</a></div>

            </div>



        </div>





    </div>

</div>

</div>