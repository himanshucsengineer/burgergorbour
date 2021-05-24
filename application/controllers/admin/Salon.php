<?php
class  Salon extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('vendorAuth')) {
            redirect('login');
        }
        $this->load->model('admin/Menumodel');
    }

    public function index()
    {

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/salon');
        $this->load->view('admin/template/footer');
    }


    public function addinventory_api()
    {

        $getPurchaseData = $this->Menumodel->fetchinventory_api();


        foreach ($getPurchaseData as $key => $value) {
            if ($value['menu_name'] == "saloon") {
                $arrya_json[] = array($value['id'], $value['d_name'], $value['d_desc'], $value['f_o_price'], $value['f_m_price'], '<a class="edit" href="' . base_url() . 'admin/brands/galleryedit/' . $value['id'] . '" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
           <a class="delete_sliders" data-id="' . $value['id'] . '"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>');
            }
        }
        echo json_encode(array('data' => $arrya_json));
    }




    public function editdata()
    {
        if ($_POST['action'] == 'edit') {

            $data = $this->input->post();
            unset($data['action']);
            unset($data['id']);

            $id = $this->input->post('id'); //refrence id key for editing data
            $this->db->where('id', $id)->update('menu', $data);
            echo json_encode($_POST);
        }

        if ($_POST['action'] == 'delete') {
            $id = $this->input->post('id'); //refrence id key for editing data
            $this->db->where('id', $id)->delete('menu');
            echo json_encode($_POST);
        }
    }

    public function deletemenudetail()
    {

        if ($this->input->post('deletesliderId')) {
            $this->form_validation->set_rules('deletesliderId', 'text', 'required');
            if ($this->form_validation->run() == true) {
                $getDeleteStatus = $this->Menumodel->deletemenudata($this->input->post('deletesliderId'));
                if ($getDeleteStatus['message'] == 'yes') {
                    $this->session->set_flashdata('success', 'Gallery  deleted successfully');
                    redirect(base_url() . "admin/salon");
                } else {
                    $this->session->set_flashdata('error', 'Something went wrong. Please try again');
                    redirect(base_url() . "admin/salon");
                }
            } else {
                $this->session->set_flashdata('error', 'Something went wrong. Please try again');
                redirect(base_url() . "admin/salon");
            }
        }
    }
}
