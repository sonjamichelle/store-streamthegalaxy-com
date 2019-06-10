<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:41:26
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.navigation_tree.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea45617a396_64092318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be7f8efce64b10b6b2debddc9687ab0466117a59' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.navigation_tree.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfea45617a396_64092318 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="has-dropdown">
   <a href="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['name'];?>
</a>
   <?php if (isset($_smarty_tpl->tpl_vars['BRANCH']->value['children'])) {?>
   <ul class="dropdown">
      <li itemprop="name"><label itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['url'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['name'];?>
</label></li>
      <?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['children'];?>

   </ul>
   <?php }?>
</li><?php }
}
