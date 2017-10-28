<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<script language="javascript">
function checkpost()
{
	if(sydr.zhanghao.value=="")
	{
		alert("账号不能为空！！！");
		sydr.zhanghao.focus();
		return false;
	}
	if(sydr.mima.value=="")
	{
		alert("密码不能为空！！");
		sydr.mima.focus();
		return false;
	}
}
</script>
<body>
<div class="lg">
</div>
<form action="show_denglu.php" name="sydr" method="post" onsubmit="return checkpost()">
<div class="zh">
用户名：
 </div>
 <div class="s1">
 <input type="text" name="zhanghao" />
</div>
<div class="mima">
密码：
 </div>
<div class="s2">
 <input type="password" name="mima"/>
</div> 
<div class="delu">
<input  type="submit" name="submit" value="登录" />
</div>
</form>
<div class="zc">
<a  class="a1" href="show_zhuce.php" >注册</a>
 </div>
<div class="gmm">
<a class="a1" href="findmima.php" >忘记密码？</a>
 </div>
</body>
</html>