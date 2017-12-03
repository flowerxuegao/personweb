<?php /* Smarty version Smarty-3.0.6, created on 2016-10-25 02:41:13
         compiled from "tpl/admin\showshows.html" */ ?>
<?php /*%%SmartyHeaderCode:32262580eaa29c6f817-13744191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91dcf0dccca632b58cd6e5f243208f2e7fa392e6' => 
    array (
      0 => 'tpl/admin\\showshows.html',
      1 => 1477289765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32262580eaa29c6f817-13744191',
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
</head>
<body>
<table  class="table table-bordered table-hover text-center">
    <tr>
        <th>sid</th>
        <th>标题</th>
        <th>内容</th>
        <th>图片地址 </th>
        <th>文章网址</th>
        <th>状态标识</th>
        <th>aid</th>
        <th>cid</th>
        <th>添加时间</th>
        <th>
            <a href=""><botton>修改</botton></a>
            <a href=""><botton>删除</botton></a>
        </th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
    <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['v']->value['con'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
 </th>
        <th><?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['v']->value['stime'];?>
</th>
        <th>
            <a href="index.php?m=admin&c=show&a=updateshow&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"  type="button"  class="btn btn-success"><botton>修改</botton></a>
            <a href="index.php?m=admin&c=show&a=delshow&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"  type="button"  class="btn btn-danger"><botton>删除</botton></a>
        </th>
    </tr>
    <?php }} ?>
</table>
</body>
</html>