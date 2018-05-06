<?php

    function func_doAction($posts)
    {
        if(isset($_GET["type"]))
        {
            if($_GET["type"]=="login" && isset($posts["cmdLogin"]))
            {
                require_once("module/webuser.php");
                $user=new webuser();
                $user->login($posts["userName"],$posts["userPwd"]);
                header("location:/");
            }
        }
    }
  


    function func_loadTpl()
    {
        
        $tpl_root="tpl/";
        
        $tpl_set=array(
            "news"=>"news.tpl",
            "reg"=>"userreg.tpl",
            "index"=>"index.tpl",
            "friends"=>"friends.tpl",
            "profile"=>"profile.tpl",
            "login"=>"login.tpl",
<<<<<<< HEAD
			"logout"=>"logout.tpl",
=======
	    "logout"=>"logout.tpl",
>>>>>>> 0bb2b9f2413a699918c29b0ca8c42f71890fb8f0
            
       ); 
       
        $get_type = $_GET["type"];
        if($get_type){
           if($tpl_set[$get_type]){
                include $tpl_root.$tpl_set[$get_type];
           } 
           else
                include $tpl_root."index.tpl";
        }
        else{
            include $tpl_root."index.tpl";           
        }
        
    }
?>


<?php
     function the_news($params="")
     {  
        $getNews=new webnews();
        $result=$getNews->loadNews("","",1,20);
        return $result;
     }
?>





