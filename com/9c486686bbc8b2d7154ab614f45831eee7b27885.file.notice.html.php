<?php /* Smarty version Smarty-3.0.6, created on 2017-05-23 16:52:17
         compiled from "tpl/index\notice.html" */ ?>
<?php /*%%SmartyHeaderCode:28409591e6bee338848-61088442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c486686bbc8b2d7154ab614f45831eee7b27885' => 
    array (
      0 => 'tpl/index\\notice.html',
      1 => 1495165902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28409591e6bee338848-61088442',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en" style="width:100%;height: 100%;">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
notice.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
login.css">

</head>
<body style="color: #fff;width:100%;height: 100%;background: url('<?php echo $_smarty_tpl->getVariable('img')->value;?>
images/web_login_bg.jpg') no-repeat center;background-size: cover;">
<div class="login">
    <div class="message">提示页面</div>

    <form action="index.php?m=index&c=login&a=adduser" method="post" name="myform">
        <input name="action" value="login" type="hidden">
        <div class="user" style="color: #27A9E3;text-align: center">
            <?php echo $_smarty_tpl->getVariable('noticeTitle')->value;?>

        </div>
        <div class="password"  style="color: #27A9E3;text-align: center">
            <div class="noticeCon">
                <span url="<?php echo $_smarty_tpl->getVariable('noticeUrl')->value;?>
">3</span>秒后返回<?php echo $_smarty_tpl->getVariable('noticePage')->value;?>
页面
                <br>
                若无跳转请点击<a href="<?php echo $_smarty_tpl->getVariable('noticeUrl')->value;?>
" style="color:#fff;display: inline-block;padding: 5px;background: #27A9E3;margin: 5px;border-radius: 5px;">这里</a>返回
            </div>
        </div>
    </form>
</div>
<script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
jquery.min.js"></script>
<script>
    $(function(){
        var num=3;
        setInterval(function(){
            num--;
            if(num>0){
                $("span").html(num);

            }else{
                location.href=$("span").attr("url")
            }
        },1000)
    })
</script>
</body>
</html>