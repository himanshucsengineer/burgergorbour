<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Franchiesmodel extends CI_Model {
    function insert_data($name,$email,$sub,$msg){
        $data = array(
            'name' => $name,
            'email' => $email,
            'subject' => $sub,
            'msg' => $msg
        );
    return  $this->db->insert('franchies',$data);
    }


    }
?>