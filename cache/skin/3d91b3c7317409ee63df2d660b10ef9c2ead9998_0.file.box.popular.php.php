<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:17:15
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.popular.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd40b1adab5_55854779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d91b3c7317409ee63df2d660b10ef9c2ead9998' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.popular.php',
      1 => 1560269327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd40b1adab5_55854779 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['POPULAR']->value) {?>
<div class="panel" id="box-popular">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_popular'];?>
</h3>
  <ol>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['POPULAR']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a><br>
	<?php if ($_smarty_tpl->tpl_vars['product']->value['ctrl_sale']) {?>
         <span class="old_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span> <span class="sale_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['sale_price'];?>
</span>
    <?php } else { ?>
         <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>

    <?php }?>
	</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ol>
</div>
<?php }
}
}
