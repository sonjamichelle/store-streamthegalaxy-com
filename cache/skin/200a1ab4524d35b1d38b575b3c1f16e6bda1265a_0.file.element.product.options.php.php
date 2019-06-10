<?php
/* Smarty version 3.1.33, created on 2019-06-10 19:07:50
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.product.options.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfeaa86c8e745_86813864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '200a1ab4524d35b1d38b575b3c1f16e6bda1265a' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.product.options.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfeaa86c8e745_86813864 (Smarty_Internal_Template $_smarty_tpl) {
if (is_array($_smarty_tpl->tpl_vars['OPTIONS']->value)) {?>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPTIONS']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['option']->value['type'] == Catalogue::OPTION_RADIO) {?>
      <div class="row">
         <div class="small-12 columns">
                        <?php if ($_smarty_tpl->tpl_vars['option']->value['required'] && count($_smarty_tpl->tpl_vars['option']->value['values']) === 1) {?>
            <label for="option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" class="return"><?php if (empty($_smarty_tpl->tpl_vars['option']->value['option_description'])) {
echo $_smarty_tpl->tpl_vars['option']->value['option_name'];
} else {
echo $_smarty_tpl->tpl_vars['option']->value['option_description'];
}?></label>
            <?php echo $_smarty_tpl->tpl_vars['option']->value['values'][0]['value_name'];
if ($_smarty_tpl->tpl_vars['option']->value['values'][0]['price']) {?> <?php echo $_smarty_tpl->tpl_vars['option']->value['values'][0]['symbol'];
echo $_smarty_tpl->tpl_vars['option']->value['values'][0]['price'];
}?>
            <input type="hidden" name="productOptions[<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
]" id="option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['values'][0]['assign_id'];?>
"<?php if (!$_smarty_tpl->tpl_vars['CTRL_HIDE_PRICES']->value) {?> data-price="<?php echo $_smarty_tpl->tpl_vars['option']->value['values'][0]['decimal_price'];?>
"<?php }?>>
            <?php } else { ?>
            <div class="pseudo-label"><?php if (empty($_smarty_tpl->tpl_vars['option']->value['option_description'])) {
echo $_smarty_tpl->tpl_vars['option']->value['option_name'];
} else {
echo $_smarty_tpl->tpl_vars['option']->value['option_description'];
}
if ($_smarty_tpl->tpl_vars['option']->value['required']) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['required'];?>
)<?php }?></div>
            <span id="error_option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
">
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['values'], 'value', false, NULL, 'options', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_options']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_options']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_options']->value['index'];
?>
               <div><input type="radio" name="productOptions[<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
]" id="rad_option_<?php echo $_smarty_tpl->tpl_vars['value']->value['assign_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['assign_id'];?>
" class="nomarg<?php if ($_smarty_tpl->tpl_vars['value']->value['absolute_price'] == '1') {?> absolute<?php }?>"<?php if (empty($_smarty_tpl->tpl_vars['_POST']->value) && !empty($_smarty_tpl->tpl_vars['value']->value['option_default'])) {?> checked="checked"<?php }
if (!$_smarty_tpl->tpl_vars['CTRL_HIDE_PRICES']->value) {?> data-price="<?php echo $_smarty_tpl->tpl_vars['value']->value['decimal_price'];?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_options']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_options']->value['first'] : null)) {?> rel="error_option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['required']) {?>required<?php }
}?>>
                  <label for="rad_option_<?php echo $_smarty_tpl->tpl_vars['value']->value['assign_id'];?>
" class="return"><?php echo $_smarty_tpl->tpl_vars['value']->value['value_name'];
if ($_smarty_tpl->tpl_vars['value']->value['price']) {?> <?php echo $_smarty_tpl->tpl_vars['value']->value['symbol'];
echo $_smarty_tpl->tpl_vars['value']->value['price'];
}?></label>
               </div>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </span>
            <?php }?>
         </div>
      </div>
      <?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type'] == Catalogue::OPTION_SELECT) {?>
      <div class="row">
         <div class="small-12 columns">
                        <?php if ($_smarty_tpl->tpl_vars['option']->value['required'] && count($_smarty_tpl->tpl_vars['option']->value['values']) === 1) {?>
            <label for="option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" class="return"><?php if (empty($_smarty_tpl->tpl_vars['option']->value['option_description'])) {
echo $_smarty_tpl->tpl_vars['option']->value['option_name'];
} else {
echo $_smarty_tpl->tpl_vars['option']->value['option_description'];
}?></label>
            <?php echo $_smarty_tpl->tpl_vars['option']->value['values'][0]['value_name'];
if ($_smarty_tpl->tpl_vars['option']->value['values'][0]['price']) {?> <?php echo $_smarty_tpl->tpl_vars['option']->value['values'][0]['symbol'];
echo $_smarty_tpl->tpl_vars['option']->value['values'][0]['price'];
}?>
            <input type="hidden" name="productOptions[<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
]" id="option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['values'][0]['assign_id'];?>
"<?php if (!$_smarty_tpl->tpl_vars['CTRL_HIDE_PRICES']->value) {?> data-price="<?php echo $_smarty_tpl->tpl_vars['option']->value['values'][0]['decimal_price'];?>
"<?php }?>>
            <?php } else { ?>
            <label for="option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" class="return"><?php if (empty($_smarty_tpl->tpl_vars['option']->value['option_description'])) {
echo $_smarty_tpl->tpl_vars['option']->value['option_name'];
} else {
echo $_smarty_tpl->tpl_vars['option']->value['option_description'];
}
if ($_smarty_tpl->tpl_vars['option']->value['required']) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['required'];?>
)<?php }?></label>
            <select name="productOptions[<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
]" id="option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" class="nomarg" <?php if ($_smarty_tpl->tpl_vars['option']->value['required']) {?>required<?php }?>>
            <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['please_select'];?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['values'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['assign_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['absolute_price'] == '1') {?>class="absolute"<?php }
if (empty($_smarty_tpl->tpl_vars['_POST']->value) && !empty($_smarty_tpl->tpl_vars['value']->value['option_default'])) {?> selected="selected"<?php }
if (!$_smarty_tpl->tpl_vars['CTRL_HIDE_PRICES']->value) {?> data-price="<?php echo $_smarty_tpl->tpl_vars['value']->value['decimal_price'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['value_name'];
if ($_smarty_tpl->tpl_vars['value']->value['price']) {?> <?php echo $_smarty_tpl->tpl_vars['value']->value['symbol'];
echo $_smarty_tpl->tpl_vars['value']->value['price'];
}?></option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <?php }?>
         </div>
      </div>
      <?php } else { ?>
      <div class="row">
         <div class="small-12 columns">
            <label for="option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" class="return"><?php if (empty($_smarty_tpl->tpl_vars['option']->value['option_description'])) {
echo $_smarty_tpl->tpl_vars['option']->value['option_name'];
} else {
echo $_smarty_tpl->tpl_vars['option']->value['option_description'];
}
if ($_smarty_tpl->tpl_vars['option']->value['price']) {?> <?php echo $_smarty_tpl->tpl_vars['option']->value['symbol'];
echo $_smarty_tpl->tpl_vars['option']->value['price'];
}
if ($_smarty_tpl->tpl_vars['option']->value['required']) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['required'];?>
)<?php }?></label>
            <?php if ($_smarty_tpl->tpl_vars['option']->value['type'] == Catalogue::OPTION_TEXTBOX) {?>
            <input type="text" name="productOptions[<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
][<?php echo $_smarty_tpl->tpl_vars['option']->value['assign_id'];?>
]" id="option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['option']->value['absolute_price'] == '1') {?> class="absolute"<?php }
if (!$_smarty_tpl->tpl_vars['CTRL_HIDE_PRICES']->value) {?> data-price="<?php echo $_smarty_tpl->tpl_vars['option']->value['decimal_price'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['option']->value['required']) {?>required<?php }?>>
            <?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type'] == Catalogue::OPTION_TEXTAREA) {?>
            <textarea name="productOptions[<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
][<?php echo $_smarty_tpl->tpl_vars['option']->value['assign_id'];?>
]" id="option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['option']->value['absolute_price'] == '1') {?> class="absolute"<?php }
if (!$_smarty_tpl->tpl_vars['CTRL_HIDE_PRICES']->value) {?> data-price="<?php echo $_smarty_tpl->tpl_vars['option']->value['decimal_price'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['option']->value['required']) {?>required<?php }?>></textarea>
            <?php }?>
         </div>
      </div>
      <?php }?>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
