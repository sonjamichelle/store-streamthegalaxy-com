<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:41:26
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.off_canvas.left.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea456778b12_13854186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '507b6b1ce597877016d08777c715e729193bc2f3' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.off_canvas.left.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfea456778b12_13854186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/includes/lib/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<aside class="left-off-canvas-menu">
   <ul class="off-canvas-list">
      <?php if ($_smarty_tpl->tpl_vars['IS_USER']->value) {?>
      <li><label><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['CUSTOMER']->value['first_name']);?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['CUSTOMER']->value['last_name']);?>
</label></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=profile" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_details'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_details'];?>
</a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=vieworder" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_orders'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_orders'];?>
</a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=addressbook" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_addressbook'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_addressbook'];?>
</a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=downloads" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_downloads'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_downloads'];?>
</a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=newsletter" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_subscription'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_subscription'];?>
</a></li>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SESSION_LIST_HOOKS']->value, 'list_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list_item']->value) {
?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['list_item']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list_item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['list_item']->value['title'];?>
</a></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=account" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_account'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['more'];?>
&hellip;</a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=logout" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['logout'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['logout'];?>
</a></li>
      <?php } else { ?>
      <li><label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_account'];?>
</label></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/login.html"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['login'];?>
 / <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register'];?>
</a></li>
      <?php }?>
   </ul>
   <ul class="off-canvas-list">
      <li><label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['change_currency'];?>
</label></li>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURRENCIES']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['currency']->value['code'] !== $_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['code']) {?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['currency']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['currency']->value['symbol_left'];?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['symbol_right'];?>
 (<?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
)</a></li>
      <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </ul>
   <?php if ($_smarty_tpl->tpl_vars['LANGUAGES']->value) {?>
   <ul class="off-canvas-list">
      <li><label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['change_language'];?>
</label></li>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['current_language']->value['code'] !== $_smarty_tpl->tpl_vars['language']->value['code']) {?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['language']->value['url'];?>
"><span class="flag flag-<?php echo substr($_smarty_tpl->tpl_vars['language']->value['code'],3,2);?>
"></span> <?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</a></li>
      <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
   </ul>
   <?php }?>
</aside>
<?php }
}
