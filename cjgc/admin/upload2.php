<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>文件上传程序</title>
</head>
<SCRIPT language=javascript>
function CheckPost()
{
	
	if(upload.upfile.value=="")
	{
		alert("请上传文件！");
		upload.upfile.focus();
		return false;
	}
}
</SCRIPT>

<?php
/******************************************************************************

参数说明:
$max_file_size : 上传文件大小限制, 单位BYTE
$destination_folder : 上传文件路径

******************************************************************************/
include("connectr.php");
//上传文件类型列表
$uptypes=array(
'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
'application/pdf',
'application/msword',
'application/octet-stream'
);
$max_file_size=1000000000; //上传文件大小限制, 单位BYTE
$destination_folder="upload/wenjian/"; //上传文件路径
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
<center><h1>上传文件</h1></center>
<br>
<br>
<center>
<form enctype="multipart/form-data" method="post" name="upform">
<table>
<tr><td><input name="upfile" type="file">
<input type="submit" value="上传"></td></tr>
</table>
允许上传的文件类型为:<?php echo implode(',',$uptypes)?>
</form>
<a href="edwenjian.php">返回</a>
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
if(!in_array($file["type"], $uptypes))
//检查文件类型
{
echo "文件类型不符!".$file["type"];
exit;
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

$pinfo=pathinfo($destination);
$fname=$pinfo['basename'];
echo " <font color=red>已经成功上传</font><br>完整地址: <font color=blue>".$b.$destination_folder.$fname."</font><br>";
echo "<br> 大小:".$file["size"]." bytes";
echo '<br>';
//将数据插入到数据库中
$dizhi = "$b"."$destination_folder"."$fname";
$arr = explode('.',"$file[name]");
$name = $arr[0];
$sql = "insert into `upload`(`id`,`dizhi`,`name`) values ('','$dizhi','$name')";
mysql_query($sql);
echo "<font color=green>数据插入成功</font>";
}

?>

</html>