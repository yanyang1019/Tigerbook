<?php
	if(!session_start()) {
		header("Location: error.php");
		exit;
	}
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if (!$loggedIn) {
		header("Location: index.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 1</title>
    <link href="app.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script>
    $(function() {
    $( "#tabs" ).tabs();});
      
    $(function(){
          $("#accordion").accordion({collapsible:true,heightStyle: "content" });});
    
    $(function() {
    $( "#tabsvertical" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabsvertical li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  });
        
        function getContent() {
            
            var xmlHttp = new XMLHttpRequest();
            
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    document.getElementById("loader").style.display = "none";
                    
                    document.getElementById("contentBox").innerHTML = xmlHttp.responseText;
                }
            };
            
            document.getElementById("loader").style.display = "block";
        
            document.getElementById("contentBox").innerHTML = "";
            
            xmlHttp.open("GET", "recall.php", true);
            xmlHttp.send();
            
		}
		
        
        var tick = 1;
        setInterval(function() {
            var loadNodes = document.querySelectorAll(".loadNode");
            if (tick == 1) {
                backgroundColors = ["#333", "#aaa", "#777"];
                tick = 2;
            }
            else if (tick == 2) {
                backgroundColors = ["#777", "#333", "#aaa"];
                tick = 3
            }
            else {
                backgroundColors = ["#aaa", "#777", "#333"];
                tick = 1;
            }
            loadNodes[0].style.backgroundColor = backgroundColors[0];
            loadNodes[1].style.backgroundColor = backgroundColors[1];
            loadNodes[2].style.backgroundColor = backgroundColors[2];
        }, 200);
	</script>
    
    <style>
        body{
            background-image: 
            -webkit-background-size: cover;
            -mos-background-size: cover;
            -ms-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-repeat: repeat;
        }
        
        div#tabs{
            width: 1200px;
            height: auto;
            background-color: rgba(255, 255, 255, 0.5);
            border-bottom-left-radius:20px; 
            border-bottom-right-radius: 20px;
        
        }
        
        div#accordion{
            margin-top: 10px;
            border-radius: 10px;
        }
        
        ul#style1{
            height: 80px;
            font-size: 28px;
        }
        
        .ui-tabs-vertical  
      { 
          width: 1000px; 
      }
        
        .ui-tabs-vertical .ui-tabs-nav 
      { 
          float: left; 
          width: 250px; 
      }
        
        .ui-tabs-vertical .ui-tabs-nav li 
      { 
          clear: left; 
          width: 90%; 
          border-bottom-width: 1px !important; 
          border-right-width: 0 !important; 
          margin: 0 -1px .2em 0; 
      }
  
       .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active 
      {   
          padding: 1px;
          border-radius: 10px;
      }
  
        .ui-tabs-vertical .ui-tabs-panel 
      { 
          padding: 1em; 
          float: right; 
          width: 40em;
      }
        /*log out part*/
        #logout{
            background-color:darkgray;
            color: aliceblue;
            width:170px;
            height:35px;
            font-size: 25px;
            text-align: center;
            border:0;
            border-radius: 3px;
            
        }
        p{
            font-size: 25px;
        }
        a{
            text-decoration: none;
        }
        #toothless{
            margin-bottom: -50px;
            margin-left: -50px;
        }
        /*ajax part*/
         #loader {
            display: none;
        }
        .loadNode {
            width: 20px;
            height: 20px;
            display: inline-block;
            border-radius: 100%;
            margin: 10px 5px;
            transition: background-color .2s;
        }
        .loadNode:nth-of-type(1) {
            background-color: #aaa;
        }
        .loadNode:nth-of-type(2) {
            background-color: #777;
        }
        .loadNode:nth-of-type(3) {
            background-color: #333;
        }
    </style> 
    
</head>
<body>
    <div class="ui-widget pageWidget">
    <div id="tabs">
  <ul id="style1">
    <li ><a href="#tabs-1">Intro to team</a></li>
    <li ><a href="#tabs-2">Picture</a></li>
    <li ><a href="#tabs-3">Source </a></li>
    <li ><a href="#tabs-4">Contact Us</a></li>
  </ul>
  <div id="tabs-1">
    <div id="accordion">
	<h3><a href="#">?????????????????????</a></h3>
	<div>
       Welcome to our app
	</div>
	<h3><a href="#">Our Story</a></h3>
	<div>
        <p>
		    1
        </p>
        <p>
            2
        </p>
        <p>
            3
        </p>
        <p>
            4
        </p>
        <p>
            5
        </p>
        <p>
           6
        </p>
	</div>
	<h3><a href="#">Hiccup and Toothless</a></h3>
	<div>
        <h3>Hiccup</h3>
		<p>
		7
		</p>
        <h3>Toothless</h3>
        <p>
            8
        </p>
	</div>
	<h3><a href="#">Story is continue......</a></h3>
	<div>
		<h1>If you want know more story about us</h1>
    <div id="loader">
        <div class="loadNode"></div>
        <div class="loadNode"></div>
        <div class="loadNode"></div>
    </div>
	<p id="contentBox"></p>
	<button type="button" onclick="getContent()">Load more?</button>
	</div>
        
</div>
  </div>
  <div id="tabs-2">
      <p>
          Want to see different Toothless's picture?<a href="picture.php">Click Here!</a>
      </p>
  </div>
  <div id="tabs-3">
      <div id="tabsvertical">
  <ul>
    <li><a href="#video-1">HTTYD2 trailer</a></li>
    <li><a href="#video-2">HTTYD1 trailer</a></li>
    <li><a href="#video-3">Greatest moments</a></li>
    <li><a href="#video-4">Music</a></li>
  </ul>
  <div id="video-1">
       <iframe width="560" height="315" src="https://www.youtube.com/watch?v=gOlF0rwpLqs" frameborder="0" allowfullscreen></iframe>
  </div>
  <div id="video-2">
       <iframe width="560" height="315" src="https://www.youtube.com/watch?v=gOlF0rwpLqs" frameborder="0" allowfullscreen></iframe>
  </div>
  <div id="video-3">
      <iframe width="560" height="315" src="https://www.youtube.com/watch?v=gOlF0rwpLqs" frameborder="0" allowfullscreen></iframe>
  </div>
  <div id="video-4">
      <iframe width="560" height="315" src="https://www.youtube.com/watch?v=gOlF0rwpLqs" frameborder="0" allowfullscreen></iframe>
  </div>
 
</div>
  </div>
    <div id="tabs-4">
         <p>Any question? Click ! <a href='page2.php'><img src="picture/Toothless's avatar.png" height="110px" width="180px" id="toothless"></a></p>
    </div>    
</div>
       
<button type="button" id="logout"><a href="logout.php">Log out</a></button>
</div>
</body>
</html>