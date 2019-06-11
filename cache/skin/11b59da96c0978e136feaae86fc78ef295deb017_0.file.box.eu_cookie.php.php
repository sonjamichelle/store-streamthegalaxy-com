<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:17:15
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.eu_cookie.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd40b587cb2_28071549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11b59da96c0978e136feaae86fc78ef295deb017' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.eu_cookie.php',
      1 => 1560269327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd40b587cb2_28071549 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['COOKIE_DIALOGUE']->value) {?>
<div class="row" id="eu_cookie_dialogue">
   <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" class="marg" method="POST">
      <div class="small-9 columns">
        <?php echo $_smarty_tpl->tpl_vars['COOKIE_DIALOGUE_TEXT']->value;?>

      </div>
      <div class="small-3 columns">
        <ul class="button-group right">
          <li><input type="submit" class="eu_cookie_button button tiny secondary" name="accept_cookies_submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['accept'];?>
"></li>
          <li><input type="submit" class="eu_cookie_button button tiny alert" name="decline_cookies_accept" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['block'];?>
"></li> 
        </ul>
      </div>
   </form>
</div>
<?php }
}
}
