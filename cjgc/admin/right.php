<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link href="admin.css" type="text/css" rel="stylesheet" />
<title>无标题文档</title>
</head>
 <body>
 <?php
include("connectr.php");
mysql_query("set names 'utf8'");
		@$name=$_COOKIE["yonghuming"] ;
		if($name=="")
		{
			echo "<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('login.php');</script>";
		}
?>

        <table cellspacing=0 cellpadding=0 width="100%" align=center border=0>
            <tr height=28>
                <td background=./img/title_bg1.jpg>当前位置: </td></tr>
            <tr>
                <td bgcolor=#b1ceef height=1></td></tr>
            <tr height=20>
                <td background=./img/shadow_bg.jpg></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="90%" align=center border=0>
            <tr height=100>
                <td align=middle width=100><img height=100 src="./img/admin_p.gif" 
                                                width=90></td>
                <td width=60>&nbsp;</td>
                <td>
                    <table height=100 cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td>当前时间：<?php echo date("Y/m/d")?></td></tr>
                        <tr>
                            <td style="font-weight: bold; font-size: 16px">admin</td></tr>
                        <tr>
                            <td>欢迎进入网站管理中心！</td></tr></table></td></tr>
            <tr>
                <td colspan=3 height=10></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="95%" align=center border=0>
            <tr height=20>
                <td></td></tr>
            <tr height=22>
                <td style="padding-left: 20px; font-weight: bold; color: #ffffff" 
                    align=middle background=./img/title_bg2.jpg>您的相关信息</td></tr>
            <tr bgcolor=#ecf4fc height=12>
                <td></td></tr>
            <tr height=20>
                <td></td></tr></table>
        <table cellspacing=0 cellpadding=2 width="95%" align=center border=0>
            <tr>
                <td align=right width=100>登陆帐号：</td><td><?php echo $_COOKIE["yonghuming"]?> </td>
                <td style="color: #880000"></td></tr>
            <tr>
                <td align=right>真实姓名：</td><td><?php echo $_COOKIE["yonghuming"]?> </td>
                <td style="color: #880000"></td></tr>
                <td align=right>上线时间：</td><td><?php echo date("Y/m/d")?> </td>
                <td style="color: #880000"></td></tr>
        </table>
       

    </body>
</html>
