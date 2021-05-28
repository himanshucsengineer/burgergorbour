<main class="main">

    <div class="spacer_s"></div>
    <div class="pattern_bar"></div>
    <!-- Menu Title -->
    <div class="container">
        <div class="row mt-3">
            <div class="col text-center">
                <h2 class="head_h2">Get Membership</h2>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <p class="title_para">*** Join our 2 year mebership and get heavy discount on every item. ***</p>
            </div>
        </div>
    </div>
    <!-- End Menu Title -->

    <div class="spacer_s"></div>

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 class="head_h3">*** Avail Our Membership Offer ***</h3>
            </div>
        </div>
    </div>
    <div class="spacer_s"></div>
    <!-- -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <?php
                                if ($this->session->flashdata('success')) {
                                    echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                                } else if ($this->session->flashdata('error')) {
                                    echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                                }


                                ?>
                <form method="post" action="<?php echo base_url(); ?>frontend/login/signup" enctype="multipart/form-data">
                    <div class="mb-4">
                        <input type="text" class="b_input" name="name" placeholder="Enter Your Name">
                    </div>
                    <div class="mb-4">
                        <input type="email" class="b_input" name="email" placeholder="Enter Your Email">
                    </div>
                    <div class="mb-4">
                        <div class="member_flexx">
                            <div class="left">
                                <label for="imageUpload"  class="btn b_input"> Upload Photo</label>
                                <input id="imageUpload" name="images" style="display:none;" type="file">
                            </div>
                            <div class="right">
                            
                            <input type="text" class="b_input" id="imagename"  value="" placeholder="Upload Your Photo" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <input type="number" class="b_input" name="mob" placeholder="Enter Your Phone Number " />
                    </div>
                    <div class="mb-4">
                        <textarea name="add" id="" cols="30" rows="4" class="b_input" placeholder="Enter Your Address "></textarea>
                    </div>
                    <div class="mb-4">
                        <input type="password" class="b_input" name="pass" placeholder="Enter Your password " />
                    </div>
                    <div class="mb-4">
                        <button class="member_btn"> Get MemberShip</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End 3 container Section -->

    <div class="spacer_s"></div>


</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $("#imageUpload").change(function() {
  filename = this.files[0].name;
  document.getElementById('imagename').value = filename;
  console.log(filename);
});
</script>
<script language="javascript" type="text/javascript">
    $(function() {
        $("#fileupload").change(function() {
            $("#dvPreview").html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.png)$/;
            if (regex.test($(this).val().toLowerCase())) {
                if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                    $("#dvPreview").show();
                    $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
                } else {
                    if (typeof(FileReader) != "undefined") {
                        $("#dvPreview").show();
                        $("#dvPreview").append("<img class='thunbnail_image images_preview'/>");
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $("#dvPreview img").attr("src", e.target.result);
                        }
                        reader.readAsDataURL($(this)[0].files[0]);
                    } else {
                        alert("This browser does not support FileReader.");
                    }
                }
            } else {
                alert("Please upload a valid file.");
            }
        });
    });
</script>