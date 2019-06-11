<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:17:15
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.search.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd40b020be9_60463653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11123649b5508ce5e91da5b80438a74c00454bef' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.search.php',
      1 => 1560269327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd40b020be9_60463653 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
   <form action="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/search.html" class="search_form" method="get">
      <div class="row collapse">
         <div class="small-10 large-11 columns">
            <input name="search[keywords]" type="text" class="nomarg" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['input_default'];?>
" required><small><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/search.html"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['advanced'];?>
</a></small>
         </div>
         <div class="small-2 large-1 columns">
            <button class="button postfix nomarg nopad" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['search'];?>
"><svg class="icon"><use xlink:href="#icon-search"></use></svg></button>
         </div>
      </div>
      <input type="hidden" name="_a" value="category">
   </form>
   <div class="hide validate_search"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['enter_search_term'];?>
</div>
</div><?php }
}
