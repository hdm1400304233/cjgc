<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("connectr.php");
if(isset($_POST['submit']))
{
$value=$_POST['column'];
$chose=$_POST['chose'];
$text = $_POST['keyword'];
//print_r($text);
//print_r($value);
//print_r($chose);
if($value!='选择全部')
{
 switch($value)
	  {
	
    case '交通运输':
	              switch($chose)
				  {
					  case '选择全部':
					   $sql = "SELECT  * FROM `transport` WHERE title like '%$text%' or content like '%$text%' or money like '%$text%'";
					  break;
					  default:
					   $sql = "SELECT  * FROM `transport` WHERE  chose='$chose' and (title like '%$text%' or content like '%$text%' or money like '%$text%')";
					  break;
				  }
        break;
		 
    case '能源电力':
         switch($chose)
				  {
					  case '选择全部':
					   $sql = "SELECT  * FROM `resource` WHERE title like '%$text%' or content like '%$text%' or money like '%$text%'";
					  break;
					  default:
					   $sql = "SELECT  * FROM `resource` WHERE  chose='$chose' and (title like '%$text%' or content like '%$text%' or money like '%$text%')";
					  break;
				  }
        break;
    case '科研教育':
         switch($chose)
				  {
					  case '选择全部':
					   $sql = "SELECT  * FROM `education` WHERE title like '%$text%' or content like '%$text%' or money like '%$text%'";
					  break;
					  default:
					   $sql = "SELECT  * FROM `education` WHERE  chose='$chose' and (title like '%$text%' or content like '%$text%' or money like '%$text%')";
					  break;
				  }
        break;
    case '城乡建设':
        switch($chose)
				  {
					  case '选择全部':
					   $sql = "SELECT  * FROM `cxrebuilt` WHERE title like '%$text%' or content like '%$text%' or money like '%$text%'";
					  break;
					  default:
					   $sql = "SELECT  * FROM `cxrebuilt` WHERE  chose='$chose' and (title like '%$text%' or content like '%$text%' or money like '%$text%')";
					  break;
				  }
		break;
	case '海外工程':
        switch($chose)
				  {
					  case '选择全部':
					   $sql = "SELECT  * FROM `foreingc` WHERE title like '%$text%' or content like '%$text%' or money like '%$text%'";
					  break;
					  default:
					   $sql = "SELECT  * FROM `foreingc` WHERE  chose='$chose' and (title like '%$text%' or content like '%$text%' or money like '%$text%')";
					  break;
				  }
        break;
     case '战略规划':
         switch($chose)
				  {
					  case '选择全部':
					   $sql = "SELECT  * FROM `strategypl` WHERE title like '%$text%' or content like '%$text%' or money like '%$text%'";
					  break;
					  default:
					   $sql = "SELECT  * FROM `strategypl` WHERE  chose='$chose' and (title like '%$text%' or content like '%$text%' or money like '%$text%')";
					  break;
				  }
        break;	
   case '工业项目':
        switch($chose)
				  {
					  case '选择全部':
					   $sql = "SELECT  * FROM `industry` WHERE title like '%$text%' or content like '%$text%' or money like '%$text%'";
					  break;
					  default:
					   $sql = "SELECT  * FROM `industry` WHERE  chose='$chose' and (title like '%$text%' or content like '%$text%' or money like '%$text%')";
					  break;
				  }
        break;	
    default:;
        break;
}
$res = mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$row['title']=preg_replace("/($text)/i","<b style=\"color:red\">\\1</b>",$row['title']);
$row['content']=preg_replace("/($text)/i","<b style=\"color:red\">\\1</b>",$row['content']);
$row['money']=preg_replace("/($text)/i","<b style=\"color:red\">\\1</b>",$row['money']);
echo $row['title']."-->".$row['content']."-->".$row['money']."<br>";
}
}
else
{
	$all=array("a"=>"transport","b"=>"resource","c"=>"education","d"=>"cxrebuilt","e"=>"foreingc","f"=>"strategypl","g"=>"industry");
	foreach($all as $x=>$x_value) 
	{
		if($chose=='选择全部')
	 $sql = "SELECT * FROM `$x_value` where title like '%$text%' or content like '%$text%' or money like '%$text%'";
	 else
	  $sql = "SELECT * FROM `$x_value` where chose='$chose' and (title like '%$text%' or content like '%$text%' or money like '%$text%')";
	 $query=mysql_query($sql);
	 //print_r($query);
	while($row=mysql_fetch_array($query))
	{
	$row['title']=preg_replace("/($text)/i","<b style=\"color:red\">\\1</b>",$row['title']);
$row['content']=preg_replace("/($text)/i","<b style=\"color:red\">\\1</b>",$row['content']);
$row['money']=preg_replace("/($text)/i","<b style=\"color:red\">\\1</b>",$row['money']);
echo $row['title']."-->".$row['content']."-->".$row['money']."<br>";
		 
	}
	}
}

}
?>