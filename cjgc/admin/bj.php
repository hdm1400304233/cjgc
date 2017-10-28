<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>编辑视频</title>
</head>

<body>
<?php
include("connectr.php");
//@$yonghuming=$_COOKIE["yonghuming"];
@$name=$_COOKIE["yonghuming"];
@$ids=$_GET['id'];
if($name=="")
{
	echo"<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('login.php');</script>";	
}
$sql="SELECT * FROM `web` WHERE `id`='$ids'";
$query=mysql_query($sql);
$arr=mysql_fetch_array($query);
if(!empty($_POST['submit']))
{
	
		$sql=("UPDATE `web` SET `name`='$_POST[name]',`pic`='$_POST[pic]' WHERE `id`='$_POST[id]'");
		mysql_query($sql);
		echo "<script language='javascript'>alert('修改成功');</script>";
		echo "<script language='javascript'>location.href='edtv.php';</script>";
	

}
?>
<body bgcolor="#00CC00">
<h1 align="center">编辑视频</h1>
<br /></br>
<form action="bj.php" method="post" name="bj" onsubmit="return fact()">
<input type="hidden" name="id" value="<?php echo $arr['id'];?>" />
<table align="center">
<tr><td>名字：</td><td><input type="text" name="name" value="<?php echo $arr['name']?>"></td></tr>
<tr><td>代表图片：</td><td width="50" height="50"/><input type="text" name="pic" value="<?php echo $arr['pic']?>"></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="修改" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="edtv.php">返回</a></td></tr>
</table>
</form>
</body>
</html>