<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<script language="javascript">
function aa()
{
	if(xiugai.title.value=="")
	{
		alert("标题不能为空！！！");
		xiugai.title.focus();
		return false;
	}
}
</script>
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
}
var KE;
KindEditor.options.filterMode = false;
KindEditor.ready(function(K) {
KE = K.create('#Content',{ afterBlur: function(){this.sync();}
});
});
</script>
<?php
include("../connectr.php");
@$name=$_COOKIE["zhanghao"] ;
if($name=="")
		{
			echo "<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('show_xingxi.php');</script>";
		}
		if(isset($_POST['submit']))
		{
			$title=$_POST["title"];
			$content=$_POST["content"];
			mysql_query("UPDATE `lyb` SET title='$_POST[title]',content='$_POST[content]' WHERE id='$_POST[id]'");
			echo "<script language='javascript'>alert('提交成功');</script>";
			echo "<script language='javascript'>location.href='show_xingxi.php';</script>";
		}
		if(isset($_GET['id']))
{
	$result=mysql_query('SELECT * FROM `lyb` WHERE `id`=\''.$_GET['id'].'\'');
	$row=mysql_fetch_array($result);
	;
	?>
<body>
<center><form action="xiugailiuyan.php" method="post" name="myform" onsubmit="return chk();">
<input type="hidden" name="id" value="<?php echo $row['id'];?>" />
<table>
<tr><td>标题：</td><td><input type="text" name="title" id="Title" size="40" value="<?php echo $row['title'];?>"/></td>
</tr>
<tr>
<td>内容：</td><td><textarea id="Content" name="content" class="form-control kindeditor" style="width:800px;height:500px;"><?php echo $row['content'];?> </textarea></td>
</tr>
</table>
<center><input name="submit" type="submit" value="提交">&nbsp;&nbsp;<a href="show_xingxi.php">返回</a></center>
</form>
 <?php
}
?>
</body>
</html>