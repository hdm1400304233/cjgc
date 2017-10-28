<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("connectr.php");
@$yonghuming=$_COOKIE["yonghuming"];
if($yonghuming=="")
{
	echo"<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('glydl.php');</script>";
	
}
session_start();
?>
<?php
if(isset($_GET['id']))
{
	mysql_query("UPDATE `lyb` SET shenhe='1' WHERE `id`='$_GET[id]'");
	echo "<script language='javascript'>alert('上传成功！');</script>";
	echo "<script language='javascript'>location.href='wsh.php';</script>";
}
?>
</body>
</html>