<?php
/* Smarty version 3.1.30, created on 2017-07-06 05:09:23
  from "D:\wamp\www\zhaopin\template\admin\zhaopinMess.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595da9e3c9cf11_93045428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '284e5d31ecb35277a7244293679dbca79c8c8f71' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\zhaopinMess.html',
      1 => 1499310562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595da9e3c9cf11_93045428 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    td{
        width:200px;
        height:auto;
        text-align: center;
    }
</style>
<body>
    <table>
        <tr>
            <th>公司</th>
            <th>招聘职位</th>
            <th>薪资</th>
            <th>地点</th>
            <th>推荐位</th>
            <th>编辑</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ch'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zhiwei'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['money'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
</td>
            <td>
                <a href="">删除</a>
                <a href="">编辑</a>
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
