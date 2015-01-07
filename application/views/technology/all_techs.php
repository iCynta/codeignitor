<div class="container">    
    <div class="col-lg-7 pull-left shadow-box">  
        <div class="widget ">
            <h1 class="widgetheading">iCynta Technology Magazine</h1>
            <a href="<?php echo base_url()?>index.php/technology/" class="btn btn-danger pull-right">BACK TO TECHNOLOGY MAGAZINE</a><br />
            <div class="solidline"></div>
            <ul class="recent">
                <?php foreach($techs as $tech_item):
                    $url    =   base_url()."index.php/technology/view/".$tech_item['slug'];
                    ?>
                
                    <li>
                        <div class="shadow-box">
                        <a href="#"><img src="<?php echo base_url().'uploads/technology/'.$tech_item['image'];?>" class="pull-left img-thumbnail" style="max-width:100px; max-height: 100px;"alt="<?php echo $tech_item['slug']; ?>" /></a>
                        <h6><a href="<?php echo $url; ?>"><?php echo $tech_item['title'];?></a></h6>
                        <p>
                         <?php 
                         $this->load->helper('text');
                         $detail = strip_tags($tech_item['detail']);
                         echo character_limiter($detail, 210);

                         ?>
                         <a href="<?php echo $url?>">Read More</a>   
                        </p>
                        </div>
                    </li>
                    
                <?php 
                 //$i++;
                 endforeach ?>
            </ul>        
       </div> 

    </div>
<div class="col-lg-4 pull-left shadow-box">
           <!-- BBC NEWS FEEDS STARTS HERE-->
       
       <div id="body">
        <div id="feedControl">Loading...</div>
       </div>
       <!-- BBC NEWS FEEDS ENDS HERE-->
       <!-- GOOGLE ADS STARTS HERE -->
       <div id="googleadds">
           <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- News Page Right Side -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:250px;height:250px"
                 data-ad-client="ca-pub-7747916642885946"
                 data-ad-slot="3740726717"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
       </div>
       <div class="col-lg-4">
            <div>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- News detail page Right Side -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:250px;height:250px"
                 data-ad-client="ca-pub-7747916642885946"
                 data-ad-slot="9925031110"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            </div>
        </div>
       <!-- GOOGLE ADS ENDS HERE -->
</div>
</div>
<div class="clearfix"></div>
