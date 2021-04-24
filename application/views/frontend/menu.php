<!--style>
    .main_menu{
        width: 100%;
        height: auto;
        
        background-color: rgb(245, 235, 220);
    }    
    .main_menu .flex_1{
        width: 100%;
        height: auto;
        display: flex;
    }
    .main_menu .flex_1 .menu_heading{
        width: 17%;
        height: auto;
        padding-top: 3rem;
        padding-bottom: 0rem;
        border-bottom:4px solid rgb(43, 2, 0) ;
    }
    .main_menu .flex_1 .menu_heading h1{
        text-align: center;
        color: rgb(43, 2, 0);
    }
    .main_menu .flex{
        width: 100%;
        height: auto;
        display: flex;
        flex-wrap: wrap;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .main_menu .flex .card{
        width: 25%;
        height: auto;
        border: none;
      
        padding: 10px;
        background-color: transparent;
        
    }
    .main_menu .flex .card .card_main{
        width: 100%;
        height: auto;
        border-radius: 12px;
        background-color: white;
    }
    .main_menu .flex .card .card_main img{
        width: 100%;
        height: 200px;
        border-radius: 12px 12px 0px 0px;
    }
    .main_menu .flex .card .card_main h5{
        margin-top: 1rem;
        margin-bottom: 1rem;
        text-align: center;
        font-weight: 700;
        color: rgb(43, 2, 0);
    }

    @media only screen and (max-width: 600px) {
        .main_menu .flex .card{
        width: 50%;
        height: auto;
        border: none;
      
        padding: 5px;
        background-color: transparent;
        
    }
    .main_menu .flex .card .card_main img{
        width: 100%;
        height: 100px;
        border-radius: 12px 12px 0px 0px;
    }
    .main_menu .flex .card .card_main h5{
        margin-top: .8rem;
        margin-bottom: .8rem;
        font-size: 15px;
        font-weight: 600;
       
    }
    .main_menu .flex_1 .menu_heading{
        width: 50%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 0rem;
       
        opacity: .8;
        
    }
    .main_menu .flex_1 .menu_heading h1{
        font-size: 28px;
        
    }
}
</style>
<div class="main_menu">
    <div class="flex_1 justify-content-center">
        <div class="menu_heading">
            <h1>Our Menu</h1>
        </div>
    </div>
    
    <div class="container">
        <div class="flex ">
            <?php foreach ($menu as $value) { ?>
            <div class="card">
                <div class="card_main">
                    <img src="<?php echo $value['file'] ?>" alt="demo image ">
                    <h5><?php echo $value['name'] ?></h5>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>

</div-->



<main class="main">

    <div class="spacer_s"></div>
    <div class="pattern_bar"></div>
    <!-- Menu Title -->
    <div class="container">
        <div class="row mt-3">
            <div class="col text-center">
                <h2 class="head_h2">Our Menu</h2>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <p class="title_para">*** Taste The delious One ***</p>
            </div>
        </div>
    </div>
    <!-- End Menu Title -->

    <div class="spacer_s"></div>

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 class="head_h3">*** Veg Layers Burgur Combo ***</h3>
            </div>
        </div>
    </div>
    <div class="spacer_s"></div>
    <!-- -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <!-- F_card -->
                    <?php foreach ($menu as $value) { ?>
                        <div class="col-md-4 px-4 py-2 mb-3 col-6">
                            <a href="" class="nodecoration">

                                <div class="fcard">
                                    <img src="<?php echo $value['file'] ?>" alt="" class="fcard_img menu_img">
                                    <div class="fcard_content menu_content">
                                        <h3 class="head_h3 mb-1"><?php echo $value['name'] ?></h3>
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php } ?>
                    <!-- end Fcard -->

                    <!-- F_card -->

                    <!-- end Fcard -->
                    <!-- F_card -->

                    <!-- end Fcard -->


                </div>
            </div>
        </div>
    </div>
    <!-- End 3 container Section -->

    <div class="spacer_s"></div>


</main>