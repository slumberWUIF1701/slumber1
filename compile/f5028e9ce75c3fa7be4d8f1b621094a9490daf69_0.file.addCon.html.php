<?php
/* Smarty version 3.1.30, created on 2017-07-07 15:53:18
  from "D:\wamp\www\zhaopin\template\admin\addCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595f924e8c73d8_63409435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5028e9ce75c3fa7be4d8f1b621094a9490daf69' => 
    array (
      0 => 'D:\\wamp\\www\\zhaopin\\template\\admin\\addCon.html',
      1 => 1499435178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f924e8c73d8_63409435 (Smarty_Internal_Template $_smarty_tpl) {
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
    招聘职位：<select  class="form-control" id="" name="zhiwei" placeholder="">
    <option value="">--选择职位--</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zhiwei']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['zid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['zname'];?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</select><br>
    工作经验: <input type="text" name="jingyan" required><br>
    学历：<input type="text" name="xueli" required><br>
    薪资：<input type="text" name="money" required><br>
    福利：<input type="text" name="fuli" required><br>
    技能要求：<input type="text" name="jineng" required><br>
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
