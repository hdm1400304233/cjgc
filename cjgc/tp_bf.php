<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("connectr.php");
if(isset($_GET['id']))
{
$a=mysql_query('SELECT * FROM `web` WHERE `id`=\''.$_GET['id'].'\'');
$re=mysql_fetch_array($a);	
}
?>
<center><video preload="preload" controls="controls"  width="800" height="800" autoplay="autoplay">
    <source src="<?php echo $re['dizhi'];?>" type="video/mp4" />
    Your browser does not support HTML5 video. </video></center>
    <center><input type="button" onclick="history.go(-1);" class="btn btn-info" value="返 回"></center>
</body>
</html>