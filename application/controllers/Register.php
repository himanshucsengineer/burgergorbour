<?php

require_once(APPPATH . "libraries/razorpay/razorpay-php/Razorpay.php");

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class Register extends CI_Controller
{
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
    $api = new Api('rzp_test_Yw00m4vu4ob3vs', 'L1M3gxCkrDw5egxrwzzR08j3');
    /**
     * You can calculate payment amount as per your logic
     * Always set the amount from backend for security reasons
     */
    

    $_SESSION['name'] = $this->input->post('name');
    $_SESSION['email'] = $this->input->post('email');
    $_SESSION['mob'] = $this->input->post('mob');
    $_SESSION['add'] = $this->input->post('add');
    $_SESSION['pass'] = $this->input->post('pass');
    $_SESSION['card'] = $this->input->post('card');
    $_SESSION['image'] = $this->input->post('image');
    $_SESSION['vali'] = $this->input->post('vali');
    $_SESSION['acc_type'] = $this->input->post('acc_type');
    $_SESSION['date'] = date("Y-m-d");
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
    $data = $this->prepareData($amount, $razorpayOrderId);
    $this->load->view('rezorpay', array('data' => $data));
  }
  /**
   * This function verifies the payment,after successful payment
   */
  public function verify()
  {
      if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
                            $url = "https://";   
                        else  
                            $url = "http://";   
                                // Append the host(domain name, ip) to the URL.   
                            $url.= $_SERVER['HTTP_HOST'];   
                            // Append the requested resource location to the URL   
                            $url.= $_SERVER['REQUEST_URI'];    
                            $_SESSION['url'] =$url;
    $success = true;
    $error = "payment_failed";
    if (empty($_POST['razorpay_payment_id']) === false) {
      $api = new Api('rzp_test_Yw00m4vu4ob3vs', 'L1M3gxCkrDw5egxrwzzR08j3');
      try {
        $attributes = array(
          'razorpay_order_id' => $_SESSION['razorpay_order_id'],
          'razorpay_payment_id' => $_POST['razorpay_payment_id'],
          'razorpay_signature' => $_POST['razorpay_signature']
        );
        $api->utility->verifyPaymentSignature($attributes);
      } catch (SignatureVerificationError $e) {
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
        'address' => $_SESSION['add'],
        'card' => $_SESSION['card'],
        'file' => $_SESSION['image'],
        'vali' => $_SESSION['vali'],
        'pass' => $_SESSION['pass'],
        'date' => $_SESSION['date'],
        'acc_type'=>$_SESSION['acc_type'],
        'amount' => $_SESSION['payable_amount'],
       
      );
      if ($this->Signupmodel->insert_data($data)) {
          $_SESSION['status'] = 1;




        $this->session->set_flashdata('success', 'Welcome To Burger Horbour');
        redirect(base_url() . 'frontend/dashboard');
      } else {
            unset($_SESSION["razorpay_order_id"]);
            unset($_SESSION["name"]);
            unset($_SESSION["email"]);
            unset($_SESSION["mob"]);
            unset($_SESSION["add"]);
            unset($_SESSION["card"]);
            unset($_SESSION["image"]);
            unset($_SESSION["vali"]);
            unset($_SESSION["pass"]);
            unset($_SESSION["date"]);
            unset($_SESSION["acc_type"]);
            unset($_SESSION["payable_amount"]);
        $this->session->set_flashdata('error', 'Error In submisstion');
        redirect(base_url() . 'frontend/membership');
      }
    } else {
        unset($_SESSION["razorpay_order_id"]);
            unset($_SESSION["name"]);
            unset($_SESSION["email"]);
            unset($_SESSION["mob"]);
            unset($_SESSION["add"]);
            unset($_SESSION["card"]);
            unset($_SESSION["image"]);
            unset($_SESSION["vali"]);
            unset($_SESSION["pass"]);
            unset($_SESSION["date"]);
            unset($_SESSION["acc_type"]);
            unset($_SESSION["payable_amount"]);
      $this->session->set_flashdata('error', 'Error In payment Method');
      redirect(base_url() . 'frontend/membership');
    }
  }
  public function prepareData($amount, $razorpayOrderId)
  {
    $data = array(
      "key" => "rzp_test_Yw00m4vu4ob3vs",
      "amount" => $amount,
      "name" => "Burgur Harbour",
      "description" => "Buying a Plan",
      "image" => base_url() . "admin/assets/images/admin_b.jpg",
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
        "color"  => "#52120e"
      ),
      "order_id" => $razorpayOrderId,
    );
    return $data;
  }
}
