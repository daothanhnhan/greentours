<?php 
    $message_login = '';

    function randomString($length = 6) {
        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }

    function dangnhap () {
        global $conn_vn;
        global $message_login;
        if (isset($_POST['login'])) {
            $phone = ($_POST['phone']==NULL) ? '' : $_POST['phone'];
            $pass = ($_POST['pass']==NULL) ? '' : $_POST['pass'];

            $sql = "SELECT * FROM user Where user_phone = '$phone'";
            $result = mysqli_query($conn_vn, $sql);
            $num = mysqli_num_rows($result);
            if ($num == 0) {
                $message_login = "<div class='alert alert-danger'>Mật khẩu hoặc Số điện thoại không đúng</div>";
            } else {
                $row = mysqli_fetch_assoc($result);
                $pass_hash = $row['user_password'];
                if (password_verify($pass, $pass_hash)) {
                    $_SESSION['user_id_gbvn'] = $row['user_id'];
                    $_SESSION['user_phone_gbvn'] = $row['user_phone'];
                    $_SESSION['user_name_gbvn'] = $row['user_name'];
                    // $_SESSION['session_id'] = session_id();
                    if (isset($_POST['rememberme'])) {
                        $identify = randomString(20);
                        $token = randomString(30);
                        $cooki = $identify . ':' . $token;

                        setcookie('user_id_trichdan', $cooki, time() + 2592000);
                        $sql_me = "UPDATE user SET remember_me_identify = '$identify', remember_me_token = '$token' Where user_id = " . $row['user_id'];
                        $result_me = mysqli_query($conn_vn, $sql_me);
                    }
                    echo '<script type="text/javascript">alert(\'Bạn đã đăng nhập thành công!\'); window.location.href = "/";</script>';
                } else {
                    $message_login = "<div class='alert alert-danger'>Mật khẩu hoặc Số điện thoại không đúng</div>";
                }
            }
        }
    }

    dangnhap();
?>
<div class="gb-lienhe">
    <div class="container">



        <h2 class="gb-team-chili-ttlienhe">Đăng Nhập Tài Khoản.</h2>

        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">

                <div class="gb-form-dangnhap">

                    <form action="" method="post">

                        <?= $message_login ?>

                        <div class="form-group">

                            <div class="row">

                                <div class="col-sm-3">

                                    <label>Số Điện Thoại*</label>

                                </div>

                                <div class="col-sm-9 gb-formsdt">

                                    <input placeholder="Số Điện Thoại" type="text" name="phone" class="form-control" required>

                                </div>

                            </div>

                        </div>



                        <div class="form-group">

                            <div class="row">

                                <div class="col-sm-3">

                                    <label>Mật Khẩu*</label>

                                </div>

                                <div class="col-sm-9">

                                    <input placeholder="Mật Khẩu" type="password" name="pass"

                                           class="form-control" required>

                                </div>



                                <div class="col-sm-9 col-sm-offset-3">

                                    <div class="quen-mat-khau">

                                        <a href="">Quên mật Khẩu?</a>

                                    </div>

                                </div>

                                <div class=" col-sm-4 col-sm-offset-3">

                                    <button class="btn btn-gui" name="login">Đăng Nhập</button>

                                </div>

                            </div>

                        </div>



                    </form>

                </div>

                <div class="gb-dangkytk"><a href="dang-ky">Bạn chưa có tài khoản? Đăng Ký</a></div>

            </div>



        </div>





    </div>

</div>





    <!--    <div class="container">-->

    <!--        <div class="row">-->

    <!--            <div class="col-md-6">-->

    <!--                --><?php //include DIR_EMAIL."MS_EMAIL_CHILI_0003.php";?>

    <!--            </div>-->

    <!--        </div>-->

    <!--    </div>-->

    <!--    --><?php //include DIR_CONTACT."MS_CONTACT_CHILI_0006.php";?>

</div>