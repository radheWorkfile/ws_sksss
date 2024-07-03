<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tender extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }

    public function manage_tender()
    {
        $data['title'] = 'Add Tender';
        $data['breadcrumb'] = 'Add Tender';
        $data['tend'] = $this->tender_model->tender();
        $this->load->view('admin/tender/manage_tender', $data);
    }

    public function save_data()
    {
        if ($this->input->is_ajax_request()) {

            $this->form_validation->set_rules('title', 'News Title', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');

            if ($this->form_validation->run() == TRUE) {
                $filename = "Tender of " . date('d-m-Y');
                $config['upload_path']          = './uploads/tender/';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 12228;
                $config['file_name'] = $filename;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $doc_data = $this->upload->data();
                    $doc = base_url('uploads/tender/' . $doc_data['raw_name'] . $doc_data['file_ext']);
                    $val = array(
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description'),
                        'doc'   => $doc,
                        'created_at' => date('Y-m-d'),
                    );
                    //print_r($val);die;
                    $this->tender_model->save_tender($val);
                    $data = array('text' => "News Added Successfully !", 'icon' => "success");
                }
            } else {
                $msg = array(
                    'title' => form_error('title'),
                    'description' => form_error('description'),
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }

    public function get_tender()
    {
        if ($this->input->is_ajax_request()) {
            $values = $this->input->post();
            $data['tender'] = $this->tender_model->get_data($values['id']);
            $this->load->view('admin/tender/tender_update', $data);
        }
    }

    public function update_tender()
    {
        if ($this->input->is_ajax_request()) {

            $this->form_validation->set_rules('title', 'News Title', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');

            if ($this->form_validation->run() == TRUE) {
                $val = array(
                    'id' => $this->input->post('id'),
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                );
                //print_r($val);die;
                $this->tender_model->update_tender($val);
                $data = array('text' => "Tender Updated Successfully !", 'icon' => "success");
            } else {
                $msg = array(
                    'title' => form_error('title'),
                    'description' => form_error('description'),
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }

    public function update_doc()
    {
        if ($this->input->is_ajax_request()) {
            $filename = "Tender of " . date('d-m-Y');
            $config['upload_path']          = './uploads/tender/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 12228;
            $config['file_name'] = $filename;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $msg = array('error' => $this->upload->display_errors());
                $data = array('text' => $msg, 'icon' => "error");
            } else {
                $doc_data = $this->upload->data();
                $doc = base_url('uploads/tender/' . $doc_data['raw_name'] . $doc_data['file_ext']);
                $val = array('id' => $this->input->post('id'), 'doc' => $doc);
                //print_r($val);die;
                $this->tender_model->update_doc($val);
                $data = array('text' => "PDF Updated Successfully !", 'icon' => "success");
            }

            echo json_encode($data);
        }
    }

    public function delete_tender()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $del = $this->tender_model->del_tender($id);
            //echo $this->db->last_query();die;
            if($del){
                $data = array('text' => "News Deleted Successfully !", 'icon' => "success");
            }else{
                $data = array('text' => "Some Error Occour", 'icon' => "error");
            }

            echo json_encode($data);
        }
    }
}
