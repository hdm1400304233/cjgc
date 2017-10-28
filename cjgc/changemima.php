<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="textml; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/mima0.css" />
<title>无标题文档</title>
</head>
<script language="javascript">
function pp()
{
	if(xgmm.mima.value=="")
	{
		alert("原密码不能为空！！！");
		xgmm.mima.focus();
		return false;
	}
	
	if(xgmm.xinmima.value=="")
	{
		alert("新密码不能为空！！！");
		xgmm.xinmima.focus();
		return false;
	}
	
	if(xgmm.qrmm.value=="")
	{
		alert("确认密码不能为空！！！");
		xgmm.qrmm.focus();
		return false;
	}
	
	if(xgmm.xinmima.value!=xgmm.qrmm.value)
	{
		alert("两次输入的密码不相同！！！");
		xgmm.qrmm.focus();
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
<div class="jt2">>
</div>
<div class="cgmima">修改密码
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
include("connectr.php");
@$sql="SELECT * FROM `syt` WHERE zhanghao='$_COOKIE[zhanghao]'";
$query=mysql_query($sql);
$arr=mysql_fetch_array($query);
if(isset($_POST['qrxg']))
{
	if($_POST['mima']==$arr['mima'])
	{
		$sql="UPDATE `syt` SET mima='$_POST[xinmima]' WHERE zhanghao='$_COOKIE[zhanghao]'";
		mysql_query($sql);
		echo "<script language='javascript'>alert('修改成功');</script>";
		echo "<script language='javascript'>location.href='tuichu.php';</script>";
	}
	else{
		echo "<script language='javascript'>alert('原密码不正确');</script>";
	}
}
?>
<div class="bti">修改密码
</div>
<br/><br/><br/><br/><br/>
<form action="changemima.php" name="xgmm" method="post" onsubmit="return pp()">
<table align="center">
<tr><td height="30">原密码</td><td align="center" height="30"><input type="password" name="mima"</td></td></tr>
<tr><td height="30">新密码</td><td align="center" height="30"><input type="password" name="xinmima" /></td></tr>
<tr><td height="30">确认密码</td><td align="center" height="30"><input type="password" name="qrmm" /></td></tr>
<tr><td height="30"></td><td "center" height="30"><input style="background:#044379" type="submit" name="qrxg" value="确认修改" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration:none" href="findmima0.php"><input style="background:#044379"  type="submit" name="fh" value="返回" /></a></td></tr>
</table></form>
</div>
<?php include("bottom_clj.php");?> 
</div>
</body>
</html>