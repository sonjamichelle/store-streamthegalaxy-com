<?php
/* Smarty version 3.1.33, created on 2019-06-10 18:41:26
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.documents.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfea4563277d5_71535113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebeae30b4b4bf3530c06185a7775e25d622214ec' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/skins/foundation/templates/box.documents.php',
      1 => 1560191579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfea4563277d5_71535113 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="box-documents">
   <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['information'];?>
</h3>
   <nav>
      <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DOCUMENTS']->value, 'document');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['document']->value) {
?>
         <li><a href="<?php echo $_smarty_tpl->tpl_vars['document']->value['doc_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['document']->value['doc_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['document']->value['doc_url_openin']) {?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['document']->value['doc_name'];?>
</a></li>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         <?php if (isset($_smarty_tpl->tpl_vars['CONTACT_URL']->value)) {?>
         <li><a href="<?php echo $_smarty_tpl->tpl_vars['CONTACT_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['documents']['document_contact'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['documents']['document_contact'];?>
</a></li>
         <?php }?>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DOCUMENTS_LIST_HOOKS']->value, 'list_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list_item']->value) {
?>
         <li><a href="<?php echo $_smarty_tpl->tpl_vars['list_item']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list_item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['list_item']->value['title'];?>
</a></li>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>         
      </ul>
   </nav>
</div>
<?php }
}
