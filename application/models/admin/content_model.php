<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Content_model extends CI_Model{
    
    public function __construct() 
    {
        $this->load->database();
    }
    
    public function create_content($data)
    {
       $this->load->helper('url');
       $data    =   array(
           'title'          =>  $this->input->post('page_header'),
           'fk_submenu_id'  =>  $this->input->post('menu'),
           //'slug'           =>  strtolower(str_replace (' ','_',$this->input->post('page_header'))),
           'slug'           =>  url_title($this->input->post('page_header')),
           'detail'         =>  $this->input->post('detail'),
           'image'          =>  $data['upload_data']['file_name'],
       );
       $this->db->insert('content',$data);
       $submenu_allocation_details  =   array(
              'submenu_id'        => $this->input->post('menu'),
              'slug'              => url_title($this->input->post('page_header')),
            );
       return   $submenu_allocation_details ;
    }
    
}
?>
