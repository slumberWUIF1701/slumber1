<?php
/* Smarty version 3.1.30, created on 2017-07-07 04:22:00
  from "D:\wamp\www\zhaopin\template\admin\zhuce.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595ef0482c8596_30804289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df999d03cda5c11e786be36cec0e29bed1f61449' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\zhuce.html',
      1 => 1499394118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595ef0482c8596_30804289 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    form{
        width:400px;
        height:440px;
        position:absolute;
        top:0;
        bottom:0;
        left:0;
        right:0;
        margin:auto;
        box-shadow: 0 0 0 2px red ;
    }
    label{
        display:block;
        padding:10px 0;
        text-align: center;
    }
    label input{
        height:20px;
        line-height:20px;
    }
    a{
        display: block;
        float:right;
    }
</style>
<body>
    <form action="index.php?d=admin&f=login&a=checkReg" method="post" >
        <label for="">
            公司名称：<input type="text" name="cpname" required>
        </label>
        <label for="">
            公司地址：<input type="text" name="address" required>
        </label>
        <label for="">
            HR名字：<input type="text" name="hrname" required>
        </label>
        <label for="">
            职称：<input type="text" name="zhiwei" required>
        </label>
        <label for="">
            联系电话：<input type="text" name="phone" required>
        </label>
        <label for="">
            账号：<input type="text" name="uname" required>
        </label>
        <label for="">
            密码：<input type="password" name="upass" required>
        </label>
        <label for="">
            确认密码：<input type="password" name="upass1">
        </label>
        <label for="">
            <input type="submit" value="提交">
        </label>
        <a href="index.php?d=admin&f=login">已有账户，请登录</a>
    </form>
</body>
</html><?php }
}
