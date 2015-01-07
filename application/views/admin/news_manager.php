<div class="col-lg-9">
       
        <?php
        if(isset($error))
            echo $error;
        $class_dropdown =   "class = form-control width=50%  ";
        $class_form     =   array('class'=>'form-horizontal' ,'role'=>'form');
        $class_label    =   array('class'=>'col-sm-2 control-label' , 'for'=>'menu');
        $class_textarea =   "class = 'form-control ckeditor'  width = 100% ";
        
        // Option to select the menu in which the submenu item should display

        echo form_open_multipart('admin/create_news',$class_form);
        
       // Submenu name field
        $attributes = array(
              'name'        => 'news_title',
              'id'          => 'news_title',
              'value'       => '',
              'maxlength'   => '50',
              'size'        => '50',
              'style'       => 'width:100%',
              'class'       =>  'form-control',
            );
        echo"<div class='form-group'>";
            echo form_label('News Title', 'news_title', $class_label);
            echo"<div class='col-sm-6'>";
            echo form_input($attributes);
            echo"</div>";
        echo"</div>";
        
        echo"<div class='form-group'>";
            echo form_label('News Detail', 'detail', $class_label);
            echo"<div class='col-sm-10'>";
            echo form_textarea('detail','',$class_textarea);
            echo"</div>";
        echo"</div>";
        
        echo"<div class='form-group'>";
            echo form_label('News Image', 'image', $class_label);
            echo"<div class='col-sm-6'>";
            echo "<input type='file' name='userfile' class='form-control' />";
            echo"</div>";
        echo"</div>";
        
        $attributes = array('name'=>'news_action','class'=>'btn btn success');
        echo"<div class='form-group'>";
            echo form_label('', '', $class_label);
            echo"<div class='col-sm-6'>";
            echo form_submit($attributes,'create');
            echo"</div>";
        echo"</div>";

        ?>
</div>