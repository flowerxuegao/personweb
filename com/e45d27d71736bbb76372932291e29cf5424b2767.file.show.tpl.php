<?php /* Smarty version Smarty-3.0.6, created on 2016-10-18 11:24:43
         compiled from "tpl\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103445805ea5b3560b9-01417038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e45d27d71736bbb76372932291e29cf5424b2767' => 
    array (
      0 => 'tpl\\show.tpl',
      1 => 1476782680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103445805ea5b3560b9-01417038',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aaa')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
	<h3><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</h3>
	<p><?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>
</p>
	<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
	<?php }} ?>
</body>
</html>