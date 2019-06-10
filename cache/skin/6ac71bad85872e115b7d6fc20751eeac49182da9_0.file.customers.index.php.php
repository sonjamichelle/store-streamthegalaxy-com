<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:50:04
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_7Cbhyv/skins/default/templates/customers.index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea65ca8dbb4_73050979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ac71bad85872e115b7d6fc20751eeac49182da9' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_7Cbhyv/skins/default/templates/customers.index.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/element.hook_form_content.php' => 2,
  ),
),false)) {
function content_5cfea65ca8dbb4_73050979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/includes/lib/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/includes/lib/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div>
  <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" enctype="multipart/form-data">
  <?php if (isset($_smarty_tpl->tpl_vars['DISPLAY_LIST']->value)) {?>
  <div id="customer-list" class="tab_content">
    <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_list'];?>
</h3>
    <p>
	<strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_key_type'];?>
:</strong><br>
	  <i class="fa fa-user registered" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_key_registered'];?>
"></i> - <?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_key_registered'];?>
<br>
	  <i class="fa fa-user unregistered" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_key_unregistered'];?>
"></i> - <?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_key_unregistered'];?>

	</p>
	<table width="100%">
	  <thead>
		<tr>
		  <td><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['status'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['type'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['customer'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['email'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['registered'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['no_orders'];?>
</td>
		  <td>&nbsp;</td>
		</tr>
	  </thead>
	  <tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOMERS']->value, 'customer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customer']->value) {
?>
		<tr>
		  <td align="center"><input type="hidden" name="status[<?php echo $_smarty_tpl->tpl_vars['customer']->value['customer_id'];?>
]" id="status_<?php echo $_smarty_tpl->tpl_vars['customer']->value['customer_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['status'];?>
" class="toggle"></td>
		  <td align="center">
		  	<?php if ($_smarty_tpl->tpl_vars['customer']->value['type'] == 1) {?>
		  	<i class="fa fa-user registered" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_key_registered'];?>
"></i>
		  	<?php } elseif ($_smarty_tpl->tpl_vars['customer']->value['type'] == 2) {?>
		  	<i class="fa fa-user unregistered" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_key_unregistered'];?>
"></i>
		  	<?php }?>
		  </td>
		  <td><a href="<?php echo $_smarty_tpl->tpl_vars['customer']->value['edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['customer']->value['last_name'];?>
, <?php echo $_smarty_tpl->tpl_vars['customer']->value['first_name'];?>
</a> <?php if (!empty($_smarty_tpl->tpl_vars['customer']->value['groups'])) {?>(<?php echo $_smarty_tpl->tpl_vars['customer']->value['groups'];?>
)<?php }?></td>
		  <td><?php echo $_smarty_tpl->tpl_vars['customer']->value['email'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['customer']->value['registered'];?>
</td>
		  <td align="center">
		  <?php if ($_smarty_tpl->tpl_vars['customer']->value['order_count'] > 0) {?>
		  	<a href="?_g=orders&customer_id=<?php echo $_smarty_tpl->tpl_vars['customer']->value['customer_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customer']->value['order_count'];?>
</a>
		  <?php } else { ?>
		  	<?php echo $_smarty_tpl->tpl_vars['customer']->value['order_count'];?>

		  <?php }?>
		  </td>
		  <td align="center">
		  	<a href="<?php echo $_smarty_tpl->tpl_vars['customer']->value['signinas_url'];?>
" target="_blank"><i class="fa fa-sign-in" title="<?php echo $_smarty_tpl->tpl_vars['customer']->value['signinas_name'];?>
"></i></a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['customer']->value['edit'];?>
"><i class="fa fa-pencil-square-o" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"></i></a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['customer']->value['delete'];?>
" class="delete" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><i class="fa fa-trash" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
"></i></a>
		  </td>
		</tr>
		<?php
}
} else {
?>
		<tr>
		  <td colspan="7" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['none'];?>
</strong></td>
		</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	  </tbody>
	  <tfoot>
	    <tr>
	      <td colspan="7">
		  	<div class="pagination">
			  	<span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['total'];?>
: <?php echo $_smarty_tpl->tpl_vars['TOTAL_RESULTS']->value;?>
</span>
			  	<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
&nbsp;
			</div>
	    </td>
	  </tr>
	  </tfoot>
	</table>

	<?php if (isset($_smarty_tpl->tpl_vars['CUSTOMER_EXPORT_LIST']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOMER_EXPORT_LIST']->value, 'export');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['export']->value) {
?>
	<input type="submit" name="external_report[<?php echo $_smarty_tpl->tpl_vars['export']->value['folder'];?>
]" class="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['export_to'];?>
 <?php echo $_smarty_tpl->tpl_vars['export']->value['description'];?>
">
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
  </div>

  <div id="customer-groups" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_groups'];?>
</h3>
	<fieldset id="group-list"><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_groups_available'];?>
</legend>
	  <?php if (isset($_smarty_tpl->tpl_vars['CUSTOMER_GROUPS']->value)) {?>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOMER_GROUPS']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
	  <div>
		<span class="actions">
		  <a href="#" class="remove" name="group_delete" rel="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
"><i class="fa fa-trash" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
"></i></a>
		</span>
		<strong><span class="editable" name="group_edit[<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
][name]"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
</span></strong>
		<br>
		<?php if (!empty($_smarty_tpl->tpl_vars['group']->value['group_description'])) {?>
		<span class="editable" name="group_edit[<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
][description]"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_description'];?>
</span>
		<?php } else { ?>
		<span class="editable" name="group_edit[<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
][description]"></span>
		<?php }?>
	  </div>
	  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	  <?php } else { ?>
	  <div><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['none'];?>
</div>
	  <?php }?>
	</fieldset>
	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_groups_create'];?>
</legend>
	  <div><label for="group_add_name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['name'];?>
</label><span><input type="text" name="group_add[group_name]" id="group_add_name" class="textbox"></span></div>
	  <div><label for="group_add_description"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['description'];?>
</label><span><textarea name="group_add[group_description]" id="group_add_description" class="textbox"></textarea></span></div>
	</fieldset>
  </div>

  <?php $_smarty_tpl->_subTemplateRender('file:templates/element.hook_form_content.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="form_control">
	<input type="hidden" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER']->value['customer_id'];?>
">
	<input type="hidden" name="previous-tab" id="previous-tab" value="">
	<input type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
">
  </div>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['DISPLAY_CUSTOMER_FORM']->value)) {?>
	<div id="general" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['ADD_EDIT_CUSTOMER']->value;?>
</h3>
	  <fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['details'];?>
</legend>
		<div><label for="customer_status"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['status'];?>
</label><span><input type="hidden" name="customer[status]" id="customer_status" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER']->value['status'];?>
" class="toggle"></span></div>
		<div><label for="cust-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['title'];?>
</label><span><input type="text" name="customer[title]" id="cust-title" class="textbox capitalize" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER']->value['title'];?>
"></span></div>
		<div><label for="cust-firstname"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['name_first'];?>
</label><span><input type="text" name="customer[first_name]" id="cust-firstname" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER']->value['first_name'];?>
" class="textbox capitalize"></span></div>
		<div><label for="cust-lastname"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['name_last'];?>
</label><span><input type="text" name="customer[last_name]" id="cust-lastname" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER']->value['last_name'];?>
" class="textbox capitalize"></span></div>
		<div>
		  <label for="cust-type"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['customer_type'];?>
</label>
		  <span>
		    <select name="customer[type]" id="cust-type" class="textbox">
		      <option value="1" <?php if ($_smarty_tpl->tpl_vars['CUSTOMER']->value['type'] == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_key_registered'];?>
</option>
		      <option value="2" <?php if ($_smarty_tpl->tpl_vars['CUSTOMER']->value['type'] == 2) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_key_unregistered'];?>
</option>
		    </select>
		  </span>
		</div>
	  </fieldset>
	  <fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['contact_details'];?>
</legend>
		<div><label for="cust-email"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['email'];?>
</label><span><input type="text" name="customer[email]" id="cust-email" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER']->value['email'];?>
" class="textbox"></span></div>
		<div><label for="cust-phone"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['phone'];?>
</label><span><input type="text" name="customer[phone]" id="cust-phone" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER']->value['phone'];?>
" class="textbox"></span></div>
		<div><label for="cust-mobile"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['mobile'];?>
</label><span><input type="text" name="customer[mobile]" id="cust-mobile" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER']->value['mobile'];?>
" class="textbox"></span></div>
		<div><label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['customer_subscribed'];?>
</label><span>
		<select name="customer[subscription_status]" id="subscription_status" class="textbox">
		  <option value="0" <?php if (!$_smarty_tpl->tpl_vars['CUSTOMER']->value['subscription_status']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['no'];?>
</option>
		  <option value="1" <?php if ($_smarty_tpl->tpl_vars['CUSTOMER']->value['subscription_status']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['yes'];?>
</option>
		</select></span></div>
		<div><label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['ip_address'];?>
</label><span><?php echo $_smarty_tpl->tpl_vars['CUSTOMER']->value['ip_address'];?>
</span></div>
	  </fieldset>
	  <fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['password'];?>
</legend>
		<div><label for="cust-password"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['password_new'];?>
</label><span><input type="password" autocomplete="off" name="customer[password]" id="cust-password" class="textbox"></span></div>
		<div><label for="cust-passconf"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['password_confirm'];?>
</label><span><input type="password" autocomplete="off" name="customer[passconf]" id="cust-passconf" rel="cust-password" class="textbox confirm"></span></div>
	  </fieldset>
	</div>

	<div id="address" class="tab_content">
	  <?php if (isset($_smarty_tpl->tpl_vars['DISPLAY_ADDRESS_EDIT']->value)) {?>
	  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['address_edit'];?>
</h3>
	  <fieldset>
	  <div><label for="address_desc"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['description'];?>
</label><span><input type="text" name="address[description]" id="address_desc" value="<?php echo $_smarty_tpl->tpl_vars['ADDRESS']->value['description'];?>
" class="textbox"></span></div>
	  <div><label for="address_title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['title'];?>
</label><span><input type="text" name="address[title]" id="address_title" value="<?php echo $_smarty_tpl->tpl_vars['ADDRESS']->value['title'];?>
" class="textbox capitalize"></span></div>
	  <div><label for="address_firstname"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['name_first'];?>
</label><span><input type="text" name="address[first_name]" id="address_firstname" value="<?php echo $_smarty_tpl->tpl_vars['ADDRESS']->value['first_name'];?>
" class="textbox capitalize"></span></div>
	  <div><label for="address_lastname"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['name_last'];?>
</label><span><input type="text" name="address[last_name]" id="address_lastname" value="<?php echo $_smarty_tpl->tpl_vars['ADDRESS']->value['last_name'];?>
" class="textbox capitalize"></span></div>
	  <div><label for="address_company"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['company_name'];?>
</label><span><input type="text" name="address[company_name]" id="address_company" value="<?php echo $_smarty_tpl->tpl_vars['ADDRESS']->value['company_name'];?>
" class="textbox"></span></div>
	  <div><label for="address_line1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['line1'];?>
</label><span><input type="text" name="address[line1]" id="address_line1" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['ADDRESS']->value['line1']);?>
" class="textbox"></span></div>
	  <div><label for="address_line2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['line2'];?>
</label><span><input type="text" name="address[line2]" id="address_line2" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['ADDRESS']->value['line2']);?>
" class="textbox"></span></div>
	  <div><label for="address_town"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['town'];?>
</label><span><input type="text" name="address[town]" id="address_town" value="<?php echo $_smarty_tpl->tpl_vars['ADDRESS']->value['town'];?>
" class="textbox"></span></div>
	  <div><label for="country_list"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['country'];?>
</label><span>
		<select name="address[country]" id="country-list" class="textbox">
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COUNTRIESL']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['country']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
	  </span></div>
	  <div><label for="state-list"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['state'];?>
</label><span><input type="text" name="address[state]" id="state-list" value="<?php echo $_smarty_tpl->tpl_vars['ADDRESS']->value['state'];?>
" class="textbox"></span></div>
	  <div><label for="address_postcode"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['postcode'];?>
</label><span><input type="text" name="address[postcode]" id="address_postcode" value="<?php echo $_smarty_tpl->tpl_vars['ADDRESS']->value['postcode'];?>
" class="textbox uppercase"></span></div>
	  <div><label for="billing"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['billing_address'];?>
</label><span><input type="hidden" name="address[billing]" id="billing" value="<?php echo $_smarty_tpl->tpl_vars['ADDRESS']->value['billing'];?>
" class="toggle"></div>
	  <div><label for="default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['default_delivery_address'];?>
</label><span><input type="hidden" name="address[default]" id="default" value="<?php echo $_smarty_tpl->tpl_vars['ADDRESS']->value['default'];?>
" class="toggle"></div>
	  <input type="hidden" name="address[address_id]" value="<?php echo $_smarty_tpl->tpl_vars['ADDRESS']->value['address_id'];?>
">
	  </fieldset>
	  <?php }?>

	  <?php if (isset($_smarty_tpl->tpl_vars['DISPLAY_ADDRESS_LIST']->value)) {?>
	  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['address_book'];?>
</h3>
	  <div id="address-list">
		<?php if (isset($_smarty_tpl->tpl_vars['ADDRESS_LIST']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ADDRESS_LIST']->value, 'address');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
?>
		<div class="note">
		  <span class="actions">
			<a href="<?php echo $_smarty_tpl->tpl_vars['address']->value['edit'];?>
#address" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"><i class="fa fa-pencil-square-o" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"></i></a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['address']->value['delete'];?>
" class="delete" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><i class="fa fa-trash" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
"></i></a>
		  </span>
		  <strong><?php echo $_smarty_tpl->tpl_vars['address']->value['description'];?>
</strong> - <?php echo $_smarty_tpl->tpl_vars['address']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['last_name'];?>

		  <?php ob_start();
echo $_smarty_tpl->tpl_vars['address']->value['company_name'];
$_prefixVariable1 = ob_get_clean();
if (!empty($_prefixVariable1)) {?>(<?php echo $_smarty_tpl->tpl_vars['address']->value['company_name'];?>
)<?php }?>
		  <br>
		  <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['address']->value['line1']);?>
, <?php if (!empty($_smarty_tpl->tpl_vars['address']->value['line2'])) {
echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['address']->value['line2']);?>
, <?php }
echo mb_strtoupper($_smarty_tpl->tpl_vars['address']->value['town'], 'UTF-8');?>
, <?php if (!empty($_smarty_tpl->tpl_vars['address']->value['state_name'])) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['address']->value['state_name'], 'UTF-8');?>
, <?php }
echo $_smarty_tpl->tpl_vars['address']->value['postcode'];?>
, <?php echo $_smarty_tpl->tpl_vars['address']->value['country_name'];?>

		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } else { ?>
	    <div><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['notify_address_none'];?>
</div>
	    <?php }?>
	  </div>
	  <div><a href="#" class="colorbox address-form"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['address_add'];?>
</a></div>
	  <?php }?>
	</div>

	<?php if (isset($_smarty_tpl->tpl_vars['DISPLAY_CUSTOMER_GROUPS']->value)) {?>
	<div id="groups" class="tab_content">
	  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_groups'];?>
</h3>
	  <fieldset id="membership"><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_groups_membership'];?>
</legend>
		<?php if (isset($_smarty_tpl->tpl_vars['CUSTOMER_GROUPS']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOMER_GROUPS']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
		<div>
		  <span class="actions">
			<a href="#" class="remove" name="membership_delete" rel="<?php echo $_smarty_tpl->tpl_vars['group']->value['membership_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
"><i class="fa fa-trash" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
"></i></a>
		  </span>
		  <?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>

		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	    <?php }?>
	  </fieldset>
	  <fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['title_groups_membership_add'];?>
</legend>
		<div>
		  <select id="group-join" name="membership_add[]" class="add display">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['please_select'];?>
</option>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_CUSTOMER_GROUPS']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		  </select>
		  <a href="#" class="add" target="membership" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['add'];?>
"><i class="fa fa-plus-circle" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['add'];?>
"></i></a>
		</div>
	  </fieldset>
	</div>
	<?php }?>

	<div id="consent" class="tab_content">
	  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer']['cookie_consent'];?>
</h3>
		<?php if ($_smarty_tpl->tpl_vars['COOKIE_CONSENT']->value) {?>
	  <table>
			<thead>
			<tr>
					<th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['log'];?>
</th>
					<th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['ip_address'];?>
</th>
					<th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['time'];?>
</th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COOKIE_CONSENT']->value, 'log');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
?>
			<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['log']->value['log'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['log']->value['ip_address'];?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['time'],((string)$_smarty_tpl->tpl_vars['CONFIG']->value['time_format']));?>
</td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
		<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['none'];?>

		<?php }?>
	</div>
	
	<?php if (isset($_smarty_tpl->tpl_vars['PLUGIN_TABS']->value)) {?>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PLUGIN_TABS']->value, 'tab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>

	  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>	

	<?php $_smarty_tpl->_subTemplateRender('file:templates/element.hook_form_content.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	<div class="form_control">
	  <input type="hidden" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER']->value['customer_id'];?>
">
	  <input type="hidden" name="previous-tab" id="previous-tab" value="">
	  <input type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
">
	</div>
  <?php }?>
  
  </form>

  <div style="display: none;">
	<div id="address-form" class="tb-form">
	  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['address_add'];?>
</h3>
	  <fieldset>
	  <div><label for="edit_description"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['description'];?>
</label><span><input type="text" name="address[description][]" id="edit_description" class="textbox add display" required="required"> *</span></div>
	  <div><label for="edit_title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['title'];?>
</label><span><input type="text" name="address[title][]" id="edit_title" class="textbox add capitalize"></span></div>
	  <div><label for="edit_first_name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['name_first'];?>
</label><span><input type="text" name="address[first_name][]" id="edit_first_name" class="textbox add capitalize" required="required"> *</span></div>
	  <div><label for="edit_last_name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['name_last'];?>
</label><span><input type="text" name="address[last_name][]" id="edit_last_name" class="textbox add capitalize" required="required"> *</span></div>
	  <div><label for="edit_company_name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['company_name'];?>
</label><span><input type="text" name="address[company_name][]" id="edit_company_name" class="textbox add"></span></div>
	  <div><label for="edit_line1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['line1'];?>
</label><span><input type="text" name="address[line1][]" id="edit_line1" class="textbox add" required="required"> *</span></div>
	  <div><label for="edit_line2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['line2'];?>
</label><span><input type="text" name="address[line2][]" id="edit_line2" class="textbox add"></span></div>
	  <div><label for="edit_town"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['town'];?>
</label><span><input type="text" name="address[town][]" id="edit_town" class="textbox add" required="required"> *</span></div>
	  <div>
		<label for="edit_country"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['country'];?>
</label>
		<span>
		  <select name="address[country][]" id="edit_country" rel="edit_state" class="textbox add country-list">
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COUNTRIES']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['country']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		  </select>
		 *</span>
	  </div>
	  <div><label for="edit_state"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['state'];?>
</label><span><input type="text" name="address[state][]" id="edit_state" class="textbox add state-list"> *</span></div>
	  <div><label for="edit_postcode"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['postcode'];?>
</label><span><input type="text" name="address[postcode][]" id="edit_postcode" class="textbox add uppercase" required="required"> *</span></div>
	  <div><label for="billing"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['billing_address'];?>
</label><span><input type="checkbox" name="address[billing][]" id="billing" class="add" value="1"></span></div>
	  <div><label for="default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['default_delivery_address'];?>
</label><span><input type="checkbox" name="address[default][]" id="default"  class="add" value="1"></span></div>
	  </fieldset>
	  <input type="hidden" name="add_div_class" value="note">
	  <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['add'];?>
" class="add" target="address-list">
	</div>

  </div>
  <?php echo '<script'; ?>
 type="text/javascript">
	var county_list = <?php echo $_smarty_tpl->tpl_vars['JSON_STATE']->value;?>

  <?php echo '</script'; ?>
>
</div>
<?php }
}
