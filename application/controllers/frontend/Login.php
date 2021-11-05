<?php
class Login extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/login');
        $this->load->view('frontend/template/footer');
    }

    public function login()
    {
        $url = $_SESSION['url'];
        $this->load->model('frontend/Signupmodel');
        $model_data = $this->Signupmodel->fetchModeldata();
        $login_success = 0;
       
        $user_data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );
        foreach ($model_data as $value) {
           
            if ((strtolower($value['email']) == strtolower($user_data['email'])) && ($value['pass'] == $user_data['password'])) {

                $_SESSION["email"] = $value["email"];
                $_SESSION["name"] = $value["name"];
                $_SESSION["number"] = $value["number"];
                $_SESSION["add"] = $value["address"];
                $_SESSION["card"] = $value["card"];
                $_SESSION["image"] = $value["file"];
                $_SESSION["date"] = $value["date"];
                $_SESSION["vali"] = $value["vali"];
                $_SESSION["acc_type"] = $value["acc_type"];
                $_SESSION['razorpay_order_id'] = $value["order_id"];
                $login_success = 1;
                break;
            }
        }
        if ($login_success == 1) {
          //  $numbers = "918905366876";
          //  $message = "testyfbf";
            // Account details
         //    $apiKey = urlencode('ODJiYmZjOTEzNzhjN2Y5YzFiMjJkYmMwYmNkM2VjNmI='); //Enter your TextLocal key
            // Message details
          //  $sender = urlencode('TXTLCL');
            // Prepare data for POST request
          //  $data = array('apikey' => $apiKey, 'numbers' => $numbers, 'sender' => $sender, 'message' => $message);
            // Send the POST request with cURL
          //  $ch = curl_init('https://api.textlocal.in/send/');
          //  curl_setopt($ch, CURLOPT_POST, true);
          //  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
          //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          //  $response = curl_exec($ch);
          //  echo $response;
          //  if (!$response) {
          //      echo "please try again letter";
          //  }else{
           //      echo "sent";
           // }
           // curl_close($ch);
            //die;
            $_SESSION["status"] = 1;
            $this->session->set_flashdata('success', 'Login Successfull');
            redirect(base_url() . 'account');
        } else {
            $this->session->set_flashdata('error', 'Wrong Email or Password.');
            redirect(base_url() . 'signin');
        }
    }

    public function signup()
    {
        $this->load->model('frontend/Signupmodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
        $this->form_validation->set_rules('mob', 'Email', 'required|is_unique[user.number]');
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

                    redirect(base_url().'membership');
                } else {
                    $dataimage_return = $this->upload->data();
                    $imageurl =  $dataimage_return['file_name'];
                }
            }else{
                $this->session->set_flashdata('error','Please Upload Your Photo');

                    redirect(base_url().'membership');
            }

            $_SESSION["email"] = $this->input->post('email');
            $_SESSION["name"] = $this->input->post('name');
            $_SESSION["number"] = $this->input->post('mob');
            $_SESSION["add"] = $this->input->post('add');
            $_SESSION["pass"] = $this->input->post('pass');
            $_SESSION["card"] = $code;
            $_SESSION["image"] = $imageurl;
            $this->session->set_flashdata('success', 'Signup Successful');
            redirect(base_url() . 'frontend/plans');
        } else {
            $this->session->set_flashdata('error', 'This  email already used by someone try with another email');
            redirect(base_url().'membership');
        }
    }

    public function update_pro()
    {
        $this->load->model('frontend/Signupmodel');

        $this->input->post('formSubmit');


        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mob', 'Number', 'required');
        $this->form_validation->set_rules('add', 'Address', 'required');
        if ($this->form_validation->run()) {

            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $number = $this->input->post('mob');
            $addrs = $this->input->post('add');


            if ($this->Signupmodel->update_pro($name, $number, $email, $addrs)) {


                $_SESSION["name"] = $this->input->post('name');
                $_SESSION["email"] = $this->input->post('email');
                $_SESSION["number"] = $this->input->post('number');
                $_SESSION["add"] = $this->input->post('add');

                $this->session->set_flashdata('error', 'Error In Submission');
                redirect(base_url() . 'account');
            } else {

                $this->session->set_flashdata('success', 'Your data have been submitted');
                redirect(base_url() . 'account');
            }
        } else {

            $this->session->set_flashdata('error', 'Please Fill All The Fields');
            redirect(base_url() . 'account');
        }
    }





    public function change_pass()
    {
        $this->load->model('frontend/Signupmodel');
        $model_data = $this->Signupmodel->fetchModeldata();
        $this->input->post('formSubmit');


        $this->form_validation->set_rules('o_pass', 'Name', 'required');
        $this->form_validation->set_rules('n_pass', 'Email', 'required');
        $o_pass = $this->input->post('o_pass');
            $n_pass = $this->input->post('n_pass');
            $email = $_SESSION['email'];
        if ($this->form_validation->run()) {
            
            foreach($model_data as $value){
                if($value['email']==$_SESSION['email']){
                    if($value['pass']==$o_pass){
                        if ($this->Signupmodel->update_pass($email,$n_pass)) {


            
                            $this->session->set_flashdata('error', 'Error In Submission');
                            redirect(base_url() . 'account');
                        } else {
            
                            $this->session->set_flashdata('success', 'Your Password Has Been Changed Please Login Again');
                            redirect(base_url() . 'account');
                        }
                    }else{
                        $this->session->set_flashdata('error', 'Old Password Not Matched');
                        redirect(base_url() . 'account');
                    }
                }
                
            }
            } else {

            $this->session->set_flashdata('error', 'Please Fill All The Fields');
            redirect(base_url() . 'account');
        }
    }
}
