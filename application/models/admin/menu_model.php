<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Menu_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function create_submenu()
    {
        $this->load->helper('url');
        $data   =   array(
            'fk_menu_id'=>$this->input->post('menu'),
            'submenu_name'=>$this->input->post('submenu_name')
        );
        $this->db->insert('sub_menu',$data);
    }
    
    public function get_all_submenu()
    {
        $query=$this->db->get('sub_menu');
        return $query->result_array();
    }
    
    public function get_all_unassigned_submenu()
    {
        $query=$this->db->query("SELECT * FROM sub_menu WHERE slug IS NULL ");
        return $query->result_array();
    }
    
    public function assign_content($submenu_allocation_details)
    {
        $slug   =   $submenu_allocation_details['slug'];
        $submenu_id =   $submenu_allocation_details['submenu_id'];
        $query=$this->db->query("UPDATE sub_menu SET slug = '$slug' WHERE id = $submenu_id");
    }
}
?>
