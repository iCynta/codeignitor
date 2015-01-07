<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Contact extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        
        $this->load->model('menu_model'); 
        $data['menus']      =   $this->menu_model->get_all_menu();
        $data['submenus']   =   $this->menu_model->get_all_submenu();
    }
    
    public function index()
    {
        $data['title']="iCynta-Contact";
        
        $this->load->model('menu_model'); 
        $data['menus']      =   $this->menu_model->get_all_menu();
        $data['submenus']   =   $this->menu_model->get_all_submenu();
        
        $this->load->view('templates/header',$data);
        //$this->load->view('templates/banner');
        $this->load->view('templates/contact');
        $this->load->view('templates/footer');
    }
        
}
?>
