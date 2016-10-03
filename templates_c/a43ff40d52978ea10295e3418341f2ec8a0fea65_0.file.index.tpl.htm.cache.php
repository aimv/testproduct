<?php
/* Smarty version 3.1.30, created on 2016-09-30 18:17:50
  from "/var/www/html/testproduct/templates/index.tpl.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ee65fe6aa0e4_03234035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a43ff40d52978ea10295e3418341f2ec8a0fea65' => 
    array (
      0 => '/var/www/html/testproduct/templates/index.tpl.htm',
      1 => 1475229998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ee65fe6aa0e4_03234035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '105071753357ee65fe67f7f0_39351567';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test Project</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <table>
            <caption>User ID: <?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
</caption>
            <tr>
                <th>Product name</th>
                <th>Price</th>
                <th>Count</th>
                <th>Cost</th>
            </tr>
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['count'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cost'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            
            <tr>
                <td colspan="4">Total sum: <?php echo $_smarty_tpl->tpl_vars['total_sum']->value;?>
</td>
            </tr>
        </table>
    </body>
</html>





<?php }
}
