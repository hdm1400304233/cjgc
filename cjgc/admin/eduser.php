<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>
<style type="text/css">
#senfe {
width: 600px;
border-top: #000 1px solid;
border-left: #000 1px solid;
}
#senfe td {
border-right: #000 1px solid;
border-bottom: #000 1px solid;
}
</style>
<script type="text/javascript"> 
function senfe(o,a,b,c,d){
var t=document.getElementById(o).getElementsByTagName("tr");
for(var i=0;i<t.length;i++){
t[i].style.backgroundColor=(t[i].sectionRowIndex%2==0)?a:b;
t[i].onclick=function(){
if(this.x!="1"){
this.x="1";//本来打算直接用背景色判断，FF获取到的背景是RGB值，不好判断
this.style.backgroundColor=d;
}else{
this.x="0";
this.style.backgroundColor=(this.sectionRowIndex%2==0)?a:b;
}
}
t[i].onmouseover=function(){
if(this.x!="1")this.style.backgroundColor=c;
}
t[i].onmouseout=function(){
if(this.x!="1")this.style.backgroundColor=(this.sectionRowIndex%2==0)?a:b;
}
}
}

 </script> 
</head>
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
<body onload="btnclick()">
<h1 align="center">用户信息</h1>
<hr/><center><font size="-1">
<hr/><center><font size="-1">
</font></center>
<?php
 
$perNumber=10; //每页显示的记录数
@$page=$_GET['page']; //获得当前的页面值
$count=mysql_query("select count(*) from `syt`"); //获得记录总数
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
if (!isset($page)) {
 $page=1;
} //如果没有值,则赋值1
$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
$result=mysql_query("select * from `syt` limit $startCount,$perNumber"); //根据前面的计算出开始的记录和记录数
?>
<br/><font size="-1">
<table id="senfe" align="center" border="1" cellspacing="0"> 
<tr><td width="50" align="center">序号</td><td width="100" align="center">账号</td><td width="100" align="center">姓名</td><td width="50" align"center">性别</td><td width="100" align="center">邮箱</td><td width="200" align="center">地址</td><td width="40" align="center">删除</td></tr>
<?php
$a=($page-1)*$perNumber;
 while($row=mysql_fetch_array($result))
{
	$a+=1; 
	?>
<tr><td width="50" align="center"><?php echo $a ?></td><td height="20" width="100" align="center"><?php echo $row["zhanghao"]?></td><td width="200" align="center"><?php echo $row["mingzi"]?></td><td width="100" align="center"><?php echo $row["xingbie"]?></td><td width="100" align="center"><?php echo $row["email"]?></td><td width="40" align="center"><?php echo $row['province']?><?php echo $row['city']?></td><td width="40" align="center"><a  onclick="if (confirm('确定删除要吗？')) return true; else return false;"  href="shanchu.php?id=<?php echo $row['id']?>"> 删除</a></tr>
<?php } ?>
</table>
<script language="javascript"><!--
//senfe("表格名称","奇数行背景","偶数行背景","鼠标经过背景","点击后背景");
senfe("senfe","#fff","#66CC33","#cfc","#f00");
--></script>
<?php
if ($page != 1) { //页数不等于1
?>
<a href="eduser.php?page=<?php echo $page = 1;?>">首页</a>
<a href="eduser.php?page=<?php echo $page - 1;?>">上一页</a><!--显示上一页-->
<?php
}
for ($i=1;$i<=$totalPage;$i++) {  //循环显示出页面
?>
<a href="eduser.php?page=<?php echo $i;?>"><?php echo $i ;?></a>
<?php
}
if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
?>
<a href="eduser.php?page=<?php echo $page + 1;?>">下一页</a>
<?php
} 
?>
</font>
</body>
</html>