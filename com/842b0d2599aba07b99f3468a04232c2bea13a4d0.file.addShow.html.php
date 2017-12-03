<?php /* Smarty version Smarty-3.0.6, created on 2016-10-25 02:39:20
         compiled from "tpl/admin\addShow.html" */ ?>
<?php /*%%SmartyHeaderCode:24801580ea9b8d87972-34238176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '842b0d2599aba07b99f3468a04232c2bea13a4d0' => 
    array (
      0 => 'tpl/admin\\addShow.html',
      1 => 1477278639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24801580ea9b8d87972-34238176',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
addshow.css">
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
upload.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
addshow.js"></script>
</head>
<body>
<form action="index.php?m=admin&c=show&a=addshows" method="post">
    所属分类：<select name="cid" id="">
    <option value="0">一级分类</option>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('trees')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
    <option value=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</option>
    <?php }} ?>
</select>
    <br>
    标题：<input type="text" name="title">
    <br>
    内容：<textarea name="con" cols="30" rows="10"></textarea>
    <br>
    普通文章：<input type="radio" name="status" value="0" checked>
    登陆文章：<input type="radio" name="status" value="1">
    <br>
    文章图片：<input type="file">
    <br>
    <input type="hidden" name="imgurl" value="">
    <div class="imgbox">
    <img src="" alt="" width="200px" height="200px" >
    </div>
    <div class="box">
        <div class="progress"></div>
    </div>
    <input type="submit" value="添加文本">
</form>
</body>
</html>