<?php  
  $result=the_news();
?>

<div class="outer">
<div class="content">
     <div class="left">
        <?php foreach($result as $news):?>
     <dl class="newsregion">
        <dt><?php echo $news["news_title"]  ?></dt>
        <dd>
            <?php echo $news["news_intr"]  ?>
        </dd>
        <dd class="pubtime">
            Writer:<?php echo $news["pubuser"]  ?> Publish Time:<?php echo $news["pubtime"]  ?> 
       </dd>
     </dl>
    <?php endforeach;?>
    </div>
    
    <div class="right">
    
    </div>
 
 </div>
</div> 
 