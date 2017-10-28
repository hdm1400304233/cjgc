<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="textml; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/sy.css" />
<title>网站首页</title>
</head>
<?php 
include("share1.php");
include("connectr.php");
?>
<body>
<div class="all">
<?php
include("sy_head.php");
?>

<div class="tw">
<div class="xw">
<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
a{text-decoration:none;}
#demopage{width:960px;margin:0 auto;}
/* slider */
.slider{width:366px;height:285px;border:1px solid #ccc;position:relative;overflow:hidden;}
.conbox{position:absolute;/*必要元素*/}
.switcher{position:absolute;bottom:10px;right:10px;float:right;z-index:99;}
.switcher a{background:#fff;border:1px solid #D00000;cursor:pointer;float:left;font-family:arial;height:30px;line-height:30px;width:30px;margin:4px;text-align:center;color:#D00000;}
.switcher a.cur,.switcher a:hover{background:#FF0000;border:1px solid #D00000;height:35px;line-height:35px;width:35px;margin:0 2px;color:#fff;font-weight:800;}
/* slider1 水平 */
#slider1 .conbox{width:9999em;}
#slider1 .conbox div{width:368px;height:285px;overflow:hidden;float:left;}
/* slider2 水平 */

/* slider3 淡隐淡现 */

</style>
<script type="text/javascript" src="jss/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jss/jquery.Xslider.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	// 焦点图片水平滚动
	$("#slider1").Xslider({
		// 默认配置
		affect: 'scrollx', //效果  有scrollx|scrolly|fade|none
		speed: 800, //动画速度
		space: 6000, //时间间隔
		auto: true, //自动滚动
		trigger: 'mouseover', //触发事件 注意用mouseover代替hover
		conbox: '.conbox', //内容容器id或class
		ctag: 'div', //内容标签 默认为<a>
		switcher: '.switcher', //切换触发器id或class
		stag: 'a', //切换器标签 默认为a
		current:'cur', //当前切换器样式名称
		rand:false //是否随机指定默认幻灯图片
	});
	
	
	
	
});
</script>
</head>
<body>
	<div id="demopage">
		<div id="slider1" class="slider">
			<div class="conbox">
				<div><a href="look_xw3.php?id=227" ><img width="366" height="285" alt="" src="images/images/images/pc21.jpg"></a></div>
				<div><a href="look_xw3.php?id=226" ><img width="366" height="285" alt="" src="images/images/images/pc22.jpg"></a></div>
				<div><a href="look_xw3.php?id=229" ><img width="366" height="285" alt="" src="images/images/images/pc23.jpg"></a></div>
				<div><a href="look_xw3.php?id=228" ><img width="366" height="285" alt="" src="images/images/images/pc24.jpg"></a></div>
				<div><a href="xinwen_index.php" ><img width="366" height="285" alt="" src="images/images/images/pc4.png"></a></div>
			</div>

			<div class="switcher">
				<a href="look_xw3.php?id=227" class="cur">1</a>
				<a href="look_xw3.php?id=226">2</a>
				<a href="look_xw3.php?id=229">3</a>
				<a href="look_xw3.php?id=228">4</a>
				<a href="xinwen_index.php">more</a>
			</div>
		</div><!--slider end-->
	</div> 
</div>
<div class="dl">
<?php
session_start(); 
@$zhanghao=$_COOKIE["zhanghao"];
if($zhanghao=="")
{
	 include("show_sydenglu.php");
}
else
{
include("show_sydlxx.php");	
}
?>
</div>
<div class="sch">
<?php include("xlcd2.php");?> 
</div>
<div class="d3">
<a href="tp_bf.php?id=106" ><img src="images/images/images/3d0_02.gif"></a>
</div>
<div class="sp">
<div class="xtt">
<div class="jt">
</div>
<div class="jlp">纪录片
</div>
<div class="more"><a class="a3" href="show_shipin.php">更多</a>
</div>
</div>
<div class="circle1">
</div>
<div class="circle2">
</div>
<div class="circle3">
</div>
<div class="circle4">
</div>
<div class="circle5">
</div>
<div class="circle6">
</div>
<div class="circle7">
</div>
<div class="circle8">
</div>
<div class="pm1"><a class="a4" href="tp_bf.php?id=22">港珠澳大桥</a>
</div>
<div class="pm2"><a class="a4" href="tp_bf.php?id=34">广州歌剧院</a>
</div>
<div class="pm3"><a class="a4" href="tp_bf.php?id=83">锦屏一级水电站</a>
</div>
<div class="pm4"><a class="a4" href="tp_bf.php?id=39">神十天宫对接</a>
</div>
<div class="pm5"><a class="a4" href="tp_bf.php?id=13">世博会-法国馆</a>
</div>
<div class="pm6"><a class="a4" href="tp_bf.php?id=16">世博会清明上河图</a>
</div>
<div class="pm7"><a class="a4" href="tp_bf.php?id=25">上海中心大厦</a>
</div>
<div class="pm8"><a class="a4" href="tp_bf.php?id=88">向家坝</a>
</div>
<div class="pc1">
<a href="tp_bf.php?id=22" ><img src="images/images/images/pcc_03.gif"></a>
</div>
<div class="pc2">
<a href="tp_bf.php?id=34" ><img src="images/images/images/mage1_03.gif"></a>
</div>
<div class="pc3">
<a href="tp_bf.php?id=83" ><img src="images/images/images/mag2_05.gif"></a>
</div>
<div class="pc4">
<a href="tp_bf.php?id=39" ><img src="images/images/images/mag3_07.gif"></a>
</div>
<div class="pc5">
<a href="tp_bf.php?id=13" ><img src="images/images/images/baby1_03.gif"></a>
</div>
<div class="pc6">
<a href="tp_bf.php?id=16" ><img src="images/images/images/qmsh_03.gif"></a>
</div>
<div class="pc7">
<a href="tp_bf.php?id=25" ><img src="images/images/images/pcc2_03.gif"></a>
</div>
<div class="pc8">
<a href="tp_bf.php?id=88" ><img src="images/images/images/mag6_03.gif"></a>
</div>
</div>
</div>
<div class="fou">
<div class="cd1">
<div class="cd11">
<div class="jt1">
</div>
<div class="cdz1">交通运输
</div>
<div class="more1"><a class="a3" href="show_transport.php">更多</a>
</div>
</div>
<div class="cd12">
<div class="base">
<ul class=ul1>
 <li class=b style="margin-bottom:27px">铁路&nbsp;|</li>
 <li class=b style="margin-bottom:25px">公路&nbsp;|</li>
 <li class=b style="margin-bottom:4px">地铁&nbsp;|</li>
 <li class=b style="margin-bottom:3px">桥梁&nbsp;|</li>
 <li class=b style="margin-bottom:25px">机场&nbsp;|</li>
</ul>
</div>
<div class="bg1">
<ul class=bgul>
 <li class=bgb><a class="a4" href="look_gc.php?id=4">京沪高速铁路</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=3">北京南站</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=5">福厦漳龙城际铁路</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=6">武汉火车站</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=7">哈大高速铁路</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=9">新疆喀什至和田铁路</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=12">“五纵七横”国道主干线</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=13">沪蓉高速公路</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=11">秦岭终南山隧道——我国最长公路隧道</a> </li>
 <li class=bgb style="color:#FFF">武汉地铁谷歌</li>
 <li class=bgb><a class="a4" href="look_gc.php?id=15">武汉地铁</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=14">南京地铁二号线</a></li>
 <li class=bgb style="color:#FFF">武汉地刚刚铁谷歌</li>
 <li class=bgb><a class="a4" href="look_gc.php?id=16">杭州湾跨海大桥</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=17">苏通长江大桥</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=18">港珠澳大桥</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=19">崇启大桥</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=22">首都国际机场T3航站楼</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=23">昆明新国际机场</a></li>
 <li class=bgb><a class="a4" href="look_gc.php?id=26">成都双流机场扩建工程</a> </li>
 <li class=bgb><a class="a4" href="look_gc.php?id=25">上海虹桥交通枢纽</a></li>
</ul>
</div>
</div>
</div>
<div class="cd2">
<div class="cd21">
<div class="jt2">
</div>
<div class="cdz2">能源电力
</div>
<div class="more2"><a class="a3" href="show_resource.php">更多</a>
</div>
</div>
<div class="cd22">
<div class="base1">
<ul class=ul11>
 <li class=b1 style="margin-bottom:4px">钢铁&nbsp;|</li>
 <li class=b1 style="margin-bottom:25px">核电站&nbsp;|</li>
 <li class=b1 style="margin-bottom:26px">水电站&nbsp;|</li>
 <li class=b1 style="margin-bottom:3px">风电站&nbsp;|</li>
 <li class=b1 style="margin-bottom:4px">化石能源&nbsp;|</li>
 <li class=b1 style="margin-bottom:25px">能源基地&nbsp;|</li>
</ul>
</div>
<div class="bg11">
<ul class=bgul1>
 <li class=bgb1><a class="a4" href="look_gc1.php?id=4">湛江东海岛：宝钢千万吨级钢铁基地</a> </li>
 <li class=bgb1><a class="a4" href="look_gc1.php?id=5">攀钢集团</a></li>
 <li class=bgb1><a class="a4" href="look_gc1.php?id=7">辽宁红沿河核电站</a></li>
 <li class=bgb1><a class="a4" href="look_gc1.php?id=8">浙江三门核电项目 </a></li>
 <li class=bgb1><a class="a4" href="look_gc1.php?id=9">广东阳江核电站项目</a></li>
 <li class=bgb1><a class="a4" href="look_gc1.php?id=10">山东烟台海阳核电站项目</a></li>
 <li class=bgb1><a class="a4" href="look_gc1.php?id=6">秦山核电二期扩建工程 </a></li>
 <li class=bgb1> <a class="a4" href="look_gc1.php?id=11">溪洛渡水电站</a></li>
 <li class=bgb1><a class="a4" href="look_gc1.php?id=12">向家坝水电站 </a></li>
 <li class=bgb1><a class="a4" href="look_gc1.php?id=14"> 龙滩水电站</a></li>
 <li class=bgb1> <a class="a4" href="look_gc1.php?id=13">锦屏一级、二级水电站</a></li>
 <li class=bgb1><a class="a4" href="look_gc1.php?id=15">天荒坪抽水蓄能电站</a>  </li>
 <li class=bgb1> <a class="a4" href="look_gc1.php?id=18">甘肃酒泉——世界最大风力发电基地</a> </li>
 <li class=bgb1><a class="a4" href="look_gc1.php?id=2">大连石化建成中国最大炼油基地</a>  </li>
 <li class=bgb1><a class="a4" href="look_gc1.php?id=1">四川宣汉普光特大气田 </a></li>
 <li class=bgb1><a class="a4" href="look_gc1.php?id=17">陕北能源化工基地 </a></li>
</ul>
</div>
</div>
</div>
<div class="cd3">
<div class="cd31">
<div class="jt3">
</div>
<div class="cdz3">战略规划
</div>
<div class="more3"><a class="a3" href="show_strategypl.php">更多</a>
</div>
</div>
<div class="cd32">
<div class="base2">
<ul class=ul12>
 <li class=b2 style="margin-bottom:26px">交通规划&nbsp;|</li>
 <li class=b2 style="margin-bottom:3px">能源规划&nbsp;|</li>
 <li class=b2 style="margin-bottom:4px">工业规划&nbsp;|</li>
 <li class=b2>环境保护&nbsp;|</li>
</ul>
</div>
<div class="bg12">
<ul class=bgul2>
<li class=bgb2><a class="a4" href="look_gc5.php?id=25">上海城市轨道交通规划</a></li>
 <li class=bgb2><a class="a4" href="look_gc5.php?id=22">中国《中长期铁路网规划》</a></li>
 <li class=bgb2><a class="a4" href="look_gc5.php?id=26">北京城市轨道交通规划</a></li>
 <li class=bgb2><a class="a4" href="look_gc5.php?id=24">十一五西藏公路交通规划</a></li>
 <li class=bgb2><a class="a4" href="look_gc5.php?id=15">“南水北调”工程</a></li>
 <li class=bgb2><a class="a4" href="look_gc5.php?id=16">川气东送工程 </a></li>
 <li class=bgb2><a class="a4" href="look_gc5.php?id=17">西电东送工程</a></li>
 <li class=bgb2><a class="a4" href="look_gc5.php?id=1">西部大开发</a></li>
 <li class=bgb2><a class="a4" href="look_gc5.php?id=10">丝绸之路复兴计划</a></li>
 <li class=bgb2><a class="a4" href="look_gc5.php?id=13">三北防护林体系工程</a></li>
 <li class=bgb2><a class="a4" href="look_gc5.php?id=14">沿海防护林工程 </a></li>
</ul>
</div>
</div>
</div>
<div class="cd4">
<div class="cd41">
<div class="jt4">
</div>
<div class="cdz4">工业项目
</div>
<div class="more4"><a class="a3" href="show_industry.php">更多</a>
</div>
</div>
<div class="cd42">
<div class="base3">
<ul class=ul13>
 <li class=b3 style="margin-bottom:3px">造船基地&nbsp;|</li>
 <li class=b3 style="margin-bottom:3px">金融中心&nbsp;|</li>
 <li class=b3 style="margin-bottom:4px">开发新区&nbsp;|</li>
 <li class=b3>其他项目&nbsp;|</li>
</ul>
</div>
<div class="bg13">
<ul class=bgul3>
 <li class=bgb3><a class="a4" href="look_gc6.php?id=1">长兴岛造船基地</a></li>
 <li class=bgb3><a class="a4" href="look_gc6.php?id=2">广州南沙龙穴造船基地</a></li>
 <li class=bgb3><a class="a4" href="look_gc6.php?id=3">上海中心大厦</a></li>
 <li class=bgb3><a class="a4" href="look_gc6.php?id=4">上海环球金融中心</a></li>
 <li class=bgb3><a class="a4" href="look_gc6.php?id=7">曹妃甸开发区</a></li>
 <li class=bgb3><a class="a4" href="look_gc6.php?id=8">上海临港新城</a></li>
 <li class=bgb3><a class="a4" href="look_gc6.php?id=9">天津临港产业区</a></li>
 <li class=bgb3><a class="a4" href="look_gc6.php?id=10">天津滨海新区</a></li>
 <li class=bgb style="color:#FFF">武汉地铁谷歌</li>
 <li class=bgb3><a class="a4" href="look_gc6.php?id=5">海南电网跨海工程</a></li>
 <li class=bgb3><a class="a4" href="look_gc6.php?id=6">中央电视台总部大楼 </a></li>
</ul>
</div>
</div>
</div>
<div class="cd5">
<div class="cd51">
<div class="jt5">
</div>
<div class="cdz5">海外工程
</div>
<div class="more5"><a class="a3" href="show_foreighgc.php">更多</a>
</div>
</div>
<div class="cd52">
<div class="base4">
<ul class=ul14>
 <li class=b4 style="margin-bottom:4px">能源项目&nbsp;|</li>
 <li class=b4 style="margin-bottom:3px">海外交通&nbsp;|</li>
 <li class=b4 >工业项目&nbsp;|</li>
</ul>
</div>
<div class="bg14">
<ul class=bgul4>
<li class=bgb5><a class="a4" href="look_gc4.php?id=1">伊朗亚达瓦兰油田</a>
<li class=bgb5><a class="a4" href="look_gc4.php?id=2">中石油苏丹石油项目</a>
<li class=bgb5><a class="a4" href="look_gc4.php?id=5">亚洲公路网</a></li>
 <li class=bgb5><a class="a4" href="look_gc4.php?id=8">中国承建利比亚沿海铁路项目</a></li>
 <li class=bgb5><a class="a4" href="look_gc4.php?id=6">俄罗斯波罗的海明珠工程</a></li> 
</ul>
</div>
</div>
</div>
<div class="cd6">
<div class="cd61">
<div class="jt6">
</div>
<div class="cdz6">科研教育
</div>
<div class="more6"><a class="a3" href="show_education.php">更多</a>
</div>
</div>
<div class="cd62">
<div class="base5">
<ul class=ul15>
 <li class=b5 style="margin-bottom:49px">科研项目&nbsp;|</li>
 <li class=b5 style="margin-bottom:49px">载入航天&nbsp;|</li>
 <li class=b5 style="margin-bottom:49px">教育工程&nbsp;|</li>
</ul>
</div>
<div class="bg15">
<ul class=bgul5>
 <li class=bgb4><a class="a4" href="look_gc2.php?id=4">世界最大500米口径球面射电望远镜</a></li>
 <li class=bgb5 style="color:#FFF">天宫一号呵呵呵好空旷旷</li>
 <li class=bgb4><a class="a4" href="look_gc2.php?id=1">八横八纵大容量光纤通信网</a></li>
 <li class=bgb5 style="color:#FFF">天宫一号呵呵呵好</li>
 <li class=bgb5><a class="a4" href="look_gc2.php?id=5">中国2010年上海世界博览会</a></li>
 <li class=bgb4><a class="a4" href="look_gc2.php?id=2">上海光源实验室</a> </li>
 <li class=bgb5 style="color:#FFF">天宫一号呵呵呵好</li>
 <li class=bgb5><a class="a4" href="look_gc2.php?id=9">天宫一号</a></li>
 <li class=bgb5><a class="a4" href="look_gc2.php?id=21">长征一号火箭</li>
 <li class=bgb5><a class="a4" href="look_gc2.php?id=22">航天飞机</li>
  <li class=bgb5 style="color:#FFF">天宫一号呵呵呵好空旷旷</li>
  <li class=bgb5><a class="a4" href="look_gc2.php?id=17">嫦娥工程</a></li>
  <li class=bgb5><a class="a4" href="look_gc2.php?id=14">空间站 </a></li>
   <li class=bgb5><a class="a4" href="look_gc2.php?id=13">航天母舰 </a></li>
    <li class=bgb5 style="color:#FFF">天宫一号呵呵呵好空旷旷</li>
 <li class=bgb5><a class="a4" href="look_gc2.php?id=20">大推力火箭产业化基地  </li>
 <li class=bgb5><a class="a4" href="look_gc2.php?id=19">海南文昌航天发射场 </a></li>
  <li class=bgb5><a class="a4" href="look_gc2.php?id=25">免除全国1.5亿学生学杂费  </li>
 <li class=bgb5><a class="a4" href="look_gc2.php?id=26"> 四川灾后重建</a></li>
</ul>
</div>
</div>
</div>
<div class="cd7">
<div class="cd71">
<div class="jt7">
</div>
<div class="cdz7">城乡建设
</div>
<div class="more7"><a class="a3" href="show_cxrebuilt.php">更多</a>
</div>
</div>
<div class="cd72">
<div class="base6">
<ul class=ul16>
 <li class=b6 style="margin-bottom:3px">衣食住行&nbsp;|</li>
 <li class=b6 >休闲娱乐&nbsp;|</li>
</ul>
</div>
<div class="bg16">
<ul class=bgul6>
 <li class=bgb6><a class="a4" href="look_gc3.php?id=2">全国棚户区改造工程</a> </li>
 <li class=bgb6><a class="a4" href="look_gc3.php?id=1">万村千乡市场工程 </a></li>
 <li class=bgb6><a class="a4" href="look_gc3.php?id=5">农村“村村通”工程</a></li>
 <li class=bgb6><a class="a4" href="look_gc3.php?id=6">农村电影放映工程</a></li>
</ul>
</div>
</div>
</div>
</div>
<?php include("bottom_clj.php");?> 
<div class="htdl"><a class="a5" href="admin/login.php">后台登录</a>
</div>
</div>
</body>
</html>