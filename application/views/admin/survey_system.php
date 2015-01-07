<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//var_dump($survey_list);

?>
<div class="col-lg-9">
    <table class="table table-bordered table-condensed table-responsive table-striped">
        <thead>
            <tr>
                <th>No:</th>
                <th>Survey Name</th>
                <th>Starts From</th>
                <th>Ends by</th>
                <th> Status</th>
                <th>Created By</th>
                <th>Action</th>
            </tr>
       </thead>
       <tbody>
                <?php 
                $i=1;
                foreach($survey_list as $survey):?>
                <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $survey['surveyName']?></td>
                <td><?php echo $survey['startDate']?></td>
                <td><?php echo $survey['endDate']?></td>
                <td><?php echo $survey['status']?></td>
                <td><?php echo $survey['created_by']?></td>
                <td>
                    <a href="<?php echo base_url()?>index.php/survey/survey_detail/<?php echo $survey['id']?>" class="btn btn-small btn-info">View </a>
                    <a href="<?php echo base_url()?>index.php/survey/survey_detail/<?php echo $survey['id']?>" class="btn btn-small btn-warning">Edit </a>
                    <a href="<?php echo base_url()?>index.php/survey/survey_detail/<?php echo $survey['id']?>" class="btn btn-small btn-danger">Delete </a>
                </td>
                </tr>
                <?php 
                $i++;
                endforeach;?>
      </tbody>
    </table>
</div>