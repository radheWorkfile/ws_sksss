<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }

    public function manage_news()
    {
        $data['title'] = 'Add News';
        $data['breadcrumb'] = 'Add News';
        $data['news'] = $this->news_model->news();
        $this->load->view('admin/news/manage_news', $data);
    }

    public function save_data()
    {
        if ($this->input->is_ajax_request()) {

            $this->form_validation->set_rules('title', 'News Title', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');

            if ($this->form_validation->run() == TRUE) {
                $val = array(
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                    'created_at' => date('Y-m-d'),
                );
                //print_r($val);die;
                $this->news_model->save_news($val);
                $data = array('text' => "News Added Successfully !", 'icon' => "success");
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

    public function get_news()
    {
        if ($this->input->is_ajax_request()) {
            $values = $this->input->post();
            $data['news'] = $this->news_model->get_data($values['id']);
            $this->load->view('admin/news/news_update', $data);
        }
    }

    public function update_news()
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
                $this->news_model->update_news($val);
                $data = array('text' => "News Updated Successfully !", 'icon' => "success");
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

    public function delete_news()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $del = $this->news_model->del_news($id);
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
