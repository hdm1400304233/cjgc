<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="textml; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/css.css" rel="stylesheet" type="text/css" />
<title>无标题文档</title>
</head>
<script language="javascript">
	function qiehuan(num){
		for(var id = 0;id<=6;id++)
		{
			if(id==num)
			{
				document.getElementById("qh_con"+id).style.display="block";
				document.getElementById("mynav"+id).className="nav_on";
			}
			else
			{
				document.getElementById("qh_con"+id).style.display="none";
				document.getElementById("mynav"+id).className="";
			}
		}
	}
</script>
<script language="javascript">
function aaaa()
{ 
	if(sc.keyword.value=="")
	{
		alert("关键字不能为空！！！");
		sc.keyword.focus();
		return false;
	}
}
</script>
<form method="post" action="search3.php" name="sc" onsubmit="return aaaa()">
<div id=menu_out>
<div id=menu_in>
<div id=menu>
<UL id=nav>
<LI><A class=nav_on id=mynav0 onmouseover=javascript:qiehuan(0) href=""><SPAN>交通运输</SPAN></A></LI>

<LI class="menu_line"></LI><li><a href="" onmouseover="javascript:qiehuan(1)" id="mynav1" class="nav_off"><span>能源电力</span></a></li>
<li class="menu_line"></li><li><a href="" onmouseover="javascript:qiehuan(2)" id="mynav2" class="nav_off"><span>科研教育</span></a></li>
<li class="menu_line"></li><li><a href="" onmouseover="javascript:qiehuan(3)" id="mynav3" class="nav_off"><span>城乡建设</span></a></li>
<li class="menu_line"></li><li><a href="" onmouseover="javascript:qiehuan(4)" id="mynav4" class="nav_off"><span>海外工程</span></a></li>
<li class="menu_line"></li><li><a href="" onmouseover="javascript:qiehuan(5)" id="mynav5" class="nav_off"><span>战略规划</span></a></li>
<li class="menu_line"></li><li><a href="" onmouseover="javascript:qiehuan(6)" id="mynav6" class="nav_off"><span>工业项目</span></a></li>
</UL>
<div id=menu_con>
<div id=qh_con0 style="DISPLAY: block">
  <span>
  <form method="post" action="search3.php" name="sc" onsubmit="return aaaa()>
  <table class="tab">
	<tr><td align="left"  height="20"><input id="RBL1_0" type="radio" name="RBL1" value="1" /><label for="RBL1_0">铁路　</label><input id="RBL1_2" type="radio" name="RBL1" value="2" /><label for="RBL1_2">公路</label><input id="RBL1_4" type="radio" name="RBL1" value="3" /><label for="RBL1_4">地铁</label>	
		<input id="RBL1_1" type="radio" name="RBL1" value="4" /><label for="RBL1_1">桥梁</label><input id="RBL1_3" type="radio" name="RBL1" value="5" /><label for="RBL1_3">机场</label><input id="RBL1_5" type="radio" name="RBL1" value="6" /><label for="RBL1_5">港口</label><input id="RBL1_5" type="radio" name="RBL1" value="7" /><label for="RBL1_5">全部</label><td></tr></table>
    <div class="ss"><input  class="inputString" name="keyword" type="text" value="" size="50" >
<input class="btn" name="submit" type="submit" value="搜索"></div>

</form>
 </span>
        
</div> 
<div id=qh_con1 style="DISPLAY: none">
  <span >
  <form method="post" action="search3.php" name="sc" onsubmit="return aaaa()>
   <table>
	<tr><td align="left"  height="20">        
		<input  type="radio" name="RBL1" value="8" />化石能源<input  type="radio" name="RBL1" value="9" />钢铁<input id="RBL1_4" type="radio" name="RBL1" value="10" />核电站
	<input  type="radio" name="RBL1" value="11" />水电站<input  type="radio" name="RBL1" value="12" />风电站<input type="radio" name="RBL1" value="13" />能源基地<input  type="radio" name="RBL1" value="14" />全部</td></tr></table>
<div class="ss"> <input  class="inputString" name="keyword" type="text" value="" size="50">
<input  class="btn" name="submit" type="submit" value="搜索"></div> 
</form>
            </span>
