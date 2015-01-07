<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Pages Extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();

        // Loading the Available Submenus from Database
        $this->load->model('menu_model'); 
        $data['menus']      =   $this->menu_model->get_all_menu();
        $data['submenus']   =   $this->menu_model->get_all_submenu();
        
        $this->load->model('tech_model'); // For iCynta Technology Magazin Area
        $data['techs']=$this->tech_model->get_latest_techs();
        
        $data['title']      =   'iCynta-Home';
        $this->load->view('templates/header',$data); 
        
    }
    
    public function view() 
    {
        if(!file_exists(APPPATH.'/views/templates/home.php'))
        {
            show_404();
        }
        $this->load->model('content_model');
        $this->load->model('news_model'); 
      
        $data['news']=$this->news_model->get_latest_news();
        
        $this->load->view('templates/banner');
        //$this->load->view('templates/header',$data); 
        $this->load->view('templates/home',$data);
        $this->load->view('templates/footer');

    }
    
    public function content($article="")
    {
        //$this->load->view('templates/banner');
        $this->load->view('templates/header',$data); 
        $this->load->view('content',data);
        $this->load->view('templates/footer');
    }
}
?>
