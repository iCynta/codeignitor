<div class="container">
    <div class="col-lg-8 pull-left">
        <div class="shadow-box">
        <?php
        $base_url   =   base_url();
        echo '<h4>'.$portfolio_item['project_name']."</h4>";
        echo "<img style= 'max-width:700px; max-height:300px;' class='img-thumbnail img-responsive ' 
             src=".$base_url."uploads/projects/".$portfolio_item['image'].'  >';
        echo "<div style = padding-top:10px;>".$portfolio_item['project_detail']."</div>";
        ?>
            <p><a href="<?php echo base_url();?>" class="btn btn-dark pull-right">Home</a></p>
        </div>       
    </div>
    <div class="col-lg-4 pull-left">
        <div class="box shadow-box">
            <div class="box-bottom">
		<a href="#">Recent Projects</a>
            </div>
            <div class="box-gray aligncenter">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="<?php echo base_url();?>assets/img/works/1.jpg" alt="First Project">
                        <div class="carousel-caption">
                          Caption1
                        </div>
                      </div>
                      
                      <div class="item ">
                        <img src="<?php echo base_url();?>assets/img/works/2.jpg" alt="Second Project">
                        <div class="carousel-caption">
                          Caption2
                        </div>
                      </div>
                      
                     <div class="item ">
                        <img src="<?php echo base_url();?>assets/img/works/3.jpg" alt="Third Project">
                        <div class="carousel-caption">
                          Caption3
                        </div>
                      </div>   
                      
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
									
            </div>
            
	</div>
    </div>
    
</div>