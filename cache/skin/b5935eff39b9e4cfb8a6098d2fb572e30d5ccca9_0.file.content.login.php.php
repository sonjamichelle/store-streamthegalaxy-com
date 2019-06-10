<?php
/* Smarty version 3.1.33, created on 2019-06-10 19:08:01
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/content.login.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfeaa91348d62_07588003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5935eff39b9e4cfb8a6098d2fb572e30d5ccca9' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/content.login.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfeaa91348d62_07588003 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
   <div class="large-6 columns">
      <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" id="login_form" method="post">
         <p class="show-for-small-only"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['want_to_signup'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/register.html"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register_here'];?>
</a></p>
         <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['login'];?>
</h2>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LOGIN_HTML']->value, 'html');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['html']->value) {
?>
         <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         <div class="row">
            <div class="small-12 columns">
               <label for="login-username" class="show-for-medium-up"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['email_address'];?>
</label>
               <input type="text" autocomplete="off" name="username" id="login-username" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['email_address'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['required'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" required>
            </div>
         </div>
         <div class="row">
            <div class="small-12 columns">
               <label for="login-password" class="show-for-medium-up"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['password'];?>
</label><input type="password" autocomplete="off" name="password" id="login-password" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['password'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['required'];?>
" required>
            </div>
         </div>
         <div class="row">
            <div class="small-12 columns">
               <p><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['recover'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['forgotten_password'];?>
</a></p>
            </div>
         </div>
         <div class="row">
            <div class="small-12 columns"><input type="checkbox" name="remember" id="login-remember" value="1" <?php if ($_smarty_tpl->tpl_vars['REMEMBER']->value) {?>checked<?php }?>><label for="login-remember"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['remember_me'];?>
</label></div>
         </div>
         <div class="row">
            <div class="small-12 columns">
               <button name="submit" type="submit" class="button"><svg class="icon"><use xlink:href="#icon-sign-in"></use></svg> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['log_in'];?>
</button>
            </div>
         </div>
         <input type="hidden" name="redir" value="<?php echo $_smarty_tpl->tpl_vars['REDIRECT_TO']->value;?>
">
      </form>
   </div>
   <div class="large-6 columns show-for-medium-up">
      <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register'];?>
</h2>
      <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register_welcome'];?>
</p>
      <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['register'];?>
" class="button"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register'];?>
</a>
   </div>
</div>
<div class="hide" id="validate_email"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['error_email_invalid'];?>
</div>
<div class="hide" id="empty_password"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['error_password_empty'];?>
</div><?php }
}
