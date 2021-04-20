<?php
    class Logout extends CI_controller{
        public function __construct()
    {
        parent::__construct();
       // $this->load->model('frontend/Homemodel');
    }

        public function index(){
            session_destroy();
            //unset($_SESSION["ref_count"]);
            //unset($_SESSION["earn"]);
            //unset($_SESSION["referid"]);
           // $getsocials['brandslogo'] = $this->Homemodel->fetchaddinventory_api();
           // $getsocials['company'] = $this->Homemodel->fetchins();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/home');
            redirect(base_url());
       }
 }

?>  