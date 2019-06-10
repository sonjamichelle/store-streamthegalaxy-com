<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:42:12
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_7Cbhyv/skins/default/templates/settings.index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea4846baf27_76956199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b25b5d4ca85cabe3ee497422b5f229a213839ed8' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_7Cbhyv/skins/default/templates/settings.index.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/element.hook_form_content.php' => 1,
  ),
),false)) {
function content_5cfea4846baf27_76956199 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="form-settings" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post" enctype="multipart/form-data">
   <div id="General" class="tab_content">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['general'];?>
</h3>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_geographical'];?>
</legend>
         <div><label for="store_name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['store_name'];?>
</label><span><input name="config[store_name]" id="store_name" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['store_name'];?>
"></span></div>
         <div><label for="store_address"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['line1'];?>
</label><span><textarea name="config[store_address]" id="store_address" class="textbox"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['store_address'];?>
</textarea></span></div>
         <div><label for="country-list"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['country'];?>
</label><span><select name="config[store_country]" id="country-list" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COUNTRIES']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['numcode'];?>
"<?php echo $_smarty_tpl->tpl_vars['country']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="state-list"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['state'];?>
</label><span><input type="text" name="config[store_zone]" id="state-list" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['store_zone'];?>
"></span></div>
         <div><label for="store_postcode"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['address']['postcode'];?>
</label><span><input name="config[store_postcode]" id="store_postcode" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['store_postcode'];?>
"></span></div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_tax_lang'];?>
</legend>
         <div><label for="default_language"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['default_language'];?>
</label><span><select name="config[default_language]" id="default_language" class="textbox">
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
            </select></span>
         </div>
         <div><label for="default_currency"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['default_currency'];?>
</label><span><select name="config[default_currency]" id="default_currency" class="textbox">
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
            </select></span>
         </div>
         <?php if (!in_array($_smarty_tpl->tpl_vars['CONFIG']->value['store_country'],array(840,124,036))) {?>
         <div><label for="tax_number"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['tax_number'];?>
</label><span><input name="config[tax_number]" id="tax_number" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['tax_number'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['tax_number_placeholder'];?>
"></span></div>
         <?php }?>
         <div><label for="basket_tax_by_delivery"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['tax_customer_by'];?>
</label><span><select name="config[basket_tax_by_delivery]" id="basket_tax_by_delivery" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_BASKET_TAX_BY_DELIVERY']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['social_accounts'];?>
</legend>
         <div><label for="facebook">Facebook</label><span><input name="config[facebook]" id="facebook" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['facebook'];?>
"></span></div>
         <div><label for="flickr">Flickr</label><span><input name="config[flickr]" id="flickr" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['flickr'];?>
"></span></div>
         <div><label for="google_plus">Google+</label><span><input name="config[google_plus]" id="google_plus" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['google_plus'];?>
"></span></div>
         <div><label for="instagram">Instagram</label><span><input name="config[instagram]" id="instagram" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['instagram'];?>
"></span></div>
         <div><label for="linkedin">LinkedIn</label><span><input name="config[linkedin]" id="linkedin" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['linkedin'];?>
"></span></div>
         <div><label for="pinterest">Pinterest</label><span><input name="config[pinterest]" id="pinterest" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['pinterest'];?>
"></span></div>
         <div><label for="twitter">Twitter</label><span><input name="config[twitter]" id="twitter" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['twitter'];?>
"></span></div>
         <div><label for="vimeo">Vimeo</label><span><input name="config[vimeo]" id="vimeo" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['vimeo'];?>
"></span></div>
         <div><label for="wordpress">WordPress</label><span><input name="config[wordpress]" id="wordpress" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['wordpress'];?>
"></span></div>
         <div><label for="youtube">YouTube</label><span><input name="config[youtube]" id="youtube" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['youtube'];?>
"></span></div>
      </fieldset>
   </div>
   <div id="Features" class="tab_content">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_features'];?>
</h3>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['google_analytics'];?>
</legend>
         <div><label for="google_analytics"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['google_analytics_id'];?>
</label><span><input name="config[google_analytics]" id="google_analytics" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['google_analytics'];?>
"></span></div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['nav_prod_reviews'];?>
</legend>
         <div><label for="enable_reviews"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['enable_reviews'];?>
</label><span><input name="config[enable_reviews]" id="enable_reviews" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['enable_reviews'];?>
"></span></div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_orders'];?>
</legend>
         <div><label for="basket_order_expire"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['expire_pending'];?>
</label><span><input name="config[basket_order_expire]" id="basket_order_expire" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['basket_order_expire'];?>
"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['blank_to_disable'];?>
</span></div>
         <div><label for="oid_mode"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['id_mode'];?>
</label><span><select name="config[oid_mode]" id="oid_mode" class="textbox preview_order" onchange="this.value == 'i' ? document.getElementById('i_options').style.display = 'block' :  document.getElementById('i_options').style.display = 'none';">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_OID_MODE']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span></div>
         <div<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['oid_mode'] !== "i") {?> style="display: none"<?php }?> id="i_options" class="stripe">
            <div><label for="oid_prefix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['oid_prefix'];?>
</label>
                  <span>
                        <input name="oid_prefix" id="oid_prefix" class="textbox number preview_order" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['oid_prefix'];?>
">
                  </span>
                  <br><small><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['oid_prefix_desc'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['date_specifiers'];?>
</small>
            </div>
            <div><label for="oid_postfix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['oid_postfix'];?>
</label>
                  <span>
                        <input name="oid_postfix" id="oid_postfix" class="textbox number preview_order" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['oid_postfix'];?>
">
                  </span>
                  <br><small><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['oid_postfix_desc'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['date_specifiers'];?>
</small>
            </div>
            <div><label for="oid_zeros"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['oid_zeros'];
if ($_smarty_tpl->tpl_vars['LOCK_ORDER_NUMBER']->value && $_smarty_tpl->tpl_vars['CONFIG']->value['oid_zeros'] > 0) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['min'];?>
: <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['oid_zeros'];?>
)<?php }?></label>
                  <span>
                        <input  type="number" name="oid_zeros" id="oid_zeros" class="textbox number preview_order" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['oid_zeros'];?>
"<?php if ($_smarty_tpl->tpl_vars['LOCK_ORDER_NUMBER']->value && $_smarty_tpl->tpl_vars['CONFIG']->value['oid_zeros'] > 0) {?> min="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['oid_zeros'];?>
"<?php }?>>
                  </span>
                  <br><small><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['oid_zeros_desc'];?>
</small>
            </div>
            <div><label for="oid_start"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['oid_start'];
if ($_smarty_tpl->tpl_vars['LOCK_ORDER_NUMBER']->value && $_smarty_tpl->tpl_vars['CONFIG']->value['oid_start'] > 0) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['min'];?>
: <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['oid_start'];?>
)<?php }?></label>
                  <span>
                        <input  type="number" name="oid_start" id="oid_start" class="textbox number preview_order" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['oid_start'];?>
