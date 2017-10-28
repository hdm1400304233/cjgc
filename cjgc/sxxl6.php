<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="textml; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/sxxl.css" />
<title>无标题文档</title>
</head>
<?php
include("connectr.php");
?>
<body>
<DIV class="mm">
<ul id="root">
<li>
<label><a href="javascript:;">交通运输</a></label>
<ul class="two">
<li>
<label><a href="javascript:;">铁路</a></label>
<ul class="two">

<?php
$sql="SELECT * FROM `transport` WHERE chose='铁路'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
<li >
<label><a href="javascript:;">公路</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `transport` WHERE chose='公路'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
<li >
<label><a href="javascript:;">地铁</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `transport` WHERE chose='地铁'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
<li >
<label><a href="javascript:;">桥梁</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `transport` WHERE chose='桥梁'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
<li >
<label><a href="javascript:;">机场</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `transport` WHERE chose='机场'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
</ul>
</li>

<li>
<label><a href="javascript:;">能源电力</a></label>
<ul class="two">
<li>
<label><a href="javascript:;">化石能源</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `resource` WHERE chose='化石能源'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc1.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
<li >
<label><a href="javascript:;">钢铁</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `resource` WHERE chose='钢铁'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc1.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>

</ul>
</li>
<li >
<label><a href="javascript:;">核电站</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `resource` WHERE chose='核电站'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc1.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>

</ul>
</li>
<li >
<label><a href="javascript:;">水电站</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `resource` WHERE chose='水电站'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc1.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>

</ul>
</li>
<li >
<label><a href="javascript:;">风电站</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `resource` WHERE chose='风电站'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc1.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>

</ul>
</li>
<li >
<label><a href="javascript:;">能源基地</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `resource` WHERE chose='能源基地'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc1.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>

</ul>
</li>
</ul>
</li>
<li>
<label><a href="javascript:;">海外工程</a></label>
<ul class="two">
<li>
<label><a href="javascript:;">能源项目</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `foreingc` WHERE chose='能源项目'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc4.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
<li >
<label><a href="javascript:;">海外交通</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `foreingc` WHERE chose='海外交通'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc4.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
<li >
<label><a href="javascript:;">工业项目</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `foreingc` WHERE chose='工业项目'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc4.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
</ul>
</li>
<li>
<label><a href="javascript:;">科研教育</a></label>
<ul class="two">
<li>
<label><a href="javascript:;">航空航天</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `education` WHERE chose='航空航天' and three='-1'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc2.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
<li>
<label><a href="look_gc2.php?id=8">载人航天</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `education` WHERE three='载人航天'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc2.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
</ul>
</li>
<li >
<label><a href="javascript:;">科研项目</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `education` WHERE chose='科研项目'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc2.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
</ul>
</li>
<li>
<label><a href="javascript:;">城乡建设</a></label>
<ul class="two">
<li>
<label><a href="javascript:;">衣食住行</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `cxrebuilt` WHERE chose='衣食住行'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc3.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
<li >
<label><a href="javascript:;">休闲娱乐</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `cxrebuilt` WHERE chose='休闲娱乐'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc3.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
</ul>
</li>
<li>
<label><a href="javascript:;">战略规划</a></label>
<ul class="two">
<li>
<label><a href="javascript:;">工业规划</a></label>
<ul class="two">

<?php
$sql="SELECT * FROM `strategypl` WHERE chose='工业规划' and three='-1'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc5.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
<li>
<label><a href="look_gc5.php?id=1">西部大开发</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `strategypl` WHERE three='西部大开发'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc5.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</ul>
</li>
<li >
<label><a href="javascript:;">交通规划</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `strategypl` WHERE chose='交通规划'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc5.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
<li >
<label><a href="javascript:;">能源规划</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `strategypl` WHERE chose='能源规划'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc5.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
<li >
<label><a href="javascript:;">环境保护</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `strategypl` WHERE chose='环境保护'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc5.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
</ul>
</li>

