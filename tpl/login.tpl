<<<<<<< HEAD
 <script>
  $(document).ready(function(){
    //??????? ??????
    //alert($(".text").length);
    $("#cmdLogin").css("display","inline-block");
    $("#cmdLogin").click(function(){
    if(isBlank("txtUserName","red"))
    {
        alert("???????");
        return false;//??? submit??
    }
   
   if(isBlank("txtUserPwd","blue"))
    {
        alert("??????");
        return false;//??? submit??
    }   
  })
  })
 
 </script>

<form method="post">
=======
<form method="post" action="includefiles/login.php">
>>>>>>> 0bb2b9f2413a699918c29b0ca8c42f71890fb8f0
<style>
    .regtable{width:600px;background:#fff;border-radius:5px;padding-top:30px;padding-bottom:100px}
    .regtable th{font-size:26px;color:#9c9c9c}
    .regtable td{padding: 6px;}
    .regtable td a{color:green}
    .regtable .lefttd{text-align: right;width:25%;color:gray}
    .regtable .righttd{text-align: left;width:75%}
    .regtable .text{width:58%;border: solid 1px #ddd;height:34px;line-height:34px;background:#f5f5f5;border-radius:5px;}
    #cmdLogin{width:200px;height:40px;text-align:center;color:#fff;border:0;background:#e5b104;border-radius:5px;}
</style>

<table class="mytable regtable">
 <tr>
 <th></th>
  <th class="righttd">User Login</th>
 </tr>
 <tr>
   <td  class="lefttd">Username:</td>
<<<<<<< HEAD
   <td class="righttd"><input type="text" name="userName" id="txtUserName"  class="text"/></td> 
=======
   <td class="righttd"><input type="text" name="userName"  class="text"/></td> 
>>>>>>> 0bb2b9f2413a699918c29b0ca8c42f71890fb8f0
 </tr>
 
 <tr>
   <td  class="lefttd">Password:</td>
<<<<<<< HEAD
  <td  class="righttd"><input type="password" name="userPwd" id="txtUserPwd" class="text"/></td> 
 </tr> 
 
  <tr>
  <td></td>
  <td class="righttd" >
    <input type="submit" value="Login" name="cmdLogin"  id="cmdLogin"/>
  </td>
 </tr>
</table>
<script>


</script>

=======
   <td  class="righttd"><input type="password" name="userPwd" class="text"/></td> 
 </tr>

 <tr>
  <td></td>
  <td class="righttd" >
    <input type="submit" value="login" name="cmdLogin"  id="cmdLogin" />
  </td>
 
 </tr>
</table>
>>>>>>> 0bb2b9f2413a699918c29b0ca8c42f71890fb8f0
 </form>
 