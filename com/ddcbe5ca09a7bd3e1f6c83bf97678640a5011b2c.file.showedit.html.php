<?php /* Smarty version Smarty-3.0.6, created on 2017-05-11 11:48:02
         compiled from "tpl/admin\showedit.html" */ ?>
<?php /*%%SmartyHeaderCode:96259143352b89053-90823455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddcbe5ca09a7bd3e1f6c83bf97678640a5011b2c' => 
    array (
      0 => 'tpl/admin\\showedit.html',
      1 => 1494333932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96259143352b89053-90823455',
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
<form action="index.php?m=admin&c=cat&a=editcat&cid=<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" method="post">
    <select name="pid" id="">
        <option value="0">顶级分类</option>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('trees')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" <?php if ($_smarty_tpl->getVariable('pid')->value==$_smarty_tpl->tpl_vars['v']->value['cid']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</option>
        <?php }} ?>
    </select>
    <input type="text" name="cname" value="<?php echo $_smarty_tpl->getVariable('cname')->value;?>
">
    <input type="submit" style="background: dodgerblue;color: #fff">
</form>
</body>
</html>