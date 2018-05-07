<?php  
  $result=the_news();
?>
<head>
	<style>
		#searchBox{float:right;}
		#outer{display: flex;}
		#leftStage{width: 70%;float:left;padding:20px;}
		#rightStage{width: 20%;float:right; padding-right:10px;}
		.content .left{width: 100%;}
		#postBox{width: 100%;border:2px solid,black;}
		input[type=text] {
    		border: 2px solid #474747;
    		border-radius: 4px;
			}

		input[type=text], select, textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			resize: vertical;
		}

		label {
			padding: 12px 12px 12px 0;
			display: inline-block;
		}

		input[type=submit] {
			background-color: #474747;
			color: whitesmoke;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: right;
		}

		input[type=submit]:hover {
			background-color: gray;
		}

		.containerForm {
			border-radius: 5px;
/*			background-color: #474747;*/
			padding: 20px;
		}


		/* Clear floats after the columns */
		.row:after {
			content: "";
			display: table;
			clear: both;
		}

	</style>
</head>

<body>
<div class="outer">
	<div id="leftStage" class="content">
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
	<div id="rightStage">
		<div>
			<div class="containerForm">
			  <form method="post" action="includefiles\post.php">
				<div class="row">
                                    <label for="postTitle"> Title </label>
                                    <input type="text" name="postTitle" autocomplete="off"  id="postTitle" class="text"/>
				</div>
				<div class="row">
					<label for="postContents">Post Something New</label>
					<textarea id="postContents" name="subject" placeholder="Write something.." style="height:200px"></textarea>
				</div>
				<div class="row">
				  <input type="submit" value="Submit">
				</div>
			  </form>
			</div>
		</div>
	</div>
</div> 
</body>