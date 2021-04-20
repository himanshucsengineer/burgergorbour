<?php
    class Menu extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Menumodel');
    }
    public function index(){
        $data['menu'] = $this->Menumodel->fetchinventory_api();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/menu',$data);
        $this->load->view('frontend/template/footer');
    }
}
?>  