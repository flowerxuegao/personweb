<?php /* Smarty version Smarty-3.0.6, created on 2017-05-11 11:29:10
         compiled from "tpl/index\show.html" */ ?>
<?php /*%%SmartyHeaderCode:1296459142ee69f4089-99468717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eaa49b855c6e4e06d824a46ef9689734e6c5b80' => 
    array (
      0 => 'tpl/index\\show.html',
      1 => 1494333932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1296459142ee69f4089-99468717',
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
    <link href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
index/about.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
index1.css">
    <link href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
index/media.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
index/base.css" rel="stylesheet">
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
/jquery-3.1.0.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
/show.js"></script>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <script src="../../static/js/show.js"></script>
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
    <h3 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/"></a></h3>
    <div class="about">
      <h2><?php echo $_smarty_tpl->getVariable('title')->value;?>
</h2>
      <ul>
        <p><?php echo $_smarty_tpl->getVariable('con')->value;?>
</p>
      </ul>
      <h2></h2>
      <!--<ul class="blog_a">-->
            <div class="liuyan">
                 
                <textarea name="" id="" cols="30" rows="10" style="resize:none"></textarea>
                    <input type="hidden" name="sid" value=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
>
                <input type="button" value="留言" id="btn1" style="float:right;background:#e41635;padding:5px 10px;border-radius:5px;color:#fff;box-shadow:0 0 5px #000;border:none">
            <div style="clear:both;width: 100%;height: 40px;line-height: 40px;background-color: #f1f1f1;padding-left: 10px;box-sizing: border-box;position: relative;top: 15px;box-shadow: 0 0 5px rgba(100,100,100,0.6);">
                最新评论
            </div>

               <ul class="message">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
                    <li attr="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">
                        <span style="margin-left:10px"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</span>:<span style="margin-left:10px"><?php echo $_smarty_tpl->tpl_vars['v']->value['con'];?>
</span><span style="margin-left:20px;color: #bfbfbf;"><?php echo $_smarty_tpl->tpl_vars['v']->value['mtime'];?>
</span><b style="margin-right:10px;border-radius:5px;color:#fff;box-shadow:0 0 5px #000;background:#e41635">点击回复</b>
                        <ul class="son" style="background: #f1f1f1;width: 90%;margin: 15px auto;border-radius: 5px">
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['son']){?>
                            <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['v1']->value['uid'];?>
:<?php echo $_smarty_tpl->tpl_vars['v1']->value['con'];?>
</li>
                            <?php }} ?>
                            <?php }?>
                        </ul>
                    </li>
                    <?php }} ?>
                </ul>
               
            </div>
            <div class="mask" style="display:none"></div>
            <div class="box" style="display:none">
                <div class="close" style="font-family: '微软雅黑';font-size: 20px;">X</div>
               <textarea name=""  cols="30" rows="10"></textarea>
                <input type="button" value="回复" id="btn2" style="background: #e41630;border: none;color: #fff;padding: 5px;border-radius: 5px;">
            </div>
      <!--</ul>-->
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
      <p><a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=HHh9cn95b3F1cHVye1xtbTJ-c3E" ><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_22.png" ></a></p>
    </div>
  </aside>
  <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>

</html>
