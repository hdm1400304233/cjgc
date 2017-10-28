<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<script language="javascript">
function fact()
{
	if(xg.xinmima.value=="")
	{
		alert("新密码不能为空！！！");
		xg.xinmima.focus();
		return false;
	}
	
	if(xg.qrmm.value=="")
	{
		alert("确认密码不能为空！！！");
		xg.qrmm.focus();
		return false;
	}
	
	if(xg.xinmima.value!=xg.qrmm.value)
	{
		alert("两次输入的密码不相同！！！");
		xg.qrmm.focus();
		return false;
	}
}
</script>
<?php
include("connectr.php");
//@$yonghuming=$_COOKIE["yonghuming"];
@$name=$_COOKIE["yonghuming"];
@$id=$_COOKIE["id"];
@$ids=$_GET['id'];
if($name=="")
{
	echo"<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('glydl.php');</script>";	
}
$sql="SELECT * FROM `gly` WHERE `id`='$ids'";
$query=mysql_query($sql);
$arr=mysql_fetch_array($query);
if(!empty($_POST['xg']))
{
	if($_POST['xinmima']!=$arr['mima'])
	{
		$sql=("UPDATE `gly` SET `mima`='$_POST[xinmima]' WHERE `id`='$_POST[id]'");
		mysql_query($sql);
		echo "<script language='javascript'>alert('修改成功');</script>";
		echo "<script language='javascript'>location.href='glylb.php';</script>";
	}
	else 
	{
		echo "<script language='javascript'>alert('新旧密码不能相同');</script>";
	}
}
?>
<body bgcolor="#00CC00">
<h1 align="center">用户信息</h1>
<br /></br>
<form action="xgzl.php" method="post" name="xg" onsubmit="return fact()">
<input type="hidden" name="id" value="<?php echo $arr['id'];?>" />
<table align="center">
<tr><td>用户名 </td><td><?php echo $arr['yonghuming']?></td></tr>
<tr><td>密码</td><td><input type="password" name="xinmima" /></td></tr>
<tr><td>确认密码</td><td><input type="password" name="qrmm" /></td></tr>
<tr><td></td><td><input type="submit" name="xg" value="修改" /></td></tr>
</table>
</form>

 
<center><a href="glylb.php">返回</a></center> 
</body>
</html>