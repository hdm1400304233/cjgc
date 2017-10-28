<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>添加新闻</title>
</head>
<script type="text/javascript" src="/js/admin.js"></script>
<script type="text/javascript" src="/js/Jquery.js"></script>
<script charset="gbk" src="/Editor/kindeditor-min.js"></script>
<script charset="utf-8" src="/Editor/lang/zh_CN.js"></script>
<script>
function chk(){
if (document.myform.Title.value==""){
	alert("请填写标题！");
	document.myform.Title.focus();
	return false;
  }
  if (document.myform.cfrom.value==""){
	alert("请填写来源！");
	document.myform.cfrom.focus();
	return false;
  }
}
var KE;
KindEditor.options.filterMode = false;
KindEditor.ready(function(K) {
KE = K.create('#Content',{ afterBlur: function(){this.sync();}
});
});
</script>
<?php
include("connectr.php");
@$name=$_COOKIE["yonghuming"] ;
		if($name=="")
		{
			echo "<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('login.php');</script>";
		}
		if(isset($_POST['submit']))
		{
			$choice=$_POST["choice"];
			$title=$_POST["title"];
			$hebin=$choice .$title;
			$content=$_POST["content"];
			mysql_query("INSERT INTO `xinwen`(`id`,`choice`,`title`,`content`,`cfrom`,`date`) VALUES ('','$choice','$hebin','$content','$_POST[cfrom]',now())")or die(mysql_error());
			echo "<script language='javascript'>alert('提交成功');</script>";
			echo "<script language='javascript'>location.href='edxinwen.php';</script>";
		}
	?>

<body>
<center><form action="addxinwen.php" method="post" name="myform" onsubmit="return chk();">
<table margin：0 auto>
<tr><td align="center">类型：</td><td><input type="radio" name="choice" checked="checked" value="" />文本<input type="radio" name="choice" value= '<img src="image/shipin_03.jpg" style="vertical-align:middle">' >视频</td></tr>
<tr><td>来源:</td><td><input type="text" name="cfrom" size="50"></td></tr>
<tr>
<td>标题：</td><td><input name="title" type="text" id="Title" size="100" maxlength="100" vertical-align:middle> </td>
</tr>
<tr>
<td>内容：</td><td><textarea id="Content" name="content" class="form-control kindeditor" style="width:800px;height:800px;"></textarea></textarea></td>
</tr>
</table>
<center><input name="submit" type="submit" value="提交">&nbsp;&nbsp;<a href="edxinwen.php">返回</a></center>
</form>
</body>
</html>