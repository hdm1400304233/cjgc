<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="textml; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/mima.css" />
<title>无标题文档</title>
</head>
<script language='javascript'>
function dd()
{
	if(bb.zhanghao.value=="")
	{
		alert("账号不能为空!!!");
		bb.zhanghao.focus();
		return false;
	}
}
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
<div class="yhzc">用户登录
</div>
<div class="jt1">>
</div>
<div class="yhzc0">找回密码
</div>
</div>
<div class="thre">
<div class="lgo">
</div>
<div class="jlzi">注册
</div>
</div>
<div class="showgc">
<?php
if(isset($_POST['submit']))
		{
			$sql="SELECT * FROM `syt` WHERE zhanghao='$_POST[zhanghao]'";
			$query=mysql_query($sql);
			$arr=mysql_fetch_array($query);
			if($arr)
			{
				
					setcookie("zhanghao","$_POST[zhanghao]");
					echo"<script language='javascript'>location.href=('findmima0.php');</script>";
			}
		
		else
		{
			echo"<script language='javascript'>alert('用户名不存在');</script>";
		}
	}
?>
<div class="tit">找回密码1</div>
<br/><br/><br/><br/>
<form action="findmima.php" method="post" name="bb" onsubmit="return dd()">
<table align="center">
<tr><td height="30" align="left">账号</td ><td height="30"><input type="text" name="zhanghao" ></td></tr>
<tr><td height="30"></td><td height="30"><input style="background:#044379" type="submit" value="查询" name="submit" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="background:#044379" type="button" onclick="history.go(-1);" class="btn btn-info" value="返回主页"></td></tr>
</table>
</form>
</div>
<?php include("bottom_clj.php");?> 
</div>
</body>
</html>