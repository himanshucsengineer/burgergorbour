<?php
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$number = $_SESSION["number"];
$card = $_SESSION["card"];
$add = $_SESSION["add"];
$image = $_SESSION["image"];
$date = $_SESSION["date"];
$vali = $_SESSION["vali"];
?>
<?php
if (!isset($_SESSION["date"])) {
    $button = '<p> <span class="bh_tag">Valid To : ' . $_SESSION["vali"] . ' Month</span> </p>';
} else {
    $button = '<p> <span class="bh_tag">Expire In : ' . $_SESSION["date"] . '</span> </p>';
}
?>
<!--p id="demo"></p>
<input type="text" id="getdate" value="<?php echo $date ?>">
<script>
     var dat =document.getElementById('getdate').value;
     var date_spl = dat.split("-");
     var yr = date_spl[0];
     var mond = date_spl[1];
     var da = date_spl[2]
     console.log(da);
var countDownDate = new Date("Jan 5, 2022");
console.log(countDownDate);
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d ";
    
  // If the count down is over, write some text 
  if (distance <= 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script-->
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
                        <div class="col-md-3 pt-5">
                            <ul>
                                <li class="client_links client_active">
                                    <a href="<?php echo base_url() ?>account">Profile And Settings</a>
                                </li>
                                <li class="client_links">
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
                            <div class="px-4">

                                <div class="spacer_s"></div>
                                <!-- Member Card -->
                                <div class="row justify-content-start">
                                    <div class="col-md-10">
                                        <div class="member_card">
                                            <div class="member_card_border">
                                                <div class="row mb-4 mem_row1">
                                                    <div class="col-4 mem_row1_col-left">
                                                        <img src="<?php echo $image ?>" alt="" class="member_card_img">
                                                    </div>
                                                    <div class="col-8">
                                                        <div>
                                                            <div class="mb-2 ">
                                                                <p><span class="member_card_name px-3 pb-0"><?php echo $name ?></span>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p><span class="member_card_mn">Member No.</span>
                                                                    <span class="member_card_num"><?php echo $card ?></span>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p><span class="member_card_mn">Phone.</span>
                                                                    <span class="member_card_phone"><?php echo $number ?></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mem_row2 mx-1">
                                                    <div class="col-7 text-center">
                                                        <p> <span class="mem_text">www.burgerharbour.com</span> </p>
                                                    </div>
                                                    <div class="col-5 text-center">
                                                        <p><span class="mem_text">Logo</span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Membership Card -->

                                <div class="spacer_s"></div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <?php echo $button ?>
                                    </div>
                                </div>

                                <div class="row justify-content-start">
                                    <div class="col-md-4 ">
                                        <div class="mb-4">
                                            <button class="member_btn"> Renew Your Card</button>
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
    </div>
    <!-- End OF Client  -->









    <div class="spacer_s"></div>
    <div class="spacer_s"></div>


</main>