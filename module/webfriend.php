<?php

    require_once "interface.php";
    class webfriend implements friend{
        
        function loadFriend($classids, $keyword, $page, $pagesize) {
            $curUser = webuser::getCurrentUser();
            require_once "library\database.php";
            $db = new Database();
            $db->connect();
            $sql = "select * from friend where userName1 = '$curUser' or userName2 = '$curUser'";
            $res = $db->execForOne($sql);
            $friendlist;
            while($row = mysqli_fetch_row($res)){
                $user;
                if($row[0] != $curUser)
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
            $sql = "select * from userInfo where userName = '%$keyword%'";
            $res = $db->execForOne($sql);
            $friendlist = NULL;
            while($row = mysqli_fetch_row($res)){
                $userName = $row[0];
                $nickName = $row[1];
                $sex = $row[2];
                $userEmail = $row[3];
                $friend = array(
                    "userName"=>$userName,
                    "nickName"=>$nickName,
                    "sex"=>$sex,
                    "userEmail"=>$userEmail
                );
                $friendlist[] = $friend;
            }
            $db->close();
            return $friendlist;
        }
        
        function loadRequest($classids, $keyword, $page, $pagesize) {
            
            /*
            $userName = webuser::getCurrentUser();
            require_once "library\database.php";
            $db = new Database();
            $db->connect();
            $sql = "select * from friendRequest where sendUser = '$userName' or recUser = '$userName'";
            $res = $db->execForOne($sql);
            $requestlist;
            while($row = mysqli_fetch_row($res)){
                $sendUser = $row[0];
                $recUser = $row[1];
                $sendTime = $row[2];
                $status = (int)$row[3];
                if($status == 0)
                    $status = 'wait';
                else if($status == 1)
                    $status = 'accept';
                else if($status == 2)
                    $status = 'decline';
                else
                    $status = 'unkonwn';
                $request= array(
                    "sendUser"=>$sendUser,
                    "recUser"=>$recUser,
                    "sendTime"=>$sendTime,
                    "status"=>$status
                );
                $requestlist[] = $request;
            }
            
            $db->close();
            return $requestlist;*/
        }
    }

?>

