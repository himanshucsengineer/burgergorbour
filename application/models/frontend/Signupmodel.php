<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signupmodel extends CI_Model
{
    function insert_data($data)
    {
        return  $this->db->insert('user', $data);
    }


    function fetchModeldata()
    {
        $response = array();
        $this->db->select('*');
        $q = $this->db->get('user');
        $response = $q->result_array();
        return $response;
    }
    function update_pro($name, $number, $email, $addrs)
    {

        $data = array(
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'address' => $addrs,
        );

        $this->db->set($data);
        $this->db->where('email', $email);
        $this->db->update('user', $data);
    }
    function update_data($order_id,$email,$acc_type,$vali,$amount)
    {
        $data = array(
        'order_id' => $order_id,
        
        'email' =>$email,
        'acc_type' =>$acc_type,
        'vali' => $vali,
     
        'amount' => $amount,
      );

        $this->db->set($data);
        $this->db->where('email', $email);
        $this->db->update('user', $data);
    }
}
