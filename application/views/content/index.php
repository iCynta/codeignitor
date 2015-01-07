<div class="container">
    <?php

    foreach($content as $content_item):?>
    <h2><?php echo $content_item['title'];?></h2>
    <div class="main">
        <p><?php echo $content_item['detail'];?></p>
        <p><?php echo $content_item['date'];?></p>
    </div>
    <p><a href="<?php echo $content_item['slug'];?>">Read More</a></p>
    <?php endforeach ?>
</div>