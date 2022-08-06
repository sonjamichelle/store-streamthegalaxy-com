<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:17:15
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.progress.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd40b5bc637_15697829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0779db297500795e053842b66c285cedef5dd7a' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.progress.php',
      1 => 1560269327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd40b5bc637_15697829 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['BLOCKS']->value)) {?>
<ul class="row no-bullet collapse checkout-progress-wrapper" id="box-progress">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>
  <li class="small-4 columns text-center checkout-progress <?php echo $_smarty_tpl->tpl_vars['block']->value['class'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['block']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['block']->value['step'];?>
. <?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>
</a></li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
}
