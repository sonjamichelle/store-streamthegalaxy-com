<?php
/* Smarty version 3.1.33, created on 2019-06-10 19:07:50
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.product.call_to_action.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfeaa86cbe381_21642404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bec8c314243865ed5813c417becd01684ecd36f' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.product.call_to_action.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfeaa86cbe381_21642404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/includes/lib/smarty/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>
<h3>
<?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['ctrl_sale']) {?>
   <span class="old_price" id="fbp"<?php if (!$_smarty_tpl->tpl_vars['CTRL_HIDE_PRICES']->value) {?> data-price="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['full_base_price'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['price'];?>
</span>
   <span class="sale_price" id="ptp"<?php if (!$_smarty_tpl->tpl_vars['CTRL_HIDE_PRICES']->value) {?> data-price="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['price_to_pay'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['sale_price'];?>
</span>
<?php } else { ?>
   <span id="ptp"<?php if (!$_smarty_tpl->tpl_vars['CTRL_HIDE_PRICES']->value) {?> data-price="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['price_to_pay'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['price'];?>
</span>
<?php }?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['PRODUCT']->value['discounts'])) {?>
<p>(<a href="#quantity_discounts"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['bulk_discount'];?>
</a>)</p>
<?php }?>

<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
   <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['default_currency'];?>
" />
   <meta itemprop="price" content="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['PRODUCT']->value['price_to_pay'],'/[^0-9.]+/','');?>
"/>
<?php if (($_smarty_tpl->tpl_vars['CTRL_ALLOW_PURCHASE']->value) && (!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value)) {?>
<div class="row collapse">
   <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['available'] <= 0) {?>
   <div class="small-12 columns">
      <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['unavailable'];?>
" class="button small postfix disabled expand marg-top" disabled>
   </div>
   <?php } else { ?>
   <div class="medium-2 columns show-for-medium-up">
      <input type="text" name="quantity" value="1" maxlength="3" class="quantity required text-center">
      <input type="hidden" name="add" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['product_id'];?>
">
   </div>
   <div  class="small-12 medium-10 columns">
      <link itemprop="availability" href="http://schema.org/InStock" />
      <button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>
" class="button postfix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>
</button>
   </div>
   <?php }?>
</div>
<?php } else { ?>
   <?php if ($_smarty_tpl->tpl_vars['CTRL_HIDE_PRICES']->value) {?>
<p class="buy_button"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['login_to_view'];?>
</strong></p>
   <?php } elseif ($_smarty_tpl->tpl_vars['CTRL_OUT_OF_STOCK']->value) {?>
   <link itemprop="availability" href="http://schema.org/OutOfStock" />
<p class="buy_button"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['out_of_stock'];?>
</strong></p>
   <?php }
}?>
</div><?php }
}
