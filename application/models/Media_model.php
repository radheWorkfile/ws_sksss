<?php
class Media_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    
    public function save_media($data)
    {
        return $this->db->insert('media', $data);
    }

    public function media()
    {
        return $this->db->select('*')->get('media')->result_array();
    }

    public function media_active()
    {
        return $this->db->select('*')->where('status',1)->order_by("id", "desc")->get('media')->result_array();
    }

    public function get_data($id)
    {
        return $this->db->select('*')->where('id', $id)->get('media')->row_array();
    }

    function del_media($val)
    {   
        
        $q = $this->db->select('image')->where('id', $val)->get('media');
        if ($q->num_rows() > 0) {
            $imgName = $q->row_array();
            //print_r($imgName);die;
            unlink("./uploads/media/" . basename($imgName['image']));
        }

        
        if ($val) {
            $this->db->where('id', $val);
            $query = $this->db->delete('media');
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
