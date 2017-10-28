<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="textml; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/zc.css" />
<title>无标题文档</title>
</head>
<script language="javascript">
function aaaa()
{
	 var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
	if(creator.zhanghao.value=="")
	{
		alert("账号不能为空！！！");
		creator.zhanghao.focus();
		return false;
	}
	if(creator.zhanghao.value.length<6)
	{
		alert("账号不能太短！！！");
		creator.zhanghao.focus();
		return false;
	}
		
		if(creator.mima.value=="")
	{
		alert("密码不能为空！！！");
		creator.mima.focus();
		return false;
	}
	if(creator.mima.value.length<6||creator.mima.value.length>12)
	{
		alert("密码不能为空！！！");
		creator.mima.focus();
		return false;
	}
			if(creator.remima.value=="")
	{
		alert("确认密码不能为空！！！");
		creator.remima.focus();
		return false;
	}
	if(creator.mingzi.value=="")
	{
		alert("姓名不能为空！！！");
		creator.mingzi.focus();
		return false;
	}		
	if(creator.email.value==""||!preg.test(creator.email.value))
	{
		alert("请填写正确的邮箱！！！");
		creator.email.focus();
		return false;
	}
		if(creator.mmts.value=="")
	{
		alert("密码提示不能为空！！！");
		creator.mmts.focus();
		return false;
	}
		if(creator.mmda.value=="")
	{
		alert("密码答案不能为空！！！");
		creator.mmda.focus();
		return false;
	}
}
function changeimg()
{document.getElementById('code').src='yzm.php?tm='+Math.random();}
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
<div class="lf">
<div class="wai">
<div class="li">
<?php
@$zhanghao=$_COOKIE["zhanghao"];
if($zhanghao=="")
{
	 include("show_zcdl.php");
}
else
{
include("show_dlxx.php");	
}
?>
</div>
</div>
<div class="dh1">
<div class="jt0">
</div>
<div class="zbm">数据目录导航
</div>
</div>
<div class="dh2">
<?php include("sxxl6.php");?> 
</div>
</div>
<div class="wz">
<div class="sy">首页
</div>
<div class="jt">>
</div>
<div class="yhzc">用户登录
</div>
<div class="jt1">>
</div>
<div class="yhzc0">注册
</div>
</div>
<div class="thre">
<div class="lgo">
</div>
<div class="jlzi">注册
</div>
</div>
<div class="showgc">
<?php
		session_start();
		if(isset($_POST["submit"]))
		{
			
			if($_POST["Code"] ==$_SESSION["VerifyCode"])
{
    echo '验证码正确！';
}
else
{
   echo '验证码错误！';
   die;
}
		//print_r($_POST);
			$sql="SELECT * FROM `syt` WHERE zhanghao='$_POST[zhanghao]'";
		$query=mysql_query($sql);
		$num=mysql_num_rows($query);
		if($num)
		{
			echo "<script language='javascript'>alert('账号已存在！！！')</script>";
		}
			else{
				$sql="INSERT INTO `syt`(`id`,`zhanghao`,`mima`,`mingzi`,`xingbie`,`email`,`province`,`city`,`mmts`,`mmda`)VALUES('','$_POST[zhanghao]','$_POST[mima]','$_POST[mingzi]','$_POST[xingbie]','$_POST[email]','$_POST[province]','$_POST[city]','$_POST[mmts]','$_POST[mmda]')";
		mysql_query($sql);
		echo "<script language='javascript'>alert('添加成功！！！')</script>";
		echo "<script language='javascript'>location.href=('goback.php');</script>";
			}	
			
		}
		?>
<h1 align="center" style="color:#05407a">注册</h1>
<form action="show_zhuce.php" name="form" method="post" onsubmit="return aaaa()">
<?Php include("sserjild.php");?>
<table align="center">
<tr><td width="80"  height="30" align="left">账&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号</td><td height="30"><input type="text" name="zhanghao" /><font color="red">必填</font></td></tr>
<tr><td align="left"  height="30">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</td><td  height="30"><input type="password" name="mima" /><font color="red">必填</font></td></tr>
<tr><td  height="30" align="left">确认密码</td><td  height="30"><input type="password" name="remima" /><font color="red">必填</font></td></tr>
<tr><td align="left"  height="30">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</td><td  height="30"><input type="text" name="mingzi" /><font color="red">必填</font></td></tr>
<tr><td align="left"  height="30">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别</td><td  height="30" align="left"><input type="radio" name="xingbie" checked="checked" value="男" />男<input type="radio" name="xingbie" value="女" />女</td></tr>
<tr><td  height="30" align="left">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</td><td  height="30"><input type="text" name="email" /><font color="red">必填</font></td></tr>
<tr><td  height="30" align="left">住&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址</td><td  height="30" align="left">
          <select name="province" onChange="SetCity()">
		  <option value="" selected >请选择</option>
<option value='广东'>广东</option>
<option value='广西'>广西</option>
<option value='北京'>北京</option>
<option value='海南'>海南</option>
<option value='福建'>福建</option>
<option value='天津'>天津</option>
<option value='浙江'>浙江</option>
<option value='湖北'>湖北</option>
<option value='河南'>河南</option>
<option value='河北'>河北</option>
<option value='山东'>山东</option>
<option value='山西'>山西</option>
<option value='黑龙江'>黑龙江</option>
<option value='辽宁'>辽宁</option>
<option value='上海'>上海</option>
<option value='甘肃'>甘肃</option>
<option value='青海'>青海</option>
<option value='新疆'>新疆</option>
<option value='西藏'>西藏</option>
<option value='宁夏'>宁夏</option>
<option value='四川'>四川</option>
<option value='云南'>云南</option>
<option value='吉林'>吉林</option>
<option value='内蒙古'>内蒙古</option>
<option value='陕西'>陕西</option>
<option value='安徽'>安徽</option>
<option value='贵州'>贵州</option>
<option value='江苏'>江苏</option>
<option value='重庆'>重庆</option>
<option value='湖南'>湖南</option>
<option value='江西'>江西</option>
<option value='台湾'>台湾</option>
<option value='香港'>香港</option>
<option value='澳门'>澳门</option>
</select>省 
<select name="city">
<option value="-1" selected>请选择</option></select>市</td>
</tr>
<tr><td  height="30" align="left">密码提示</td><td  height="30"><input type="text" name="mmts" /><font color="red">必填</font></td></tr>
<tr><td  height="30" align="left">密码答案</td><td  height="30"><input type="password" name="mmda" /><font color="red">必填</font></td></tr>
<tr><td  height="30" align="left">验&nbsp;&nbsp;证&nbsp;&nbsp;码</td><td  height="30" align="left"><input type="text"  name="Code" maxlength="4"/></td><td  height="30"><img src="yzm.php"  id="code" onclick="changeimg()"/></td></tr>
<tr><td  height="30"></td><td colspan="2" align="left"><input style="background:#044379" type="submit" name="submit" value="提交" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration:none" href="xingxi.php"><input  style="background:#044379" type="submit" name="fh" value="返回" /></a></td></tr></table></form>
<br/>
</div>
<?php include("bottom_clj.php");?> 
</div>
</body>
</html>