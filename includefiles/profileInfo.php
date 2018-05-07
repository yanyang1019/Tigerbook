<?php
    
    $nickName=$_POST['nickName'];
    $userEmail=$_POST['userEmail'];
    $userSex=$_POST['userSex'];
    
    $nickName = trim($nickName);
    $userEmail = trim($userEmail);
    $userSex = trim($userSex);
    
    $userName = webuser::getCurrentUser();
    require_once "..\libarary\database.php";
    $db = new Database();
    $db->connect();
    
    $sql = "update userInfo nickName = '$nickName', userEmail = '$userEmail', sex = '$userSex' where userName = '$userName'";
    $res = $db->execForOne($sql);
    
    $db->close();
?>