"<?php if ($_smarty_tpl->tpl_vars['LOCK_ORDER_NUMBER']->value && $_smarty_tpl->tpl_vars['CONFIG']->value['oid_start'] > 0) {?> min="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['oid_start'];?>
"<?php }?>>
                  </span>
                  <br><small><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['oid_start_desc'];?>
</small>
            </div>
            <div><label for="oid_force"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['oid_force'];?>
</label>
                  <span>
                  <input name="oid_force" id="oid_force" type="hidden" class="toggle" value="0">
                  </span>
                  <br><small><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['oid_force_desc'];?>
</small>
            </div>
        </div>
      <div><label for="order_format_preview">&nbsp;</label><span>
            <button type="button" class="button tiny" id="order_format_preview" onclick="previewOrderFormat()"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['preview'];?>
</button>
            <?php echo '<script'; ?>
>
            function previewOrderFormat() {
                  var qstring = '';
                  $(".preview_order").each(function() {
                        qstring += '&'+this.id+'='+encodeURI(this.value);
                  });
                  $.colorbox({ href:'<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_file'];?>
?_g=xml&function=previewOrderFormat'+qstring})
            }
            <?php echo '</script'; ?>
>
      </div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_sales'];?>
</legend>
         <div><label for="catalogue_sale_mode"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['sales_mode'];?>
</label><span><select name="config[catalogue_sale_mode]" id="catalogue_sale_mode" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_CATALOGUE_SALE_MODE']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="catalogue_sale_percentage"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['sales_percentage'];?>
</label><span><input name="config[catalogue_sale_percentage]" id="catalogue_sale_percentage" type="text" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['catalogue_sale_percentage'];?>
">%</span></div>
         <div><label for="catalogue_sale_items"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['sales_items_count'];?>
</label><span><input name="config[catalogue_sale_items]" id="catalogue_sale_items" type="text" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['catalogue_sale_items'];?>
"></span></div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_flood'];?>
</legend>
         <div><label for="recaptcha"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['recaptcha_enable'];?>
</label><span>
            <select name="config[recaptcha]" id="recaptcha" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_RECAPTCHA']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
         </span></div>
         <div><label for="recaptcha_public_key"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['recaptcha_public_key'];?>
</label><span><input name="config[recaptcha_public_key]" id="recaptcha_public_key" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['recaptcha_public_key'];?>
"></span></div>
         <div><label for="recaptcha_secret_key"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['recaptcha_secret_key'];?>
</label><span><input name="config[recaptcha_secret_key]" id="recaptcha_secret_key" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['recaptcha_secret_key'];?>
"></span></div>
         <div class="clear important"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['new_recaptcha_note'];?>
</strong>
            <?php if (!$_smarty_tpl->tpl_vars['gr_compatibility']->value['v2']) {?>
            <br><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['reCAPTCHA_v2_na'];?>
</strong>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['gr_compatibility']->value['invisible']) {?>
            <br><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['reCAPTCHA_invisible_na'];?>
</strong>
            <?php }?>
         </div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['misc'];?>
</legend>
         <div><label for="admin_notify_status"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['admin_order_status_notification'];?>
</label><span><select name="config[admin_notify_status]" id="admin_notify_status" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_ADMIN_NOTIFY_STATUS']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="no_skip_processing_check"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['no_skip_processing_check'];?>
</label><span><input name="config[no_skip_processing_check]" id="no_skip_processing_check" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['no_skip_processing_check'];?>
"></span></div>
         <div><label for="catalogue_hide_prices"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['hide_prices'];?>
</label><span><input name="config[catalogue_hide_prices]" id="catalogue_hide_prices" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['catalogue_hide_prices'];?>
"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['no_admin_affect'];?>
</div>
         <div><label for="catalogue_mode"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['catalogue_mode'];?>
</label><span><input name="config[catalogue_mode]" id="catalogue_mode" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['catalogue_mode'];?>
"></span></div>
         <div><label for="allow_no_shipping"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['allow_no_shipping'];?>
</label><span><input name="config[allow_no_shipping]" id="allow_no_shipping" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['allow_no_shipping'];?>
"></span></div>
         <div><label for="disable_shipping_groups"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['disable_shipping_groups'];?>
</label><span><input name="config[disable_shipping_groups]" id="disable_shipping_groups" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['disable_shipping_groups'];?>
"></span></div>
         <div><label for="force_completed"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['force_completed'];?>
</label><span><input name="config[force_completed]" id="force_completed" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['force_completed'];?>
"></span></div>
         <div><label for="disable_estimates"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['disable_estimates'];?>
</label><span><input name="config[disable_estimates]" id="disable_estimates" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['disable_estimates'];?>
"></span></div>
      </fieldset>
   </div>
   <div id="Layout" class="tab_content">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_layout'];?>
</h3>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_display'];?>
</legend>
          <div><label for="catalogue_products_per_page"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_per_page'];?>
 (<a href="#" onclick="$('#per_page_note').slideToggle()">Deprecated</a>)</label><span><input name="config[catalogue_products_per_page]" id="catalogue_products_per_page" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['catalogue_products_per_page'];?>
"></span></div>
         <div><label for="default_product_sort"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['default_product_sort'];?>
</label>
            <span>
            <select name="config[product_sort_column]" id="product_sort_column" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_PRODUCT_SORT_COLUMN']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <select name="config[product_sort_direction]" id="product_sort_direction" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_PRODUCT_SORT_DIRECTION']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            </span>
         </div>
         <div><label for="catalogue_show_empty"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['category_display_empty'];?>
