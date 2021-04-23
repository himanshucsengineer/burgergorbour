<?php

require_once(APPPATH."libraries/razorpay/razorpay-php/Razorpay.php");
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
class Register extends CI_Controller {
  public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Signupmodel');
        
    }
  public function index()
  {
    $this->load->view('registration-form');
  }
  /**
   * This function creates order and loads the payment methods
   */
  public function pay()
  {
    $api = new Api('rzp_test_If4Pd1l3k6g25g', 'IdgTV3Z597LLTadL1rn2n5n2');
    /**
     * You can calculate payment amount as per your logic
     * Always set the amount from backend for security reasons
     */
    $_SESSION['name']=$this->input->post('name');
    $_SESSION['email']=$this->input->post('email');
    $_SESSION['mob']=$this->input->post('mob');
    $_SESSION['add']=$this->input->post('add');
    $_SESSION['pass']=$this->input->post('pass');
    $_SESSION['card']=$this->input->post('card');
    $_SESSION['image']=$this->input->post('image');
    $_SESSION['vali']=$this->input->post('vali');
    $_SESSION['payable_amount'] = $this->input->post('amount');
    $razorpayOrder = $api->order->create(array(
      'receipt'         => rand(),
      'amount'          => $_SESSION['payable_amount'] * 100, // 2000 rupees in paise
      'currency'        => 'INR',
      'payment_capture' => 1 // auto capture
    ));
    $amount = $razorpayOrder['amount'];
    $razorpayOrderId = $razorpayOrder['id'];
    $_SESSION['razorpay_order_id'] = $razorpayOrderId;
    $data = $this->prepareData($amount,$razorpayOrderId);
    $this->load->view('rezorpay',array('data' => $data));
  }
  /**
   * This function verifies the payment,after successful payment
   */
  public function verify()
  {
    $success = true;
    $error = "payment_failed";
    if (empty($_POST['razorpay_payment_id']) === false) {
      $api = new Api('rzp_test_If4Pd1l3k6g25g', 'IdgTV3Z597LLTadL1rn2n5n2');
    try {
        $attributes = array(
          'razorpay_order_id' => $_SESSION['razorpay_order_id'],
          'razorpay_payment_id' => $_POST['razorpay_payment_id'],
          'razorpay_signature' => $_POST['razorpay_signature']
        );
        $api->utility->verifyPaymentSignature($attributes);
      } catch(SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay_Error : ' . $e->getMessage();
      }
    }
    if ($success === true) {
        $data = array(
          'order_id' => $_SESSION['razorpay_order_id'],
          'name' => $_SESSION['name'],
          'email' => $_SESSION['email'],
        'number' => $_SESSION['mob'],
        'address' =>$_SESSION['add'],
        'card' => $_SESSION['card'],
          'file' => $_SESSION['image'],
        'vali' => $_SESSION['vali'],
        'pass' =>$_SESSION['pass'],
        'amount' =>$_SESSION['payable_amount'],
      );
       if($this->Signupmodel->insert_data($data) ){
        $phone="918905366876";
        $user_message="this is test msg";
              /*Your authentication key*/
        $authKey = "359226AbtfGxXjL607f32d5P1";
        /*Multiple mobiles numbers separated by comma*/
        $mobileNumber = $phone;
        /*Sender ID,While using route4 sender id should be 6 characters long.*/
        $senderId = "Burger";
        /*Your message to send, Add URL encoding here.*/
        $message = $user_message;
        /*Define route */
        $route = "route=4";
        /*Prepare you post parameters*/
        $postData = array(
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'sender' => $senderId,
        'route' => $route
        );
        /*API URL*/
        $url="https://control.msg91.com/api/sendhttp.php";
        /* init the resource */
        $ch = curl_init();
        curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData
        /*,CURLOPT_FOLLOWLOCATION => true*/
        ));
        /*Ignore SSL certificate verification*/
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        /*get response*/
        $output = curl_exec($ch);
        /*Print error if any*/
        if(curl_errno($ch))
        {
        echo 'error:' . curl_error($ch);
        }
        curl_close($ch);
            
            
              
           
        $this->session->set_flashdata('success','Welcome To Burger Horbour'); 
        redirect(base_url().'frontend/dashboard');
           
       }
       else{
          $this->session->set_flashdata('error','Error In submisstion'); 
          redirect(base_url().'frontend/membership');
       }
      
    }
    else {
      $this->session->set_flashdata('error','Error In payment Method'); 
      redirect(base_url().'frontend/membership');
    }
  }
  public function prepareData($amount,$razorpayOrderId)
  {
    $data = array(
      "key" => "rzp_test_If4Pd1l3k6g25g",
      "amount" => $amount,
      "name" => "Dog Bazar",
      "description" => "Buying a Plan",
      "image" => base_url()."admin/assets/images/admin_b.jpg",
      "prefill" => array(
        "name"  => $this->input->post('name'),
        "email"  => $this->input->post('email'),
        "contact" => $this->input->post('contact'),
      ),
      "notes"  => array(
        "address"  => "Testing",
        "merchant_order_id" => rand(),
      ),
      "theme"  => array(
        "color"  => "Blue"
      ),
      "order_id" => $razorpayOrderId,
    );
    return $data;
  }
 
   
}