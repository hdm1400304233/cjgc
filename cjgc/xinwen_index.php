<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="textml; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/xinwen.css" />
<title>新闻页面</title>
</head>
<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
<script type="text/javascript">
	function lookup(inputString) {
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("rpc.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					$('#suggestions').show();
					$('#autoSuggestionsList').html(data);
				}
			});
		}
	} // lookup
	
	function fill(thisValue) {
		$('#inputString').val(thisValue);
		setTimeout("$('#suggestions').hide();", 200);
	}
</script>
<script language="javascript">
function aaa()
{
	if(sc.keyword.value=="")
	{
		alert("请输入关键字！！！");
		sc.keyword.focus();
		return false;
	}
}
</script>
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
<div class="xw">新闻
</div>
</div>
<div class="sch">
<form method="get" action="search_xinwen1.php" name="sc" onsubmit="return aaa()">
<div class=ppp>
<input  name="keyword" type="text"  value="" class="inputString" id="inputString" onkeyup="lookup(this.value);" onblur="fill();">
<input name="submit" type="submit"  class="btn" value="搜索">
</div>
<div class="suggestionsBox" id="suggestions" style="display: none;">
				<img src="images/upArrow.png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
				<div class="suggestionList" id="autoSuggestionsList">
					&nbsp;
				</div>
</div>
</form>
</div>
<div class="thre">
<div class="lgo">
</div>
<div class="xwzi">新闻
</div>
</div>
<div class="ecoxw">
<ul class="ul0">
<?php 
$perNumber=14; //每页显示的记录数
@$page=$_GET['page']; //获得当前的页面值
$count=mysql_query("select count(*) from `xinwen` "); //获得记录总数
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
if (!isset($page)) {
 $page=1;
} //如果没有值,则赋值1
$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
$result=mysql_query("select * from `xinwen` order by date desc limit $startCount,$perNumber"); //根据前面的计算出开始的记录和记录数
 while($row=mysql_fetch_array($result))
{
	?>
<li id="li0" style="margin-bottom:14px"><a class="a2" href="look_xw3.php?id=<?php echo $row["id"];?>"><?php echo $row["title"]?></a></li>
<?php
 } 
?>
</ul>
总页数：<?php echo "$totalPage";?>&nbsp;&nbsp;
当前页：<?php echo "<font color=\"blue\"> $page</font>";?>
<a class="a2" href="xinwen_index.php?page=<?php echo 1;?>">【首页】</a>
<?php
if ($page != 1) { //页数不等于1
?>
<a class="a2" href="xinwen_index.php?page=<?php echo $page - 1;?>">【上一页】</a><!--显示上一页-->
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
<a class="a2" href="xinwen_index.php?page=<?php echo $i;?>"><?php echo " $i" ;?></a>
<?php
}
}
if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
?>
<a class="a2" href="xinwen_index.php?page=<?php echo $page + 1;?>">【下一页】</a>
<?php
} 
?>
<a class="a2" href="xinwen_index.php?page=<?php echo $totalPage;?>">【末页】</a>
</div>
</div>
<?php include("bottom_clj.php");?> 
</div>
</body>
</html>