</div> 
<div id=qh_con2 style="DISPLAY: none">
  <span>
  <form method="post" action="search3.php" name="sc" onsubmit="return aaaa()>
     <table>
	<tr><td align="left"  height="20">        
		<input id="RBL1_0" type="radio" name="RBL1" value="15" /><label for="RBL1_0">科研项目　</label><input id="RBL1_2" type="radio" name="RBL1" value="16" /><label for="RBL1_2">教育工程</label><input id="RBL1_3" type="radio" name="RBL1" value="17" /><label for="RBL1_3">航空航天</label>
 <input id="RBL1_4" type="radio" name="RBL1" value="18" /><label for="RBL1_4">全部</label></td></tr></table>
	<div class="ss"><input  class="inputString" name="keyword" type="text" value="" size="50" id="inputString2" onkeyup="lookup(this.value);" onblur="fill();">
<input  class="btn" name="submit" type="submit" value="搜索"></div> </form>
            </span>
</div> 
<div id=qh_con3 style="DISPLAY: none">
  <span >
  <form method="post" action="search3.php" name="sc" onsubmit="return aaaa()>
     <table>
	<tr><td align="left"  height="20">     
		<input id="RBL1_0" type="radio" name="RBL1" value="19" /><label for="RBL1_0">衣食住行　</label><input id="RBL1_2" type="radio" name="RBL1" value="20" /><label for="RBL1_2">休闲娱乐</label>
	<input id="RBL1_5" type="radio" name="RBL1" value="21" /><label for="RBL1_5">全部</label></td></tr></table>
 <div class="ss"> <input  class="inputString" name="keyword" type="text" value="" size="50" id="inputString3" onkeyup="lookup(this.value);" onblur="fill();">
<input  class="btn" name="submit" type="submit" value="搜索"></div> 
 </form>
            </span>
</div> 
<div id=qh_con4 style="DISPLAY: none">
  <span >
  <form method="post" action="search3.php" name="sc" onsubmit="return aaaa()>
     <table>
	<tr><td align="left"  height="20">    
		<input id="RBL1_0" type="radio" name="RBL1" value="22" /><label for="RBL1_0">能源项目　</label><input id="RBL1_0" type="radio" name="RBL1" value="23" /><label for="RBL1_0">海外交通</label><input id="RBL1_0" type="radio" name="RBL1" value="24" /><label for="RBL1_0">工业项目</label>
		<input id="RBL1_0" type="radio" name="RBL1" value="25" /><label for="RBL1_0">全部</label></td></tr></table>
	<div class="ss"><input  class="inputString" name="keyword" type="text" value="" size="50" id="inputString4" onkeyup="lookup(this.value);" onblur="fill();">
<input  class="btn" name="submit" type="submit" value="搜索"></div>
</form>
        </span>
</div>
<div id=qh_con5 style="DISPLAY: none">
  <span>
  <form method="post" action="search3.php" name="sc" onsubmit="return aaaa()>
  <table>
	<tr><td align="left"  height="20">
      <input id="RBL1_0" type="radio" name="RBL1" value="26" /><label for="RBL1_0">交通规划　</label><input id="RBL1_0" type="radio" name="RBL1" value="27" /><label for="RBL1_0">能源规划</label><input id="RBL1_0" type="radio" name="RBL1" value="28" /><label for="RBL1_0">工业规划</label>
	<input id="RBL1_0" type="radio" name="RBL1" value="29" /><label for="RBL1_0">环境保护</label><input id="RBL1_0" type="radio" name="RBL1" value="30" /><label for="RBL1_0">全部</label></td></tr></table>
    
	<div class="ss"><input  class="inputString" name="keyword" type="text" value="" size="50" id="inputString5" onkeyup="lookup(this.value);" onblur="fill();">
<input  class="btn" name="submit" type="submit" value="搜索"></div> 
</form>
        </span>
</div>
<div id=qh_con6 style="DISPLAY: none">
  <span >
  <form method="post" action="search3.php" name="sc" onsubmit="return aaaa()>
      <table>
	<tr><td align="left" height="20">  
		<input id="RBL1_0" type="radio" name="RBL1" value="31" /><label for="RBL1_0">造船基地　</label><input id="RBL1_0" type="radio" name="RBL1" value="32" /><label for="RBL1_0">金融中心</label><input id="RBL1_0" type="radio" name="RBL1" value="33" /><label for="RBL1_0">开发新区</label>
	  <input id="RBL1_0" type="radio" name="RBL1" value="34" /><label for="RBL1_0">其他项目</label><input id="RBL1_0" type="radio" name="RBL1" value="35" /><label for="RBL1_0">全部</label></td></tr></table>
<div class="ss"><input class="inputString" name="keyword" type="text" value="" size="50" id="inputString6" onkeyup="lookup(this.value);" onblur="fill();"> 
 <input  class="btn" name="submit" type="submit" value="搜索"></div>
 </form>
 </span>        
</div>
</div>
</div>
</div>
</div>
</body>
</html>