</label><span><select name="config[catalogue_show_empty]" id="catalogue_show_empty" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_CATALOGUE_SHOW_EMPTY']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="product_precis"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_precis'];?>
</label><span><input name="config[product_precis]" id="product_precis" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['product_precis'];?>
"></span></div>
         <div><label for="catalogue_expand_tree"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['category_expand_tree'];?>
</label><span><select name="config[catalogue_expand_tree]" id="catalogue_expand_tree" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_CATALOGUE_EXPAND_TREE']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="basket_jump_to"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['basket_jump_to'];?>
</label><span><select name="config[basket_jump_to]" id="basket_jump_to" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_BASKET_JUMP_TO']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="disable_checkout_terms"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['disable_checkout_terms'];?>
</label><span><input name="config[disable_checkout_terms]" id="disable_checkout_terms" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['disable_checkout_terms'];?>
"></span></div>
         <div><label for="default_rss_feed"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['default_rss'];?>
</label><span><input name="config[default_rss_feed]" id="default_rss_feed" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['default_rss_feed'];?>
"></span></div>
      </fieldset>
      <div style="display:none" id="per_page_note">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_per_page'];?>
</h3>
      <p>This setting has been replaced with the layout > products > perpage section of the skins config.xml file wich includes page splits. This setting is ignored for skins that have this block of XML. Please edit the skins config.xml file instead.</p> 
      <p>Example:</p>
