<? # #大米CMS版权所有@翻版必究 # ?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>网站后台管理</title>
<script type="text/javascript" src="/js/admin.js"></script>
<script type="text/javascript" src="/js/Jquery.js"></script>
<script charset="gbk" src="/Editor/kindeditor-min.js"></script>
<script charset="utf-8" src="/Editor/lang/zh_CN.js"></script>
</head>
<script>
function chk(){
if (document.myform.Title.value==""){
	alert("请填写标题！");
	document.myform.Title.focus();
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
session_start();
@$yonghuming=$_COOKIE["yonghuming"];
include("connectr.php");
		if(isset($_POST['submit']))
		{
			$title=$_POST["title"];
			$content=$_POST["content"];
			mysql_query("INSERT INTO `lyb`(`id`,`name`,`title`,`content`,`date`) VALUES ('','$yonghuming','$title','$content',now())")or die(mysql_error());
			echo "<script language='javascript'>alert('提交成功');</script>";
			echo "<script language='javascript'>location.href='edliuyan.php';</script>";
		}
	?>
<body>
<center><form action="addly1.php" method="post" name="myform" onsubmit="return chk();">
<table>
<tr>
<td>标题：</td><td><input name="title" type="text" id="Title" size="40" maxlength="20"></td>
</tr>
<tr>
<td>内容：</td><td><textarea id="Content" name="content" class="form-control kindeditor" style="width:670px;height:400px;"></textarea></textarea></td>
</tr>
</table>
<center><input name="submit" type="submit" value="提交">&nbsp;&nbsp;<input type="button" onclick="history.go(-1);" class="btn btn-info" value="返 回"></center>
</form>
</td>
</body>
</html>