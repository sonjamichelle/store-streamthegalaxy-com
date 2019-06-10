<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:41:26
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.currency.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea4560a28d2_36985436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41f131f384ca3280b057a981358f80ef21aebfbd' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.currency.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfea4560a28d2_36985436 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="right text-center show-for-medium-up" id="box-currency">
   <?php if (count($_smarty_tpl->tpl_vars['CURRENCIES']->value) > 1) {?>
   <a href="#" data-dropdown="currency-switch" class="button white small"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['symbol_left'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['code'];?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['symbol_right'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
   <ul id="currency-switch" data-dropdown-content class="f-dropdown">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURRENCIES']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['currency']->value['code'] !== $_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['code']) {?>
      <li class="text-left"><a href="<?php echo $_smarty_tpl->tpl_vars['currency']->value['url'];?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['symbol_left'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['symbol_right'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 (<?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
)</a></li>
      <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </ul>
   <?php } else { ?>
   	<span class="button white small"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['symbol_left'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['code'];?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['symbol_right'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
   <?php }?>
</div><?php }
}
