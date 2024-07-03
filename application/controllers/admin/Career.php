<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Career extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }

    public function manage_career()
    {
        $data['title'] = 'Manage Career';
        $data['breadcrumb'] = 'Manage Career';
        $data['career_enquiry'] = $this->career_model->career_enquiry();
        $data['career'] = $this->career_model->career();
        $this->load->view('admin/career/manage_career', $data);
    }

    public function update_data()
    {
        if ($this->input->is_ajax_request()) {

            $this->form_validation->set_rules('title', 'Career Title', 'required');
            $this->form_validation->set_rules('description', 'Career Description', 'required');

            if ($this->form_validation->run() == TRUE) {
                $val = array(
                    'id' => $this->input->post('id'),
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                );
                //print_r($val);die;
                $this->career_model->update_career($val);
                $data = array('text' => "Career Updated Successfully !", 'icon' => "success");
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

    public function get_career_enquiry()
    {
        if ($this->input->is_ajax_request()) {
            $values = $this->input->post();
            $data['career_enquiry'] = $this->common_model->get_data('career_enquiry',$values);
            $this->load->view('admin/career/career_enquiry_view', $data);
        }
    }

    public function delete_career_enquiry()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $del = $this->career_model->del_career_enquiry($id);
            //echo $this->db->last_query();die;
            if($del){
                $data = array('text' => "Career Enquiry Deleted Successfully !", 'icon' => "success");
            }else{
                $data = array('text' => "Some Error Occour", 'icon' => "error");
            }

            echo json_encode($data);
        }
    }

}
