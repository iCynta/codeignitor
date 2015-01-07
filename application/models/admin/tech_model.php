<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Tech_model extends CI_Model{
    
    public function __construct() {
        //parent::__construct();
        $this->load->database();
    }
    
    public function create_tech($data)
    {
        $this->load->helper('url');
        $data    =   array(
            'title'   =>  $this->input->post('tech_title'),
            'slug'    =>  url_title($this->input->post('tech_title')),
            'detail'  =>  $this->input->post('detail'),
            'image'   =>  $data['upload_data']['file_name'],
        );
        if($this->db->insert('technology',$data))
            return TRUE;
        else
            return FALSE;
    }
}
?>
