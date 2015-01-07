<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Technology extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tech_model');
        
        
    }
    
    public function index()
    {
        $data['title']="iCynta-Technology Magazine";
        $this->load->model('menu_model'); 
        $data['menus']      =   $this->menu_model->get_all_menu();
        $data['submenus']   =   $this->menu_model->get_all_submenu();
        
        $data['techs']=$this->tech_model->get_latest_techs();
        
        $this->load->view('templates/header',$data);
        //$this->load->view('templates/banner',$data);
        $this->load->view('technology/index',$data);
        $this->load->view('templates/footer');
    }
    
    public function view_all()
    {
        $data['title']="iCynta-Technology Magazine";
        $this->load->model('menu_model'); 
        $data['menus']      =   $this->menu_model->get_all_menu();
        $data['submenus']   =   $this->menu_model->get_all_submenu();
        
        $data['techs']=$this->tech_model->get_all_techs();
        
        $this->load->view('templates/header',$data);
        //$this->load->view('templates/banner',$data);
        $this->load->view('technology/all_techs',$data);
        $this->load->view('templates/footer');
    }
    
    public function view($slug)
    {
        $this->load->model('menu_model'); 
        $data['menus']      =   $this->menu_model->get_all_menu();
        $data['submenus']   =   $this->menu_model->get_all_submenu();
        
        $data['tech_item']=$this->tech_model->get_techs($slug);
        if(empty($data['tech_item']))
        {
            show_404();
        }

        $data['title']='iCynta-'.$data['tech_item']['title'];
        //$this->load->model('menu_model'); 
        $data['techs']       =   $this->tech_model->get_techs();
        
        $this->load->view('templates/header',$data);
        //$this->load->view('templates/banner');
        $this->load->view('technology/view',$data);
        $this->load->view('templates/footer');
    }
    
}
?>
