<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:41:26
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.newsletter.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea45625a7f1_79197342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46770a7fb42c0aaaf3b9cf8379d0270c92c5bb75' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.newsletter.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/content.recaptcha.php' => 1,
  ),
),false)) {
function content_5cfea45625a7f1_79197342 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['DISABLE_BOX_NEWSLETTER']->value) {?>
<div id="box-newsletter">
   <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['mailing_list'];?>
</h3>
   <?php if ($_smarty_tpl->tpl_vars['IS_USER']->value) {?>
   <?php if (($_smarty_tpl->tpl_vars['CTRL_SUBSCRIBED']->value)) {?>
   <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['customer_is_subscribed'];?>
<br><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=newsletter&action=unsubscribe"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['click_to_unsubscribe'];?>
</a></p>
   <?php } else { ?>
   <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['customer_not_subscribed'];?>
<br><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=newsletter&action=subscribe"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['click_to_subscribe'];?>
</a></p>
   <?php }?>
   <?php } else { ?>
   <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" id="newsletter_form_box">
      <div class="hide"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['enter_email_signup'];?>
</div>
      <div class="row collapse">
         <div class="small-8 columns"><input name="subscribe" id="newsletter_email" type="text" size="18" maxlength="250" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['subscribe'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['eg'];?>
 joe@example.com"/></div>
         <div class="small-4 columns">
            <input type="submit" class="button postfix g-recaptcha" id="subscribe_button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['subscribe'];?>
">
            <input type="hidden" name="force_unsubscribe" id="force_unsubscribe" value="0">
         </div>
      </div>
      <div class="hide" id="newsletter_recaptcha">
      <?php $_smarty_tpl->_subTemplateRender('file:templates/content.recaptcha.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ga_fid'=>"Newsletter"), 0, false);
?>
      </div>
   </form>
   <div class="hide" id="validate_email"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['error_email_invalid'];?>
</div>
   <div class="hide" id="validate_already_subscribed"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['notify_already_subscribed'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['continue_to_unsubscribe'];?>
</div>
   <div class="hide" id="validate_subscribe"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['subscribe'];?>
</div>
   <div class="hide" id="validate_unsubscribe"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['unsubscribe'];?>
</div>
   <?php }?>
</div>
<?php }
}
}