<pre>&lt;layout&gt;
   &lt;products&gt;
      &lt;perpage amount="6" /&gt;
         &lt;perpage default="true" amount="12" /&gt;
         &lt;perpage amount="24" /&gt;
         &lt;perpage amount="48" /&gt;
      &lt;perpage amount="96" /&gt;
   &lt;/products&gt;
&lt;/layout&gt;</pre>
</div>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_popular_latest'];?>
</legend>
         <div><label for="catalogue_latest_products"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_latest'];?>
</label><span><select name="config[catalogue_latest_products]" id="catalogue_latest_products" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_CATALOGUE_LATEST_PRODUCTS']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="catalogue_latest_products_count"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_latest_number'];?>
</label><span><input name="config[catalogue_latest_products_count]" id="catalogue_latest_products_count" type="text" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['catalogue_latest_products_count'];?>
"></span></div>
         <div><label for="catalogue_popular_products_count"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_popular'];?>
</label><span><input name="config[catalogue_popular_products_count]" id="catalogue_popular_products_count" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['catalogue_popular_products_count'];?>
"></span></div>
         <div><label for="catalogue_popular_products_source"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_popular_source'];?>
</label><span><select name="config[catalogue_popular_products_source]" id="catalogue_popular_products_source" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_CATALOGUE_POPULAR_PRODUCTS_SOURCE']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_skins'];?>
</legend>
         <div><label for="skin_folder"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['skins_default_front'];?>
</label><span>
            <input type="hidden" class="default-style" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['skin_style'];?>
">
            <select name="config[skin_folder]" id="skin_folder" class="textbox select-skin no-drop">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SKINS']->value, 'skin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['skin']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['skin']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['skin']->value['description'];?>
"<?php echo $_smarty_tpl->tpl_vars['skin']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['skin']->value['display'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <select name="config[skin_style]" id="skin_style" class="textbox select-style"></select>
            </span>
         </div>
         <div><label for="admin_skin"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['skins_default_admin'];?>
</label><span>
            <select name="config[admin_skin]" id="admin_skin" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SKINS_ADMIN']->value, 'skin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['skin']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['skin']->value['name'];?>
" <?php echo $_smarty_tpl->tpl_vars['skin']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['skin']->value['name'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            </span>
         </div>
         <div><label for="skin_change"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['skins_allow_change'];?>
</label><span><select name="config[skin_change]" id="skin_change" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_SKIN_CHANGE']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <?php if ($_smarty_tpl->tpl_vars['SKINS_MOBILE']->value) {?>
         <div><label for="skin_folder_mobile"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['skins_mobile_default_front'];?>
</label><span>
            <input type="hidden" class="default-style-mobile" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['skin_style_mobile'];?>
">
            <select name="config[skin_folder_mobile]" id="skin_folder_mobile" class="textbox select-skin-mobile no-drop">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SKINS_MOBILE']->value, 'skin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['skin']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['skin']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['skin']->value['description'];?>
"<?php echo $_smarty_tpl->tpl_vars['skin']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['skin']->value['display'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <select name="config[skin_style_mobile]" id="skin_style_mobile" class="textbox select-style-mobile"<?php echo $_smarty_tpl->tpl_vars['MOBILE_DISABLED']->value;?>
></select> 
            </span>
         </div>
         <div><label for="disable_mobile_skin"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['disable_mobile_skin'];?>
</label><span><input name="config[disable_mobile_skin]" id="disable_mobile_skin" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['disable_mobile_skin'];?>
"></span></div>
         <?php } else { ?>
         	<input name="config[disable_mobile_skin]" id="disable_mobile_skin" type="hidden" value="1">
         <?php }?>
      </fieldset>
   </div>
   <div id="Stock" class="tab_content">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_stock'];?>
</h3>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_digital'];?>
</legend>
         <div><label for="download_expire"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['digital_expiry'];?>
</label><span><input name="config[download_expire]" id="download_expire" type="text" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['download_expire'];?>
"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['blank_to_disable'];?>
</span></div>
         <div><label for="download_update_existing"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['download_update_existing'];?>
</label><span><input name="download_update_existing" id="download_update_existing" type="hidden" class="toggle" value="0"><input name="download_expire_old" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['download_expire'];?>
"></span></div>
         <div><label for="download_count"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['digital_attempts'];?>
</label><span><input name="config[download_count]" id="download_count" type="text" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['download_count'];?>
"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['blank_to_disable'];?>
</span></div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_stock_general'];?>
</legend>
         <div><label for="stock_level"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['stock_show'];?>
