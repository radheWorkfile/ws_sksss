<?php
class Menu_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /*========================= About Sub Menu Section =====================================*/
    public function save_menu_about($data)
    {
        return $this->db->insert('menu', $data);
    }

    public function menu_about()
    {
        return $this->db->select('*')->get('menu')->result_array();
    }

    public function menu_about_active()
    {
        return $this->db->select('*')->where('status',1)->get('menu')->result_array();
    }

    public function get_data_about($id)
    {
        return $this->db->select('*')->where('id', $id)->get('menu')->row_array();
    }

    public function update_menu_about($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('menu', $data);
    }

    function del_menu_about($val)
    {        
        if ($val) {
            $this->db->where('id', $val);
            $query = $this->db->delete('menu');
            if ($query) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /*========================= Activites Sub Menu Section =====================================*/

    public function save_menu_activity($data)
    {
        return $this->db->insert('activity_menu', $data);
    }

    public function menu_activity()
    {
        return $this->db->select('*')->get('activity_menu')->result_array();
    }

    public function menu_activity_active()
    {
        return $this->db->select('*')->where('status',1)->get('activity_menu')->result_array();
    }

    public function get_data_activity($id)
    {
        return $this->db->select('*')->where('id', $id)->get('activity_menu')->row_array();
    }

    public function update_menu_activity($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('activity_menu', $data);
    }

    function del_menu_activity($val)
    {        
        if ($val) {
            $this->db->where('id', $val);
            $query = $this->db->delete('activity_menu');
            if ($query) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    // ======================================  Resource menu create start ============================ 

    public function save_menu_resoruces($data)
    {
        return $this->db->insert('resource_menu',$data);
    }
    public function get_data_resources()
    {
        return $this->db->select('*')->get('resource_menu')->result_array();
    }
    function del_menu_resources($val)
    {        
        if ($val) {
            $this->db->where('id', $val);
            $query = $this->db->delete('resource_menu');
            if ($query) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function update_resources_data_mod($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('resource_menu', $data);
    }
      public function get_details($id)
    {
        return $this->db->select('*')->where('id', $id)->get('resource_menu')->row_array();
    }
    public function menu_resources_active()
    {
        return $this->db->select('*')->where('status',1)->get('resource_menu')->result_array();
    }
    public function menu_res_activity_active()
    {
        return $this->db->select('*')->where('status',1)->get('resource_menu')->result_array();
    }
    public function get_data_resources_ss($id)  
    {
        return $this->db->select('*')->where('id', $id)->get('resource_menu')->row_array();
    }


  
    // ======================================  Resourse menu create End ============================== 

}
