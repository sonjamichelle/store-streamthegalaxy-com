<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:17:15
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.featured.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd40b18d412_76949851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f311229cba11126b3a8575b887d3b26731e6799' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.featured.php',
      1 => 1560269327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd40b18d412_76949851 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['featured']->value) {?>
<div class="panel" id="box-featured">
   <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_feature'];?>
</h3>
   <a class="th" href="<?php echo $_smarty_tpl->tpl_vars['featured']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
">
   <img src="<?php echo $_smarty_tpl->tpl_vars['featured']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
">
   </a>
   <h4><a href="<?php echo $_smarty_tpl->tpl_vars['featured']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
</a></h4>
   <?php if ($_smarty_tpl->tpl_vars['featured']->value['ctrl_sale']) {?>
   <span class="old_price"><?php echo $_smarty_tpl->tpl_vars['featured']->value['price'];?>
</span> <span class="sale_price"><?php echo $_smarty_tpl->tpl_vars['featured']->value['sale_price'];?>
</span>
   <?php } else { ?>
   <?php echo $_smarty_tpl->tpl_vars['featured']->value['price'];?>

   <?php }?>
</div>
<?php }
}
}
