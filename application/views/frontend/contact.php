<style>
    .contact_box{
        padding: 2rem 2rem 2rem 2rem !important;
        background-color: white !important;
        
        border-radius: 0px !important;
    }
    .b_input{
        width: 100% !important;
        height: auto !important;
        padding: 10px 15px 10px 15px !important;
        border: 1px solid rgb( 190, 190, 190 ) !important;
        margin-bottom: 20px !important;
        border-radius: 4px !important;
        color: rgb(165, 154, 154) !important;
        font-size: 15px !important;
    }
    .member_btn{
        width: 100% !important;
        height: auto !important;
        padding-top: .8rem !important;
        padding-bottom: .8rem !important;
        color: white !important;
        border-radius: 4px !important;
    }
    .contact_icon{
        
        padding: 1rem !important;
    }
    .contact_icon .contact_hosri{
        margin-top: 2rem !important;
        margin-bottom: 2.5rem !important;
        border-bottom: 1px solid rgba(0,0,0,.1) !important;
    }
    .contact_icon h1{
       color: black;
       font-weight: 400 !important;
       font-size: 23px !important;
       line-height: 1.2 !important;
    }
.contact_icon .flex{
    width:100%;
    height:auto;
    display:flex;
    margin-left:2rem ;
    margin-bottom: 4rem;
    margin-top: 2rem;
}
.contact_icon .flex .left{
    width:15%;
    height:auto;
   
}
.contact_icon .flex .left .fa, .far{
    font-size:30px;
   color:#b42821;
}
.contact_icon .flex .right{
    width:85%;
    height:auto;
   margin-top:-.5rem;
}
.contact_icon .flex .right .subbb{
    color: gray !important;
    font-size: 1.6rem;
    margin-right: 5rem !important;
}
.contact_icon .flex .right .head_h3{
    font-size: 2.1rem !important;
    font-weight: 400 !important;
    color: black !important;
    margin-bottom: 1rem !important;
    margin-top: 0rem !important;
    line-height: 1.2rem !important;
    font-family: sohne,"Helvetica Neue",Helvetica,Arial,sans-serif !important;
}
@media only screen and (max-width: 600px) {
    .contact_icon{
        margin-right: 0rem !important;
        margin-top: 1rem !important;
    }
    .contact_icon h1{
        font-size: 20px !important;
        margin-top: 10px !important;
    }
    .contact_icon .flex{
        margin-left: 0rem !important;
    }
    .contact_icon .flex .left{
        width: 20% !important;
    }
    .contact_icon .flex .right{
       width: 80% !important;
    }
    .contact_icon .flex .right .subbb{
        margin-right: 2rem !important;
        margin-bottom: .5rem !important;
    }
    .contact_icon .flex .left .fa, .far{
        font-size: 28px !important;
    }
}

</style>
<main class="main">

    <div class="spacer_s"></div>
    <div class="pattern_bar"></div>
    <!-- Menu Title -->
    <div class="container">
        <div class="row mt-3">
            <div class="col text-center">
                <h2 class="head_h2">Contact Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p class="title_para">*** If Have any Query Feel Free To Ask ***</p>
            </div>
        </div>
    </div>
    <!-- End Menu Title -->


    <div class="spacer_m"></div>

    <!-- Client Details  -->
    <div class="container">
        <div class="contact_box">
            <div class="row ">
                
                        <div class="col-md-7">
                            <?php
                            if ($this->session->flashdata('success')) {
                                echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                            } else if ($this->session->flashdata('error')) {
                                echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                            }


                            ?>
                            <!-- Contact Form -->
                            <form action="<?php echo base_url() ?>frontend/contact/insert_data" method="POST">
                                <input type="text" class="b_input" name="name" placeholder="Enter Your Name">
                                <input type="email" class="b_input" name="email" placeholder="Enter Your Email">
                                <input type="number" name="number" class="b_input" placeholder="Enter Your Number">
                                <input type="text" name="sub" class="b_input" placeholder="Enter Suject">
                                <textarea name="msg" id="" cols="30" rows="5" class="b_input" placeholder="Enter Your Message"></textarea>
                                <button class="member_btn"> Get In Touch</button>
                            </form>
                            <!-- End Contact Form -->
                        </div>
                        <div class="col-md-5 contact_icon">
                            <h1>If you prefer a more tangible form of communication we're here:</h1>
                            <hr class="contact_hosri">
                            <div class="flex">
                                <div class="left">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="right">
                                    <p class="subbb">Reach us on our</p>
                                    <h2 class="head_h3">Our Office</h2>
                                    <p class="subbb">SSB 1&2 PLA, Shopping Complex Near Town Park, Hisar, Haryana (125001)</p>
                                </div>    
                            </div>    
                            <div class="flex">
                                <div class="left">
                                    <i class="fa fa-phone" ></i>
                                </div>
                                <div class="right">
                                   
                                   <p class="subbb">Give Us a</p>
                                        <h2 class="head_h3">Call</h2>
                                        <p class="subbb">+91 7206324915</p>
                                   
                                </div>    
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <i class="fa fa-envelope" ></i>
                                </div>
                                <div class="right">
                               
                                   <p class="subbb">Drop On</p>
                                        <h2 class="head_h3">Email</h2>
                                        <p class="subbb">Info@burgerhurbour.com </p>
                                   
                                </div>    
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="right">
                                  <p class="subbb">Open At</p>
                                        <h2 class="head_h3">Opening Hour</h2>
                                        <p class="subbb">10:00 AM -10:30 PM Everyday </p>
                                 
                                </div>    
                            </div>
                            
                            
                            

                        </div>
                   
            </div>
        </div>
    </div>
    <!-- End OF Client  -->









    <div class="spacer_s"></div>
    <div class="spacer_s"></div>


</main>