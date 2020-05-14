<?php 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_service->getServiceLangDetail_byUrl($slug,$lang);//var_dump($rowLang);
    $row = $action_service->getServiceDetail_byId($rowLang['service_id'],$lang);
    $_SESSION['sidebar'] = 'newsDetail';
?>
<?php 
    function uploadPicture($src, $img_name, $img_temp){

        $src = $src.$img_name;//echo $src;

        if (!@getimagesize($src)){

            if (move_uploaded_file($img_temp, $src)) {

                return true;

            }

        }

    }

    function apply_job () {
        // var_dump($_POST);
        global $conn_vn;
        if (isset($_POST['apply'])) {
            $name = mysqli_real_escape_string($conn_vn, $_POST['name']);
            $email = mysqli_real_escape_string($conn_vn, $_POST['email']);
            $phone = mysqli_real_escape_string($conn_vn, $_POST['phone']);
            $note = mysqli_real_escape_string($conn_vn, $_POST['note']);
            $job = mysqli_real_escape_string($conn_vn, $_POST['job']);

            $src= "images/files/";
            $file = '';
            $now = strtotime("now");
            
            if(isset($_FILES['file']) && $_FILES['file']['name'] != ""){

                $file_name = $now.'-'.$_FILES['file']['name'];
                uploadPicture($src, $file_name, $_FILES['file']['tmp_name']);
                $file = $file_name;

            }

            $sql = "INSERT INTO apply_job (name, email, phone, note, file, job) VALUES ('$name', '$email', '$phone', '$note', '$file', '$job')";
            $result = mysqli_query($conn_vn, $sql);
            if ($result) {
                echo '<script type="text/javascript">alert(\'Apply for this job. Success!\')</script>';
            } else {
                echo '<script type="text/javascript">alert(\'An error occurred.\')</script>';
            }
        }
    }
    apply_job();
?>
<div class="tz-single">
    <div class="tz-post-content">
        <div class="container">
            <div class="tzsingle-career-title">
                <div class=" pull-left">
                    <h2 class="tzsingle-title"><?= $rowLang['lang_service_name'] ?></h2>
                </div>
            </div>
            <div class="job-details">
                <div>
                    <?= $rowLang['lang_service_content'] ?>
                </div>
                <div class="job-description">
                    <h2 class="tz-title">HOW TO APPLY</h2>
                    <p>You feel you can make a difference at Greentours Indochina please send a covering letter and CV to
                        employment@greentoursindochina.com</p>
                </div> <a href="javascript:void(0);" class="btn btn-apply" data-toggle="modal"
                    data-target="#myModal">Apply
                    now <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="tz-form-popup">
                <div id="myModal" class="form-lightbox modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document" style="top: 38px;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 id="myModalLabel">APPLY FOR THIS JOB</h3> <button type="button" class="close"
                                    data-dismiss="modal" aria-hidden="true">× </button>
                            </div>
                            <div class="modal-body">
                                <div role="form" class="wpcf7" id="wpcf7-f21101-o3" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form action="" method="post"
                                        class="wpcf7-form" enctype="multipart/form-data">
                                        <div style="display: none;"> <input type="hidden" name="_wpcf7" value="21101">
                                            <input type="hidden" name="_wpcf7_version" value="5.1.4"> <input
                                                type="hidden" name="_wpcf7_locale" value="en_US"> <input type="hidden"
                                                name="_wpcf7_unit_tag" value="wpcf7-f21101-o3"> <input type="hidden"
                                                name="_wpcf7_container_post" value="0"> <input type="hidden"
                                                name="g-recaptcha-response" value=""></div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label>Name*</label>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label>Email*</label>
                                                <input type="text" name="email" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label>Phone*</label>
                                                <input type="text" name="phone" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label>File attachment</label><br> <span
                                                    class="wpcf7-form-control-wrap file-attachment"><input type="file"
                                                        name="file" size="40"
                                                        class="wpcf7-form-control wpcf7-file form-control"
                                                        accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.odt,.avi,.ogg,.m4a,.mov,.mp3,.mp4,.mpg,.wav,.wmv"
                                                        aria-invalid="false"></span>
                                            </div>
                                        </div>
                                        <div class="form-group"> <label>Cover letter</label><br> <span
                                                class="wpcf7-form-control-wrap cover-letter"><textarea
                                                    name="note" cols="40" rows="10"
                                                    class="wpcf7-form-control wpcf7-textarea form-control"
                                                    aria-invalid="false"></textarea></span></div>
                                        <div class="clear-fix"></div>
                                        <p><span class="wpcf7-form-control-wrap job-title"><input type="text"
                                                    name="job" value="<?= $rowLang['lang_service_name'] ?>" size="40"
                                                    class="wpcf7-form-control wpcf7-text hidden job-title"
                                                    aria-invalid="false"></span><br> <input type="submit" value="submit" name="apply" 
                                                class="wpcf7-form-control wpcf7-submit apply-job"><span
                                                class="ajax-loader"></span></p>
                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>