<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:17:51
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_XCMcfW/skins/default/templates/element.welcome_tour.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd42fa08512_20471128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dac5ee4b55cb3c239b232c1c63aa2a05640bc28' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_XCMcfW/skins/default/templates/element.welcome_tour.php',
      1 => 1560269327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd42fa08512_20471128 (Smarty_Internal_Template $_smarty_tpl) {
?> <ol id="joyrideTour" style="display: none">
		<li data-button="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['ok_go'];?>
">
			<h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['hi_casual'];?>
 <?php echo $_smarty_tpl->tpl_vars['ADMIN_USER_FIRST_NAME']->value;?>
!</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tour_welcome'];?>
</p>
		</li>
		<li data-id="nav_settings">
			<h2>1. <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['nav_settings_store'];?>
</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tour_1'];?>
</p>
		</li>
		<li data-id="nav_categories">
			<h2>2. <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['nav_categories'];?>
</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tour_2'];?>
</p>
		</li>
		<li data-id="nav_products">
			<h2>3. <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['nav_products'];?>
</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tour_3'];?>
</p>
		</li>
		<li data-id="nav_marketplace">
			<h2>4. <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['nav_marketplace'];?>
</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tour_4'];?>
</p>
		</li>
		<li data-id="nav_plugins">
			<h2>5. <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['nav_plugins'];?>
</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tour_5'];?>
</p>
		</li>
		<li data-id="nav_docs">
		<h2>6. <?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tour_6_title'];?>
</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tour_6'];?>
</p>
		</li>
		<li data-id="clear_cache_master">
			<h2>7. <?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tour_7_title'];?>
</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tour_7'];?>
</p>
		</li>
		<li class="joyride_tour_end" data-button="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['close'];?>
">
			<h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['thats_it'];?>
</h2>
			<?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tour_end'];?>

		</li>
</ol><?php }
}
