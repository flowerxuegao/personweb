<?php /* Smarty version Smarty-3.0.6, created on 2016-11-02 08:41:23
         compiled from "tpl/index\fenlei.html" */ ?>
<?php /*%%SmartyHeaderCode:5254581998a3d564e9-03383787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ae4caba1cb0324b82980f65073f9f98cb0d5455' => 
    array (
      0 => 'tpl/index\\fenlei.html',
      1 => 1478070047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5254581998a3d564e9-03383787',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
index1.css">
    <script src="../../static/js/jquery-3.1.0.js"></script>
</head>
<body style="height: 100%;background: url('<?php echo $_smarty_tpl->getVariable('img')->value;?>
bg/blue.jpg')">
<div id="nav-wrapper">
    <ul id="nav" class="sf-menu sf-js-enabled sf-shadow">
        <li class="logo">
            <a href="">
                <img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
logo.png" alt="">
            </a>
        </li>
        <li>
            <a href="home.html">首页</a>
        </li>
        <li class="current-menu-item">
            <a href="index.php?m=index&c=index&a=category">分类</a>
        </li>
        <li>
            <a href="index.php?m=index&c=index&a=lists">列表</a>
        </li>
        <li>
            <a href="">详情</a>
        </li>
        <!--<?php if ($_smarty_tpl->getVariable('userlogin')->value){?>-->
        <!--<li style="float:right"><a href="index.php?m=index&c=login&a=loginout">登录</a></li>-->
        <!--<?php }else{ ?>-->
        <li style="float:right"><a href="index.php?m=index&c=login&a=login">登录</a></li>
        <li style="float:right"><a href="index.php?m=index&c=login&a=reg">注册</a></li>
        <!--<?php }?>-->
        <li class="search-box">
            <form action="">
                <input type="text" value="搜索" id="s">
            </form>
        </li>
    </ul>
</div>
<div id="page-wrap">

    <!-- content -->
    <!-- content -->
    <div id="content">
    <div id="sidebar">
        <!-- project tags -->
        <h6 class="side-title">Categories</h6>
        <ul class="cat-list">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
            <li>
                <a href="" ><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
 </a>
                <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value["son"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
?>
                <li>
                    <a href="index.php?m=index&c=index&a=lists&cid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v1']->value["cname"];?>
</a>
                </li>
            <?php }} ?>
            </li>
            <?php }} ?>
        </ul>
        <!-- ENDS project tags -->
    </div>
</div>
</div>
</body>
</html>