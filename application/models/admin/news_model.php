<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class News_model extends CI_Model{
    
    public function __construct() {
        //parent::__construct();
        $this->load->database();
    }
    
    public function create_news($data)
    {
        $this->load->helper('url');
        $data    =   array(
            'title'   =>  $this->input->post('news_title'),
            'slug'    =>  url_title($this->input->post('news_title')),
            'detail'  =>  $this->input->post('detail'),
            'image'   =>  $data['upload_data']['file_name'],
        );
        if($this->db->insert('news',$data))
            return TRUE;
        else
            return FALSE;
    }
}
?>
