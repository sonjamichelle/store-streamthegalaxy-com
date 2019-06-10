<?php
/* Smarty version 3.1.33, created on 2019-06-10 19:07:50
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/content.product.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfeaa86c15e44_61219415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '638b72c68e4b84d7930e3e5c82c6fa1c6e446289' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/content.product.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/element.product.vertical_gallery.php' => 1,
    'file:templates/element.product_reviews.php' => 1,
  ),
),false)) {
function content_5cfeaa86c15e44_61219415 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['PRODUCT']->value) && $_smarty_tpl->tpl_vars['PRODUCT']->value) {?>
<div itemscope itemtype="http://schema.org/Product">
   <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" class="add_to_basket">
      <div class="row">
         <div class="small-12 columns">
            <h1 itemprop="name"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['name'];?>
</h1>
         </div>
      </div>
            <?php $_smarty_tpl->_subTemplateRender('file:templates/element.product.vertical_gallery.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <hr>
      <dl class="tabs" data-tab data-options="scroll_to_content:false">
         <?php if (!empty($_smarty_tpl->tpl_vars['PRODUCT']->value['description'])) {?>
         <dd class="active"><a href="#product_info"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_info'];?>
</a></dd>
         <?php }?>
         <dd><a href="#product_spec"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['specification'];?>
</a></dd>
         <?php if (isset($_smarty_tpl->tpl_vars['PRODUCT']->value['discounts'])) {?>
         <dd><a href="#quantity_discounts"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['quantity_discounts'];?>
</a></dd>
         <?php }?>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCT_TABS_TITLES']->value, 'product_tab_title');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_tab_title']->value) {
?>
            <?php if (isset($_smarty_tpl->tpl_vars['product_tab_title']->value['content_id']) && isset($_smarty_tpl->tpl_vars['product_tab_title']->value['title'])) {?>
         <dd><a href="#<?php echo $_smarty_tpl->tpl_vars['product_tab_title']->value['content_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product_tab_title']->value['title'];?>
</a></dd>
            <?php } else { ?>
         <?php echo $_smarty_tpl->tpl_vars['product_tab_title']->value;?>

            <?php }?>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </dl>
      <div class="tabs-content">
         <?php if (!empty($_smarty_tpl->tpl_vars['PRODUCT']->value['description'])) {?>
         <div class="content active" id="product_info" itemprop="description">
            <?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['description'];?>

         </div>
         <?php }?>
         <div class="content<?php if (empty($_smarty_tpl->tpl_vars['PRODUCT']->value['description'])) {?> active<?php }?>" id="product_spec">
            <table>
               <tbody>
                  <tr>
                     <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_code'];?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['product_code'];?>
</td>
                  </tr>
                  <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['manufacturer']) {?>
                  <tr>
                     <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['manufacturer'];?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['MANUFACTURER']->value;?>
</td>
                  </tr>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['stock_level']) {?>
                  <tr>
                     <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['stock_level'];?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['stock_level'];?>
</td>
                  </tr>
                  <?php }?>
                  <tr>
                     <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['condition'];?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['condition'];?>
</td>
                  </tr>
                  <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['product_weight'] > 0) {?>
                  <tr>
                     <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['weight'];?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['product_weight'];
echo mb_strtolower($_smarty_tpl->tpl_vars['CONFIG']->value['product_weight_unit'], 'UTF-8');?>
</td>
                  </tr>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['product_width'] > 0) {?>
                  <tr>
                     <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['width'];?>
</td>
                     <td><?php echo floatval($_smarty_tpl->tpl_vars['PRODUCT']->value['product_width']);
if ($_smarty_tpl->tpl_vars['PRODUCT']->value['dimension_unit'] == 'in') {?>&#8243;<?php } else {
echo $_smarty_tpl->tpl_vars['PRODUCT']->value['dimension_unit'];
}?></td>
                  </tr>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['product_height'] > 0) {?>
                  <tr>
                     <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['height'];?>
</td>
                     <td><?php echo floatval($_smarty_tpl->tpl_vars['PRODUCT']->value['product_height']);
if ($_smarty_tpl->tpl_vars['PRODUCT']->value['dimension_unit'] == 'in') {?>&#8243;<?php } else {
echo $_smarty_tpl->tpl_vars['PRODUCT']->value['dimension_unit'];
}?></td>
                  </tr>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['product_depth'] > 0) {?>
                  <tr>
                     <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['depth'];?>
</td>
                     <td><?php echo floatval($_smarty_tpl->tpl_vars['PRODUCT']->value['product_depth']);
if ($_smarty_tpl->tpl_vars['PRODUCT']->value['dimension_unit'] == 'in') {?>&#8243;<?php } else {
echo $_smarty_tpl->tpl_vars['PRODUCT']->value['dimension_unit'];
}?></td>
                  </tr>
                  <?php }?>
               </tbody>
            </table>
         </div>
         <?php if (isset($_smarty_tpl->tpl_vars['PRODUCT']->value['discounts'])) {?>
         <div class="content" id="quantity_discounts">
            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['quantity_discounts_explained'];?>
</p>
            <br>
            <table>
               <thead>
                  <tr>
                     <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['quantity'];?>
</th>
                     <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['price_per_unit'];?>
</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="text-center">1</td>
                     <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['price'];?>
</td>
                  </tr>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCT']->value['discounts'], 'discount');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
?>
                  <tr>
                     <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['discount']->value['quantity'];?>
+</td>
                     <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['discount']->value['price'];?>
</td>
                  </tr>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               </tbody>
            </table>
         </div>
         <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCT_TABS_CONTENTS']->value, 'product_tab_content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_tab_content']->value) {
?>
            <?php if (isset($_smarty_tpl->tpl_vars['product_tab_content']->value['content_id']) && isset($_smarty_tpl->tpl_vars['product_tab_content']->value['content'])) {?>
        <div class="<?php if (!empty($_smarty_tpl->tpl_vars['product_tab_content']->value['content_class'])) {
echo $_smarty_tpl->tpl_vars['product_tab_content']->value['content_class'];
} else { ?>content<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['product_tab_content']->value['content_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product_tab_content']->value['content'];?>
</div>
            <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['product_tab_content']->value;?>

            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
   </form>
   <?php if ($_smarty_tpl->tpl_vars['SHARE']->value) {?>
   <hr>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SHARE']->value, 'html');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['html']->value) {
?>
   <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   <?php }?>
   <hr>
   <?php $_smarty_tpl->_subTemplateRender('file:templates/element.product_reviews.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COMMENTS']->value, 'html');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['html']->value) {
?>
   <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div class="hide" id="validate_field_required"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['field_required'];?>
</div>
<?php } else { ?>
<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_doesnt_exist'];?>
</p>
<?php }
}
}
