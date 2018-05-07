<?php 

    $content=$_POST['subject'];//post获取表单里的name
    $title=$_POST['postTitle'];
    
    require_once "..\module\webuser.php";
    $userName = webuser::getCurrentUser();
    require_once "..\library\database.php";
    $db = new Database();
    $db->connect();
    
    $sql = "select count(*) from userPost";
    $res = $db->execForOne($sql);
    $res = mysqli_fetch_array($res);
    $count = (int)$res[0] + 1;
    $dt = date("Y-m-d H:i:s");
    $sql2 = "insert into userPost values ('$count','$userName','$title','$content','$dt')";
    $db->execForOne($sql2);
    $db->close();
    
    $url = "http://localhost/Tigerbook/index.php";
    echo "<script language = 'javascript' type = 'text/javascript' > ";    
    echo "window.location.href = '$url'";    
    echo "</script > ";
?>