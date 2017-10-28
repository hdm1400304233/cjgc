<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
include("connectr.php");
@$yhz=$_COOKIE["yhz"];
if($yhz!="高级管理员")
{
echo "<script language='javascript'>alert('无权限');</script>";	
exit(); 
}
if(isset($_POST['submit']))
{
	$sql="UPDATE `gly` SET yhz='$_POST[yhz]' WHERE `id`='$_POST[id]'";
	mysql_query($sql);
	echo "<script language='javascript'>alert('保存成功');</script>";
	echo "<script language='javascript'>location.href=glylb.php;</script>";
}
if(isset($_GET['id']))
{
	$result=mysql_query('SELECT * FROM `gly` WHERE `id`=\''.$_GET['id'].'\'');
	$row=mysql_fetch_array($result);
	;


?>
<h1 align="center">组管理</h1>
<br /></br>
<body bgcolor="#00FFFF">
<form action="zz.php" method="post" name="bianji" onsubmit="return cc()">
<input type="hidden" name="id" value="<?php echo $row['id'];?>" />
<table align="center">
<tr><td>账号 </td><td><?php echo $row['yonghuming']?></td></tr>
<tr><td>用户组 </td><td><select name="yhz">
<option value="">请选择</option>
<option value="高级管理员">高级管理员</option>
<option value="初级管理员">初级管理员</option></select></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="保存" /></td></tr>
</table>
</form>
<?php
}
?> 
<center><a href="zgl.php">返回</a></center>
</body>
</html>