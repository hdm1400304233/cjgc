<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<script language="javascript">
function aaaa()
{
	if(add.yonghuming.value=="")
	{
		alert("账号不能为空！！！");
		stt.yonghuming.focus();
		return false;
	}
	if(add.mima.value=="")
	{
		alert("账号不能为空！！！");
		stt.yonghuming.focus();
		return false;
	}
	if(add.yhz.value=="")
	{
		alert("账号不能为空！！！");
		stt.yonghuming.focus();
		return false;
	}
}
</script>
 <?php
		include("connectr.php");
		if(isset($_POST["submit"]))
		{
			//print_r($_POST);
			$sql="SELECT * FROM `gly` WHERE yonghuming='$_POST[yonghuming]'";
		$query=mysql_query($sql);
		$num=mysql_num_rows($query);
		if($num)
		{
			echo "<script language='javascript'>alert('账号已存在！！！')</script>";
		}
			else{
				$sql="INSERT INTO `gly`(`id`,`yonghuming`,`mima`,`yhz`)VALUES('','$_POST[yonghuming]','$_POST[mima]','$_POST[yhz]')";
		mysql_query($sql);
		echo "<script language='javascript'>alert('添加成功！！！')</script>";
			}
		}
		?>
<body>
<h1 align="center">管理员注册</h1>
<form action="addadmin.php" name="add" method="post" onsubmit="return aaaa()">
<table align="center">
<tr><td width="80" align="center">账号</td><td><input type="text" name="yonghuming" /></td></tr>
<tr><td align="center">密码</td><td><input type="password" name="mima" /></td></tr>
<tr><td align="center">确认密码</td><td><input type="password" name="remima" /></td></tr>
<tr><td align="center">用户组</td><td><select name="yhz">
<option value="">请选择</option>
<option value="高级管理员">高级管理员</option>
<option value="初级管理员">初级管理员</option></select></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="提交" /></td></tr>
</table>
</form>
<br/>
<center><a href="right.php">返回首页</a></center>
</body>
</html>