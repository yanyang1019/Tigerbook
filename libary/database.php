<?php
 class database 
 {
   
    public $_dbAddr="tigerbook2.czizqzi5ilgp.us-east-1.rds.amazonaws.com"; //??????IP
    public $_dbName="Tigerbook"; //????
    public $_dbUser="admin"; //???
    public $_dbPwd="admin1234";//??
    function myDataBase()
    {
        //$con = mysqli_connect($server,$db_username,$db_password);//?????
        //if(!$con){
        //    die("can't connect".mysql_error());//??????????
        //}
    
        //mysqli_select_db($con,'tigerbook');//?????
        //mysqli_close($con);    
    }
    function execForArray($sql)
    {
      //  
    }
    function execForOne($sql)
    {
      //????sql?? ,?????
    }
 }
 
 $myDB=new database();


?>