<style>
    .contact_main{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
        background-color: rgb(245, 235, 220);
    }
    .contact_main .flex{
        width: 100%;
        height: auto;
        display: flex;
        flex-wrap: wrap;
        background-color: rgb(245, 235, 220);
        box-shadow: rgb(73 73 73 / 20%) 0px 0px 4px 0px;
        border-radius: 10px;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    .contact_main .flex .left{
        width: 70%;
        height: auto;
        padding: 1rem;
    }
    .contact_main .flex .left input[type="text"], input[type="email"], input[type="number"],textarea{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        border: 1px solid rgb(43, 2, 0);
        background-color: transparent;
        outline: none;
        border-radius:4px ;
        padding-left: 1rem;
        color:rgb(43, 2, 0);
        font-style: italic;
        font-weight: 600;
        margin-bottom: 1rem;
    }
    .contact_main .flex .left button{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        border: none;
        outline: none;
        background-color: #da3028;
        
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        transition: .5s;
    }
    .contact_main .flex .left button:hover{
        background-color: rgb(43, 2, 0);
        border-radius: 10px;
    }
</style>    


<div class="contact_main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="flex">
                    <div class="left">
                    <?php echo form_open(base_url( 'frontend/contact/insert_data'), array('id'=>'contactform','method'=>'POST'));?> 
                        <input type="text" name="name" placeholder="Enter Your Name">
                        <input type="email" name="email" placeholder="Enter Your Email">
                        <input type="number" name="number" placeholder="Enter Your Number">
                        <textarea name="msg" placeholder="Type Your Message" cols="30" rows="5"></textarea>
                        <button>Submit</button>

                        <?php echo form_close(); ?> 
                    </div>
                    <div class="right">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
    $("#contactform").submit(function(event){
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
        $("#contactform").trigger("reset");
	});
});

</script>