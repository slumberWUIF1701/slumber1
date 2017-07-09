<?php
/* Smarty version 3.1.30, created on 2017-07-07 05:57:28
  from "D:\wamp\www\zhaopin\template\admin\editHr.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595f06a842a5c7_26638654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '921eb124c2afe9c1e069b9a36d0a5ef96353fdde' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\editHr.html',
      1 => 1499399846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f06a842a5c7_26638654 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php?d=admin&f=quanxian&a=gaiStatus" method="post">
    <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
    身份未通过：<input type="radio" name="allow" value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?> checked <?php }?>> <br>
    通过：<input type="radio" name="allow" value="1" <?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {?> checked <?php }?>> <br>
    <input type="submit" value="提交">
</form>
</body>
</html><?php }
}
