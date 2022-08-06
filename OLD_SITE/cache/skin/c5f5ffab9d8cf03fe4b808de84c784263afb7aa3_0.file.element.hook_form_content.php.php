<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:22:19
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_XCMcfW/skins/default/templates/element.hook_form_content.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd53bdeed23_75701372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5f5ffab9d8cf03fe4b808de84c784263afb7aa3' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_XCMcfW/skins/default/templates/element.hook_form_content.php',
      1 => 1560270105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd53bdeed23_75701372 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Bring in Tab Content for plugin hooks. -->
<?php if ($_smarty_tpl->tpl_vars['HOOK_TAB_CONTENT']->value) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOOK_TAB_CONTENT']->value, 'tabfile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tabfile']->value) {
?>
  	  <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tabfile']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
