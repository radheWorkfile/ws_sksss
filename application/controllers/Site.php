<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Common_model');
        error_reporting(0);
    }

    public function privacy_policy()
    {
        $this->load->view('theme/privacy_policy'); 
    }
    public function terms_and_Con()
    {
        $this->load->view('theme/terms_and_Con'); 
    }

    
    public function index()
    {
        $data['news'] = $this->news_model->news_active();
        $data['tender'] = $this->tender_model->tender_active();
        $data['executive'] = $this->executive_model->executive_active();
        // print_r( $data['executive']);die;
        $data['media'] = $this->media_model->media_active();
        $data['gallery'] = $this->gallery_model->gallery_active();
        $data['gallery'] = $this->gallery_model->gallery_active();
        $data['sub_menus_about'] = $this->menu_model->menu_about_active();
        $data['sub_menus_activity'] = $this->menu_model->menu_activity_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_resources_active();
        $this->load->view('theme/index', $data);
    }

    public function about()
    {
        $data['sub_menus_about'] = $this->menu_model->menu_about_active();
        $data['sub_menus_activity'] = $this->menu_model->menu_activity_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_resources_active();
        $this->load->view('theme/about', $data);
    }

    public function activity()
    {
        $data['sub_menus_about'] = $this->menu_model->menu_about_active();
        $data['sub_menus_activity'] = $this->menu_model->menu_activity_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_resources_active();
        $this->load->view('theme/activity', $data);
    }

    public function team()
    {
        $data['executive'] = $this->executive_model->executive_active();
        $data['sub_menus_about'] = $this->menu_model->menu_about_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_resources_active();
        $this->load->view('theme/team', $data);
    }

    public function media()
    {
        $data['media'] = $this->media_model->media_active();
        $data['sub_menus_about'] = $this->menu_model->menu_about_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_resources_active();
        $this->load->view('theme/media', $data);
    }

    public function gallery()
    {
        $data['gallery_image'] = $this->gallery_model->get_last_gallery_active();
        $data['gallery_video'] = $this->gallery_model->get_last_gallery_video_active();
        $data['sub_menus_about'] = $this->menu_model->menu_about_active();
        $data['sub_menus_activity'] = $this->menu_model->menu_activity_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_resources_active();
        $this->load->view('theme/gallery', $data);
    }

    public function gallery_image()
    {
        $data['gallery'] = $this->gallery_model->gallery_active();
        $data['sub_menus_about'] = $this->menu_model->menu_about_active();
        $data['sub_menus_activity'] = $this->menu_model->menu_activity_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_resources_active();
        $this->load->view('theme/gallery_image', $data);
    }

    public function gallery_video()
    {
        $data['gallery'] = $this->gallery_model->gallery_video_active();
        $data['sub_menus_about'] = $this->menu_model->menu_about_active();
        $data['sub_menus_activity'] = $this->menu_model->menu_activity_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_resources_active();
        $this->load->view('theme/gallery_video', $data);
    }

    public function career()
    {
        $data['career'] = $this->career_model->career();
        $data['sub_menus_about'] = $this->menu_model->menu_about_active();
        $data['sub_menus_activity'] = $this->menu_model->menu_activity_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_resources_active();
        $this->load->view('theme/career', $data);
    }

    public function contact()
    {
        $data['sub_menus_about'] = $this->menu_model->menu_about_active();
        $data['sub_menus_activity'] = $this->menu_model->menu_activity_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_resources_active();
        $this->load->view('theme/contact', $data);
    }

    public function donateNow()
    {
        $data['sub_menus_about'] = $this->menu_model->menu_about_active();
        $data['sub_menus_activity'] = $this->menu_model->menu_activity_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_resources_active();
        $this->load->view('theme/donateNow', $data);
    }

    public function annual_report()
    {
        $data['donation'] = $this->Common_model->getAllData('*', 'donate_pay');
        $this->load->view('theme/annual_report', $data);
    }
    public function policy()
    {
        $this->load->view('theme/policy');
    }

    public function donPayDet()
    {
        $value = $this->input->post();



        $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
        if ($value['acc_info'] == 1  && $value['acc_info'] == 1) {
            $config['upload_path']     = './uploads/payDetails';
            $config['allowed_types']   = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('pay_det')) {
                echo $this->upload->display_errors();
            } else {
                $img_data = $this->upload->data();

                $image =  $img_data['file_name'];
            }
        }

        if ($this->form_validation->run() == TRUE) {
            $value = $this->input->post();
            if ($value['acc_info'] == 1) {
                $data = array(
                    'pay_det' => $image,
                    'fname' => $value['fname'],
                    'lname' => $value['lname'],
                    'email' => $value['email'],
                    'phone' => $value['phone'],
                    'acc_info' => $value['acc_info'],
                    'cash' => $value['cash'],
                    'remark' => $value['remark'],
                    'data' => date("Y-m-d")
                );
                if ($data = $this->Common_model->save_data('donate_pay', $data)) {
                    $data = array('text' => 'Thank you! Payment Sucessful ', 'icon' => 'success');
                } else {
                    $data = array('text' => 'Sorry! Something  Went Wrong ', 'icon' => 'success');
                }
            } else {
                $data = array(
                    'pay_det' => $image,
                    'fname' => $value['fname'],
                    'lname' => $value['lname'],
                    'email' => $value['email'],
                    'phone' => $value['phone'],
                    'acc_info' => $value['acc_info'],
                    'cash' => $value['cash'],
                    'remark' => $value['remark'],
                    'data' => date("Y-m-d")
                );
                $data = $this->Common_model->save_data('donate_pay', $data);
                $data = array('text' => 'Thank you! Payment Sucessful Added ', 'icon' => 'success');
            }
        } else {
            $msg = array('fname' => form_error('fname'),);
            $data = array('text' => $msg, 'icon' => 'error');
        }
        echo json_encode($data);
    }




    public function news_page()
    {
        $id = $this->uri->segment(3);
        $data['des'] = $this->news_model->get_data($id);
        $data['sub_menus_about'] = $this->menu_model->menu_about_active();
        $data['sub_menus_activity'] = $this->menu_model->menu_activity_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_resources_active();
        $this->load->view('theme/page', $data);
    }


    public function new_page()
    {
        $check = $this->uri->segment(4);
        $id = $this->uri->segment(3);
        if ($check == "about") {

            $data['new'] = $this->menu_model->get_data_about($id);
            // echo "<pre>"; print_r($data['new']);die;
            if ($id == 18) {
                $data['founder'] = $this->db->select('*')->from('executive')->get()->result();
            }
        } elseif ($check == "activity") {
            $data['new'] = $this->menu_model->get_data_activity($id);
        } elseif ($check == "resources") {
            $data['new'] = $this->menu_model->get_data_resources_ss($id);
        }
        $data['sub_menus_about'] = $this->menu_model->menu_about_active();
        $data['sub_menus_activity'] = $this->menu_model->menu_activity_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_resources_active();
        $this->load->view('theme/newpage', $data);
    }

    public function tender_page()
    {
        $id = $this->uri->segment(3);
        $data['ten'] = $this->tender_model->get_data($id);
        $data['sub_menus_about'] = $this->menu_model->menu_about_active();
        $data['sub_menus_activity'] = $this->menu_model->menu_activity_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_res_activity_active();
        $this->load->view('theme/page', $data);
    }

    public function enquiry()
    {
        $nm = $this->input->post('fname') . " " . $this->input->post('lname');
        file_put_contents("mail.php", $_POST["message_"]);
        $val = array(
            'name' => $this->input->post('fname') . "" . $this->input->post('lname'),
            'mobile' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
            'description' => $this->input->post('message'),
            'created_at' => date('Y-m-d'),
        );
        //print_r($val);die;
        $s = $this->common_model->save_data('enquiry', $val);
        //echo $this->db->last_query();die;
        if ($s) {
            $data = '
                <div class="container">
                    <h1 class="text-center" style="color:black">Response</h1>
                    <div class="row">
                        <h3 style="color:#80ba26">Dear <span class="text-info">' . $nm . '</span>,</h3>
                        <blockquote>
                            <p>
                                We have got your query. We will contact you soon.<br><br>
                                For Quick Enquiry
                                <span class="text-warning">
                                    Call Us
                                </span>
                                at
                                <span class="text-info">
                                    <i class="fa fa-phone"></i>
                                    <span>
                                        <a href="tel:+91 06224-271095">
                                            +91 06224-271095,
                                        </a>
                                        <a href="tel:+91 09431081854">
                                            +91 09431081854,
                                        </a>
                                        <a href="tel:+91 07352624517">
                                            +91 07352624517
                                        </a>
                                    </span>
                                </span>
                            </p>
                            <p>Thank You!</p>
                        </blockquote>
                    </div>
                </div>';
        } else {
            $data = '<h3 style="color:#80ba26">Dear <span class="text-info"><?php echo $en ?>' . $nm . '</span>,</h3>
            <blockquote>
                <p>
                    Something is wrong. It seems like internet is not working well.<br><br>
                    For Quick Enquiry
                    <span class="text-warning">
                        Call Us
                    </span>
                    at
                    <span class="text-info">
                        <i class="fa fa-phone"></i>
                        <i class="fa fa-whatsapp"></i>
                        <span>
                            <a href="tel:+91 06224-271095">
                                +91 06224-271095,
                            </a>
                            <a href="tel:+91 09431081854">
                                +91 09431081854,
                            </a>
                            <a href="tel:+91 07352624517">
                                +91 07352624517
                            </a>
                        </span>
                    </span>
                </p>
                <p>Please, try again!</p>
                <p>Thank You!</p>
            </blockquote>';
        }
        echo json_encode($data);
    }

    public function add_career()
    {
        $nm = $this->input->post('fname') . " " . $this->input->post('lname');
        $filename = "Career_" . $nm . date('d-m-Y');
        $config['upload_path']          = './uploads/career/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 5000;
        $config['file_name'] = $filename;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('cv')) {
            $msg = array('error' => $this->upload->display_errors());
            $data = '<h3 style="color:#80ba26">Dear <span class="text-info"><?php echo $en ?>' . $nm . '</span>,</h3>
                <blockquote>
                    <p>
                        ' . $msg['error'] . ' For More Details Please 
                        <span class="text-warning">
                            Call Us
                        </span>
                        at
                        <span class="text-info">
                            <i class="fa fa-phone"></i>
                            <i class="fa fa-whatsapp"></i>
                            <span>
                                <a href="tel:+91 06224-271095">
                                    +91 06224-271095,
                                </a>
                                <a href="tel:+91 09431081854">
                                    +91 09431081854,
                                </a>
                                <a href="tel:+91 07352624517">
                                    +91 07352624517
                                </a>
                            </span>
                        </span>
                    </p>
                    <p>Please, try again!</p>
                    <p>Thank You!</p>
                </blockquote>';
        } else {
            $doc_data = $this->upload->data();
            $doc = base_url('uploads/career/' . $doc_data['raw_name'] . $doc_data['file_ext']);
            $val = array(
                'name' => $this->input->post('fname') . "" . $this->input->post('lname'),
                'mobile_no' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'doc' => $doc,
                'description' => $this->input->post('message'),
                'created_at' => date('Y-m-d'),
            );
            //print_r($val);die;
            $s = $this->common_model->save_data('career_enquiry', $val);
            //echo $this->db->last_query();die;
            if ($s) {
                $data = '
                        <div class="row">
                            <h3 style="color:#80ba26">Dear <span class="text-info">' . $nm . '</span>,</h3>
                            <blockquote>
                                <p>
                                    We have got your Data. We will contact you soon.<br><br>
                                    For Quick Enquiry
                                    <span class="text-warning">
                                        Call Us
                                    </span>
                                    at
                                    <span class="text-info">
                                        <i class="fa fa-phone"></i>
                                        <span>
                                            <a href="tel:+91 06224-271095">
                                                +91 06224-271095,
                                            </a>
                                            <a href="tel:+91 09431081854">
                                                +91 09431081854,
                                            </a>
                                            <a href="tel:+91 07352624517">
                                                +91 07352624517
                                            </a>
                                        </span>
                                    </span>
                                </p>
                                <p>Thank You!</p>
                            </blockquote>
                        </div>';
            } else {
                $data = '<h3 style="color:#80ba26">Dear <span class="text-info"><?php echo $en ?>' . $nm . '</span>,</h3>
                <blockquote>
                    <p>
                        Something is wrong. It seems like internet is not working well.<br><br>
                        For Quick Enquiry
                        <span class="text-warning">
                            Call Us
                        </span>
                        at
                        <span class="text-info">
                            <i class="fa fa-phone"></i>
                            <i class="fa fa-whatsapp"></i>
                            <span>
                                <a href="tel:+91 06224-271095">
                                    +91 06224-271095,
                                </a>
                                <a href="tel:+91 09431081854">
                                    +91 09431081854,
                                </a>
                                <a href="tel:+91 07352624517">
                                    +91 07352624517
                                </a>
                            </span>
                        </span>
                    </p>
                    <p>Please, try again!</p>
                    <p>Thank You!</p>
                </blockquote>';
            }
        }
        echo json_encode($data);
    }



    public function resources()
    {
        $data['sub_menus_resources'] = $this->menu_model->menu_resources_active();
        $data['sub_menus_resources'] = $this->menu_model->menu_res_activity_active();
        $this->load->view('theme/about', $data);
    }
}
