<?php  
  $friendlist=load_friend();
?>

<head>
    <style>
	#searchBox input{float:right;}
    </style>
</head>
<body>
    <div id="searchBox">
	<form action=" " method=" " name=" " id=" ">
            <input name="  " type="text" id=" "   />
            <input name="Submit" type="submit" value="Search" />
	</form>
    </div>
    <div class="user">
    	<?php foreach($friendlist as $friend):?>
	<dt><?php echo $friend["userName"]  ?></dt>
        <dd>
            <?php echo $friend["userEmail"]  ?>
        </dd>
        <?php endforeach;?>
    </div>
</body>
