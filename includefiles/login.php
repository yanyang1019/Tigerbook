<?php 

    $userName=$_POST['userName'];
    $userPwd=$_POST['userPwd'];
    
    $userName = trim($userName);
    $userPwd = trim($userPwd);
    
    require_once "..\module\webuser.php";
    if(webuser::userLogin($userName,$userPwd))
        echo "success";
    else
        echo "fail";

?>