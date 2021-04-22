<?php 
$email = $_SESSION["email"];
$name=$_SESSION["name"];
$mob = $_SESSION["number"];
$add=$_SESSION["add"];
$pass=$_SESSION["pass"];
$card=$_SESSION["card"];
$image=$_SESSION["image"];

?>



<!--form action="<?php echo base_url();?>register/pay" method="POST">
    <input type="text" name="name" value="<?php echo $name?>">
    <input type="email" name="email" value="<?php echo $email?>">
    <input type="number" name="mob" value="<?php echo $mob?>">
    <input type="text" name="add" value="<?php echo $add?>">
    <input type="text" name="pass" value="<?php echo $pass?>">
    <input type="text" name="card" value="<?php echo $card?>">
    <input type="text" name="image" value="<?php echo $image?>">
    <input type="text" name="vali" value="1 month">
    <input type="number" id="amt" name="amount" value="">
    <button>Pay Now</button>
</form-->
<style>
    button{
        background-color: white;
        border: 1px solid #cdcdcd;

    }
    .plans{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .plans .flex{
        width: 100%;
        height: auto;
        display: flex;
    }
    .plans .flex .but{
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
.active, .btn:hover {
  background-color: #666;
  color: white;
}
</style>
<!--div class="plans">
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-md-6">
                
               
                  <div>Selected Val:  <span id="selectedVal"></span></div>
          
                </div>
                <div class="col-md-6">
                    <h1>Membetship Subscription</h1>
                    <p>Choose The Plan That's Right For You</p>
                    <div class="flex">
                      

                    

                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script type='text/javascript'>
var baseURL= "<?php echo base_url();?>";
$(document).ready(function() {
  $('#aBtnGroup button').on('click', function() {
    var thisBtn = $(this);
    
    thisBtn.addClass('active').siblings().removeClass('active');
    var btnText = thisBtn.text();
    var btnValue = thisBtn.val();
    console.log(btnText + ' - ' + btnValue);
    
    
    $.ajax({
        url:'<?=base_url()?>frontend/Plans/getCityDepartment',
        method: 'post',
        data: {course: btnValue},
        dataType: 'json',
        success: function(response){

          // Remove options 
      
          $('#sel_depart').find('option').not(':first').remove();

          // Add options
          $.each(response,function(index,data){
             $('#sel_depart').append('<option value="'+data['month']+' '+data['amount']+'">Get Membership in: INR'+data['month']+' with validity: '+data['amount']+'</option>');
          });
        }
     });


  });
  $('#sel_depart').on('click', function() {
    var thisBtn = $(this).val();
    var spt   =  thisBtn.split(" ");
    document.getElementById('amount').innerHTML = spt[0];
    document.getElementById('amtt').value = spt[0];
    document.getElementById('bal').value = spt[1];
    document.getElementById('vali').innerHTML = spt[1]+"Mo.";
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
   
                        
      
                     
                      
    <div class="choose_plan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="row justify-content-center">
                        <div class="col-md-2 col-3">
                          <div id="aBtnGroup">
                          <?php foreach($course as $city){?>
                            <button type="button" value="<?php echo $city['course']?>" class="member_btn"> <?php echo $city['course']?></button>
                            <?php }?>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer_s"></div>
    <!-- End Choose plan -->




        <!-- Plan 1 -->
        <div class="plan hide">
            <!-- Amount Section -->
            <div class="amt_sec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <p><sup class="amt_sec-sup">IN &#8377</sup> <span class="amt_sec-num">777</span><sub
                                    class="amt_sec-sub"> / year</sub></p>

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
                            <select name="" id="" class="b_input amt_sec-select">
                                <option value="" selected>Select Your Billing Options</option>
                                <option value="">Burger</option>
                                <option value="">Burger</option>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <div class="mb-4">
                                <button class="member_btn"> Get MemberShip</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Select -->
        </div>
        <!-- end Plan 1 -->



        <!-- Plan 2 -->
        <div class="plan">
            <!-- Amount Section -->
            <div class="amt_sec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <p><sup class="amt_sec-sup">IN &#8377</sup> <span class="amt_sec-num" id="amount">999</span><sub
                                    class="amt_sec-sub"> / <span id="vali">year</span></sub></p>

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
                            <form action="<?php echo base_url();?>register/pay" method="POST">
                              <input type="hidden" name="name" value="<?php echo $name?>">
                              <input type="hidden" name="email" value="<?php echo $email?>">
                              <input type="hidden" name="mob" value="<?php echo $mob?>">
                              <input type="hidden" name="add" value="<?php echo $add?>">
                              <input type="hidden" name="pass" value="<?php echo $pass?>">
                              <input type="hidden" name="card" value="<?php echo $card?>">
                              <input type="hidden" name="image" value="<?php echo $image?>">
                              <input type="hidden" id="bal" name="vali" value="">
                              <input type="hidden" id="amtt" name="amount" value="">
                              <button class="member_btn"> Get MemberShip</button>
                            </form>
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
