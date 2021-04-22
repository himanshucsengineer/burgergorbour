<!--style>
    .membership{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
        background-color: rgb(245, 235, 220);
    }
    .membership h2{
        font-family: Flame, "Cooper Black", "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: rgb(43, 2, 0);
        font-size: 20px;
        text-align: center;
        text-transform: capitalize;
        margin-bottom: 2rem;
    }
    .membership .main_box{
        width: 100%;
        height: auto;
        border: none;
        border-radius:10px ;
        padding: 1rem;
        background-color: transparent;
        box-shadow: rgb(73 73 73 / 20%) 0px 0px 4px 0px;
    }
    .membership .main_box input[type="text"], input[type="email"], input[type="number"], input[type="file"], input[type="password"], textarea{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        border: 1px solid  rgb(43, 2, 0);
        padding-left: 1rem;
        color:  rgb(43, 2, 0);
        background-color: transparent;
        outline: none;
        margin-bottom: 1rem;
    }
    .membership .main_box button{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        border: none;
        outline: none;
        background-color: #da3028;
        
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        transition: .5s;
    }
    .membership .main_box button:hover{
        background-color: rgb(43, 2, 0);
        border-radius: 10px;
    }
    @media only screen and (max-width: 600px) {
        .membership .main_box{
        box-shadow: none;
    }
    }
</style>
<div class="membership">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Become A Member Of Burger Horbour and Get Discount On Your Order</h2>
            <div class="main_box">
                <form method="post" action="<?php echo base_url();?>frontend/login/signup" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="enter Your Name">
                    <input type="email" name="email" placeholder="enter Your Email">
                    <input type="number" name="mob" placeholder="Enter Your Number">
                    <input type="file" id="fileupload" name="images" placeholder="Upload Your Pic">
                    <textarea name="add"  cols="30" rows="5" placeholder="enter Your Address"></textarea>
                    <input type="password" name="pass" placeholder="Enter Password">
                    <button>Get Membership</button>
                </form> 
            </div>
        </div>
    </div>
</div>

<script language="javascript" type="text/javascript">

$(function () {
    $("#fileupload").change(function () {
        $("#dvPreview").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.png)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#dvPreview").show();
                $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#dvPreview").show();
                    $("#dvPreview").append("<img class='thunbnail_image images_preview'/>");
                    var reader = new FileReader();
                    reader.onload = function (e) {
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
</script-->





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
                <p class="title_para">*** Join Our membership and get reward for it ***</p>
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
            <form method="post" action="<?php echo base_url();?>frontend/login/signup" enctype="multipart/form-data">
                <div class="mb-4">
                    <input type="text" class="b_input" name="name" placeholder="Enter Your Name">
                </div>
                <div class="mb-4">
                    <input type="email" class="b_input" name="email" placeholder="Enter Your Email">
                </div>
                <div class="mb-4">
                    <input type="file" class="b_input" id="fileupload" name="images"/>
                </div>
                <div class="mb-4">
                    <input type="number" class="b_input" name="mob" placeholder="Enter Your Phone Number " />
                </div>
                <div class="mb-4">
                    <textarea name="add" id="" cols="30" rows="4" class="b_input"
                        placeholder="Enter Your Address "></textarea>
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

<script language="javascript" type="text/javascript">

$(function () {
    $("#fileupload").change(function () {
        $("#dvPreview").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.png)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#dvPreview").show();
                $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#dvPreview").show();
                    $("#dvPreview").append("<img class='thunbnail_image images_preview'/>");
                    var reader = new FileReader();
                    reader.onload = function (e) {
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