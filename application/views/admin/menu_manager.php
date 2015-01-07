<div class="col-lg-9">
       
        <?php
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $class_dropdown =   "class = form-control width=50% required ";
        $class_form     =   array('class'=>'form-horizontal' ,'role'=>'form');
        $class_label    =   array('class'=>'col-sm-2 control-label' , 'for'=>'menu');
        
        // Option to select the menu in which the submenu item should display

        echo form_open('admin/create_submenu',$class_form);
        
        $options = array(
                  '1'  => 'Area Of Expertise',
                  '2'  => 'News And updates',
                );

        echo"<div class='form-group'>";
            echo form_label('Select Menu', 'menu', $class_label);
            echo"<div class='col-sm-6'>";
            echo form_dropdown('menu', $options,'AreaOfExpertise', $class_dropdown);
            echo "</div>";
        echo"</div>";

        // Submenu name field
        $attributes = array(
              'name'        => 'submenu_name',
              'id'          => 'submenu_name',
              'value'       => '',
              'maxlength'   => '50',
              'size'        => '50',
              'style'       => 'width:100%',
              'class'       =>  'form-control',
            );
        echo"<div class='form-group'>";
            echo form_label('Sub Menu', 'sub_menu', $class_label);
            echo"<div class='col-sm-6'>";
            echo form_input($attributes);
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