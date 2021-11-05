<style>
    .new_card_stys{
        border:1px solid #cdcdcd78;
        border-radius:0px !important;
    }
    .new_card_stys a{
        text-decoration:none;
    }
    .cattag{
        font-size:1rem !important;
        background-color:brown;
        color:#fff;
        width:fit-content;
        padding:.5rem  !important;
        border-radius:5px  !important;
    }
</style>


<?php $acc_type = $_SESSION["acc_type"];?>
<main class="main">
    <div class="spacer_s"></div>
    <div class="pattern_bar"></div>
    <!-- Menu Title -->
    <div class="container">
        <div class="row mt-3">
            <div class="col text-center">
                <h2 class="head_h2">Our Courses</h2>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p class="title_para">*** Read Our Best Performance Courses  ***</p>
                
            </div>
        </div>
    </div>
    <!-- End Menu Title -->
    <div class="spacer_s"></div>
    <!-- Membership card plans-->
    <div class="container">
        <div class="row justify-content-center">
        
            <div class="col-md-11">
                <div class="row">
                    <!-- F_card   3 -->

                    <?php foreach($course as $value){ ?>
                        <?php
                                if (!isset($_SESSION["status"])) {
                                    $verifylink = '<a href="' . base_url() . 'signin" class="tdn" > ';
                                }else {
                                    if($acc_type == $value['cate']){
                                        $verifylink = '<a href="' . base_url() . 'course/'.$value['link'].'" class="tdn">';
                                    }else{
                                        $verifylink = '<a href="' . base_url() . 'allcourse" class="tdn">';
                                        $errormssss = "You Don't have Access For This Course Please Buy This Course and Enjoy ";
                                    }
                                    
                                }
                            ?>
                  
                    <div class="col-md-4 px-4 py-2 mb-5">
                        
                        <div class="fcard fcard_bg new_card_stys">
                            
                            
                            <?php echo $verifylink;?>
                            <img src="<?php echo base_url()?>upload/course/<?php echo $value['cover']?>" alt="" class="fcard_img">
                            <div class="fcard_content">
                                <p class=" mb-0 cattag"><?php echo $value['cate']?></p>
                                <h3 class="head_h3 mb-1"><?php echo $value['name']?></h3>
                            </div>
                        </a>
                        </div>
                            
                    </div>
                    <?php }?>
                    <!-- end Fcard -->
                </div>
            </div>
        </div>
    </div>
    <!-- Membership card plans -->
    <div class="spacer_s"></div>
    <div class="spacer_s"></div>
</main>
