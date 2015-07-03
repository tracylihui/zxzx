<?php /* Smarty version Smarty-3.1.8, created on 2014-10-07 13:51:27
         compiled from "./home/views/default\public\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2765454337f5f0728f0-17501154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fab19e26cde6cc34df8c2b1ad92d228a06f7dce9' => 
    array (
      0 => './home/views/default\\public\\header.tpl',
      1 => 1395914664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2765454337f5f0728f0-17501154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'appname' => 0,
    'keywords' => 0,
    'description' => 0,
    'res' => 0,
    'public' => 0,
    'app' => 0,
    'search' => 0,
    'size' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54337f5f151a03_73944832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54337f5f151a03_73944832')) {function content_54337f5f151a03_73944832($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\AppServ\\www\\zxzx\\brophp\\libs\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['appname']->value,200);?>
</title>
<meta name="Author" content="李辉" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/style.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/ajax3.0.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/common.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/win.js"></script>
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
		
			<form id='searchForm2' name='searchForm2' action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/search/index" method="get">
				<input type="hidden" name="serType" value="title"/>
				<input type="text"  name="search" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"/>
				<a href="javascript:document.getElementById('searchForm2').submit();">搜索</a>
			</form>
		
	</div>
	<div class="logo_1">
		<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/logo_1.jpg" width="433px" height="22px" />
		<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/logo_2.jpg" width="433px" height="22px" />
	</div>
</div>
<div class="nav">
	<ul>
		<li ><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
" style=" width:<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
px;">网站首页</a> </li>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['li'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['li']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['name'] = 'li';
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total']);
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/list/index/pid/<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['id'];?>
" onMouseOver="mopen('<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['id'];?>
')" onMouseOut="mclosetime()" style=" width:<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
px;"><?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['title'];?>
</a>
			</li>
		<?php endfor; endif; ?>
	</ul>
</div>
<?php }} ?>