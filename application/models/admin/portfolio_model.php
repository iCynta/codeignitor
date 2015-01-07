<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Portfolio_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_all_category()
    {
        $query=$this->db->get('project_category');
        return $query->result_array();
    }
    
    public function create_portfolio($data)
    {
       $this->load->helper('url');
       $data    =   array(
           'project_name'    =>  $this->input->post('project_title'),
           'slug'            =>  url_title($this->input->post('project_title')),
           'fk_category_id'  =>  $this->input->post('project_category'),
           'project_detail'  =>  $this->input->post('detail'),
           'image'           =>  $data['upload_data']['file_name'],
       );
       if($this->db->insert('portfolio',$data))
           return TRUE;
       else
           return FALSE;
    }
}
?>
