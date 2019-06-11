<?php
/* Smarty version 3.1.33, created on 2019-06-11 11:33:39
  from '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/CC/admin_pPMyqP/skins/default/templates/dashboard.index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cff9193b678e1_42156959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e38ba39a70e0248438fe2de3f91ed07e7668bc24' => 
    array (
      0 => '/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/CC/admin_pPMyqP/skins/default/templates/dashboard.index.php',
      1 => 1560252100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cff9193b678e1_42156959 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/CC/includes/lib/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/CC/includes/lib/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'/var/www/vhosts/streamthegalaxy.com/httpd/store.streamthegalaxy.com/CC/includes/lib/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div id="dashboard" class="tab_content">
   <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_dashboard'];?>
</h3>
   <div class="dashboard_content">
      <?php if (isset($_smarty_tpl->tpl_vars['QUICK_STATS']->value)) {?>
      
      <?php echo '<script'; ?>
 type="text/javascript" src="https://www.google.com/jsapi"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript">
         google.load("visualization", "1", {packages:["corechart"]});
         google.setOnLoadCallback(drawChart);
         function drawChart() {
           var data = google.visualization.arrayToDataTable([
             <?php echo $_smarty_tpl->tpl_vars['CHART']->value['data'];?>

           ]);
         
           var options = {
             title: '<?php echo $_smarty_tpl->tpl_vars['CHART']->value['title'];?>
',
           };
         
           var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
           chart.draw(data, options);
         }
      <?php echo '</script'; ?>
>
      	
      <div id="chart_div" style="width:100%; height: 300px;"></div>
      <?php }?>
      <table width="100%">
         <tr>
            <td valign="top" nowrap="nowrap" width="25%">
               <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_tasks'];?>
</h4>
               <ul>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_QUICK_TASKS']->value, 'task', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['task']->value) {
?>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['task']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['task']->value['name'];?>
</a></li>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DEFAULT_QUICK_TASKS']->value, 'name', false, 'url');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['url']->value => $_smarty_tpl->tpl_vars['name']->value) {
?>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               </ul>
            </td>
            <td valign="top" nowrap="nowrap" width="25%">
               <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_last_orders'];?>
</h4>
               <?php if (isset($_smarty_tpl->tpl_vars['LAST_ORDERS']->value)) {?>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LAST_ORDERS']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
               <div><a href="?_g=orders&action=edit&order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value['cart_order_id'];?>
"><?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['oid_mode'] == 'i') {
echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->tpl_vars['CONFIG']->value['oid_col']];
} else {
echo $_smarty_tpl->tpl_vars['order']->value['cart_order_id'];
}?></a> - <?php if (empty($_smarty_tpl->tpl_vars['order']->value['first_name']) && empty($_smarty_tpl->tpl_vars['order']->value['last_name'])) {?>
                  <?php echo $_smarty_tpl->tpl_vars['order']->value['name'];?>

                  <?php } else { ?>
                  <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['order']->value['first_name']);?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['order']->value['last_name']);?>

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
            </td>
            <?php if (isset($_smarty_tpl->tpl_vars['QUICK_STATS']->value)) {?>
            <td valign="top" nowrap="nowrap" width="25%">
               <table width="100%">
                  <tr>
                     <th align="center" width="50%" class="nostripe"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_sales_total'];?>
</th>
                     <th align="center" width="50%" class="nostripe"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_sales_average'];?>
</th>
                  </tr>
                  <tr>
                     <td align="center" width="50%" class="nostripe"><?php echo $_smarty_tpl->tpl_vars['QUICK_STATS']->value['total_sales'];?>
</td>
                     <td align="center" width="50%" class="nostripe"><?php echo $_smarty_tpl->tpl_vars['QUICK_STATS']->value['ave_order'];?>
</td>
                  </tr>
                  <tr>
                     <th align="center" width="50%" class="nostripe"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_month_this'];?>
</th>
                     <th align="center" width="50%" class="nostripe"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_month_last'];?>
</th>
                  </tr>
                  <tr>
                     <td align="center" width="50%" class="nostripe"><?php echo $_smarty_tpl->tpl_vars['QUICK_STATS']->value['this_month'];?>
</td>
                     <td align="center" width="50%" class="nostripe"><?php echo $_smarty_tpl->tpl_vars['QUICK_STATS']->value['last_month'];?>
</td>
                  </tr>
               </table>
            </td>
            <?php }?>
            <td valign="top" nowrap="nowrap" width="25%">
               <?php if (isset($_smarty_tpl->tpl_vars['NEWS']->value)) {?>
               <h4><strong title="<?php echo $_smarty_tpl->tpl_vars['NEWS']->value['description'];?>
"><?php echo $_smarty_tpl->tpl_vars['NEWS']->value['title'];?>
</strong></h4>
               <ul>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NEWS']->value['items'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['NEWS']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['more'];?>
 &raquo;</a></li>
               </ul>
               <?php }?>
            </td>
         </tr>
      </table>
      <div>
         <form class="note" action="?" method="post">
            <span class="actions"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
" name="notes" class="mini_button"></span>
            <p><i class="fa fa-sticky-note" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['notes'];?>
" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_my_notes'];?>
</p>
            <textarea name="notes[dashboard_notes]"><?php echo $_smarty_tpl->tpl_vars['DASH_NOTES']->value;?>
</textarea>
            
         </form>
      </div>
      <?php if (is_array($_smarty_tpl->tpl_vars['RECENT_EXTENSIONS']->value)) {?>
         <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['recent_extensions'];?>
</h2>
         <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['more_extensions'];?>
</p>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECENT_EXTENSIONS']->value, 'extension', false, NULL, 'extension', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extension']->value) {
?>
         <div class="extension">
            <h4><span><?php echo $_smarty_tpl->tpl_vars['extension']->value['price'];?>
</span><a href="?_g=marketplace&eurl=<?php echo rawurlencode($_smarty_tpl->tpl_vars['extension']->value['url']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['extension']->value['name'];?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['extension']->value['name'],42,"&hellip;",true);?>
</a></h4>
            <a href="?_g=marketplace&eurl=<?php echo rawurlencode($_smarty_tpl->tpl_vars['extension']->value['url']);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['extension']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['extension']->value['name'];?>
" width="150"></a>
            </div>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         <div style="clear: left;"></div>
      <?php }?>
   </div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['ORDERS']->value)) {?>
<div id="orders" class="tab_content">
   <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_orders_unsettled'];?>
</h3>
   <form action="?_g=orders&amp;redirect=dashboard" method="post" enctype="multipart/form-data">
   <div>
      <table>
         <thead>
            <tr>
               <td>&nbsp;</td>
               <td><?php echo $_smarty_tpl->tpl_vars['THEAD_ORDERS']->value['cart_order_id'];?>
</td>
               <td>&nbsp;</td>
               <td><?php echo $_smarty_tpl->tpl_vars['THEAD_ORDERS']->value['first_name'];?>
</td>
               <td nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['THEAD_ORDERS']->value['status'];?>
</td>
               <td><?php echo $_smarty_tpl->tpl_vars['THEAD_ORDERS']->value['order_date'];?>
</td>
               <td><?php echo $_smarty_tpl->tpl_vars['THEAD_ORDERS']->value['total'];?>
</td>
               <td width="70">&nbsp;</td>
            </tr>
         </thead>
         <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ORDERS']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
            <tr>
               <td align="center"><input type="checkbox" id="" name="multi-order[]" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['cart_order_id'];?>
" class="all-orders"></td>
               <td><a href="?_g=orders&action=edit&order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value['cart_order_id'];?>
&source=dashboard"><?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['oid_mode'] == 'i') {
echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->tpl_vars['CONFIG']->value['oid_col']];
} else {
echo $_smarty_tpl->tpl_vars['order']->value['cart_order_id'];
}?></a></td>
               <td align="center">
                  <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['cust_type']) ? $_smarty_tpl->tpl_vars['cust_type']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array["1"] = "registered";
$_smarty_tpl->_assignInScope('cust_type', $_tmp_array);?>
                  <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['cust_type']) ? $_smarty_tpl->tpl_vars['cust_type']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array["2"] = "unregistered";
$_smarty_tpl->_assignInScope('cust_type', $_tmp_array);?>
                  <i class="fa fa-user <?php echo $_smarty_tpl->tpl_vars['cust_type']->value[$_smarty_tpl->tpl_vars['order']->value['type']];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['customer'][$_smarty_tpl->tpl_vars['order']->value['cust_type'][$_smarty_tpl->tpl_vars['order']->value['type']]];?>
"></i>
               </td>
               <td>
                  <a href="?_g=customers&action=edit&customer_id=<?php echo $_smarty_tpl->tpl_vars['order']->value['customer_id'];?>
"><?php if (empty($_smarty_tpl->tpl_vars['order']->value['first_name']) && empty($_smarty_tpl->tpl_vars['order']->value['last_name'])) {?>
                  <?php echo $_smarty_tpl->tpl_vars['order']->value['name'];?>

                  <?php } else { ?>
                  <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['order']->value['first_name']);?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['order']->value['last_name']);?>

                  <?php }?></a>
               </td>
               <td class="<?php echo $_smarty_tpl->tpl_vars['order']->value['status_class'];?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</td>
               <td><?php echo $_smarty_tpl->tpl_vars['order']->value['date'];?>
</td>
               <td><?php echo $_smarty_tpl->tpl_vars['order']->value['total'];?>
</td>
               <td align="right">
                  <?php if (isset($_smarty_tpl->tpl_vars['order']->value['notes'])) {?>
                  <a href="?_g=orders&action=edit&order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value['cart_order_id'];?>
&source=dashboard#order_notes" title="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['notes'], 'note');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
echo $_smarty_tpl->tpl_vars['note']->value['time'];?>
 <?php echo $_smarty_tpl->tpl_vars['note']->value['content'];
echo "\r\n";
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>"><i class="fa fa-sticky-note" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['notes'];?>
" aria-hidden="true"></i></a>
                  <?php }?>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['order']->value['link_print'];?>
" class="print" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['print'];?>
"><i class="fa fa-print" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['print'];?>
"></i></a>
                  <a href="?_g=orders&action=edit&order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value['cart_order_id'];?>
&source=dashboard" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"><i class="fa fa-pencil-square-o" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"></i></a>
                  <a href="?_g=orders&delete=<?php echo $_smarty_tpl->tpl_vars['order']->value['cart_order_id'];?>
&source=dashboard&token=<?php echo $_smarty_tpl->tpl_vars['SESSION_TOKEN']->value;?>
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
         <tfoot>
            <tr>
               <td><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/select_all.gif" alt=""></td>
               <td><a href="#" class="check-all" rel="all-orders"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['check_uncheck'];?>
</a></td>
               <td colspan="6">
                  <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['with_selected'];?>
:
                  <select name="multi-status" class="textbox">
                     <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['option_status_no_change'];?>
</option>
                     <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['change_order_status'];?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LIST_ORDER_STATUS']->value, 'status');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['status']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['status']->value['string'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                     </optgroup>
                  </select>
                  <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['then'];?>

                  <select name="multi-action" class="textbox">
                     <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['option_nothing'];?>
</option>
                     <option value="print"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['option_print'];?>
</option>
                     <option value="delete" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orders']['option_delete'];?>
</option>
                  </select>
                  <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['go'];?>
" name="go" class="tiny">
               </td>
            </tr>
            <tr>
               <td colspan="8">
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
      <div><?php echo $_smarty_tpl->tpl_vars['ORDER_PAGINATION']->value;?>
</div>
   </div>
   
   </form>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['REVIEWS']->value)) {?>
<div id="product_reviews" class="tab_content">
   <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_reviews_pending'];?>
</h3>
   <form action="?_g=products&node=reviews&origin=dashboard" method="post" enctype="multipart/form-data">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REVIEWS']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
      <div class="note">
         <span class="actions">
         <input type="hidden" class="toggle" name="approve[<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
]" id="approve_<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['review']->value['approved'];?>
">
         <a href="<?php echo $_smarty_tpl->tpl_vars['review']->value['edit'];?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"><i class="fa fa-pencil-square-o" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"></i></a>
         <a href="<?php echo $_smarty_tpl->tpl_vars['review']->value['delete'];?>
" class="delete" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><i class="fa fa-trash" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
"></i></a>
         </span>
         <div><strong><?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
</strong></div>
         <p><?php echo $_smarty_tpl->tpl_vars['review']->value['review'];?>
</p>
         <div class="details">
            <span style="float: right;">
            <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 1; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <input type="radio" class="rating" name="rating_<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" disabled="disabled" <?php if ($_smarty_tpl->tpl_vars['review']->value['rating'] == (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>checked="checked"<?php }?>>
            <?php
}
}
?>
            </span>
            <a href="?_g=products&product_id=<?php echo $_smarty_tpl->tpl_vars['review']->value['product_id'];?>
&action=edit"><?php echo $_smarty_tpl->tpl_vars['review']->value['product']['name'];?>
</a> &raquo; <?php echo $_smarty_tpl->tpl_vars['review']->value['date'];?>
 :: <?php echo $_smarty_tpl->tpl_vars['review']->value['name'];?>
 &lt;<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['review']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value['email'];?>
</a>&gt;  <?php echo $_smarty_tpl->tpl_vars['review']->value['ip_address'];?>

         </div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <div>
         <input class="submit" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['update'];?>
">
      </div>
      
   </form>
   <div><?php echo $_smarty_tpl->tpl_vars['REVIEW_PAGINATION']->value;?>
</div>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['EXTENSION_UPDATES']->value)) {?>
<div id="extension_updates" class="tab_content">
   <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_extension_updates'];?>
</h3>
   <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['extensions_available_desc'];?>
</p>
   <table>
      <thead>
         <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['name'];?>
</th>
            <th colspan="2">&nbsp;</th>
         </tr>
      </thead>
      <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EXTENSION_UPDATES']->value, 'extension');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extension']->value) {
?>
         <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['extension']->value['name'];?>
</td>
            <td><a href="https://www.cubecart.com/extensions/id/<?php echo $_smarty_tpl->tpl_vars['extension']->value['file_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['update'];?>
</a></td>
            <td><a href="?ignore_update=<?php echo $_smarty_tpl->tpl_vars['extension']->value['file_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['ignore'];?>
</a></td>
         </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
   </table>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['STOCK']->value)) {?>
<div id="stock_warnings" class="tab_content">
   <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_stock_warnings'];?>
</h3>
   <table width="70%">
      <thead>
         <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['THEAD_STOCK']->value['name'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['THEAD_STOCK']->value['product_code'];?>
</th>
            <th width="85" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['THEAD_STOCK']->value['stock_level'];?>
</th>
            <th width="10">&nbsp;</th>
         </tr>
      </thead>
      <tbody>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STOCK']->value, 'warn');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['warn']->value) {
?>
         <tr>
            <td><a href="?_g=products&action=edit&product_id=<?php echo $_smarty_tpl->tpl_vars['warn']->value['product_id'];
if ($_smarty_tpl->tpl_vars['warn']->value['M_use_stock'] == 1) {?>#Options<?php }?>"><?php echo $_smarty_tpl->tpl_vars['warn']->value['name'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['warn']->value['product_code'];?>
</td>
            <td align="center"  width="65" nowrap="nowrap"><?php if ($_smarty_tpl->tpl_vars['warn']->value['M_use_stock'] == 1) {
echo $_smarty_tpl->tpl_vars['warn']->value['M_stock_level'];
} else {
echo $_smarty_tpl->tpl_vars['warn']->value['I_stock_level'];
}
if ($_smarty_tpl->tpl_vars['warn']->value['cached_name']) {?>
               - <?php echo $_smarty_tpl->tpl_vars['warn']->value['cached_name'];?>

               <?php }?>
            </td>
            <td width="30">
            <a href="?_g=products&action=edit&product_id=<?php echo $_smarty_tpl->tpl_vars['warn']->value['product_id'];
if ($_smarty_tpl->tpl_vars['warn']->value['M_use_stock'] == 1) {?>#Options<?php }?>" class="edit"><i class="fa fa-pencil-square-o" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"></i></a><a href="?_g=products&delete=<?php echo $_smarty_tpl->tpl_vars['warn']->value['product_id'];?>
&dashboard=1" class="delete" title="<?php ob_start();
echo $_smarty_tpl->tpl_vars['warn']->value['name'];
$_prefixVariable1 = ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete_product'],'%s',$_prefixVariable1);?>
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
   <div><?php echo $_smarty_tpl->tpl_vars['STOCK_PAGINATION']->value;?>
</div>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['PLUGIN_TABS']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PLUGIN_TABS']->value, 'tab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
<div id="advanced" class="tab_content">
   <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_store_overview'];?>
</h3>
   <div>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_inventory_data'];?>
</legend>
         <dl>
            <dt><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['inv_customers'];?>
</dt>
            <dd><?php echo $_smarty_tpl->tpl_vars['COUNT']->value['customers'];?>
</dd>
            <dt><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['inv_orders'];?>
</dt>
            <dd><?php echo $_smarty_tpl->tpl_vars['COUNT']->value['orders'];?>
</dd>
            <dt><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['inv_products'];?>
</dt>
            <dd><?php echo $_smarty_tpl->tpl_vars['COUNT']->value['products'];?>
</dd>
            <dt><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_category'];?>
</dt>
            <dd><?php echo $_smarty_tpl->tpl_vars['COUNT']->value['categories'];?>
</dd>
         </dl>
      </fieldset>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_technical_data'];?>
</legend>
         <dl>
            <dt><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tech_version_cc'];?>
</dt>
            <dd><?php echo $_smarty_tpl->tpl_vars['SYS']->value['cc_version'];?>
 <?php echo $_smarty_tpl->tpl_vars['SYS']->value['cc_build'];?>
</dd>
            <dt><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tech_version_php'];?>
</dt>
            <dd><?php echo $_smarty_tpl->tpl_vars['SYS']->value['php_version'];?>
</dd>
            <dt><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tech_version_mysql'];?>
</dt>
            <dd><?php echo $_smarty_tpl->tpl_vars['SYS']->value['mysql_version'];?>
</dd>
            <dt><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tech_size_image'];?>
</dt>
            <dd><a href="#" class="getFileSize" data-path="images"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['calculate'];?>
</a></dd>
            <dt><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tech_size_download'];?>
</dt>
            <dd><a href="#" class="getFileSize" data-path="files"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['calculate'];?>
</a></dd>
            <dt><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tech_upload_max'];?>
</dt>
            <dd><?php echo $_smarty_tpl->tpl_vars['PHP']->value['upload_max_filesize']['local_value'];?>
</dd>
            <dt><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tech_browser'];?>
</dt>
            <dd><?php echo $_smarty_tpl->tpl_vars['SYS']->value['client'];?>
</dd>
            <dt><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['tech_server'];?>
</dt>
            <dd><?php echo $_smarty_tpl->tpl_vars['SYS']->value['server'];?>
</dd>
         </dl>
      </fieldset>
      <div style="display: none" id="val_time_out_text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['error_time_out'];?>
</div>
   </div>
</div>
<?php }
}
