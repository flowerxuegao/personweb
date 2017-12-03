<?php /* Smarty version Smarty-3.0.6, created on 2017-05-16 03:48:36
         compiled from "tpl/index\home.html" */ ?>
<?php /*%%SmartyHeaderCode:8927591a5a74cb0208-32434708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0f2ebb4a5b84f2de4b98990c8ccf735fd5cb0c3' => 
    array (
      0 => 'tpl/index\\home.html',
      1 => 1494899315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8927591a5a74cb0208-32434708',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
<link href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
index/base.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
index/index.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
index/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  <script src="../../static/js/silder.js"></script>
  <!--[if lt IE 9]>
<script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
modernizr.js"></script>
<![endif]-->
</head>
<body>
<div class="ibody">
  <header>
    <h1>如影随形</h1>
    <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
    <div class="logo"></div>
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
    <div class="banner">
      <ul class="texts">
        <p>The best life is use of willing attitude, a happy-go-lucky life. </p>
        <p>最好的生活是用心甘情愿的态度，过随遇而安的生活。</p>
      </ul>
    </div>
    <div class="bloglist">
      <h2>
        <p><span>推荐</span>文章</p>
      </h2>
      <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data1')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
?>
      <div class="blogs">
        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['v1']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['v1']->value["title"];?>
</a></h3>
        <figure><img src="<?php echo $_smarty_tpl->tpl_vars['v1']->value["imgurl"];?>
" ></figure>
        <ul>
          <p ><span class="abstract"><?php echo $_smarty_tpl->tpl_vars['v1']->value["con"];?>
</span><span>……</span>
          <a href="<?php echo $_smarty_tpl->tpl_vars['v1']->value['url'];?>
" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：<?php echo $_smarty_tpl->tpl_vars['v1']->value["aid"];?>
</span></p>
        <div class="dateview"><?php echo $_smarty_tpl->tpl_vars['v1']->value["stime"];?>
</div>
      </div>
      <?php }} ?>
    </div>
  </article>
  <aside>
    <div class="avatar"><a href="about.html"><span>关于杜媛</span></a></div>
    <div class="topspaceinfo">
      <h1>你只管努力</h1>
      <p>上天自有安排</p>
    </div>
    <div class="about_c">
      <p>网名：Y</p>
      <p>职业：Web前端工程师 </p>
      <p>籍贯：山西省―阳泉市</p>
      <p>电话：1013672828</p>
      <p>邮箱：1013672828@qq.com</p>
    </div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">最新文章</p>
      </h2>
      <ul>
      <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data1')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['v1']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['v1']->value["title"];?>
</a></li>
        <?php }} ?>
      </ul>
      <h2>
        <p class="tj_t2">推荐文章</p>
      </h2>
      <ul>
        <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data1')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['v1']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['v1']->value["title"];?>
</a></li>
        <?php }} ?>
      </ul>
    </div>
  </aside>
  <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
<script>
    var abstract=document.querySelectorAll(".abstract");
    for (var i=0;i<abstract.length;i++){
        abstract[i].innerHTML= abstract[i].innerHTML.slice(0,100);
    }
    var dateview=document.querySelectorAll(".dateview");
    for (var j=0;j<dateview.length;j++){
        dateview[j].innerHTML= dateview[j].innerHTML.slice(0,10);
    }

</script>>
</html>
