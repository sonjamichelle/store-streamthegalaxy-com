<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:41:26
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/content.recaptcha.head.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea4564f4452_28685717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ed2d1ee5b824ecb4cd2f1f9c2deb315b19a9315' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/content.recaptcha.head.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfea4564f4452_28685717 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['RECAPTCHA']->value) {
echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?onload=reCaptchaCallback&render=explicit" async defer><?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['RECAPTCHA']->value == '3') {
echo '<script'; ?>
>
var reCaptchaCallback = function() {
        $(".g-recaptcha" ).each(function() {
            var el = $(this);
            grecaptcha.render($(el).attr('id'), {
                'sitekey': '<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['recaptcha_public_key'];?>
',
                'badge': '<?php echo $_smarty_tpl->tpl_vars['SKIN_CUSTOM']->value['recaptcha_badge_position'];?>
',
                'callback': function(token) {
                    if($(el).attr("data-form-id")){
                        $('#'+$(el).attr("data-form-id")).submit();
                    } else {
                        $(el).parent().submit();
                    }
                }
            });
        });
    };
<?php echo '</script'; ?>
>
<?php }
}
}
