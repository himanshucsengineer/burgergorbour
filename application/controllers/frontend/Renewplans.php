<?php
class Renewplans extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Plansmodel');
    }
    public function index()
    {
        $data['course'] = $this->Plansmodel->fetch_plans();
        $data['plans'] = $this->Plansmodel->fetchinventory_api();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/renewplan', $data);
        $this->load->view('frontend/template/footer');
    }
    public function getCityDepartment()
    {
        // POST data 
        $postData = $this->input->post();

        // load model 
        $this->load->model('admin/Plansmodel');

        // get data 
        $data = $this->Plansmodel->getCityDepartment($postData);
        echo json_encode($data);
    }
}
