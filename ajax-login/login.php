<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<html>
<head>
    <title> web前端</title>
    
    <style type="text/css">
        .test{width:500px;margin: 0 auto;}
		h2{padding-left:100px;}
    </style>
</head>
<body>
<div class="test">
    <h2>注册页面</h2>
    <form action="" method="post">
        <table border="0">
            <tr>
                <td>用户名：</td><td><input type="text" class="username" id="username"></td><td><span id="usertest"></span></td>
            </tr>
            <tr>
                <td>密&nbsp;&nbsp;码：</td><td><input type="password" class="mima" id="mima"></td>
            </tr>  
            <tr>
            <td>验证码: </td><td><input type="text"  id="codes" maxlength="4" ></td><td><img src="yzm.php"  id="code" onclick="changeimg()"/></td>
            </tr>                    
            <tr><td>&nbsp;</td><td><input type="submit" name="submit" value="提交" id="sub">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="Reset" type="reset" value="重置">
            </td></tr>
        </table>
    </form>
</div>
</body>
</html>
    <script type="text/javascript" src="js/jquery-1.3.1.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script> 
    <script type="text/javascript">
	function changeimg()
   {
	   document.getElementById('code').src='yzm.php?tm='+Math.random();
   } 
    </script>