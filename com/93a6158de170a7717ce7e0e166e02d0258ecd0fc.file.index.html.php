<?php /* Smarty version Smarty-3.0.6, created on 2016-10-27 15:26:35
         compiled from "tpl/index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:165515812008b362c46-53800326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93a6158de170a7717ce7e0e166e02d0258ecd0fc' => 
    array (
      0 => 'tpl/index\\index.html',
      1 => 1477574792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165515812008b362c46-53800326',
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
 $_from = $_smarty_tpl->getVariable('menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
        <li>
            <span><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</span>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value["son"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
?>
                <li>
                    <a href="index.php?m=index&a=lists&cid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v1']->value['cname'];?>
</a>
                </li>
                <?php }} ?>
            </ul>
        </li>
        <?php }} ?>
    </ul>

</body>
</html>