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
<!--style>
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

<div class="home"-->

<style>
    .clider_img{
        width: 100%;
        height: 500px;
    }
    @media only screen and (max-width: 600px) {
        .clider_img{
        width: 100%;
        height: 200px;
    }
    }
</style>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url()?>assest/img2/slider1.jpg" class="d-block clider_img" alt="slider 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url()?>assest/img2/slider2.jpg" class="d-block clider_img" alt="slider 2">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url()?>assest/img2/slider3.jpeg" class="d-block clider_img" alt="slider 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Hero Section -->

<div class="spacer_s"></div>

<!-- Home About -->
<div class="home_about section_10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <div>
                    <h2 class="head_h2 pb-3">How To Make This Happen</h2>
                </div>
                <p>looking Scarlett Johansson once. As a matter of fact, this got us thinking. About burgers and the
                    ways people love eating them. Found in every part of the world and a favorite among various age
                    groups from freckled teenagers to the wiser generation, </p>
            </div>
        </div>
    </div>
</div>
<!-- End Home About -->

<!-- Featured Image -->
<div class="f_image">
    <div class="f_image_border text-center">
        <h2 class="f_image_title">We Bring The New Spice Here</h2>
    </div>
</div>
<!-- end Featured Image -->

<div class="spacer_s"></div>

<!-- menu  -->
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h2 class="head_h2">Our Plans</h2>
        </div>
    </div>
</div>
<!-- end menu -->

<div class="spacer_s"></div>

<!-- 3 Container Section -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row justify-content-center">
                <!-- F_card -->
                <div class="col-md-4 px-4 py-2 mb-4">
                    <a href="" class="nodecoration">
                        <div class="fcard fcard_bg">
                            <img src="<?php echo base_url()?>assest/img/bg2.jpg" alt="" class="fcard_img">
                            <div class="fcard_content">
                                <h3 class="head_h3 mb-1">Veg Combo</h3>
                                <p class="fcard_p">looking Scarlett Johansson once. As a matter </p>
                                <button class="fcard_btn"> Order Now</button>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end Fcard -->
                <!-- F_card -->
                <div class="col-md-4 px-4 py-2 mb-4">
                    <a href="" class="nodecoration">
                        <div class="fcard fcard_bg">
                            <img src="<?php echo base_url()?>assest/img/bg3.jpg" alt="" class="fcard_img">
                            <div class="fcard_content">
                                <h3 class="head_h3 mb-1">Biryani Burgur</h3>
                                <p class="fcard_p">looking Scarlett Johansson once. As a matter </p>
                                <button class="fcard_btn"> Order Now</button>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end Fcard -->
                <!-- F_card -->
                <div class="col-md-4 px-4 py-2 mb-4">
                    <a href="" class="nodecoration">
                        <div class="fcard fcard_bg">
                            <img src="<?php echo base_url()?>assest/img/bg4.jpg" alt="" class="fcard_img">
                            <div class="fcard_content">
                                <h3 class="head_h3 mb-1">Burger Pick</h3>
                                <p class="fcard_p">looking Scarlett Johansson once. As a matter </p>
                                <button class="fcard_btn"> Order Now</button>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end Fcard -->

            </div>
        </div>
    </div>
</div>
<!-- End 3 container Section -->

<div class="spacer_m"></div>
<div class="spacer_m"></div>
  



