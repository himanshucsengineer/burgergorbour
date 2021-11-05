<?php
class Payutest extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('admin/Menumodel');
    }
    public function index()
    {
       
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/payutest');
        $this->load->view('frontend/template/footer');
    }

    public function checkout(){
        $MERCHANT_KEY = "5Ca2nG";
$SALT = "rK6lHrcabikdBPURj6KYSPzLM1ZwfRFH";
// Merchant Key and Salt as provided by Payu.

//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$posted['firstname'] = $this->input->post('name');
$posted['email'] = $this->input->post('email');
$posted['phone'] = $this->input->post('mob');
$posted['amount'] = $this->input->post('amount');


$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$posted['txnid']=$txnid;
$posted['key']=$MERCHANT_KEY;
$posted['productinfo']="testing";
$posted['surl']=base_url().'frontend/paytest/paymentsuc';
$posted['furl']=base_url().'frontend/paytest/paymentfail';




$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
    $posted['hash']=$hash ;

$this->load->view('frontend/payutest_checkout',['MERCHANT_KEY'=> $MERCHANT_KEY, 'txnid'=>$txnid, 'hash'=>$hash, 'posted'=>$posted,'action'=>$action]);
    }
}
