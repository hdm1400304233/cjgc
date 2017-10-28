<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>无标题文档</title>
</head>
<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
a{text-decoration:none;}
#demopage{width:960px;margin:0 auto;}
#demopage h2{margin:40px 0 20px 0;font-size:16px;text-align:center;font-family:"微软雅黑","黑体";color:#ff6600;}
/* slider */
.slider{margin:5px auto;width:368px;height:285px;border:1px solid #ccc;position:relative;overflow:hidden;}
.conbox{position:absolute;/*必要元素*/}
.switcher{position:absolute;bottom:10px;right:10px;float:right;z-index:99;}
.switcher a{background:#fff;border:1px solid #D00000;cursor:pointer;float:left;font-family:arial;height:18px;line-height:18px;width:18px;margin:4px;text-align:center;color:#D00000;}
.switcher a.cur,.switcher a:hover{background:#FF0000;border:1px solid #D00000;height:24px;line-height:24px;width:24px;margin:0 2px;color:#fff;font-weight:800;}
/* slider1 水平 */
#slider1 .conbox{width:9999em;}
#slider1 .conbox div{width:620px;height:340px;overflow:hidden;float:left;}
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
				<div><a href="show_zhuce.php" ><img width="368" height="285" alt="" src="images/images/images/xw3_02.gif"></a></div>
				<div><a href="" ><img width="368" height="285" alt="" src="images/images/images/pc1.png"></a></div>
				<div><a href="" ><img width="368" height="285" alt="" src="images/images/images/pc2.png"></a></div>
				<div><a href="" ><img width="368" height="285" alt="" src="images/images/images/pc3.png"></a></div>
				<div><a href="" ><img width="368" height="285" alt="" src="images/images/images/pc4.png"></a></div>
			</div>

			<div class="switcher">
				<a href="#" class="cur">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
			</div>
		</div><!--slider end-->
	</div>
<body>
</html>