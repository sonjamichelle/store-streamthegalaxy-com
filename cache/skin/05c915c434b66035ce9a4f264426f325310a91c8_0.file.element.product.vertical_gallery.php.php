<?php
/* Smarty version 3.1.33, created on 2019-06-10 19:07:50
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.product.vertical_gallery.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfeaa86c2fdb5_44649561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05c915c434b66035ce9a4f264426f325310a91c8' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.product.vertical_gallery.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/element.product.options.php' => 1,
    'file:templates/element.product.review_score.php' => 1,
    'file:templates/element.product.call_to_action.php' => 1,
  ),
),false)) {
function content_5cfeaa86c2fdb5_44649561 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
   <div  class="medium-1 columns thinpad-right off-canvas-for-small vertical">
      <?php if ($_smarty_tpl->tpl_vars['GALLERY']->value) {?>
      <div id="scrollUp" class="scroller"><svg class="icon"><use xlink:href="#icon-angle-up"></use></svg></div>
      <ul class="clearing-thumbs small-block-grid-1" id="scrollContent" data-clearing>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GALLERY']->value, 'image', true);
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$__foreach_image_5_saved = $_smarty_tpl->tpl_vars['image'];
?>
         <li<?php if ($_smarty_tpl->tpl_vars['image']->total < 2) {?> style="display:none"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['source'];?>
" class="th"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['small'];?>
" data-image-swap="<?php echo $_smarty_tpl->tpl_vars['image']->value['medium'];?>
" data-caption="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['name'];
if (!empty($_smarty_tpl->tpl_vars['image']->value['description'])) {?>: <?php }
echo $_smarty_tpl->tpl_vars['image']->value['description'];?>
" class="image-gallery" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['click_enlarge'];?>
"></a></li>
         <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_5_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
      <div id="scrollDown" class="scroller"><svg class="icon"><use xlink:href="#icon-angle-down"></use></svg></div>
      <?php }?>
   </div>
   <div class="small-5 medium-6 columns text-center nopad">            
      <a href="#" class="open-clearing" data-thumb-index="0"><img src="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['medium'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['name'];?>
" id="img-preview"></a>
      <p class="show-for-small-only"><?php if ($_smarty_tpl->tpl_vars['image']->total == 1) {
echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['tap_enlarge'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['tap_gallery'];
}?></p>
   </div>
   <div class="small-7 medium-5 columns thinpad-left">
      <?php $_smarty_tpl->_subTemplateRender('file:templates/element.product.options.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:templates/element.product.review_score.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:templates/element.product.call_to_action.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   </div>
</div><?php }
}
