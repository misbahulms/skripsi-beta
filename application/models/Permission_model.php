<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permission_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->id_role = $this->session->userdata('id_role');
    }

    public function validation_permission()
    {
        if ($this->id_role == null) {
            redirect(base_url());
        }
        $class = ucfirst($this->uri->segment(1));
        $function = ucfirst($this->uri->segment(2));
        if ($function == "") {
            $function = "";
        }
        $this_menu = $this->get_function_now($class, $function);
        $menu_id_available = $this->get_permission();
        $status = 0;
        // if (empty($this_menu)) {
        //     $status = 0;
        // }else{
        //     if (in_array($this_menu->id, $menu_id_available) || in_array("all", $menu_id_available)){
        //         $status = 1;
        //     }
        // }

        if (empty($this_menu)) {
            if (in_array("all", $menu_id_available)) $status = 1;
        } else {
            if (in_array($this_menu->id, $menu_id_available) || in_array("all", $menu_id_available)) {
                $status = 1;
            }
        }

        return $status;
    }

    public function get_function_now($class, $function)
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where('active', $class);
        $this->db->where('active_child', $function);

        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }

    public function get_permission()
    {
        $menu_id = array();
        $this->db->select('*');
        $this->db->from('permission');
        $this->db->where('id_role', $this->id_role);

        $query = $this->db->get();
        $result = $query->result();
        foreach ($result as $row) {
            $menu_id[] = $row->id_menu;
        }
        return $menu_id;
    }
}