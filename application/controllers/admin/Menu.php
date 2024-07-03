<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }

    /*========================= About Us Sub Menu Section =====================================*/

    public function manage_menu_about()
    {
        $data['title'] = 'About Sub Menu';
        $data['breadcrumb'] = 'About Sub Menu';
        $data['menu'] = $this->menu_model->menu_about();
        $this->load->view('admin/menu/manage_menu_about', $data);
    }

    public function save_data_about()
    {
        if ($this->input->is_ajax_request()) {

            $this->form_validation->set_rules('title', 'Menu Title', 'required');

            if ($this->form_validation->run() == TRUE) {
                $val = array(
                    'sub_menu' => $this->input->post('title'),
                    'content' => $this->input->post('content'),
                    'created_at' => date('Y-m-d'),
                );
                //print_r($val);die;
                $this->menu_model->save_menu_about($val);
                $data = array('text' => "Menu Added Successfully !", 'icon' => "success");
            } else {
                $msg = array(
                    'title' => form_error('title'),
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }

    public function get_menu_about()
    {
        if ($this->input->is_ajax_request()) {
            $values = $this->input->post();
            $data['menu'] = $this->menu_model->get_data_about($values['id']);
            $this->load->view('admin/menu/menu_update_about', $data);
        }
    }

    public function update_menu_about()
    {
        if ($this->input->is_ajax_request()) {

            $this->form_validation->set_rules('title', 'Menu Title', 'required');

            if ($this->form_validation->run() == TRUE) {
                $val = array(
                    'id' => $this->input->post('id'),
                    'sub_menu' => $this->input->post('title'),
                    'content' => $this->input->post('content'),
                );
                //print_r($val);die;
                $this->menu_model->update_menu_about($val);
                $data = array('text' => "Menu Updated Successfully !", 'icon' => "success");
            } else {
                $msg = array(
                    'title' => form_error('title'),
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }

    public function delete_menu_about()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $del = $this->menu_model->del_menu_about($id);
            //echo $this->db->last_query();die;
            if($del){
                $data = array('text' => "Menu Deleted Successfully !", 'icon' => "success");
            }else{
                $data = array('text' => "Some Error Occour", 'icon' => "error");
            }

            echo json_encode($data);
        }
    }

    /*========================= Activites Sub Menu Section =====================================*/

    public function manage_menu_activity()
    {
        $data['title'] = 'Activity Sub Menu';
        $data['breadcrumb'] = 'Activity Sub Menu';
        $data['menu'] = $this->menu_model->menu_activity();
        $this->load->view('admin/menu/manage_menu_activity', $data);
    }

    public function save_data_activity()
    {
        if ($this->input->is_ajax_request()) {

            $this->form_validation->set_rules('title', 'Menu Title', 'required');

            if ($this->form_validation->run() == TRUE) {
                $val = array(
                    'sub_menu' => $this->input->post('title'),
                    'content' => $this->input->post('content'),
                    'created_at' => date('Y-m-d'),
                );
                //print_r($val);die;
                $this->menu_model->save_menu_activity($val);
                $data = array('text' => "Menu Added Successfully !", 'icon' => "success");
            } else {
                $msg = array(
                    'title' => form_error('title'),
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }

    public function get_menu_activity()
    {
        if ($this->input->is_ajax_request()) {
            $values = $this->input->post();
            $data['menu'] = $this->menu_model->get_data_activity($values['id']);
            $this->load->view('admin/menu/menu_update_activity', $data);
        }
    }

    public function update_menu_activity()
    {
        if ($this->input->is_ajax_request()) {

            $this->form_validation->set_rules('title', 'Menu Title', 'required');

            if ($this->form_validation->run() == TRUE) {
                $val = array(
                    'id' => $this->input->post('id'),
                    'sub_menu' => $this->input->post('title'),
                    'content' => $this->input->post('content'),
                );
                //print_r($val);die;
                $this->menu_model->update_menu_activity($val);
                $data = array('text' => "Menu Updated Successfully !", 'icon' => "success");
            } else {
                $msg = array(
                    'title' => form_error('title'),
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }

    public function delete_menu_activity()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $del = $this->menu_model->del_menu_activity($id);
            //echo $this->db->last_query();die;
            if($del){
                $data = array('text' => "Menu Deleted Successfully !", 'icon' => "success");
            }else{
                $data = array('text' => "Some Error Occour", 'icon' => "error");
            }

            echo json_encode($data);
        }
    }

        /*========================= Resources Sub Menu  Section Start =====================================*/
        public function manage_menu_resources()
        {
            $data['title'] = 'Resources Sub Menu';
            $data['breadcrumb'] = 'Resources Sub Menu';
            $data['menu'] = $this->menu_model->get_data_resources();  
            $this->load->view('admin/menu/manage_menu_resources.php',$data);
        }

        public function save_menu_resoruces()
        {
            if ($this->input->is_ajax_request()) {

                $this->form_validation->set_rules('title', 'Menu Title', 'required');
    
                if ($this->form_validation->run() == TRUE) {
                    $val = array(
                        'sub_menu' => $this->input->post('title'),
                        'content' => $this->input->post('content'),
                        'created_at' => date('Y-m-d'),
                    );
                    $this->menu_model->save_menu_resoruces($val);
                    $data = array('text' => "Menu Added Successfully !", 'icon' => "success");
                } else {
                    $msg = array(
                        'title' => form_error('title'),
                    );
                    $data = array('text' => $msg, 'icon' => 'error');
                }
                echo json_encode($data);
            }
        }
        public function delete_menu_resources()
        {
            if ($this->input->is_ajax_request()) {
                $id = $this->input->post('id');
                $del = $this->menu_model->del_menu_resources($id); 
                if($del){
                    $data = array('text' => "Menu Deleted Successfully !", 'icon' => "success");
                }else{
                    $data = array('text' => "Some Error Occour", 'icon' => "error");
                }
    
                echo json_encode($data);
            }
        }

        public function update_resources_data()
        {
            if ($this->input->is_ajax_request()) {
    
                $this->form_validation->set_rules('title', 'Menu Title', 'required');
    
                if ($this->form_validation->run() == TRUE) {
                    $val = array(
                        'id' => $this->input->post('id'),
                        'sub_menu' => $this->input->post('title'),
                        'content' => $this->input->post('content'),
                    );
                    //print_r($val);die;
                    $this->menu_model->update_resources_data_mod($val);
                    $data = array('text' => "Menu Updated Successfully !", 'icon' => "success");
                } else {
                    $msg = array(
                        'title' => form_error('title'),
                    );
                    $data = array('text' => $msg, 'icon' => 'error');
                }
                echo json_encode($data);
            }
        }

        public function get_details()
        {
            if ($this->input->is_ajax_request()) {
                $values = $this->input->post();
                $data['menu'] = $this->menu_model->get_details($values['id']);
                $this->load->view('admin/menu/menu_update_resources', $data);
            }
        }

        /*========================= Resources Sub Menu Section End =====================================*/
}
