<html>
    <head>
    <?php 
    $link_loader=$this->load->helper('url');
    ?>
	<title><?php echo $title ;?></title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="http://icynta.com" />
        <!-- css -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/css/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="<?php //echo base_url();?>assets/css/jcarousel.css" rel="stylesheet" /> 
        <link href="<?php echo base_url();?>assets/css/flexslider.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />

        <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/custom_icynta.js"></script>
        <!-- Theme skin -->
        <link href="<?php echo base_url();?>assets/skins/default.css" rel="stylesheet" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
        <!-- ********************* CK editor Elements *******************-->
        <script src="<?php echo base_url();?>assets/ckeditor/adapters/jquery.js"></script>
        <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
        <script src="<?php echo base_url();?>assets/ckeditor/adapters/jquery.js"></script>
        <!-- CODEIGNITOR JQUERY STARTS HERE-->
        <script type="text/javascript" src="<?php echo base_url() ?>system/libraries/javascript/jquery.js"></script>
        
    </head>
    <body>
        <div class="wrapper">
            
        <div class="container">
            <?php echo base_url(); ?>