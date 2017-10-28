
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录</title>

<link href="css/login.css" type="text/css" rel="stylesheet" />

</head>
<script language="javascript">
function aaa()
{
	if(dr.yonghuming.value=="")
	{
		alert("账号不能为空！！！");
		dr.yonghuming.focus();
		return false;
	}
	if(dr.mima.value=="")
	{
		alert("密码不能为空！！");
		dr.mima.focus();
		return false;
	}
}
function changeimg()
{document.getElementById('code').src='yzm.php?tm='+Math.random();}
</script>
<?php
include("connectr.php");
session_start();
		if(isset($_POST['submit']))
		{
		
			if($_POST["code"] == $_SESSION['VerifyCode'])
{
    echo '验证码正确！';
}
else
{
   echo '验证码错误！';
   die;
}
		
			$sql="SELECT * FROM `gly` WHERE yonghuming='$_POST[yonghuming]'";
			$query=mysql_query($sql);
			$arr=mysql_fetch_array($query);
			if($arr)
			{
				if($_POST["mima"]==$arr["mima"])
				{
					setcookie("yonghuming","$_POST[yonghuming]");
					setcookie("yhz","$arr[yhz]");
					echo"<script language='javascript'>location.href=('index.php');</script>";
					}
		else
		{
			echo"<script language='javascript'>alert('密码错误');</script>";
		}	 
		}
		else
		{
			echo"<script language='javascript'>alert('用户名不存在');</script>";
		}
	}
?>
<body id="userlogin_body">
<form action="login.php" method="post" name="dr" onsubmit="return aaa()">
<div id="user_login">
	<dl>
		<dd id="user_top">
			<ul>
				<li class="user_top_l"></li>
				<li class="user_top_c"></li>
				<li class="user_top_r"></li>
			</ul>
		</dd>
		<dd id="user_main">
			<ul>
				<li class="user_main_l"></li>
				<li class="user_main_c">
					<div class="user_main_box">
						<ul>
							<li class="user_main_text">用户名： </li>
							<li class="user_main_input"><input name="yonghuming" maxlength="20" id="yonghuming" class="txtusernamecssclass"> </li>
						</ul>
						<ul>
							<li class="user_main_text">密 码： </li>
							<li class="user_main_input"><input type="password" name="mima" id="mima" class="txtpasswordcssclass"> </li>
						</ul>
		<ul>
							<li class="user_main_text">验证码： </li>
							<li class="user_main_input"><input type="text"  name="code"  maxlength="4" class="yzm"/><img src="yzm.php"  id="code" onclick="changeimg()"/> </li>
						</ul>
					</div>
				</li>
				<li class="user_main_r"><input type="submit" value="登录" name="submit"  class="ibtnentercssclass"></li>
                
			</ul>
		</dd>
		<dd id="user_bottom">
			<ul>
				<li class="user_bottom_l"></li>
				<li class="user_bottom_c"></li>
				<li class="user_bottom_r"></li>
			</ul>
		</dd>
	</dl>
</div>

</form>
</body>
</html>