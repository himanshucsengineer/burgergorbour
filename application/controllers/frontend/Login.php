<?php
    class Login extends CI_controller{
        public function __construct()
    {
        parent::__construct();
   //     $this->load->model('frontend/Homemodel');
    }

        public function index(){
       //     $getsocials['brandslogo'] = $this->Homemodel->fetchaddinventory_api();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/login');
            $this->load->view('frontend/template/footer');
            
            
            
                
           
           
           
        }

        public function login(){
            
            
            $this->load->helper(array('cookie', 'url'));
            $url = $_SESSION['url']; 
            $this->load->model('frontend/Signupmodel');
            $model_data=$this->Signupmodel->fetchModeldata();
            
            
            $login_success=0;
            $user_data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );
            
            
            set_cookie('email',$user_data[0]);
            set_cookie('pass',$user_data[1]);
            foreach ($model_data as $value) {
                    
               
                if((strtolower($value['email'])==strtolower($user_data['email']) or isset($_COOKIE['email'])) && ($value['pass']==$user_data['password'] or isset($_COOKIE['pass']) ))
                {
                    
                    if($value['account_status']=="Approved"){
                        $_SESSION["email"]=$value["email"];
                        $_SESSION["name"]=$value["name"];
                        $_SESSION["number"]=$value["number"];
                        $login_success=1;
                        break;
                    }else{
                        $login_success=0;
                        break;
                    }
                    
                    
                    
                }
            }
            if($login_success==1){
                    redirect(base_url().'user/campaign');
               
                
                
            }
            else{
                $this->session->set_flashdata('error','Wrong Email Or Password or Your Profile Is not Approved'); 
                redirect($url); 
            }
            

             
        }

        public function signup(){
            $this->load->model('frontend/Signupmodel');
            $this->input->post('formSubmit');
            $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
            if ($this->form_validation->run()){ 
                $code = '';
                for($i = 0; $i < 16; $i++) { $code .= mt_rand(0, 9); }
                
                if (!empty($_FILES['images']['name'])){

                    $File_name='userimage-'.strtotime(date('YmdHis'));
            
                    $config['upload_path'] = APPPATH . '../upload/user';
                    $config['file_name'] = $File_name;
                    $config['overwrite'] = TRUE;
                    $config["allowed_types"] = 'png|jpg|jpeg';
                    $config["max_size"] = 2048;
            
                    $this->load->library('upload', $config);
            
                    if(!$this->upload->do_upload('images')) {
            
                        $this->data['error'] = $this->upload->display_errors();
                      $this->session->set_flashdata('error',$this->upload->display_errors());
                  
                         redirect('frontend/career');
                    } else {
                     $dataimage_return = $this->upload->data();
            $imageurl=base_url().'upload/user/'.$dataimage_return['file_name'];
                     
                        
                      }
                      }
                    
                $_SESSION["email"]=$this->input->post('email');
                    $_SESSION["name"]=$this->input->post('name');
                    $_SESSION["number"]=$this->input->post('mob');
                    $_SESSION["add"]=$this->input->post('add');
                    $_SESSION["pass"]=$this->input->post('pass');
                    $_SESSION["card"]= $code;
                    $_SESSION["image"]=$imageurl;
                $this->session->set_flashdata('success','Signup Successful'); 
                redirect(base_url().'frontend/plans');
               
        }else{
            $this->session->set_flashdata('error','This  email already used by someone try with another email'); 
            redirect(base_url()); 
    }
                
                
                
                
                
                
               
                
            
          
            
            
            
         

    }
    
    
   




    }

 