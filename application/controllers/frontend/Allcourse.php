<?php
class Allcourse extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Coursemodel');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['course'] = $this->Coursemodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/allcourse',$data);
        $this->load->view('frontend/template/footer');
    }

    
}
