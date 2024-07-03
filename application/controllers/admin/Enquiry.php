<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Enquiry extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }

    public function manage_enquiry()
    {
        $data['title'] = 'Manage Enquiry';
        $data['breadcrumb'] = 'Manage Enquiry';
        $data['enquiry'] = $this->enquiry_model->enquiry();
        $this->load->view('admin/enquiry/manage_enquiry', $data);
    }

    public function view_enquiry()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $data['enquiry'] = $this->enquiry_model->get_data($id);
            //print_r($data['enquiry']);die;
            //echo $this->db->last_query();die;
            $this->load->view('admin/enquiry/view_enquiry', $data);
        }
    }

    public function delete_enquiry()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $del = $this->enquiry_model->del_enquiry($id);
            //echo $this->db->last_query();die;
            if ($del) {
                $data = array('text' => "Enquriy Deleted Successfully !", 'icon' => "success");
            } else {
                $data = array('text' => "Some Error Occour", 'icon' => "error");
            }

            echo json_encode($data);
        }
    }
}
