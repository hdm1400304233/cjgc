<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>文件上传程序</title>
</head>
<?php
/******************************************************************************
参数说明:
$max_file_size : 上传文件大小限制, 单位BYTE
$destination_folder : 上传文件路径
******************************************************************************/
include("connectr.php");
//上传文件类型列表

$max_file_size=10000000000; //上传文件大小限制, 单位BYTE
$destination_folder="upload/shipin/"; //上传文件路径
$b="admin/";
?>

<style type="text/css">
<!--
body
{
font-size: 9pt;
}
input
{
background-color: #66CCFF;
border: 1px inset #CCCCCC;
}
-->
</style>
</head>

<body>
<center><h1>上传视频</h1></center>
<br>
<br>
<center>
<form enctype="multipart/form-data" method="post" name="upform">
<table>
<tr><td>图片地址：<input type="text" name="pic" size="50">
</td></tr>
<tr><td>上传视频：<input name="upfile" type="file">
<input type="submit" name="submit" value="上传"></td></tr>
</table>
<center><a href="edtv.php">返回</a></center>
</form>
</center>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
if (!is_uploaded_file($_FILES["upfile"]['tmp_name']))
//是否存在文件
{
echo "您还没有选择文件!";
exit;
}

$file = $_FILES["upfile"];
if($max_file_size < $file["size"])
//检查文件大小
{
echo "您选择的文件太大了!";
exit;
}

if(!file_exists($destination_folder))
{
mkdir($destination_folder);
}

$filename=$file["tmp_name"];
$image_size = getimagesize($filename);
$pinfo=pathinfo($file["name"]);
$ftype=$pinfo['extension'];
$destination = $destination_folder.time().".".$ftype;
if (file_exists($destination) && $overwrite != true)
{
echo "同名文件已经存在了";
exit;
}

if(!move_uploaded_file ($filename, $destination))
{
echo "移动文件出错";
exit;
}
 print_r($_POST);

$pinfo=pathinfo($destination);
$fname=$pinfo['basename'];
echo " <font color=red>已经成功上传</font><br>完整地址: <font color=blue>".$b.$destination_folder.$fname."</font><br>";
echo "<br> 大小:".$file["size"]." bytes";
echo '<br>';
//将数据插入到数据库中
if(isset($_POST["submit"]))
{
$dizhi = "$b"."$destination_folder"."$fname";
//$name = $file['name'];
$arr = explode('.',"$file[name]");
$name= $arr[0];
$sql = "insert into `web`(`id`,`pic`,`name`,`dizhi`) values ('NULL','$_POST[pic]','$name','$dizhi')";
mysql_query($sql);
echo "<font color=green>数据插入成功</font>";
}
//print_r($pk);
}
?>

</html>