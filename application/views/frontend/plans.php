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
                <h2 class="head_h2">Membership Plans Offers</h2>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <p class="title_para">*** Join Our membership and Get UPTO 50% DISCOUNT ***</p>
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="row justify-content-center">
                    <?php $i = 0;
                    foreach ($course as $city) {
                        $i += 1;  ?>
                        <!-- F_card   3 -->
                        <div class="col-md-4 px-4 py-2 mb-4">
                            <div class="fcard fcard_bg">
                                <img src="<?php echo base_url() ?>assest/img/bg3.jpg" alt="" class="fcard_img">
                                <div class="fcard_content">
                                    <h3 class="head_h3 mb-1"><?php echo $city['course'] ?></h3>
                                    
                                    <div class="row justify-content-center">
                                        <div class="col text-center">
                                            <p><sup class="amt_sec-sup">IN &#8377</sup> <span class="amt_sec-num" id="amount<?php echo $i ?>">777</span><sub class="amt_sec-sub"> / <span id="exire<?php echo $i ?>">year</span></sub></p>
                                            <p class="fcard_p">Take Your Offers and enjoy Your meal</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <select name="" id="sel_depart<?php echo $i; ?>" class="b_input amt_sec-select">

                                                <?php $j = 0;
                                                foreach ($plans as $value) {
                                                    if ($value['course'] == $city['course']) {
                                                        $j += 1; ?>
                                                        <option id="<?php echo $i . $j ?>" value="<?php echo $value['month'] ?> <?php echo $value['amount'] ?>">Get Membership in: INR <?php echo $value['month'] ?> with validity: <?php echo $value['amount'] ?></option>

                                                <?php }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-center my-2">
                                        <?php
                                        if (!isset($_SESSION["email"])) {
                                            echo '<a href="' . base_url() . 'membership"><button class="fcard_btn px-4">Buy Now</button></a>';
                                        } else {
                                            echo '<form action="' . base_url() . 'register/pay" method="POST">
                                                    <input type="hidden" name="name" value="' . $_SESSION["name"] . '">
                                                    <input type="hidden" name="email" value="' . $_SESSION["email"] . '">
                                                    <input type="hidden" name="mob" value="' . $_SESSION["number"] . '">
                                                    <input type="hidden" name="add" value="' . $_SESSION["add"] . '">
                                                    <input type="hidden" name="pass" value="' . $_SESSION["pass"] . '">
                                                    <input type="hidden" name="card" value="' . $_SESSION["card"] . '">
                                                    <input type="hidden" name="image" value="' . $_SESSION["image"] . '">
                                                    <input type="hidden" id="bal' . $i . '" name="vali" value="">
                                                    <input type="hidden" id="acc' . $i . '" name="acc_type" value="">
                                                    <input type="hidden" id="amtt' . $i . '" name="amount" value="">
                                                    <button class="fcard_btn px-4">Buy Now</button>
                                                </form>';
                                        }
                                        ?>
                                    </div>
                                    <hr>

                                    <ul class="p-2">
                                        <li class="fcard_p fcard_li"><span><i class="far fa-check-square fcard_icon"></i></span>
                                            &nbsp;
                                            2 year membership only at ₹ 1000</li>
                                        <li class="fcard_p fcard_li"><span><i class="far fa-check-square fcard_icon"></i></span>
                                            &nbsp;
                                            Get any 1 pizza free 1 time with two year membership</li>
                                        <li class="fcard_p fcard_li"><span><i class="far fa-check-square fcard_icon"></i></span>
                                            &nbsp;
                                            2 year membership will cost you less than ₹ 600 after getting free pizza</li>
                                        <li class="fcard_p fcard_li"><span><i class="far fa-check-square fcard_icon"></i></span>
                                            &nbsp;
                                            sallon package is included with this membership</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!-- end Fcard -->
                    <?php } ?>
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

        $('#sel_depart1').change(function() {
            $("#sel_depart1 option:selected").each(function() {
                
                var thisBtn = $(this).val();
                var spt = thisBtn.split(" ");
                if(spt[1]==2){
                    $ball = 24;
                }else{
                    $ball = spt[1];
                }
                console.log(thisBtn)
                document.getElementById('amount1').innerHTML = spt[0];
                document.getElementById('exire1').innerHTML = spt[1] + " " + spt[2];
                document.getElementById('amtt1').value = spt[0];
                document.getElementById('bal1').value = $ball;
                document.getElementById('acc1').value = "Premium";
            });
        }).change();
    });
</script>
<script>
    $(document).ready(function() {

        $('#sel_depart2').change(function() {
            $("#sel_depart2 option:selected").each(function() {
                var thisBtn = $(this).val();
                var spt = thisBtn.split(" ");
                if(spt[1]==2){
                    $ball = 24;
                }else{
                    $ball = spt[1];
                }
                console.log(spt[1])
                document.getElementById('amount2').innerHTML = spt[0];
                document.getElementById('exire2').innerHTML = spt[1] + " " + spt[2];
                document.getElementById('amtt2').value = spt[0];
                document.getElementById('bal2').value = $ball;
                document.getElementById('acc2').value = "Gold";
            });
        }).change();
    });
</script>
<script>
    $(document).ready(function() {

        $('#sel_depart3').change(function() {
            $("#sel_depart3 option:selected").each(function() {
                var thisBtn = $(this).val();
                var spt = thisBtn.split(" ");
                if(spt[1]==2){
                    $ball = 24;
                }else{
                    $ball = spt[1];
                }
                console.log(spt[1])
                document.getElementById('amount3').innerHTML = spt[0];
                document.getElementById('exire3').innerHTML = spt[1] + " " + spt[2];
                document.getElementById('amtt3').value = spt[0];
                document.getElementById('bal3').value = $ball;
                document.getElementById('acc3').value = "Silver";
            });
        }).change();
    });
</script>