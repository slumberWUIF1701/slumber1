<?php
/* Smarty version 3.1.30, created on 2017-07-07 05:40:00
  from "D:\wamp\www\zhaopin\template\admin\hr.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595f02908ea118_93359973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73b1b4f11c20b3fe2e20ab9da540aae9d899ab5a' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\hr.html',
      1 => 1499397849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f02908ea118_93359973 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    td{
        text-align: center;
        padding:0 40px;
    }
</style>
<body>
    <table>
        <tr>
            <th>HR名字</th>
            <th>公司名</th>
            <th>公司地址</th>
            <th>职位</th>
            <th>联系电话</th>
            <th>通过与否(1通过)</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['hrname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cpname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zhiwei'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['allow'];?>
</td>
            <td>
                <a href="index.php?d=admin&f=quanxian&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">编辑</a>
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
</body>
</html><?php }
}
