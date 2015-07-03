<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><{ $appname|truncate:200 }></title>
<meta name="Author" content="李辉" />
<meta name="Keywords" content="<{$keywords}>" />
<meta name="description" content="<{$description}>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<{$res}>/css/style.css">
<script type="text/javascript" src="<{$res}>/js/jquery-1.11.0.min.js"></script>
<script src="<{$public}>/js/ajax3.0.js"></script>
<script src="<{$res}>/js/common.js"></script>
<script src="<{$res}>/js/win.js"></script>
<script language="javascript" type="text/javascript">
$(function(){
$(".logo .logo_1 img").fadeOut(0).eq(0).fadeIn(0);//先隐藏所有图片，再将对象移到第一张图片，使之淡入
var i = 0;//初始化图片的索引值
setInterval(function(){//setInterval是每隔一段时间循环一个动作
if($(".logo .logo_1 img").length > (i+1)){//判断是否执行到最后一张图片
$(".logo .logo_1 img").eq(i).fadeOut(2000).next("img").fadeIn(2000);//索引值为i的图片淡出，它的下一张图片淡入
i++;//使索引值增加1，下一次执行动作的图片索引值为i+1，
}
else{//如果为最后一张图片，将执行下面的代码
$(".logo .logo_1 img").eq(i).fadeOut(2000).siblings("img").eq(0).fadeIn(2000);//索引值为i的图片淡出，这里不同于上面，是第一张图片淡入
i = 0;//将索引值变为0，回到初始状态
}
},5000);//5000ms执行一次淡入淡出的动作
})
</script>
<script language="javascript" type="text/javascript">
<!--
var speed=20;
var tab=document.getElementById("demo");
var tab1=document.getElementById("demo1");
var tab2=document.getElementById("demo2");
tab2.innerHTML=tab1.innerHTML;
function Marquee(){
if(tab2.offsetWidth-tab.scrollLeft<=0)
tab.scrollLeft-=tab1.offsetWidth
else{
tab.scrollLeft++;
}
}
var MyMar=setInterval(Marquee,speed);
tab.onmouseover=function() {clearInterval(MyMar)};
tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
-->
</script>
</head>
<body>
<div class="logo">
	<div class="searchArea">
		
			<form id='searchForm2' name='searchForm2' action="<{$app}>/search/index" method="get">
				<input type="hidden" name="serType" value="title"/>
				<input type="text"  name="search" value="<{ $search }>"/>
				<a href="javascript:document.getElementById('searchForm2').submit();">搜索</a>
			</form>
		
	</div>
	<div class="logo_1">
		<img src="<{$res}>/images/logo_1.jpg" width="433px" height="22px" />
		<img src="<{$res}>/images/logo_2.jpg" width="433px" height="22px" />
	</div>
</div>
<div class="nav">
	<ul>
		<li ><a href="<{$app}>" style=" width:<{$size}>px;">网站首页</a> </li>
		<{ section name=li loop=$menu }>
			<li><a href="<{$app}>/list/index/pid/<{ $menu[li].id }>" onMouseOver="mopen('<{$menu[li].id}>')" onMouseOut="mclosetime()" style=" width:<{$size}>px;"><{ $menu[li].title }></a>
			</li>
		<{ /section }>
	</ul>
</div>
