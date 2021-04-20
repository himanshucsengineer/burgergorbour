<!--style>
    .plans{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .plans h1{
        text-align: center;
    }
    .plans select{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        border: 1px solid #cdcdcd;
        outline: none;
    }
 .plan_card{
        width: 100%;
        height: auto;
        display: flex;
        flex-wrap: wrap;
        margin-top: 2rem;
    }
   .plan_card .card{
        width: 25%;
        height: auto;
        border: 1px solid #cdcdcd;
        border-radius: 0px  !important;
        padding: 1rem;
    }
    input[type="text"]{
        width: 100%;
        height: auto;
        
        border: none;
        outline: none;
    }
    .plan_card .flex{
        width: 100%;
        height: auto;
        display: flex;
    }
    .plan_card .flex .left{
        width: 60%;
        height: auto;
    }
    .plan_card .flex .right{
        width: 40%;
        height: auto;
    }
    .plan_card button{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        background-color: green;
        color: white;
        border: none;
        outline: none;
    }
</style>



<div class="plans">
    <div class="container">
        <h1>Plans Page</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
               
            <select id='sel_city'>
           <option>-- Select city --</option>
           <?php
           foreach($course as $city){
             echo "<option value='".$city['course']."'>".$city['course']."</option>";
           }
           ?>
        </select >

        <div id='sel_depart'>

        </div>
        

                
            </div>
        </div>
        
        
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script type='text/javascript'>
  // baseURL variable
  var baseURL= "<?php echo base_url();?>";
 
  $(document).ready(function(){
 
    // City change
    $('#sel_city').change(function(){
      var city = $(this).val();
        console.log(city);
      // AJAX request
      $.ajax({
        url:'<?=base_url()?>frontend/plans/getCityDepartment',
        method: 'post',
        data: {city: city},
        dataType: 'json',
        success: function(response){

          // Remove options 
  
          $('#sel_depart').find('div').not(':first').remove();

          // Add options
          $.each(response,function(index,data){
                
            console.log(data['month']);
             $('#sel_depart').append('<div class="plans_card"><div class="card"><form action="<?php echo base_url();?>register/pay" method="post"><h4 class="text-center" style="margin-bottom: 1rem;">Silver plan</h4><input type="hidden" name="plan_name"  value="silver" readonly><div class="flex"><div class="left"><p>Amount</p></div><div class="right"><input type="text" name="amount" value="'+data['month']+' Rs." readonly></div></div><div class="flex"><div class="left"><p>Validity</p></div><div class="right"><input type="text" name="validity" value="'+data['amount']+'" readonly></div></div><button  name="plan">Buy Now</button></form></div>');
          });
        }
     });
   });
 
 
 
 });
 </script-->