<li>
<label><a href="javascript:;">工业项目</a></label>
<ul class="two">
<li>
<label><a href="javascript:;">造船基地</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `industry` WHERE chose='造船基地'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc6.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
<li >
<label><a href="javascript:;">金融中心</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `industry` WHERE chose='金融中心'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc6.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
<li >
<label><a href="javascript:;">开发新区</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `industry` WHERE chose='开发新区'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc6.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
<li >
<label><a href="javascript:;">其他项目</a></label>
<ul class="two">
<?php
$sql="SELECT * FROM `industry` WHERE chose='其他项目'";
$res1=mysql_query($sql);
while($row=mysql_fetch_array($res1))
{
?>
<li><img src="image/6_03.png" class="bb"><a href="look_gc6.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></li>
<?php } ?>
</ul>
</li>
</ul>
</li>
</ul>
</DIV>
</body>


<script type="text/javascript" >
function addEvent(el,name,fn){//绑定事件
if(el.addEventListener) return el.addEventListener(name,fn,false);
return el.attachEvent('on'+name,fn);
}
function nextnode(node){//寻找下一个兄弟并剔除空的文本节点
if(!node)return ;
if(node.nodeType == 1)
return node;
if(node.nextSibling)
return nextnode(node.nextSibling);
}
function prevnode(node){//寻找上一个兄弟并剔除空的文本节点
if(!node)return ;
if(node.nodeType == 1)
return node;
if(node.previousSibling)
return prevnode(node.previousSibling);
}
function parcheck(self,checked){//递归寻找父亲元素，并找到input元素进行操作
var par =  prevnode(self.parentNode.parentNode.parentNode.previousSibling),parspar;
if(par&&par.getElementsByTagName('input')[0]){
par.getElementsByTagName('input')[0].checked = checked;
parcheck(par.getElementsByTagName('input')[0],sibcheck(par.getElementsByTagName('input')[0]));
}
}
function sibcheck(self){//判断兄弟节点是否已经全部选中
var sbi = self.parentNode.parentNode.parentNode.childNodes,n=0;
for(var i=0;i<sbi.length;i++){
if(sbi[i].nodeType != 1)//由于孩子结点中包括空的文本节点，所以这里累计长度的时候也要算上去
n++;
else if(sbi[i].getElementsByTagName('input')[0].checked)
n++;
}
return n==sbi.length?true:false;
}
addEvent(document.getElementById('root'),'click',function(e){//绑定input点击事件，使用root根元素代理
e = e||window.event;
var target = e.target||e.srcElement;
var tp = nextnode(target.parentNode.nextSibling);
switch(target.nodeName){
case 'A'://点击A标签展开和收缩树形目录，并改变其样式会选中checkbox
if(tp&&tp.nodeName == 'UL'){
if(tp.style.display != 'block' ){
tp.style.display = 'block';
prevnode(target.parentNode.previousSibling).className = 'ren'
}else{
tp.style.display = 'none';
prevnode(target.parentNode.previousSibling).className = 'add'
}
}
break;
case 'SPAN'://点击图标只展开或者收缩
var ap = nextnode(nextnode(target.nextSibling).nextSibling);
if(ap.style.display != 'block' ){
ap.style.display = 'block';
target.className = 'ren'
}else{
ap.style.display = 'none';
target.className = 'add'
}
break;
case 'INPUT'://点击checkbox，父亲元素选中，则孩子节点中的checkbox也同时选中，孩子结点取消父元素随之取消
if(target.checked){
if(tp){
var checkbox = tp.getElementsByTagName('input');
for(var i=0;i<checkbox.length;i++)
checkbox[i].checked = true;
}
}else{
if(tp){
var checkbox = tp.getElementsByTagName('input');
for(var i=0;i<checkbox.length;i++)
checkbox[i].checked = false;
}
}
parcheck(target,sibcheck(target));//当孩子结点取消选中的时候调用该方法递归其父节点的checkbox逐一取消选中
break;
}
});
window.onload = function(){//页面加载时给有孩子结点的元素动态添加图标
var labels = document.getElementById('root').getElementsByTagName('label');
for(var i=0;i<labels.length;i++){
var span = document.createElement('span');
span.style.cssText ='display:inline-block;height:18px;vertical-align:middle;width:16px;cursor:pointer;';
span.innerHTML = ' '
span.className = 'add';
if(nextnode(labels[i].nextSibling)&&nextnode(labels[i].nextSibling).nodeName == 'UL')
labels[i].parentNode.insertBefore(span,labels[i]);
else
labels[i].className = 'rem'
}
}
</script>

</html>