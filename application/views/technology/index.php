
<div class="container">

    <!-- API NEWS STARTS HERE -->
    <?php 
        $url = "http://api.feedzilla.com/v1/categories/15/articles.json";
        //$url = " http://api.feedzilla.com/v1/categories/15/subcategories/1740/articles.json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$url);
        $result=curl_exec($ch);
        $results    =   json_decode($result,true);
        curl_close($ch);
        $j=0;
    ?>
    <div class="col-lg-7 pull-left">
        <div class="widget">
            <h1 class="widgetheading">iCynta Technology Magazine</h1>
            <a href="<?php echo base_url()?>index.php/technology/view_all/" class="btn btn-danger pull-right">READ ALL</a><br />
            <div class="solidline"></div>
            <ul class="recent">
                <?php foreach($techs as $tech_item):
                    $url    =   base_url()."index.php/technology/view/".$tech_item['slug'];
                    ?>
                
                    <li>
                    <a href="#"><img src="<?php echo base_url().'uploads/technology/'.$tech_item['image'];?>" class="pull-left img-thumbnail" style="max-width:100px; max-height: 100px;"alt="<?php echo $tech_item['slug']; ?>" /></a>
                    <h4><a href="<?php echo $url; ?>"><?php echo $tech_item['title'];?></a></h4>
                    <p>
                     <?php 
                     $this->load->helper('text');
                     $detail = strip_tags($tech_item['detail']);
                     echo character_limiter($detail, 210);
                        
                     ?>
                     <a href="<?php echo $url?>">Read More</a>   
                    </p>

                    </li>
                    <li><div class="solidline"></div></li>
                <?php 
                 endforeach ?>
                    
            </ul>        
       </div> 
    </div>
    
<!-- NEWS FROM DATABASE STARTS HERE -->
    <?php
    $i=0;
    ?>
    <div class="col-lg-5 pull-left">  

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
       <!-- GOOGLE ADS ENDS HERE -->

    </div>
    
<div class="clearfix"></div>

</div>
