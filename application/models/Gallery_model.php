<?php
class Gallery_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    
    public function save_gallery($data)
    {
        return $this->db->insert('gallery', $data);
    }

    public function save_gallery_video($data)
    {
        return $this->db->insert('gallery_video', $data);
    }

    public function gallery()
    {
        return $this->db->select('*')->get('gallery')->result_array();
    }

    public function gallery_video()
    {
        return $this->db->select('*')->get('gallery_video')->result_array();
    }

    public function gallery_active()
    {
        return $this->db->select('*')->where('status',1)->order_by("id", "desc")->get('gallery')->result_array();
    }

    public function gallery_video_active()
    {
        return $this->db->select('*')->where('status',1)->get('gallery_video')->result_array();
    }

    public function get_last_gallery_active()
    {
        return $this->db->select('*')->where('status',1)->get('gallery')->row_array();
    }

    public function get_last_gallery_video_active()
    {
        return $this->db->select('*')->where('status',1)->limit(1)->order_by("id", "desc")->get('gallery_video')->row_array();
    }

    public function get_data($id)
    {
        return $this->db->select('*')->where('id', $id)->get('gallery')->row_array();
    }

    public function get_data_video($id)
    {
        return $this->db->select('*')->where('id', $id)->get('gallery_video')->row_array();
    }


    function del_gallery($val)
    {        
        $q = $this->db->select('image')->where('id', $val)->get('gallery');
        if ($q->num_rows() > 0) {
            $imgName = $q->row_array();
            //print_r($imgName);die;
            unlink("./uploads/gallery/" . basename($imgName['image']));
        }

        
        if ($val) {
            $this->db->where('id', $val);
            $query = $this->db->delete('gallery');
            if ($query) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function del_gallery_video($val)
    {        
        $q = $this->db->select('video')->where('id', $val)->get('gallery_video');
        if ($q->num_rows() > 0) {
            $vidName = $q->row_array();
            //print_r($imgName);die;
            unlink("./uploads/gallery_video/" . basename($vidName['video']));
        }

        
        if ($val) {
            $this->db->where('id', $val);
            $query = $this->db->delete('gallery_video');
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
