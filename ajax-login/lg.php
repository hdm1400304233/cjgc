<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>�ޱ����ĵ�</title>
</head>
<body>
<?php 
   session_start();
   $username=$_POST['username'] ; 
  mysql_connect("localhost", "root", "hdm"); 
  mysql_select_db("phpadmin");
  $sql = "SELECT `username` FROM `test` WHERE `username` = '$username'";
  $re = mysql_query($sql);
 if($_POST["codes"] ==$_SESSION["VerifyCode"]){  
    if($row=mysql_fetch_array($re)){  
        echo 1;//用户已存在  
    } 
	else{//注册成功  
        $sql="INSERT INTO `test`(`id`,`username`,`mima`)VALUES('','$username','$_POST[mima]')";
		mysql_query($sql);
        echo 2;  
    }  
}
 else{  
    echo 0;  
}

   ?>
</body>
</html>
