
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <?php
                $this->load->helper('text');
                $i=0;
                foreach($portfolio as $portfolio_item):
                    if($i ==  4 ){
                        echo "<div class='clearfix '></div><div class='col-lg-12'><div class='solidline'></div></div>";
                        $i=0;
                    }
                ?>
                <div class="col-lg-3  ">
		<div class="box shadow-box">
                    <div class="box-gray aligncenter">
                        <h5>
                            <?php 
                            $project_name = strip_tags($portfolio_item['project_name']);
                             echo character_limiter($project_name, 20);
                            ?>
                        </h5>
                        <div class="icon">
                            <?php
                            $portfolio_item['image'];
                            $image_detail   =   explode('.', $portfolio_item['image']);
                            //print_r($image_detail);
                            ?>
                            <img class="img-thumbnail img-responsive "src="<?php echo base_url().'uploads/projects/thumb/'.$image_detail[0]."_thumb.".$image_detail[1];?>" style="max-width:200px;max-height:200px;"/>
                        </div>
                        <p>
                         <?php 
                         
                         $project_detail = strip_tags($portfolio_item['project_detail']);
                         echo character_limiter($project_detail, 110).'!!';
                         ?>
                        </p>
                    </div>
                    <div class="box-bottom">
                        <a href="<?php echo base_url().'index.php/portfolio/view/'.$portfolio_item['slug'];?>">Read More</a>
                    </div>
		</div>
		</div>
                <?php
                $i++;
                endforeach ?>
            </div>
        </div>
    