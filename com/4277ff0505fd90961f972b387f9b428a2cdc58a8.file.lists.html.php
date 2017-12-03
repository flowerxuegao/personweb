<?php /* Smarty version Smarty-3.0.6, created on 2016-10-27 15:27:57
         compiled from "tpl/index\lists.html" */ ?>
<?php /*%%SmartyHeaderCode:16451581200dd061499-80926002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4277ff0505fd90961f972b387f9b428a2cdc58a8' => 
    array (
      0 => 'tpl/index\\lists.html',
      1 => 1477574874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16451581200dd061499-80926002',
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
</head>
<body>
    <?php $_template = new Smarty_Internal_Template("tpl/index/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <ul>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
        <li>
            <a href="index.php?m=index&c=show&a=show&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
        </li>
        <?php }} ?>
    </ul>
</body>
</html>