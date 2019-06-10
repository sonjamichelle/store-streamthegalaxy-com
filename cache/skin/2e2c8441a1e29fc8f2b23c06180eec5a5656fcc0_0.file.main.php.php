<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:41:26
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/main.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea4563b72c8_34968886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e2c8441a1e29fc8f2b23c06180eec5a5656fcc0' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/main.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/element.meta.php' => 1,
    'file:templates/element.css.php' => 1,
    'file:templates/content.recaptcha.head.php' => 1,
    'file:templates/element.google_analytics.php' => 1,
    'file:templates/element.js_head.php' => 1,
    'file:images/icon-sprites.svg' => 1,
    'file:templates/box.off_canvas.right.php' => 1,
    'file:templates/box.off_canvas.left.php' => 1,
    'file:templates/box.eu_cookie.php' => 1,
    'file:templates/box.basket.php' => 1,
    'file:templates/box.currency.php' => 1,
    'file:templates/box.language.php' => 1,
    'file:templates/box.session.php' => 1,
    'file:templates/box.search.php' => 2,
    'file:templates/box.navigation.php' => 1,
    'file:templates/element.breadcrumb.php' => 1,
    'file:templates/box.errors.php' => 1,
    'file:templates/box.progress.php' => 1,
    'file:templates/box.featured.php' => 1,
    'file:templates/box.popular.php' => 1,
    'file:templates/box.sale_items.php' => 1,
    'file:templates/box.documents.php' => 1,
    'file:templates/box.newsletter.php' => 1,
    'file:templates/element.js_foot.php' => 1,
    'file:templates/box.skins.php' => 1,
    'file:templates/ccpower.php' => 1,
    'file:templates/element.markup.json-ld.php' => 1,
  ),
),false)) {
function content_5cfea4563b72c8_34968886 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo $_smarty_tpl->tpl_vars['TEXT_DIRECTION']->value;?>
" lang="<?php echo $_smarty_tpl->tpl_vars['HTML_LANG']->value;?>
">
    <head>
      <title><?php echo $_smarty_tpl->tpl_vars['META_TITLE']->value;?>
</title>
      <?php $_smarty_tpl->_subTemplateRender('file:templates/element.meta.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <link href="<?php echo $_smarty_tpl->tpl_vars['CANONICAL']->value;?>
" rel="canonical">
      <link href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
favicon.ico" rel="shortcut icon" type="image/x-icon">
      <?php $_smarty_tpl->_subTemplateRender('file:templates/element.css.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:templates/content.recaptcha.head.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:templates/element.google_analytics.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:templates/element.js_head.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   </head>
   <body>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BODY_JS_TOP']->value, 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
echo $_smarty_tpl->tpl_vars['js']->value;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_smarty_tpl->_subTemplateRender('file:images/icon-sprites.svg', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   	  <?php if ($_smarty_tpl->tpl_vars['STORE_OFFLINE']->value) {?>
   	  <div data-alert class="alert-box alert"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['warning_offline'];?>
<a href="#" class="close">&times;</a></div>
   	  <?php }?>
      <div class="off-canvas-wrap" data-offcanvas>
         <div class="inner-wrap">
            <?php $_smarty_tpl->_subTemplateRender('file:templates/box.off_canvas.right.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:templates/box.off_canvas.left.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:templates/box.eu_cookie.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="row marg-top" id="top_header">
               <div class="small-4 large-3 columns">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
" class="main-logo"><img src="<?php echo $_smarty_tpl->tpl_vars['STORE_LOGO']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['store_name'];?>
"></a>
               </div>
               <div class="small-8 large-9 columns nav-boxes">
                  <div class="row" id="nav-actions">
                     <div class="small-12 columns">
                        <div class="right text-center"><?php $_smarty_tpl->_subTemplateRender('file:templates/box.basket.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
                        <div class="right text-center show-for-small"><a class="left-off-canvas-toggle button white tiny" href="#"><svg class="icon icon-x2"><use xlink:href="#icon-bars"></use></svg></a> <a class="button white tiny show-small-search" href="#"><svg class="icon icon-x2"><use xlink:href="#icon-search"></use></svg></a></div>
                        <?php $_smarty_tpl->_subTemplateRender('file:templates/box.currency.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:templates/box.language.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:templates/box.session.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                     </div>
                  </div>
                  <div class="row show-for-medium-up">
                     <div class="small-12 columns"><?php $_smarty_tpl->_subTemplateRender('file:templates/box.search.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
                  </div>
               </div>
            </div>
            <div class="row hide" id="small-search">
               <div class="small-12 columns">
                  <?php $_smarty_tpl->_subTemplateRender('file:templates/box.search.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
               </div>
            </div>
            <div class="row">
               <div class="small-12 columns small-collapse">
                  <?php $_smarty_tpl->_subTemplateRender('file:templates/box.navigation.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <div class="hide" id="val_lang_back"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['back'];?>
</div>
               </div>
            </div>
            <div class="row">
               <div class="small-12 columns small-collapse">
                  <?php $_smarty_tpl->_subTemplateRender('file:templates/element.breadcrumb.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
               </div>
            </div>
            <div class="row <?php echo $_smarty_tpl->tpl_vars['SECTION_NAME']->value;?>
_wrapper">
               <div class="small-12 large-9 columns" id="main_content">
                  <?php $_smarty_tpl->_subTemplateRender('file:templates/box.errors.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:templates/box.progress.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php echo $_smarty_tpl->tpl_vars['PAGE_CONTENT']->value;?>

               </div>
               <div class="large-3 columns show-for-large-up" id="sidebar_left">
                  <?php $_smarty_tpl->_subTemplateRender('file:templates/box.featured.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:templates/box.popular.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:templates/box.sale_items.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
               </div>
               <a href="#" class="back-to-top"><span class="show-for-small-only"><svg class="icon"><use xlink:href="#icon-angle-up"></use></svg></span><span class="show-for-medium-up"><svg class="icon"><use xlink:href="#icon-angle-up"></use></svg> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['top'];?>
</span></a>
            </div>
            <footer>
               <div class="row">
                  <div class="medium-7 large-7 columns">
                     <?php $_smarty_tpl->_subTemplateRender('file:templates/box.documents.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                     <div class="show-for-medium-up"><?php echo $_smarty_tpl->tpl_vars['COPYRIGHT']->value;?>
</div>
                  </div>
                  <div class="medium-5 large-5 columns">
                     <?php echo $_smarty_tpl->tpl_vars['SOCIAL_LIST']->value;?>

                     <div class="row collapse">
                        <div class="large-12 columns">
                           <?php $_smarty_tpl->_subTemplateRender('file:templates/box.newsletter.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                           <div class="show-for-small-only"><?php echo $_smarty_tpl->tpl_vars['COPYRIGHT']->value;?>
</div>
                        </div>
                     </div>
                  </div>
               </div>
            </footer>
            <?php $_smarty_tpl->_subTemplateRender('file:templates/element.js_foot.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php echo $_smarty_tpl->tpl_vars['LIVE_HELP']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['DEBUG_INFO']->value;?>

            <?php $_smarty_tpl->_subTemplateRender('file:templates/box.skins.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <a class="exit-off-canvas"></a>
            <?php $_smarty_tpl->_subTemplateRender('file:templates/ccpower.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
         </div>
      </div>
      <?php $_smarty_tpl->_subTemplateRender('file:templates/element.markup.json-ld.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   </body>
</html><?php }
}
