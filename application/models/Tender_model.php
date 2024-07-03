<?php
class Tender_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    
    public function save_tender($data)
    {
        return $this->db->insert('tender', $data);
    }

    public function tender()
    {
        return $this->db->select('*')->get('tender')->result_array();
    }

    public function tender_active()
    {
        return $this->db->select('*')->where('status',1)->get('tender')->result_array();
    }

    public function get_data($id)
    {
        return $this->db->select('*')->where('id', $id)->get('tender')->row_array();
    }

    public function update_tender($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tender', $data);

    }

    function update_doc($val)
    {
        $q = $this->db->select('doc')->where('id', $val['id'])->get('tender');
        if ($q->num_rows() > 0) {
            $docName = $q->row_array();
            //print_r($imgName);die;
            unlink("./uploads/tender/" . basename($docName['doc']));
        }

        $this->db->where('id', $val['id']);
        if ($val) {
            $query = $this->db->update('tender', $val);
            if ($query) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function del_tender($val)
    {
        $q = $this->db->select('doc')->where('id', $val)->get('tender');
        if ($q->num_rows() > 0) {
            $docName = $q->row_array();
            //print_r($imgName);die;
            unlink("./uploads/tender/" . basename($docName['doc']));
        }

        
        if ($val) {
            $this->db->where('id', $val);
            $query = $this->db->delete('tender');
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
