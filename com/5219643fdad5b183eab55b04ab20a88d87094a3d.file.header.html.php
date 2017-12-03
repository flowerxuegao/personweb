<?php /* Smarty version Smarty-3.0.6, created on 2016-10-27 16:06:48
         compiled from "tpl/index/header.html" */ ?>
<?php /*%%SmartyHeaderCode:16979581209f8de9632-31269958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5219643fdad5b183eab55b04ab20a88d87094a3d' => 
    array (
      0 => 'tpl/index/header.html',
      1 => 1477577207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16979581209f8de9632-31269958',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
欢迎<span><?php echo $_smarty_tpl->getVariable('username')->value;?>
</span>进入主页
<?php if ($_smarty_tpl->getVariable('userlogin')->value){?>
<a href="index.php?m=index&c=login&a=loginout">注销</a>
<?php }else{ ?>
<a href="index.php?m=index&c=login&a=login">登录</a>
<a href="index.php?m=index&c=login&a=reg">注册</a>
<?php }?>


