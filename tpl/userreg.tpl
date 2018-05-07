 <script>
 $(document).ready(function(){
    function showError()
    {
        if($("#userName").parent().find(".errInfo").length>0)
        {
            $("#userName").parent().find(".errInfo").html("Username has already taken");
        }
        else
        $("#userName").parent().append("<span class='errInfo'>Username has already taken</span>");
    }
      $("#userName").blur(function(){
       if(isBlank("userName","red")) return; 
      
            execServer(1,{username:$("#userName").val()},function(result){
            if(result==null || result!="1") //1 means chong fu 
            {
                  showError();
            }
           
         });
         })
         blankBlur("userEmail");
		$("#cmdReg").click(function(){
        if(isBlank("userName","red"))
         {
			  alert("Username cannot be empty");
            return false;
         }
         if(isBlank("userEmail","red"))
         {
			alert("Email cannot be empty");
            return false;
         }
         if(isBlank("userPwd1","red"))
         {
			 alert("Password cannot be empty");
            return false;
         }
         if(isBlank("userPwd2","red"))
         {
			 alert("Confirm password cannot be empty");
            return false;
         }
         if(!isEqual("userPwd1","userPwd2"))
         {
            alert("Password doesn't match");
            return false;
         }
       
         execServer(1,{username:$("#userName").val()},function(result){
            if(result!=null && result=="1") 
            {
                 $("#regForm").submit();
            }
            else 
            {
              showError();
            }
         });
         
         
    })
 })
  
 </script>
<form method="post" id="regForm" > <!--???get ??method=post???? -->

<style>
 .regtable{width:600px;background:#fff;border-radius:5px;padding-top:30px;padding-bottom:100px}
 .regtable th{font-size:26px;color:#9c9c9c;font-weight:normal}
  .regtable td{padding: 6px;}
  .regtable td a{color:green}
 .regtable .lefttd{text-align: right;width:25%;color:gray}
 .regtable .righttd{text-align: left;width:75%}
 .regtable .text{width:58%;border: solid 1px #ddd;height:34px;line-height:34px;background:#f5f5f5;border-radius:5px;}
 
 #cmdReg{width:200px;height:40px;text-align:center;color:#fff;border:0;background:#e5b104;border-radius:5px;}
</style>

<table class="mytable regtable">
 <tr>
 <th></th>
  <th class="righttd">User Register</th>
 </tr>
 <tr>
   <td  class="lefttd">Username:</td>
   <td class="righttd"><input type="text" autocomplete="off" name="userName" id="userName"  class="text"/></td> 
 </tr>
 
  <tr>
   <td  class="lefttd">Email:</td>
   <td class="righttd"><input type="text" autocomplete="off" name="userEmail" id="userEmail"  class="text"/></td> 
 </tr>
 <tr>
   <td  class="lefttd">Password:</td>
   <td  class="righttd"><input type="password" name="userPwd1"  id="userPwd1" class="text"/></td> 
 </tr>
  <tr>
   <td  class="lefttd">Confirm Password:</td>
   <td  class="righttd"><input type="password" name="userPwd2" id="userPwd2"  class="text"/></td> 
 </tr>

 <tr>
  <td></td>
  <td class="righttd" >
    <input type="button" value="Register" name="cmdReg"  id="cmdReg" class="abc readyShow" />
  </td>
 
 </tr>
</table>
 </form>
 