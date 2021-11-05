<?php
class Editblog extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('vendorAuth')) {
            redirect('admin/login');
        }
        
        //$this->load->model('admin/dogcare/breed/Allpostmodel');
    }

    public function index()
    {



        //$data['fetch_content'] = $this->Allpostmodel->fetch_data();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/course/editblog');
        $this->load->view('admin/template/footer');
    }

    public function update()
    {
        $this->load->model('admin/dogcare/breed/Allpostmodel');

        $this->input->post('formSubmit');


        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('about', 'Email', 'required');
        $this->form_validation->set_rules('temp', 'Number', 'required');
         $this->form_validation->set_rules('height', 'Address', 'required');
        $this->form_validation->set_rules('weight', 'Meta Title', 'required');
         $this->form_validation->set_rules('exp', 'Meta Description', 'required');
        $this->form_validation->set_rules('id', 'Id', 'required');
        $this->form_validation->set_rules('grp', 'Meta Keyword', 'required');
        if ($this->form_validation->run()) {

            if (!empty($_FILES['images']['name'])) {
                $File_name = '';
                $config['upload_path'] = APPPATH . '../upload/dogcare/breed';
                $config['file_name'] = $File_name;
                $config['overwrite'] = TRUE;
                $config["allowed_types"] = 'jpeg|jpg|png';
                $config["max_size"] = 2048;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('images')) {
                    $this->data['error'] = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('admin/dogcare/breed/newpost');
                } else {
                    $dataimage_return = $this->upload->data();
                    $imageurl = base_url() . 'upload/dogcare/breed/' . $dataimage_return['file_name'];
                }
            } else {
                $data = $this->Allpostmodel->fetch_data();

                foreach ($data as $value) {
                    if ($value['id'] == $this->input->post('id')) {
                        $imageurl = $value['image'];
                    }
                }
            }

            $name = $this->input->post('name');
            $link = $this->input->post('link');
            $about = $this->input->post('about');
            $temp = $this->input->post('temp');
            $id = $this->input->post('id');
             $height = $this->input->post('height');
             $weight = $this->input->post('weight');
            $exp = $this->input->post('exp');
            $grp = $this->input->post('grp');
            if ($this->Allpostmodel->update_pro($name, $about,$temp,$height,$weight,$exp,$grp, $id, $link, $imageurl)) {



                $this->session->set_flashdata('success', 'Technical error');
                redirect(base_url() . 'admin/dogcare/breed/allpost');
            } else {
                $this->session->set_flashdata('success', 'Updated Successfully');
                redirect(base_url() . 'admin/dogcare/breed/allpost');
            }
        } else {
            $this->session->set_flashdata('error', 'Please Fill all Fields');
            redirect(base_url() . 'admin/dogcare/breed/allpos');
        }
    }
}
