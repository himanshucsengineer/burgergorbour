<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signupmodel extends CI_Model {
    function signup($email,$name,$number,$add,$password,$file,$card){
        $data = array(
            'email' => $email,
            'name' => $name,
            'number' => $number,
            'address' => $add,
            'pass' => $password,
            'file' => $file,
            'card' => $card
        );
        
        
        return  $this->db->insert('user',$data);
    }
    
    
    function fetchModeldata(){
        $response = array();
        $this->db->select('*');
        $q = $this->db->get('user');
        $response = $q->result_array();
        return $response;
    }
    function update_pro($name,$number,$email,$addrs){
      
        $data = array(
                       'name' =>$name,
                       'email' => $email,
                       'number' => $number,
                       'upi' => $addrs,
                   );
                   
       $this->db->set($data);
       $this->db->where('email',$email);
        $this->db->update('referandearn',$data);
   }


    }
    
    

 
    
  
    
    
    
    
    
    
    
    
    
   

?>