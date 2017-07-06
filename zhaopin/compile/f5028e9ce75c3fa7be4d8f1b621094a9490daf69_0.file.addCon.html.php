<?php
/* Smarty version 3.1.30, created on 2017-07-06 04:24:14
  from "D:\wamp\www\zhaopin\template\admin\addCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595d9f4e0ca009_94565820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5028e9ce75c3fa7be4d8f1b621094a9490daf69' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\addCon.html',
      1 => 1499307839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595d9f4e0ca009_94565820 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
upload.js"><?php echo '</script'; ?>
>-->
</head>
<body>
<form action="index.php?d=admin&f=category&a=addZhaopin" method="post">
    公司名: <input type="text" name="ch" required><br>
    英文名：<input type="text" name="en" required><br>
    招聘职位：<input type="text" name="zhiwei" required><br>
    薪资：<input type="text" name="money" required><br>
    地点：<input type="text" name="address" required><br>
    详情: <div><?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:500px;height:300px;" name="con"><?php echo '</script'; ?>
></div>



    推荐位：
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
      <?php echo $_smarty_tpl->tpl_vars['v']->value['posname'];?>
<input type="checkbox" name="posid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
">
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    <input type="submit" value="提交">
</form>
<?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor');




<?php echo '</script'; ?>
>
</body>
</html><?php }
}
