<?php

interface news 
{
    function selfNews($classids,$keyword,$page,$pagesize);
    function friendNews($classids,$keyword,$page,$pagesize);
    function loadNewsDetail($newsid);
    function clickNews($newsid);
    function reviewNews($newsid,$reviewData);
}

interface friend
{
    function loadFriend($classids,$keyword,$page,$pagesize);
    function searchFriend($classids,$keyword,$page,$pagesize);
    function loadRequest($classids,$keyword,$page,$pagesize);
}

?>