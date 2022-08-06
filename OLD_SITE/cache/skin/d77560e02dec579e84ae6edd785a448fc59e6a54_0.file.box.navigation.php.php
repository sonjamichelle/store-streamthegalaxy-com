<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:17:15
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.navigation.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd40b006bc2_78167325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd77560e02dec579e84ae6edd785a448fc59e6a54' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.navigation.php',
      1 => 1560269327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd40b006bc2_78167325 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['CATEGORIES']->value) {
echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;?>

<?php } else { ?>
<nav class="top-bar category-nav" data-topbar="" id="box-navigation">
  <ul class="title-area">
     <li class="name"></li>
     <li class="toggle-topbar left"><a href=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['title'];?>
 <svg class="icon"><use xlink:href="#icon-caret-down"></use></svg></a></li>
  </ul>
  <section class="top-bar-section">
     <h5 class="hide"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['title'];?>
</h5>
     <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="left">
        <li itemprop="name" class="show-for-medium-up"><a itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['home'];?>
"><svg class="icon"><use xlink:href="#icon-home"></use></svg></a></li>
        <?php echo $_smarty_tpl->tpl_vars['NAVIGATION_TREE']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['CTRL_CERTIFICATES']->value && !$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value) {?>
        <li itemprop="name"><a itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['certificates'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['giftcerts'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['giftcerts'];?>
</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['CTRL_SALE']->value) {?>
        <li itemprop="name"><a itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['saleitems'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['saleitems'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['saleitems'];?>
</a></li>
        <?php }?>
     </ul>
  </section>
</nav><?php }
}
}
