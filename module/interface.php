<?php

interface news 
{
    function selfNews($classids,$keyword,$page,$pagesize);
    function friendNews($classids,$keyword,$page,$pagesize);
    function loadNewsDetail($newsid);
    function clickNews($newsid);
    function reviewNews($newsid,$reviewData);
}

interface users
{
    
}

?>