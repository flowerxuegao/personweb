<?php /* Smarty version Smarty-3.0.6, created on 2016-10-18 11:22:52
         compiled from "tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169535805e9ec3b5849-79728420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db97a3f8af80d260372ece8474eb31d980e7a586' => 
    array (
      0 => 'tpl\\index.tpl',
      1 => 1476782570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169535805e9ec3b5849-79728420',
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
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
index.css">
</head>
<body>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aaa')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
	<ul>
		<li><a href="index.php?m=admin&c=show&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</a></li>
	</ul>
	<?php }} ?>
</body>
</html>