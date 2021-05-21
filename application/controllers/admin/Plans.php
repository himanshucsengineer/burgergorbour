<?php
class  Plans extends CI_controller
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
    $data['course'] = $this->Plansmodel->fetch_plans();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/plans', $data);
    $this->load->view('admin/template/footer');
  }
  public function plans()
  {
    $this->load->model('admin/Plansmodel');
    $this->input->post('formSubmit');
    $this->form_validation->set_rules('course', 'Course', 'required');
    $this->form_validation->set_rules('month', 'Course', 'required');
    $this->form_validation->set_rules('amount', 'Course', 'required');
    if ($this->form_validation->run()) {
      $course = $this->input->post('course');
      $month = $this->input->post('month');
      $amount = $this->input->post('amount');
      if ($this->Plansmodel->plans_insert($course, $month, $amount)) {
        $this->session->set_flashdata('success', 'Plan Created');
        redirect(base_url() . 'admin/plans');
      } else {
        $this->session->set_flashdata('error', 'Error In submission');
        redirect(base_url() . 'admin/plans');
      }
    } else {
      $this->session->set_flashdata('error', 'Please Fill All The Fields');
      redirect(base_url() . 'admin/plans');
    }
  }

  public function addinventory_api()
  {

    $getPurchaseData = $this->Plansmodel->fetchinventory_api();


    foreach ($getPurchaseData as $key => $value) {
      $arrya_json[] = array($value['id'], $value['course'], $value['amount'], $value['month']);
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
      $this->db->where('id', $id)->update('admin_course', $data);
      echo json_encode($_POST);
    }

    if ($_POST['action'] == 'delete') {
      $id = $this->input->post('id'); //refrence id key for editing data
      $this->db->where('id', $id)->delete('admin_course');
      echo json_encode($_POST);
    }
  }


  public function deleteplandetail()
  {

    if ($this->input->post('deletesliderId')) {
      $this->form_validation->set_rules('deletesliderId', 'text', 'required');
      if ($this->form_validation->run() == true) {
        $getDeleteStatus = $this->Plansmodel->deleteplandata($this->input->post('deletesliderId'));
        if ($getDeleteStatus['message'] == 'yes') {
          $this->session->set_flashdata('success', 'Course  deleted successfully');
          redirect(base_url() . "admin/plans");
        } else {
          $this->session->set_flashdata('error', 'Something went wrong. Please try again');
          redirect(base_url() . "admin/plans");
        }
      } else {
        $this->session->set_flashdata('error', 'Something went wrong. Please try again');
        redirect(base_url() . "admin/plans");
      }
    }
  }
}
