<?php 

    $userName=$_POST['userName'];//post获取表单里的name
    $userEmail=$_POST['userEmail'];
    $userPwd1=$_POST['userPwd1'];
    $userPwd2=$_POST['userPwd2'];
    
    $userName = trim($userName);
    $userEmail = trim($userEmail);
    $userPwd1 = trim($userPwd1);
    $userPwd2 = trim($userPwd2);
    
    require_once "..\module\webuser.php";
    webuser::addUser($userName,$userEmail,$userPwd1,$userPwd2);

?>