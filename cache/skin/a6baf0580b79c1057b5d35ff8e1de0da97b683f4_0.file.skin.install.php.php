<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:33:47
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/setup/skin.install.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea28b8fdf19_54344530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6baf0580b79c1057b5d35ff8e1de0da97b683f4' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/setup/skin.install.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfea28b8fdf19_54344530 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>CubeCart&reg; <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
 Installer</title>
  <meta charset="utf-8" />
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="styles/style.css" media="screen" />
  <?php if (isset($_smarty_tpl->tpl_vars['REFRESH']->value)) {?><meta http-equiv="refresh" content="5" /><?php }?>
</head>
<body>
<div id="frame">
  <div id="header">
	<div id="language">
	  <form action="index.php" method="post" enctype="multipart/form-data">
		<select name="language" id="language-select" class="textbox">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANG_LIST']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['code'];?>
"<?php echo $_smarty_tpl->tpl_vars['lang']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
		<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['update'];?>
" class="mini_button" />
	  </form>
	</div>
  </div>

  <?php if (isset($_smarty_tpl->tpl_vars['PROGRESS']->value)) {?>
  <div id="progress">
	<div class="container">
	  <div class="indicator" style="width: <?php echo $_smarty_tpl->tpl_vars['PROGRESS']->value['percent'];?>
% !important;">&nbsp;</div>
	</div>
	<div class="text"><?php echo $_smarty_tpl->tpl_vars['PROGRESS']->value['message'];?>
</div>
  </div>
  <?php }?>


  <?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value)) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['errors'])) {?>
  <div id="error">
	<h3 class="first"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['gui_message']['errors_detected'];?>
</h3>
	<ul>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['errors'], 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?><li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
  </div>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['notices'])) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['notices'], 'notice');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notice']->value) {
?>
  <div id="notice">
	<h3 class="first"><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</h3>
  </div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
  <?php }?>

  <form action="index.php" method="post" enctype="multipart/form-data">
	<div id="content">
  <?php if (isset($_smarty_tpl->tpl_vars['MODE_COMPAT']->value)) {?>
	  <h3 class="first"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['title_compat_check'];?>
</h3>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CHECKS']->value, 'check');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['check']->value) {
?>
	  <div>
		<span class="result"><?php if ($_smarty_tpl->tpl_vars['check']->value['status']) {?><span class="pass"><?php echo $_smarty_tpl->tpl_vars['check']->value['pass'];?>
</span><?php } else { ?><span class="fail"><?php echo $_smarty_tpl->tpl_vars['check']->value['fail'];?>
</span><?php }?></span>
	  <?php echo $_smarty_tpl->tpl_vars['check']->value['title'];?>

	  </div>
	  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['MODE_METHOD']->value)) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['SHOW_UPGRADE']->value)) {?>
	  <div id="method-upgrade" class="click-select">
	  <input type="radio" name="method" value="upgrade" />
	  <span class="icon"><img src="images/upgrade.gif" alt="" /></span>
	  <h3 class="first"><?php echo $_smarty_tpl->tpl_vars['LANG_UPGRADE_CUBECART_TITLE']->value;?>
</h3>
	  <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['upgrade_existing'];?>
</p>
	</div>
	<?php }?>
	<div id="method-install" class="click-select<?php if (isset($_smarty_tpl->tpl_vars['SHOW_UPGRADE']->value)) {?> faded<?php }?>">
	  <input type="radio" name="method" value="install" />
	  <span class="icon"><img src="images/install.gif" alt="" /></span>
	  <h3 class="first"><?php echo $_smarty_tpl->tpl_vars['LANG_INSTALL_CUBECART_TITLE']->value;?>
</h3>
	  <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['install_fresh'];?>
