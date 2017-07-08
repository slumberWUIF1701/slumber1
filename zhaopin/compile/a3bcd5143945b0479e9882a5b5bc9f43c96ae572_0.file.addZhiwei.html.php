<?php
/* Smarty version 3.1.30, created on 2017-07-07 08:19:43
  from "D:\wamp\www\zhaopin\template\admin\addZhiwei.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595f27ffcd2279_12295422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3bcd5143945b0479e9882a5b5bc9f43c96ae572' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\addZhiwei.html',
      1 => 1499408374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f27ffcd2279_12295422 (Smarty_Internal_Template $_smarty_tpl) {
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
<form class="form-horizontal" action="index.php?d=admin&f=zhiwei&a=addZhiwei" method="post">
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">职位名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="" placeholder="zname" name="zname">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加职位</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
