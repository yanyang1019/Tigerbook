<?php
    
    $content=$_POST['friendSearch'];
    $content = trim($content);
    require_once '..\module\webfriend';
    $getFriend = new webfriend();
    $result = $getFriend->searchFriend("", $content, 1, 20);
    echo $content;
    echo "haoba";
    foreach($result as $friend):
        $userName = $friend["userName"];
        $nickName = $friend["nickName"];
        $sex = $friend["sex"];
        $userEmail = $friend["userEmail"];
    echo "<dl class='newFriends'>
                <dt>
                    <button class='addButton' id='$userName' onclick='addFriend(this.id)'>Add</button>";
    echo        "<dt> $userName </dt>
		<dd>
                    Nick Name: $nickName
                    <br> Sex: $sex
                    <br> userEmail:  $userEmail
		</dd>
          /dl>";
     endforeach;
?>