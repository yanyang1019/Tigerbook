<?php
    require "interface.php";
    class webnews implements news
    {
    
        function loadNews($classids,$keyword,$page,$pagesize)
        {   
            
            require_once "library\database.php";
            $db = new Database();
            $db->connect();
            
            $sql = "select * from userPost";
            $res = $db->execForOne($sql);
            $newslist;
            
            while($row = mysqli_fetch_row($res)){
                $title = $row[2];
                $content = $row[3];
                $userName = $row[1];
                $time = $row[4];
                $news = array(
                    "news_title"=>$title,
                    "news_intr"=>$content,
                    "pubtime"=>$time,
                    "pubuser"=>$userName
                );
                $newslist[] = $news;
            }
            
            $db->close();
    
            return $newslist;        
        }
        
        function loadNewsDetail($newsid)
        {
            //         
        }
    
        function clickNews($newsid)
        {
            //
        }
    
    
        function reviewNews($newsid,$reviewData)
        {
            //
        }    
}
?>