<?php /* Smarty version Smarty-3.0.6, created on 2017-05-23 16:53:10
         compiled from "tpl/admin\reg.html" */ ?>
<?php /*%%SmartyHeaderCode:255395914063a49b981-78241658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4567950aba466f092d4ed0232fa147e1178a406d' => 
    array (
      0 => 'tpl/admin\\reg.html',
      1 => 1494484124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255395914063a49b981-78241658',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台注册</title>
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
    </style>
</head>
<body>
        <div class="login">
    <div class="message">REGISTER</div>
    
    <form action="index.php?m=admin&c=index&a=adduser" method="post" name="myform">
            <input name="action" value="login" type="hidden">
            <div class="user">
                <input type="text" name="auser" autocomplete="off" placeholder="username" onfocus="this.placeholder=''" onblur="this.placeholder='username'">
                <div class="error">
                    
                </div>
            </div>
            <div class="password">
                <input type="password" name="apass" placeholder="password" onfocus="this.placeholder=''" onblur="this.placeholder='password'">
                <div class="error">
                
                </div>
            </div>
            <div class="submit">
                <input type="submit" value="register" style="width:100%;">
                <a href="index.php?m=admin&c=index&a=login"><input type="button" value="login" style="margin-top:20px"></a>
            </div>
    </form>
</div>
        <div class="wrapper"><!-- 最外层部分 -->
            <div class="banner"><!-- 轮播部分 -->
                <ul class="imgList"><!-- 图片部分 -->
                    <li class="imgOn">
                        <a href="#">
                            <img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
images/loginbg1.jpg"  alt="puss in boots1">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
images/loginbg2.jpg"  alt="puss in boots2">
                        </a>
                    </li>
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
images/loginbg3.jpg"  alt="puss in boots3">-->
                        <!--</a>-->
                    <!--</li>-->
                </ul>
                <div class="bg"></div>
            </div>
        </div>
<!-- <div class="login-box">
    <form action="index.php?m=admin&c=index&a=adduser" method="post">
        <h3>注册页</h3>
        用户名：<input type="text" name="auser">
            <div class="error"></div>
        密&nbsp;码：<input type="password" name="apass">
            <div class="error"></div>
        <input type="submit" value="注册">
        <a href="index.php?m=admin&c=index&a=login">登录</a>
    </form></div> -->
        <script>
            //    表单聚焦时的阴影
            $(function(){
//        alert(1)
                $("input").focus(function(){
//            alert(2)
                    $(this).css("box-shadow",
                        "0px 0px 15px #888888");
                })
                $("input").blur(function(){
//            alert(2)
                    $(this).css("box-shadow",
                        "none");
                })
            })

//            背景图片的轮播
            var curIndex = 0; //当前index
            //  alert(imgLen);
            // 定时器自动变换2.5秒每次
            var autoChange = setInterval(function(){
                if(curIndex < $(".imgList li").length-1){
                    curIndex ++;
                }else{
                    curIndex = 0;
                }
                //调用变换处理函数
                changeTo(curIndex);
            },2500);

            $(".indexList").find("li").each(function(item){
                $(this).hover(function(){
                    clearInterval(autoChange);
                    changeTo(item);
                    curIndex = item;
                },function(){
                    autoChange = setInterval(function(){
                        if(curIndex < $(".imgList li").length-1){
                            curIndex ++;
                        }else{
                            curIndex = 0;
                        }
                        //调用变换处理函数
                        changeTo(curIndex);
                    },2500);
                });
            });
            function changeTo(num){
                $(".imgList").find("li").removeClass("imgOn").hide().eq(num).fadeIn().addClass("imgOn");
                $(".infoList").find("li").removeClass("infoOn").eq(num).addClass("infoOn");
                $(".indexList").find("li").removeClass("indexOn").eq(num).addClass("indexOn");
            }


        </script>
</body>
</html>