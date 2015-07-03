<?php /* Smarty version Smarty-3.1.8, created on 2014-10-07 13:51:27
         compiled from "./home/views/default\public\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71154337f5f179f79-92210512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba0392c39ee233eee6bad71cedeba84bc31d6c51' => 
    array (
      0 => './home/views/default\\public\\footer.tpl',
      1 => 1395643832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71154337f5f179f79-92210512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
    'public' => 0,
    'phone' => 0,
    'mail' => 0,
    'root' => 0,
    'todayv' => 0,
    'yesterdayv' => 0,
    'tmonthv' => 0,
    'fmonthv' => 0,
    'allv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54337f5f2476d9_19262957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54337f5f2476d9_19262957')) {function content_54337f5f2476d9_19262957($_smarty_tpl) {?>
<div class="foot">
	<div style="padding-top:15px; padding-bottom:25px;">
		<div style="width:1000px; margin:0 auto; text-align:center " >
		
			<ul>
			<li style="color:#002d68">【友情链接】</li>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['name'] = 'ls';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['links']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total']);
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['url'];?>
" target="_blank"> <?php if ($_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['list']){?> <img height="40" alt="<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['webname'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/logos/<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['logo'];?>
" border="0" > <?php }else{ ?>
					<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['webname'];?>

					<?php }?> </a></li>
				<?php endfor; endif; ?>
			</ul>
		</div>
		<center>
			<font style="color:#002d68">【联系我们】</font>&nbsp;&nbsp;&nbsp;地址:重庆市北碚区天生路2号&nbsp;&nbsp;&nbsp;邮编：400715&nbsp;&nbsp;&nbsp;联系电话：<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
&nbsp;&nbsp;&nbsp;
			邮箱：<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/admin.php">管理登录</a></br><font style="color:#002d68">【访问量】</font>&nbsp;&nbsp;&nbsp;今日访问量：<?php echo $_smarty_tpl->tpl_vars['todayv']->value;?>
&nbsp;&nbsp;昨日访问量：<?php echo $_smarty_tpl->tpl_vars['yesterdayv']->value;?>
&nbsp;&nbsp;本月访问量:：<?php echo $_smarty_tpl->tpl_vars['tmonthv']->value;?>
&nbsp;&nbsp;上月访问量：<?php echo $_smarty_tpl->tpl_vars['fmonthv']->value;?>
&nbsp;&nbsp;总访问量：<?php echo $_smarty_tpl->tpl_vars['allv']->value;?>

		</center>
	</div>
</div>
</body></html><?php }} ?>