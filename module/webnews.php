<?php
    require_once "interface.php";
    class webnews implements news
    {
    
        function selfNews($classids,$keyword,$page,$pagesize)
        {   
            $userName = webuser::getCurrentUser();
            require_once "library\database.php";
            $db = new Database();
            $db->connect();
            
            $sql = "select * from userPost where userName = '$userName'";
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
        
        function friendNews($classids,$keyword,$page,$pagesize)
        {
            $userName = webuser::getCurrentUser();
            require_once "library\database.php";
            $db = new Database();
            $db->connect();
            $sql = "select * from friend where userName1 = '$userName' or userName2 = '$userName'";
            $res = $db->execForOne($sql);
            $newslist;
            while($row = mysqli_fetch_row($res)){
                $user;
                if($row[0] != $userName)
                    $user = $row[0];
                else
                    $user = $row[1];
                $sql2 = "select * from userPost where userName = '$user'";
                $res2 = $db->execForOne($sql2);
                while($row2 = mysqli_fetch_row($res2)){
                    $title = $row2[2];
                    $content = $row2[3];
                    $userName = $row2[1];
                    $time = $row2[4];
                    $news = array(
                        "news_title"=>$title,
                        "news_intr"=>$content,
                        "pubtime"=>$time,
                        "pubuser"=>$userName
                    );
                    $newslist[] = $news;
                }
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