<?php
/* Smarty version 3.1.30, created on 2017-07-03 08:59:06
  from "D:\wamp\www\zhaopin\template\admin\addRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5959eb3a57e197_96550099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28aa9b8a1798d6a4835ca2b7cfe6dd821d6455e3' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\addRole.html',
      1 => 1498644850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5959eb3a57e197_96550099 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
</head>
<body>
<form class="form-horizontal" action="index.php?d=admin&f=role&a=addRole" method="post">
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">角色名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="" placeholder="username" name="rname">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加角色</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
