<?php /* Smarty version Smarty-3.0.6, created on 2017-12-03 03:39:45
         compiled from "tpl/admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:122155a2363f0967aa2-25204009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1081a78109acfbe9ba87b35cd0a0535b57b3b8db' => 
    array (
      0 => 'tpl/admin\\login.html',
      1 => 1512268781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122155a2363f0967aa2-25204009',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<meta http-equiv="Expires" content="0"> 
<title>后台登录</title> 
<link href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
login.css" type="text/css" rel="stylesheet">
<script src = "<?php echo $_smarty_tpl->getVariable('js')->value;?>
jquery.min.js"></script>
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
    <div class="message">Login</div>
    
    <form action="index.php?m=admin&c=index&a=checkLogin" method="post" name="myform">
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
                <input type="submit" value="login" style="width:100%;">
                <a href="index.php?m=admin&c=index&a=reg"><input type="button" value="register" style="margin-top:20px"></a>
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
            <li>
                <a href="#">
                    <img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
images/loginbg3.jpg"  alt="puss in boots3">
                </a>
            </li>
        </ul>
        <div class="bg"></div>
    </div>
</div>

<script>

    //    表单聚焦时有阴影
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

//        图片轮播
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
                },3000);
            });
        });
        function changeTo(num){
            $(".imgList").find("li").removeClass("imgOn").hide().eq(num).fadeIn().addClass("imgOn");
            $(".infoList").find("li").removeClass("infoOn").eq(num).addClass("infoOn");
            $(".indexList").find("li").removeClass("indexOn").eq(num).addClass("indexOn");
        }


    })
</script>
</body>
</html>