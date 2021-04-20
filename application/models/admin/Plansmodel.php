<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plansmodel extends CI_Model {
    function Course_insert($course){
        $data = array(
            'course' => $course,
        );
        return  $this->db->insert('admin_plans',$data);
    }

    function plans_insert($course,$amount,$month){
        $data = array(
            'course' => $course,
            'amount' => $amount,
            'month' => $month,
        );
        return  $this->db->insert('admin_course',$data);
    }
    function getCityDepartment($postData){
      $response = array();
   
      // Select record
      $this->db->select('id,month,amount');
      $this->db->where('course', $postData['city']);
      $q = $this->db->get('admin_course');
      $response = $q->result_array();
  
      return $response;
    }
    public function fetchinventory_api() {
        return $this->db->get('admin_course')->result_array();
      }


      public function fetch_plans() {
        return $this->db->get('admin_plans')->result_array();
      }

      public function deleteplandata($data)
      {
          $explodData = explode(',',$data);
          $this->db->where_in('id',$explodData);
          $getDeleteStatus = $this->db->delete('admin_course');
          if($getDeleteStatus == 1)
          {
              return array('message'=>'yes');
        }else{
          return array('message'=>'no');
        }
        }


        public function delete_plans($data)
      {
          $explodData = explode(',',$data);
          $this->db->where_in('id',$explodData);
          $getDeleteStatus = $this->db->delete('admin_plans');
          if($getDeleteStatus == 1)
          {
              return array('message'=>'yes');
        }else{
          return array('message'=>'no');
        }
        }

    
   


    }
    
    

 
    
  
    
    
    
    
    
    
    
    
    
   

?>