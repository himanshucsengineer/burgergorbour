<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menumodel extends CI_Model {
    function menu($name,$file){
        $data = array(
            'name' => $name,
            'file' => $file,
        );
        return  $this->db->insert('menu',$data);
    }
    public function fetchinventory_api() {
        return $this->db->get('menu')->result_array();
      }
    
         public function deletemenudata($data)
        {
            $explodData = explode(',',$data);
            $this->db->where_in('id',$explodData);
            $getDeleteStatus = $this->db->delete('menu');
            if($getDeleteStatus == 1)
            {
                return array('message'=>'yes');
          }else{
            return array('message'=>'no');
          }
          }
    
   
   


}
?>