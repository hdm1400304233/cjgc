<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>
</head>
<script type="text/javascript" src="/js/admin.js"></script>
<script type="text/javascript" src="/js/Jquery.js"></script>
<script charset="gbk" src="/Editor/kindeditor-min.js"></script>
<script charset="utf-8" src="/Editor/lang/zh_CN.js"></script>
<script>
function chk(){
	if (document.myform.cfrom.value==""){
	alert("请填写来源！");
	document.myform.cfrom.focus();
	return false;
  }
if (document.myform.title.value==""){
	alert("请填写标题！");
	document.myform.title.focus();
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
//print_r($_POST);	
$choice=$_POST["choice"];
$title=$_POST["title"];
$sql="UPDATE `xinwen` SET choice='$_POST[choice]', title='$title',content='$_POST[content]',cfrom='$_POST[cfrom]',date='$_POST[date]' WHERE `id`='$_POST[id]'";
mysql_query($sql);
echo "<script language='javascript'>alert('保存成功');</script>";
echo "<script language='javascript'>location.href=edxinwen.php;</script>";										
}   
if(isset($_GET['id']))
{
	$result=mysql_query('SELECT * FROM `xinwen` WHERE `id`=\''.$_GET['id'].'\'');
	$row=mysql_fetch_array($result);
	;

?>
<body>
<center><form action="xgxinwen1.php" method="post" name="myform" onsubmit="return chk();">
<input type="hidden" name="id" value="<?php echo $row['id'];?>" />
<table>
<tr><td align="center>">类型：</td><td><input type="radio" name="choice" value="" <?php if($row['choice']==''){ echo "checked='checked'";}?>/>文本<input type="radio" name="choice" value= '<img src="image/shipin_03.jpg" style="vertical-align:middle">' <?php if($row['choice']!=''){ echo "checked='checked'";}?>>视频</td></tr>
<tr><td>标题：</td><td><textarea  name="title" style="width:850px;height:20px;"><?php echo $row["title"]?></textarea></td></tr>
<tr><td>内容：</td><td><textarea id="Content" name="content" class="form-control kindeditor" style="width:800px;height:800px;"><?php echo $row["content"]?></textarea></td></tr>
</table>
<center><strong>来源:</strong><input name="cfrom" type="text" value="<?php echo $row["cfrom"]?>">&nbsp;&nbsp;&nbsp;&nbsp;<strong>时间:</strong><input name="date" type="text" value="<?php echo $row["date"]?>"></center>
<center><input name="submit" type="submit" value="提交"></center>
</form>
<?php }?>
<center><input type="submit" onclick="history.go(-1);" class="btn btn-info" value="返回"></center>
</body>
</html>