</p>
	</div>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['MODE_LICENCE']->value)) {?>
	<h3 class="first"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['title_licence'];?>
</h3>
	<div><textarea class="license" readonly><?php echo $_smarty_tpl->tpl_vars['SOFTWARE_LICENCE']->value;?>
</textarea></div>
	<div><input type="checkbox" id="licence_agree" name="licence" value="1" /> <label for="licence_agree"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['licence_agree'];?>
</label></div>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['MODE_PERMS']->value)) {?>
	<h3 class="first"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['title_file_permissions'];?>
</h3>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PERMISSIONS']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
	  <div>
		<span class="result"><?php if ($_smarty_tpl->tpl_vars['file']->value['status']) {?><span class="pass"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['writable'];?>
</span><?php } else { ?><span class="fail"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['read_only'];?>
</span><?php }?></span>
		<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>

	  </div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php if (isset($_smarty_tpl->tpl_vars['PERMS_PASS']->value)) {?><input type="hidden" name="permissions" value="1" /><?php }?>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['MODE_INSTALL']->value)) {?>
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['title_database_settings'];?>
</h3>
	<fieldset>
	  <div><label for="form-dbhhost" class="help" rel="" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['help_dbhostname'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['db_host'];?>
</label><span><input type="text" name="global[dbhost]" id="form-dbhost" value="<?php echo $_smarty_tpl->tpl_vars['FORM']->value['global']['dbhost'];?>
" class="textbox required" /></span></div>
	  <div><label for="form-dbdatabase" class="help" rel="" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['help_dbname'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['db_name'];?>
</label><span><input type="text" name="global[dbdatabase]" id="form-dbdatabase" value="<?php echo $_smarty_tpl->tpl_vars['FORM']->value['global']['dbdatabase'];?>
" class="textbox required" /></span></div>
	  <div><label for="form-dbusername" class="help" rel="" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['help_dbusername'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['username'];?>
</label><span><input type="text" name="global[dbusername]" id="form-dbusername" value="<?php echo $_smarty_tpl->tpl_vars['FORM']->value['global']['dbusername'];?>
" class="textbox required" /></span></div>
	  <div><label for="form-dbpassword" class="help" rel="" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['help_dbuserpass'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['password'];?>
</label><span><input type="password" autocomplete="off" name="global[dbpassword]" id="form-dbpassword" value="<?php echo $_smarty_tpl->tpl_vars['FORM']->value['global']['dbpassword'];?>
" class="textbox" /></span></div>
	  <div><label for="form-dbpassconf" class="help" rel="" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['help_dbconfirmpass'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['password_confirm'];?>
</label><span><input type="password" autocomplete="off" name="global[dbpassconf]" rel="form-dbpassword" id="form-dbpassconf" value="<?php echo $_smarty_tpl->tpl_vars['FORM']->value['global']['dbpassconf'];?>
" class="textbox confirm" /></span></div>
	  <div><label for="form-dbprefix" class="help" rel="" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['help_dbprefix'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['db_prefix'];?>
</label><span><input type="text" name="global[dbprefix]" id="form-dbprefix" value="<?php echo $_smarty_tpl->tpl_vars['FORM']->value['global']['dbprefix'];?>
" class="textbox" /></span></div>
	  <div><label for="form-dbport" class="help" rel="" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['help_dbport'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['db_port'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['optional'];?>
</label><span><input type="text" name="global[dbport]" id="form-dbport" value="<?php echo $_smarty_tpl->tpl_vars['FORM']->value['global']['dbport'];?>
" class="textbox" /></span></div>
	  <div><label for="form-dbsocket" class="help" rel="" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['help_dbsocket'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['db_socket'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['optional'];?>
</label><span><input type="text" name="global[dbsocket]" id="form-dbsocket" value="<?php echo $_smarty_tpl->tpl_vars['FORM']->value['global']['dbsocket'];?>
" class="textbox" /></span></div>
	</fieldset>
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['title_store_settings'];?>
</h3>
	<fieldset>
	  <div><label for="form-store_name" rel=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['store_name'];?>
</label><span><input type="text" name="config[store_name]" id="form-store_name" value="<?php echo $_smarty_tpl->tpl_vars['FORM']->value['config']['store_name'];?>
" class="textbox required" /></span></div>
	  <div>
		<label for="form-language" class="help" rel="" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['help_defaultlang'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['default_language'];?>
</label>
		<span>
		  <select name="config[default_language]" id="form-language" class="textbox required">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['please_select'];?>
</option>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
"<?php echo $_smarty_tpl->tpl_vars['language']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		  </select>
		</span>
	  </div>
	  <div>
		<label for="form-currency" class="help" rel="" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['help_defaultcurrency'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['default_currency'];?>
</label>
		<span>
		  <select name="config[default_currency]" id="form-currency" class="textbox required">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['please_select'];?>
</option>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURRENCIES']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
"<?php echo $_smarty_tpl->tpl_vars['currency']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
 - <?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		  </select>
		</span>
	  </div>
	</fieldset>
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['title_admin_profile'];?>
</h3>
	<fieldset>
	  <div><label for="form-username" rel=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['username'];?>
</label><span><input type="text" name="admin[username]" id="form-username" value="<?php echo $_smarty_tpl->tpl_vars['FORM']->value['admin']['username'];?>
" class="textbox required" /></span></div>
	  <div><label for="form-password" rel=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['password'];?>
</label><span><input type="password" name="admin[password]" id="form-password" value="<?php echo $_smarty_tpl->tpl_vars['FORM']->value['admin']['password'];?>
" class="textbox required" /></span></div>
	  <div><label for="form-passconf" rel=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['password_confirm'];?>
</label><span><input type="password" name="admin[passconf]" id="form-passconf" rel="form-password" value="<?php echo $_smarty_tpl->tpl_vars['FORM']->value['admin']['passconf'];?>
" class="textbox required confirm" /></span></div>
	  <div><label for="form-realname" rel=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['name_full'];?>
</label><span><input type="text" name="admin[name]" id="form-realname" value="<?php echo $_smarty_tpl->tpl_vars['FORM']->value['admin']['name'];?>
" class="textbox required" /></span></div>
	  <div><label for="form-email" rel=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['email'];?>
</label><span><input type="text" name="admin[email]" id="form-email" value="<?php echo $_smarty_tpl->tpl_vars['FORM']->value['admin']['email'];?>
" class="textbox required" /></span></div>
	</fieldset>
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['title_advanced_settings'];?>
</h3>
	<fieldset>
	  <div><label for="form-drop" class="help" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['install_drop_tables_explained'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['install_drop_tables'];?>
</label><span><input type="checkbox" name="drop" id="form-drop" value="1" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['install_drop_tables_explained'];?>
</span></div>
	</fieldset>
	<input type="hidden" name="progress" value="0" />
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['MODE_UPGRADE']->value)) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['MODE_UPGRADE_CONFIRM']->value)) {?>
	<div><?php echo $_smarty_tpl->tpl_vars['LANG_UPGRADE_FROM_TO']->value;?>
<br />
	<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['upgrade_will_reload'];?>
<br />
	<br /><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['upgrade_click_continue'];?>
</div>
	<input type="hidden" name="progress" value="0" />
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['MODE_UPGRADE_PROGRESS']->value)) {?>
	  <div>
	  <p><?php echo $_smarty_tpl->tpl_vars['LANG_UPGRADE_IN_PROGRESS']->value;?>
</p>
	  <?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value)) {?>
	  <p>Please click continue to continue upgrade.</p>
	  <?php } else { ?>
	  <img src="images/loading.gif" align="middle" />
	  <?php }?>
	  </div>
	<?php }?>
  <?php }?>


  <?php if (isset($_smarty_tpl->tpl_vars['MODE_COMPLETE']->value)) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['MODE_COMPLETE_INSTALL']->value)) {?>
	  <h3 class="first"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['install_complete'];?>
</h3>
	  <div><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['install_complete_note'];?>
</div>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['MODE_COMPLETE_UPGRADE']->value)) {?>
	  <h3 class="first"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['upgrade_complete'];?>
</h3>
	  <div><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['upgrade_complete_note'];?>
</div>
	<?php }?>
  <?php }?>
  	<?php if (isset($_smarty_tpl->tpl_vars['MODE_COMPLETE_UPGRADE']->value) && isset($_smarty_tpl->tpl_vars['SHOW_LINKS']->value)) {?>
  	<p class="url_change"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['urls_changed'];?>
</p>
  	<?php }?>
  	<?php if (isset($_smarty_tpl->tpl_vars['SHOW_LINKS']->value)) {?>
	  <div>
		<h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['link_admin_panel'];?>
</h4>
		<a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
</a><br>
		<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['link_admin_panel_note'];?>

		<h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['link_store_front'];?>
</h4>
		<a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
</a>
	  </div>
	<?php }?>
	  <div id="toolbar">
		<?php if (isset($_smarty_tpl->tpl_vars['CONTROLLER']->value['continue'])) {?><span class="continue"><input type="submit" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['continue'];?>
" /></span><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['CONTROLLER']->value['retry'])) {?><span class="continue"><input type="submit" name="retry" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['button_retry'];?>
" /></span><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['CONTROLLER']->value['restart'])) {?><span class="cancel"><input type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['setup']['button_restart'];?>
" class="cancel" /></span><?php }?>
	  </div>
	</div>
  </form>
</div>
<div id="footer">eCommerce by <a href="http://www.cubecart.com">CubeCart</a></div>
<?php echo '<script'; ?>
 type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../js/plugins/jquery.pstrength.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/install.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
