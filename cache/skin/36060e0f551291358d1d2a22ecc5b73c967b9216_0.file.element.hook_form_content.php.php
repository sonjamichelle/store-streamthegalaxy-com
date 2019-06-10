<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:42:12
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_7Cbhyv/skins/default/templates/element.hook_form_content.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea4846d6a30_15180366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36060e0f551291358d1d2a22ecc5b73c967b9216' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_7Cbhyv/skins/default/templates/element.hook_form_content.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfea4846d6a30_15180366 (Smarty_Internal_Template $_smarty_tpl) {
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
