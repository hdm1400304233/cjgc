<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>
</head>
<script type="text/javascript"> 
function checkAll(name) { 
var el = document.getElementsByTagName('input'); 
var len = el.length; 
for(var i=0; i<len; i++) { 
if((el[i].type=="checkbox") && (el[i].name==name)) { 
el[i].checked = true; 
} 
} 
} 
function clearAll(name) { 
var el = document.getElementsByTagName('input'); 
var len = el.length; 
for(var i=0; i<len; i++) { 
if((el[i].type=="checkbox") && (el[i].name==name)) { 
el[i].checked = false; 
} 
} 
} 
</script> 
<body>
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
<?php
if(isset($_POST["submit"]))
{
 $ids = array();
 @$ids=$_POST["ids"];
print_r($ids);
if(is_array($ids) && !empty($ids)){
foreach($ids as $ro){			
$res=mysql_query("DELETE FROM `upload` WHERE  id =($ro)"); 
if($res)
	echo"<script language='javascript'>alert('删除成功')');</script>";
}
}
}
?>
<body>
<h1 align="center">文件管理</h1>
<hr/><center><font size="-1">
<hr/><center><font size="-1">
<a href="upload2.php">上传文件</a>
<input type="button" value="全选" onclick="checkAll('ids[]')" /><input type="button" value="取消" onclick="clearAll('ids[]')" /><input type="submit" name="submit" value="删除" onclick="if (confirm('确定删除要吗？')) return true; else return false;">
</font></center>
<?php 
$perNumber=10; //每页显示的记录数
@$page=$_GET['page']; //获得当前的页面值
$count=mysql_query("select count(*) from `upload`"); //获得记录总数
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
if (!isset($page)) {
 $page=1;
} //如果没有值,则赋值1
$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
$result=mysql_query("select * from `upload` limit $startCount,$perNumber"); //根据前面的计算出开始的记录和记录数
?>

<br/><font size="-1">
<body>
<br/><font size="-1">
<form action="edwenjian.php" method="post" >
<table align="center" border="1" cellspacing="0" bordercolor="#CC0033"> 
<tr><td width="40" align="center">序号</td><td width="200" align="center">文件名</td><td width="400" align="center">地址</td></tr>
<?php while($row=mysql_fetch_array($result))
{
	?>
<tr><td height="20" width="40" align="center"><?php echo $row["id"]?><input name="ids[]" type="checkbox"  value="<?php echo $row['id']?>"></td><td height="20" width="200" align="center"><?php echo $row["name"]?></td><td width="200" align="center"><?php echo $row["dizhi"]?></td></tr>
<?php } ?>

</table></form>

<?php
if ($page != 1) { //页数不等于1
?>
<a href="edwenjian.php?page=<?php echo $page - 1;?>">上一页</a><!--显示上一页-->
<?php
}
for ($i=1;$i<=$totalPage;$i++) {  //循环显示出页面
?>
<a href="edwenjian.php?page=<?php echo $i;?>"><?php echo $i ;?></a>
<?php
}
if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
?>
<a href="edwenjian.php?page=<?php echo $page + 1;?>">下一页</a>
<?php
} 
?>
</font>
</body>
</html>