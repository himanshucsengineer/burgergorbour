<style>
    
    .touch .flex{
        width:100%;
        height:auto;
        margin-bottom:1rem;
        display:flex;
    }
    .touch .flex .left{
        width:70%;
        height:auto;
    }
    .touch .flex .left input[type="email"]{
        width:100%;
        height:auto;
        padding-top:.3rem;
        padding-bottom:.3rem;
        padding-left:1rem;
        border:1px solid #cdcdcd;
        outline:none;
        margin-bottom:1rem;
    }
    .touch .flex .right{
        width:30%;
        height:auto;
    }
    .touch .flex .right button{
        width:100%;
        height:auto;
        padding-top:.3rem;
        padding-bottom:.3rem;
        color:white;
        background:#f3cb38;
        border:1px solid #f3cb38;
        outline:none;
    }
    .touch .flex .add_left{
        width:15%;
        height:auto;
    }
    .touch .flex .add_left .fa{
        font-size:20px;
        color:white;
    }
    .touch .flex .add_right{
        width:85%;
        height:auto;
    }
    .bottombar{
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .bottombar h1{
    font-family: sohne,"Helvetica Neue",Helvetica,Arial,sans-serif;
    color: rgb( 255, 255, 255 );
    text-align: center;
    text-transform: uppercase;
    font-size: 18px;
    margin-bottom: 1rem;
}
.bottombar p{
    font-family: sohne,"Helvetica Neue",Helvetica,Arial,sans-serif;
    color: rgb( 226, 226, 226 );
    text-align: center;
    text-transform: uppercase;
    font-size: 10px;
    margin-top: 1rem;
}
.bottombar a{
   color: #f39933;
}
.bottombar .fa-iconbs{
    font-size: 15px;
    color: white !important;
    border: 1px solid #FC8817;
    text-align: center;
    margin: 0px 0px 10px 4px;
    padding: 1px 4px;
    border-radius: 6px;
}
.footer .footer_head{
    width: 100% !important;
    font-size: 17px !important;
    text-transform: uppercase !important;
    font-family: sohne,"Helvetica Neue",Helvetica,Arial,sans-serif !important;
    margin: 10px 20px 2px 10px !important;
    font-weight: 500 !important;
    color: #fff !important;
}
.footer_hori{
    border-top: 1px solid #f39933!important;
    margin-top: 0px !important;
    opacity: 1 !important;
    margin-bottom: 1.5rem !important;
}
.footer p{
    color: rgb( 226, 226, 226 ) !important;
    font-size: 16px !important;
    font-family: sohne,"Helvetica Neue",Helvetica,Arial,sans-serif !important;
    margin-left: 10px !important;
}
</style>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3 class="footer_head">About BH</h3>
                <hr class="footer_hori">
                <p>Its a Burger adda, serving freshly made Burger, Pizza, Pasta, Sandwitch, Wraps, Shakes and many more.... Customers love to eat and spend their quality time here. Burger Harbour is currently present in Hisar.</p>
            </div>
            <div class="col-md-3">
                <h3 class="footer_head">Important Links</h3>
                <hr class="footer_hori">
                <ul>
                    <li><a href="<?php echo base_url()?>menu">Menu</a></li>
                    <li><a href="<?php echo base_url()?>Plans">Plans</a></li>
                    <li><a href="<?php echo base_url()?>membership">Membership</a></li>
                    
                </ul>
            </div>
            <div class="col-md-3">
                <h3 class="footer_head">Quick Links</h3>
                <hr class="footer_hori">
                <ul>
                    <li><a href="<?php echo base_url()?>term-condition">Term and Condition</a></li>
                    <li><a href="<?php echo base_url()?>privacy-policy">Privacy-Policy</a></li>
                    <li><a href="<?php echo base_url()?>contact-us">Contact Us</a></li>
                    <li><a href="<?php echo base_url()?>about-us">About Us</a></li>
                    <li><a href="<?php echo base_url()?>refund-policy">Refund & Cancellation</a></li>
                </ul>
            </div>
            <div class="col-md-3 touch">
                <h3 class="footer_head">Get In Touch</h3>
                <hr class="footer_hori">
                <div class="flex">
                    <div class="left">
                        <input type="email" placeholder="Enter Email">  
                    </div>
                    <div class="right">
                        <button>Send</button>
                    </div>    
                </div> 
                <div class="flex">
                    <div class="add_left">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="add_right">
                        <p>SSB 1&2 PLA, Shopping Complex Near Town Park, Hisar, Haryana (125001)</p>
                    </div>    
                </div>    
                <div class="flex">
                    <div class="add_left">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="add_right">
                        <p>Info@burgerhurbour.com</p>
                    </div>    
                </div> 
                <div class="flex">
                    <div class="add_left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="add_right">
                        <p>+91 7206324915<p>
                    </div>    
                </div> 
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->

<div class="bottombar">
    <div class="container text-center">
        <h1>Follow Us On</h1>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a class="fa-iconbs" href=""><i class="fa fa-youtube "></i></a>
                    <a class="fa-iconbs" href=""><i class="fa fa-twitter "></i></a>
                    <a class="fa-iconbs" href=""><i class="fa fa-instagram "></i></a>
                    <a class="fa-iconbs" href=""><i class="fa fa-facebook "></i></a>
                    <a class="fa-iconbs" href=""><i class="fa fa-linkedin "></i></a>
                </div>
            </div>
        <p>@2021 BURGER HARBOUR ALL RIGHTS RESERVED. DEVELOPED BY <a href="https://digifever.in/">DIGIFEVER</a></p>
    </div>
</div>


<!-- Bootstrap Bundle js with popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>

</html>














