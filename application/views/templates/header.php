<html>
<head>
    <?php 
    $link_loader=$this->load->helper('url');
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        <xml version="1.0"> 
      <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<h1><title> <?php echo $title ?> </title></h1>
        
        <meta http-equiv="Content-Type" content="Content-Type: text/html; charset=utf-8">
        <meta name="keywords" content="Software Developement, Website Developement,UAE-IT,Dubai_Software">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Dubai based Software and website development team. iCynta.com have hands on Website Development,
              Software Development , Customized Software Development , Search Engine Optimization , Digital Marketing , Accounting Softwares , Purchase Order Management System" />
        <meta name="author" content="http://icynta.com" />

        <!-- css -->


            <style type="text/css">
            @import url("http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.css");

            #feedControl {
            margin-top : 10px;
            margin-left: auto;
            margin-right: auto;
            width : 440px;
            font-size: 12px;
            color: #9CADD0;
            }
            </style>
            <script type="text/javascript">
            function load() {
            var feed ="http://feeds.bbci.co.uk/news/world/rss.xml";
            new GFdynamicFeedControl(feed, "feedControl");

            }
            google.load("feeds", "1");
            google.setOnLoadCallback(load);
            </script>
        <!-- GOOGLE FEEDS ENDS HERE -->
        <!--  GOOGLE ANALYTICS CODE STARTS HERE-->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-52705631-1', 'auto');
            ga('send', 'pageview');

        </script>
        <!-- GOOGLE ANALYTICS CODE ENDS HERE -->
</head>
<body>
    <!-- FACEBOOK JAVASCRIPT SDK STARTS HERE-->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1433509836927365&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!-- FACEBOOK SDK ENDS HERE -->
    <header>
        <div class="navbar navbar-default  navbar-fixed-top">
<!--            <div class="container">-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>"><span></span><img src="<?php echo base_url().'assets/img/iCynta.png'?>" class="img img-responsive" alt="iCynta.com IT and Solutions"/></a>
                </div>
                <div class="navbar-collapse collapse shadow-box ">
                    <ul class="nav navbar-nav">
                        <?php
                        //$base_url   =   base_url();
                        foreach($menus as $menu):
                                    
                            if($menu['menu_type']   ==  1)
                                {
                                    echo "<li class='dropdown'>";
                                    echo "<a href='#' class='dropdown-toggle ' data-toggle='dropdown' data-hover='dropdown' data-delay='0' data-close-others='false'>".$menu['name']."<b class=' icon-angle-down'></b></a>";
                                    echo "<ul class='dropdown-menu'>";
                                        foreach($submenus as $submenu):
                                            echo "<li><a href='".base_url()."index.php/content/". $submenu['slug']."'>". $submenu['submenu_name']."</a></li>";
                                        endforeach; 
                                    echo "</ul>";
                                    echo "</li>";
                               }
                           else
                               {
                                    echo "<li><a href='".base_url()."index.php/". $menu['page_link']."'>". $menu['name']."</a></li>";
                               }
                      endforeach ; ?>
                        <li><a href="<?php echo base_url()?>/index.php/survey/survey_system">Survey System</a></li>
                    </ul>
                </div>
<!--            </div>-->
        </div>
	</header>
    <div id="wrapper" style="padding-top: 100px; background-color:#fff">
        <div class="container shadow-box " style=" margin: auto; padding :auto; background-color:#fff">
            
	<!-- start header -->
	
        
            