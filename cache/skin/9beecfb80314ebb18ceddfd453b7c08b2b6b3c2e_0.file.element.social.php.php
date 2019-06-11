<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:17:15
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.social.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd40b1b9ca0_66159673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9beecfb80314ebb18ceddfd453b7c08b2b6b3c2e' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.social.php',
      1 => 1560269327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd40b1b9ca0_66159673 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['SOCIAL_LINKS']->value) {?>
<div class="element-social">
   <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['follow_us'];?>
</h3>
   <ul class="small-block-grid-4 no-bullet nomarg social-icons text-left">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOCIAL_LINKS']->value, 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['name'];?>
" target="_blank" rel="noopener noreferrer"><svg class="icon"><use xlink:href="#icon-<?php echo $_smarty_tpl->tpl_vars['link']->value['icon'];?>
"></use></svg></a></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </ul>
</div><?php }
}
}