</label><span><input name="config[stock_level]" id="stock_level" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['stock_level'];?>
"></span></div>
         <div><label for="basket_out_of_stock_purchase"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['stock_allow_oos'];?>
</label><span><input name="config[basket_out_of_stock_purchase]" id="basket_out_of_stock_purchase" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['basket_out_of_stock_purchase'];?>
"></span></div>
         <div><label for="stock_warn_type"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['stock_warning_method'];?>
</label><span><select name="config[stock_warn_type]" id="stock_warn_type" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_STOCK_WARN_TYPE']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="stock_warn_level"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['stock_warning_level'];?>
</label><span><input name="config[stock_warn_level]" id="stock_warn_level" type="text" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['stock_warn_level'];?>
"></span></div>
         <div><label for="product_weight_unit"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['weight_unit'];?>
</label><span><select name="config[product_weight_unit]" id="product_weight_unit" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_PRODUCT_WEIGHT_UNIT']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="show_basket_weight"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['show_basket_weight'];?>
</label><span><input name="config[show_basket_weight]" id="show_basket_weight" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['show_basket_weight'];?>
"></span></div>
         <div><label for="basket_allow_non_invoice_address"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['dispatch_to_non_invoice'];?>
</label><span><input name="config[basket_allow_non_invoice_address]" id="basket_allow_non_invoice_address" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['basket_allow_non_invoice_address'];?>
"></span></div>
         <div><label for="stock_change_time"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['stock_reduce'];?>
</label><span><select name="config[stock_change_time]" id="stock_change_time" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_STOCK_CHANGE_TIME']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="hide_out_of_stock"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_hide_out_of_stock'];?>
</label><span><input name="config[hide_out_of_stock]" id="hide_out_of_stock" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['hide_out_of_stock'];?>
"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['no_admin_affect'];?>
</div>
         <div><label for="update_main_stock"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['update_main_stock'];?>
</label><span><input name="config[update_main_stock]" id="update_main_stock" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['update_main_stock'];?>
"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['matrix_in_use'];?>
</div>
      </fieldset>
   </div>
   <div id="Search_Engines" class="tab_content">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_seo'];?>
</h3>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_seo_global_meta_data'];?>
</legend>
         <div><label for="store_title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_browser_title'];?>
</label><span><input name="config[store_title]" id="store_title" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['store_title'];?>
"></span></div>
         <div><label for="store_meta_description"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_description'];?>
</label><span><textarea name="config[store_meta_description]" id="store_meta_description" class="textbox"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['store_meta_description'];?>
</textarea></span></div>
         <div><label for="store_meta_keywords"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_keywords'];?>
</label><span><textarea name="config[store_meta_keywords]" id="store_meta_keywords" class="textbox"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['store_meta_keywords'];?>
</textarea></span></div>
         <div><label for="seo_add_cats"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_add_cats'];?>
</label><span>
         <select name="config[seo_add_cats]" id="seo_add_cats" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_SEO_ADD_CATS']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span></div>
         <div><label for="seo_cat_add_cats"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_cat_add_cats'];?>
</label><span>
         <select name="config[seo_cat_add_cats]" id="seo_cat_add_cats" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_SEO_CAT_ADD_CATS']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span></div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_seo_meta_behaviour'];?>
</legend>
         <div><label for="seo_metadata"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_behaviour'];?>
</label><span><select name="config[seo_metadata]" id="seo_metadata" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_SEO_METADATA']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
      </fieldset>
   </div>
   <div id="SSL" class="tab_content">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_ssl'];?>
</h3>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_ssl'];?>
</legend>
         <div><label for="ssl"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['ssl_enable'];?>
</label><span><select name="config[ssl]" id="ssl" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_SSL']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="standard_url"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['standard_url'];?>
</label><span><input name="config[standard_url]" id="standard_url" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['standard_url'];?>
"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['eg'];?>
 http://www.example.com/store</span></div>
         <div><label for="cookie_domain"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['cookie_domain'];?>
</label><span><input name="config[cookie_domain]" id="cookie_domain" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['cookie_domain'];?>
"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['eg'];?>
 .example.com</span></div>
      </fieldset>
   </div>
   <div id="Offline" class="tab_content">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_offline'];?>
</h3>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_offline'];?>
</legend>
         <div><label for="offline"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['offline_enable'];?>
</label><span><select name="config[offline]" id="offline" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_OFFLINE']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['offline_message'];?>
</legend>
         <textarea name="config[offline_content]" id="offline_content" class="textbox fck fck-full"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CONFIG']->value['offline_content'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
      </fieldset>
   </div>
   <div id="Logos" class="tab_content">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_logo'];?>
