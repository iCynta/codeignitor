<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class News_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news($slug=FALSE)
    {
        if($slug===FALSE)
        {
            $query=$this->db->get('news');
            return $query->result_array();
        }
        $query=$this->db->get_where('news',array('slug'=>$slug));
        return $query->row_array();
    }
    
    public function get_latest_news($slug=FALSE)
    {
        if($slug===FALSE)
        {
           
            $this->db->select('*');
            $this->db->order_by("id","desc");
            $this->db->limit(5, 0);
            $this->db->from('news');
            $query=$this->db->get();
            return $query->result_array();

        }
        $query=$this->db->get_where('news',array('slug'=>$slug));
        return $query->row_array();
    }
    
    public function get_all_news()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->from('news');
        $query=$this->db->get();
        return $query->result_array();
    }
}
?>
