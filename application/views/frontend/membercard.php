<?php
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$number = $_SESSION["number"];
$card = $_SESSION["card"];
$add = $_SESSION["add"];
$image = $_SESSION["image"];
$date = $_SESSION["date"];
$vali = $_SESSION["vali"];
$acc_type = $_SESSION["acc_type"];
?>

<?php
$validity = "+".$vali." month";
$regdate = strtotime($date);
$updateddate=date('d/m/y',strtotime($validity,$regdate));

$currntdate= date("d/m/y");
if($currntdate==$updateddate){ 
    $finaldate='<div class="member_card">
    <div class="member_card_border">
        <div class="row mb-4 mem_row1">
            <div class="col-4 mem_row1_col-left">
                <img src="'.base_url().'assest/img/acc_block2.png" alt="" class="member_card_img">
            </div>
            <div class="col-8">
                <div>
                    <div class="mb-2 ">
                        <p><span class="member_card_name px-3 pb-0">'.$name.'</span>
                        </p>
                    </div>
                    <div>
                        <p><span class="member_card_mn">Member No. :</span>
                            <span class="member_card_num">xxxxxx</span>
                        </p>
                    </div>
                    <div>
                        <p><span class="member_card_mn">Phone:</span>
                            <span class="member_card_phone">'.$number.'</span>
                        </p>
                    </div>
                    <div>
                        <p><span class="member_card_mn">Membership:</span>
                            <span class="member_card_phone">xxxxx</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mem_row2 mx-1">
            <div class="col-7 text-center">
                <p> <span class="mem_text">Valid Up To: Suspended</span> </p>
            </div>
            <div class="col-5 text-center">
                <p><span class="mem_text">Logo</span> </p>
            </div>
        </div>
    </div>
   
</div>';
}else{
    $finaldate = '<div class="member_card">
    <div class="member_card_border">
        <div class="row mb-4 mem_row1">
            <div class="col-4 mem_row1_col-left">
                <img src="'.$image.'" alt="" class="member_card_img">
            </div>
            <div class="col-8">
                <div>
                    <div class="mb-2 ">
                        <p><span class="member_card_name px-3 pb-0">'.$name.'</span>
                        </p>
                    </div>
                    <div>
                        <p><span class="member_card_mn">Member No. :</span>
                            <span class="member_card_num">'.$card.'</span>
                        </p>
                    </div>
                    <div>
                        <p><span class="member_card_mn">Phone:</span>
                            <span class="member_card_phone">'.$number.'</span>
                        </p>
                    </div>
                    <div>
                        <p><span class="member_card_mn">Membership:</span>
                            <span class="member_card_phone">'.$acc_type.'</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mem_row2 mx-1">
            <div class="col-7 text-center">
                <p> <span class="mem_text">Valid Up To: '.$updateddate.'</span> </p>
            </div>
            <div class="col-5 text-center">
                <p><span class="mem_text">Logo</span> </p>
            </div>
        </div>
    </div>
   
</div>';
}

?>




<style>
    .blocked{
        width: 100%;
        height: auto;
        margin-top: -24rem !important;
    }
    .member_card{
        height: auto !important;

    }
    .member_card_border{
        height: auto !important;
    }
    .mx-1{
        margin-bottom: 1rem !important;
    }
    @media only screen and (max-width: 600px) {
        .mobile_view{
        display: none !important;
    }
    .mem_row1{
        padding: 1.8rem 0.8rem .5rem 0.8rem !important;
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
                <h2 class="head_h2">Client Area</h2>
            </div>
        </div>
    </div>
    <!-- End Menu Title -->


    <div class="spacer_m"></div>

    <!-- Client Details  -->
    <div class="client">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row justify-content-around">
                        <div class="col-md-3 pt-5 mobile_view">
                            <ul>
                                <li class="client_links ">
                                    <a href="<?php echo base_url() ?>account">Profile And Settings</a>
                                </li>
                                <li class="client_links client_active">
                                    <a href="<?php echo base_url() ?>member-card">Membership Details</a>
                                </li>
                                <li class="client_links">
                                    <a href="<?php echo base_url() ?>frontend/logout">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <div class="row mb-3">
                                <div class="col">
                                    <h1 class="head_h3">Membership Details</h1>
                                    <hr>
                                </div>
                            </div>
                            

                                <div class="spacer_s"></div>
                                <!-- Member Card -->
                                <div class="row justify-content-start">
                                    <div class="col-md-10">
                                        <?php echo $finaldate;?>
                                        
                                    </div>
                                </div>
                                <!-- End Membership Card -->

                                <div class="spacer_s"></div>

                                <!--div class="row mb-4">
                                    <div class="col">
                                        <?php echo $button ?>
                                    </div>
                                </div-->

                                <div class="row justify-content-start">
                                    <div class="col-md-4 ">
                                        <div class="mb-4">
                                            <a href="<?php echo base_url()?>renewplans"><button class="member_btn"> Renew Your Card</button></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="spacer_s"></div>



                        
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