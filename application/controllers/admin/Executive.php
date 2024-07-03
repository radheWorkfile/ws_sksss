<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Executive extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }

    public function manage_executive()
    {
        $data['title'] = 'Manage Executive';
        $data['breadcrumb'] = 'Manage Executive';
        $data['executive'] = $this->executive_model->executive();
        $this->load->view('admin/executive_member/manage_executive', $data);
    }

    public function save_data()
    {
        if ($this->input->is_ajax_request()) {

            $this->form_validation->set_rules('name', 'Executive Member Name', 'required');
            $this->form_validation->set_rules('post', 'Executive Member Post', 'required');

            if ($this->form_validation->run() == TRUE) {
                $filename = "Executive_".$this->input->post('name')."(" . date('d-m-Y').")";
                $config['upload_path']          = './uploads/executive/';
                $config['allowed_types']        = 'jpg|jpeg|png';
                $config['max_size']             = 5120;
                $config['file_name'] = $filename;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $doc_data = $this->upload->data();
                    $doc = base_url('uploads/executive/' . $doc_data['raw_name'] . $doc_data['file_ext']);
                    $val = array(
                        'name' => $this->input->post('name'),
                        'post' => $this->input->post('post'),
                        'image'   => $doc,
                        'created_at' => date('Y-m-d'),
                    );
                    //print_r($val);die;
                    $this->executive_model->save_executive($val);
                    $data = array('text' => "Executive Member Added Successfully !", 'icon' => "success");
                }
            } else {
                $msg = array(
                    'name' => form_error('name'),
                    'post' => form_error('post'),
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }

    public function view_executive()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $data['execuitve'] = $this->executive_model->get_data($id);
            //echo $this->db->last_query();die;
            $this->load->view('admin/executive_member/view_executive', $data);
        }
    }

    public function delete_executive()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $del = $this->executive_model->del_executive($id);
            //echo $this->db->last_query();die;
            if ($del) {
                $data = array('text' => "Execuitve Deleted Successfully !", 'icon' => "success");
            } else {
                $data = array('text' => "Some Error Occour", 'icon' => "error");
            }

            echo json_encode($data);
        }
    }
}
