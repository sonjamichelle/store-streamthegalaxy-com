<?php
/* Smarty version 3.1.33, created on 2019-06-10 19:07:50
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.product_reviews.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfeaa86cf21a6_39783852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5348dc9df1620d3559e5ad3794dd689305db9e89' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.product_reviews.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/content.recaptcha.php' => 1,
  ),
),false)) {
function content_5cfeaa86cf21a6_39783852 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['CTRL_REVIEW']->value) {?>
<div id="element-reviews">
   <h2 id="reviews"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['customer_reviews'];?>
</h2>
   <div id="review_read">
      <?php if ($_smarty_tpl->tpl_vars['REVIEWS']->value) {?>
      <div class="pagination_top"><span class="pagination"><?php if (isset($_smarty_tpl->tpl_vars['PAGINATION']->value)) {
echo $_smarty_tpl->tpl_vars['PAGINATION']->value;
}?></span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['average_rating'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['REVIEW_AVERAGE']->value;?>
</strong></div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REVIEWS']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
      <div class="panel" itemprop="review" itemscope itemtype="http://schema.org/Review">
         <meta itemprop="datePublished" content="<?php echo $_smarty_tpl->tpl_vars['review']->value['date_schema'];?>
">
         <div class="row">
            <div class="medium-9 columns">
               <h3><?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
</h3>
            </div>
            <div class="medium-3 columns text-right" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
               <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= 5) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= 5; $_smarty_tpl->tpl_vars['i']->value++) {
?>
               <?php if ($_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['review']->value['rating']) {?>
               <img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/star.png" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
               <?php } else { ?>
               <img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/star_off.png" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
               <?php }?>
               <?php }
}
?>
               <meta itemprop="worstRating" content="0">
               <meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['review']->value['rating'];?>
">
               <meta itemprop="bestRating" content="5">
            </div>
         </div>
         <div class="row">
            <?php if ($_smarty_tpl->tpl_vars['review']->value['gravatar_exists']) {?>
            <div class="small-3 medium-2 columns">
               <a href="http://gravatar.com/emails/"><img class="th marg-right" src="<?php echo $_smarty_tpl->tpl_vars['review']->value['gravatar_src'];?>
&s=90" align="left"></a>
            </div>
            <?php }?>
            <div class="<?php if ($_smarty_tpl->tpl_vars['review']->value['gravatar_exists']) {?>small-9 medium-10<?php } else { ?>small-12<?php }?> columns">
               <blockquote><span itemprop="description"><?php echo $_smarty_tpl->tpl_vars['review']->value['review'];?>
</span><cite><span itemprop="author"><?php echo $_smarty_tpl->tpl_vars['review']->value['name'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['review']->value['date'])) {?> (<?php echo $_smarty_tpl->tpl_vars['review']->value['date'];?>
)<?php }?></cite></blockquote>
            </div>
         </div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php if (isset($_smarty_tpl->tpl_vars['PAGINATION']->value)) {
echo $_smarty_tpl->tpl_vars['PAGINATION']->value;
}?>
      <a href="#" class="button review_show"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['write_a_review'];?>
</a>
      <?php } else { ?>
      <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_not_reviewed'];?>
</p>
      <a href="#" class="button review_show"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['write_a_review'];?>
</a>
      <?php }?>
   </div>
   <div id="review_write" class="hide">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['write_review'];?>
</h3>
      <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
#reviews_write" id="review_form" method="post">
         <div class="panel">
            <?php if ($_smarty_tpl->tpl_vars['IS_USER']->value) {?>
            <div class="row">
               <div class="small-12 columns"><input type="checkbox" id="rev_anon" name="review[anon]" value="1"> <label for="rev_anon"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['post_anonymously'];?>
</label></div>
            </div>
            <?php } else { ?>
            <div class="row">
               <div class="small-12 columns"><label for="rev_name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['name'];?>
</label><input id="rev_name" type="text" name="review[name]" value="<?php echo $_smarty_tpl->tpl_vars['WRITE']->value['name'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['required'];?>
" required></div>
            </div>
            <div class="row">
               <div class="small-12 columns"><label for="rev_email"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['email'];?>
</label><input id="rev_email" type="text" name="review[email]" value="<?php echo $_smarty_tpl->tpl_vars['WRITE']->value['email'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['email'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['required'];?>
" required></div>
            </div>
            <?php }?>
            <div class="row">
               <div class="small-12 columns" id="review_stars">
                  <label for="rating"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['documents']['rating'];?>
</label>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RATING_STARS']->value, 'star');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['star']->value) {
?>
                  <input type="radio" id="rating_<?php echo $_smarty_tpl->tpl_vars['star']->value['value'];?>
" name="rating" value="<?php echo $_smarty_tpl->tpl_vars['star']->value['value'];?>
" class="rating" <?php echo $_smarty_tpl->tpl_vars['star']->value['checked'];?>
>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               </div>
            </div>
            <div class="row">
               <div class="small-12 columns"><label for="rev_title" class="inline"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['review_title'];?>
</label><input id="rev_title" type="text" name="review[title]" value="<?php echo $_smarty_tpl->tpl_vars['WRITE']->value['title'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['review_title'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['required'];?>
" required></div>
            </div>
            <div class="row">
               <div class="small-12 columns"><label for="rev_review" class="return"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['review'];?>
</label><textarea id="rev_review" name="review[review]" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['review'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['required'];?>
" required><?php echo $_smarty_tpl->tpl_vars['WRITE']->value['review'];?>
</textarea></div>
            </div>
            <?php $_smarty_tpl->_subTemplateRender('file:templates/content.recaptcha.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
         </div>
         <div class="clearfix">
            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['submit_review'];?>
" data-form-id="review_form" id="review_submit" class="g-recaptcha button">
            <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['cancel'];?>
" class="button secondary right review_hide">
         </div>
      </form>
   </div>
   <div class="hide" id="validate_email"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['error_email_invalid'];?>
</div>
</div>
<?php }
}
}
