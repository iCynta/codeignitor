<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Survey extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('javascript');
        
        $this->load->model('admin/survey_model');
        $data['title'] = "Dashboard-Survey Detail";
    }
    
    public function survey_system() {
        $this->load->model('admin/survey_model');
        $data['title'] = "iCynta-Survey Management";
        $data['survey_list'] = $this->survey_model->survey_list();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navigation', $data);
        $this->load->view('admin/templates/left-side-menu');
        $this->load->view('admin/survey_system', $data);
        $this->load->view('admin/templates/footer');
    }

    public function survey_detail($survey_id,$data=FALSE) {
       
       $this->javascript->click('.btn-edit', "alert('Hello!');");
       $this->javascript->external();
       $this->javascript->compile();

       $this->load->model('admin/survey_model');
       $data['title'] = "iCynta-Survey Detail";
       $data['survey_detail'] = $this->survey_model->survey_detail($survey_id);
        
        /* Fetching all the question ID of the survey to 
         * collect each question's option list from DB */
       foreach($data['survey_detail'] as $survey_detail) :
           $survey_question_id_list[]    =   $survey_detail['id'];
       endforeach;
       $data['option_list'] = $this->survey_model->option_list($survey_question_id_list);

       $this->load->view('admin/templates/header', $data);
       $this->load->view('admin/templates/navigation', $data);
       $this->load->view('admin/templates/left-side-menu');
       $this->load->view('admin/survey_detail', $data);
       $this->load->view('admin/templates/footer');
    }

    public function edit_survey() {
        
        $data['survey_detail'] = $this->survey_model->survey_detail($survey_id);
        
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navigation', $data);
        $this->load->view('admin/templates/left-side-menu');
        $this->load->view('admin/edit_survey_detail', $data);
        $this->load->view('admin/templates/footer');
    }
    public function update_survey_question()
    {
        $data['survey_question_update_status']  =   $this->survey_model->update_survey_question();
                if($data['survey_question_update_status']   === TRUE)
                    $data['response']   =   "<div class ='alert alert-success' role='alert'>Question updated successfully</div>";
                else
                    $data['response']   =   "<div class ='alert alert-danger' role='alert'>Updated was failed</div>";
                
                //$this->survey_detail($survey_id, $data);
    }
    
    public function add_option()
    {
        $success    =   $this->survey_model->add_survey_question_option();
        if($success===TRUE)
        {
            $this->survey_detail($survey_id);
        }
        else
        {
            //echo "Shit Happened";
            echo "<script>";
            echo "alert(Wrong happened);";
            echo "</script>";
        }
    }
}
?>
