<link href="<?php echo base_url(); ?>admin/assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>admin/assets/css/core.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>

<style>

a.edit {
    display: none;
}


.btn-group, .btn-group-vertical {
    float: right;
}

.btn {
    color: #4e73df;
}
#lowinventory_filter label{
    color:grey;
    font-size:15px;
}
#lowinventory_filter input[type=search]{
    border: 1px solid grey;
    outline:none;
    padding:5px;
    font-size:15px;
    margin-right:5px;
}
.buu{
    width:15rem;
    color:white !important;
    background-color:rgb( 239, 69, 84 );
    border:none;
    outline:none !important;
    padding-top:1rem;
    padding-bottom:1rem;
    font-size:14px;
    margin-bottom:1rem;
}
img{
  width: 70px;
  height: 70px;
}
    .plans{
        width: 100%;
        position: relative;
        height: auto;
        padding-top:2rem ;
        padding-bottom: 2rem;
        border: 1px solid #cdcdcd;
        background-color: white;
    }
    .plans input[type="number"], select{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        border: 1px solid #cdcdcd;
        padding-left: 1rem;
        outline: none;
        margin-bottom: 1rem;
    }
    .plans button{
        width: 8rem;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        background-color: green;
        color: white;
        border: none;
        outline: none;
    }

</style>
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




<div class="all_post">
    <div class="container">
        <h3>Add Plans</h3>
        <div class="plans">
            <div class="container">
            <form action="<?php echo base_url()?>admin/plans/plans" method="post">
                <select name="course" id="">
                    <?php foreach($course as $value){?>
                        <option><?php echo $value['course']?></option>
                    <?php }?>    
                </select>
                <select name="month" id="">
                    <option>1 Month</option>
                    <option>3 Month</option>
                    <option>6 Month</option>
                    <option>12 Month</option>
                </select>
                <input type="number" name="amount" placeholder="Please Enter Amount">
                <button>Create</button>
            </form>
            </div>
        </div>


        <h3>Corse Data</h3><hr>
        
       
  
       
        <div class="row">
          <div class="col-md-12">

            <div class="card-box table-responsive" >
             
              <table id="lowinventory" data-order='[[ 0, "desc" ]]'  style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                <tr> 
                    <th >Sr. No.</th>
                    <th>Course Name</th>
                    <th>Validity</th>
                    <th>Amount(Inr)</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
        </div>
        
    </div>
</div>


<div id="deletePurchaseModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <?php echo form_open(base_url('admin/plans/deleteplandetail'), array('method'=>'post'));?>
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
    <h4 class="modal-title">Delete Course</h4>
    </div>
    <div class="modal-body">
    <div class="row">
    <div class="col-md-12">
    <input type="hidden" class="deletesliderId" name="deletesliderId"/>
    <h4><b>Do you really want to Delete this Course ?</b></h4>
    </div>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
    <input type="submit" class="btn btn-info" name="deleteslider" value="Delete">
    </div>
    </div>
    <?php echo form_close(); ?>
    </div>
    </div>



    <script>
  $(document).ready(function() {
    $('#lowinventory').DataTable( {
        "ajax": "<?php echo base_url(); ?>admin/plans/addinventory_api"
    } );


    $(document).on('click','.delete_sliders',function(){

     $('.deletesliderId').val($(this).attr('data-id'));
        $('#deletePurchaseModal').modal('show');

    });

});

  </script>