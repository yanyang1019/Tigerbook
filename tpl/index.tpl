<?php  
  $result=the_news();
?>
<head>
	<style>
		#searchBox{float:right;}
	</style>
</head>

<body>
<!--搜索框-->
<div id="searchBox">
		<form action="index.php" method="post" name="搜索的关键字" id="搜索的关键字">
			<input name="搜索的关键字" type="text" id="搜索的关键字"   />
          	<input name="Submit" type="submit" value="Search" />
		</form>
</div>
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
</body>