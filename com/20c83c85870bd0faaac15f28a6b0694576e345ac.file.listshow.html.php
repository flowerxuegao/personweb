<?php /* Smarty version Smarty-3.0.6, created on 2016-10-27 15:27:29
         compiled from "tpl/index\listshow.html" */ ?>
<?php /*%%SmartyHeaderCode:4349581200c18cda43-07308433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20c83c85870bd0faaac15f28a6b0694576e345ac' => 
    array (
      0 => 'tpl/index\\listshow.html',
      1 => 1477574845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4349581200c18cda43-07308433',
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
            <li><a href="index.php?m=index&c=show&a=showcon&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</a>
            </li>
            <?php }} ?>
        </ul>


</body>
</html>