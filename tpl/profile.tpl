<!doctype html>
<form method="post" action="includefiles/profile.php">
<style>
    .regtable{width:600px;background:#fff;border-radius:5px;padding-top:30px;padding-bottom:100px}
    .regtable th{font-size:26px;color:#9c9c9c}
    .regtable td{padding: 6px;}
    .regtable td a{color:green}
    .regtable .lefttd{text-align: right;width:25%;color:gray}
    .regtable .righttd{text-align: left;width:75%}
    .regtable .text{width:58%;border: solid 1px #ddd;height:34px;line-height:34px;background:#f5f5f5;border-radius:5px;}
    #cmdMod{width:200px;height:40px;text-align:center;color:#fff;border:0;background:#e5b104;border-radius:5px;}
    img{width: 200px;}
    #profilePhoto{text-align: center;width: 80%}
</style>

<table class="mytable regtable">
 <tr>
 <th></th>
  <th class="righttd">User Information</th>
 </tr>
    <tr>
        <td></td>
        <td class="righttd" id="profilePhoto">
            <button type="button">Upload</button>
            <img alt="profilePhoto" src="     ">
        </td>
        
    </tr>
 <tr>
   <td  class="lefttd">Username:</td>
   <td class="righttd"><input type="text" name="userName"  class="text"/></td> 
 </tr>
 
  <tr>
   <td  class="lefttd">Mail:</td>
   <td class="righttd"><input type="text" name="userEmail"  class="text"/></td> 
 </tr>
  
    <tr>
        <td class="lefttd">Old Password</td>
        <td class="righttd"><input type="password" name="oldPwd" class="text"/></td>
    </tr>
 <tr>
   <td  class="lefttd">New Password:</td>
   <td  class="righttd"><input type="password" name="userPwd1" class="text"/></td> 
 </tr>
  <tr>
   <td  class="lefttd">Confirm Password:</td>
   <td  class="righttd"><input type="password" name="userPwd2" class="text"/></td> 
 </tr>
 <tr>
  <td></td>
  <td class="righttd" >
    <input type="submit" value="save" name="cmdMod"  id="cmdMod" />
  </td>
 </tr>
</table>
 </form>