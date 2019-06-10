<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:42:00
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_7Cbhyv/skins/default/templates/main.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea478a352a7_69381427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0f7f3f29674651be08382af25e8529f2c762de5' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_7Cbhyv/skins/default/templates/main.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/common.search.php' => 1,
    'file:templates/common.navigation.php' => 1,
    'file:templates/common.breadcrumb.php' => 1,
    'file:templates/common.gui_message.php' => 1,
    'file:templates/ccpower.php' => 1,
    'file:templates/element.welcome_tour.php' => 1,
  ),
),false)) {
function content_5cfea478a352a7_69381427 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="utf-8">
   <head>
      <meta charset="utf-8">
      <title><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_admin_cp'];?>
</title>
      <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/favicon.ico" type="image/x-icon">
      <link href='//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/styles/layout.css?<?php echo $_smarty_tpl->tpl_vars['VERSION_HASH']->value;?>
" media="screen">
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/styles/font-awesome.min.css?<?php echo $_smarty_tpl->tpl_vars['VERSION_HASH']->value;?>
">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEAD_CSS']->value, 'style');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['style']->value) {
?>
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['VERSION_HASH']->value;?>
" media="screen">
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/js/styles/styles.php?<?php echo $_smarty_tpl->tpl_vars['VERSION_HASH']->value;?>
" media="screen">
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/styles/dropzone.css?<?php echo $_smarty_tpl->tpl_vars['VERSION_HASH']->value;?>
" media="screen">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEAD_JS']->value, 'js_src');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js_src']->value) {
?>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_src']->value;?>
"><?php echo '</script'; ?>
>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </head>
   <body>
      <div id="header">
         <a href="?"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/logo.cubecart.png" width="158" height="30" id="logo"></a>
         <span class="user_info"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_welcome_back'];?>
 <a href="?_g=settings&node=admins&action=edit&admin_id=<?php echo $_smarty_tpl->tpl_vars['ADMIN_UID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ADMIN_USER']->value;?>
</a> - <a href="?_g=logout&amp;token=<?php echo $_smarty_tpl->tpl_vars['SESSION_TOKEN']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['logout'];?>
 <i class="fa fa-sign-out"></i></a></span>
      </div>
      <div id="wrapper">
         <div id="navigation">
            <?php $_smarty_tpl->_subTemplateRender('file:templates/common.search.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:templates/common.navigation.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
         </div>
         <?php $_smarty_tpl->_subTemplateRender('file:templates/common.breadcrumb.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
         <div id="content">
            <div id="tab_control">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TABS']->value, 'tab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
?>
               <div <?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['tab_id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['tab']->value['tab_id'];?>
" <?php }?>class="tab">
               <?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['notify'])) {?><span class="tab_notify"><?php echo $_smarty_tpl->tpl_vars['tab']->value['notify'];?>
</span><?php }?>
               <a href="<?php echo $_smarty_tpl->tpl_vars['tab']->value['url'];
echo $_smarty_tpl->tpl_vars['tab']->value['target'];?>
"<?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['accesskey'])) {?> accesskey="<?php echo $_smarty_tpl->tpl_vars['tab']->value['accesskey'];?>
"<?php }?> target="<?php echo $_smarty_tpl->tpl_vars['tab']->value['a_target'];?>
"><?php echo $_smarty_tpl->tpl_vars['tab']->value['name'];?>
</a>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </div>
         <div id="content_body">
            <?php $_smarty_tpl->_subTemplateRender('file:templates/common.gui_message.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div id="page_content">
               <div id="loading_content"><i class="fa fa-spinner fa-pulse"></i></div>
               <?php echo $_smarty_tpl->tpl_vars['DISPLAY_CONTENT']->value;?>

            </div>
         </div>
         <?php $_smarty_tpl->_subTemplateRender('file:templates/ccpower.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      </div>
      <div style="display: none" id="val_admin_folder"><?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
</div>
      <div style="display: none" id="val_admin_file"><?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_file'];?>
</div>
      <div style="display: none" id="val_skin_folder"><?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
</div>
      <div style="display: none" id="val_admin_lang"><?php echo $_smarty_tpl->tpl_vars['val_admin_lang']->value;?>
</div>
      <?php $_smarty_tpl->_subTemplateRender('file:templates/element.welcome_tour.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/js/jquery-ui-1.11.2.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/js/plugins.php?<?php echo $_smarty_tpl->tpl_vars['VERSION_HASH']->value;?>
"><?php echo '</script'; ?>
>
      <!-- Include CKEditor -->
      <?php echo '<script'; ?>
 type="text/javascript" src="includes/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="includes/ckeditor/adapters/jquery.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/js/dropzone.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
>
         
         $(window).load(function() {
           $("#joyrideTour").joyride({
             autoStart: <?php echo $_smarty_tpl->tpl_vars['TOUR_AUTO_START']->value;?>
,
             postStepCallback: function (index, tip) {
               if (index == 6) {
                  $('<p><iframe src="//player.vimeo.com/video/118638908" width="500" height="313" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></p>').insertAfter($(".joyride_tour_end p").last());
               }
             },
             postRideCallback: function (){
              $.ajax({url: "<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_file'];?>
?_g=settings&node=admins&tour_shown=<?php echo $_smarty_tpl->tpl_vars['ADMIN_UID']->value;?>
"});
             },
           });
         });
         
      <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/js/admin.js?<?php echo $_smarty_tpl->tpl_vars['VERSION_HASH']->value;?>
"><?php echo '</script'; ?>
>
      <?php if (isset($_smarty_tpl->tpl_vars['CLOSE_WINDOW']->value)) {?>
      <?php echo '<script'; ?>
 type="text/javascript">
         $(document).ready(function () {
          setInterval(function() { window.close(); }, 1000);
         });
      <?php echo '</script'; ?>
>
      <?php }?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EXTRA_JS']->value, 'js_src');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js_src']->value) {
?>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_src']->value;?>
"><?php echo '</script'; ?>
>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BODY_JS']->value, 'js_src');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js_src']->value) {
?>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_src']->value;?>
"><?php echo '</script'; ?>
>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </body>
</html><?php }
}
