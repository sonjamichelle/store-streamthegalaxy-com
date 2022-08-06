<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:17:15
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.css.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd40b203590_99329988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1001f9e26c02db1e20d69894c7e940066515ca20' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.css.php',
      1 => 1560269327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd40b203590_99329988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/includes/lib/smarty/plugins/function.combine.php','function'=>'smarty_function_combine',),));
?>
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type='text/css'>
<?php $_smarty_tpl->_assignInScope('css_input', array('skins/{$SKIN_FOLDER}/css/normalize.css','skins/{$SKIN_FOLDER}/css/foundation.css','skins/{$SKIN_FOLDER}/css/cubecart.css','skins/{$SKIN_FOLDER}/css/cubecart.common.css','skins/{$SKIN_FOLDER}/css/cubecart.helpers.css','skins/{$SKIN_FOLDER}/css/jquery.bxslider.css','skins/{$SKIN_FOLDER}/css/jquery.chosen.css'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CSS']->value, 'css_files', false, 'css_keys');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['css_keys']->value => $_smarty_tpl->tpl_vars['css_files']->value) {
?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['css_input']) ? $_smarty_tpl->tpl_vars['css_input']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['css_files']->value;
$_smarty_tpl->_assignInScope('css_input', $_tmp_array);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!empty($_smarty_tpl->tpl_vars['SKIN_SUBSET']->value)) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['css_input']) ? $_smarty_tpl->tpl_vars['css_input']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 'skins/{$SKIN_FOLDER}/css/cubecart.{$SKIN_SUBSET}.css';
$_smarty_tpl->_assignInScope('css_input', $_tmp_array);
}
echo smarty_function_combine(array('input'=>$_smarty_tpl->tpl_vars['css_input']->value,'output'=>'cache/css.{$SKIN_FOLDER}.css','age'=>'604800','debug'=>$_smarty_tpl->tpl_vars['CONFIG']->value['debug'] || !$_smarty_tpl->tpl_vars['CONFIG']->value['cache']),$_smarty_tpl);
}
}
