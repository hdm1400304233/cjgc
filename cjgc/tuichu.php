<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
include("connectr.php");
session_start();
@$zhanghao=$_COOKIE["zhanghao"];
?>
<?php
@$name=$_COOKIE["zhanghao"];
if($name)
{
	setcookie("zhanghao",'');
}
?>
<br/>
<br/>
<br/>
<center><input style="background:#0CF" type="button" onclick="history.go(-1);" class="btn btn-info" value="返回主页"></center>
<body>
</body>
</html>