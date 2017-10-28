<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("connectr.php");
$text= $_REQUEST['keyword'];

 //print_r($text);
$key=explode(' ',$text );
//setcookie("key","$key");
$perNumber=15; //每页显示的记录数
@$page=$_GET['page']; //获得当前的页面值
for($i=0;$i<count($key);$i++)
{

$count=mysql_query("select count(*) from `xinwen`  where title like '%$key[$i]%' or content like '%$key[$i]%'");
}//获得记录总数
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
if (!isset($page)) {
 $page=1;
} //如果没有值,则赋值1
$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
for($i=0;$i<count($key);$i++)
{
$sql= "SELECT * FROM `xinwen` where title like '%$key[$i]%' or content like '%$key[$i]%' ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc limit $startCount,$perNumber";//根据前面的计算出开始的记录和记录数
}
  $query=mysql_query($sql);
  ?>
  <table id="senfe" align="center" border="1" cellspacing="0"> 
<tr><td width="50" align="center">序号</td><td width="400" align="center">标题</td><td width="100" align="center">来源</td><td width="100" align"center">时间</td><td width="100" align"center">浏览新闻</td></tr>
<?php 
	 $a=($page-1)*$perNumber;
	
	while($row=mysql_fetch_array($query))
	{ 
		$a+=1; 
	for($i=0;$i<count($key);$i++)
{
		 $row['title']=preg_replace("/$key[$i]/i", "<font color=red><b>$key[$i]</b></font>", $row['title']);           
   	    //$row['content']=preg_replace("/$key[$i]/i", "<font color=red><b>$key[$i]</b></font>", $row['content']); 	
}
	?>
    <tr><td width="50" align="center"><?php echo $a ?></td><td height="20" width="400" align="center"><?php echo $row["title"]?></td><td width="100" align="center"><?php echo $row["cfrom"]?></td><td width="100" align="center"><?php echo $row["date"]?></td><td width="100" align="center"><a href="look_xw3.php?id=<?php echo $row["id"]?>">浏览新闻</a></td></tr>
<?php
 }
?>
</table>
<center> <a href="search_xinwen1.php?id=$_GET[id]&page=1&keyword=<?php echo $text ?>">首页</a>
<?php
if ($page != 1) { //页数不等于1
?>
<a href="search_xinwen1.php?id=$_GET[id]&page=<?php echo $page - 1?>&keyword=<?php echo $text ?>">上一页</a><!--显示上一页-->
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
<a href="search_xinwen1.php?id=$_GET[id]&page=<?php echo $i?>&keyword=<?php echo $text ?>"><?php echo " $i" ;?></a>
<?php
}
}
if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
?>
<a href="search_xinwen1.php?id=$_GET[id]&page=<?php echo $page + 1?>&keyword=<?php echo $text ?>">下一页</a>
<?php
}

?>
<center><input type="button" onclick="history.go(-1);" class="btn btn-info" value="返 回"></center>
</center>	
</body>
</html>