<div class="col-lg-9">
       
        <?php
        if(isset($error))
            echo $error;
        $class_dropdown =   "class = form-control width=50%  ";
        $class_form     =   array('class'=>'form-horizontal' ,'role'=>'form');
        $class_label    =   array('class'=>'col-sm-2 control-label' , 'for'=>'menu');
        $class_textarea =   "class = 'form-control ckeditor'  width = 100% ";
        
        // Option to select the menu in which the submenu item should display

        echo form_open_multipart('admin/create_portfolio',$class_form);
        
        $options= array();
        foreach($project_categories as $project_category):
            $options [$project_category['id']] = $project_category['name'];
        endforeach ;

        echo"<div class='form-group'>";
            echo form_label('Project Category', 'project_category', $class_label);
            echo"<div class='col-sm-6'>";
            echo form_dropdown('project_category', $options,'', $class_dropdown);
            echo "</div>";
        echo"</div>";

        // Submenu name field
        $attributes = array(
              'name'        => 'project_title',
              'id'          => 'project_title',
              'value'       => '',
              'maxlength'   => '50',
              'size'        => '50',
              'style'       => 'width:100%',
              'class'       =>  'form-control',
            );
        echo"<div class='form-group'>";
            echo form_label('Project Title', 'project_title', $class_label);
            echo"<div class='col-sm-6'>";
            echo form_input($attributes);
            echo"</div>";
        echo"</div>";
        
        
        echo"<div class='form-group'>";
            echo form_label('Project Detail', 'detail', $class_label);
            echo"<div class='col-sm-10'>";
            echo form_textarea('detail','',$class_textarea);
            echo"</div>";
        echo"</div>";
        
        echo"<div class='form-group'>";
            echo form_label('Project Image', 'image', $class_label);
            echo"<div class='col-sm-6'>";
            echo "<input type='file' name='userfile' class='form-control' />";
            echo"</div>";
        echo"</div>";
        
        $attributes = array('name'=>'submenu_action','class'=>'btn btn success');
        echo"<div class='form-group'>";
            echo form_label('', '', $class_label);
            echo"<div class='col-sm-6'>";
            echo form_submit($attributes,'create');
            echo"</div>";
        echo"</div>";

        ?>
</div>