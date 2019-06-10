<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:41:26
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.google_analytics.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea4564fc9c5_22020653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '772c708b51a160afd60b2edfc295b2079982f62c' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/element.google_analytics.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfea4564fc9c5_22020653 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_COOKIE['accept_cookies']) && $_COOKIE['accept_cookies'] == 'true') {
echo '<script'; ?>
>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', '<?php echo $_smarty_tpl->tpl_vars['ANALYTICS']->value;?>
', 'auto');
ga('set', 'anonymizeIp', true);
ga('send', 'pageview');
<?php echo '</script'; ?>
>
<?php }
}
}
