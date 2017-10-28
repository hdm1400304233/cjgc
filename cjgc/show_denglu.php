<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
</head>
<?php
include("connectr.php");
session_start();
		if(isset($_POST['submit']))
		{
			$sql="SELECT * FROM `syt` WHERE zhanghao='$_POST[zhanghao]'";
			$query=mysql_query($sql);
			$arr=mysql_fetch_array($query);
			if($arr)
			{
				if($_POST["mima"]==$arr["mima"])
				{   echo "<script language='javascript'>alert('登录成功！！！')</script>";
					setcookie("zhanghao","$_POST[zhanghao]");
					}
		else
		{
			echo"<script language='javascript'>alert('密码错误');</script>";
		}	 
		}
		else
		{
			echo"<script language='javascript'>alert('用户名不存在');</script>";
		}
	

		}
?>
<body> 
<center>欢迎你，<?php echo "$arr[zhanghao]";?></center>
<center><a href="yonghuxingxi.php">用户信息</a>&nbsp;&nbsp;&nbsp;&nbsp;<input style="background:#d1f5f8" type="button" onclick="history.go(-1);" class="btn btn-info" value="返回主页"></center>
</body>
</html>