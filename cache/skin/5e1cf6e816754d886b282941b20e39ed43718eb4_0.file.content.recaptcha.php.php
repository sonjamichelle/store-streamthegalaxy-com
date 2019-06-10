<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:41:26
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/content.recaptcha.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea45626a454_52484006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e1cf6e816754d886b282941b20e39ed43718eb4' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/content.recaptcha.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfea45626a454_52484006 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['RECAPTCHA']->value == '2') {?>
<div class="row">
   <div class="medium-8 columns">
        <?php if (empty($_smarty_tpl->tpl_vars['CONFIG']->value['recaptcha_public_key']) || empty($_smarty_tpl->tpl_vars['CONFIG']->value['recaptcha_secret_key'])) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['recaptcha_key_not_set'];?>
</p>
        <?php } else { ?>
        <div class="g-recaptcha" id="RecaptchaField<?php echo $_smarty_tpl->tpl_vars['ga_fid']->value;?>
"></div>
        <?php echo '<script'; ?>
 type="text/javascript">
        
        var reCaptchaCallback = function() {
            var gr_exists = document.getElementById("RecaptchaField");
            if(gr_exists){
                grecaptcha.render('RecaptchaField', {'sitekey' : '<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['recaptcha_public_key'];?>
'});
            }
            <?php if ($_smarty_tpl->tpl_vars['ga_fid']->value) {?>grecaptcha.render('RecaptchaField<?php echo $_smarty_tpl->tpl_vars['ga_fid']->value;?>
', {'sitekey' : '<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['recaptcha_public_key'];?>
'});<?php }?>
        };
        
        <?php echo '</script'; ?>
>
        <?php }?>
    </div>
</div>
<?php }
}
}
