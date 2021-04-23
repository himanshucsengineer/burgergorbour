<?php
class  Menu extends CI_controller
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
    $this->load->view('admin/menu');
    $this->load->view('admin/template/footer');
  }


  public function inset_menu()
  {
    $this->load->model('admin/Menumodel');
    $this->input->post('formSubmit');
    $this->form_validation->set_rules('name', 'name', 'required');
    if ($this->form_validation->run()) {


      if (!empty($_FILES['images']['name'])) {

        $File_name = 'userimage-' . strtotime(date('YmdHis'));

        $config['upload_path'] = APPPATH . '../upload/menu';
        $config['file_name'] = $File_name;
        $config['overwrite'] = TRUE;
        $config["allowed_types"] = 'png|jpg|jpeg';
        $config["max_size"] = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('images')) {

          $this->data['error'] = $this->upload->display_errors();
          $this->session->set_flashdata('error', $this->upload->display_errors());

          redirect('admin/menu');
        } else {
          $dataimage_return = $this->upload->data();
          $imageurl = base_url() . 'upload/menu/' . $dataimage_return['file_name'];
        }
      }

      $file = $imageurl;

      $name = $this->input->post('name');

      if ($this->Menumodel->menu($name, $file)) {

        $this->session->set_flashdata('success', 'Item Created');
        redirect(base_url() . 'admin/menu');
      } else {
        $this->session->set_flashdata('error', 'Error In Submistion');
        redirect(base_url() . 'admin/menu');
      }
    } else {
      $this->session->set_flashdata('error', 'Please Fill All The Fields');
      redirect(base_url() . 'admin/menu');
    }
  }


  public function addinventory_api()
  {

    $getPurchaseData = $this->Menumodel->fetchinventory_api();


    foreach ($getPurchaseData as $key => $value) {
      $arrya_json[] = array($value['id'], $value['name'], '<img src="' . $value['file'] . '">', '<a class="edit" href="' . base_url() . 'admin/brands/galleryedit/' . $value['id'] . '" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
           <a class="delete_sliders" data-id="' . $value['id'] . '"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>');
    }
    echo json_encode(array('data' => $arrya_json));
  }



  public function deletemenudetail()
  {

    if ($this->input->post('deletesliderId')) {
      $this->form_validation->set_rules('deletesliderId', 'text', 'required');
      if ($this->form_validation->run() == true) {
        $getDeleteStatus = $this->Menumodel->deletemenudata($this->input->post('deletesliderId'));
        if ($getDeleteStatus['message'] == 'yes') {
          $this->session->set_flashdata('success', 'Gallery  deleted successfully');
          redirect(base_url() . "admin/menu");
        } else {
          $this->session->set_flashdata('error', 'Something went wrong. Please try again');
          redirect(base_url() . "admin/menu");
        }
      } else {
        $this->session->set_flashdata('error', 'Something went wrong. Please try again');
        redirect(base_url() . "admin/menu");
      }
    }
  }
}
