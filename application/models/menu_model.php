<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Menu_model extends CI_model{
    
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_all_menu()
    {
        $query=$this->db->get('menu');
        return $query->result_array();
    }
    
    public function get_all_submenu()
    {
        $query=$this->db->get('sub_menu');
        return $query->result_array();
    }
}
?>
