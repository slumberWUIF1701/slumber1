<?php
/* Smarty version 3.1.30, created on 2017-07-05 15:56:42
  from "D:\wamp\www\zhaopin\template\admin\editPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595cf01a0f8959_71759807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '515aa7ff58c831ef08484fdb166eac7e9df89af7' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\editPos.html',
      1 => 1499260355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595cf01a0f8959_71759807 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <li> <span><?php echo $_smarty_tpl->tpl_vars['v']->value['posname'];?>
</span>  <a href="index.php?d=admin&f=position&a=del&pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
">删除</a>
        <a href="index.php?d=admin&f=position&a=edit&pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
">编辑</a>
    </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</body>
</html><?php }
}
