<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Portfolio_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_portfolio($slug=FALSE)
    {
        if($slug===FALSE)
        {
            $query=$this->db->get('portfolio');
            return $query->result_array();
        }
        $query=$this->db->get_where('portfolio',array('slug'=>$slug));
        return $query->row_array();
    }
}
?>
