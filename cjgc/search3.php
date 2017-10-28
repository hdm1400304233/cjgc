<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜索页面</title>
</head>
<body>
<?php
include("connectr.php");
if(isset($_POST['submit']))
{
@$value=$_POST['RBL1'];
$text = $_POST['keyword'];
$key=explode(' ',$text );
//print_r($key);
//print_r($value);
if($value!="")
{
 switch($value)
	  {
	
    case 1:
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT  * FROM `transport` WHERE  chose='铁路' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break; 
    case 2:
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `transport` WHERE   chose='公路' and (title like'%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
    case 3:
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `transport` WHERE  chose='地铁' and (title like '%$key[$i]%' or content lik e'%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
    case 4:
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `transport` WHERE chose='桥梁' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
		break;
	case 5:
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `transport` WHERE  chose='机场' and  (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
     case 6:
	 for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `transport` WHERE  chose='港口' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;	
   case 7:
   for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `transport` WHERE  title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%' ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
	case "8":
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT  * FROM `resource` WHERE  chose='化石能源' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break; 
    case "9":
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `resource` WHERE   chose='钢铁' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
    case "10":
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `resource` WHERE  chose='核电站' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
    case "11":
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `resource` WHERE chose='水电站' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
		break;
	case "12":
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `resource` WHERE  chose='风电站' and  (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
     case "13":
	 for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `resource` WHERE  chose='能源基地' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
		 case "14":
		 for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `resource` WHERE  title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%' ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
		
	 case 15:
	 for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `education` WHERE chose='科研项目' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
		break;
	case 16:
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `education` WHERE  chose='教育工程' and  (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
     case 17:
	 for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `education` WHERE  chose='航空航天' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;	
   case 18:
   for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `education` WHERE  title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%' ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
		
		case 19:
		for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `cxrebuilt` WHERE  chose='衣食住行' and  (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
     case 20:
	 for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `cxrebuilt` WHERE  chose='休闲娱乐' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;	
   case 21:
   for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `cxrebuilt` WHERE  title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%' ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;	
			
	 case 22:
	 for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `foreingc` WHERE chose='能源项目' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
		break;
	case 23:
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `foreingc` WHERE  chose='海外交通' and  (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
     case 24:
	 for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `foreingc` WHERE  chose='工业项目' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;	
   case 25:
   for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `foreingc` WHERE  title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%' ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;		
	
	 case 26:
	 for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `strategypl` WHERE  chose='交通规划' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
    case 27:
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `strategypl` WHERE chose='能源规划' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
		break;
	case 28:
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `strategypl` WHERE  chose='工业规划' and  (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
     case 29:
	 for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `strategypl` WHERE  chose='环境保护' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;	
   case 30:
   for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `strategypl` WHERE  title like '%$key[$i]%' or content like  '%$key[$i]%' or money like '%$key[$i]%' ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
		
	 case 31:
	 for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `industry` WHERE  chose='造船基地' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
    case 32:
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `industry` WHERE chose='金融中心' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
		break;
	case 33:
	for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `industry` WHERE  chose='开发新区' and  (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;
     case 34:
	 for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `industry` WHERE  chose='其他项目' and (title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%') ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;	
   case 35:
   for($i=0;$i<count($key);$i++)
{	
        $sql = "SELECT * FROM `industry` WHERE  title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%' ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
        break;				
    default:;
        break;
}//switch
$res = mysql_query($sql);
while($row=mysql_fetch_array($res))
	{ 
	for($i=0;$i<count($key);$i++)
{

		 $row['title']=preg_replace("/$key[$i]/i", "<font color=red><b>$key[$i]</b></font>", $row['title']);  
		 $row['content']=preg_replace("/$key[$i]/i", "<font color=red><b>$key[$i]</b></font>", $row['content']); 	         
}	
	 echo $row['title'];
	 echo $row['content']; 	
	}
}//if

else
{ 
$perNumber=5; //每页显示的记录数
@$page=$_GET['page']; //获得当前的页面值
	$all=array("a"=>"transport","b"=>"resource","c"=>"education","d"=>"cxrebuilt","e"=>"foreingc","f"=>"strategypl","g"=>"industry");
	foreach($all as $x=>$x_value) 
	{ 
for($i=0;$i<count($key);$i++)
{
	 $count=mysql_query("select count(*) from `$x_value`  where title like '%$key[$i]%' or content like '%$key[$i]%'  or money like '%$key[$i]%'");
}
//print_r($count);	
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
if (!isset($page)) 
{
 $page=1;
} //如果没有值,则赋值1
$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
	}
?>
<table id="senfe" align="center" border="1" cellspacing="0"> 
<tr><td width="50" align="center">序号</td><td width="400" align="center">标题</td><td width="100" align="center">耗资</td><td width="100" align"center">浏览内容</td></tr>
<?php
foreach($all as $x=>$x_value) 
	{ 	
for($i=0;$i<count($key);$i++)
{
	 $sql = "SELECT * FROM `$x_value` where title like '%$key[$i]%' or content like '%$key[$i]%' or money like '%$key[$i]%' ORDER BY (title LIKE '%$key[$i]%') desc,(content LIKE '%$key[$i]%') desc";
}
	
	 $query=mysql_query($sql);
//foreach
	
 
	 $a=($page-1)*$perNumber;
	while($row=mysql_fetch_array($query))
	{ 
		$a+=1; 
	for($i=0;$i<count($key);$i++)
{
		 $ro['title']=preg_replace("/$key[$i]/i", "<font color=red><b>$key[$i]</b></font>", $row['title']);           
   	    //$row['content']=preg_replace("/$key[$i]/i", "<font color=red><b>$key[$i]</b></font>", $row['content']); 	

	?>
    <tr><td width="50" align="center"><?php echo $a ?></td><td height="20" width="400" align="center"><?php echo $ro["title"]?></td><td width="100" align="center"><?php echo $row["money"]?></td><td width="100" align="center"><a href="scan_gc.php?title=<?php echo $row["title"]?>">浏览内容</a></td></tr>
<?php
 }
 }
	}
 ?>
</table>

 <center><a href="search3.php?id=$_GET[id]&page=1&keyword=<?php echo $text ?>">首页</a>
<?php
if ($page != 1) { //页数不等于1
?>
<a href="search3.php?id=$_GET[id]&page=<?php echo $page - 1?>&keyword=<?php echo $text ?>">上一页</a><!--显示上一页-->
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
<a href="search3.php?id=$_GET[id]&page=<?php echo $i?>&keyword=<?php echo $text ?>"><?php echo " $i" ;?></a>
<?php
}
}
if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
?>
<a href="search3.php?id=$_GET[id]&page=<?php echo $page + 1?>&keyword=<?php echo $text ?>">下一页</a>
<?php
}

?>	
	
<?php
 } 
}
?>

</center>