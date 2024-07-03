<?php
class Career_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    
    public function career()
    {
           
        return $this->db->select('*')->get('career')->row_array();
    }

    public function update_career($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('career', $data);
    }

    public function career_enquiry()
    {
        return $this->db->select('*')->get('career_enquiry')->result_array();
    }


    function del_career_enquiry($val)
    {        
        $q = $this->db->select('doc')->where('id', $val)->get('career_enquiry');
        if ($q->num_rows() > 0) {
            $doc = $q->row_array();
            //print_r($imgName);die;
            unlink("./uploads/career/" . basename($doc['doc']));
        }

        
        if ($val) {
            $this->db->where('id', $val);
            $query = $this->db->delete('career_enquiry');
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
