<?php  
  $friendlist=load_friend();
?>

<!--<<<<<<< HEAD-->
<html>
	<head>
		<style>
			#container{width: 100%; display: flex;}
			#container h1{font-size: 40px;}
			#displayLeft{width: 45%;float: left; padding-right: 5px;}
			#displayRight{width: 45%;float: left; padding-left:5px;}
			
			#displayStage{margin: 0 auto;}
			.user{background: #fff;float:left;margin: 18px auto; margin-left: 18px; border-radius: 20px;width: 100%;height: auto; border: solid 1px #ddd;text-align: center;font-size: 15px;}
			.newFriends{background: #fff;margin: 18px auto; margin-left: 18px; border-radius: 20px;width: 80%;height: auto; border: solid 1px #ddd;text-align: center;font-size: 15px;}
			dt{font-size: 23px;height: auto;}
			dd{font-size: 15px;}
			.addButton{background-color:#474747;color: white;width: 80px; border-radius:20px;height:auto; float:left;font-size:17px;}
			
		</style>
	</head>
	<body>
		<div id="container">
			<div id="displayLeft">
				<h1>Here is your friends:</h1>
				<dl class="user">
					<dt>
						Friends be here    
					</dt>
					<dd>
						Show Nick Name:
						<br>Show Sex:
						<br>Show userEmail:
					</dd>
				</dl>
			</div>

			<div id="displayRight">
				<h1>Find new friends:</h1>
				<div id="searchBox">
					<form action=" " method=" " name=" " id=" ">
						<input name="  " type="text" id=" "   />
						<input name="Submit" type="submit" value="Search" />
					</form>
				</div>
				<div id="displayStage">
					<?php foreach($friendlist as $friend):?>
					<dl class="newFriends">
						<dt>
							<button class="addButton">Add</button> 
							<?php echo $friend["userName"]  ?>   
						</dt>
						<dd>
							Show Nick Name:
							<br>Show Sex:
							<br><?php echo $friend["userEmail"]  ?>
						</dd>
					</dl>
					<?php endforeach;?>
				</div>
			</div>
		</div>
			
	</body>
</html>
<!--
=======
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
>>>>>>> efe5d78a05144e50d453841afceb30d0fde2bf96
-->
