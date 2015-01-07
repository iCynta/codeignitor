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
                        <form action="#" method="POST">
                            
                        <table class="table table-condensed table-bordered">
                            <tr>
                                <td><span class="glyphicon glyphicon-star"></span></td>
                                <td style="min-width:60%;"><input class="form-control input-sm" id="qest<?php echo $survey['id'] ?>" type="text" value="<?php echo $survey['quest']; ?>" disabled="true"></td>
                                <td>
                                    <input type="button" class="btn btn-small btn-warning btn-edit" value="Edit Question" id="btn<?php echo $survey['id'] ?>" onclick="PostData(<?php echo $survey['id'] ?>)">
<!--                                  <a href="#" class="btn btn-small btn-warning btn-edit"  onclick="PostData(<?php echo $survey['id'] ?>,'E')">Edit Question</a>-->
                                  <a href="<?php echo base_url() ?>/index.php/survey/surveyq_modify/<?php echo $survey['id'] ?>" class="btn btn-small btn-danger">Delete Question</a>
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
    function PostData(i) {
        // 1. Create XHR instance - Start
        var xhr;
        if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        }
        else if (window.ActiveXObject) {
            xhr = new ActiveXObject("Msxml2.XMLHTTP");
        }
        else {
            throw new Error("Ajax is not supported by this browser");
        }
        // 1. Create XHR instance - End

        // 2. Define what to do when XHR feed you the response from the server - Start
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status == 200 && xhr.status < 300) {
                    document.getElementById('div1').innerHTML = xhr.responseText;
                }
            }
        }
        var but = document.getElementById("btn"+i).value;
       if(but==="Edit Question")
       {
           document.getElementById("btn"+i).value="Save Questions";
           document.getElementById("qest"+i).disabled = false;
       }
       else if(but==="Save Questions")
       {
        var qst = document.getElementById("qest"+i).value;
        var qid = i;
        var varb =qst+"|"+ qid;
        document.getElementById("qest"+i).disabled = true;
        // 3. Specify your action, location and Send to the server - Start '
    //    xhr.open('POST','<?php echo base_url()?>/index.php/survey/surveyq_detail');
    //    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    //    xhr.send("qid=" + varb);
            $.ajax({
               type: "POST",
               url: "<?php echo base_url();?>/index.php/survey/update_survey_question",
               data: {
                 question_id: qid,
                 question: qst
                 },
               success: function(msg){
                 alert( "Data Saved: " + msg );
               } 
            });
        document.getElementById("btn"+i).value="Edit Question";
        <?php 

        if(isset($response)){
            echo "alert('".$response."');";
        echo $response;
        }
        ?>
       }

        // 2. Define what to do when XHR feed you the response from the server - Start

        //alert(varb);
        //xhr.send("password="+ password);
        // 3. Specify your action, location and Send to the server - End
    }

</script>

<script type="text/javascript">
    /* attach a submit handler to the form */
    $("#newOptionForm").submit(function(event) {

      /* stop form from submitting normally */
      event.preventDefault();
      /* get some values from elements on the page: */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post */
      var posting = $.post( url, { newOption: $('#newOption').val() } ); 
      alert($('#newOption').val());
      /* Alerts the results */
      posting.done(function( data ) {
        alert('success');
      });
    });
</script>