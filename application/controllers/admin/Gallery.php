<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }

    public function manage_gallery_image()
    {
        $data['title'] = 'Add Gallery Image';
        $data['breadcrumb'] = 'Add Gallery Image';
        $data['gallery'] = $this->gallery_model->gallery();
        $this->load->view('admin/gallery/manage_gallery_image', $data);
    }

    public function manage_gallery_video()
    {
        $data['title'] = 'Add Gallery Video';
        $data['breadcrumb'] = 'Add Gallery Video';
        $data['gallery'] = $this->gallery_model->gallery_video();
        $this->load->view('admin/gallery/manage_gallery_video', $data);
    }

    public function save_data()
    {
        if ($this->input->is_ajax_request()) {

            $this->form_validation->set_rules('title', 'Gallery Title', 'required');

            if ($this->form_validation->run() == TRUE) {
                $filename = "Gallery_" . date('d-m-Y');
                $config['upload_path']          = './uploads/gallery/';
                $config['allowed_types']        = 'jpg|jpeg|png';
                $config['max_size']             = 5120;
                $config['file_name'] = $filename;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $msg = array('error' => $this->upload->display_errors());
                    $data = array('text' => $msg, 'icon' => "error");
                } else {
                    $doc_data = $this->upload->data();
                    $doc = base_url('uploads/gallery/' . $doc_data['raw_name'] . $doc_data['file_ext']);
                    $val = array(
                        'title' => $this->input->post('title'),
                        'image'   => $doc,
                        'created_at' => date('Y-m-d'),
                    );
                    //print_r($val);die;
                    $this->gallery_model->save_gallery($val);
                    $data = array('text' => "Gallery Added Successfully !", 'icon' => "success");
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

    public function save_data_video()
    {
        if ($this->input->is_ajax_request()) {

            $this->form_validation->set_rules('title', 'Gallery Video Title', 'required');
            $this->form_validation->set_rules('video', 'Gallery Video Link', 'required');

            if ($this->form_validation->run() == TRUE) {
                
                    $val = array(
                        'title' => $this->input->post('title'),
                        'video'   => $this->input->post('video'),
                        'created_at' => date('Y-m-d'),
                    );
                    //print_r($val);die;
                    $this->gallery_model->save_gallery_video($val);
                    $data = array('text' => "Gallery Video Added Successfully !", 'icon' => "success");
            } else {
                $msg = array(
                    'title' => form_error('title'),
                    'video' => form_error('video'),
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }

    public function view_gallery()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $data['gallery'] = $this->gallery_model->get_data($id);
            //echo $this->db->last_query();die;
            $this->load->view('admin/gallery/view_gallery', $data);
        }
    }

    public function view_gallery_video()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $data['gallery'] = $this->gallery_model->get_data_video($id);
            //echo $this->db->last_query();die;
            $this->load->view('admin/gallery/view_gallery_video', $data);
        }
    }

    public function delete_gallery()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $del = $this->gallery_model->del_gallery($id);
            //echo $this->db->last_query();die;
            if ($del) {
                $data = array('text' => "Gallery Deleted Successfully !", 'icon' => "success");
            } else {
                $data = array('text' => "Some Error Occour", 'icon' => "error");
            }

            echo json_encode($data);
        }
    }

    public function delete_gallery_video()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $del = $this->gallery_model->del_gallery_video($id);
            //echo $this->db->last_query();die;
            if ($del) {
                $data = array('text' => "Gallery Video Deleted Successfully !", 'icon' => "success");
            } else {
                $data = array('text' => "Some Error Occour", 'icon' => "error");
            }

            echo json_encode($data);
        }
    }
}
