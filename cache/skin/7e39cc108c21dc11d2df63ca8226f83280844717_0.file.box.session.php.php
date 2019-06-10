<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:41:26
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.session.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea45610f886_47028739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e39cc108c21dc11d2df63ca8226f83280844717' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.session.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfea45610f886_47028739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/includes/lib/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<div class="right text-right show-for-medium-up" id="box-session">
   <?php if ($_smarty_tpl->tpl_vars['IS_USER']->value) {?>
   <a href="#" data-dropdown="session" class="button white small"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['CUSTOMER']->value['first_name']);?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['CUSTOMER']->value['last_name']);?>
 <svg class="icon"><use xlink:href="#icon-caret-down"></use></svg></a><br>
   <ul id="session" data-dropdown-content class="f-dropdown">
      <li class="text-left"><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=profile" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_details'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_details'];?>
</a></li>
      <li class="text-left"><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=vieworder" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_orders'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_orders'];?>
</a></li>
      <li class="text-left"><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=addressbook" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_addressbook'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_addressbook'];?>
</a></li>
      <li class="text-left"><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=downloads" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_downloads'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_downloads'];?>
</a></li>
      <li class="text-left"><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=newsletter" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_subscription'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_subscription'];?>
</a></li>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SESSION_LIST_HOOKS']->value, 'list_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list_item']->value) {
?>
      <li class="text-left"><a href="<?php echo $_smarty_tpl->tpl_vars['list_item']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list_item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['list_item']->value['title'];?>
</a></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <li class="text-left"><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=account" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_account'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['more'];?>
&hellip;</a></li>
      <li class="text-left"><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=logout" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['logout'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['logout'];?>
</a></li>
   </ul>
   <?php } else { ?>
   <a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/login.html" class="button white small nopad-sides"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['login'];?>
</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/register.html" class="button white small nopad-sides"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register'];?>
</a>
   <?php }?>
</div>
<?php }
}
