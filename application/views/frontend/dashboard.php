<!--style>
    .member{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .member .card{
        width: 20rem;
        height: auto;
        padding: 1rem;
        border-radius: 10px;
        border: 1px solid #cdcdcd;
        background-image: linear-gradient(to right bottom, #051937, #051539, #09113a, #100a39, #180138);
    }
    .member .card p{
        color: white;
        text-align: center;
        text-transform: uppercase;
        font-weight: 700;
        margin-bottom: .5rem;
    }
    .member .card .flex{
        width: 100%;
        height: auto;
        display: flex;
        margin-bottom: .5rem;
    }
    .member .card .flex .left{
        width: 25%;
        height: auto;
    }
    .member .card .flex .left img{
        width: 100%;
        border: 1px solid #cdcdcd;
    }
    .member .card .flex .right{
        width: 75%;
        height: auto;
    }
    .member .card .flex .right h6{
        text-align: right;
        font-weight: 500;
        color: white;
    }
    .member .card h5{
        color: white;
        text-align: center;
    }
</style>
<?php 
$name=$_SESSION["name"];
$email=$_SESSION["email"];
$number=$_SESSION["number"];
$card=$_SESSION["card"];
$image=$_SESSION["image"];
?>

<div class="member">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <P>Membership card</P>
                <div class="flex">
                    <div class="left">
                        <img src="<?php echo $image?>" alt="">
                    </div>
                    <div class="right">
                        <h6>Name: <?php echo $name; ?></h6>
                        <h6>No. : <?php echo $number;?></h6>
                    </div>
                </div>
                <h5><?php echo $card;?></h5>
            </div>
        </div>
    </div>
</div-->

<style>
    .my_account{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
        background-color: rgb(245, 235, 220);
    }
    .my_account .main_box{
        width: 100%;
        height: auto;
        
        background-color: transparent;
        border-radius: 12px;
        box-shadow: rgb(73 73 73 / 20%) 0px 0px 4px 0px;
        
    }
    .my_account .main_box button{
        width: 100%;
        height: auto;
        padding-top: .9rem;
        padding-bottom: .9rem;
        background-color: transparent;
        color: rgb(43, 2, 0);
        border: none;
        border-bottom: 2px solid rgb(43, 2, 0);
        text-align: left;
        outline: none;
        padding-left: 1rem;
    }
    .my_account .main_box .flex{
        width: 100%;
        height: auto;
        display: flex;
        flex-wrap: wrap;
    }
    .my_account .main_box .flex .left{
        width: 70%;
        height: auto;
        padding: 1rem;
    }
    .my_account .main_box .flex .left input[type="text"], input[type="email"], input[type="number"], textarea{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        background-color: transparent;
       
        border:  1px solid rgb(43, 2, 0);
        outline: none;
        margin-bottom: 1rem;
    }
    .my_account h4{
        margin-bottom: 1rem;
        text-align: center;
        text-transform: uppercase;
    }
</style>
<div class="my_account">                                                                                                                                                                                                                                                                                                                                           
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-9">
                <h4>My Account</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="main_box">
                    <button>Profile & Settings</button>
                    <button>Membership Details</button>
                    <button style="margin-bottom: 1rem;">Logout</button>   
                </div>
            </div>
            <div class="col-md-9">
                
                <div class="main_box">
                    <div class="flex">
                        <div class="left">
                            <label>Name*:</label>
                            <input type="text" placeholder="Enter Your Name">
                            <label>Email*:</label>
                            <input type="email" placeholder="Enter Your Email">
                            <label>Number*:</label>
                            <input type="number" placeholder="Enter Your Number">
                            <label>Address*:</label>
                            <textarea name="" placeholder="Your Address" cols="30" rows="5"></textarea>
              
                        </div>
                        <div class="right">

                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>