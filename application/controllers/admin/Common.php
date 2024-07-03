<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Common extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_model');
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
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
    
    public function profile()
    {
        $data['title'] = 'Profile';
        $data['breadcrumb'] = 'Profile';
        $val = array('id' => $this->session->userdata('user_id'));
        $data['users'] = $this->common_model->get_data('users',$val);
        //print_r($data['users']);die;
        $this->load->view('admin/profile/profile', $data);
    }

    public function update_profile()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
        $this->form_validation->set_rules('sex', 'Gender', 'required');
        $this->form_validation->set_rules('number', 'Mobile Number', 'required');
        $this->form_validation->set_rules('addhar', 'Addhar Number', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

        if ($this->form_validation->run() == TRUE) {
            $val['id'] = $this->input->post('id');
            $val['name'] = $this->input->post('name');
            $val['email'] = $this->input->post('email');
            $val['password'] = empty($this->input->post('password')) ? $this->input->post('oldpassword') : md5($this->input->post('password'));
            $val['show_password'] = empty($this->input->post('password')) ? $this->input->post('show_password') : $this->input->post('password');
            $val['dob'] = $this->input->post('dob');
            $val['gender'] = $this->input->post('sex');
            $val['mobile'] = $this->input->post('number');
            $val['addhar_no'] = $this->input->post('addhar');
            $val['address'] = $this->input->post('address');
            //print_r($val);die;
            $this->common_model->update_data('users',$val);
            $data = array('text' => "Record Updated Successfully !", 'icon' => "success");
        } else {
            $msg = array(
                'name' => form_error('name'),
                'email' => form_error('email'),
                'dob' => form_error('dob'),
                'sex' => form_error('sex'),
                'number' => form_error('number'),
                'addhar' => form_error('addhar'),
                'user' => form_error('user'),
                'address' => form_error('address')
            );
            $data = array('text' => $msg, 'icon' => 'error');
        }
        echo json_encode($data);
    }    
}
