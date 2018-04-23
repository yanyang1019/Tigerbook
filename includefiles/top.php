<?php include "config.php" ?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title><?php echo $config_defaulttitle ?></title>
    <style>
     *{margin:0 auto;text-align:center;}
     .mytable{margin:30px auto;}
     input{text-align:left;text-indent: 3px;}
     .text{width:150px;height: 22px;border:0;border-bottom:solid 1px #000}
    </style>
 </head>
 <body>
 <div>
  <a href="index.php?type=index"> Main </a>  |  <a href="index.php?type=news">News</a> |  <a href="index.php?type=reg">User Register</a> |   <a href="index.php?type=friends">Friends</a>  |  <a href="index.php?type=profile">Profile</a>

 
 </div>
 
 <?php func_loadTpl(); ?>