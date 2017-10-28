<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>�ޱ����ĵ�</title>
</head>
<body>
<?php 
   $username=$_POST['username'] ; 
  mysql_connect("localhost", "root", "hdm"); 
  mysql_select_db("phpadmin");
  $sql = "SELECT `username` FROM `test` WHERE `username` = '$username'";
  $re = mysql_query($sql);  
    if($row=mysql_fetch_array($re)){  
        echo "<font color=red>用户名已存在</font>";//用户已存在  
    } 
	else{//注册成功        
        echo "<font color=green>符合要求</font>";  
    }  


   ?>
</body>
</html>
