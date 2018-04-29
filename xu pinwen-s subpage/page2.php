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
	<title>Contact us</title>
    <link href="app.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <style>
        body{
            
            background-image: url("picture/Toothless's head.jpg");
            -webkit-background-size: cover;
            -mos-background-size: cover;
            -ms-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
        }
        a{
            padding: 15px;
        }
        div#style{
            background-color: rgba(0, 0, 0, 0);
        }
        a:link 
        {
           color:skyblue;
           background-color: transparent;
           text-decoration: none;
        }
        a:visited 
        {
           color:deepskyblue;
           background-color: transparent;
           text-decoration: none;
        }
        a:hover 
        {
           color:lightblue;
           background-color: transparent;
           text-decoration: underline;
        }
        p{
            color:coral;
            text-align: center;
            font-size: 25px;
        }
        dive#outstyle{
            text-align: center;
            margin-top: 50px;
        }
        
    </style>
</head>
<body>
    <div class="ui-widget pageWidget" id="style">
        <h1 class="ui-widget-header">Contact us</h1>
        <div id="style">
            <p><a href='page1.php'>Menu</a><a href='logout.php'>Logout</a></p>
            <p>Here is my E-mail adress:</p>
            <p>
                <a href="mailto:rdyz6@mail.missouri.edu" target="_top">rdyz6@mail.missouri.edu</a>
            </p>
            <p>I'm glad to hear your voice</p>
            <p>If you are Toothless's bigfan, hope you like my homepage:)</p>
            <p>Want to know more?<a href="https://www.howtotrainyourdragon.com/">Click here!</a></p>
        </div>
    </div>
</body>
</html>