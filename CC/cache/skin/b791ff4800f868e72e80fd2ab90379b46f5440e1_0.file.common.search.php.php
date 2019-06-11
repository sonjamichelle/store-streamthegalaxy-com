<?php
/* Smarty version 3.1.33, created on 2019-06-11 11:33:39
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/CC/admin_pPMyqP/skins/default/templates/common.search.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cff9193cd77a6_49881053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b791ff4800f868e72e80fd2ab90379b46f5440e1' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/CC/admin_pPMyqP/skins/default/templates/common.search.php',
      1 => 1560252100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cff9193cd77a6_49881053 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="text" class="form-control search" id="search-placeholder" placeholder="&#xF002; Search&hellip;">
<div id="sidebar_contain">
	<div id="sidebar_content">
	  <div class="sidebar_content">
		<form action="?_g=customers" method="post">
		  <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['title_search_customers'];?>
</h4>
		  <input type="text" name="search[keywords]" placeholder="&#xF002; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['type_to_search'];?>
" id="customer_id" class="textbox left ajax" rel="user">
		  <input type="hidden" id="result_customer_id" class="clickSubmit" name="search[customer_id]" value="">
		  <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['go'];?>
" class="go_search">
		  
		</form>
	  </div>
	  <div class="sidebar_content">
		<form action="?_g=products" method="post">
		  <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['title_search_products'];?>
</h4>
		  <input type="text" name="search[product]" placeholder="&#xF002; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['type_to_search'];?>
" id="product" class="textbox left ajax" rel="product">
		  <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['go'];?>
" class="go_search">
		   <input type="hidden" id="result_product" class="clickSubmit" name="search[product_id]" value="">
		   
		</form>
	  </div>
	  <div class="sidebar_content">
		<form action="?_g=orders" method="post">
		  <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['title_search_orders'];?>
</h4>
		  <input type="text" name="search[order_number]" id="search_order" class="textbox left">
		  <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['go'];?>
" class="go_search">
		  
		</form>
	  </div>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SIDEBAR_CONTENT']->value, 'content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
?><div class="sidebar_content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div><?php }
}
