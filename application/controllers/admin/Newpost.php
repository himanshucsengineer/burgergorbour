<?php
class Newpost extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('vendorAuth')) {
            redirect('login');
        }
        
        $this->load->model('admin/Newpostmodel');
    }

    public function index()
    {

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/course/newpost');
        $this->load->view('admin/template/footer');
    }


    public function post()
    {
        $this->load->model('admin/newpostmodel');
        $this->input->post('formSubmit');
        if (!empty($_FILES['images']['name'])) {

            $File_name = 'course-' . strtotime(date('YmdHis'));

            $config['upload_path'] = APPPATH . '../upload/course';
            $config['file_name'] = $File_name;
            $config['overwrite'] = TRUE;
            $config["allowed_types"] = 'png|jpg|jpeg';
            $config["max_size"] = '6144';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('images')) {

                $this->data['error'] = $this->upload->display_errors();
                $this->session->set_flashdata('error', $this->upload->display_errors());

                redirect(base_url().'admin/newpost');
            } else {
                $dataimage_return = $this->upload->data();
                $imageurl = $dataimage_return['file_name'];
            }
        }

        
        $link = $this->input->post('name');
        $link = str_replace(' ', '-', $link);

        $youtubeurllin = $this->input->post('video');
        $baselinkkk = explode("=",$youtubeurllin);
        $finalurl = $baselinkkk[1];
        $youtubeurlfinal= $finalurl;

        $datas = array(
            'name' => $this->input->post('name'),
            'about' => $this->input->post('about'),
            'cate' => $this->input->post('cate'),
            'video_link' => $youtubeurlfinal,
            'link' => $link,
            'cover' => $imageurl,
            
        );
        if ($this->newpostmodel->newpost($datas)) {
            $this->session->set_flashdata('success', 'Course Created');
            redirect(base_url() . 'admin/newpost');
        } else {
            $this->session->set_flashdata('error', 'Error In Updating Please Try Again');
            redirect(base_url() . 'admin/newpost');
        }
    }



    
}
