<?php
/* Smarty version 3.1.30, created on 2017-07-08 16:32:43
  from "D:\wamp\www\zhaopin\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5960ed0b360fe5_97151575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce575f0c5495f243a0272f5c67d43137a32661d6' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\main.html',
      1 => 1499524361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5960ed0b360fe5_97151575 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-3.1.1.js"><?php echo '</script'; ?>
>
<title>Document</title>

<style>
    html,body{
        width:100%;height:100%;
    }
    a{
        text-decoration: none;
    }
    body{
        padding:0;margin:0;
        overflow: hidden;
    }
    header{
        width:100%;height:20%;
        border-bottom: 2px solid #000;
        text-align: center;
        font-size: 30px;
        line-height:128px;
        background: #3A6EA5;
        color:#fff;
    }
    header a{
        text-decoration: none;
        color:#fff;
    }
    header div{
        height:100%;
        float:right;
        width:auto;
        overflow: hidden;
    }
    header span{
        display: block;
        height:100%;
        width:auto;
        font-size:14px;
        float:left;
        padding:0 20px;
    }
    .box{
        width:100%;height:80%;
    }
    .box .left{
        float:left;
        width:20%;height:100%;
        border-right:2px solid #000;
        box-sizing: border-box;
        background: #F7FBFC;
    }
    .box .left  ul ul{
        display:none;
    }
    .box .right{
        float:left;
        width:80%;height:100%;
    }
    iframe{
        width:100%;height:100%;
    }
</style>
</head>
<body>

<header>
    欢迎<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
来到后台管理系统
    <div>
        <!--<span>登录时间：<?php echo '<?php ';?>echo $time<?php echo '?>';?></span>-->
        <span>
                <a href="index.php?d=admin&f=login&a=logout">安全退出</a>
            </span>

    </div>
    <span>
            <a href="index.php?d=index&f=index" target="_blank">进入主页</a>
        </span>
</header>
<div class="box">
    <div class="left">
        <ul>
            <?php if ($_smarty_tpl->tpl_vars['rid']->value == 1) {?>
            <li>
                <a href="javascript:;">用户管理</a>
                <ul>
                    <li>
                        <a href="index.php?d=admin&f=quanxian&a=chakan" target="iframe">用户权限</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">职位管理</a>
                <ul>
                    <li>
                        <a href="index.php?d=admin&f=zhiwei&a=add" target="iframe">添加职位</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">信息管理</a>
                <ul>
                    <li>
                        <a href="index.php?d=admin&f=editZp&a=chakan" target="iframe">招聘信息管理</a>
                    </li>

                </ul>
            </li>
            <?php }?>
            <li>
                <a href="javascript:;">个人信息</a>
                <ul>
                    <li>
                        <a href="index.php?d=admin&f=user&a=editPass" target="iframe">修改密码</a>
                    </li>
                    <li>
                        <a href="index.php?d=admin&f=user&a=editMess" target="iframe">修改个人信息</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="javascript:;">内容管理</a>
                <ul>
                    <li>
                        <a href="index.php?d=admin&f=category&a=add" target="iframe">添加内容</a>
                    </li>

                    <li>
                        <a href="index.php?d=admin&f=lists&a=chakan" target="iframe">查看内容</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;">作品查看</a>
                <ul>
                    <li>
                        <a href="index.php?d=admin&f=zuopin&a=add" target="iframe">查看作品</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">推荐位管理</a>
                <ul>
                    <li>
                        <a href="index.php?d=admin&f=position&a=add" target="iframe">添加位置</a>
                    </li>

                    <li>
                        <a href="index.php?d=admin&f=position&a=chakan" target="iframe">查看位置</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="iframe">

        </iframe>
    </div>
</div>

</body>
</html>
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        var a=$('.left > ul > li > a');
        a.click(function(){
            $(this).next().slideToggle();
        })
    })
<?php echo '</script'; ?>
><?php }
}