</h3>
      <?php if (isset($_smarty_tpl->tpl_vars['LOGOS']->value)) {?>
      <fieldset>
         <table width="100%">
         <thead>
         <tr>
         <td>
         <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['status'];?>

         </td>
         <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['logo'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['scope'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['action'];?>
</td>
         </tr>
         </thead>
         <tbody>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LOGOS']->value, 'logo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['logo']->value) {
?>
         <tr>
            <td>
            <input type="hidden" name="logo[<?php echo $_smarty_tpl->tpl_vars['logo']->value['logo_id'];?>
][status]" id="logo_<?php echo $_smarty_tpl->tpl_vars['logo']->value['logo_id'];?>
_status" value="<?php echo $_smarty_tpl->tpl_vars['logo']->value['status'];?>
" class="toggle">
            </td>
            <td>
           
            <a href="images/logos/<?php echo $_smarty_tpl->tpl_vars['logo']->value['filename'];?>
" target="_blank" class="colorbox"><img src="images/logos/<?php echo $_smarty_tpl->tpl_vars['logo']->value['filename'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['logo']->value['filename'];?>
" height="50"></a>
            </td>
            <td>
               <input type="hidden" class="default-style" value="<?php echo $_smarty_tpl->tpl_vars['logo']->value['style'];?>
">
               <select id="logo_<?php echo $_smarty_tpl->tpl_vars['logo']->value['logo_id'];?>
_skin" name="logo[<?php echo $_smarty_tpl->tpl_vars['logo']->value['logo_id'];?>
][skin]" class="textbox select-skin">
                  <optgroup label="Skins">
                     <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['logo_all_skins'];?>
</option>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SKINS_ALL']->value, 'skin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['skin']->value) {
?>
                     <?php if (isset($_smarty_tpl->tpl_vars['skin']->value['other_optgroup']) && $_smarty_tpl->tpl_vars['skin']->value['other_optgroup']) {?>
                  </optgroup>
                  <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['other'];?>
">
                     <?php }?>
                     <option value="<?php echo $_smarty_tpl->tpl_vars['skin']->value['name'];?>
" <?php if (($_smarty_tpl->tpl_vars['skin']->value['name'] == $_smarty_tpl->tpl_vars['logo']->value['skin'])) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['skin']->value['display'];?>
</option>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </optgroup>
               </select>
               <select id="logo_<?php echo $_smarty_tpl->tpl_vars['logo']->value['logo_id'];?>
_style" name="logo[<?php echo $_smarty_tpl->tpl_vars['logo']->value['logo_id'];?>
][style]" class="textbox select-style">
                  <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['logo_all_styles'];?>
</option>
               </select>
               
            </td>
            <td>
<a href="<?php echo $_smarty_tpl->tpl_vars['logo']->value['delete'];?>
" class="delete" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><i class="fa fa-trash" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
"></i></a>
            </td>
         </tr>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </tbody>
         </table>
      </fieldset>
      <?php }?>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_logo_upload'];?>
</legend>
         <div><input type="file" name="logo" class="multiple"></div>
      </fieldset>
   </div>
   <div id="Advanced_Settings" class="tab_content">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_advanced'];?>
</h3>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['email'];?>
</legend>
         <div><label for="email_method"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['email_method'];?>
</label><span><select name="config[email_method]" id="email_method" class="textbox preview_email">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_EMAIL_METHOD']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="email_name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['email_sender_name'];?>
</label><span><input name="config[email_name]" id="email_name" type="text" class="textbox preview_email" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['email_name'];?>
"></span></div>
         <div><label for="email_address"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['email_sender_address'];?>
</label><span><input name="config[email_address]" id="email_address" type="text" class="textbox preview_email" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['email_address'];?>
"></span></div>
         <div id="smtp_settings" class="stripe stripe_reverse" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['email_method'] == 'mail' || $_smarty_tpl->tpl_vars['CONFIG']->value['email_method'] == '') {?> style="display: none"<?php }?>>
            <div><label for="email_smtp_host"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['smtp_host'];?>
</label><span><input name="config[email_smtp_host]" id="email_smtp_host" type="text" class="textbox preview_email" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['email_smtp_host'];?>
"></span></div>
            <div><label for="email_smtp_port"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['smtp_port'];?>
</label><span><input name="config[email_smtp_port]" id="email_smtp_port" type="text" class="textbox number preview_email" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['email_smtp_port'];?>
"></span></div>
            <div><label for="email_smtp"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['smtp_auth'];?>
</label><span><select name="config[email_smtp]" id="email_smtp" class="textbox preview_email" autocomplete="off">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_EMAIL_SMTP']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select></span>
            </div>
            <div><label for="email_smtp_user"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['smtp_user'];?>
</label><span><input name="config[email_smtp_user]" id="email_smtp_user" type="text" class="textbox preview_email" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['email_smtp_user'];?>
" autocomplete="off"></span></div>
            <div><label for="email_smtp_password"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['smtp_pass'];?>
</label><span><input name="config[email_smtp_password]" id="email_smtp_password" type="password" class="textbox preview_email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CONFIG']->value['email_smtp_password'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off"></span></div>
         </div>
         <div class="nostripe"><label for="smtp_test_url">&nbsp;</label><span>
         <button type="button" class="button tiny" id="smtp_test" onclick="previewEmailSettings()"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['test'];?>
</button></span></div>
         <?php echo '<script'; ?>
>
            function previewEmailSettings() {
                  var qstring = '';
                  $(".preview_email").each(function() {
                        qstring += '&'+this.id+'='+encodeURI(this.value);
                  });
                  $.colorbox({ href:'<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_file'];?>
?_g=xml&function=SMTPTest'+qstring})
            }
         <?php echo '</script'; ?>
>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_performance'];?>
</legend>
         <div><label for="debug"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['debug_enable'];?>
</label><span><select name="config[debug]" id="debug" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_DEBUG']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="debug"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['debug_ip_addresses'];?>
</label><span><input name="config[debug_ip_addresses]" id="debug_ip_addresses" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['debug_ip_addresses'];?>
"></span></div>
         <div><label for="cache"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['cache_enable'];?>
 (<a href="https://support.cubecart.com/Knowledgebase/Article/View/235/41/how-do-i-enable-apc-memcached-or-xcache" target="_blank"><?php echo $_smarty_tpl->tpl_vars['CACHE_METHOD']->value;?>
</a>)</label><span><select name="config[cache]" id="cache" class="textbox">
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_CACHE']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </select></span></div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_proxy'];?>
</legend>
         <div><label for="proxy"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['proxy_enable'];?>
</label><span><select name="config[proxy]" id="proxy" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_PROXY']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="proxy_host"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['proxy_host'];?>
</label><span><input name="config[proxy_host]" id="proxy_host" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['proxy_host'];?>
"></span></div>
         <div><label for="proxy_port"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['proxy_port'];?>
</label><span><input name="config[proxy_port]" id="proxy_port" type="text" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['proxy_port'];?>
"></span></div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_time_date'];?>
</legend>
         <div><label for="fuzzy_time_format"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['fuzzy_time_format'];?>
</label><span><input name="config[fuzzy_time_format]" id="fuzzy_time_format" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['fuzzy_time_format'];?>
"> PHP <a href="http://www.php.net/strftime" target="_blank">strftime</a></span></div>
         <div><label for="time_format"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['time_format'];?>
</label><span><input name="config[time_format]" id="time_format" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['time_format'];?>
"> PHP <a href="http://www.php.net/strftime" target="_blank">strftime</a></span></div>
         <div><label for="dispatch_date_format"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['dispatch_date_format'];?>
</label><span><input name="config[dispatch_date_format]" id="dispatch_date_format" type="text" class="textbox" value="<?php if (($_smarty_tpl->tpl_vars['CONFIG']->value['dispatch_date_format'])) {
echo $_smarty_tpl->tpl_vars['CONFIG']->value['dispatch_date_format'];
} else { ?>%b %d %Y<?php }?>"> PHP <a href="http://www.php.net/strftime" target="_blank">strftime</a></span></div>
         <div><label for="time_offset"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['time_utc_offset'];?>
