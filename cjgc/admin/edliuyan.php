<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
</head>
<?php
include("connectr.php");
$resu = mysql_query("SELECT id from `lyb`"); 
$res = mysql_fetch_assoc($resu);
$id = $res['id'];
session_start();
@$yonghuming=$_COOKIE["yonghuming"];
if($yonghuming==""){
	echo"<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('login.php');</script>";
	
}
?>
<?php
if(isset($_POST["submit"]))
{
 $ids = array();
 @$ids=$_POST["ids"];
//print_r($ids);
if(is_array($ids) && !empty($ids)){
foreach($ids as $ro){			
$res=mysql_query("DELETE FROM `lyb` WHERE  id =($ro)"); 
if($res)
	echo"<script language='javascript'>alert('删除成功')');</script>";
}
}
}
?>
<body onload="btnclick()">
<h1 align="center">用户留言</h1>
<hr/><center><font size="-1">
<hr/><center><font size="-1">
<a href="ysh.php">审核</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="wsh.php">未审核</a>
</font></center>
<?php
$perNumber=10; //每页显示的记录数
@$page=$_GET['page']; //获得当前的页面值
$count=mysql_query("select count(*) from `lyb`"); //获得记录总数
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
if (!isset($page)) {
 $page=1;
} //如果没有值,则赋值1
$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
$result=mysql_query("select * from `lyb` limit $startCount,$perNumber"); //根据前面的计算出开始的记录和记录数
?>
<br/><font size="-1">
<form action="edliuyan.php" method="post" >
<table id="senfe" align="center" border="1" cellspacing="0"> 
<tr><td width="50" align="center">序号</td><td width="350" align="center">主题</td><td width="75" align="center">留言人</td><td width="75" align"center">留言时间</td></tr>
<?php
$a=($page-1)*$perNumber;
 while($row=mysql_fetch_array($result))
{
	$a+=1; 
	?>
<tr><td width="50" align="center"><?php echo $a ?><input name="ids[]" type="checkbox"  value="<?php echo $row['id']?>"></td><td height="20" width="350" align="center"><a href="huifu.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></td><td width="75" align="center"><?php echo $row["name"]?></td><td width="75" align="center"><?php echo $row["date"]?></td></tr>
<?php } ?>
<tr><input type="button" value="全选" onclick="checkAll('ids[]')" /><input type="button" value="取消" onclick="clearAll('ids[]')" /><input type="submit" name="submit" value="删除" onclick="if (confirm('确定删除要吗？')) return true; else return false;"></tr>
<tr></tr>
</table></form>
<script language="javascript"><!--
//senfe("表格名称","奇数行背景","偶数行背景","鼠标经过背景","点击后背景");
senfe("senfe","#fff","#a5f4ef","#cfc","#f00");
--></script>
<?php
echo "<a href=edliuyan.php?page=1>首页</a>";
if ($page != 1) { //页数不等于1
?>
<a href="edliuyan.php?page=<?php echo $page - 1;?>">上一页</a><!--显示上一页-->
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
<a href="edliuyan.php?page=<?php echo $i;?>"><?php echo " $i" ;?></a>
<?php
}
}
if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
?>
<a href="edliuyan.php?page=<?php echo $page + 1;?>">下一页</a>
<?php
} 
?>
</font>
</body>
</html>