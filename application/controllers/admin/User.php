<?php
class User extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    $this->load->model('admin/Usermodel');
  }

  public function index()
  {



    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/user');
    $this->load->view('admin/template/footer');
  }



  public function addinventory_api()
  {

    $getPurchaseData = $this->Usermodel->fetchinventory_api();


    foreach ($getPurchaseData as $key => $value) {
          $validity = "+".$value['vali']." month";
          $regdate = strtotime($value['date']);
          
          $updateddate=date('d/m/y',strtotime($validity,$regdate));
          $currntdate= date("d/m/y");
          if($currntdate==$updateddate){ $finaldate="Account Blocked";}else{
            $finaldate = $updateddate;
          }
$arrya_json[] = array('', $value['name'], $value['email'], $value['number'], '<img src="'.base_url().'upload/user/' . $value['file'] . '">', $value['address'], $value['card'], $finaldate, $value['amount'],$value['pass'], $value['order_id'], '<a class="edit" href="' . base_url() . 'admin/brands/galleryedit/' . $value['id'] . '" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="' . $value['id'] . '"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>');
    }
    echo json_encode(array('data' => $arrya_json));
  }



  public function deleteuserdetail()
  {

    if ($this->input->post('deletesliderId')) {
      $this->form_validation->set_rules('deletesliderId', 'text', 'required');
      if ($this->form_validation->run() == true) {
        $getDeleteStatus = $this->Usermodel->deleteuserdata($this->input->post('deletesliderId'));
        if ($getDeleteStatus['message'] == 'yes') {
          $this->session->set_flashdata('success', 'Gallery  deleted successfully');
          redirect(base_url() . "admin/user");
        } else {
          $this->session->set_flashdata('error', 'Something went wrong. Please try again');
          redirect(base_url() . "admin/user");
        }
      } else {
        $this->session->set_flashdata('error', 'Something went wrong. Please try again');
        redirect(base_url() . "admin/user");
      }
    }
  }
}
