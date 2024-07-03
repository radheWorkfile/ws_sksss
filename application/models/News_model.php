<?php
class News_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    
    public function save_news($data)
    {
        return $this->db->insert('news', $data);
    }

    public function news()
    {
        return $this->db->select('*')->get('news')->result_array();
    }

    public function news_active()
    {
        return $this->db->select('*')->where('status',1)->get('news')->result_array();
    }

    public function get_data($id)
    {
        return $this->db->select('*')->where('id', $id)->get('news')->row_array();
    }

    public function update_news($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('news', $data);
    }

    function del_news($val)
    {        
        if ($val) {
            $this->db->where('id', $val);
            $query = $this->db->delete('news');
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
