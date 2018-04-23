<?php
    
    function func_loadTpl(){
        
        $tpl_root="tpl/";
        
        $tpl_set=array(
            "news"=>"news.tpl",
            "reg"=>"userreg.tpl",
            "index"=>"index.tpl",
            "friends"=>"friends.tpl",
            "profile"=>"profile.tpl",
            
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
            //???,????
            include $tpl_root."index.tpl";
            
        }
        
    }
?>