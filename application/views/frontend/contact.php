<main class="main">

    <div class="spacer_s"></div>
    <div class="pattern_bar"></div>
    <!-- Menu Title -->
    <div class="container">
        <div class="row mt-3">
            <div class="col text-center">
                <h2 class="head_h2">Contact Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p class="title_para">*** If Have any Query Feel Free To Ask ***</p>
            </div>
        </div>
    </div>
    <!-- End Menu Title -->


    <div class="spacer_m"></div>

    <!-- Client Details  -->
    <div class="container">
        <div class="contact_box">
            <div class="row  justify-content-center">
                <div class="col-md-11">
                    <div class="row  ">
                        <div class="col-md-6">
                            <?php
                            if ($this->session->flashdata('success')) {
                                echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                            } else if ($this->session->flashdata('error')) {
                                echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                            }


                            ?>
                            <!-- Contact Form -->
                            <form action="<?php echo base_url() ?>frontend/contact/insert_data" method="POST">

                                <div class="mb-4">
                                    <input type="text" class="b_input" name="name" placeholder="*** Your Name ***">
                                </div>
                                <div class="mb-4">
                                    <input type="email" class="b_input" name="email" placeholder="*** Your Email ***">
                                </div>
                                <div class="mb-4">
                                    <input type="number" name="number" class="b_input" placeholder="*** Your Number ***">
                                </div>

                                <div class="mb-4">
                                    <textarea name="msg" id="" cols="30" rows="4" class="b_input" placeholder="*** Your Message ***"></textarea>
                                </div>
                                <div class="mb-4">
                                    <button class="member_btn"> Get In Touch</button>
                                </div>
                            </form>
                            <!-- End Contact Form -->
                        </div>
                        <div class="col-md-5 px-5">

                            <div>
                                <h2 class="head_h3">Our Office</h2>
                                <p>Ground Floor, Rajmahal Complex, Opp. PLA Petrol Pump, Delhi Road, Hisar Haryana
                                    125001 </p>
                            </div>
                            <div>
                                <h2 class="head_h3">Give Us a Call</h2>
                                <p>+91 8957450000</p>
                            </div>
                            <div>
                                <h2 class="head_h3">Email</h2>
                                <p>Info@burgerhurbour.com </p>
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