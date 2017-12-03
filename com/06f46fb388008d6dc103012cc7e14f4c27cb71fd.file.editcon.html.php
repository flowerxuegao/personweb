<?php /* Smarty version Smarty-3.0.6, created on 2016-10-24 07:28:11
         compiled from "tpl/admin\editcon.html" */ ?>
<?php /*%%SmartyHeaderCode:31375580d9beba7dd21-09405114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f46fb388008d6dc103012cc7e14f4c27cb71fd' => 
    array (
      0 => 'tpl/admin\\editcon.html',
      1 => 1477286880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31375580d9beba7dd21-09405114',
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
    <style>
        form{
            text-align: left;
            width: 200px;
            height:200px;
        }
        input{
            margin-top: 10px;;
        }
        .box{
            position: relative;
            width:200px;height:20px;
            border:1px solid #000;
        }
        .progress{
            background:red;
            width:0;
            height:100%;
            position: absolute;
            left:0;top:0;
            text-align: center;
        }
    </style>    <script>
    window.onload=function(){
        /*
         * 文件对象
         * 进度条的dom对象
         * 预览图片的容器
         * */

        var one=document.getElementsByTagName("input")[1];
        var two=document.getElementsByClassName("progress")[0];
        var three=document.getElementsByTagName("img")[0];
        var uploadObj = new upload("index.php?m=admin&c=show&a=upload",one,two,three, function (e) {
//            document.getElementsByName("imgurl")[0].value=e;
            alert(e);
        });
        uploadObj.up();

    }
</script>
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
jquery-3.1.0.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
upload.js"></script>


</head>
<body>
<form action="index.php?m=admin&c=show&a=showadd" method="post">
    所属分类：<select name="pid" id="">
    <option value="0">顶级分类</option>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('trees')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" <?php if ($_smarty_tpl->getVariable('pid')->value==$_smarty_tpl->tpl_vars['v']->value['cid']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</option>
    <?php }} ?>
</select><br>
    标题：<input type="text" name="title"><br>
    内容：<textarea name="con" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="file" >
    <input type="hidden" name="imgurl">
    <div class="img">
        <img src="" alt="" width="200">
    </div>
    <div class="box">

        <div class="progress">

        </div>
    </div>
    普通文章<input type="radio" name="status" value="0" checked>
    登录文章<input type="radio" name="status" value="1">
    <br>
    <input type="submit" style="background: dodgerblue;color: #fff">
</form>
</body>
<script>

</script>
</html>
<!--文件的处理-
如何使用ajax
->
