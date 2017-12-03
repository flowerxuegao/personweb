<?php /* Smarty version Smarty-3.0.6, created on 2017-05-23 16:53:38
         compiled from "tpl/admin\showrel.html" */ ?>
<?php /*%%SmartyHeaderCode:1127859128d03c11ba0-30859636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6060d99ccff82ac639c659b7771fd308abdf9009' => 
    array (
      0 => 'tpl/admin\\showrel.html',
      1 => 1494387970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1127859128d03c11ba0-30859636',
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
        <th>id</th>
        <th>内容</th>
        <th>发表时间</th>
        <th>操作</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["rid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["rtime"];?>
</td>
        <td>
            <a  href="index.php?m=admin&c=show&a=delrel&rid=<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
"><button class="btn btn-danger">删除</button></a>
        </td>
    </tr>
    <?php }} ?>
</table>
</body>
<script>

</script>
</html>