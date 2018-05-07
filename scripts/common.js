 $(document).ready(function(){
    //网页初始化工作
    if($(".readyShow").length>0) //隐藏按钮处理
    {
         var getClass=$(".readyShow").attr("class");
         getClass=getClass.replace("readyShow","");
         $(".readyShow").attr("class",getClass);
    }
 })
 function execServer(type,params,func)
 {
    $.post("/server/userSvr.php?type="+type,params,func);
 }
 
 function isCheck(objid)
 {
 
    if($("#"+objid).prop("checked"))
     return true;
     return false;
 }
 function isEqual(objid1,objid2)
 {
    if($("#"+objid1).val()==$("#"+objid2).val())
        return true;
    return false;
 }
 function blankBlur(objid)
 {
    //失去焦点时 ，红色框提醒
    $("#"+objid).blur(function(){
         isBlank(objid,"red");
    })
 }
function isBlank(objid,border) //判断是否为空
{
    if($("#"+objid).val().replace(/^\s*$/g,'')=="")
    {
       
        if(border!="")
        {
            $("#"+objid).css("border","solid 1px "+border);
        }
        return true;
    }
    return false;
}
function hasChinese(id) //是否包含中文
{
    var pattern=/.*[\u4e00-\u9fa5]+.*$/;
    if(pattern.test($("#"+id).val())) 
     return true;
     return false;
}
function IsEmail(id,border)//文本框的值 是否是Email格式
{
    var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
      if(myreg.test($("#"+id).val())) 
      return true;
        if(border!="")
        {
            $("#"+id).css("border","solid 1px "+border);
        }
      return false;
}