<?php
$email = $_SESSION["email"];
$name = $_SESSION["name"];
$mob = $_SESSION["number"];
$add = $_SESSION["add"];
$pass = $_SESSION["pass"];
$card = $_SESSION["card"];
$image = $_SESSION["image"];

?>

<?php
if (!isset($_SESSION["email"])) {
    $button1 = '<a href="' . base_url() . 'membership"><button class="member_btn"> Get MemberShip</button></a>';
} else {
    $button1 = '<form action="' . base_url() . 'register/pay" method="POST">
    <input type="hidden" name="name" value="' . $_SESSION["name"] . '">
    <input type="hidden" name="email" value="' . $_SESSION["email"] . '">
    <input type="hidden" name="mob" value="' . $_SESSION["number"] . '">
    <input type="hidden" name="add" value="' . $_SESSION["add"] . '">
    <input type="hidden" name="pass" value="' . $_SESSION["pass"] . '">
    <input type="hidden" name="card" value="' . $_SESSION["card"] . '">
    <input type="hidden" name="image" value="' . $_SESSION["image"] . '">
    <input type="hidden" id="bal" name="vali" value="">
    <input type="hidden" id="amtt" name="amount" value="">
    <button class="member_btn"> Get MemberShip</button>
  </form>';
}
?>
<style>
    .plans {
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }

    .plans .flex {
        width: 100%;
        height: auto;
        display: flex;
    }

    .plans .flex .but {
        width: 33.33%;
    }

    .btn {
        border: none;
        outline: none;
        padding: 10px 16px;
        background-color: #f1f1f1;
        cursor: pointer;
        font-size: 18px;
    }

    /* Style the active class, and buttons on mouse-over */
    .active,
    .btn:hover {
        background-color: #666;
        color: white;
    }
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type='text/javascript'>
    var baseURL = "<?php echo base_url(); ?>";
    $(document).ready(function() {
        $('#aBtnGroup button').on('click', function() {
            var thisBtn = $(this);

            thisBtn.addClass('active').siblings().removeClass('active');
            var btnText = thisBtn.text();
            var btnValue = thisBtn.val();
            console.log(btnText + ' - ' + btnValue);


            $.ajax({
                url: '<?= base_url() ?>frontend/Plans/getCityDepartment',
                method: 'post',
                data: {
                    course: btnValue
                },
                dataType: 'json',
                success: function(response) {

                    // Remove options 

                    $('#sel_depart').find('option').not(':first').remove();

                    // Add options
                    $.each(response, function(index, data) {
                        $('#sel_depart').append('<option value="' + data['month'] + ' ' + data['amount'] + '">Get Membership in: INR' + data['month'] + ' with validity: ' + data['amount'] + '</option>');
                    });
                }
            });


        });
        $('#sel_depart').on('click', function() {
            var thisBtn = $(this).val();
            var spt = thisBtn.split(" ");
            document.getElementById('amount').innerHTML = spt[0];
            document.getElementById('amtt').value = spt[0];
            document.getElementById('bal').value = spt[1];
            document.getElementById('vali').innerHTML = spt[1] + "Mo.";
        });
    });
    // baseURL variable




    // Add active class to the current button (highlight it)
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            if (current.length > 0) {
                current[0].className = current[0].className.replace(" active", "");
            }
            this.className += " active";
        });
    }
</script>


<!--p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2022");

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
</script>

<script>
var d = new Date("January 14, 2012");
console.log(d.toLocaleDateString());
var first = d.toLocaleDateString();
var second= d.setMonth(d.getMonth() + 3);
if(first==second){
  console.log("email sent ")
}else{
  console.log("wait")
}

console.log(d.toLocaleDateString());
</script-->










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
                <p class="title_para">*** Join Our membership and get reward for it ***</p>
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

    <!-- Choose Plan -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div id="aBtnGroup" class="row justify-content-center">

                    <?php foreach ($course as $city) { ?>

                        <!-- F_card   3 -->
                        <div class="col-md-4 px-4 py-2 mb-4">
                            <div class="fcard fcard_bg">
                                <img src="<?php echo base_url() ?>assest/img/bg3.jpg" alt="" class="fcard_img">
                                <div class="fcard_content">
                                    <h3 class="head_h3 mb-1"><?php echo $city['course'] ?></h3>
                                    <p class="fcard_p">looking Scarlett Johansson once. As a matter </p>
                                    <ul>
                                        <li class="fcard_p">6 Days a Week</li>
                                        <li class="fcard_p">Dedicated Trainer Allocated</li>
                                        <li class="fcard_p">Diet Plan Included</li>
                                    </ul>
                                    <div class="text-center my-1">
                                        <!-- <div class="col-6  text-center"><span class="mem_card_price">250 </span>
                                            <span class="mem_card_tag">&#8377 / mon</span>
                                        </div> -->

                                        <button type="button" value="<?php echo $city['course'] ?>" class="fcard_btn">Select Plan </button>
                                    </div>
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
    <!-- End Choose plan -->





    <!-- end Plan 1 -->



    <!-- Plan 2 -->
    <div class="plan">
        <!-- Amount Section -->
        <div class="amt_sec">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <p><sup class="amt_sec-sup">IN &#8377</sup> <span class="amt_sec-num" id="amount">999</span><sub class="amt_sec-sub"> / <span id="vali">year</span></sub></p>

                        <div>
                            <p>Take Your Offers and enjoy Your meal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Amount Section -->

        <!-- Select -->
        <div class="amt_sec">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-6 text-center">
                        <select id='sel_depart' class="b_input amt_sec-select">
                            <option>Select Your Billing Options</option>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <div class="mb-4">
                            <?php echo $button1 ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Select -->
    </div>
    <!-- end Plan 2 -->







    <!-- End Indian Rupees -->

    <!-- -->
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="mb-4">
                    <input type="text" class="b_input" placeholder="*** Your Name ***">
                </div>
                <div class="mb-4">
                    <input type="email" class="b_input" placeholder="*** Your Email ***">
                </div>
                <div class="mb-4">
                    <input type="file" class="b_input" />
                </div>
                <div class="mb-4">
                    <input type="number" class="b_input" placeholder="*** Your Phone Number ***" />
                </div>
                <div class="mb-4">
                    <textarea name="" id="" cols="30" rows="4" class="b_input"
                        placeholder="*** Your Address ***"></textarea>
                </div>
                <div class="mb-4">
                    <button class="member_btn"> Get MemberShip</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End 3 container Section -->

    <div class="spacer_s"></div>
    <div class="spacer_s"></div>


</main>