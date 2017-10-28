<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="textml; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/lookxw3.css" />
<title>浏览新闻</title>
</head>
<script type="text/javascript"> 
         function $(id){  
           return document.getElementById(id)  
        }  
        function getHeight() { 
		var k=38;  
          $("pinglun").style.top=$("cpu").offsetHeight+Number(k) + "px";            
        }  
      window.onload = function() {  
          getHeight();  
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
<div class="wz">
<div class="sy">首页
</div>
<div class="jt">>
</div>
<div class="jt1">新闻
</div>
</div>
<div  id="cpu">
<div  id="hidden">
<?php
include("connectr.php");
if(isset($_GET['title']))
{ 
  // print_r($_GET);
   $all=array("a"=>"transport","b"=>"resource","c"=>"education","d"=>"cxrebuilt","e"=>"foreingc","f"=>"strategypl","g"=>"industry");	
  foreach($all as $x=>$x_value) 
	{ 	
$sql="SELECT * FROM `$x_value` WHERE `title` ='$_GET[title]'";
$query=mysql_query($sql); 
$re = mysql_fetch_array($query);
echo $re['content'];
	}
}
 ?>
</div>
</div>
<div  id="pinglun">
<div id="tb">
</div>
<div id="yqlj">友情链接：
</div>
<div id="ljps">
<ul id="ljall">
<li id=lj1><a  class="a2" href="http://www.escience.gov.cn/">中国科技资源共享网</a></li>
<li id="lj1"><a class="a2" href="http://tieba.baidu.com/f?kw=%B3%AC%BC%B6%B9%A4%B3%CC&fr=ala0&tpl=5">超级工程吧</a></li>
<li id="lj1"><a class="a2" href="http://www.cnerc.gov.cn/">国家工程技术研究中心</a></li>
<li id="lj1"><a class="a2" href="http://www.casted.org.cn/cn/">中国科技战略研究网</a></li>
<li id="lj1"><a class="a2" href="http://www.civilcn.com/shuili/sjbg/kxxg/">土木研究网</a></li>
</ul>
</div>
</div>
</div>
</div>
</body>
</html>