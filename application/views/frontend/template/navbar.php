<style>
    .meu{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        background: #da3028  !important;
        
    }
  
  #mobile_bar{
      width: 100%;
      height: auto;
      position: fixed;
      z-index: 50;
      background-color: rgb(245, 235, 220);
      bottom: 0;
      left: 0;
      right: 0;
  }
  #mobile_bar .flex{
      width: 100%;
      height: auto;
      display: flex;
      background-color: transparent;
  }
  #mobile_bar .flex .card{
      width: 33.33%;
  }

</style>
<body>
    <header class="header-area bg-white meu ">
        <div class="navbar-area ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <div class="logo">
                                <a class="custom-logo-link " rel="home" href="<?php echo base_url();?>"><img width="90" height="55" src="<?php echo base_url(); ?>assest/img/TIRUPATI.svg" alt="Burger Horbour" class="custom-logo" ></a>
                                    <a class="navbar-brand"  href="#" rel="home">
                                </a>
                            </div>
                            <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar">
                                <ul id="nav" class="navbar-nav ml-auto " style="float:left;">
                                    <li class=" nav-item">
                                        <a title="Home" href="<?php echo base_url(); ?>" class="nav-link">
                                            Home
                                        </a>
                                    </li>
                                    <li class=" nav-item">
                                        <a title="About Us" href="<?php echo base_url(); ?>menu" class="nav-link">
                                            Menu
                                        </a>
                                    </li>
                                    <li class=" nav-item">
                                        <a title="Blogs" href="<?php echo base_url(); ?>" class="nav-link">
                                            Plans
                                        </a>
                                    </li>
                                    <li class=" nav-item ">
                                        <a title="career" href="<?php echo base_url(); ?>membership" class="nav-link">
                                            Get Membership
                                        </a>
                                    </li>
                                    <li   class="  nav-item">
                                        <a title="Contact Us" href="<?php echo base_url(); ?>contact-us" class="nav-link">
                                            Contact Us
                                        </a>
                                    </li>
                                    <li   class="  nav-item">
                                        <a title="Contact Us" href="<?php echo base_url(); ?>" class="nav-link">
                                            Login
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
    </header>

    <div id="mobile_bar">
        <div class="flex">
            <div class="card">
                Home
            </div>
            <div class="card">
                Menu
            </div>
            <div class="card">
                Account
            </div>
            
        </div>
    </div>

    <script>
        var w = window.innerWidth;
                if(w>=600){
                    document.getElementById("mobile_bar").style.display = "none";
                }else{
                    document.getElementById("mobile_bar").style.display = "block";
                }
    </script>

  
    
    