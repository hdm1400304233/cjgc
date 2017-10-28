<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
@$zhanghao=$_COOKIE["zhanghao"];
$sql="SELECT * FROM `syt` WHERE zhanghao='$zhanghao'";
$query=mysql_query($sql);
$arr=mysql_fetch_array($query);
?>
<body>
<div class="lg">
</div>
<div class="yh">
姓名：
 </div>
 <div class="s1">
 <input  style="border:none;background:#044379;color:#fff;font-family:"微软雅黑";font-size:15px;text-align:center;line-height:20px;" type="text" name="zhanghao"  value="<?php echo $arr['mingzi']?>" />
</div>
<div class="mima">
地址：
 </div>
<div class="s2">
 <input style="border:none;background:#044379;color:#fff;font-family:"微软雅黑";font-size:15px;text-align:center;line-height:20px;" type="text" value="<?php echo $arr['province']?><?php echo $arr['city']?>">
</div> 
<div class="yhxx"><a class="a1"  href="yonghuxingxi.php">用户信息</a></div>
<div class="tuic"><a class="a1" href="tuichu.php">退出登录</a></div>
</body>
</html>