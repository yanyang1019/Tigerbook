<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}
/* Style the tab */
.tab {float: left;border-right: 1px solid #ccc;background-color: #f1f1f1;width: 30%;height: 300px;}
/* Style the buttons inside the tab */
.tab button {display: block;background-color: inherit;color: black;padding: 22px 16px;width: 100%;border: none;outline: none;text-align: left;cursor: pointer;transition: 0.3s;font-size: 17px;}
/* Change background color of buttons on hover */
.tab button:hover {background-color: #ddd;}
/* Create an active/current "tab button" class */
.tab button.active {background-color: #ccc;}
/* Style the tab content */
.tabcontent {float: left;padding: 0px 12px;border-top: 1px solid #ccc;width: 70%;border-left: none; height: 300px;}
    
.regtable{width:600px;background:#fff;border-radius:5px;padding-top:30px;padding-bottom:100px}
.regtable th{font-size:26px;color:#9c9c9c}
.regtable td{padding: 6px;}
.regtable td a{color:green}
.regtable .lefttd{text-align: right;width:25%;color:gray}
.regtable .righttd{text-align: left;width:75%}
.regtable .text{width:58%;border: solid 1px #ddd;height:34px;line-height:34px;background:#f5f5f5;border-radius:5px;}
#cmdMod{width:200px;height:40px;text-align:center;color:#fff;border:0;background:#e5b104;border-radius:5px;}
img{width: 200px;}
#profilePhoto{text-align: left;width: 80%}
    
</style>
</head>
<body>
<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'Info')" id="defaultOpen">Information</button>
  <button class="tablinks" onclick="openTab(event, 'Password')">Password</button>
</div>

<div id="Info" class="tabcontent">
    <h3>Information</h3>
    <form method="post" action="includefiles\profileInfo.php">
        <table class="mytable regtable">
            <tr>
                <td  class="lefttd">Nickname:</td>
                <td class="righttd"><input type="text" name="nickName"  class="text"/></td> 
            </tr>
            <tr>
                <td  class="lefttd">Mail:</td>
                <td class="righttd"><input type="text" name="userEmail"  class="text"/></td> 
            </tr>
            <tr>
                <td  class="lefttd">Sex:</td>
                <td class="righttd"><input type="text" name="userSex"  class="text"/></td> 
            </tr>
            <tr>
                <td></td>
                <td class="righttd" >
                    <input type="submit" value="save" name="cmdMod"  id="cmdMod2"/>
                </td>
            </tr>
        </table>
    </form>
</div>

<div id="Password" class="tabcontent" >
    <h3>Password</h3>
    <form method="post" action="includefiles\alter_password.php">
    <table class="mytable regtable">
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
                <input type="submit" value="save" name="cmdMod"  id="cmdMod3" />
            </td>
         </tr>
    </table>
    </form>
</div>

<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>
     
</body>
</html> 