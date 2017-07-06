<?php
/* Smarty version 3.1.30, created on 2017-07-03 09:56:57
  from "D:\wamp\www\zhaopin\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5959f8c9321886_32175522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81c60886b644fe9267b82cccfbf5b4cc3d68b41a' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\login.html',
      1 => 1499068616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5959f8c9321886_32175522 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    *{
        padding:0;
        margin:0;
    }
    form{
        width:400px;
        height:400px;
        position: absolute;
        left:0;
        top:0;
        right:0;
        bottom:0;
        margin:auto;
        text-align: center;
    }
    input{
        height:30px;
        background-color: rgb(250, 255, 189);
    }
    img{
        width:172px;
        height:34px;
        margin-top:20px;
    }
    button{
        width:76px;
        height:30px;
        margin-right:96px;
        margin-top:10px;
    }
    .reg{
        display: block;
        width:76px;
        height:30px;
        position:absolute;
        top:96px;
        bottom:0;
        left:100px;
        right:0;
        margin:auto;
        overflow: hidden;
    }
</style>
<body>
<form action="<?php echo SELF_PATH;?>
?d=admin&f=login&a=check" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">帐户</label><br>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="user" name="user">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">密码</label><br>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">验证码</label><br>
        <input type="text" class="form-control"  name="code" placeholder="code">
    </div>
    <img src="<?php echo SELF_PATH;?>
?d=admin&f=login&a=code" alt="" onclick="this.src='<?php echo SELF_PATH;?>
?d=admin&f=login&a=code&c=Math.random()'"><br>
    <button type="submit" class="btn btn-default">登录</button>
</form>
<button onclick="location.href='index.php?d=admin&f=login&a=reg'" class="reg">注册</button>
</body>
</html><?php }
}
