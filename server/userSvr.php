<?php
//处理 用户 层面ajax方法
if(isset($_GET["type"]))
{
    switch(intval($_GET["type"]))
    {
        case 1://代表用户注册用户名重复判断
        exit("0");
        break;
    }
}
exit("");
?>