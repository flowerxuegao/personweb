<?php /* Smarty version Smarty-3.0.6, created on 2017-05-23 16:52:07
         compiled from "tpl/index\reg.html" */ ?>
<?php /*%%SmartyHeaderCode:13769591427f6683e67-84084140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb44e5aaf8c91901acb82752253485cd90dd50cc' => 
    array (
      0 => 'tpl/index\\reg.html',
      1 => 1494493174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13769591427f6683e67-84084140',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>前台注册界面</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
login.css">
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
jquery-3.1.0.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
reg.js"></script>
    <style>
        .error{
            height: 20px;
        }
        .login{
            padding-top:50px;
            max-width:500px;
            background:rgba(245,245,245,0.3);
        }
        input[type=text], input[type=file], input[type=password], input[type=email], select{
            background:#f3f3f3;
            color:#666;
        }
        ::-webkit-input-placeholder { /* WebKit browsers */
            color:#666;
        }
        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color:#666;
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            color:#666;
        }
        :-ms-input-placeholder { /* Internet Explorer 10+ */
            color:#666;
        }
        .user{
            position:relative;
        }
        .password{
            position:relative;
        }
        .user .user_bgimg{
            background:url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
persons.png) no-repeat center;
            background-size:50%;
        }
        .password .password_bgimg{
              background:url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
locks.png) no-repeat center;
              background-size:50%;
          }

        .user .user_input{
            padding-left:50px;
        }
        .password .pass_input{
            padding-left:50px;
        }
        input[type=submit], input[type=button]{
             background:rgba(39,169,227,0.9)
         }
        input[type=submit]:hover, input[type=button]:hover{
            background:rgba(39,169,227,1)
        }


    </style>
</head>
<body>

<div class="login">
    <div class="message">前台注册界面</div>
    <form action="index.php?m=index&c=login&a=adduser" method="post" name="myform">
        <input name="action" value="login" type="hidden">
        <div class="user" style = "position:relative">
            <div class = "user_bgimg" style = "width:50px;height:50px;position:absolute;left:0;top:0"></div>
            <input class = "user_input" type="text" name="username" autocomplete="off" placeholder="用户名" onfocus="this.placeholder=''" onblur="this.placeholder='用户名'">
            <div class="error">

            </div>
        </div>
        <div class="password">
            <div class = "password_bgimg" style = "width:50px;height:50px;position:absolute;left:0;top:0"></div>
            <input class = "pass_input" type="password" name="password" placeholder="密码" onfocus="this.placeholder=''" onblur="this.placeholder='密码'">
            <div class="error">

            </div>
        </div>
        <div class="submit">
            <input type="submit" value="注册" style="width:100%;">
            <a href="index.php?m=index&c=login&a=login"><input type="button" value="登录" style="margin-top:20px"></a>
        </div>
    </form>
</div>


<div class="wrapper"><!-- 最外层部分 -->
    <div class="banner"><!-- 轮播部分 -->
        <ul class="imgList"><!-- 图片部分 -->
            <li class="imgOn">
                <a href="#">
                    <img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
images/fontloginbg1.png"  alt="puss in boots1">
                </a>
            </li>
        </ul>
        <div class="bg"></div>
    </div>
</div>
</body>
</html>
