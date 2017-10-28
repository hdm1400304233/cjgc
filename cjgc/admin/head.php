<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="admin.css" type="text/css" rel="sheet" />
<title>无标题文档</title>
</head>
<body>
<?php
include("connectr.php");
session_start();
@$yonghuming=$_COOKIE["yonghuming"];
if($yonghuming=="")
{
	echo"<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('login.php');</script>";
	
}
@$sql="SELECT * FROM `gly` WHERE yonghuming='$_POST[yonghuming]'";
$query=mysql_query($sql);
?>
 <table cellspacing=0 cellpadding=0 width="100%" 
               background="./img/header_bg.jpg" border=0>
            <tr height=56>
                <td width=260><img height=56 src="./img/header_left.jpg" 
                                   width=260></td>
                <td style="font-weight: bold; color: #fff; padding-top: 20px" 
                    align=middle><a style="color: #fff" 
                                                        href="../sy_index.php" target="_blank"
                                                        >网站首页</a>&nbsp;&nbsp;当前用户：<?php echo $_COOKIE["yonghuming"]?> &nbsp;&nbsp; <a style="color: #fff" 
                                                        href="xg.php" 
                                                        target=rightight>修改口令</a> &nbsp;&nbsp; <a style="color: #fff" 
                                                        onclick="if (confirm('确定要退出吗？')) return true; else return false;" 
                                                        href="tuichuht.php" target=_top>退出系统</a> 
                </td>
                <td align=right width=268><img height=56 
                                               src="./img/header_right.jpg" width=268></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="100%" border=0>
            <tr bgcolor=#1c5db6 height=4>
                <td></td>
            </tr>
        </table>

</body>
</html>
