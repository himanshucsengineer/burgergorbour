<style>
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
            <?php foreach($menu as $value){?>
            <div class="card">
                <div class="card_main">
                    <img src="<?php echo $value['file']?>" alt="demo image ">
                    <h5><?php echo $value['name']?></h5>
                </div>
            </div>
            <?php }?>
            
        </div>
    </div>

</div>