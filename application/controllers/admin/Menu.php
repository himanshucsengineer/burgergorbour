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
    $this->form_validation->set_rules('menu_name', 'Menu name', 'required');
    $this->form_validation->set_rules('d_name', 'name', 'required');
    $this->form_validation->set_rules('f_o_price', 'name', 'required');
    $this->form_validation->set_rules('f_m_price', 'name', 'required');
    if ($this->form_validation->run()) {

      $data = array(
        'menu_name' => $this->input->post('menu_name'),
        'd_name' => $this->input->post('d_name'),
        'd_desc' => $this->input->post('d_desc'),
        'h_o_price' => $this->input->post('h_o_price'),
        'h_m_price' => $this->input->post('h_m_price'),
        'f_o_price' => $this->input->post('f_o_price'),
        'f_m_price' => $this->input->post('f_m_price'),
        
      );

 

      if ($this->Menumodel->menu($data)) {

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
