<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>
</head>

<body>
<script language="javascript">
function update_province( CatID1, subTypeForm ){
subTypeForm.length=0;
switch(CatID1){
case "-1":
subTypeForm.options[0]=new Option("--------","-1");
subTypeForm.options[0].selected=true;break;
case "0"://中国
subTypeForm.options[0]=new Option("广东","1");
subTypeForm.options[1]=new Option("广西","2");
subTypeForm.options[2]=new Option("北京","3");
subTypeForm.options[3]=new Option("海南","4");
subTypeForm.options[4]=new Option("福建","5");
subTypeForm.options[5]=new Option("天津","6");
subTypeForm.options[6]=new Option("浙江","7");
subTypeForm.options[7]=new Option("湖北","8");
subTypeForm.options[8]=new Option("河南","9");
subTypeForm.options[9]=new Option("河北","10");
subTypeForm.options[10]=new Option("山东","11");
subTypeForm.options[11]=new Option("山西","12");
subTypeForm.options[12]=new Option("黑龙江","13");
subTypeForm.options[13]=new Option("辽宁","14");
subTypeForm.options[14]=new Option("上海","15");
subTypeForm.options[15]=new Option("甘肃","16");
subTypeForm.options[16]=new Option("青海","17");
subTypeForm.options[17]=new Option("新疆","18");
subTypeForm.options[18]=new Option("西藏","19");
subTypeForm.options[19]=new Option("宁夏","20");
subTypeForm.options[20]=new Option("四川","21");
subTypeForm.options[21]=new Option("云南","22");
subTypeForm.options[22]=new Option("吉林","23");
subTypeForm.options[23]=new Option("内蒙古","24");
subTypeForm.options[24]=new Option("陕西","25");
subTypeForm.options[25]=new Option("安徽","26");
subTypeForm.options[26]=new Option("贵州","27");
subTypeForm.options[27]=new Option("江苏","28");
subTypeForm.options[28]=new Option("重庆","29");
subTypeForm.options[29]=new Option("湖南","30");
subTypeForm.options[30]=new Option("江西","31");
subTypeForm.options[32]=new Option("台湾","32");
subTypeForm.options[33]=new Option("香港","33");
subTypeForm.options[34]=new Option("澳门","34");

subTypeForm.options[0].selected=true;
break;
}
return -1;
}
function update_city( CatID1, CatID2, subTypeForm ){
subTypeForm.length=0;
switch(CatID1){
case "-1":
subTypeForm.options[0]=new Option("--------","-1");
subTypeForm.options[0].selected=true;break;
case "0"://中国
switch ( CatID2 ){
case "浙江":
subTypeForm.options[0]=new Option("杭州","杭州");
subTypeForm.options[1]=new Option("宁波","宁波");
subTypeForm.options[2]=new Option("温州","温州");
subTypeForm.options[3]=new Option("绍兴","绍兴");
subTypeForm.options[4]=new Option("金华","金华");
subTypeForm.options[5]=new Option("嘉兴","嘉兴");
subTypeForm.options[6]=new Option("衢州","衢州");
subTypeForm.options[7]=new Option("丽水","丽水");
subTypeForm.options[8]=new Option("上虞","上虞");
subTypeForm.options[9]=new Option("舟山","舟山");
subTypeForm.options[10]=new Option("台州","台州");
subTypeForm.options[11]=new Option("临安","临安");
subTypeForm.options[0].selected=true;
break;
case "广东":
subTypeForm.options[0]=new Option("广州","广州");
subTypeForm.options[1]=new Option("深圳","深圳");
subTypeForm.options[2]=new Option("珠海","珠海");
subTypeForm.options[3]=new Option("韶关","韶关");
subTypeForm.options[4]=new Option("潮州","潮州");
subTypeForm.options[5]=new Option("汕头","汕头");
subTypeForm.options[6]=new Option("肇庆","肇庆");
subTypeForm.options[7]=new Option("湛江","湛江");
subTypeForm.options[8]=new Option("佛山","佛山");
subTypeForm.options[9]=new Option("新会","新会");
subTypeForm.options[10]=new Option("河源","河源");
subTypeForm.options[11]=new Option("潮阳","潮阳");
subTypeForm.options[12]=new Option("揭阳","揭阳");
subTypeForm.options[13]=new Option("南海","南海");
subTypeForm.options[0].selected=true;
break;
case "广西":
subTypeForm.options[0]=new Option("南宁","南宁");
subTypeForm.options[1]=new Option("柳州","柳州");
subTypeForm.options[2]=new Option("桂林","桂林");
subTypeForm.options[3]=new Option("北海","北海");
subTypeForm.options[4]=new Option("合山","合山");
subTypeForm.options[5]=new Option("凭祥","凭祥");
subTypeForm.options[6]=new Option("梧州","梧州");
subTypeForm.options[7]=new Option("玉林","玉林");
subTypeForm.options[0].selected=true;
break;
case "北京":
subTypeForm.options[0]=new Option("北京","北京");
subTypeForm.options[0].selected=true;
break;
case "海南":
subTypeForm.options[0]=new Option("海口","海口");
subTypeForm.options[1]=new Option("三亚","三亚");
subTypeForm.options[2]=new Option("琼海","琼海");
subTypeForm.options[3]=new Option("儋州","儋州");
subTypeForm.options[4]=new Option("通什","通什");
subTypeForm.options[0].selected=true;
break;
case "福建":
subTypeForm.options[0]=new Option("福州","福州");
subTypeForm.options[1]=new Option("厦门","厦门");
subTypeForm.options[2]=new Option("泉州","泉州");
subTypeForm.options[3]=new Option("漳州","漳州");
subTypeForm.options[4]=new Option("南平","南平");
subTypeForm.options[5]=new Option("三明","三明");
subTypeForm.options[6]=new Option("莆田","莆田");
subTypeForm.options[7]=new Option("龙岩","龙岩");
subTypeForm.options[8]=new Option("晋江","晋江");
subTypeForm.options[9]=new Option("武夷山","武夷山");
subTypeForm.options[10]=new Option("永安","永安");
subTypeForm.options[11]=new Option("石狮","石狮");
subTypeForm.options[0].selected=true;
break;
case "天津":
subTypeForm.options[0]=new Option("天津","天津");
subTypeForm.options[0].selected=true;
break;
case "湖南":
subTypeForm.options[0]=new Option("长沙","长沙");
subTypeForm.options[1]=new Option("衡阳","衡阳");
subTypeForm.options[2]=new Option("邵阳","邵阳");
subTypeForm.options[3]=new Option("湘潭","湘潭");
subTypeForm.options[4]=new Option("岳阳","岳阳");
subTypeForm.options[5]=new Option("株洲","株洲");
subTypeForm.options[6]=new Option("常德","常德");
subTypeForm.options[7]=new Option("津市","津市");
subTypeForm.options[8]=new Option("耒阳","耒阳");
subTypeForm.options[9]=new Option("醴陵","醴陵");
subTypeForm.options[10]=new Option("益阳","益阳");
subTypeForm.options[11]=new Option("张家界","张家界");
subTypeForm.options[0].selected=true;
break;
case "湖北":
subTypeForm.options[0]=new Option("武汉","武汉");
subTypeForm.options[1]=new Option("黄石","黄石");
subTypeForm.options[2]=new Option("荆沙","荆沙");
subTypeForm.options[3]=new Option("十堰","十堰");
subTypeForm.options[4]=new Option("襄樊","襄樊");
subTypeForm.options[5]=new Option("宜昌","宜昌");
subTypeForm.options[6]=new Option("鄂州","鄂州");
subTypeForm.options[7]=new Option("黄冈","黄冈");
subTypeForm.options[8]=new Option("随州","随州");
subTypeForm.options[9]=new Option("荆门","荆门");
subTypeForm.options[0].selected=true;
break;
case "河南":
subTypeForm.options[0]=new Option("郑州","郑州");
subTypeForm.options[1]=new Option("焦作","焦作");
subTypeForm.options[2]=new Option("商丘","商丘");
subTypeForm.options[3]=new Option("洛阳","洛阳");
subTypeForm.options[4]=new Option("平顶山","平顶山");
subTypeForm.options[5]=new Option("鹤壁","鹤壁");
subTypeForm.options[6]=new Option("新乡","新乡");
subTypeForm.options[7]=new Option("安阳","安阳");
subTypeForm.options[8]=new Option("开封","开封");
subTypeForm.options[9]=new Option("漯河","漯河");
subTypeForm.options[10]=new Option("南阳","南阳");
subTypeForm.options[11]=new Option("濮阳","濮阳");
subTypeForm.options[12]=new Option("三门峡","三门峡");
subTypeForm.options[13]=new Option("信阳","信阳");
subTypeForm.options[14]=new Option("许昌","许昌");
subTypeForm.options[15]=new Option("驻马店","驻马店");
subTypeForm.options[16]=new Option("周口","周口");
subTypeForm.options[0].selected=true;
break;
case "河北":
subTypeForm.options[0]=new Option("石家庄","石家庄");
subTypeForm.options[1]=new Option("唐山","唐山");
subTypeForm.options[2]=new Option("邯郸","邯郸");
subTypeForm.options[3]=new Option("秦皇岛","秦皇岛");
subTypeForm.options[4]=new Option("邢台","邢台");
subTypeForm.options[5]=new Option("保定","保定");
subTypeForm.options[6]=new Option("张家口","张家口");
subTypeForm.options[7]=new Option("承德","承德");
subTypeForm.options[8]=new Option("沧州","沧州");
subTypeForm.options[9]=new Option("定州","定州");
subTypeForm.options[10]=new Option("廊坊","廊坊");
subTypeForm.options[11]=new Option("涿州","涿州");
subTypeForm.options[12]=new Option("遵化","遵化");
subTypeForm.options[13]=new Option("衡水","衡水");
subTypeForm.options[0].selected=true;
break;
case "山东":
subTypeForm.options[0]=new Option("济南","济南");
subTypeForm.options[1]=new Option("青岛","青岛");
subTypeForm.options[2]=new Option("淄博","淄博");
subTypeForm.options[3]=new Option("烟台","烟台");
subTypeForm.options[4]=new Option("济宁","济宁");
subTypeForm.options[5]=new Option("德州","德州");
subTypeForm.options[6]=new Option("泰安","泰安");
subTypeForm.options[7]=new Option("潍坊","潍坊");
subTypeForm.options[8]=new Option("东营","东营");
subTypeForm.options[9]=new Option("枣庄","枣庄");
subTypeForm.options[10]=new Option("莱芜","莱芜");
subTypeForm.options[11]=new Option("聊城","聊城");
subTypeForm.options[12]=new Option("青州","青州");
subTypeForm.options[13]=new Option("日照","日照");
subTypeForm.options[14]=new Option("威海","威海");
subTypeForm.options[15]=new Option("曲阜","曲阜");
subTypeForm.options[16]=new Option("兖州","兖州");
subTypeForm.options[17]=new Option("荷泽","荷泽");
subTypeForm.options[18]=new Option("即墨","即墨");
subTypeForm.options[19]=new Option("荣成","荣成");
subTypeForm.options[20]=new Option("邹城","邹城");
subTypeForm.options[21]=new Option("崂山","崂山");
subTypeForm.options[22]=new Option("泰安","泰安");
subTypeForm.options[0].selected=true;
break;
case "山西":
subTypeForm.options[0]=new Option("太原","太原");
subTypeForm.options[1]=new Option("临汾","临汾");
subTypeForm.options[2]=new Option("大同","大同");
subTypeForm.options[3]=new Option("阳泉","阳泉");
subTypeForm.options[4]=new Option("晋城","晋城");
subTypeForm.options[5]=new Option("长治","长治");
subTypeForm.options[6]=new Option("忻州","忻州");
subTypeForm.options[7]=new Option("榆次","榆次");
subTypeForm.options[8]=new Option("侯马","侯马");
subTypeForm.options[9]=new Option("运城","运城");
subTypeForm.options[10]=new Option("朔州","朔州");
subTypeForm.options[11]=new Option("新绛","新绛");
subTypeForm.options[12]=new Option("代县","代县");
subTypeForm.options[13]=new Option("平遥","平遥");
subTypeForm.options[14]=new Option("祁县","祁县");
subTypeForm.options[0].selected=true;
break;
case "黑龙江":
subTypeForm.options[0]=new Option("哈尔滨","哈尔滨");
subTypeForm.options[1]=new Option("大庆","大庆");
subTypeForm.options[2]=new Option("佳木斯","佳木斯");
subTypeForm.options[3]=new Option("牡丹江","牡丹江");
subTypeForm.options[4]=new Option("齐齐哈尔","齐齐哈尔");
subTypeForm.options[5]=new Option("伊春","伊春");
subTypeForm.options[6]=new Option("绥化","绥化");
subTypeForm.options[7]=new Option("黑河","黑河");
subTypeForm.options[8]=new Option("五大连","五大连");
subTypeForm.options[9]=new Option("绥芬河","绥芬河");
subTypeForm.options[0].selected=true;
break;
case "辽宁":
subTypeForm.options[0]=new Option("沈阳","沈阳");
subTypeForm.options[1]=new Option("锦州","锦州");
subTypeForm.options[2]=new Option("丹东","丹东");
subTypeForm.options[3]=new Option("大连","大连");
subTypeForm.options[4]=new Option("盘锦","盘锦");
subTypeForm.options[5]=new Option("鞍山","鞍山");
subTypeForm.options[6]=new Option("抚顺","抚顺");
subTypeForm.options[7]=new Option("本溪","本溪");
subTypeForm.options[8]=new Option("营口","营口");
subTypeForm.options[9]=new Option("铁岭","铁岭");
subTypeForm.options[10]=new Option("朝阳","朝阳");
subTypeForm.options[11]=new Option("东港","东港");
subTypeForm.options[12]=new Option("海城","海城");
subTypeForm.options[13]=new Option("葫芦岛","葫芦岛");
subTypeForm.options[14]=new Option("辽阳","辽阳");
subTypeForm.options[15]=new Option("兴城","兴城");
subTypeForm.options[0].selected=true;
break;
case "上海":
subTypeForm.options[0]=new Option("上海","上海");
subTypeForm.options[0].selected=true;
break;
case "甘肃":
subTypeForm.options[0]=new Option("兰州","兰州");
subTypeForm.options[1]=new Option("嘉峪关","嘉峪关");
subTypeForm.options[2]=new Option("金昌","金昌");
subTypeForm.options[3]=new Option("玉门","玉门");
subTypeForm.options[4]=new Option("天水","天水");
subTypeForm.options[5]=new Option("白银","白银");
subTypeForm.options[6]=new Option("敦煌","敦煌");
subTypeForm.options[7]=new Option("武威","武威");
subTypeForm.options[8]=new Option("张掖","张掖");
subTypeForm.options[9]=new Option("平凉","平凉");
subTypeForm.options[10]=new Option("临夏","临夏");
subTypeForm.options[11]=new Option("酒泉","酒泉");
subTypeForm.options[12]=new Option("西峰","西峰");
subTypeForm.options[0].selected=true;
break;
case "青海":
subTypeForm.options[0]=new Option("西宁","西宁");
subTypeForm.options[1]=new Option("德令哈","德令哈");
subTypeForm.options[2]=new Option("格尔木","格尔木");
subTypeForm.options[3]=new Option("恰卜恰","恰卜恰");
subTypeForm.options[4]=new Option("湟源","湟源");
subTypeForm.options[5]=new Option("同仁","同仁");
subTypeForm.options[0].selected=true;
break;
case "新疆":
subTypeForm.options[0]=new Option("乌鲁木齐","乌鲁木齐");
subTypeForm.options[1]=new Option("克拉玛依","克拉玛依");
subTypeForm.options[2]=new Option("吐鲁番","吐鲁番");
subTypeForm.options[3]=new Option("石河子","石河子");
subTypeForm.options[4]=new Option("阿勒泰","阿勒泰");
subTypeForm.options[5]=new Option("阿克苏","阿克苏");
subTypeForm.options[6]=new Option("库尔勒","库尔勒");
subTypeForm.options[7]=new Option("阿图什","阿图什");
subTypeForm.options[8]=new Option("奎屯","奎屯");
subTypeForm.options[9]=new Option("伊宁","伊宁");
subTypeForm.options[10]=new Option("米泉","米泉");
subTypeForm.options[11]=new Option("塔城","塔城");
subTypeForm.options[12]=new Option("喀什","喀什");
subTypeForm.options[13]=new Option("哈密","哈密");
subTypeForm.options[14]=new Option("昌吉","昌吉");
subTypeForm.options[15]=new Option("博乐","博乐");
subTypeForm.options[16]=new Option("和田","和田");
subTypeForm.options[17]=new Option("阜康","阜康");
subTypeForm.options[0].selected=true;
break;
case "西藏":
subTypeForm.options[0]=new Option("拉萨","拉萨");
subTypeForm.options[1]=new Option("日喀则","日喀则");
subTypeForm.options[2]=new Option("林芝","林芝");
subTypeForm.options[3]=new Option("昌都","昌都");
subTypeForm.options[4]=new Option("那曲","那曲");
subTypeForm.options[5]=new Option("罗布林卡","罗布林卡");
subTypeForm.options[0].selected=true;
break;
case "宁夏":
subTypeForm.options[0]=new Option("银川","银川");
subTypeForm.options[1]=new Option("石嘴山","石嘴山");
subTypeForm.options[2]=new Option("吴忠","吴忠");
subTypeForm.options[3]=new Option("青铜峡","青铜峡");
subTypeForm.options[4]=new Option("固原","固原");
subTypeForm.options[0].selected=true;
break;
case "四川":
subTypeForm.options[0]=new Option("成都","成都");
subTypeForm.options[1]=new Option("泸州","泸州");
subTypeForm.options[2]=new Option("攀枝花","攀枝花");
subTypeForm.options[3]=new Option("自贡","自贡");
subTypeForm.options[4]=new Option("阆中","阆中");
subTypeForm.options[5]=new Option("乐山","乐山");
subTypeForm.options[6]=new Option("宜宾","宜宾");
subTypeForm.options[7]=new Option("达川","达川");
subTypeForm.options[8]=new Option("华蓥","华蓥");
subTypeForm.options[9]=new Option("江油","江油");
subTypeForm.options[10]=new Option("南充","南充");
subTypeForm.options[11]=new Option("万县","万县");
subTypeForm.options[12]=new Option("西昌","西昌");
subTypeForm.options[13]=new Option("雅安","雅安");
subTypeForm.options[14]=new Option("广元","广元");
subTypeForm.options[15]=new Option("都江堰","都江堰");
subTypeForm.options[16]=new Option("康定","康定");
subTypeForm.options[17]=new Option("松潘","松潘");
subTypeForm.options[18]=new Option("绵阳","绵阳");
subTypeForm.options[0].selected=true;
break;
case "云南":
subTypeForm.options[0]=new Option("昆明","昆明");
subTypeForm.options[1]=new Option("大理","大理");
subTypeForm.options[2]=new Option("东川","东川");
subTypeForm.options[3]=new Option("个旧","个旧");
subTypeForm.options[4]=new Option("开远","开远");
subTypeForm.options[5]=new Option("景洪","景洪");
subTypeForm.options[6]=new Option("瑞丽","瑞丽");
subTypeForm.options[7]=new Option("畹町","畹町");
subTypeForm.options[8]=new Option("昭通","昭通");
subTypeForm.options[9]=new Option("玉溪","玉溪");
subTypeForm.options[10]=new Option("楚雄","楚雄");
subTypeForm.options[11]=new Option("曲靖","曲靖");
subTypeForm.options[12]=new Option("保山","保山");
subTypeForm.options[13]=new Option("思茅","思茅");
subTypeForm.options[14]=new Option("宣威","宣威");
subTypeForm.options[15]=new Option("安宁","安宁");
subTypeForm.options[16]=new Option("建水","建水");

subTypeForm.options[0].selected=true;
break;
case "吉林":
subTypeForm.options[0]=new Option("长春","长春");
subTypeForm.options[1]=new Option("吉林","吉林");
subTypeForm.options[2]=new Option("辽源","辽源");
subTypeForm.options[3]=new Option("四平","四平");
subTypeForm.options[4]=new Option("通化","通化");
subTypeForm.options[5]=new Option("白城","白城");
subTypeForm.options[6]=new Option("白山","白山");
subTypeForm.options[7]=new Option("珲春","珲春");
subTypeForm.options[8]=new Option("集安","集安");
subTypeForm.options[9]=new Option("图们","图们");
subTypeForm.options[10]=new Option("延吉","延吉");

subTypeForm.options[0].selected=true;
break;
case "内蒙古":
subTypeForm.options[0]=new Option("呼和浩特","呼和浩特");
subTypeForm.options[1]=new Option("包头","包头");
subTypeForm.options[2]=new Option("乌海","乌海");
subTypeForm.options[3]=new Option("赤峰","赤峰");
subTypeForm.options[4]=new Option("东胜","东胜");
subTypeForm.options[5]=new Option("二连浩特","二连浩特");
subTypeForm.options[6]=new Option("满洲里","满洲里");
subTypeForm.options[7]=new Option("通辽","通辽");
subTypeForm.options[8]=new Option("锡林浩特","锡林浩特");
subTypeForm.options[9]=new Option("根河","根河");
subTypeForm.options[0].selected=true;
break;
case "陕西":
subTypeForm.options[0]=new Option("西安","西安");
subTypeForm.options[1]=new Option("铜川","铜川");
subTypeForm.options[2]=new Option("宝鸡","宝鸡");
subTypeForm.options[3]=new Option("汉中","汉中");
subTypeForm.options[4]=new Option("渭南","渭南");
subTypeForm.options[5]=new Option("咸阳","咸阳");
subTypeForm.options[6]=new Option("延安","延安");
subTypeForm.options[7]=new Option("榆林","榆林");
subTypeForm.options[8]=new Option("韩城","韩城");
subTypeForm.options[9]=new Option("安康","安康");
subTypeForm.options[10]=new Option("华阴","华阴");
subTypeForm.options[11]=new Option("商州","商州");
subTypeForm.options[12]=new Option("兴平","兴平");
subTypeForm.options[0].selected=true;
break;
case "安徽":
subTypeForm.options[0]=new Option("合肥","合肥");
subTypeForm.options[1]=new Option("淮北","淮北");
subTypeForm.options[2]=new Option("蚌埠","蚌埠");
subTypeForm.options[3]=new Option("马鞍山","马鞍山");
subTypeForm.options[4]=new Option("黄山","黄山");
subTypeForm.options[5]=new Option("安庆","安庆");
subTypeForm.options[6]=new Option("淮南","淮南");
subTypeForm.options[7]=new Option("铜陵","铜陵");
subTypeForm.options[8]=new Option("芜湖","芜湖");
subTypeForm.options[9]=new Option("亳州","亳州");
subTypeForm.options[10]=new Option("巢湖","巢湖");
subTypeForm.options[11]=new Option("滁州","滁州");
subTypeForm.options[12]=new Option("阜阳","阜阳");
subTypeForm.options[13]=new Option("贵池","贵池");
subTypeForm.options[14]=new Option("界首","界首");
subTypeForm.options[15]=new Option("六安","六安");
subTypeForm.options[16]=new Option("明光","明光");
subTypeForm.options[17]=new Option("宿州","宿州");
subTypeForm.options[18]=new Option("天长","天长");
subTypeForm.options[19]=new Option("宣州","宣州");

subTypeForm.options[0].selected=true;
break;
case "贵州":
subTypeForm.options[0]=new Option("贵阳","贵阳");
subTypeForm.options[1]=new Option("安顺","安顺");
subTypeForm.options[2]=new Option("六盘水","六盘水");
subTypeForm.options[3]=new Option("遵义","遵义");
subTypeForm.options[4]=new Option("凯里","凯里");
subTypeForm.options[5]=new Option("都匀","都匀");
subTypeForm.options[6]=new Option("铜仁","铜仁");
subTypeForm.options[7]=new Option("兴义","兴义");
subTypeForm.options[8]=new Option("清镇","清镇");
subTypeForm.options[9]=new Option("毕节","毕节");
subTypeForm.options[10]=new Option("赤水","赤水");
subTypeForm.options[11]=new Option("仁怀","仁怀");
subTypeForm.options[12]=new Option("镇远","镇远");
subTypeForm.options[0].selected=true;
break;
case "江苏":
subTypeForm.options[0]=new Option("南京","南京");
subTypeForm.options[1]=new Option("徐州","徐州");
subTypeForm.options[2]=new Option("连云港","连云港");
subTypeForm.options[3]=new Option("苏州","苏州");
subTypeForm.options[4]=new Option("无锡","无锡");
subTypeForm.options[5]=new Option("常州","常州");
subTypeForm.options[6]=new Option("常熟","常熟");
subTypeForm.options[7]=new Option("淮安","淮安");
subTypeForm.options[8]=new Option("南通","南通");
subTypeForm.options[9]=new Option("如皋","如皋");
subTypeForm.options[10]=new Option("泰州","泰州");
subTypeForm.options[11]=new Option("通州","通州");
subTypeForm.options[12]=new Option("扬州","扬州");
subTypeForm.options[13]=new Option("宜兴","宜兴");
subTypeForm.options[14]=new Option("镇江","镇江");
subTypeForm.options[15]=new Option("海门","海门");
subTypeForm.options[16]=new Option("东台","东台");
subTypeForm.options[17]=new Option("太湖","太湖");

subTypeForm.options[0].selected=true;
break;
case "重庆":
subTypeForm.options[0]=new Option("重庆","重庆");
subTypeForm.options[0].selected=true;
break;
case "江西":
subTypeForm.options[0]=new Option("南昌","南昌");
subTypeForm.options[1]=new Option("景德镇","景德镇");
subTypeForm.options[2]=new Option("萍乡","萍乡");
subTypeForm.options[3]=new Option("九江","九江");
subTypeForm.options[4]=new Option("赣州","赣州");
subTypeForm.options[5]=new Option("新余","新余");
subTypeForm.options[6]=new Option("吉安","吉安");
subTypeForm.options[7]=new Option("临川","临川");
subTypeForm.options[8]=new Option("瑞昌","瑞昌");
subTypeForm.options[9]=new Option("樟树","樟树");
subTypeForm.options[0].selected=true;
break;
case "台湾":
subTypeForm.options[0]=new Option("台北","台北");
subTypeForm.options[1]=new Option("高雄","高雄");
subTypeForm.options[2]=new Option("台中","台中");
subTypeForm.options[3]=new Option("台南","台南");
subTypeForm.options[4]=new Option("基隆","基隆");
subTypeForm.options[5]=new Option("新竹","新竹");
subTypeForm.options[0].selected=true;
break;
case "香港":
subTypeForm.options[0]=new Option("香港","香港");
subTypeForm.options[0].selected=true;
break;
case "澳门":
subTypeForm.options[0]=new Option("澳门","澳门");
subTypeForm.options[0].selected=true;
break;

}
	break;}
	return -1;
}

function SetCity()
{
	p = document.form.province;
	c = document.form.city;
	update_city("0",p.options[p.options.selectedIndex].value, c);
	return ;
}
</script>
</body>
</html>