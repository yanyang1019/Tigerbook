<!--
建立一个index.php文件， 代码如下，其中中文标出的是你自己修改的地方
1，搜索按钮
-->
<!--
        <form action="search.php" method="post" name="搜索的关键字" id="搜索的关键字">
          <input name="搜索的关键字" type="text" id="搜索的关键字"   />
          <input name="Submit" type="submit" value="搜" />
        </form>
-->
<!--2，结果显示-->

<?php
    include("链接文件路径");
    $搜索的关键字=$_POST[搜索的关键字];
    $sql1=mysql_query("select * from 数据库表名  where (数据库字段 like'%$搜索的关键字%')");
    $info1=mysql_fetch_array($sql1);
?>
<?php do { ?>
<?php echo $info1['要显示的搜索结果字段']; ?>
<?php } while ($info1 = mysql_fetch_assoc($sql1)); ?>
                