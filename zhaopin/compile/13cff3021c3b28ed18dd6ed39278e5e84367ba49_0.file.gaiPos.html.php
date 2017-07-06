<?php
/* Smarty version 3.1.30, created on 2017-07-05 16:00:48
  from "D:\wamp\www\zhaopin\template\admin\gaiPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595cf1101e9883_98138801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13cff3021c3b28ed18dd6ed39278e5e84367ba49' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\gaiPos.html',
      1 => 1499263243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595cf1101e9883_98138801 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php?d=admin&f=position&a=gaiPos" method="post">
    <input type="text" name="posname" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value['posname'];?>
"><br>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value['posid'];?>
" name="posid">
    <input type="submit" value="提交">
</form>
</body>
</html><?php }
}
