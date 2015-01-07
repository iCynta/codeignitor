<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Content extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('content_model');
        $this->load->model('menu_model'); 
        $data['menus']      =   $this->menu_model->get_all_menu();
        $data['submenus']   =   $this->menu_model->get_all_submenu();
    }
    
    public function index()
    {
        $data['content']=$this->content_model->get_content();
        $data['title']="Content Page";
        $this->load->view('templates/header',$data);
        //$this->load->view('templates/banner',$data);
        $this->load->view('content/index',$data);
        $this->load->view('templates/footer');
    }
    
    public function view($slug)
    {
     
        $data['content_item']=$this->content_model->get_content($slug);
        if(empty($data['content_item']))
        {
            show_404();
        }
        $this->load->model('menu_model'); 
        $data['menus']      =   $this->menu_model->get_all_menu();
        $data['submenus']   =   $this->menu_model->get_all_submenu();
        
        $data['title']='iCynta-'.$data['content_item']['title'];
        $this->load->view('templates/header',$data);
        //$this->load->view('templates/banner',$data);
        $this->load->view('content/view',$data);
        $this->load->view('templates/footer');
    }
}
?>
