<?php
/* Smarty version 3.1.30, created on 2017-07-07 16:08:17
  from "D:\wamp\www\zhaopin\template\admin\zhaopinMess.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595f95d1a7c2a4_33778883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '284e5d31ecb35277a7244293679dbca79c8c8f71' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\zhaopinMess.html',
      1 => 1499436493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f95d1a7c2a4_33778883 (Smarty_Internal_Template $_smarty_tpl) {
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
            <th>招聘职位</th>
            <th>工作经验</th>
            <th>学历</th>
            <th>薪资</th>
            <th>推荐位</th>
            <th>编辑</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zhiwei'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['jingyan'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['xueli'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['money'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
</td>
            <td>
                <a href="">删除</a>
                <a href="index.php?d=admin&f=lists&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['zid'];?>
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
