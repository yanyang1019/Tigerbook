<?php

interface news 
{
    function loadNews($classids,$keyword,$page,$pagesize);
    function loadNewsDetail($newsid);
    function clickNews($newsid);
    function reviewNews($newsid,$reviewData);
}

interface users
{
    
}

?>