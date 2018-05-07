<?php 
    
    session_start();
    $userName=$_POST['userName'];
    $userPwd=$_POST['userPwd'];
    
    $userName = trim($userName);
    $userPwd = trim($userPwd);
    
    require_once "..\module\webuser.php";
    if(webuser::userLogin($userName,$userPwd)){
        $url = "http://localhost/Tigerbook/index.php";
    }
    else{
        echo "<script>alert('wrong password')</script>";
        $url = "http://localhost/Tigerbook/index.php?type=login";
    }
    
    echo "<script language = 'javascript' type = 'text/javascript' > ";    
    echo "window.location.href = '$url'";    
    echo "</script > "; 
?>
