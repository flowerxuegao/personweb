<?php /* Smarty version Smarty-3.0.6, created on 2017-05-10 02:40:37
         compiled from "tpl/admin\setcat.html" */ ?>
<?php /*%%SmartyHeaderCode:3803591261850ab384-84414843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '539ff7887d895f323960f56e83f881ff2c4d4479' => 
    array (
      0 => 'tpl/admin\\setcat.html',
      1 => 1494333932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3803591261850ab384-84414843',
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
    <style>
        form{
            text-align: left;
            width: 200px;
            height:200px;
        }
        input{
            margin-top: 10px;;
        }
    </style>
</head>
<body>
<form action="index.php?m=admin&c=cat&a=addcat" method="post">
    <select name="pid" id="">
        <option value="0">顶级分类</option>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('trees')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</option>
        <?php }} ?>
    </select>
    <input type="text" name="cname">
    <input type="submit" style="background: dodgerblue;color: #fff">
</form>
</body>
</html>