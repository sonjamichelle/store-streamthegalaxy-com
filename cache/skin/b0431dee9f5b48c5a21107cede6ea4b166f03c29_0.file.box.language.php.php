<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:17:15
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.language.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd40b595de5_04696226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0431dee9f5b48c5a21107cede6ea4b166f03c29' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.language.php',
      1 => 1560269327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd40b595de5_04696226 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LANGUAGES']->value) {?>
<div class="right text-center show-for-medium-up" id="box-language">
   <a href="#" data-dropdown="language-switch" class="button white small" title="<?php echo $_smarty_tpl->tpl_vars['current_language']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/language/flags/<?php echo $_smarty_tpl->tpl_vars['current_language']->value['code'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['current_language']->value['title'];?>
"></a>
   <ul id="language-switch" data-dropdown-content class="f-dropdown">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['current_language']->value['code'] !== $_smarty_tpl->tpl_vars['language']->value['code']) {?>
      <li class="text-left"><a href="<?php echo $_smarty_tpl->tpl_vars['language']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/language/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
"> <?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</a></li>
      <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </ul>
</div>
<?php }
}
}
