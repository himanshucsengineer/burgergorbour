<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addusermodel extends CI_Model
{
    function insert_data($data)
    {
       
        return  $this->db->insert('user', $data);
    }

    public function fetch_course()
  {
    return $this->db->get('admin_plans')->result_array();
  }
  
}
