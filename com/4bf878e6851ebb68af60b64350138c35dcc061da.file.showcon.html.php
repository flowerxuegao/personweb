<?php /* Smarty version Smarty-3.0.6, created on 2016-10-31 01:58:44
         compiled from "tpl/index\showcon.html" */ ?>
<?php /*%%SmartyHeaderCode:71758169744712eb4-39995307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bf878e6851ebb68af60b64350138c35dcc061da' => 
    array (
      0 => 'tpl/index\\showcon.html',
      1 => 1477875523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71758169744712eb4-39995307',
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
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
jquery.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
showcon.js"></script>
</head>
<body>
    <?php $_template = new Smarty_Internal_Template("tpl/index/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
    <h3><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['con'];?>
</p>
    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
    <?php }} ?>
    <div class="liuyan">
    <textarea name="" id="" cols="30" rows="10"></textarea>
        <input type="hidden" name="sid" value=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
>
    <input type="button" value="留言" id="btn1">
    </div>
    <ul class="message">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
        <li attr="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">
            <span><?php echo $_smarty_tpl->tpl_vars['v']->value['con'];?>
</span><b>点击回复</b>
            <ul class="son">
                <?php if ($_smarty_tpl->tpl_vars['v']->value['son']){?>
                <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
?>
                <li><?php echo $_smarty_tpl->tpl_vars['v1']->value['con'];?>
</li>
                <?php }} ?>
                <?php }?>
            </ul>
        </li>
        <?php }} ?>
    </ul>
    <div class="mask"></div>
    <div class="box">
        <div class="close">X</div>
        回复：<textarea name=""  cols="30" rows="10"></textarea>
        <input type="button" value="回复" id="btn2">
    </div>
</body>
</html>