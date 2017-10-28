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
$res=mysql_query("DELETE FROM `xinwen` WHERE  id =($ro)"); 
if($res)
	echo"<script language='javascript'>alert('删除成功')');</script>";
}
}
}
?>
<body>
<h1 align="center">新闻管理</h1>
<hr/><center><font size="-1">
<hr/><center><font size="-1">
<a href="addxinwen.php">添加新闻</a>
&nbsp;&nbsp;&nbsp;&nbsp;
</font></center>
<?php 
$perNumber=10; //每页显示的记录数
@$page=$_GET['page']; //获得当前的页面值
$count=mysql_query("select count(*) from `xinwen`"); //获得记录总数
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
if (!isset($page)) {
 $page=1;
} //如果没有值,则赋值1
$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
$result=mysql_query("select * from `xinwen` order by date desc limit $startCount,$perNumber"); //根据前面的计算出开始的记录和记录数
?>

<br/><font size="-1">
<body>
<br/><font size="-1">
<form action="edxinwen.php" method="post" >
<table align="center" border="1" cellspacing="0" bordercolor="#CC0033"> 
<tr><td width="40" align="center">序号</td><td width="400" align="center">标题</td><td width="200" align="center">来源</td><td width="200" align"center">报导时间</td><td width="40" align"center">编辑</td></tr>
<?php
$a=($page-1)*$perNumber;
 while($row=mysql_fetch_array($result))
{   
$a+=1; 
	?>
<tr><td height="20" width="40" align="center"><?php echo $a ?><input name="ids[]" type="checkbox"  value="<?php echo $row['id']?>"></td><td height="20" width="400" align="center" ><?php echo $row["title"]?></td><td width="200" align="center"><?php echo $row["cfrom"]?></td><td width="200" align="center"><?php echo $row["date"]?></td><td width="40" align="center"><a href="xgxinwen1.php?id=<?php echo $row["id"]?>">编辑</a></td></tr>
<?php } ?>
</table>
<center><input type="button" value="全选" onclick="checkAll('ids[]')" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="取消" onclick="clearAll('ids[]')" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="删除" onclick="if (confirm('确定删除要吗？')) return true; else return false;"></center></form>

<a href="edxinwen.php?page=<?php echo 1;?>">【首页】</a>
<?php
if ($page != 1) { //页数不等于1
?>
<a href="edxinwen.php?page=<?php echo $page - 1;?>">上一页</a><!--显示上一页-->
<?php
}
for ($i=1;$i<=$totalPage;$i++) { 
if($i==$page)
{
echo " <font color=\"red\">$i</font>";
}
 //循环显示出页面
 else
 {
?>
<a href="edxinwen.php?page=<?php echo $i;?>"><?php echo " $i" ;?></a>
<?php
}
}
if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
?>
<a href="edxinwen.php?page=<?php echo $page + 1;?>">下一页</a>
<?php
} 
?>
<a href="edxinwen?page=<?php echo $totalPage;?>">【末页】</a>
</font>
</body>
</html>