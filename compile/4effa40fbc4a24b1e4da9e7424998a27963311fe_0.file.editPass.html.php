<?php
/* Smarty version 3.1.30, created on 2017-07-04 03:23:30
  from "D:\wamp\www\zhaopin\template\admin\editPass.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595aee12894840_06578599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4effa40fbc4a24b1e4da9e7424998a27963311fe' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\editPass.html',
      1 => 1499131147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595aee12894840_06578599 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="index.php?d=admin&f=user&a=gaiPass" method="post">
    用户名：<span><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</span><br>
    <input type="hidden" readonly value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" name="user">
    <label for="">
        请输入原密码：<input type="password"  required name="oldpass"><br>
        请输入新密码：<input type="password"  name="newpass"><br>
        请再次输入密码：<input type="password"  name="newpass1"><br>
    </label>
    <input type="submit" value="提交">
</form>
</body>
</html><?php }
}
