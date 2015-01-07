<head>
     <?php echo $library_src; ?>
     <?php echo $script_foot; ?>
</head>
<div class="col-lg-9">
    
        <table class="table table-bordered table-condensed table-responsive table-striped">
            <thead>
                <tr>
                    <th>No:</th>
                    <th>Question</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
            $i = 1;
            foreach ($survey_detail as $survey):
                ?>
                <tr>
                    <td colspan="3">
                        <form action="" method="GET">
                        <table class="table table-condensed table-bordered">
                            <tr>
                                <td><b><?php echo "Q: " . $i; ?></b></td>
                                <td style="min-width:60%;"><input class="form-control input-sm" id="qest" type="text" value="<?php echo $survey['quest']; ?>" disabled="true"></td>
                                <td>
                                    <a href="#" class="btn btn-small btn-warning btn-edit">Edit Question</a>
                                    <a href="<?php echo base_url() ?>/index.php/survey/delete_survey/<?php echo $survey['id'] ?>" class="btn btn-small btn-danger">Delete Question</a>
                                </td>
                            </tr>
                        </table>
                        </form>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <form action="#" method="GET" name="current_options" id="SurveyQuestionOption">
                        <table class="table  table-condensed  pull-left text-center" style="margin:auto; ">
                                <thead>
                                    <tr><th class="text-center" colspan="3">Current Options</th></tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($option_list as $row) {
                                        foreach ($row as $k) {

                                            if ($survey['id'] == $k['questId'])
                                            {
                                            ?>
                                                <tr>
                                                    <td> <input class="form-control input-sm" id="disabledInput" type="text" value="<?php echo$k['optionValue'];?>" disabled /> </td>
                                                    <td><a href="#" class="btn btn-sm btn-warning">Edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger">Delete</a></td>
                                                </tr>
                                            <?php
                                             }
                                        }
                                    }
                                    ?>

                                </tbody>
                        </table>
                        </form>
                        
                    </td>
                    <td colspan="2">
                        
                        <div class="well well-sm">
                            <form class="form-horizontal" role="form" id="newOptionForm"action="<?php echo base_url()?>index.php/survey/add_option"method="POST">
                                <table class="table table-condensed table-responsive">
                                    <thead><tr><th>Add New Option</th></tr></thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control input-sm " name="newOption" id="newOption" required placeholder="New Option"></td>
                                        </tr>
                                        <tr>
                                            <input type="hidden" name="question_id" value="<?php echo $survey['id'] ?>"/>
                                            <td><button type="submit" class="btn btn-sm btn-green pull-right submit" >Add Option</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        
                    </td>
                </tr>
    <?php
    $i++;
endforeach;
?>

        </table>
    </form>
</div>
    <script>
    


$(document).ready(function() {
    
    var app = new App();
     app.init();
    
    $("#newOption").click(function(e)
            {
            $('#newOptionForm').submit();
            preventDefault();
            });
});
    </script>