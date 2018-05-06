<?php
class webuser
{
   
    public $error_code="000";// wrong type
    private $userinfo=array(); 
    
      function iniwebuser()
    {
         //initialize
     
    }
    
    function __set($key,$value)
    {
        if($key=="age")
        {
           
        }
        
       $this->userinfo[$key]=$value;
    }
    function __get($key) 
    {
		if(array_key_exists($key,$this->userinfo))
        {
            return $this->userinfo[$key];
        }
        else
        {
            //return false;
            return "";
        }
    }
    function validateArgs($args,$num)
    {
    
        if($args && is_array($args) && count($args)==$num)
        {
            return true;
        }
        else
        {
            $this->error_code="008";
            return false;
        }
    }
    function __call($methodName,$args) 
    {
        if($methodName=="add")
        {
        
            if($this->validateArgs($args,4))
            {
                 $this->addUser($args[0],$args[1],$args[2],$args[4]);
            }
        }
        else if($methodName=="login") 
        {
            if($this->validateArgs($args,2))
            {
                $this->userLogin($args[0],$args[1]);
            }
        }
        else if($methodName=="logout") 
        {
            $this->userLogout();
        }
    }
    
    static public function userIsLogged()
    {
        //Check whether the user is logged in 
          if(isset($_COOKIE["mywebuser"]) && $_COOKIE["mywebuser"]!="")  // cookie????
        {
           return true; 
        } 
        return false;
        
    }
    
    
    
    
    static public function getCurrentUser() //????????
    {
         if(self::userIsLogged())
        {
            return $_COOKIE["mywebuser"];
        }
        else
        {
            return "Vistor";
        }
    }
    
     private function userLogin($username,$userpwd)
    {
        //database code goes here
        if(trim($username)=="") return;
        setcookie("mywebuser",$username,time()+200,"/");
    }
    
    
    
    private function addUser($userName,$userEmail,$userPwd1,$userPwd2) //add user to database
    {
        
        if($userPwd1=="" || $userPwd1!=$userPwd2 ) //password doesn't match 
		{
            $this->error_code="001";
            return false;
        }
        if($userName=="" ||  $userEmail=="") //empty input 
        {
              $this->error_code="002";
            return false; 
        }
        
        if(isFormat($userName,$userEmail))
        {
            $this->error_code="003";
            return false;
        } 
        
        if(isRepeat($userName,$userEmail)) //------> shu ju ku 
        {
              $this->error_code="004";
            return false;
        }
        
        $ret=DataBase::addData($userName,$userEmail,$userPwd1,$userPwd2);
        if($ret && intval($ret)>0) //successfully added into database
        {
             $this->error_code="000";
            return true;
        }
        $this->error_code="009";
        return false;
    }
}

?>