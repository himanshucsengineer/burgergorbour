
<?php 
$name=$_SESSION["name"];
$email=$_SESSION["email"];
$number=$_SESSION["number"];
$card=$_SESSION["card"];
$add=$_SESSION["add"];
$image=$_SESSION["image"];
?>






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
                                    <a href="<?php echo base_url()?>account">Profile And Settings</a>
                                </li>
                                <li class="client_links">
                                    <a href="<?php echo base_url()?>member-card">Membership Details</a>
                                </li>
                                <li class="client_links">
                                    <a href="<?php echo base_url()?>frontend/logout">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <div class="row mb-3">
                                <div class="col">
                                    <h1 class="head_h3">Profile Settings</h1>
                                    <hr>
                                </div>
                            </div>
                            <div class="px-4">
                            <?php
      if($this->session->flashdata('success'))
      {
      echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
      }
      else if($this->session->flashdata('error'))
      {
      echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>';
      }


      ?>
                            <?php echo form_open(base_url( 'frontend/login/update_pro'), array('id'=>'updateprofileform','method'=>'POST'));?>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-4">
                                            <label for="" class="b_input_lable">Name *</label>
                                            <input type="text" name="name" class="b_input" placeholder="*** Your Name ***" value="<?php echo $name?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-4">
                                            <label for="" class="b_input_lable">Email *</label>
                                            <input type="Email" class="b_input" name="email" placeholder="*** Your Email ***" value="<?php echo $email?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-4">
                                            <label for="" class="b_input_lable">Phone Number *</label>
                                            <input type="number" class="b_input" name="mob" placeholder="*** Your Number ***" value="<?php echo $number?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-4">
                                            <label for="" class="b_input_lable">Address *</label>
                                            <textarea name="add" id="" cols="30" rows="4" class="b_input"
                                                placeholder="*** Your Address ***"><?php echo $add?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-4">
                                            <div class="mb-4">
                                                <button class="member_btn">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php echo form_close(); ?> 
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

<div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <!-- Modal body -->
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span id="validation" class="form_errors"></span>
                  </div>
                </div>
              </div>
            </div>

    <script>
    $("#updateprofileform").submit(function(event){
	event.preventDefault();
	var post_url = $(this).attr("action"); 
	var request_method = $(this).attr("method"); 
	var form_data = $(this).serialize(); 
	
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data,
	}).done(function(response){ //
        console.log(response);
        $('#validation').html(response);
        $('#myModal').modal('show').fadeIn('slow');
        $("#updateprofileform").trigger("reset");
	});
});

</script>