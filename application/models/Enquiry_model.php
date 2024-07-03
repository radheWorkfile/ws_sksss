<?php
class Enquiry_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function enquiry()
    {
        return $this->db->select('*')->get('enquiry')->result_array();
    }

    public function get_data($id)
    {
        return $this->db->select('*')->where('id', $id)->get('enquiry')->row_array();
    }

    function del_enquiry($val)
    {        
        if ($val) {
            $this->db->where('id', $val);
            $query = $this->db->delete('enquiry');
            if ($query) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }
}
