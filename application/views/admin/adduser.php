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
    input[type="file"],select,input[type="number"],input[type="password"],input[type="email"] {
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
        <h3 style="margin-bottom: 1rem;">Add Coustomer</h3>
        <div class="menu">
            <form action="<?php echo base_url(); ?>admin/adduser/create_user" method="POST" enctype="multipart/form-data">
                <label for="">User Name</label>
                <input type="text" name="name" placeholder="Enter Customer Name">
                <label for="">User Email</label>
                <input type="email" name="email" placeholder="Enter Email">
                <label for="">User Number</label>
                <input type="number" name="mob" placeholder="Enter Number">
                <label for="">User Address</label>
                <input type="text"  name="add" placeholder="Enter Address">
                <label for="">Password</label>
                <input type="password" name="pass" placeholder="Enter Password">
                <label for="">User Photo</label>
                <input type="file" id="imageUpload" name="images" >
                <label for="">Validity</label>
               
                <select name="vali" id="">
                    <option value="1 Month">1 Month</option>
                    <option value="3 Month">3 Month</option>
                    <option value="6 Month">6 Month</option>
                    <option value="6 Month">12 Month</option>
                    <option value="2 year">2 Year</option>
                </select>
                <label for="">Select Plan</label>
                <select name="acc_type" id="">
                    <?php foreach($list as $value){?>
                        <option value="<?php echo $value['course']?>"><?php echo $value['course']?></option>
                    <?php }?>
                    <option value="chaap">Chaap Course</option>
                    <option value="pizza and burger">Pizza & burger Course</option>
                </select>
                <label for="">Amount</label>
                <input type="number" name="amount" placeholder="Enter Amount">
                <button>Submit</button>
            </form>
        </div>


        
    </div>
</div>





<script language="javascript" type="text/javascript">
    $(function() {
        $("#fileupload").change(function() {
            $("#dvPreview").html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.png)$/;
            if (regex.test($(this).val().toLowerCase())) {
                if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                    $("#dvPreview").show();
                    $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
                } else {
                    if (typeof(FileReader) != "undefined") {
                        $("#dvPreview").show();
                        $("#dvPreview").append("<img class='thunbnail_image images_preview'/>");
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $("#dvPreview img").attr("src", e.target.result);
                        }
                        reader.readAsDataURL($(this)[0].files[0]);
                    } else {
                        alert("This browser does not support FileReader.");
                    }
                }
            } else {
                alert("Please upload a valid file.");
            }
        });
    });
</script>