<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>添加工程</title>
</head>
<script type="text/javascript" src="/js/admin.js"></script>
<script type="text/javascript" src="/js/Jquery.js"></script>
<script charset="gbk" src="/Editor/kindeditor-min.js"></script>
<script charset="utf-8" src="/Editor/lang/zh_CN.js"></script>
<script>
function chk(){
	if (document.form.column.value==""){
	alert("请填写栏目！");
	document.form.column.focus();
	return false;
  }
if (document.form.title.value==""){
	alert("请填写标题！");
	document.form.title.focus();
	return false;
  }
}
var KE;
KindEditor.options.filterMode = false;
KindEditor.ready(function(K) {
KE = K.create('#Content',{ afterBlur: function(){this.sync();}
});
});
</script>
<?php
include("connectr.php");
@$name=$_COOKIE["yonghuming"] ;
		if($name=="")
		{
			echo "<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('login.php');</script>";
		}
		if(isset($_POST['submit']))
		   
		{  
		 //print_r($_POST);
		     switch($_POST['column'])
			 {
	 case '交通运输': $ed="transport";
	  break;
	 case '能源电力': $ed="resource";
	  break;
	 case '科研教育': $ed="education";
	  break;
	 case '城乡建设': $ed="cxrebuilt";
	  break;
	 case '海外工程': $ed="foreingc";
	  break;
	 case '战略规划': $ed="strategypl";
	 break;
    default:$ed="industry"; 
	}//默认		
			mysql_query("INSERT INTO `$ed` (`id`,`column`,`chose`,`three`,`weizhi`,`title`,`content`,`money`) VALUES ('','$_POST[column]','$_POST[chose]','$_POST[three]','$_POST[weizhi]','$_POST[title]','$_POST[content]','$_POST[money]')")or die(mysql_error());
			echo "<script language='javascript'>alert('提交成功');</script>";
			
		 switch($_POST['column'])
			 {
	 case '交通运输': echo "<script language='javascript'>location.href=('edtransport.php');</script>";
	  break;
	 case '能源电力': echo "<script language='javascript'>location.href=('edresource.php');</script>";
	  break;
	 case '科研教育': echo "<script language='javascript'>location.href=('ededucation.php');</script>";
	  break;
	 case '城乡建设': echo "<script language='javascript'>location.href=('edcxrebuilt.php');</script>";
	  break;
	 case '海外工程': echo "<script language='javascript'>location.href=('edforeingc.php');</script>";
	  break;
	 case '战略规划':echo "<script language='javascript'>location.href=('edstrategypl.php');</script>";
	 break;
    default:echo "<script language='javascript'>location.href=('edindustry.php');</script>";
	}//默认			
			
		}
	?>

<body>
<center><form action="add2.php" method="post" name="form" onsubmit="return chk();">
<?Php include("select3.php");?>
<table>
<tr><td align="right">栏目：</td><td align="left"><label> 
          <select name="column" onChange="SetChose()">
		  <option value="" selected >请选择</option>
<option value='交通运输'>交通运输</option>
<option value='能源电力'>能源电力</option>
<option value='科研教育'>科研教育</option>
<option value='城乡建设'>城乡建设</option>
<option value='海外工程'>海外工程</option>
<option value='战略规划'>战略规划</option>
<option value='工业项目'>工业项目</option>
</select> 
<select name="chose" onChange="SetThree()">
<option value="-1" selected>请选择</option></select>
<select name="three">
<option value="-1" selected>请选择</option></select>
</label></td>
</tr>
<tr><td>位置：</td><td><input name="weizhi" type="text" size="50" maxlength="50"> </td></tr>
<tr><td>金额:</td><td><input type="text" name="money" size="50"></td></tr>
<tr><td>标题：</td><td><input name="title" type="text" id="Title" size="100" maxlength="100"> </td></tr>
<tr><td>内容：</td><td><textarea id="Content" name="content" class="form-control kindeditor" style="width:800px;height:800px;"></textarea></td></tr>
</table>
<center><input name="submit" type="submit" value="提交"><input type="button" onclick="history.go(-1);" class="btn btn-info" value="返回"></center>
</form>
</body>
</html>