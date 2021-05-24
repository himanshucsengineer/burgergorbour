<link href="<?php echo base_url(); ?>admin/assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>admin/assets/css/core.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>


<style type="text/css">
    a.edit {
        display: none;
    }
    .edit_sliders {
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        border: 1px solid #b42821;
        border-radius: 0px;
        outline: none;
        color: white;
        background-color: #b42821;
        transition: .5s;
    }

    .edit_sliders:hover {
        background-color: transparent;
        color: #b42821 !important;

    }

    .btn-group,
    .btn-group-vertical {
        float: right;
    }

    .btn {
        color: #4e73df;
    }

    #lowinventory_filter label {
        color: grey;
        font-size: 15px;
    }

    #lowinventory_filter input[type=search] {
        border: 1px solid grey;
        outline: none;
        padding: 5px;
        font-size: 15px;
        margin-right: 5px;
    }

    .buu {
        width: 15rem;
        color: white !important;
        background-color: rgb(239, 69, 84);
        border: none;
        outline: none !important;
        padding-top: 1rem;
        padding-bottom: 1rem;
        font-size: 14px;
        margin-bottom: 1rem;
    }

    img {
        width: 70px;
        height: 70px;
    }

    .menu {
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
        padding-left: 2rem;
        padding-right: 2rem;
        background-color: white;
        border: 1px solid #cdcdcd;

    }

    .menu input[type="text"],
    input[type="file"],select {
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        border: 1px solid #cdcdcd;
        outline: none;
        padding-left: 1rem;
        margin-bottom: 1rem;
    }

    .menu button {
        width: 10rem;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        background-color: green;
        color: white;
        border: none;
        outline: none;
    }
</style>

<div class="all_post">
    <?php
    if ($this->session->flashdata('success')) {
        echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
    } else if ($this->session->flashdata('error')) {
        echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
    }
    ?>
    <div class="container">
        
            


        <h3 style="margin-top: 4rem;margin-bottom:2rem">Salon</h3>
        <div class="card-box table-responsive">

            <table id="lowinventory" data-order='[[ 0, "desc" ]]' style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Name</th>
                        <th>Description</th>
                       
                        <th>Original Price</th>
                        <th>Member Price</th>
                        <th>Action</th>
                    </tr>

                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

       
    </div>
</div>






<!--Delete-->

<!--Delete-->

<div id="deletePurchaseModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <?php echo form_open(base_url('admin/salon/deletemenudetail'), array('method' => 'post')); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
                <h4 class="modal-title">Delete Course</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" class="deletesliderId" name="deletesliderId" />
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
        $('#lowinventory').DataTable({
            "ajax": "<?php echo base_url(); ?>admin/salon/addinventory_api"
        });

        $('#lowinventory').on('draw.dt', function() {
            $('#lowinventory').Tabledit({
                url: '<?php echo base_url("admin/salon/editdata"); ?>',
                dataType: 'json',

                columns: {
                    identifier: [0, 'id'],
                    editable: [
                        [1, 'd_name'],
                        [2, 'd_desc'],
                      
                        [3, 'f_o_price'],
                        [4, 'f_m_price'],
                    ]

                },
                restoreButton: false,
                deleteButton: false,
                buttons: {
                    edit: {
                        class: 'edit_sliders',
                        html: '<a class="" data-id="380" type="button"  data-toggle="tooltip" data-original-title="edit">Edit</a>',
                        action: 'edit'
                    }
                },
                onSuccess: function(data, textStatus, jqXHR) {
                    if (data.action == 'delete') {
                        $('#' + data.id).remove();
                        $('#lowinventory').DataTable().ajax.reload();
                    }
                }
            });
        });
        $(document).on('click', '.delete_sliders', function() {

            $('.deletesliderId').val($(this).attr('data-id'));
            $('#deletePurchaseModal').modal('show');

        });

    });
</script>





