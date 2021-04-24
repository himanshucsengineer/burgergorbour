<?php
if (!isset($_SESSION["email"])) {
    $button = '<li class="mm"><a href="' . base_url() . 'signin"><button class="login-button">Login</button></a></li> ';
} else {
    $button = '<li class="nav-item dropdown mm h_nav_links">
                <a class="nodecoration dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            ' . $_SESSION["name"] . '
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <a class="" href="' . base_url() . 'account"><button>Dashboard</button></a>
                <a class="" href="' . base_url() . 'logout"><button>Logout</button></a>
               
            </div>
        </li>
  
  
  
';
}
?>
<?php
if (!isset($_SESSION["email"])) {
    $button4 = '<a href="' . base_url() . 'signin">Login</a> ';
    $namebut = '<h4>Welcome To BH</h4>';
} else {
    $namebut = '<h4>' . $_SESSION["name"] . '</h4>';
    $profilebut = '<a href="' . base_url() . 'account">My Account</a>';
    $memberbut = '<a href="' . base_url() . 'member-card">My Card</a>';
    $logout = '<a href="' . base_url() . 'frontend/logout">Logout</a>';
}
?>
<style>
    .sidepanel {
        width: 0;
        position: fixed;
        z-index: 100;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #b42821;
        overflow-x: hidden;
        transition: 0.2s;

    }

    .sidepanel a {
        width: 100%;
        height: auto;
        padding-left: 1.5rem;
        border-bottom: 1px solid #cdcdcd;
        display: block;
        text-decoration: none;
        padding-top: 1rem;
        padding-bottom: 1rem;
        color: #eee;
        font-size: 20px;

    }

    .sidepanel a:hover {
        color: #ffc107;
    }

    .sidepanel .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
    }

    .openbtn {
        font-size: 2rem;
        padding-right: 5px;
        padding-left: 5px;
        outline: none;
        cursor: pointer;
        background-color: transparent;
        color: white;
        border: 1px solid #cdcdcd;
    }


    .dropdown-menu {
        width: 100%;
        height: auto;
        border: 1px solid #cdcdcd;
        border-radius: 0px !important;
        padding-top: 0px !important;
        padding-bottom: 0px !important;
    }

    .dropdown-menu button {
        width: 100%;
        height: auto;
        padding-top: .8rem;
        padding-bottom: .8rem;
        background-color: white;
        border: none;
        border-bottom: 1px solid #cdcdcd;
    }


    .login-button {
        width: 10rem;
        height: auto;
        padding-top: .1rem;
        padding-bottom: .1rem;
        background-color: #f3cb38;
        border: 2px solid #f3cb38;
        color: black;
        transition: .5s;
    }

    .login-button:hover {
        background-color: transparent;
        border: 2px solid #f3cb38;
        color: #f3cb38;
    }

    .d-flex {
        float: right;
    }

    .sidepanel .flex {
        width: 100%;
        height: auto;
        display: flex;
        padding-top: 2.5rem;
        padding-bottom: 1.8rem;
        padding-left: 1.5rem;
        border-bottom: 1px solid #cdcdcd;
    }

    .sidepanel .flex .side_left {
        width: 80%;
        height: auto;
    }

    .sidepanel .flex .side_left h4 {
        font-size: 19px;
        color: #eee;
    }

    .sidepanel .flex .side_right {
        width: 20%;
        height: auto;
    }

    .sidepanel .flex .side_right button {
        background: transparent;
        color: #eee;
        font-size: 30px;
        border: none;
        outline: none;
        margin-top: -2rem;
        margin-left: 2rem;
    }

    .mobile-bar {
        display: none !important;
    }

    @media only screen and (max-width: 600px) {
        .mobile-bar {
            display: block !important;
            float: right;
            margin-top: -2.5rem;
        }

        .nodecoration {
            display: none !important;
        }

        .mm {
            display: none !important;
        }
    }
</style>
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
    <a href="<?php echo base_url() ?>plans">Plans</a>
    <a href="<?php echo base_url() ?>membership">Membership</a>
    <a href="<?php echo base_url() ?>about-us">About Us</a>
    <a href="<?php echo base_url() ?>contact-us">Contact Us</a>
    <?php echo $button4 ?>

    <?php echo $logout ?>

</div>
<header class="header">
    <div class="container">
        <div class="row ">
            <div class="col-md-2">Logo</div>
            <div class="col-md-10 ">
                <ul class="d-flex h_nav">
                    <li class="h_nav_links mm"><a href="<?php echo base_url() ?>" class="nodecoration">Home</a></li>
                    <li class="mm"><a href="<?php echo base_url() ?>menu" class="nodecoration">Menu</a></li>
                    <li class="mm"><a href="<?php echo base_url() ?>plans" class="nodecoration">Plans</a></li>
                    <li class="mm"><a href="<?php echo base_url() ?>membership" class="nodecoration">Membership</a></li>
                    <li class="mm"><a href="<?php echo base_url() ?>contact-us" class="nodecoration">Contact</a></li>
                    <li class="mm"><a href="<?php echo base_url() ?>about-us" class="nodecoration">About </a></li>
                    <?php echo $button ?>

                </ul>
                <div class="mobile-bar ">
                    <button class="openbtn" onclick="openNav()">☰ </button>
                </div>
            </div>


        </div>
    </div>
</header>

<script>
    function openNav() {
        document.getElementById("mySidepanel").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidepanel").style.width = "0";
    }
</script>

