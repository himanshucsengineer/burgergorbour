<?php
class  Adduser extends CI_controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    $this->load->model('admin/Addusermodel');
    $this->load->model('frontend/Signupmodel');
  }

  public function index()
  {
    $data['list']=$this->Addusermodel->fetch_course();
    
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/adduser',$data);
    $this->load->view('admin/template/footer');
  }


  public function create_user()
    {
      $this->load->model('frontend/Signupmodel');
        $this->load->model('admin/Addusermodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
        $this->form_validation->set_rules('mob', 'number', 'required|is_unique[user.number]');
        $this->form_validation->set_rules('add', 'Subject', 'required');
        $this->form_validation->set_rules('pass', 'Message', 'required');
        $this->form_validation->set_rules('vali', 'Name', 'required');
        $this->form_validation->set_rules('acc_type', 'Email', 'required');
        $this->form_validation->set_rules('amount', 'number', 'required');
       
        if ($this->form_validation->run()) {

          $code = '';
            for ($i = 0; $i < 6; $i++) {
                $code .= mt_rand(0, 9);
            }
           
            if (!empty($_FILES['images']['name'])) {

              $File_name = 'userimage-' . strtotime(date('YmdHis'));

              $config['upload_path'] = APPPATH . '../upload/user';
              $config['file_name'] = $File_name;
              $config['overwrite'] = TRUE;
              $config["allowed_types"] = 'png|jpg|jpeg';
              $config["max_size"] = '6144';

              $this->load->library('upload', $config);

              if (!$this->upload->do_upload('images')) {

                  $this->data['error'] = $this->upload->display_errors();
                  $this->session->set_flashdata('error', $this->upload->display_errors());

                  redirect(base_url().'admin/adduser');
              } else {
                  $dataimage_return = $this->upload->data();
                  $imageurl = $dataimage_return['file_name'];
              }
          }
          $vali = $this->input->post('vali');
          $acc_type =  $this->input->post('acc_type');
          $accc = explode(" ", $acc_type);
          $validity = explode(" ", $vali);
          if($validity[0] == 2){
            $finalvali = "24";
          }else{
            $finalvali = $validity[0];
          }
         
          if($accc[0] == "Both"){
            $finalacc_type = "Premium";
          }elseif($accc[0]== "Burger"){
            $finalacc_type = "Gold";
          }elseif($accc[0]== "pizza"){
            $finalacc_type = "pizza and burger";
          }elseif($accc[0]== "chaap"){
            $finalacc_type = "chaap";
          }
          else{
            $finalacc_type = "Silver";
          }
         
        
          $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'number' => $this->input->post('mob'),
            'address' => $this->input->post('add'),
            'pass' => $this->input->post('pass'),
            'vali' => $finalvali,
            'acc_type' => $finalacc_type,
            'amount' => $this->input->post('amount'),
            'order_id' => "cash",
            'file' => $imageurl,
            'card' =>$code,
        );

            if ($this->Addusermodel->insert_data($data)) {

                $this->session->set_flashdata('success', 'User Added');
                redirect(base_url() . 'admin/adduser');
            } else {

                $this->session->set_flashdata('error', 'Error In Submission');
                redirect(base_url() . 'admin/adduser');
            }
        } else {

            $this->session->set_flashdata('error', 'Email Already or Number Used');
            redirect(base_url() . 'admin/adduser');
        }
    }

  
}
