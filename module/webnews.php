<?php
    require "interface.php";
    class webnews implements news
    {
    
        function loadNews($classids,$keyword,$page,$pagesize)
        {   
            $news1=array(
                "news_title"=>"Lava Spews From Hawaii's Kilauea Hours",
                "news_intr"=>"Kilauea,Hawaii's most active volcano, began spewing lava into a residential area on Thursday, forcing evacuations after hundreds of small earthquakes in recent days telegraphed an impending eruption.

The new flow on Hawaii's Big Island came just hours after a 5.0-magnitude temblor, the strongest in a series of magnitude 2.5 or greater quakes to strike the area.

The Honolulu Advertiser says the lava flow opened up in Leilani Estates in lower Puna, about 25 miles from Kilauea shortly after 4 p.m. local time (10 p.m. ET).",
                "pubtime"=>"May 3, 20188:18 PM ET",
                "pubuser"=>"Yuhan Chen"
            );
        
            $news2=array(
                "news_title"=>"Avengers: Infinity War Reviews",
                "news_intr"=>"I love this movie,but Do not read ahead if you want a completely spoiler-free experience going into Avengers: Infinity War.",
                "pubtime"=>"2019-5-4",
                "pubuser"=>"Yuhan Chen"
            );
            $newslist[]=$news1;
            $newslist[]=$news2;
    
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