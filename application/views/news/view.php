<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */?>
<div class='container'>
    <div class= col-lg-8>
    <div class='media shadow-box'>
        <img src="<?php echo base_url()?>uploads/news/<?php echo $news_item['image']?>" class='media-object'>
        <div class='media-body'>
            <div class="fb-like well-lg" data-href="https://www.facebook.com/pages/icyntacom/145527778951094?ref=hl" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
            <h2 class='media-heading'><?php echo $news_item['title']?> </h2>
   
            <?php echo $news_item['detail'];?>
        </div>
    </div>
    <p class="pull-right"><a href="<?php echo base_url().'index.php/news/'?>" class="btn btn-theme">Back</a></p>
    </div>
    <div class="col-lg-4">
        <div class="shadow-box">
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
    <div class="clearfix"></div>
</div>