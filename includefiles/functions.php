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
            "logout"=>"logout.tpl"
            
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
        $result=$getNews->selfNews("","",1,20);
        return $result;
     }
     
     function friend_news($params="")
     {
         $getNews=new webnews();
        $result=$getNews->friendNews("","",1,20);
        return $result;
     }
     
     function friend_search($params="")
     {
         $getFriend = new webfriend();
         $result = $getFriend->searchFriend("", $params, 1, 20);
         return $result;
     }
     
     function load_friend($params="")
     {
         $getFriend = new webfriend();
         $result = $getFriend->loadFriend("","",1,20);
         return $result;
     }
     
     /*
     function load_request($params="")
     {
         $getFriend = new webfriend();
         $result = $getFriend->loadRequest("","",1,20);
         return $result;
     }*/
?>





