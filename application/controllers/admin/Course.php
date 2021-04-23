<?php
class Course extends CI_controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    $this->load->model('admin/Plansmodel');
  }

  public function index()
  {
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/course');
    $this->load->view('admin/template/footer');
  }
  public function Course()
  {
    $this->load->model('admin/Plansmodel');
    $this->input->post('formSubmit');
    $this->form_validation->set_rules('course', 'Course', 'required');
    if ($this->form_validation->run()) {
      $course = $this->input->post('course');

      if ($this->Plansmodel->Course_insert($course)) {
        $this->session->set_flashdata('success', 'Course Created');
        redirect(base_url() . 'admin/course');
      } else {
        $this->session->set_flashdata('error', 'Error In submission');
        redirect(base_url() . 'admin/course');
      }
    } else {
      $this->session->set_flashdata('error', 'Please Fill All The Fields');
      redirect(base_url() . 'admin/course');
    }
  }

  public function addinventory_api()
  {

    $getPurchaseData = $this->Plansmodel->fetch_plans();


    foreach ($getPurchaseData as $key => $value) {
      $arrya_json[] = array($value['id'], $value['course'], '<a class="edit" href="' . base_url() . 'admin/brands/galleryedit/' . $value['id'] . '" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
           <a class="delete_sliders" data-id="' . $value['id'] . '"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>');
    }
    echo json_encode(array('data' => $arrya_json));
  }



  public function deleteplandetail()
  {

    if ($this->input->post('deletesliderId')) {
      $this->form_validation->set_rules('deletesliderId', 'text', 'required');
      if ($this->form_validation->run() == true) {
        $getDeleteStatus = $this->Plansmodel->delete_plans($this->input->post('deletesliderId'));
        if ($getDeleteStatus['message'] == 'yes') {
          $this->session->set_flashdata('success', 'Course  deleted successfully');
          redirect(base_url() . "admin/course");
        } else {
          $this->session->set_flashdata('error', 'Something went wrong. Please try again');
          redirect(base_url() . "admin/course");
        }
      } else {
        $this->session->set_flashdata('error', 'Something went wrong. Please try again');
        redirect(base_url() . "admin/course");
      }
    }
  }
}
