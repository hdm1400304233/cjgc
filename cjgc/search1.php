<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="sch.css" />
<title>收索视频</title>
</head>
<body>
<div class="ecoxw">
<ul class="ul0">
<?php
include("connectr.php");
$text = $_POST['keyword'];
$sql = "SELECT * FROM `web` where name like '%$text%'";
$query=mysql_query($sql);
?>
<?php
while($row=mysql_fetch_array($query))
{	
	?>
<li class="li0" style="margin-bottom:8px;  margin:5px"><a href="sstp_bf.php?id=<?php echo $row["id"]?>"><img src="<?php echo  $row['pic'];?>" width="200" height="200"/></a><center><div class="zk" style="width:189px;height:40px;"><a href="sstp_bf.php?id=<?php echo $row["id"]?>"><?php echo $row['name'];?></div> </a></center></li>
<?php
}
?>
</ul>
</div>
 <input type="button" style="background:#CCC" onclick="history.go(-1);" class="btn btn-info" value="返 回">
</body>
</html>