<!--style>
    .test{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .test input[type="text"], input[type="email"], input[type="number"], input[type="file"], textarea, input[type="password"]{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        border: 1px solid #cdcdcd;
        padding-left: 1rem;
        margin-bottom: 1rem;
        outline: none;
    }
    .test button{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        color: white;
        background-color: green;
        border: none;
        outline: none;
    }

</style>
<div class="test">

<a href="<?php echo base_url();?>plans">Go to plans page</a>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6">
    <?php
        if($this->session->flashdata('success'))
        {
            echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
        }
        else if($this->session->flashdata('error'))
        {
            echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>';
        }
        ?>
    <form method="post" action="<?php echo base_url();?>frontend/login/signup" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="enter Your Name">
        <input type="email" name="email" placeholder="enter Your Email">
        <input type="number" name="mob" placeholder="Enter Your Number">
        <input type="file" id="fileupload" name="images" placeholder="Upload Your Pic">
        <textarea name="add"  cols="30" rows="5" placeholder="enter Your Address"></textarea>
        <input type="password" name="pass" placeholder="Enter Password">
        <button>Get Membership</button>
    </form> 


    <!--hr>
    <h1 class="text-center">Login</h1>
    <form method="post" action="<?php echo base_url()?>frontend/login/login">
        <input type="email" name="email" placeholder="enter Your Email">
        <input type="password" name="pass" placeholder="Enter Your Password">
        <button>Login</button>
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
<style>
.carousel {
  background:#007aeb;
}
.carousel-item .img-fluid {
  width:100%;
}

.carousel-item a {
  display: block;
  width:100%;
}
</style>
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <picture>
                <source srcset="<?php echo base_url()?>assest/img/slider1.jpg" media="(min-width: 1400px)" style="height:500px;">
                <source srcset="<?php echo base_url()?>assest/img/slider1.jpg" media="(min-width: 769px)" style="height:500px;">
                <source srcset="<?php echo base_url()?>assest/img/slider1.jpg" media="(min-width: 577px)" style="height:500px;">
                <img srcset="<?php echo base_url()?>assest/img/slider1.jpg" alt="responsive image" class="d-block img-fluid" style="height:500px;">
            </picture>
            <div class="carousel-caption">
                <div>
                    <h2>Digital Craftsmanship</h2>
                    <p>We meticously build each site to get results</p>
                    <span class="btn btn-sm btn-outline-secondary">Learn More</span>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <picture>
                <source srcset="<?php echo base_url()?>assest/img/slider2.jpg" media="(min-width: 1400px)" style="height:500px;">
                <source srcset="<?php echo base_url()?>assest/img/slider2.jpg" media="(min-width: 769px)" style="height:500px;">
                <source srcset="<?php echo base_url()?>assest/img/slider2.jpg" media="(min-width: 577px)" style="height:500px;">
                <img srcset="<?php echo base_url()?>assest/img/slider2.jpg" alt="responsive image" class="d-block img-fluid" style="height:500px;">
            </picture>
            <div class="carousel-caption justify-content-center align-items-center">
                <div>
                    <h2>Every project begins with a sketch</h2>
                    <p>We work as an extension of your business to explore solutions</p>
                    <span class="btn btn-sm btn-outline-secondary">Our Process</span>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <picture>
                <source srcset="<?php echo base_url()?>assest/img/slider3.jpeg" media="(min-width: 1400px)" style="height:500px;">
                <source srcset="<?php echo base_url()?>assest/img/slider3.jpeg" media="(min-width: 769px)" style="height:500px;">
                <source srcset="<?php echo base_url()?>assest/img/slider3.jpeg" media="(min-width: 577px)" style="height:500px;">
                <img srcset="<?php echo base_url()?>assest/img/slider3.jpeg" alt="responsive image" class="d-block img-fluid" style="height:500px;">
            </picture>
            <div class="carousel-caption justify-content-center align-items-center">
                <div>
                    <h2>Performance Optimization</h2>
                    <p>We monitor and optimize your site's long-term performance</p>
                    <span class="btn btn-sm btn-secondary">Learn How</span>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="home">
  



