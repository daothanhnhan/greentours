<?php 
    include_once "functions/action_email.php";
    $action_email = new action_email;

    $action_email->lien_he1();

?>

<div class="row">

    <div class="wpb_column vc_column_container vc_col-sm-12">

        <div class="vc_column-inner">

            <div class="wpb_wrapper">

                <div class="wpb_text_column wpb_content_element ">

                    <div class="wpb_wrapper">

                        <h3>Online <strong>enquiry</strong></h3>

                        <p>Tell us a few details about your traveler’s plans and we will create the perfect proposal for

                            you.</p>

                        <p><a class="enquire-now" data-toggle="modal" data-target="#popupenquire" onclick="show_contact()">Enquire now <i class="fas fa-arrow-right"></i></a></p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<div id="lien-he" style="display: none;">
<div class="title">

    <h3>Enquire <span>Now</span></h3>

    <p>Please fill in the appropriate information below regarding enquiries. Our team of travel experts will get back to

        you shortly.</p>

</div>



<div class="gb-form-lienhe">

    <h3></h3>

    <form action="" method="post">

        <div class="row">

            <div class="col-md-6 form-group1">

                <label>First Name*</label>

                <input type="text" name="firstname" class="form-control" required>

            </div>

            <div class="col-md-6 form-group1">

                <label>Last Name*</label>

                <input type="text" name="lastname" class="form-control" required>

            </div>

        </div>

        <div class="form-group1">

            <label>Email</label>

            <input type="email" name="email" class="form-control" required>

        </div>

        <div class="row">

        <div class=" col-md-6 form-group1">

            <label>Your Contact Number</label>

            <input type="tel" name="phone" class="form-control">

        </div>

        <div class="col-md-6 form-group1">

            <label>Company Name</label>

            <input type="text" name="company" class="form-control">

        </div>

    </div>

        <div class="form-group1">

            <label>Enquiry Details*</label>

            <textarea class="input-xlarge form-control" name="note" rows="6" required></textarea>

        </div>



        <button class="btn btn1 btn-gui " type="submit" name="lien_he">Submit</button>

    </form>

</div>
</div>
<script type="text/javascript">
    function show_contact () {
        var contact = document.getElementById("lien-he").style.display;
        // alert(contact);
        if (contact == 'none') {
            document.getElementById("lien-he").style.display = 'block';
        } else {
            document.getElementById("lien-he").style.display = 'none';
        }
    }
</script>