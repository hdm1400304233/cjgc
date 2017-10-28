<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="textml; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/lyb.css" />
<title>留言板</title>
</head>
<script type="text/javascript" src="/js/admin.js"></script>
<script type="text/javascript" src="/js/Jquery.js"></script>
<script charset="gbk" src="/Editor/kindeditor-min.js"></script>
<script charset="utf-8" src="/Editor/lang/zh_CN.js"></script>
<script>
function chk(){
if (document.myform.Title.value==""){
	alert("请填写标题！");
	document.myform.Title.focus();
	return false;
  }
}
var KE;
KindEditor.options.filterMode = false;
KindEditor.ready(function(K) {
KE = K.create('#Content',{ afterBlur: function(){this.sync();}
});
});
</script>
<?php
include("connectr.php");
?>
<body>
<div class="all">
<div class="head">
<div class="logo">
</div>
<div class="line">
<?php
include("sy_head.php");
?>

<div class="t2">
<div class="lf">
<div class="wai">
<div class="li">
<?php
session_start(); 
@$zhanghao=$_COOKIE["zhanghao"];
if($zhanghao=="")
{
	 include("show_zcdl.php");
}
else
{
include("show_dlxx.php");	
}
?>
</div>
</div>
<div class="dh1">
<div class="jt0">
</div>
<div class="zbm">数据目录导航
</div>
</div>
<div class="dh2">
<?php include("sxxl6.php");?> 
</div>
</div>
<div class="wz">
<div class="sy">首页
</div>
<div class="jt">>
</div>
<div class="jt1">留言板
</div>
</div>
<div class="thre">
<div class="lgo">
</div>
<div class="jlzi">留言板
</div>
</div>
<div class="showgc">
<?php
   @$name=$_COOKIE["zhanghao"] ;
if($name=="")
		{
			echo "<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('show_xingxi.php');</script>";
		}
		if(isset($_POST['submit']))
		{
			$title=$_POST["title"];
			$content=$_POST["content"];
			mysql_query("INSERT INTO `lyb`(`id`,`name`,`title`,`content`,`date`) VALUES ('','$name','$title','$content',now())")or die(mysql_error());
			echo "<script language='javascript'>alert('提交成功');</script>";
			echo "<script language='javascript'>location.href='show_xingxi.php';</script>";
		}
	?>
    </br>
<center><form action="show_lyb.php" method="post" name="myform" onsubmit="return chk();">
<table>
<tr>
<td  height="30">标题：</td><td  height="30"><input name="title" type="text" id="Title" size="40" maxlength="20"></td>
</tr>
<tr>
<td  height="30">内容：</td><td  height="30"><textarea id="Content" name="content" class="form-control kindeditor" style="width:670px;height:430px;"></textarea></textarea></td>
</tr>
</table>
<center><input name="submit" type="submit" value="提交">&nbsp;&nbsp;<input type="button" onclick="history.go(-1);" class="btn btn-info" value="返 回"></center>
</form>

</div>
<?php include("bottom_clj.php");?> 
</div>
</body>
</html>