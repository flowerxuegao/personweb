<?php /* Smarty version Smarty-3.0.6, created on 2017-05-23 16:53:34
         compiled from "tpl/admin\showcat.html" */ ?>
<?php /*%%SmartyHeaderCode:590459128be3a99592-62488045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a17bca5ac8358737b19a1c843ba6672ba62c981c' => 
    array (
      0 => 'tpl/admin\\showcat.html',
      1 => 1494387682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '590459128be3a99592-62488045',
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
bootstrap/css/bootstrap.min.css">
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
jquery-3.1.0.js"></script>
    <style>
        th,td{
            text-align: center;
        }
    </style>
</head>
<body>
<table class="table table-bordered table-striped table-hover" style="width:80%;margin: 15px auto">
    <tr style="background: #D7EBFA;color: #2D88D7">
        <th>cid</th>
        <th>分类名称</th>
        <th>操作</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('trees')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
        <td>
            <a  href="index.php?m=admin&c=cat&a=showedit&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><button class="btn btn-primary">编辑</button></a>
            <a  href="index.php?m=admin&c=cat&a=delcat&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><button class="btn btn-danger">删除</button></a>
        </td>
    </tr>
    <?php }} ?>
</table>
</body>
<script>

</script>
</html>