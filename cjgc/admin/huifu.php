<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<script type="text/javascript" src="/js/admin.js"></script>
<script type="text/javascript" src="/js/Jquery.js"></script>
<script charset="gbk" src="/Editor/kindeditor-min.js"></script>
<script charset="utf-8" src="/Editor/lang/zh_CN.js"></script>
<script>
var KE;
KindEditor.options.filterMode = false;
KindEditor.ready(function(K) {
KE = K.create('#Content',{ afterBlur: function(){this.sync();}
});
});
</script>
<?php
include("connectr.php");
?>
<body>
<?php
session_start();
@$yonghuming=$_COOKIE["yonghuming"];
if(isset($_GET['id']))
{
$a=mysql_query('SELECT * FROM `lyb` WHERE `id`=\''.$_GET['id'].'\'');
$re=mysql_fetch_array($a);	
}
?>
<font size="-1">
<table align="center" style="border:2px #F00 solid;">
<tr><td align="center" height="25"><?php echo @$re["title"]?></td></tr>
<tr><td width="600" style="word-break:break-all">
<?php echo @$re["content"]?></td></tr>
<tr><td align="right"><em><?php echo @$re["name"]?>发表于<?php echo @$re["date"]?></em>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
</table>
</font>
<!--显示被回复的留言-->
<?php
@$sql="SELECT * FROM `replay` WHERE `id`='$_GET[id]'";
$res=mysql_query($sql);
?>
<?php
$arr=0;
while($row=mysql_fetch_array($res))
{
	$arr=$arr+1;
?>
<font size="-1">
<table align="center"  width="660"><tr><td><font color="#FFoooo">回复<?php echo $arr?></font></td></tr></table>
<table align="center" style="border:2px #F00 solid;">
<tr><td width="600" style="word-break:break-all">
<?php echo $row["content"]?></td></tr>
<tr><td align="right"><em><?php echo $row["name"]?>回复于<?php echo $row["date"]?></em>
&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<br/>

<?php 
}
?>
<center>
<?php
if($arr==0)
echo "无回复！";
?>
</center>
</table>
</font>
<!--循环输出回复-->
<?php
if(isset($_POST['submit']))
{
	if($_POST['content']=='')
	{
		echo "<script>alert('回复内容不能为空！！');history.go(-1);</script> ";
	}
	else {
		$msgid=$_GET["id"];
		$content=$_POST["content"];
		$name=$yonghuming;
		mysql_query("INSERT INTO `replay` (`msgid`,`id`,`name`,`content`,`date` ) VALUES('','$msgid','$name','$content',now())")or die(mysql_error());
		echo "<script>alert('回复成功')</script>";
		echo "<script language='javascript'>location.href='huifu.php?id=$_GET[id]';</script>";
	}
}
?>
<h3 align="center">回复内容</h3>
<center><form action="" method="post" name="myform" onsubmit="return chk();">
<table>
<tr>
<td>内容：</td><td><textarea id="Content" name="content" class="form-control kindeditor" style="width:670px;height:400px;"></textarea></textarea></td>
</tr>
</table>
<center><input name="submit" type="submit" value="提交">&nbsp;&nbsp;<input type="button" onclick="history.go(-1);" class="btn btn-info" value="返 回"></center>
</form>
<br/><p><center><font size="-1"><a href="addly1.php">去留言板</a></font></center></p>
</body>
</html>