<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Tech_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_techs($slug=FALSE)
    {
        if($slug===FALSE)
        {
            $query=$this->db->get('technology');
            return $query->result_array();
        }
        $query=$this->db->get_where('technology',array('slug'=>$slug));
        return $query->row_array();
    }
    
    public function get_latest_techs($slug=FALSE)
    {
        if($slug===FALSE)
        {
           
            $this->db->select('*');
            $this->db->order_by("id","desc");
            $this->db->limit(5, 0);
            $this->db->from('technology');
            $query=$this->db->get();
            return $query->result_array();

        }
        $query=$this->db->get_where('technology',array('slug'=>$slug));
        return $query->row_array();
    }
    
    public function get_all_techs()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->from('technology');
        $query=$this->db->get();
        return $query->result_array();
    }
}
?>
