<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Contactmodel extends CI_Model
{
  function __construct()
  {
  }
  public function fetchinventory_api()
  {
    return $this->db->get('contact')->result_array();
  }


  function update_bank($bank_acc,$id){
                        
                  
    $data = array(
                       'account_status' =>$bank_acc,
                       
                   );
                   
       $this->db->set($data);
       $this->db->where('id',$id);
        $this->db->update('contact',$data);
   }



  public function deletecontactdata($data)
  {
    $explodData = explode(',', $data);
    $this->db->where_in('id', $explodData);
    $getDeleteStatus = $this->db->delete('contact');
    if ($getDeleteStatus == 1) {
      return array('message' => 'yes');
    } else {
      return array('message' => 'no');
    }
  }
}
