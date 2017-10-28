<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
include("connectr.php");
session_start();
@$yonghuming=$_COOKIE["yonghuming"];
if($yonghuming=="")
{
	echo"<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('login.php');</script>";
	
}
?>
<body>
<h1 align="center">欢迎光临</h1>
<hr/><center><font size="-1">
<hr/><center><font size="-1">
<?php 
$perNumber=3; //每页显示的记录数
@$page=$_GET['page']; //获得当前的页面值
$count=mysql_query("select count(*) from `lyb` WHERE shenhe='0'"); //获得记录总数
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
if (!isset($page)) {
 $page=1;} //如果没有值,则赋值1
$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
$result=mysql_query("select * from `lyb` WHERE shenhe='0' limit $startCount,$perNumber"); //根据前面的计算出开始的记录和记录数
?>
<br/><font size="-1">
<table align="center" border="1" cellspacing="0" bordercolor="#CC0033"> 
<tr><td width="40" align="center">主题</td><td width="400" align="center">留言内容</td><td width="200" align="center">留言人</td><td width="200" align"center">留言时间</td><td width="40" align="center">上传</td></tr>
<?php while($row=mysql_fetch_array($result))
{
	?>
<tr><td height="20" width="40" align="center"><a href="hf.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></td><td width="200" align="center"><?php echo $row["content"]?></td><td width="200" align="center"><?php echo $row["name"]?></td><td width="200" align="center"><?php echo $row["date"]?></td><td width="40" align="center"><a href="schuan.php?id=<?php echo $row["id"]?>">上传</a></td></tr>
<?php } ?>
</table>
<?php
if ($page != 1) { //页数不等于1
?>
<a href="wsh.php?page=<?php echo $page - 1;?>">上一页</a><!--显示上一页-->
<?php
}
for ($i=1;$i<=$totalPage;$i++) {  //循环显示出页面
?>
<a href="wsh.php?page=<?php echo $i;?>"><?php echo $i ;?></a>
<?php
}
if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
?>
<a href="wsh.php?page=<?php echo $page + 1;?>">下一页</a>
<?php
} 
?>
</font>
<center><a href="edliuyan.php">返回</a></center>
</body>
</html>