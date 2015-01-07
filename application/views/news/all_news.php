<div class="container">    
    <div class="col-lg-7 pull-left">  
        <div class="widget">
            <h1 class="widgetheading">iCynta News Gallery</h1>
            <a href="<?php echo base_url()?>index.php/news/" class="btn btn-danger pull-right">BACK TO NEWS ARCHIVE</a><br />
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
                         echo character_limiter($detail,210);

                         ?>
                         <a href="<?php echo $url?>">Read More</a>   
                        </p>
                        </div>
                    </li>
<!--                    <li><div class="solidline"></div></li>-->
                <?php 
                 //$i++;
                 endforeach ?>
            </ul>        
       </div> 

    </div>
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
