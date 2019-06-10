<?php
/* Smarty version 3.1.33, created on 2019-06-10 19:25:18
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/content.category.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfeae9e700cd2_06772076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74bacafe59da15ecebbf91d59aef425733513dd8' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/content.category.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfeae9e700cd2_06772076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/includes/lib/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<h2><?php echo $_smarty_tpl->tpl_vars['category']->value['cat_name'];?>
</h2>
<?php if (isset($_smarty_tpl->tpl_vars['category']->value['image'])) {?>
<div class="row">
   <div class="small-12 columns"><img src="<?php echo $_smarty_tpl->tpl_vars['category']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_name'];?>
" class="marg-bottom"></div>
</div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['category']->value['cat_desc'])) {?>
<div class="row">
   <div class="small-12 columns"><?php echo $_smarty_tpl->tpl_vars['category']->value['cat_desc'];?>
</div>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['SUBCATS']->value) && $_smarty_tpl->tpl_vars['SUBCATS']->value) {?>
<ul class="medium-block-grid-6 text-center small-block-grid-3" data-equalizer>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUBCATS']->value, 'subcat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->value) {
?>
   <li data-equalizer-watch>
      <a href="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['cat_name'];?>
">
        <img class="th" src="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['cat_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['cat_name'];?>
">
      </a>
      <br>
      <a href="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['cat_name'];?>
"><small><?php echo $_smarty_tpl->tpl_vars['subcat']->value['cat_name'];?>
</small></a>
   </li>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
if ($_smarty_tpl->tpl_vars['PRODUCTS']->value) {?>
<div class="row">
   <div class="small-12 medium-8 columns">
      <?php if (isset($_smarty_tpl->tpl_vars['SORTING']->value)) {?>
      <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" class="autosubmit" method="post">
         <div class="row">
            <div class="small-3 medium-2 columns">
               <label for="product_sort"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['sort_by'];?>
</label>
            </div>
            <div class="small-9 medium-5 columns left">
               <select name="sort" id="product_sort">
                  <option value="" disabled><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['please_select'];?>
</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SORTING']->value, 'sort');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sort']->value) {
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['sort']->value['field'];?>
|<?php echo $_smarty_tpl->tpl_vars['sort']->value['order'];?>
" <?php echo $_smarty_tpl->tpl_vars['sort']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['sort']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['sort']->value['direction'];?>
)</option>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               </select>
               <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['sort'];?>
" class="hide">
            </div>
         </div>
      </form>
      <?php }?>
   </div>
   <div class="medium-4 columns show-for-medium-up">
      <dl class="sub-nav right" id="layout_toggle">
         <dd><a href="#" class="grid_view"><svg class="icon"><use xlink:href="#icon-th-large"></use></svg></a></dd>
         <dd class="active"><a href="#" class="list_view"><svg class="icon"><use xlink:href="#icon-th-list"></use></svg></a></dd>
      </dl>
   </div>
</div>
<?php }?>
<div id="ccScroll">
   <ul class="small-block-grid-1 product_list" data-equalizer>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCTS']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
      <li>
         <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" class="panel add_to_basket">
            <div class="row product_list_view">
               <div class="small-3 columns">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" class="th" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
                  </a>
               </div>
               <div class="small-6 columns">
                  <h3>
                     <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a> 
                  </h3>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['review_score']) {?>
                  <div>
                     <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= 5) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= 5; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                     <?php if ($_smarty_tpl->tpl_vars['product']->value['review_score'] >= $_smarty_tpl->tpl_vars['i']->value) {?>
                     <img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/star.png" alt="">
                     <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['review_score'] > ($_smarty_tpl->tpl_vars['i']->value-1) && $_smarty_tpl->tpl_vars['product']->value['review_score'] < $_smarty_tpl->tpl_vars['i']->value) {?>
                     <img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/star_half.png" alt="">
                     <?php } else { ?>
                     <img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/star_off.png" alt="">
                     <?php }?>
                     <?php }
}
?>
                  </div>
                                    <?php }?>
                  <?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>

               </div>
               <div class="small-3 columns">
                  <h3>
                     <?php if ($_smarty_tpl->tpl_vars['product']->value['ctrl_sale']) {?><span class="old_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span> <span class="sale_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['sale_price'];?>
</span>
                     <?php } else { ?>
                     <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>

                     <?php }?>
                  </h3>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['available'] <= 0) {?>
                  <div class="row collapse">
                     <div class="small-12 columns">
                        <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['unavailable'];?>
" class="button small postfix disabled expand marg-top" disabled>
                     </div>
                  </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['ctrl_stock'] && !$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value) {?>
                  <div class="row collapse">
                     <div class="small-4 columns">
                        <input type="text" name="quantity" value="1" maxlength="3" class="quantity text-center">
                     </div>
                     <div class="small-8 columns">
                        <button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>
" class="button small postfix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>
</button>
                     </div>
                  </div>
                  <?php } elseif (!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value) {?>
                  <div class="row collapse">
                     <div class="small-12 columns">
                        <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['out_of_stock_short'];?>
" disabled class="button disabled expand small">
                     </div>
                  </div>
                  <?php }?>
               </div>
            </div>
            <div class="product_grid_view hide">
               <div data-equalizer-watch>
                  <div class="text-center">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><img class="th" src="<?php echo $_smarty_tpl->tpl_vars['product']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"></a>
                  </div>
                  <h3><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],38,"&hellip;");?>
</a></h3>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['review_score']) {?>
                  <div class="rating">
                     <div>
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= 5) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= 5; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['review_score'] >= $_smarty_tpl->tpl_vars['i']->value) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/star.png" alt="">
                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['review_score'] > ($_smarty_tpl->tpl_vars['i']->value-1) && $_smarty_tpl->tpl_vars['product']->value['review_score'] < $_smarty_tpl->tpl_vars['i']->value) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/star_half.png" alt="">
                        <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/star_off.png" alt="">
                        <?php }?>
                        <?php }
}
?>
                     </div>
                                       </div>
                  <?php }?>
               </div>
               <h3>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['ctrl_sale']) {?><span class="old_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span> <span class="sale_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['sale_price'];?>
</span>
                  <?php } else { ?>
                  <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>

                  <?php }?>
               </h3>
                              <?php if ($_smarty_tpl->tpl_vars['product']->value['available'] <= 0) {?>
               <div class="row collapse marg-top">
                  <div class="small-12 columns">
                     <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['unavailable'];?>
" class="button small postfix disabled expand" disabled>
                  </div>
               </div>
                              <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['ctrl_stock'] && !$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value) {?>
               <div class="row collapse marg-top">
                  <div class="small-3 columns">
                     <input type="text" name="quantity" value="1" maxlength="3" class="quantity text-center" disabled>
                  </div>
                  <div class="small-9 columns ">
                     <button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>
" class="button small postfix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>
</button>
                     <input type="hidden" name="add" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
">
                  </div>
               </div>
                <?php } elseif (!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value) {?>
               <div class="row collapse marg-top">
                  <div class="small-12 columns">
                     <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['out_of_stock_short'];?>
" class="button small postfix disabled expand marg-top" disabled>
                  </div>
               </div>
               <?php }?>
            </div>
         </form>
      </li>
      <?php
}
} else {
?>
      <?php if (!isset($_smarty_tpl->tpl_vars['SUBCATS']->value) || !$_smarty_tpl->tpl_vars['SUBCATS']->value) {?>
      <li><?php echo $_smarty_tpl->tpl_vars['LANG']->value['category']['no_products'];?>
</li>
      <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </ul>
         <div class="hide" id="ccScrollCat"><?php echo $_smarty_tpl->tpl_vars['category']->value['cat_id'];?>
</div>
   <?php if ($_smarty_tpl->tpl_vars['page']->value !== 'all' && ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['total']->value)) {?>
   <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['params']) ? $_smarty_tpl->tpl_vars['params']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['var_name']->value] = $_smarty_tpl->tpl_vars['page']->value+1;
$_smarty_tpl->_assignInScope('params', $_tmp_array);?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;
echo http_build_query($_smarty_tpl->tpl_vars['params']->value);
echo $_smarty_tpl->tpl_vars['anchor']->value;?>
" data-next-page="<?php echo $_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['var_name']->value];?>
" data-cat="<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_id'];?>
" class="button tiny expand ccScroll-next"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['more'];?>
 <svg class="icon"><use xlink:href="#icon-angle-down"></use></svg></a>
   <?php }?>
   <div class="text-center hide" id="loading"><svg class="icon-x3"><use xlink:href="#icon-spinner"></use></svg></div>
</div><?php }
}
