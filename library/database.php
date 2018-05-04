<?php
 class Database 
 {
   
    public $_dbAddr="tigerbook2.czizqzi5ilgp.us-east-1.rds.amazonaws.com:3306"; //??????IP
    public $_dbName="tigerbook"; //????
    public $_dbUser="admin"; //???
    public $_dbPwd="admin1234";//??
    private $con = null;
    function connect()
    {
        $this->con = mysqli_connect($this->_dbAddr,$this->_dbUser,$this->_dbPwd);
        if(!$this->con){
            die("can't connect".mysql_error());
        }
    
        mysqli_select_db($this->con,$this->_dbName);  
    }
    
    function execForArray($sql)
    {
      //  
    }
    function execForOne($sql)
    {
        $res=$this->con->query($sql);  
        if(!$res){  
                   echo "数据操作失败";  
        }  
        return $res;  
    }
    
    function isUserRepeat($userName){
        $sql = "select count(*) from Login where userName = '$userName'";
        $res = $this->execForOne($sql);
        if($rs = mysqli_fetch_array($res)){
            if($rs[0] > 0 )
                return true;
            else
                return false;
        }
        else{
            return false;
        }
    }
    
    function close(){
        @mysqli_close($this->con);
    }
 }

?>