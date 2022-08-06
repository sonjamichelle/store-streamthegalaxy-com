<?php
/* Smarty version 3.1.33, created on 2019-06-11 16:28:41
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_XCMcfW/skins/default/templates/plugins.index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cffd6b901b0d2_31177578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06eab501c54665a003790ef7cacd8a3e7f007652' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/admin_XCMcfW/skins/default/templates/plugins.index.php',
      1 => 1560270105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cffd6b901b0d2_31177578 (Smarty_Internal_Template $_smarty_tpl) {
?>
   <div id="plugins" class="tab_content">
      <h3><i class="fa fa-bolt"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['token_title'];?>
</h3>
      <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['token_desc'];?>
</p>
      <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post">
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['token'];?>
</legend>
         <div><label for="plugin_token"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['token'];?>
</label><span><input type="textbox" class="textbox" name="plugin_token" id="plugin_token" value="" placeholder="XXXX-XXXX-XXXX-XXXX-XXXX-XXXX-XXXX-XXXX"></span></div>
         <div><label for="backup"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['backup_if_exists'];?>
</label><span><input type="hidden" id="backup" name="backup" value="1" class="toggle"></span></div>
         <div><label for="backup"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['backup_abort'];?>
</label><span><input type="hidden" id="abort" name="abort" value="1" class="toggle"></span></div>
         <div><label>&nbsp;</label><span><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['go'];?>
"></span></div>
      </fieldset>
      </form>
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['available_plugins'];?>
</h3>
      <?php if (is_array($_smarty_tpl->tpl_vars['MODULES']->value)) {?>
      <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post">
      <table width="70%">
         <thead>
            <tr>
               <th width="45"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['status'];?>
</th>
               <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['name_and_desc'];?>
</th>
               <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['hooks']['version'];?>
</th>
               <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['type'];?>
</th>
               <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['developer'];?>
</th>
               <th width="10">&nbsp;</th>
            </tr>
         </thead>
         <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULES']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
            <tr>
               <td align="center">
                  <input type="hidden" id="status_<?php echo $_smarty_tpl->tpl_vars['module']->value['basename'];?>
" name="status[<?php echo $_smarty_tpl->tpl_vars['module']->value['basename'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['module']->value['config']['status'];?>
" class="toggle">
                  <input type="hidden" name="type[<?php echo $_smarty_tpl->tpl_vars['module']->value['basename'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['module']->value['type'];?>
" />
               </td>
               <td><a href="<?php echo $_smarty_tpl->tpl_vars['module']->value['edit_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</a><br><?php echo $_smarty_tpl->tpl_vars['module']->value['description'];?>
</td>
               <td><?php echo $_smarty_tpl->tpl_vars['module']->value['version'];?>
</td>
               <td><?php echo ucfirst($_smarty_tpl->tpl_vars['module']->value['type']);?>
</td>
               <td><?php echo $_smarty_tpl->tpl_vars['module']->value['creator'];?>
</td>
               <td nowrap>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['module']->value['edit_url'];?>
" class="edit"><i class="fa fa-pencil-square-o" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"></i></a>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['module']->value['delete_url'];?>
"  class="delete" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><i class="fa fa-trash" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
"></i></a>
                  <?php if ($_smarty_tpl->tpl_vars['module']->value['mobile_optimized'] == 'true') {?>
                  <a href="javascript:alert('<?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['mobile_optimized'];?>
');"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/phone.png" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['mobile_optimized'];?>
"></a>
                  <?php }?>
               </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
      </table>
      <div class="form_control">
         <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
">
      </div>
      <?php } else { ?>
      <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['none'];?>
</p>
      <?php }?>
      
      </form>
      <form action="?_g=settings&node=language" method="post">
      <?php if (is_array($_smarty_tpl->tpl_vars['LANGUAGES']->value)) {?>
      <hr>
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['nav_languages'];?>
</h3>
      <table width="70%">
         <thead>
            <tr>
               <th width="45"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['status'];?>
</th>
               <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['name_and_desc'];?>
</th>
               <th width="10">&nbsp;</th>
            </tr>
         </thead>
         <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
            <tr>
               <td align="center">
                  <input type="hidden" name="status[<?php echo $_smarty_tpl->tpl_vars['module']->value['lang_code'];?>
]" id="status_<?php echo $_smarty_tpl->tpl_vars['module']->value['lang_code'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['module']->value['status'];?>
" class="toggle">
               </td>
               <td><a href="<?php echo $_smarty_tpl->tpl_vars['module']->value['edit_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</a></td>
               <td nowrap>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['module']->value['edit_url'];?>
" class="edit"><i class="fa fa-pencil-square-o" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"></i></a>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['module']->value['delete_url'];?>
"  class="delete" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
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
      <div class="form_control">
         <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
">
      </div>
      <?php }?>
      
      </form>
      <?php if (is_array($_smarty_tpl->tpl_vars['SKINS']->value)) {?>
      <hr>
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['logo_all_skins'];?>
</h3>
      <table width="70%">
         <thead>
            <tr>
               <th width="50"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['default'];?>
</th>
               <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['name'];?>
</th>
               <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['developer'];?>
</th>
               <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['hooks']['version'];?>
</th>
            </tr>
         </thead>
         <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SKINS']->value, 'skin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['skin']->value) {
?>
            <tr>
               <td width="10" align="center"><?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['skin_folder'] == $_smarty_tpl->tpl_vars['skin']->value['info']['name']) {?><i class="fa fa-check" aria-hidden="true"></i><?php } else { ?><i class="fa fa-times" aria-hidden="true"></i><?php }?></td>
               <td><?php echo $_smarty_tpl->tpl_vars['skin']->value['info']['display'];?>
</td>
               <td><?php echo $_smarty_tpl->tpl_vars['skin']->value['info']['creator'];?>
</td>
               <td><?php echo $_smarty_tpl->tpl_vars['skin']->value['info']['version'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </tbody>
      </table>
      <?php }?>
</div><?php }
}
