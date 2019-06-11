<?php
/* Smarty version 3.1.33, created on 2019-06-11 11:33:28
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/CC/admin_pPMyqP/skins/default/templates/common.gui_message.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cff91881eb456_61600945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b678da0a89f823e811e64fe6ae784b7a124c15c1' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/CC/admin_pPMyqP/skins/default/templates/common.gui_message.php',
      1 => 1560252100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cff91881eb456_61600945 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value)) {?>
<div id="gui_message">
  <?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['error'])) {?>
  <div class="error" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['click_to_close'];?>
">
	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['error'], 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
	  	<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
	  	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
  </div>
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['notice'])) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['notice'], 'notice');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notice']->value) {
?>
  	<div class="success" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['click_to_close'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>
</div>
<?php }?>
<noscript>
	<div id="gui_message">
		<div class="error" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['click_to_close'];?>
">
		<ul>
    		<li><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['error_js_required'];?>
</li>
    	</ul>
    	</div>
    </div>
</noscript><?php }
}
