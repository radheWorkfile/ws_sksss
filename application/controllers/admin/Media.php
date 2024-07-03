<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Media extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }

    public function manage_media()
    {
        $data['title'] = 'Add Media';
        $data['breadcrumb'] = 'Add Media';
        $data['media'] = $this->media_model->media();
        $this->load->view('admin/media/manage_media', $data);
    }

    public function save_data()
    {
        if ($this->input->is_ajax_request()) {

            $this->form_validation->set_rules('title', 'Media Title', 'required');

            if ($this->form_validation->run() == TRUE) {
                $filename = "Media_" . date('d-m-Y');
                $config['upload_path']          = './uploads/media/';
                $config['allowed_types']        = 'jpg|jpeg|png';
                $config['max_size']             = 5120;
                $config['file_name'] = $filename;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $doc_data = $this->upload->data();
                    $doc = base_url('uploads/media/' . $doc_data['raw_name'] . $doc_data['file_ext']);
                    $val = array(
                        'title' => $this->input->post('title'),
                        'image'   => $doc,
                        'created_at' => date('Y-m-d'),
                    );
                    //print_r($val);die;
                    $this->media_model->save_media($val);
                    $data = array('text' => "Media Added Successfully !", 'icon' => "success");
                }
            } else {
                $msg = array(
                    'title' => form_error('title'),
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }

    public function view_media()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $data['media'] = $this->media_model->get_data($id);
            //echo $this->db->last_query();die;
            $this->load->view('admin/media/view_media', $data);
        }
    }

    public function delete_media()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $del = $this->media_model->del_media($id);
            //echo $this->db->last_query();die;
            if ($del) {
                $data = array('text' => "Media Deleted Successfully !", 'icon' => "success");
            } else {
                $data = array('text' => "Some Error Occour", 'icon' => "error");
            }

            echo json_encode($data);
        }
    }
}
