<?php
    
    $nickName=$_POST['nickName'];
    $userEmail=$_POST['userEmail'];
    $userSex=$_POST['userSex'];
    
    $nickName = trim($nickName);
    $userEmail = trim($userEmail);
    $userSex = trim($userSex);
    
    require_once "..\module\webuser.php";
    $userName = webuser::getCurrentUser();
    require_once "..\library\database.php";
    $db = new Database();
    $db->connect();
    
    $sql = "update userInfo nickName = '$nickName', userEmail = '$userEmail', sex = '$userSex' where userName = '$userName'";
    $res = $db->execForOne($sql);
    
    $db->close();
?>

