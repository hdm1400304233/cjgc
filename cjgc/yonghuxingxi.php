<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>


<?php
include("connectr.php");
@$zhanghao=$_COOKIE["zhanghao"];
@$name=$_COOKIE["zhanghao"];
if($name=="")
{
	echo"<script language='javascript'>alert('请先登录');</script>";
	echo "<script language='javascript'>location.href=('show_xingxi.php');</script>";	
}
$sql="SELECT * FROM `syt` WHERE zhanghao='$zhanghao'";
$query=mysql_query($sql);
$arr=mysql_fetch_array($query);
if(isset($_POST['baocun']))
{
	//print_r($_POST);
	$sql="UPDATE `syt` SET mingzi='$_POST[mingzi]',xingbie='$_POST[sex]',email='$_POST[email]',province='$_POST[province]',city='$_POST[city]' WHERE zhanghao='$zhanghao'";
	mysql_query($sql);
	echo "<script language='javascript'>alert('保存成功');</script>";
	echo "<script language='javascript'>location.href=yonghuxingxi.php;</script>";
}
if(isset($_POST['shanchu']))
{
	$sql="DELETE FROM `syt` WHERE zhanghao='$zhanghao'";
	mysql_query($sql);
	echo "<script language='javascript'>alert(删除成功);</script>";
	echo "<script language='javascript'>location.href='tuichu.php';</script>";
}
if(isset($_POST['xgmm']))
{
	echo "<script language='javascript'>location.href='xiugaimima.php';</script>";
}
?>

<body>
<h2 align="center">用户信息</h2>
<form action="yonghuxingxi.php" name="form" method="post">
<?Php include("sserjild.php");?>
<table align="center">
<tr><td>姓名 </td><td><input type="text" name="mingzi" value="<?php echo $arr['mingzi']?>" /></td></tr>
<tr><td>性别</td><td><input type="radio" name="sex"  value="男"<?php if($arr['xingbie']=='男'){ echo "checked='checked'";}?>>男<input type="radio" name="sex" value="女" <?php if($arr['xingbie']=='女'){echo "checked='checked'";}?>>女</td></tr>
<tr><td>邮箱</td><td><input type="text" name="email" value="<?php echo $arr['email']?>" /></td></tr>
<tr>
	  <td align="right">住址：</td>
	  <td align="left">
	    <label>
          &nbsp; 
          <select name="province" onChange="SetCity()">
            <option value="<?php echo $arr['province']?>" selected><?php echo $arr['province']?></option>
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
          </select>
          省 
             
        
         <select name="city">
<option value="<?php echo $arr['city']?>" selected><?php echo $arr['city']?></option></select>市</label></td>
</tr>
<tr><td></td><td><input style="background:#0CF" type="submit" name="xgmm" value="修改密码"><input style="background:#0CF" type="submit" name="baocun" value="保存" /></td></tr> 
<tr><td></td><td><input style="background:#0CF" type="submit" name="shanchu" value="删除" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="show_xingxi.php">返回</a></td></tr> 
</table></form>    

</body>
</html>