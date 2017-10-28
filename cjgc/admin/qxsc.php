<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("connectr.php");
@$zhanghao=$_COOKIE["zhanghao"];
session_start();
?>
<?php
if(isset($_GET['id']))
{
	mysql_query("UPDATE `lyb` SET shenhe='0' WHERE `id`='$_GET[id]'");
	echo "<script language='javascript'>alert('取消成功！');</script>";
	echo "<script language='javascript'>location.href='wsh.php';</script>";
}
?>
</body>
</html>