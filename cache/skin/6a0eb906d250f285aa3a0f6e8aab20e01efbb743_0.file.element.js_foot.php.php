<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:41:26
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.js_foot.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea4567c8959_56158216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a0eb906d250f285aa3a0f6e8aab20e01efbb743' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.js_foot.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfea4567c8959_56158216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/includes/lib/smarty/plugins/function.combine.php','function'=>'smarty_function_combine',),));
$_smarty_tpl->_assignInScope('js_foot', array('skins/{$SKIN_FOLDER}/js/vendor/jquery.rating.min.js','skins/{$SKIN_FOLDER}/js/vendor/jquery.validate.js','skins/{$SKIN_FOLDER}/js/vendor/jquery.cookie.js','skins/{$SKIN_FOLDER}/js/vendor/jquery.bxslider.js','skins/{$SKIN_FOLDER}/js/vendor/jquery.chosen.js'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BODY_JS']->value, 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['js_foot']) ? $_smarty_tpl->tpl_vars['js_foot']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['js']->value;
$_smarty_tpl->_assignInScope('js_foot', $_tmp_array);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JS_SCRIPTS']->value, 'script', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['script']->value) {
?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['js_foot']) ? $_smarty_tpl->tpl_vars['js_foot']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['script']->value;
$_smarty_tpl->_assignInScope('js_foot', $_tmp_array);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo smarty_function_combine(array('input'=>$_smarty_tpl->tpl_vars['js_foot']->value,'output'=>'cache/js_foot.{$SKIN_FOLDER}.js','age'=>'604800','debug'=>$_smarty_tpl->tpl_vars['CONFIG']->value['debug'] || !$_smarty_tpl->tpl_vars['CONFIG']->value['cache']),$_smarty_tpl);?>

<?php echo '<script'; ?>
>$(document).foundation({equalizer:{equalize_on_stack:true}});$('.bxslider').bxSlider({auto:true,captions:true});$('.chzn-select').chosen({width:"100%",search_contains:true});<?php echo '</script'; ?>
><?php }
}
