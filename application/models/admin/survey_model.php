<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Survey_model extends CI_Model{
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
    public function survey_list()
    {
        $query=$this->db->get('ut_survey');
        return $query->result_array();
    }
    public function survey_detail($survey_id)
    {
        $query="SELECT q.id,q.sid,q.quest,q.inputType FROM ut_survey_quest q INNER JOIN(SELECT id,surveyName FROM ut_survey )s ON s.id=q.sid WHERE sid=$survey_id ORDER BY id DESC";
        $query = $this->db->query($query);
        return $query->result_array();
    }
    
    public function option_list($survey_question_id_list)
    {
        foreach($survey_question_id_list as $question_id):
            $query="SELECT * FROM ut_survey_options WHERE questId=$question_id";
            $query = $this->db->query($query);
            $option_list[]  =   $query->result_array();    
        endforeach;
        return $option_list;

    }
    
    public function add_survey_question_option()
    {
      
       $data    =   array(
           'questId'      =>  $this->input->post('question_id'),
           'optionValue'  =>  $this->input->post('newOption'),
       );
       
        if($this->db->insert('ut_survey_options',$data))
           return TRUE;
        else
            return FALSE;
    }
    
    public function update_survey_question()
    {
        $data    =   array(
           'id'      =>  $this->input->post('question_id'),
           'quest'  =>  $this->input->post('question'),
       );
        
       $this->db->where('id', $data['id']);
       $this->db->update('ut_survey_quest', $data); 
       if($this->db->affected_rows()    ==  1)
           return TRUE;
       else
           return FALSE;
       
    }
}
?>
