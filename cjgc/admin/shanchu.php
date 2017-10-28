<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
include("connectr.php");
//$zhanghao=$_COOKIE["zhanghao"];
session_start();
?>
<?php
if(isset($_GET['id']))
{   $result=mysql_query('SELECT * FROM `lyb` WHERE `id`=\''.$_GET['id'].'\'');
	$row=mysql_fetch_array($result);
	if($row["name"]!=$_COOKIE["zhanghao"])
	{
       echo "<script language='javascript'>alert('无权限');</script>";
	   echo "<script language='javascript'>location.href='xingxi.php';</script>";	
    }
	mysql_query('DELETE FROM `lyb` WHERE `id`=\''.$_GET['id'].'\'');
	mysql_query('DELETE FROM `replay` WHERE `id`=\''.$_GET['id'].'\'');
	echo "<script language='javascript'>location.href='xingxi.php';</script>";
}
?>
</body>
</html>