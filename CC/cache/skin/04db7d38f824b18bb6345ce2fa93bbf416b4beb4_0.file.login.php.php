<?php
/* Smarty version 3.1.33, created on 2019-06-11 11:33:28
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/CC/admin_pPMyqP/skins/default/templates/login.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cff91881ceb29_92078408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04db7d38f824b18bb6345ce2fa93bbf416b4beb4' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/CC/admin_pPMyqP/skins/default/templates/login.php',
      1 => 1560252100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/common.gui_message.php' => 1,
    'file:templates/ccpower.php' => 1,
  ),
),false)) {
function content_5cff91881ceb29_92078408 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_admin_cp'];?>
</title>
  <link href='//fonts.googleapis.com/css?family=Roboto:400,700,700italic,400italic&subset=cyrillic,cyrillic-ext,latin,greek-ext,greek,latin-ext' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/styles/layout.css?<?php echo $_smarty_tpl->tpl_vars['VERSION_HASH']->value;?>
" media="screen">
</head>
<body class="login">
<div class="preauth-body">
  <div id="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/cubecart-logo.png" alt="CubeCart Logo"></div>

  <div class="preauth-wrapper">
  <?php $_smarty_tpl->_subTemplateRender('file:templates/common.gui_message.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" enctype="application/x-www-form-urlencoded" name="acp-login">
	<div id="login-box">
	<?php if (isset($_smarty_tpl->tpl_vars['RECOVERY']->value)) {?>
	  <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['title_password_new'];?>
</h1>
	  <div><span><input type="text" name="validate" id="validate" class="textbox required" value="<?php echo $_smarty_tpl->tpl_vars['REQUEST']->value['validate'];?>
"></span><label for="validate"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['validation_key'];?>
</label>:</div>
	  <div><span><input type="text" name="email" id="email" class="textbox required" value="<?php echo $_smarty_tpl->tpl_vars['REQUEST']->value['email'];?>
"></span><label for="email"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['email'];?>
</label>:</div>
	  <div><span><input type="password" autocomplete="off" name="password[new]" id="password" class="textbox required"></span><label for="password"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['new_password'];?>
</label>:</div>
	  <div><span><input type="password" autocomplete="off" name="password[confirm]" id="passconf" class="textbox required"></span><label for="passconf"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['new_password_confirm'];?>
</label>:</div>
	  <div id="login-box-foot">
	    <span><a href="?_g=login"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['login_return'];?>
</a></span>
	    <input name="login" type="submit" id="login" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['submit'];?>
" class="submit no-change">
	  </div>
	<?php } elseif (isset($_smarty_tpl->tpl_vars['PASSWORD']->value)) {?>
	  <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['forgotten_password'];?>
</h1>
	  <div><span><input type="text" name="username" id="username" class="textbox required" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
"></span><label for="username"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['username'];?>
</label>:</div>
	  <div><span><input type="text" name="email" id="email" class="textbox required" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
"></span><label for="email"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['email'];?>
</label>:</div>
	  <div id="login-box-foot">
	    <span><a href="?_g=login"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['login_return'];?>
</a></span>
	    <input name="login" type="submit" id="login" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['submit'];?>
" class="submit no-change">
	  </div>
	<?php } else { ?>
	  <h1><?php if ($_smarty_tpl->tpl_vars['SSL']->value['state']) {?><span id="login_ssl_switch"><a href="<?php echo $_smarty_tpl->tpl_vars['SSL']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SSL']->value['icon'];?>
"></a></span><?php }
echo $_smarty_tpl->tpl_vars['LANG']->value['account']['title_login_acp'];?>
</h1>
	  <div><span><input type="text" name="username" id="username" class="textbox required" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
"></span><label for="username"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['username'];?>
</label>:</div>
	  <div><span><input type="password" name="password" id="password" class="textbox required" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
"></span><label for="password"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['password'];?>
</label>:</div>
	  <div id="login-box-foot">
		<span><a href="?_g=password"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['forgotten_password'];?>
</a></span>
		<input type="hidden" name="redir" value="<?php echo $_smarty_tpl->tpl_vars['REDIRECT_TO']->value;?>
">
		<input name="login" type="submit" id="login" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['log_in'];?>
" class="submit no-change">
	  </div>
	<?php }?>
	</div>
	
  </form>
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
  <!-- Common JavaScript functionality -->
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/js/admin.js?<?php echo $_smarty_tpl->tpl_vars['VERSION_HASH']->value;?>
"><?php echo '</script'; ?>
>
  </div>
  <?php $_smarty_tpl->_subTemplateRender('file:templates/ccpower.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
</body>
</html><?php }
}
