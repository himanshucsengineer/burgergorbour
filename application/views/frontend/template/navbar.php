<?php
if (!isset($_SESSION["email"])) {
    $button = '<li class="mm"><a href="' . base_url() . 'signin"><button class="login-button">Login</button></a></li> ';
} else {
    $button = '<li class="nav-item dropdown mm h_nav_links">
                <a class="nodecoration dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            ' . $_SESSION["name"] . '
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <a class="" href="' . base_url() . 'account"><button><i class="far fa-user"></i> Profile & Setting</button></a>
              
                <a class="" href="' . base_url() . 'logout"><button><i class="fas fa-sign-out-alt"></i>Logout</button></a>
               
            </div>
        </li>
  
  
  
';
}
?>


<?php
if (!isset($_SESSION["razorpay_order_id"])) {
    $plans = '<li class="mm"><a href="' . base_url() . 'plans" class="nodecoration">Our Plans</a></li> ';
} else {
    $plans = '<li class="mm"><a href="' . base_url() . 'renewplans" class="nodecoration">Renew Plans</a></li>
  
  
  
';
}
?>

<?php
if (!isset($_SESSION["razorpay_order_id"])) {
    $membershipp = '<li class="mm"><a href="' . base_url() . 'signin" class="nodecoration">My Card</a></li> ';
} else {
    $membershipp = '<li class="mm"><a href="' . base_url() . 'member-card" class="nodecoration">My Card</a></li>
  
  
  
';
}
?>


<?php
if (!isset($_SESSION["email"])) {
    $button4 = '<a href="' . base_url() . 'signin">Login</a> ';
    $memberbut = '<a href="' . base_url() . 'signin">My Card</a>';
    $namebut = '<h4>Welcome To BH</h4>';
} else {
    $namebut = '<h4>' . $_SESSION["name"] . '</h4>';
    $profilebut = '<a href="' . base_url() . 'account">My Account</a>';
    $memberbut = '<a href="' . base_url() . 'member-card">My Card</a>';
    $logout = '<a href="' . base_url() . 'frontend/logout">Logout</a>';
}
?>

<!-- Header -->
<div id="mySidepanel" class="sidepanel">
    <div class="flex">
        <div class="side_left">
            <?php echo $namebut ?>
        </div>
        <div class="side_right">
            <button href="javascript:void(0)" class="" onclick="closeNav()">×</button>
        </div>
    </div>

    <a href="<?php echo base_url() ?>">Home</a>
    <?php echo $profilebut ?>
    <?php echo $memberbut ?>
    <a href="<?php echo base_url() ?>menu">Menu</a>
    <a href="<?php echo base_url() ?>plans">Our Plans</a>
    <a href="<?php echo base_url() ?>membership">Buy Membership</a>
    <a href="<?php echo base_url() ?>about-us">About Us</a>
    <a href="<?php echo base_url() ?>contact-us">Contact Us</a>
  

    <?php echo $logout ?>

</div>
<header class="header">
    <div class="container">
        <div class="row nbvvb">
            <div class="col-md-2">
                <img class="logo" src="<?php echo base_url()?>/assest/img/bh_logo2.svg" alt="">
            </div>
            <div class="col-md-10 ">
                <ul class="d-flex h_nav">
                    <li class="h_nav_links mm"><a href="<?php echo base_url() ?>" class="nodecoration">Home</a></li>
                    <li class="mm"><a href="<?php echo base_url() ?>menu" class="nodecoration">Menu</a></li>
                    <?php echo $plans; ?>
                    
                    <li class="mm"><a href="<?php echo base_url() ?>membership" class="nodecoration">Buy Membership</a></li>
                    <li class="mm"><a href="<?php echo base_url() ?>contact-us" class="nodecoration">Contact Us</a></li>
                    <li class="mm"><a href="<?php echo base_url() ?>about-us" class="nodecoration">About Us</a></li>
                    <?php echo $membershipp ?>

                </ul>
                <div class="mobile-bar ">
                    <button class="openbtn" onclick="openNav()">☰ </button>
                </div>
            </div>


        </div>
    </div>
</header>
<a href="https://web.whatsapp.com/send?phone=+917206324915&text=Hi, Sir I want to know about an order can you help me out?" target="_blank"><button class="ws"> <i class="fa fa-whatsapp" aria-hidden="true" style="margin-right:.5rem;"></i>Chat Now</button></a>
<a href="https://api.whatsapp.com/send?phone=+917206324915&text=Hi, Sir I want to know about an order can you help me out?" target="_blank"><button class="wss"> <i class="fa fa-whatsapp" aria-hidden="true" style="margin-right:.5rem;"></i>Chat?</button></a>

<script>
    function openNav() {
        document.getElementById("mySidepanel").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidepanel").style.width = "0";
    }
</script>