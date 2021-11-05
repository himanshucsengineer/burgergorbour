<?php
class Singlecourse extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Coursemodel');
        $this->load->helper('url');
    }
    public function index($slug = "")
    {
        $data['blog'] = $this->Coursemodel->blog_detail($slug);
        //$data['recents']=$this->db->limit(5)->order_by('id','DESC')->get('cate_newpost')->result();
         //$data['releted']=$this->db->where('cate', $data['blog']->cate)->limit(5)->order_by('id','DESC')->get('cate_newpost')->result();
        
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/singlecourse',$data);
        $this->load->view('frontend/template/footer');
    }

    
}
