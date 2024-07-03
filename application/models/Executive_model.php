<?php
class Executive_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    
    public function save_executive($data)
    {
        return $this->db->insert('executive', $data);
    }

    public function executive()
    {
        return $this->db->select('*')->get('executive')->result_array();
    }


    public function executive_active()
    {
        return $this->db->select('*')->where('status',1)->get('executive')->result_array();
    }
    
    public function get_data($id)
    {
        return $this->db->select('*')->where('id', $id)->get('executive')->row_array();
    }

    function del_executive($val)
    {   
        
        $q = $this->db->select('image')->where('id', $val)->get('executive');
        if ($q->num_rows() > 0) {
            $imgName = $q->row_array();
            //print_r($imgName);die;
            unlink("./uploads/executive/" . basename($imgName['image']));
        }

        
        if ($val) {
            $this->db->where('id', $val);
            $query = $this->db->delete('executive');
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
