<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:17:15
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.meta.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd40b1e8a87_78385589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a17080c86d4983911ccd947c612814ac82390cd' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.meta.php',
      1 => 1560269327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd40b1e8a87_78385589 (Smarty_Internal_Template $_smarty_tpl) {
?><meta charset="<?php echo $_smarty_tpl->tpl_vars['CHARACTER_SET']->value;?>
">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php if (isset($_smarty_tpl->tpl_vars['META_DESCRIPTION']->value)) {
echo $_smarty_tpl->tpl_vars['META_DESCRIPTION']->value;
}?>">
<meta name="keywords" content="<?php if (isset($_smarty_tpl->tpl_vars['META_KEYWORDS']->value)) {
echo $_smarty_tpl->tpl_vars['META_KEYWORDS']->value;
}?>">
<meta name="robots" content="index, follow">
<meta name="generator" content="cubecart">
<?php if ($_smarty_tpl->tpl_vars['FBOG']->value) {?><meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['thumbnail'];?>
">
<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
"><?php }
if ($_smarty_tpl->tpl_vars['LANGUAGES']->value) {?><link rel="alternate" hreflang="x-default" href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?set_language=<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['default_language'];?>
" />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
<link rel="alternate" href="<?php echo $_smarty_tpl->tpl_vars['language']->value['url'];?>
" hreflang="<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
"><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
