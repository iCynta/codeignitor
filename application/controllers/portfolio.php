<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Portfolio extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('portfolio_model');
    }
    
    public function index()
    {
        $data['portfolio']=$this->portfolio_model->get_portfolio();
        $data['title']="iCynta-Portfolio";
        
        $this->load->model('menu_model'); 
        $data['menus']      =   $this->menu_model->get_all_menu();
        $data['submenus']   =   $this->menu_model->get_all_submenu();
        
        $this->load->view('templates/header',$data);
        //$this->load->view('templates/banner',$data);
        $this->load->view('portfolio/index',$data);
        $this->load->view('templates/footer');
    }
    
    public function view($slug=FALSE)
    {
     
        $data['title']  =   "iCynta-Portfolio";
        $data['portfolio_item']=$this->portfolio_model->get_portfolio($slug);
        if(empty($data['portfolio_item']))
        {
            show_404();
        }
        $this->load->model('menu_model'); 
        $data['menus']      =   $this->menu_model->get_all_menu();
        $data['submenus']   =   $this->menu_model->get_all_submenu();
        
        $data['title']='iCynta-'.$data['portfolio_item']['project_name'];
        $this->load->view('templates/header',$data);
        //$this->load->view('templates/banner',$data);
        $this->load->view('portfolio/view',$data);
        $this->load->view('templates/footer');
    }
}
?>
