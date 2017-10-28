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
	if (document.myform.column.value==""){
	alert("请填写栏目！");
	document.myform.column.focus();
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
$sql="UPDATE `industry` SET weizhi='$_POST[weizhi]',title='$_POST[title]', content='$_POST[content]',money='$_POST[money]' WHERE `id`='$_POST[id]'";
mysql_query($sql);
echo "<script language='javascript'>alert('保存成功');</script>";
echo "<script language='javascript'>location.href=edindustry.php;</script>";										
}   
if(isset($_GET['id']))
{
	$result=mysql_query('SELECT * FROM `industry` WHERE `id`=\''.$_GET['id'].'\'');
	$row=mysql_fetch_array($result);
	;

?>
<body>
<center><form action="xgindustry.php" method="post" name="myform" onsubmit="return chk();">
<input type="hidden" name="id" value="<?php echo $row['id'];?>" />
<table>
<tr><td>位置：</td><td><input type="text" name="weizhi" value="<?php echo $row['weizhi']?>" /></td></tr>
<tr><td>标题：</td><td><input name="title" type="text" id="Title" size="100" maxlength="100" value="<?php echo $row["title"] ?> "/></td></tr>
<tr><td>内容：</td><td><textarea id="Content" name="content" class="form-control kindeditor" style="width:800px;height:800px;"><?php echo $row["content"]?></textarea></td></tr>
</table>
<center><strong>金额:</strong><input name="money" type="text" value="<?php echo $row["money"]?>"></center>
<center><input name="submit" type="submit" value="提交">&nbsp;&nbsp;</center>
</form>
<?php }?>

<center><a href="edindustry.php">返回</a></center>
</body>
</html>