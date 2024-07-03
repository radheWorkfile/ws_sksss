<?php
defined('BASEPATH') or exit('No direct script access allowed');

class donate_pay extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_model');
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }
    function payMentDet()
    {
        $data['title'] = 'Statics';
        $data['breadcrums'] = 'Donate Payment Details';
        // $data['executive'] = $this->common_model->count_all('executive');
        // $data['enquiry'] = $this->common_model->count_all('enquiry');
        // $data['job_enquiry'] = $this->common_model->count_all('career_enquiry');
        $data['donation'] = $this->common_model->getAllData('*','donate_pay');
        $this->load->view('admin/donate_pay_det/manage_Payment',$data);
    }
    function chageStatus()
    {
        if ($this->input->is_ajax_request()) {
            $data = $this->input->post();
            //print_r($data);die;
            $this->Common_model->chageStatus($data);
            echo ($data['status'] == 1) ? "
				  <a style='color:green' href='javascript:void()'onClick='return changeStatus(\"" . $data['id'] . "\",\"0\",\"" . $data['table'] . "\",\"" . $data['loader'] . "\")'title='click to block user'><b><i class='fa fa-check'></i> </b></a>" : "
				  <a style='color:red'   href='javascript:void()'onClick='return changeStatus(\"" . $data['id'] . "\",\"1\",\"" . $data['table'] . "\",\"" . $data['loader'] . "\")'title='click to active user'><b><i class='fa fa-times'></i></b></a>";
        }
    }
    function delete_dAta()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $del = $this->Common_model->deleteData($id);
            if($del){
                $data = array('text' => "Deleted Successfully !", 'icon' => "success");
            }else{
                $data = array('text' => "Some Error Occour", 'icon' => "error");
            }

            echo json_encode($data);
        }
    }



    public function viewDAta()
    {
        if ($this->input->is_ajax_request()) {
            $values = $this->input->post();
            $data['pay_details'] = $this->Common_model->get_data('donate_pay',$values);
            $this->load->view('admin/donate_pay_det/view_payment_det',$data);
        }
    }




}
