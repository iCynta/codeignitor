
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
        <div class="panel-group" id="accordion">
        <?php foreach($results['articles'] as $results_item):
            if(!isset($results_item['author']))
                $author =   "Not Specified";
            else
                $author =   $results_item['author'];
                ?>
            
             
        <div class="panel panel-default">
          <div class="panel-heading">
            <h12 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#APInews<?php echo $j;?>">
                <p><?php echo $results_item['title'];?></p>
              </a>
            </h12>
          </div>
          <div id="APInews<?php echo $j;?>" class="panel-collapse collapse ">
            <div class="panel-body">
                <h6>Author : <?php echo $author;?></h6>
                <h6>Author : <?php echo $results_item['publish_date'];?></h6>
              <?php echo $results_item['summary'];?>
                <br />
                <a href="<?php echo $results_item['source_url'];?>" target="_blank"><?php echo $results_item['source'];?></a>
            </div>
          </div>
        </div>
        <?php
            $j++;
         endforeach ?>

    </div>
    </div>
    
<!-- NEWS FROM DATABASE STARTS HERE -->
    <?php
    $i=0;
    ?>
    <div class="col-lg-5 pull-left">  
        <div class="widget">
            <h5 class="widgetheading">iCynta posts</h5>
            <a href="<?php echo base_url()?>index.php/news/view_all/" class="btn btn-danger pull-right">VIEW ALL NEWS</a><br />
            <div class="solidline"></div>
            <ul class="recent">
                <?php foreach($news as $news_item):
                    $url    =   base_url()."index.php/news/view/".$news_item['slug'];
                    ?>
                
                    <li>
                        <div class="shadow-box">
                        <a href="#"><img src="<?php echo base_url().'uploads/news/'.$news_item['image'];?>" class="pull-left img-thumbnail" style="max-width:100px; max-height: 100px;"alt="<?php echo $news_item['slug']; ?>" /></a>
                        <h6><a href="<?php echo $url; ?>"><?php echo $news_item['title'];?></a></h6>
                        <p>
                         <?php 
                         $this->load->helper('text');
                         $detail = strip_tags($news_item['detail']);
                         echo character_limiter($detail, 210);

                         ?>
                         <a href="<?php echo $url?>">Read More</a>   
                        </p>
                        </div>
                    </li>
<!--                    <li><div class="solidline"></div></li>-->
                <?php 
                 $i++;
                 endforeach ?>
                    
            </ul>        
       </div> 
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
