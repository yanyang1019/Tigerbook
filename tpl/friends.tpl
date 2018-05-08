<?php  
  $friendlist=load_friend();
?>

<script>
    function showUploadPage(){
        var display = document.getElementById("display");
        xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    display.innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","includefiles\loadForm.php", true);
            xmlhttp.send();
        }
        
    function addFriend(id){
        
    }
</script>


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
                                <?php foreach($friendlist as $friend):?>
				<dl class="user">
					<dt>
						<?php echo $friend["userName"]  ?>    
					</dt>
					<dd>
						Nick Name: <?php echo $friend["nickName"]  ?>
						<br> Sex: <?php echo $friend["sex"]  ?>
						<br> userEmail: <?php echo $friend["userEmail"]  ?>
					</dd>
				</dl>
                                <?php endforeach;?>
			</div>

			<div id="displayRight">
				<h1>Find new friends:</h1>
				<div id="searchBox">
					<form method="post">
						<input name="friendSearch" type="text" id="friendSearch"   />
						<button name="search" type="button" value="Search" id="btn" onclick="showUploadPage()"/>
					</form>
				</div>
				<div id="display">
					<dl class="newFriends">
                                            <!--
						<dt>
                                                    <button class="addButton" id="addBtn" onclick="addFriend(this.id)" >Add</button>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
						</dt>
						<dd>
							Nick Name:
							<br> Sex:
							<br><?php echo $friend["userEmail"]  ?>
						</dd>-->
					</dl>
				</div>
			</div>
		</div>
			
	</body>
</html>
