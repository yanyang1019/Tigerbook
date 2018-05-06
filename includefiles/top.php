<?php require "config.php" ?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title><?php echo $config_defaulttitle ?></title>
    <style>
                
        *{margin:0 auto;text-align:center;font-size:14px;font-family:"Times New Roman"; }
        body{background: url(images/bg.jpg);}
        .container{background-color:#474747;height:130px;margin:0 auto;color: #fff;}
        .container a{color:#fff;text-decoration: none;}
        .container a:hover{text-decoration: underline;}
        .container .top{width:1000px}                   
        .logo{float:left;width:300px;margin-top:30px}
        .container .menu{float:left;margin-top:30px;width:500px;text-align:left}                    
        .container .userinfo{float:right;text-align:right;width:500px}
        .container .search{
            border:solid 1px gray;
            width:180px;height:21px;
            line-height:21px;
            background:url(images/topsearch.gif) no-repeat #fff right
        }
        .mytable{margin:30px auto;}
        input{text-align:left;text-indent: 3px;}
        .1text{width:150px;height: 22px;border:0;border-bottom:solid 1px #000}
    
 
        .outer{width:100%;margin:20px auto;min-height:500px;_height:500px}
        .content{width:1000px;margin:0 auto;}
        .content .left{float:left;width:69%;}
        .content .right{float:right;width:29%}
      
        .newsregion{background:#fff;float:left;margin:5px auto;border-radius:10px;width:100%;border:solid 1px #ddd}
        .newsregion{color:#9c9c9c;} 
        .newsregion dt{width:90%;line-height:20px;border-bottom:solid 1px #ddd;text-align: left;padding:6px;color:#383838}
        .newsregion dd{width:90%;line-height:20px;text-align: left;padding:10px;text-indent:2em;}
        .newsregion .pubtime{border:0;background:url(/images/newsbar.jpg);
        width:100%;padding:0;height:35px;padding-top:10px;border-top:solid 1px #ddd;}
    </style>
 </head>
 <body>
  <div class="container"> 
        <div class="top"> 
            <div class="logo"><a href="index.php"><img src="images/logo.jpg" alt="Tigerbook" /></a></div> 
            <div class="userinfo"> 
                <span>
                    <?php
                        include "module/webuser.php"; 
                        echo webuser::getCurrentUser();?>
                </span> 
                    <?php if(webuser::userIsLogged()):?>
                        | <a href="index.php?type=logout">Logout</a>
                    <?php else:?>
                        | <a href="index.php?type=login">Login</a>
                    <?php endif;?>
            </div>
 
            <div class="menu"> <a href="index.php?type=index"> Main </a>  |  <a href="index.php?type=news">News</a> |   <a href="index.php?type=friends">Friends</a>  |  <a href="index.php?type=profile">Profile</a>  |  <a href="index.php?type=reg">User Register</a> 
                <input type="text" class="search" />
            </div>
        </div>
  </div> 
 <?php func_loadTpl(); ?>