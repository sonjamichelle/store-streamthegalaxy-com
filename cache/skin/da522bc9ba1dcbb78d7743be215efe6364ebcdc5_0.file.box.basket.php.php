<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:41:26
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.basket.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea456124b73_82162073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da522bc9ba1dcbb78d7743be215efe6364ebcdc5' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.basket.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/box.basket.content.php' => 1,
  ),
),false)) {
function content_5cfea456124b73_82162073 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php if (!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value) {?>
<div id="mini-basket">
   <div class="show-for-medium-up">
      <div class="text-right"><a href="#" id="basket-summary" class="button white small"><svg class="icon icon-basket"><use xlink:href="#icon-basket"></use></svg> <?php echo $_smarty_tpl->tpl_vars['CART_TOTAL']->value;?>
</a></div>
      <div class="basket-detail-container hide" id="basket-detail">
         <div class="mini-basket-arrow"></div>
         <?php $_smarty_tpl->_subTemplateRender('file:templates/box.basket.content.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
      </div>
   </div>
   <div class="show-for-small-only">
      <div class="show-for-small-only"><a class="right-off-canvas-toggle button white tiny" href="#"><svg class="icon icon-basket icon-x2"><use xlink:href="#icon-basket"></use></svg></a></div>
      <div class="hide panel radius small-basket-detail-container js_fadeOut" id="small-basket-detail"><svg class="icon"><use xlink:href="#icon-check"></use></svg> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['added_to_basket'];?>
</div>
   </div>
   <div class="session_token hide"><?php echo $_smarty_tpl->tpl_vars['SESSION_TOKEN']->value;?>
</div>
</div>
<?php }
}
}
