<?php /* Smarty version Smarty-3.1.8, created on 2014-10-07 13:52:42
         compiled from "./home/views/default\list\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136054337faa456f93-70342731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02e2781fff5c1b84a86ccc90e5525c162258ee9c' => 
    array (
      0 => './home/views/default\\list\\index.tpl',
      1 => 1394812078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136054337faa456f93-70342731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'menu1' => 0,
    'app' => 0,
    'locs' => 0,
    'url' => 0,
    'articles' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54337faa683fb1_36593610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54337faa683fb1_36593610')) {function content_54337faa683fb1_36593610($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\AppServ\\www\\zxzx\\brophp\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\AppServ\\www\\zxzx\\brophp\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrap">
	<div class="left">
		<h2><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/bg9.jpg" width="250" height="35" /></h2>
		<ul>
			
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['li'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['li']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['name'] = 'li';
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu1']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
/list/index/pid/<?php echo $_smarty_tpl->tpl_vars['menu1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['title'];?>
</a></li>
			<?php endfor; endif; ?>
			
			
		</ul>
		<h2><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/bg11.jpg" width="250" height="35" /></h2>
	</div>
	<div class="right">
		<div class="a"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/bgsy_25.jpg" width="12" height="11" />&nbsp;&nbsp;当前位置
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loc'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['name'] = 'loc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['locs']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['total']);
?>
			&gt; <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/pid/<?php echo $_smarty_tpl->tpl_vars['locs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loc']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['locs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loc']['index']]['description'];?>
"><?php echo $_smarty_tpl->tpl_vars['locs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loc']['index']]['title'];?>
</a> <?php endfor; endif; ?> </div>
		<div class="b"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['col'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['col']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['name'] = 'col';
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['articles']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total']);
?>
			<dl>
				<dt>&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['title'],37);?>
</a></dt>
				<dd><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['posttime'],"%Y-%m-%d");?>
</dd>
			</dl>
			<?php endfor; else: ?>
			<li>该栏目下没有文章</li>
			<?php endif; ?> </div>
		<div class="c"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
 </div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>