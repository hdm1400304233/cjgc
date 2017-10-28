<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<script language="javascript">
function update_column( CatID1, subTypeForm ){
subTypeForm.length=0;
switch(CatID1){
case "-1":
subTypeForm.options[0]=new Option("--------","-1");
subTypeForm.options[0].selected=true;break;
case "0"://中国
subTypeForm.options[0]=new Option("交通运输","1");
subTypeForm.options[1]=new Option("能源电力","2");
subTypeForm.options[2]=new Option("科研教育","3");
subTypeForm.options[3]=new Option("城乡建设","4");
subTypeForm.options[4]=new Option("海外工程","5");
subTypeForm.options[5]=new Option("战略规划","6");
subTypeForm.options[6]=new Option("工业项目","7");
subTypeForm.options[7]=new Option("选择全部","8");
subTypeForm.options[0].selected=true;
break;
}
return -1;
}
function update_chose( CatID1, CatID2, subTypeForm ){
subTypeForm.length=0;
switch(CatID1){
case "-1":
subTypeForm.options[0]=new Option("--------","-1");
subTypeForm.options[0].selected=true;break;
case "0"://中国
switch ( CatID2 ){
case "交通运输":
subTypeForm.options[0]=new Option("选择全部","选择全部");
subTypeForm.options[1]=new Option("铁路","铁路");
subTypeForm.options[2]=new Option("公路","公路");
subTypeForm.options[3]=new Option("地铁","地铁");
subTypeForm.options[4]=new Option("桥梁","桥梁");
subTypeForm.options[5]=new Option("机场","机场");
subTypeForm.options[6]=new Option("港口","港口");
subTypeForm.options[0].selected=true;
break;
case "能源电力":
subTypeForm.options[0]=new Option("选择全部","选择全部");
subTypeForm.options[1]=new Option("化石能源","化石能源");
subTypeForm.options[2]=new Option("钢铁","钢铁");
subTypeForm.options[3]=new Option("核电站","核电站");
subTypeForm.options[4]=new Option("水电站","水电站");
subTypeForm.options[5]=new Option("能源基地","能源基地");
subTypeForm.options[6]=new Option("风电站","风电站");
subTypeForm.options[0].selected=true;
break;
case "科研教育":
subTypeForm.options[0]=new Option("选择全部","选择全部");
subTypeForm.options[1]=new Option("科研项目","科研项目");
subTypeForm.options[2]=new Option("航空航天","航空航天");
subTypeForm.options[0].selected=true;
break;
case "城乡建设":
subTypeForm.options[0]=new Option("选择全部","选择全部");
subTypeForm.options[1]=new Option("休闲娱乐","休闲娱乐");
subTypeForm.options[2]=new Option("衣食住行","衣食住行");
subTypeForm.options[0].selected=true;
break;
case "海外工程":
subTypeForm.options[0]=new Option("选择全部","选择全部");
subTypeForm.options[1]=new Option("能源项目","能源项目");
subTypeForm.options[2]=new Option("海外交通","海外交通");
subTypeForm.options[3]=new Option("工业项目","工业项目");
subTypeForm.options[0].selected=true;
break;
case "战略规划":
subTypeForm.options[0]=new Option("选择全部","选择全部");
subTypeForm.options[1]=new Option("交通规划","交通规划");
subTypeForm.options[2]=new Option("能源规划","能源规划");
subTypeForm.options[3]=new Option("工业规划","工业规划");
subTypeForm.options[4]=new Option("环境保护","环境保护");
subTypeForm.options[0].selected=true;
break;
case "工业项目":
subTypeForm.options[0]=new Option("选择全部","选择全部");
subTypeForm.options[1]=new Option("造船基地","造船基地");
subTypeForm.options[2]=new Option("金融中心","金融中心");
subTypeForm.options[3]=new Option("开发新区","开发新区");
subTypeForm.options[4]=new Option("其他项目","其他项目");
subTypeForm.options[0].selected=true;
break;
case "选择全部":
subTypeForm.options[0]=new Option("选择全部","选择全部");
subTypeForm.options[1]=new Option("铁路","铁路");
subTypeForm.options[2]=new Option("公路","公路");
subTypeForm.options[3]=new Option("地铁","地铁");
subTypeForm.options[4]=new Option("桥梁","桥梁");
subTypeForm.options[5]=new Option("机场","机场");
subTypeForm.options[6]=new Option("港口","港口");
subTypeForm.options[7]=new Option("化石能源","化石能源");
subTypeForm.options[8]=new Option("钢铁","钢铁");
subTypeForm.options[9]=new Option("核电站","核电站");
subTypeForm.options[10]=new Option("水电站","水电站");
subTypeForm.options[11]=new Option("能源基地","能源基地");
subTypeForm.options[12]=new Option("风电站","风电站");
subTypeForm.options[13]=new Option("科研项目","科研项目");
subTypeForm.options[14]=new Option("教育工程","教育工程");
subTypeForm.options[15]=new Option("航空航天","航空航天");
subTypeForm.options[16]=new Option("休闲娱乐","休闲娱乐");
subTypeForm.options[17]=new Option("衣食住行","衣食住行");
subTypeForm.options[18]=new Option("能源项目","能源项目");
subTypeForm.options[19]=new Option("海外交通","海外交通");
subTypeForm.options[20]=new Option("工业项目","工业项目");
subTypeForm.options[21]=new Option("交通规划","交通规划");
subTypeForm.options[22]=new Option("能源规划","能源规划");
subTypeForm.options[23]=new Option("工业规划","工业规划");
subTypeForm.options[24]=new Option("环境保护","环境保护");
subTypeForm.options[25]=new Option("造船基地","造船基地");
subTypeForm.options[26]=new Option("金融中心","金融中心");
subTypeForm.options[27]=new Option("开发新区","开发新区");
subTypeForm.options[28]=new Option("其他项目","其他项目");
subTypeForm.options[0].selected=true;
break;
	}
	break;}
	return -1;
}

function SetChose()
{
	p = document.form.column;
	c = document.form.chose;
	update_chose("0",p.options[p.options.selectedIndex].value, c);
	return ;
}
</script>
<body>
</body>
</html>