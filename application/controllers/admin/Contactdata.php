<?php
class Contactdata extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    $this->load->model('admin/Contactmodel');
  }

  public function index()
  {


    $data['list']=$this->Contactmodel->fetchinventory_api();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/contactdata',$data);
    $this->load->view('admin/template/footer');
  }


  public function update_bank($id){
    $this->load->model('admin/Contactmodel');
    $this->input->post('formSubmit');

         
        $this->form_validation->set_rules('action', 'Action', 'required');
        
        if ($this->form_validation->run()){ 
         
                $bank_acc = $this->input->post('action');
                   
                    
                if($this->Contactmodel->update_bank($bank_acc,$id)){
                    $this->session->set_flashdata('error','Updated Successfully'); 
                    redirect(base_url().'admin/contactdata');  
                }
                else{
                    $this->session->set_flashdata('success','Updated Successfully'); 
                    redirect(base_url().'admin/contactdata'); 
                }
            }
            else{
                $this->session->set_flashdata('dashboard_error','Plase Choose An action'); 
                redirect(base_url().'admin/contactdata');   
            }
   
}






  public function addinventory_api()
  {

    $getPurchaseData = $this->Contactmodel->fetchinventory_api();


    foreach ($getPurchaseData as $key => $value) {
      $arrya_json[] = array($value['id'], $value['name'], $value['email'], $value['number'],$value['subject'], $value['msg'], '<a class="edit" href="' . base_url() . 'admin/brands/galleryedit/' . $value['id'] . '" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="' . $value['id'] . '"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>');
    }
    echo json_encode(array('data' => $arrya_json));
  }



  public function deletecontactdetail()
  {

    if ($this->input->post('deletesliderId')) {
      $this->form_validation->set_rules('deletesliderId', 'text', 'required');
      if ($this->form_validation->run() == true) {
        $getDeleteStatus = $this->Contactmodel->deletecontactdata($this->input->post('deletesliderId'));
        if ($getDeleteStatus['message'] == 'yes') {
          $this->session->set_flashdata('success', 'Gallery  deleted successfully');
          redirect(base_url() . "admin/contactdata");
        } else {
          $this->session->set_flashdata('error', 'Something went wrong. Please try again');
          redirect(base_url() . "admin/contactdata");
        }
      } else {
        $this->session->set_flashdata('error', 'Something went wrong. Please try again');
        redirect(base_url() . "admin/contactdata");
      }
    }
  }
}
