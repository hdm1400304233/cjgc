<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("connectr.php");
session_start();
@$yhz=$_COOKIE["yhz"];
if($yhz!="高级管理员")
{
echo "<script language='javascript'>alert('无权限');</script>";	
exit(); 
}
?>
<?php
if(isset($_GET['id']))
{
	
	mysql_query('DELETE FROM `gly` WHERE `id`=\''.$_GET['id'].'\'');
	echo "<script language='javascript'>location.href='glylb.php';</script>";
}
?>
</body>
</html>