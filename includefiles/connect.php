<?php
    $server="tigerbook2.czizqzi5ilgp.us-east-1.rds.amazonaws.com";//主机
    $db_username="admin";//你的数据库用户名
    $db_password="admin1234";//你的数据库密码

    $con = mysqli_connect($server,$db_username,$db_password);//链接数据库
    if(!$con){
        die("can't connect".mysql_error());//如果链接失败输出错误
    }
    
    mysqli_select_db($con,'tigerbook');//选择数据库
    
    /* register
    $ID = 2;
    $User = "user2";
    $Pass = "123";
    $q="insert into Login values ('$ID','$User',md5('$Pass'))";//向数据库插入表单传来的值的sql
    $reslut=mysqli_query($con,$q);//执行sql
    if (!$reslut){
        die('Error: ' . mysqli_error());//如果sql执行失败输出错误
    }
     */
    
    mysqli_close($con);

?>
