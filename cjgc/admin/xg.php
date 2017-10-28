<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<script language="javascript">
function fact()
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
@$yonghuming=$_COOKIE["yonghuming"];
if($yonghuming=="")
{
	echo"<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('login.php');</script>";
}
$sql="SELECT * FROM `gly` WHERE yonghuming='$yonghuming'";
$query=mysql_query($sql);
$arr=mysql_fetch_array($query);
if(isset($_POST['qrxg']))
{
	if($_POST['mima']==$arr['mima'])
	{
		$sql="UPDATE `gly` SET mima='$_POST[xinmima]' WHERE yonghuming='$yonghuming'";
		mysql_query($sql);
		echo "<script language='javascript'>alert('修改成功');</script>";
		echo "<script language='javascript'>location.href='tuichuht.php';</script>";
	}
	else{
		echo "<script language='javascript'>alert('原密码不正确');</script>";
	}
}
?>
<body bgcolor="66FFFFF">
<h1 align="center">修改密码</h1>
<br/><br/>
<form action="xg.php" name="xgmm" method="post" onsubmit="return fact()">
<table align="center">
<tr><td>原密码</td><td><input type="password" name="mima"</td></td></tr>
<tr><td>新密码</td><td><input type="password" name="xinmima" /></td></tr>
<tr><td>确认密码</td><td><input type="password" name="qrmm" /></td></tr>
<tr><td></td><td><input type="submit" name="qrxg" value="确认修改" /></td></tr>
</table></form>
<center><a href="index.php">返回</a></center></body>
</body>
</html>