</label><span><input name="config[time_offset]" id="time_offset" type="text" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['time_offset'];?>
"></span></div>
         <?php if (isset($_smarty_tpl->tpl_vars['TIMEZONES']->value)) {?>
         <div><label for="time_zone"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['time_zone'];?>
</label><span><select name="config[time_zone]" id="time_zone" type="text" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TIMEZONES']->value, 'timezone');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['timezone']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['timezone']->value['zone'];?>
"<?php echo $_smarty_tpl->tpl_vars['timezone']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['timezone']->value['zone'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <?php }?>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['log_retention'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['log_retention_desc'];?>
)</legend>
         <div><label for="r_admin_activity"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['admin_activity_log'];?>
</label><span><input name="config[r_admin_activity]" id="r_admin_activity" type="text" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['r_admin_activity'];?>
"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['days'];?>
</span></div>
         <div><label for="r_admin_error"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_admin_error_log'];?>
</label><span><input name="config[r_admin_error]" id="r_admin_error" type="text" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['r_admin_error'];?>
"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['days'];?>
</span></div>
         <div><label for="r_email"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_email_log'];?>
</label><span><input name="config[r_email]" id="r_email" type="text" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['r_email'];?>
"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['days'];?>
</span></div>
         <div><label for="r_request"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['nav_request_log'];?>
