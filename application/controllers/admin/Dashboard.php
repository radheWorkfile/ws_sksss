<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_model');
        //$this->load->model('dashboard_model');
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }
    function index()
    {
        $data['title'] = 'Statics';
        $data['breadcrums'] = 'Dashboard';
        $data['executive'] = $this->common_model->count_all('executive');
        $data['enquiry'] = $this->common_model->count_all('enquiry');
        $data['job_enquiry'] = $this->common_model->count_all('career_enquiry');
        $data['tender'] = $this->common_model->count_all('tender');
        $this->load->view('admin/dashboard', $data);
    }
}
