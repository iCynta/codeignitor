<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin Extends CI_Controller {
    public function __construct() {
        parent::__construct();
        //$this->load->library('javascript');
    }

    public function index($page = "dashboard") {
        if (!file_exists(APPPATH . '/views/admin/' . $page . '.php')) {
            show_404();
            //echo "Sorry !!!..  ".$page." Page is not found ";
        }
        $data['title'] = ucfirst($page); // capitalize first letter
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navigation', $data);
        $this->load->view('admin/' . $page, $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function menu_manager() {
        $data['title'] = " iCynta-Menu Manager";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navigation', $data);
        $this->load->view('admin/templates/left-side-menu', $data);
        $this->load->view('admin/menu_manager', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function create_submenu() {
        $data = array('title' => 'iCynta-Create Submenu');
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('menu', 'menu', 'required');
        $this->form_validation->set_rules('sub_menu', 'sub_menu', 'required');

        if ($this->form_validation->run() === TRUE) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navigation', $data);
            $this->load->view('admin/templates/left-side-menu', $data);
            $this->load->view('admin/menu_manager');
            $this->load->view('admin/templates/footer', $data);
        } else {
            $this->load->model('admin/menu_model');
            $this->menu_model->create_submenu();
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navigation', $data);
            $this->load->view('admin/templates/left-side-menu', $data);
            $this->load->view('admin/menu_manager');
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function content_manager() {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data = array('title' => 'Dashboard-Create Content');

        $this->form_validation->set_rules('page_header', 'Page Header', 'required');
        $this->form_validation->set_rules('detail', 'Detail', 'required');
        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $this->form_validation->set_rules('content_image', 'Content Image', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->model('admin/menu_model');
            $data['submenus'] = $this->menu_model->get_all_unassigned_submenu();

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navigation', $data);
            $this->load->view('admin/templates/left-side-menu', $data);
            $this->load->view('admin/content_manager', $data);
            $this->load->view('admin/templates/footer', $data);
        } else {
            $this->load->model('admin/menu_model');
            $data['submenus'] = $this->menu_model->get_all_unassigned_submenu();

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navigation', $data);
            $this->load->view('admin/templates/left-side-menu', $data);
            $this->load->view('admin/content_manager');
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function create_content() {
        $data = array('title' => 'Dashboard-Create Content');
        $this->load->helper('form');
        $this->load->model('admin/content_model');
        $this->load->model('admin/menu_model');

        $config['upload_path'] = './uploads/content';
        $config['allowed_types'] = 'gif|jpg|png|';
        $config['max_size'] = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $data = array('error' => $this->upload->display_errors("<p class='text-danger bg-danger'>", '</p>'));
            $this->load->model('admin/menu_model');
            $data['submenus'] = $this->menu_model->get_all_unassigned_submenu();

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navigation', $data);
            $this->load->view('admin/templates/left-side-menu', $data);
            $this->load->view('admin/content_manager', $data);
            $this->load->view('admin/templates/footer', $data);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $config['source_image'] = './uploads/content/' . $data['upload_data']['file_name'];
            $config['new_image'] = './uploads/content/thumb';
            $config['image_library'] = 'gd2';
            $config['create_thumb'] = 'TRUE';
            $config['maintain_ratio'] = 'TRUE';
            $config['width'] = 400;
            $config['height'] = 400;

            $this->load->library('image_lib', $config);

            if (!$this->image_lib->resize()) {
                $data = array('error' => $this->image_lib->display_errors("<p class='text-danger bg-danger'>", '</p>'));
            }

            $data = array('upload_data' => $this->upload->data()); // Passing the uploaded images details to CREATE_CONTENT model
            $slug_for_submenu_allocation = $this->content_model->create_content($data);
            $this->menu_model->assign_content($slug_for_submenu_allocation);

            $data = array('error' => "<p class='text-danger bg-danger'> Image uploaded successfully </p>");
            $this->load->model('admin/menu_model');
            $data['submenus'] = $this->menu_model->get_all_unassigned_submenu();

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navigation', $data);
            $this->load->view('admin/templates/left-side-menu', $data);
            $this->load->view('admin/content_manager', $data);
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function portfolio_manager() {
        $data = array('title' => 'DashBoard-Manage Portfolio');

        $this->load->library('form_validation');

        //$this->form_validation->set_rules('menu','menu','required');
        //$this->form_validation->set_rules('sub_menu','sub_menu','required');

        $this->load->model('admin/portfolio_model');
        $data['project_categories'] = $this->portfolio_model->get_all_category();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navigation', $data);
        $this->load->view('admin/templates/left-side-menu', $data);
        $this->load->view('admin/portfolio_manager', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function create_portfolio() {
        $data = array('title' => 'Create Portfolio');
        $this->load->helper('form');
        $this->load->model('admin/portfolio_model');

        // ************ Image upload settings
        $config['upload_path'] = './uploads/projects';
        $config['allowed_types'] = 'gif|jpg|png|';
        $config['max_size'] = '5000';
        $config['max_width'] = '1200';
        $config['max_height'] = '1200';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $data = array('error' => $this->upload->display_errors("<p class='text-danger bg-danger'>", '</p>'));

            $this->load->model('admin/portfolio_model');
            $data['project_categories'] = $this->portfolio_model->get_all_category();

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navigation', $data);
            $this->load->view('admin/templates/left-side-menu', $data);
            $this->load->view('admin/portfolio_manager', $data);
            $this->load->view('admin/templates/footer', $data);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $config['source_image'] = './uploads/projects/' . $data['upload_data']['file_name'];
            $config['new_image'] = './uploads/projects/thumb';
            $config['image_library'] = 'gd2';
            $config['create_thumb'] = 'TRUE';
            $config['maintain_ratio'] = 'TRUE';
            $config['width'] = 400;
            $config['height'] = 400;

            $this->load->library('image_lib', $config);

            if (!$this->image_lib->resize()) {
                $data = array('error' => $this->image_lib->display_errors("<p class='text-danger bg-danger'>", '</p>'));
            }
            $data = array('upload_data' => $this->upload->data()); // Passing the uploaded images details to CREATE_PORTFOLIO model
            // Inserting the portfolio details to database
            $this->load->model('admin/portfolio_model');
            $success = $this->portfolio_model->create_portfolio($data);
            if ($success === TRUE)
                $data = array('error' => "<p class='text-danger bg-danger'> Project successfully created </p>");

            $this->load->model('admin/portfolio_model');
            $data['project_categories'] = $this->portfolio_model->get_all_category();

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navigation', $data);
            $this->load->view('admin/templates/left-side-menu', $data);
            $this->load->view('admin/portfolio_manager', $data);
            $this->load->view('admin/templates/footer');
        }
    }

    public function news_manager() {
        $data = array('title' => 'Create News');
        $this->load->helper('form');

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navigation');
        $this->load->view('admin/templates/left-side-menu');
        $this->load->view('admin/news_manager', $data);
        $this->load->view('admin/templates/footer');
    }

    public function create_news() {
        // ************ Image upload settings
        $config['upload_path'] = './uploads/news';
        $config['allowed_types'] = 'gif|jpg|png|';
        $config['max_size'] = '5000';
        $config['max_width'] = '1200';
        $config['max_height'] = '1200';

        $this->load->helper('form');
        $this->load->model('admin/news_model');

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $data = array('error' => $this->upload->display_errors("<p class='text-danger bg-danger'>", '</p>'));

            $this->load->model('admin/news_model');

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navigation', $data);
            $this->load->view('admin/templates/left-side-menu', $data);
            $this->load->view('admin/news_manager', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = array('upload_data' => $this->upload->data());

            $config['source_image'] = './uploads/news/' . $data['upload_data']['file_name'];
            $config['new_image'] = './uploads/news/thumb';
            $config['image_library'] = 'gd2';
            $config['create_thumb'] = 'TRUE';
            $config['maintain_ratio'] = 'TRUE';
            $config['width'] = 400;
            $config['height'] = 400;

            $this->load->library('image_lib', $config);

            if (!$this->image_lib->resize()) {
                $data = array('error' => $this->image_lib->display_errors("<p class='text-danger bg-danger'>", '</p>'));
            }
            $data = array('upload_data' => $this->upload->data()); // Passing the uploaded images details to CREATE_PORTFOLIO model
            // Inserting the news details to database
            $this->load->model('admin/news_model');
            $success = $this->news_model->create_news($data);
            if ($success === TRUE)
                $data = array('error' => "<p class='text-danger bg-danger'> News successfully created </p>");

            $this->load->model('admin/news_model');

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navigation', $data);
            $this->load->view('admin/templates/left-side-menu');
            $this->load->view('admin/news_manager', $data);
            $this->load->view('admin/templates/footer');
        }
    }

    public function tech_manager() {
        $data = array('title' => 'Create Technology Reader');
        $this->load->helper('form');

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navigation');
        $this->load->view('admin/templates/left-side-menu');
        $this->load->view('admin/tech_manager', $data);
        $this->load->view('admin/templates/footer');
    }

    public function create_tech() {
        // ************ Image upload settings
        $config['upload_path']      = './uploads/technology';
        $config['allowed_types']    = 'gif|jpg|png|';
        $config['max_size']         = '5000';
        $config['max_width']        = '1200';
        $config['max_height']       = '1200';

        $this->load->helper('form');
        $this->load->model('admin/tech_model');

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $data = array('error' => $this->upload->display_errors("<p class='text-danger bg-danger'>", '</p>'));

            $this->load->model('admin/tech_model');

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navigation', $data);
            $this->load->view('admin/templates/left-side-menu', $data);
            $this->load->view('admin/tech_manager', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = array('upload_data' => $this->upload->data());

            $config['source_image'] = './uploads/technology/' . $data['upload_data']['file_name'];
            $config['new_image'] = './uploads/technology/thumb';
            $config['image_library'] = 'gd2';
            $config['create_thumb'] = 'TRUE';
            $config['maintain_ratio'] = 'TRUE';
            $config['width'] = 400;
            $config['height'] = 400;

            $this->load->library('image_lib', $config);

            if (!$this->image_lib->resize()) {
                $data = array('error' => $this->image_lib->display_errors("<p class='text-danger bg-danger'>", '</p>'));
            }
            $data = array('upload_data' => $this->upload->data()); // Passing the uploaded images details to CREATE_PORTFOLIO model
            // Inserting the technology details to database
            $this->load->model('admin/tech_model');
            $success = $this->tech_model->create_tech($data);
            if ($success === TRUE)
                $data = array('error' => "<p class='text-danger bg-danger'> Technology reader successfully created </p>");

            $this->load->model('admin/tech_model');

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navigation', $data);
            $this->load->view('admin/templates/left-side-menu');
            $this->load->view('admin/tech_manager', $data);
            $this->load->view('admin/templates/footer');
        }
    }

}

?>
