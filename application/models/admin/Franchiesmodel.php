<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Franchiesmodel extends CI_Model{
    function __construct() {
    }
    public function fetchinventory_api() {
    return $this->db->get('franchies')->result_array();
    }

     public function deletefranchiesdata($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('franchies');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
}
?>