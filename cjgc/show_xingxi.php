<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="textml; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/xx.css" />
<title>留言信息</title>
</head>
<?php
include("connectr.php");
?>
<body>
<div class="all">
<?php
include("sy_head.php");
?>

<div class="t2">
<div class="lf">
<div class="wai">
<div class="li">
<?php
session_start(); 
@$zhanghao=$_COOKIE["zhanghao"];
if($zhanghao=="")
{
	 include("show_zcdl.php");
}
else
{
include("show_dlxx.php");	
}
?>
</div>
</div>
<div class="dh1">
<div class="jt0">
</div>
<div class="zbm">数据目录导航
</div>
</div>
<div class="dh2">
<?php include("sxxl6.php");?> 
</div>
</div>
<div class="wz">
<div class="sy">首页
</div>
<div class="jt">>
</div>
<div class="jt1">留言板
</div>
</div>
<div class="thre">
<div class="lgo">
</div>
<div class="jlzi">查看留言
</div>
</div>
<div class="showgc">
<style type="text/css">
#senfe {
top:208px;
width: 719px;
border: #aaaaaa 1px solid;
}
#senfe td {
border:#aaaaaa 1px solid;
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
<?php 
@$zhanghao=$_COOKIE["zhanghao"];
 ?>
<h1 align="center">欢迎<font color="red"><?php echo "$zhanghao" ?></font>光临</h1>

<div class="xtiao">
</div>
</br>
<a href="show_lyb.php">留言板</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="yonghuxingxi.php">修改资料</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="tuichu.php">退出登录</a></font></center>
</br>
</br>
<?php
$perNumber=14; //每页显示的记录数
@$page=$_GET['page']; //获得当前的页面值
$count=mysql_query("select count(*) from `lyb` WHERE shenhe='1'"); //获得记录总数
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
if (!isset($page)) {
 $page=1;
} //如果没有值,则赋值1
$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
$result=mysql_query("select * from `lyb`  WHERE shenhe='1' limit $startCount,$perNumber"); //根据前面的计算出开始的记录和记录数
?>
<table id="senfe" align="center"  cellspacing="0" border="1"> 
<tr><td width="50" align="center">序号</td><td width="350" align="center">主题</td><td width="75" align="center">留言人</td><td width="75" align"center">留言时间</td><td width="40" align="center">修改</td><td width="40" align="center">删除</td></tr>
<?php
$k=($page-1)*$perNumber;
 while($row=mysql_fetch_array($result))
{
	$k+=1; 
	?>
<tr><td width="50" align="center"><?php echo $k ?></td><td height="20" width="340" align="center"><a href="show_huifu.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></td><td width="80" align="center"><?php echo $row["name"]?></td><td width="80" align="center"><?php echo $row["date"]?></td><td width="40" align="center"><a href="xiugailiuyan.php?id=<?php echo $row["id"]?>">修改</a></td><td width="40" align="center"><a  onclick="if (confirm('确定删除要吗？')) return true; else return false;"  href="shanchu.php?id=<?php echo $row['id']?>"> 删除</a></td></tr>
<?php } ?>
</table>
<script language="javascript"><!--
//senfe("表格名称","奇数行背景","偶数行背景","鼠标经过背景","点击后背景");
senfe("senfe","#fff","#0b85ee","#cfc","#f00");
--></script>
总页数：<?php echo "$totalPage";?>&nbsp;&nbsp;
当前页：<?php echo "<font color=\"blue\"> $page</font>";?>
<a class="a4" href="show_xingxi.php?page=<?php echo 1;?>">【首页】</a>
<?php
if ($page != 1) { //页数不等于1
?>
<a class="a2" href="show_xingxi.php?page=<?php echo $page - 1;?>">【上一页】</a><!--显示上一页-->
<?php
}
for ($i=1;$i<=$totalPage;$i++) { 
if($i==$page)
{
echo " <font color=\"blue\">$i</font>";
}
 //循环显示出页面
 else
 {
?>
<a class="a4" href="show_xingxi.php?page=<?php echo $i;?>"><?php echo " $i" ;?></a>
<?php
}
}
if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
?>
<a class="a4" href="show_xingxi.php?page=<?php echo $page + 1;?>">【下一页】</a>
<?php
} 
?>
<a class="a4" href="show_xingxi.php?page=<?php echo $totalPage;?>">【末页】</a>
</font>
</div>
<?php include("bottom_clj.php");?> 
</div>
</body>
</html>