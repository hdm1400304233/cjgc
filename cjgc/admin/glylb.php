<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>


</head>
<?php
include("connectr.php");
session_start();
@$yonghuming=$_COOKIE["yonghuming"];
if($yonghuming=="")
{
	echo"<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('glydl.php');</script>";
	
}
?>
<body>
<?php 
$sql="SELECT * FROM `gly` ";
$res=mysql_query($sql);
$num=mysql_num_rows($res);
?>
<h1 align="center">管理员列表</h1>
<br/><font size="-1">
<table align="center" border="1" cellspacing="0" bordercolor="#CC0033"> 
<tr><th width="40" align="center">序号</th><th width="40" align="center">账号</th><th width="200" align="center">级别</th><th width="80" align="center">管理</th></tr>
<?php while($row=mysql_fetch_array($res))
{
	?>
<tr><td height="20" width="40" align="center"><?php echo $row["id"]?></td><td width="200" align="center"><?php echo $row["yonghuming"]?></td><td width="200" align="center"><?php echo $row["yhz"]?></td><td><a href="xgzl.php?id=<?php echo $row["id"]?>">编辑</a>&nbsp;&nbsp;<a  onclick="if (confirm('确定要删除吗？')) return true; else return false;"  href="shanchugly.php?id=<?php echo $row["id"]?>"> 删除</a></td></tr>
<?php } ?>
</table>
</font>

</body>
</html>