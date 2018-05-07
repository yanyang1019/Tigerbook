<?php 

    $oldPwd=$_POST['oldPwd'];
    $userPwd1=$_POST['userPwd1'];
    $userPwd2=$_POST['userPwd2'];
    
    $oldPwd = trim($oldPwd);
    $userPwd1 = trim($userPwd1);
    $userPwd2 = trim($userPwd2);
    
    require_once "..\module\webuser.php";
    $userName = webuser::getCurrentUser();
    require_once "..\library\database.php";
    $db = new Database();
    $db->connect();
    
    $sql = "select password from Login where userName = '$userName'";
    $res = $db->execForOne($sql);
    $row = mysqli_fetch_row($res);
    $passWord = $row[0];
    if($passWord == md5($oldPwd)){
        $sql2 = "update Login set passWord = md5('$userPwd1') where userName = '$userName'";
        $db->execForOne($sql2);
        echo "success";
    }
    else
        echo "fail";
    
    $db->close();
?>