</label><span><input name="config[r_request]" id="r_request" type="text" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['r_request'];?>
"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['days'];?>
</span></div>
         <div><label for="r_staff"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['nav_access_log'];?>
</label><span><input name="config[r_staff]" id="r_staff" type="text" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['r_staff'];?>
"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['days'];?>
</span></div>
         <div><label for="r_system_error"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_system_error_log'];?>
</label><span><input name="config[r_system_error]" id="r_system_error" type="text" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['r_system_error'];?>
"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['days'];?>
</span></div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['other'];?>
</legend>
         <div><label for="feed_access_key"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['feed_access_key'];?>
</label><span><input name="config[feed_access_key]" id="feed_access_key" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['feed_access_key'];?>
"></span></div>
      </fieldset>
   </div>
   <div id="Copyright" class="tab_content">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_copyright'];?>
</h3>
      <fieldset>
         <div><span><textarea name="config[store_copyright]" id="copyright_content" class="textbox fck"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CONFIG']->value['store_copyright'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></span></div>
      </fieldset>
   </div>
   <div id="Extra" class="tab_content">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_extra'];?>
</h3>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_product_clone'];?>
</legend>
         <div><label for="product_clone"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['status'];?>
</label><span><select name="config[product_clone]" id="product_clone" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_PRODUCT_CLONE']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="product_clone_images"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_clone_images'];?>
</label><span><input name="config[product_clone_images]" id="product_clone_images" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['product_clone_images'];?>
"></span></div>
         <div><label for="product_clone_options"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_clone_options'];?>
</label><span><input name="config[product_clone_options]" id="product_clone_options" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['product_clone_options'];?>
"></span></div>
         <div><label for="product_clone_options_matrix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_clone_options_matrix'];?>
</label><span><input name="config[product_clone_options_matrix]" id="product_clone_options_matrix" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['product_clone_options_matrix'];?>
"></span></div>
         <div><label for="product_clone_acats"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_clone_acats'];?>
</label><span><input name="config[product_clone_acats]" id="product_clone_acats" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['product_clone_acats'];?>
"></span></div>
         <div><label for="product_clone_main_stock"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_clone_stock'];?>
</label><span><input name="config[product_clone_main_stock]" id="product_clone_main_stock" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['product_clone_main_stock'];?>
"></span></div>
         <div><label for="product_clone_code"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_clone_code'];?>
</label><span><select name="config[product_clone_code]" id="product_clone_code" class="textbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPT_PRODUCT_CLONE_CODE']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['option']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></span>
         </div>
         <div><label for="product_clone_translations"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_clone_translations'];?>
</label><span><input name="config[product_clone_translations]" id="product_clone_translations" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['product_clone_translations'];?>
"></span></div>
         <div><label for="product_clone_redirect"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['product_clone_redirect'];?>
</label><span><input name="config[product_clone_redirect]" id="product_clone_redirect" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['product_clone_redirect'];?>
"></span></div>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['gdpr'];?>
</legend>
         <div><label for="dbl_opt"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['dbl_opt'];?>
</label><span><input name="config[dbl_opt]" id="dbl_opt" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['dbl_opt'];?>
"></span></div>
         <div><label for="cookie_dialogue"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['cookie_dialogue'];?>
</label><span><input name="config[cookie_dialogue]" id="cookie_dialogue" type="hidden" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['cookie_dialogue'];?>
"></span></div>
      </fieldset>
   </div>
   <?php $_smarty_tpl->_subTemplateRender('file:templates/element.hook_form_content.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <div class="form_control">
      <input type="hidden" name="config[bftime]" value="600">
      <input type="hidden" name="config[bfattempts]" value="5">
      <input id="submit" type="submit" class="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
">
      <input type="hidden" name="previous-tab" id="previous-tab" value="">
   </div>
   
</form>
<?php echo '<script'; ?>
 type="text/javascript">
   <?php if ($_smarty_tpl->tpl_vars['VAL_JSON_COUNTY']->value) {?> var county_list = <?php echo $_smarty_tpl->tpl_vars['VAL_JSON_COUNTY']->value;?>
;<?php }?>
   <?php if ($_smarty_tpl->tpl_vars['JSON_STYLES']->value) {?>var json_skins	= <?php echo $_smarty_tpl->tpl_vars['JSON_STYLES']->value;?>
;<?php }
echo '</script'; ?>
>
<?php }
}
