<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Coursemodel extends CI_Model
{

    public function fetch()
    {
        return $this->db->get('course_add')->result_array();
    }
    public function blog_detail($slug = '') {
        return $this->db->where('link',$slug)->get('course_add')->row();
       
      }
}
