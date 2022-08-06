<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:17:51
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_XCMcfW/skins/default/templates/common.navigation.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd42f9d7478_23694590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcf31887f7f6ce6e24ad67e369fe0300d52d4ea0' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_XCMcfW/skins/default/templates/common.navigation.php',
      1 => 1560269327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd42f9d7478_23694590 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['NAVIGATION']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAVIGATION']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group'];?>
" class="menu"><?php if ($_smarty_tpl->tpl_vars['group']->value['visible'] == "false") {?><i class="fa fa-plus-square-o"></i><?php } else { ?><i class="fa fa-minus-square-o"></i><?php }?> <?php echo $_smarty_tpl->tpl_vars['group']->value['title'];?>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['group']->value['members'])) {?>
<ul id="menu_<?php echo $_smarty_tpl->tpl_vars['group']->value['group'];?>
" class="submenu<?php if ($_smarty_tpl->tpl_vars['group']->value['visible'] == "false") {?> hide<?php }?>">
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['members'], 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
?>
   <li><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['nav']->value['target'];?>
"<?php if (!empty($_smarty_tpl->tpl_vars['nav']->value['id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['nav']->value['id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['nav']->value['title'];
if (!empty($_smarty_tpl->tpl_vars['nav']->value['icon'])) {?> <i class="fa <?php echo $_smarty_tpl->tpl_vars['nav']->value['icon'];?>
"></i><?php }?></a></li>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
