<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class News extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        
    }
    
    public function index()
    {
        $data['title']="iCynta-News Archive";
        $this->load->model('menu_model'); 
        $data['menus']      =   $this->menu_model->get_all_menu();
        $data['submenus']   =   $this->menu_model->get_all_submenu();
        
        $data['news']=$this->news_model->get_latest_news();
        
        $this->load->view('templates/header',$data);
        //$this->load->view('templates/banner',$data);
        $this->load->view('news/index',$data);
        $this->load->view('templates/footer');
    }
    
    public function view_all()
    {
        $data['title']="iCynta-News Gallery";
        $this->load->model('menu_model'); 
        $data['menus']      =   $this->menu_model->get_all_menu();
        $data['submenus']   =   $this->menu_model->get_all_submenu();
        
        $data['news']=$this->news_model->get_all_news();
        
        $this->load->view('templates/header',$data);
        //$this->load->view('templates/banner',$data);
        $this->load->view('news/all_news',$data);
        $this->load->view('templates/footer');
    }
    
    public function view($slug)
    {
        $this->load->model('menu_model'); 
        $data['menus']      =   $this->menu_model->get_all_menu();
        $data['submenus']   =   $this->menu_model->get_all_submenu();
        
        $data['news_item']=$this->news_model->get_news($slug);
        if(empty($data['news_item']))
        {
            show_404();
        }

        $data['title']='iCynta-'.$data['news_item']['title'];
        //$this->load->model('menu_model'); 
        $data['menus']      =   $this->menu_model->get_all_menu();
        $data['submenus']   =   $this->menu_model->get_all_submenu();
        $data['news']       =   $this->news_model->get_news();
        
        $this->load->view('templates/header',$data);
       // $this->load->view('templates/banner');
        $this->load->view('news/view',$data);
        $this->load->view('templates/footer');
    }
    
}
?>
