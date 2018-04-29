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
            /*background-image: url("picture/HTTYDbackground.jpg");*/
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
        <h1 class="ui-widget-header">Sign Up</h1>
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
            <div><input type = "submit", value="Submit"></div>
        </form>
        
    </div>
    <?php
    $hostname1 = 'localhost';
    $username1 = '';
    $password1 = '';
    $database1 = '';
    $conn=mysqli_connect($hostname1,$username1,$password1,$database1) or die("can not connect to database:".mysqli_connect_error());
    error_reporting(0);
    if($_POST['register']){
        if($_POST['password']&&$_POST['customer_id']){
        
        $username=$_POST['username'];
        
        $password=$_POST['password'];
       
        
        $sql1="SELECT *FROM customer WHERE customer_id = '$cid'";
        $result=mysqli_query($conn,$sql1)or die("Connection error!:".mysqli_connect_error());
        $user=mysqli_num_rows($result);     
           if($user!=0){
            
            echo("<div class='alert alert-warning alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning!</strong>That customer ID already exist!Try this <i>$cid".rand(1,50)."</i> instead!</div>");
        }
           if(!ctype_alnum($username)){
          
            echo("<div class='alert alert-warning alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning!</strong>Firstname contain special characters!</div>");
        }
          
        
           if(strlen($username)>15){
          
            echo("<div class='alert alert-warning alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning!</strong>Uaername can not contain more than 20 characters!</div>");
        }
           
           if(strlen($password)>15 || strlen($password)==0){
            
            echo("<div class='alert alert-warning alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning!</strong>Your password is invalid!</div>");
           
        }
           

        else{
          $sql="INSERT INTO customer(customer_id,password,bag_num,dob,ssn,f_name,l_name) VALUES(?,?,?,?,?,?,?)";
          if($stmt = mysqli_prepare($conn, $sql)){
           mysqli_stmt_bind_param($stmt, "isissss",$_POST['customer_id'],$_POST['password'],$_POST['bag_num'],$_POST['dob'],$_POST['ssn'],$_POST['firstname'],$_POST['lastname']) or die ("Connection error:" . mysqli_connect_error());
            if(mysqli_stmt_execute($stmt)){
            header("refresh:3;url=http://cs3380.rnet.missouri.edu/group/CS3380GRP4/www/login&register/customer_login.php");
            echo "<div class='alert alert-success alert-dismissable fade in'>";
            echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
            echo "<strong>User successfully inserted</strong>";
            echo"Hello <i>$firstname</i>, Your account are now created, and your password is <i>$password</i>. Your customer ID is <i>$cid</i>.<br><a href='http://cs3380.rnet.missouri.edu/group/CS3380GRP4/www/login&register/customer_login.php'>&larr;BACK!</a><br>";
            echo"</div>";
        }
            else{
                echo ":(<br>";
            }
    } 
}


    }
}
?>
</body>