<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:17:14
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.basket.content.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd40ac15f27_87411990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '171a9f00894de3db4d8a0929ae0f7e9fdf77637e' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.basket.content.php',
      1 => 1560269327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd40ac15f27_87411990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/includes/lib/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="box-basket-content">
   <h4 class="mini-basket-title nomarg pad-side"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['your_basket'];?>
</h4>
   <div class="pad basket-detail">
      <?php if (isset($_smarty_tpl->tpl_vars['CONTENTS']->value) && count($_smarty_tpl->tpl_vars['CONTENTS']->value) > 0) {?>
      <ul class="no-bullet">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONTENTS']->value, 'item', false, NULL, 'items', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index']++;
?>
      <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index'] : null) == 10) {?>
         <li class="clearfix"><div class="left">&hellip;</div></li>
         <?php break 1;?>
      <?php }?>
         <li class="clearfix">
            <div class="left"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
 &times; <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['name'],25,"&hellip;");?>
</a></div>
            <div class="right"><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</div>
         </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         <li class="clearfix">
            <hr>
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['item_plural'];?>
:</div>
            <div class="right"><?php echo $_smarty_tpl->tpl_vars['CART_ITEMS']->value;?>
</div>
         </li>
         <li class="clearfix">
            <div class="left total"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['total'];?>
:</div>
            <div class="right total"><?php echo $_smarty_tpl->tpl_vars['CART_TOTAL']->value;?>
</div>
         </li>
      </ul>
      <div><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=checkout" class="button success expand nomarg"><?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['ssl'] == 1) {?><svg class="icon"><use xlink:href="#icon-lock"></use></svg> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['basket_secure_checkout'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['basket_checkout'];
}?></a></div>
      <?php if (!$_smarty_tpl->tpl_vars['IS_USER']->value) {?>
      <div class="thinpad-top"><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=basket" class="button expand nomarg"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['view_basket'];?>
</a></div>
      <?php }?>
      <?php } else { ?>
      <p class="pad-top text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['basket_is_empty'];?>
</p>
      <?php }?>
   </div>
</div><?php }
}
