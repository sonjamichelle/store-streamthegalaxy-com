<?php
/* Smarty version 3.1.33, created on 2019-06-10 19:07:50
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.product.review_score.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfeaa86ca0078_34483566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c779f8f54eba7f14913500ffd584c85506d1ac86' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.product.review_score.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfeaa86ca0078_34483566 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['PRODUCT']->value['review_score'] && $_smarty_tpl->tpl_vars['CTRL_REVIEW']->value) {?>
<p itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
   <meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['REVIEW_AVERAGE']->value;?>
">
   <meta itemprop="reviewCount" content="<?php echo $_smarty_tpl->tpl_vars['REVIEW_COUNT']->value;?>
">
   <meta itemprop="bestRating" content="5"/>
   <meta itemprop="worstRating" content="0"/>
   <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= 5) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= 5; $_smarty_tpl->tpl_vars['i']->value++) {
?>
   <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['review_score'] >= $_smarty_tpl->tpl_vars['i']->value) {?>
   <img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/star.png" alt="">
   <?php } elseif ($_smarty_tpl->tpl_vars['PRODUCT']->value['review_score'] > ($_smarty_tpl->tpl_vars['i']->value-1) && $_smarty_tpl->tpl_vars['PRODUCT']->value['review_score'] < $_smarty_tpl->tpl_vars['i']->value) {?>
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
<div><?php echo $_smarty_tpl->tpl_vars['LANG_REVIEW_INFO']->value;?>
</div>
</p>
<?php }
}
}
