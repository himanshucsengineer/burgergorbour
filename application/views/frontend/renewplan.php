<?php
$email = $_SESSION["email"];
$name = $_SESSION["name"];
$mob = $_SESSION["number"];
$add = $_SESSION["add"];
$pass = $_SESSION["pass"];
$card = $_SESSION["card"];
$image = $_SESSION["image"];

?>










<main class="main">

    <div class="spacer_s"></div>
    <div class="pattern_bar"></div>
    <!-- Menu Title -->
    <div class="container">
        <div class="row mt-3">
            <div class="col text-center">
                <h2 class="head_h2">Renew My Membership</h2>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <p class="title_para">*** Continue Our membership and get reward for it ***</p>
            </div>
        </div>
    </div>
    <!-- End Menu Title -->



    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 class="head_h3">*** Avail Our Membership Offer ***</h3>
            </div>
        </div>
    </div>
    <div class="spacer_s"></div>

 
    
    <?php
                                if ($this->session->flashdata('success')) {
                                    echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                                } else if ($this->session->flashdata('error')) {
                                    echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                                }


                                ?>
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="row justify-content-center">
<?php $i=0; foreach ($course as $city) { $i+=1;?>
                    <!-- F_card   3 -->
                    <div class="col-md-4 px-4 py-2 mb-4">
                        <div class="fcard fcard_bg">
                            <img src="<?php echo base_url()?>assest/img/bg3.jpg" alt="" class="fcard_img">
                            <div class="fcard_content">
                                <h3 class="head_h3 mb-1"><?php echo $city['course']?></h3>
                                <p class="fcard_p">looking Scarlett Johansson once. As a matter </p>
                                <div class="row justify-content-center">
                                    <div class="col text-center">
                                        <p><sup class="amt_sec-sup">IN &#8377</sup> <span
                                                class="amt_sec-num" id="amount<?php echo $i?>">777</span><sub class="amt_sec-sub"> / <span id="exire<?php echo $i?>">year</span></sub></p>
                                        <p class="fcard_p">Take Your Offers and enjoy Your meal</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        
                                        <select name="" id="sel_depart<?php echo $i;?>" class="b_input amt_sec-select">
                                          
                                            <?php foreach($plans as $value){ if($value['course']==$city['course']){?>
                                                <option value="<?php echo $value['month']?> <?php echo $value['amount']?>">Get Membership in: INR <?php echo $value['month']?> with validity: <?php echo $value['amount']?></option>
                        
                                            <?php }}?>
                                        </select>
                                    </div>
                                </div>
                                <div class="text-center my-2">
                                    <?php 
                                        if (!isset($_SESSION["email"])) {
                                        echo '<a href="' . base_url() . 'membership"><button class="fcard_btn px-4">Buy Now</button></a>';
                                                } else {
                                            echo '<form action="' . base_url() . 'renewplan/pay" method="POST">
                                                    <input type="hidden" name="email" value="' . $_SESSION["email"] . '">
                                                    <input type="text" id="old_vali" value="'.$_SESSION['vali'].'">
                                                    <input type="text" id="acc'.$i.'" name="acc_type" value="">
                                                    <input type="text" id="bal'.$i.'" name="vali" value="">
                                                    <input type="hidden" id="amtt'.$i.'" name="amount" value="">
                                                    <button class="fcard_btn px-4">Buy Now</button>
                                                </form>';
                                            }
                                        ?>
                                </div>
                                <hr>
                                
                                <ul class="p-2">
                                    <li class="fcard_p fcard_li"><span><i
                                                class="far fa-check-square fcard_icon"></i></span>
                                        &nbsp;
                                        6 Days a
                                        Week</li>
                                    <li class="fcard_p fcard_li"><span><i
                                                class="far fa-check-square fcard_icon"></i></span>
                                        &nbsp;
                                        Dedicated Trainer Allocated</li>
                                    <li class="fcard_p fcard_li"><span><i
                                                class="far fa-check-square fcard_icon"></i></span>
                                        &nbsp;
                                        Diet Plan Included</li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <!-- end Fcard -->
                    <?php }?>
                </div>
            </div>
        </div>
    </div>



    <div class="spacer_s"></div>
  







    <div class="spacer_s"></div>
    <div class="spacer_s"></div>


</main>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>





    $(document).ready(function() {
        const oll= document.getElementById('old_vali').value;
        
        $( '#sel_depart1' ).change(function () {
           $( "#sel_depart1 option:selected" ).each(function() {
                var thisBtn = $(this).val();
                 var spt = thisBtn.split(" ");
            const sum = Number(spt[1]) +  Number(oll);
            document.getElementById('amount1').innerHTML = spt[0];
            document.getElementById('exire1').innerHTML = spt[1] + " " + spt[2];
            document.getElementById('amtt1').value = spt[0];
            document.getElementById('bal1').value = sum;
            document.getElementById('acc1').value = "Premium";
            });
            }).change();
    });
  

</script>
<script>





    $(document).ready(function() {
        const oll= document.getElementById('old_vali').value;
        $( '#sel_depart2' ).change(function () {
           $( "#sel_depart2 option:selected" ).each(function() {
                var thisBtn = $(this).val();
                 var spt = thisBtn.split(" ");
                 const sum = Number(spt[1]) +  Number(oll);
            document.getElementById('amount2').innerHTML = spt[0];
            document.getElementById('exire2').innerHTML = spt[1] + " " + spt[2];
            document.getElementById('amtt2').value = spt[0];
            document.getElementById('bal2').value = sum;
            document.getElementById('acc2').value = "Gold";
            });
            }).change();
    });
  

</script>
<script>





    $(document).ready(function() {
        const oll= document.getElementById('old_vali').value;
        $( '#sel_depart3' ).change(function () {
           $( "#sel_depart3 option:selected" ).each(function() {
                var thisBtn = $(this).val();
                 var spt = thisBtn.split(" ");
                 const sum = Number(spt[1]) +  Number(oll);
            document.getElementById('amount3').innerHTML = spt[0];
            document.getElementById('exire3').innerHTML = spt[1] + " " + spt[2];
            document.getElementById('amtt3').value = spt[0];
            document.getElementById('bal3').value = sum;
            document.getElementById('acc3').value = "Silver";
            });
            }).change();
    });
  

</script>