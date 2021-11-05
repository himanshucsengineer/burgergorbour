
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
    </div>
    <!-- End Menu Title -->



 <!-- Menu Item -->
 <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu pizz_table">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Pizza Mania</h2>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                <th scope="col" colspan="2" class="text-center head_h5">Small(8")</th>
                                <th scope="col" colspan="2" class="text-center head_h5">Medium(10")</th>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="pizza"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['h_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['h_m_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                            </tr>
                            <?php }}?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>






     <!-- Menu Item -->
 <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu burger_table">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Burger</h2>
                                </th>
                            </tr>
                            <!--tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr-->
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="burger"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            <?php }}?>
                            
                            

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>



         <!-- Menu Item -->
 <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu fries_table">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">French Fries</h2>
                                </th>
                            </tr>
                            <!--tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr-->
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="fries"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            
                        <?php }}?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu ">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Pasta</h2>
                                </th>
                            </tr>
                            <!--tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr-->
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="pasta"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            
                        <?php }}?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>
    



    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu ">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Wrap</h2>
                                </th>
                            </tr>
                            <!--tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr-->
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="wrap"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            
                        <?php }}?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>


    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu ">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Sandwitch</h2>
                                </th>
                            </tr>
                            <!--tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr-->
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="sabdwitch"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            
                        <?php }}?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>




    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu fries_table">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Calzones</h2>
                                </th>
                            </tr>
                            <!--tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr-->
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="calzone"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            
                        <?php }}?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>


    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu fries_table">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Garlic Bread</h2>
                                </th>
                            </tr>
                            <!--tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr-->
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="garlic"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            
                        <?php }}?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>


    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu ">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Shakes</h2>
                                </th>
                            </tr>
                            <!--tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr-->
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="shakes"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            
                        <?php }}?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>



    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu ">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Ice Cream</h2>
                                </th>
                            </tr>
                            <!--tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr-->
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="ice"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            
                        <?php }}?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>


    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu ">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Drinks</h2>
                                </th>
                            </tr>
                            <!--tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr-->
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="drinks"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            
                        <?php }}?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>




    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu ">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Dessert </h2>
                                </th>
                            </tr>
                            <!--tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr-->
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="dessert"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            
                        <?php }}?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>


    <!-- Menu Item  -->
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu pizz_table">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Tandoori Chaap</h2>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                <th scope="col" colspan="2" class="text-center head_h5">Half</th>
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="tandoori"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['h_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['h_m_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                            </tr>
                            <?php }}?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>
    <!-- Menu Item  -->
   
    <!-- Menu Item  -->
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu pizz_table">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Tikka Special</h2>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                <th scope="col" colspan="2" class="text-center head_h5">Half</th>
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="tikka"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['h_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['h_m_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                            </tr>
                            <?php }}?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>
    <!-- Menu Item  -->

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu ">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Chaap Roll</h2>
                                </th>
                            </tr>
                            <!--tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr-->
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="rolls"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            
                        <?php }}?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>


  <!-- Menu Item  -->
  <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu ">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Platter</h2>
                                </th>
                            </tr>
                            <!--tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr-->
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="platter"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            
                        <?php }}?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>


    <!-- Menu Item  -->
    <!--div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu ">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Tandoori Momos</h2>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" colspan="1" class="text-center head_h5"></th>
                                
                                <th scope="col" colspan="2" class="text-center head_h5">Full</th>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="momos"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            
                        <?php }}?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div-->


    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10">

                <div class="recipe_menu barbar_bg">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5">
                                    <h2 class="head_h2 text-center menu_item_head">Salon</h2>
                                </th>
                            </tr>
                            <tr>
                               <th scope="col"><h4 class="head_h5">Name:-</h4></th>
                                 <th scope="col"><p class="menu_p subdes">Lorean Salon</p></th>
                            </tr>
                            <tr>
                               <th scope="col"><h4 class="head_h5">Address:-</h4></th>
                                 <th scope="col"><p class="menu_p subdes">SSB 20, BASEMENT, PLA SHOPPING COMPLEX, NEAR BURGER HARBOUR, HISAR</p></th>
                            </tr>
                            <tr>
                               <th scope="col"><h4 class="head_h5">Mobile no:-</h4></th>
                                 <th scope="col"><p class="menu_p subdes">9729581545</p></th>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6 menu_p">Actual</th>
                                <th scope="col" class="text-center head_h6 menu_p">Member</th>
                                
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center head_h6"></th>
                                <th scope="col" class="text-center head_h6"></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($menu as $value){ if($value['menu_name']=="saloon"){?>
                            <tr>
                                <th scope="row">
                                    <h4 class="head_h5"><?php echo $value['d_name']?></h4>
                                    <p class="menu_p subdes"><?php echo $value['d_desc']?></p>
                                </th>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_o_price']?></span></p>
                                </td>
                                <td class="text-center">
                                    <p><span class="menu_prize"><?php echo $value['f_m_price']?></span></p>
                                </td>
                                
                            </tr>
                            
                        <?php }}?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="spacer_s"></div>
    </div>


  


     <!-- Menu Item  -->
     





   
    <!-- Menu Item -->






</main>