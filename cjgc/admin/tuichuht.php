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
@$zhanghao=$_COOKIE["zhanghao"];
if($zhanghao=="")
{
	echo"<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('login.php');</script>";
}
?>
<?php
@$name=$_COOKIE["zhanghao"];
if($name)
{
	setcookie("zhanghao",'');
}
echo "<script language='javascript'>location.href=('login.php');</script>";
?>

</body>
</html>