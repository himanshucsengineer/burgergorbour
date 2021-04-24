<?php
class Franchies extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('vendorAuth')) {
            redirect('login');
        }
        $this->load->model('admin/Franchiesmodel');
    }
    public function index()
    {
        $this->load->model('admin/Franchiesmodel');
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/franchies');
        $this->load->view('admin/template/footer');
    }
    public function addinventory_api()
    {
        $getPurchaseData = $this->Franchiesmodel->fetchinventory_api();
        foreach ($getPurchaseData as $key => $value) {
            $arrya_json[] = array($value['id'], $value['name'], $value['email'], $value['subject'], $value['msg'], '<a class="edit" href="' . base_url() . 'admin/brands/galleryedit/' . $value['id'] . '" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="' . $value['id'] . '"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>');
        }
        echo json_encode(array('data' => $arrya_json));
    }
}
