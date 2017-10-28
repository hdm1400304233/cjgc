<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="textml; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/jt.css" />
<title>交通运输</title>
</head>
<script language="javascript">
function aaaa()
{ 
	if(form.keyword.value=="")
	{
		alert("关键字不能为空！！！");
		form.keyword.focus();
		return false;
	}
}
</script>
<?php
include("connectr.php");
?>
<body>
<div class="all">
<?php
include("sy_head.php");
?>

<div class="t2">
<div class="lf">
<div class="wai">
<div class="li">
<?php
session_start(); 
@$zhanghao=$_COOKIE["zhanghao"];
if($zhanghao=="")
{
	 include("show_zcdl.php");
}
else
{
include("show_dlxx.php");	
}
?>
</div>
</div>
<div class="dh1">
<div class="jt0">
</div>
<div class="zbm">数据目录导航
</div>
</div>
<div class="dh2">
<?php include("sxxl6.php");?> 
</div>
</div>
<div class="sch">
<form action="fysearch.php" method="post" name="form" onsubmit="return aaaa()">
<?Php include("searchselect.php");?>
<table>
<tr><td align="left"><label> 
<select name="column" onChange="SetChose()">
<option value='交通运输'>交通运输</option>
<option value='能源电力'>能源电力</option>
<option value='科研教育'>科研教育</option>
<option value='城乡建设'>城乡建设</option>
<option value='海外工程'>海外工程</option>
<option value='战略规划'>战略规划</option>
<option value='工业项目'>工业项目</option>
<option value='选择全部' selected >选择全部</option>
</select> 
<select name="chose">
<option value='选择全部' selected>选择全部</option></select></label>
<input name="keyword" type="text" value="" size="40"> 
<input type="submit" name="submit" value="搜索"></td>
</tr>
</table>
</form>
</div>
<div class="wz">
<div class="sy">首页
</div>
<div class="jt">>
</div>
<div class="jt1">交通运输
</div>
</div>
<div class="thre">
<div class="lgo">
</div>
<div class="jlzi">交通运输
</div>
</div>
<div class="ecojlp">
<div class="cd">
<ul class="ul0">
<li class="li0" style="margin-bottom:64px"><a class="a2" href="">【铁路】</a></li>
<li class="li0" style="margin-bottom:23px"><a class="a2" href="">【公路】</a></li>
<li class="li0" style="margin-bottom:42px"><a class="a2" href="">【桥梁】</a></li>
<li class="li0" style="margin-bottom:44px"><a class="a2" href="">【机场】</a></li>
<li class="li0" style="margin-bottom:27px"><a class="a2" href="">【地铁】</a></li>
</ul>
</div>
<div class="contt">
<div class="nr1">
<ul class="ul1">
<?php
$sql="SELECT * FROM `transport` WHERE chose='铁路'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
?>
<li class="li1"><a  class="a2" href="look_gc.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?>&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
<?php } ?>
</ul>
</div>
<div class="nr2">
<ul class="ul2">
<?php
$sql="SELECT * FROM `transport` WHERE chose='公路'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
?>
<li class="li2"><a class="a2" href="look_gc.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?>&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
<?php } ?>
</ul>
</div>
<div class="nr3">
<ul class="ul3">
<?php
$sql="SELECT * FROM `transport` WHERE chose='桥梁'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
?>
<li class="li3"><a class="a2" href="look_gc.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?>&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
<?php } ?>
</ul>
</div>
<div class="nr4">
<ul class="ul4">
<?php
$sql="SELECT * FROM `transport` WHERE chose='机场'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
?>
<li class="li4"><a class="a2" href="look_gc.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?>&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
<?php } ?>
</ul>
</div>
<div class="nr5">
<ul class="ul5">
<?php
$sql="SELECT * FROM `transport` WHERE chose='地铁'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
?>
<li class="li5"><a class="a2" href="look_gc.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?>&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
<?php } ?>
</ul>
</div>
</div>
</div>
<?php include("bottom_clj.php");?> 
</div>
</body>
</html>