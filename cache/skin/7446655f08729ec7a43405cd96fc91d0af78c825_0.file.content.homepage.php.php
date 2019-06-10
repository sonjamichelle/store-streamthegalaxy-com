<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:41:26
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/content.homepage.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea45606ed46_43314494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7446655f08729ec7a43405cd96fc91d0af78c825' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/content.homepage.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfea45606ed46_43314494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/includes/lib/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if (isset($_smarty_tpl->tpl_vars['DOCUMENT']->value)) {?>
<div id="content_homepage">
    <?php if ($_smarty_tpl->tpl_vars['DOCUMENT']->value['hide_title'] == 0) {?><h1><?php echo $_smarty_tpl->tpl_vars['DOCUMENT']->value['title'];?>
</h1><?php }?>
    <?php echo $_smarty_tpl->tpl_vars['DOCUMENT']->value['content'];?>

</div>
<?php }
if ($_smarty_tpl->tpl_vars['LATEST_PRODUCTS']->value) {?>
<div id="content_latest_products">
   <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['latest_products'];?>
</h2>
   <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3" data-equalizer>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LATEST_PRODUCTS']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
      <li>
         <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" class="panel add_to_basket">
            <div data-equalizer-watch>
               <div class="text-center">
                  <a class="th" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"></a>
               </div>
               <h3><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],38,"&hellip;");?>
</a></h3>
               <?php if ($_smarty_tpl->tpl_vars['product']->value['review_score'] && $_smarty_tpl->tpl_vars['CTRL_REVIEW']->value) {?>
               <div class="rating"> <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= 5) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= 5; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['review_score'] >= $_smarty_tpl->tpl_vars['i']->value) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/star.png" alt=""> <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['review_score'] > ($_smarty_tpl->tpl_vars['i']->value-1) && $_smarty_tpl->tpl_vars['product']->value['review_score'] < $_smarty_tpl->tpl_vars['i']->value) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/star_half.png" alt=""> <?php } else { ?> <img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/star_off.png" alt=""> <?php }?>
                  <?php }
}
?> 
               </div>
               <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['ctrl_sale']) {?>
            <span class="old_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span> <span class="sale_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['sale_price'];?>
</span>
            <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>

            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['CTRL_HIDE_PRICES']->value) {?>
            <div class="row collapse marg-top">
               <div class="small-12 columns">
                   <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="button small postfix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['info'];?>
</a>
               </div>
            </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['available'] <= 0) {?>
            <div class="row collapse marg-top">
               <div class="small-12 columns">
                  <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['unavailable'];?>
" class="button small disabled postfix expand" disabled>
               </div>
            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['ctrl_stock'] && !$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value) {?>
            <div class="row collapse marg-top">
               <div class="small-3 columns">
                  <input type="text" name="quantity" maxlength="3" value="1" class="quantity required text-center">
               </div>
               <div class="small-9 columns ">
                  <button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>
" class="button small postfix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>
</button>
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
            <input type="hidden" name="add" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
">
         </form>
      </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </ul>
</div>
<?php }
}
}
