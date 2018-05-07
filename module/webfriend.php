<?php

    require_once "interface.php";
    class webfriend implements friend{
        
        function loadFriend($classids, $keyword, $page, $pagesize) {
            $userName = webuser::getCurrentUser();
            require_once "library\database.php";
            $db = new Database();
            $db->connect();
            $sql = "select * from friend where userName1 = '$userName' or userName2 = '$userName'";
            $res = $db->execForOne($sql);
            $friendlist;
            while($row = mysqli_fetch_row($res)){
                $user;
                if($row[0] != $userName)
                    $user = $row[0];
                else
                    $user = $row[1];
                $sql2 = "select * from userInfo where userName = '$user'";
                $res2 = $db->execForOne($sql2);
                while($row2 = mysqli_fetch_row($res2)){
                    $userName = $row2[0];
                    $nickName = $row2[1];
                    $sex = $row2[2];
                    $userEmail = $row2[3];
                    $friend = array(
                        "userName"=>$userName,
                        "nickName"=>$nickName,
                        "sex"=>$sex,
                        "userEmail"=>$userEmail
                    );
                    $friendlist[] = $friend;
                }
            }
            
            $db->close();
            return $friendlist;
        }
        
        function searchFriend($classids, $keyword, $page, $pagesize) {
            require_once "library\database.php";
            $db = new Database();
            $db->connect();
            
            
            
            $db->close();
        }
        
        function friendRequest($classids, $keyword, $page, $pagesize) {
            ;
        }
    }

?>

