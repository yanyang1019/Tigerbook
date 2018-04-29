<!DOCTYPE html>
<html>
<head>
	<title>Session Login</title>
	<link href="app.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script>
        $(function(){
            $("input[type=submit]").button();
        });
    </script>
    <style>
        body{
            /*background-color: aquamarine;*/
            background-image: ;
            -webkit-background-size: cover;
            -mos-background-size: cover;
            -ms-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
    </style>
</head>
<body>
    <div id="loginWidget" class="ui-widget">
        <h1 class="ui-widget-header">Welcome to our app</h1>
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
        
            <form action="index.php" method="POST">
            
            <input type="hidden" name="action" value="do_login">
            
            <div class="stack">
                <label for="username">User name:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>
            
            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <input type="submit" value="Submit">
               
            </div>
                
            </form>
            <form action="sign_up.php">
                       <input type="submit" value="Sign Up" />
                       
            </form>
        
        
         
    </div>
</body>
</html>