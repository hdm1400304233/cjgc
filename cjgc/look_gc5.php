<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="textml; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/gc.css" />
<title>无标题文档</title>
</head>
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
<div class="wz">
<?php
if(isset($_GET["id"]))
{
$a=mysql_query('SELECT * FROM `strategypl` WHERE `id`=\''.$_GET["id"].'\'');
$re=mysql_fetch_array($a);	
}
?>
<div class="sczi">
<?php
echo $re['weizhi'];
?>
</div>
</div>
<div class="showgc">
<div class="showgc1">

<?php
 echo $re['content'];
?>
</div>
</div>
<?php include("bottom_clj.php");?> 
</div>
</body>
</html>