<?php /* Smarty version Smarty-3.1.8, created on 2014-10-07 13:51:26
         compiled from "./home/views/default\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1814554337f5e816871-79246211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42e4512b3c268283b74d9e50c7ba504bdb6bd668' => 
    array (
      0 => './home/views/default\\index\\index.tpl',
      1 => 1411006486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1814554337f5e816871-79246211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'first' => 0,
    'app' => 0,
    'res' => 0,
    'a' => 0,
    'second' => 0,
    'b' => 0,
    'six' => 0,
    'f' => 0,
    'play' => 0,
    'public' => 0,
    'three' => 0,
    'c' => 0,
    'four' => 0,
    'd' => 0,
    'five' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54337f5ef375d5_04800243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54337f5ef375d5_04800243')) {function content_54337f5ef375d5_04800243($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\AppServ\\www\\zxzx\\brophp\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\AppServ\\www\\zxzx\\brophp\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="content">
	<div class="left">
		<div class="a"> <span><?php echo $_smarty_tpl->tpl_vars['first']->value['title'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/list/index/pid/<?php echo $_smarty_tpl->tpl_vars['first']->value['id'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/more.jpg" width="43" height="13"/></a>
			<div style="padding-top:25px;"><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['article'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['article']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['name'] = 'article';
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['a']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = (int)5;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total']);
?>
				<dl>
					<dt><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['a']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['a']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['title'],19);?>
</a></dt>
					<dd><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['posttime'],"%m-%d");?>
</dd>
				</dl>
				<?php endfor; endif; ?> </div>
		</div>
		<div class="b"><span><?php echo $_smarty_tpl->tpl_vars['second']->value['title'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/list/index/pid/<?php echo $_smarty_tpl->tpl_vars['second']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/more.jpg" width="43" height="13"/></a>
			<div style="padding-top:25px;"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['article'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['article']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['name'] = 'article';
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['b']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = (int)5;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total']);
?>
				<dl>
					<dt><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['b']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['b']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['title'],19);?>
</a></dt>
					<dd><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['b']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['posttime'],"%m-%d");?>
</dd>
				</dl>
				<?php endfor; endif; ?></div>
		</div>
		<div class="c"><span><?php echo $_smarty_tpl->tpl_vars['six']->value['title'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/list/index/pid/<?php echo $_smarty_tpl->tpl_vars['six']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/more.jpg" width="43" height="13"/></a>
			<div style="padding-top:25px;"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['article'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['article']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['name'] = 'article';
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['f']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = (int)5;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total']);
?>
				<dl>
					<dt><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['f']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['f']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['title'],19);?>
</a></dt>
					<dd><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['f']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['posttime'],"%m-%d");?>
</dd>
				</dl>
				<?php endfor; endif; ?></div>
		</div>
		
	</div>
	<div class="center">
		<div style="margin-bottom:7px;"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/bg1.jpg" width="6" height="20" style="padding-left:2px; padding-top:2px"/><span style="color:#000; font-size:14px; font-family:'黑体'">&nbsp;&nbsp;&nbsp;图片新闻</span>
		</div>
		<div id="pwSlidePlayer" class="pwSlide cc" onmouseover="pwSlidePlayer('pause');" onmouseout="pwSlidePlayer('goon');">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pic'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['name'] = 'pic';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['play']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['max'] = (int)6;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total']);
?> <div id="Switch_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pic']['index'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['pic']['first']!=true){?>style="display:none;"<?php }?>> <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['play']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pic']['index']]['id'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['play']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pic']['index']]['picname'];?>
" /><h3><?php echo $_smarty_tpl->tpl_vars['play']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pic']['index']]['title'];?>
</h3></a></div> 

			<?php endfor; endif; ?>
			<div class="pwSlide-bg"></div>
			<ul id="SwitchNav">
			</ul>
		</div>			
		<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/player.js"></script> 
		<script>pwSlidePlayer('play',1);</script> 
		<div class="a">
			<a href="http://zxzx.swu.edu.cn/zhaopin" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/button1.jpg" width="364" height="102"/></a>
		</div>
		<div class="b">
			<a href="http://xsc.swu.edu.cn/teli/index.php" target="_blank" style="margin-right:15px; float:left"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/button2.jpg" width="174" height="52"/></a>
			<a href="http://qgzx.swu.edu.cn" target="_blank" style="float:left"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/button3.jpg" width="174" height="52"/></a>
		</div>
	</div>
	<div class="right">
		<div class="a"> <span><?php echo $_smarty_tpl->tpl_vars['three']->value['title'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/list/index/pid/<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/more.jpg" width="43" height="13"/></a>
			<div style="padding-top:25px;"><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['article'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['article']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['name'] = 'article';
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = (int)5;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total']);
?>
				<dl>
					<dt><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['title'],19);?>
</a></dt>
					<dd><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['posttime'],"%m-%d");?>
</dd>
				</dl>
				<?php endfor; endif; ?> </div>
		</div>
		<div class="b"><span><?php echo $_smarty_tpl->tpl_vars['four']->value['title'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/list/index/pid/<?php echo $_smarty_tpl->tpl_vars['four']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/more.jpg" width="43" height="13"/></a>
			<div style="padding-top:25px;"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['article'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['article']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['name'] = 'article';
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['d']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = (int)5;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total']);
?>
				<dl>
					<dt><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['title'],19);?>
</a></dt>
					<dd><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['posttime'],"%m-%d");?>
</dd>
				</dl>
				<?php endfor; endif; ?></div>
		</div>
		<div class="c"><span><?php echo $_smarty_tpl->tpl_vars['five']->value['title'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/list/index/pid/<?php echo $_smarty_tpl->tpl_vars['five']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/more.jpg" width="43" height="13"/></a>
			<div style="padding-top:25px;"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['article'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['article']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['name'] = 'article';
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['e']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = (int)5;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total']);
?>
				<dl>
					<dt><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['e']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['e']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['title'],19);?>
</a></dt>
					<dd><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['e']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['posttime'],"%m-%d");?>
</dd>
				</dl>
				<?php endfor; endif; ?></div>
		</div>
	</div>
</div>
<div class="w"></div>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>