<?php /* Smarty version Smarty-3.0.6, created on 2017-05-10 09:18:01
         compiled from "tpl/index\list.html" */ ?>
<?php /*%%SmartyHeaderCode:326145912bea94cb3f5-26615520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9550a8f0f25a32a284001bf563f8ad10b184f93' => 
    array (
      0 => 'tpl/index\\list.html',
      1 => 1494333932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326145912bea94cb3f5-26615520',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>列表</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="个人博客模板" />
<link href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
index/base.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
index/style.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
index/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<div class="ibody">
  <header>
    <h1>如影随形</h1>
    <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
    <div class="logo"><a href="/"></a></div>
    <nav id="topnav">
        <a href="index.php?m=index&c=index&a=index">首页</a>
      <a href="index.php?m=index&c=show&a=show&id=18">关于我</a>
      <a href="index.php?m=index&c=index&a=lists&cid=23">精美文章</a>
      <ul style="float: right">
        <?php if ($_smarty_tpl->getVariable('username')->value){?>
        <li style="float:left"><a href="index.php?m=index&c=login&a=loginout">注销</a></li>

        <?php }else{ ?>
        <li style="float:left"><a href="index.php?m=index&c=login&a=login">登录</a></li>
        <li style="float:left"><a href="index.php?m=index&c=login&a=reg">注册</a></li>

        <?php }?>
      </ul>
    </nav>
  </header>
  <article>
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/"></a></h2>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
    <div class="bloglist">
      <div class="newblog" style="margin: 0;padding: 0 20px 20px 20px;box-sizing: border-box;width: 100%; ">
        <ul>
          <h3><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</a></h3>
          <div class="autor" style="padding-left: 0"><span>作者：<?php echo $_smarty_tpl->tpl_vars['v']->value["aid"];?>
</span></div>
        </ul>
        <figure><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" ></figure>
        <div class="dateview"><?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>
</div>
      </div>
    </div>
    <?php }} ?>
  </article>
  <aside>
    <div class="rnav">
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listdata')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
      <li class="rnav1 "><a href="index.php?m=index&c=index&a=lists&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a></li>
      <?php }} ?>
    </div>
    <div class="ph_news">
      <h2>
        <p>栏目推荐</p>
      </h2>
      <ul>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
        <li><a href="/"><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</a></li>
        <?php }} ?>

      </ul>
      <h2>
        <p>最新评论</p>
      </h2>
      <ul class="pl_n">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('messdata')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
        <dl>
          <dt> </dt>
          <dd><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>

            <time><?php echo $_smarty_tpl->tpl_vars['v']->value["mtime"];?>
</time>
          </dd>
          <dd><a href="/"><?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>
</a></dd>
        </dl>
        <?php }} ?>
      </ul>
    </div>
  </aside>
  <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
<script>
    var dateview=document.querySelectorAll(".dateview");
    for (var j=0;j<dateview.length;j++){
        dateview[j].innerHTML= dateview[j].innerHTML.slice(0,10);
    }
</script>

</html>

