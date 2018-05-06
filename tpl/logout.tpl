<?php
  require_once("module/webuser.php");
  $user=new webuser();
  $user->logout();
?>

<p style="height: 500px;padding-top:50px;font-size:20px;">
 Successfully logged out .... <a href="index.php?type=index">Click here to go back to the main page </a>

 
 
</p>