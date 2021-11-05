<?php

require_once(APPPATH . "libraries/razorpay/razorpay-php/Razorpay.php");

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class Renewplan extends CI_Controller
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
    $api = new Api('rzp_live_bou6qzyqxGBpoq', 'qcrNfwgWbQTyn3J964uNJseR');
    /**
     * You can calculate payment amount as per your logic
     * Always set the amount from backend for security reasons
     */
 
    $_SESSION['email'] = $this->input->post('email');
   
   

    $_SESSION['vali'] = $this->input->post('vali');
    $_SESSION['acc_type'] = $this->input->post('acc_type');
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
    $this->load->view('renewpay', array('data' => $data));
  }
  /**
   * This function verifies the payment,after successful payment
   */
  public function verify()
  {
    $success = true;
    $error = "payment_failed";
    if (empty($_POST['razorpay_payment_id']) === false) {
      $api = new Api('rzp_live_bou6qzyqxGBpoq', 'qcrNfwgWbQTyn3J964uNJseR');
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
     
        $order_id = $_SESSION['razorpay_order_id'];
      
        $email = $_SESSION['email'];
        $acc_type = $_SESSION['acc_type'];
     
        $vali = $_SESSION['vali'];
      
        $amount = $_SESSION['payable_amount'];
   
      if ($this->Signupmodel->update_data($order_id,$email,$acc_type,$vali,$amount)) {
        



        $this->session->set_flashdata('success', 'You have successfull Update Your plan');
        redirect(base_url() . 'frontend/dashboard');
      } else {
        $this->session->set_flashdata('error', 'Error In submisstion');
        redirect(base_url() . 'frontend/renewplans');
      }
    } else {
      $this->session->set_flashdata('error', 'Error In payment Method');
      redirect(base_url() . 'frontend/renewplans');
    }
  }
  public function prepareData($amount, $razorpayOrderId)
  {
    $data = array(
      "key" => "rzp_live_bou6qzyqxGBpoq",
      "amount" => $amount,
      "name" => "Burger Harbour",
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
