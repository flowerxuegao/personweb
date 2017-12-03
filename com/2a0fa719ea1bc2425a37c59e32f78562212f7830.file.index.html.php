<?php /* Smarty version Smarty-3.0.6, created on 2017-12-03 03:45:12
         compiled from "tpl/admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:229015a2365388033d0-19840544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a0fa719ea1bc2425a37c59e32f78562212f7830' => 
    array (
      0 => 'tpl/admin\\index.html',
      1 => 1512269109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229015a2365388033d0-19840544',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<<?php ?>?php
session_start();
if (!isset($_SESSION["login"])) {
    $message="请登录";
    $url="login.php";
    include "<?php echo $_smarty_tpl->getVariable('css')->value;?>
message.html";
    exit;
}
?<?php ?>>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
bootstrap2.3.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
styles/Common.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
styles/Index.css" rel="stylesheet" />
    <title></title>

    <style>
        ul,li{
            list-style: none;
            margin: 0;
        }
        .first span{
            width: 100%;
            display: block;
            padding: 8px 15px;
            background-image: url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
images/left-title-bg.png);
            font-weight: bold;
            color: #08c;
            box-sizing:border-box;
        }
        .son{
            padding: 9px 25px;
            border-top: 1px solid #e5e5e5;
        }
    </style>
</head>
<body onload="showLeftTime()">
    <div class="header">
        <label class="logo-title">个人网站后台管理系统</label>
        <!--<ul class="inline">-->
            <!--<li>-->
                <!--<img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
images/32/client.png" />&nbsp;&nbsp;欢迎您,<?php echo $_smarty_tpl->getVariable('auser')->value;?>
-->
            <!--</li>-->
            <!--<li>-->
                <!--<img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
images/32/200.png" />&nbsp;&nbsp;<a class="loginout" href="index.php?m=admin&c=index&a=loginout">退出</a>-->
            <!--</li>-->

        <!--</ul>-->


    </div>


    <div class="timebox">
        <div><em id = "show">显示时间的位置</em></div>
        <ul>
            <li>欢迎您,<span><?php echo $_smarty_tpl->getVariable('auser')->value;?>
</span></li>
            <li><a class = "logout" href="index.php?m=admin&c=index&a=loginout">退出</a></li>
        </ul>
    </div>



    <div class="container-fluid content">
        <div class="row-fluid">
            <div class="span2 content-left">
                <div class="accordion">
                    <div class="left">
                        <ul>
                            <li class="first">
                                <span>用户管理</span>
                                <ul>
                                    <li class="son"><a href="index.php?m=admin&c=show&a=showuser" target="right">查看用户</a></li>
                                </ul>
                            </li>
                                
                            
                            <li class="first">
                                <span>分类管理</span>
                                <ul>
                                    <li class="son"><a href="index.php?m=admin&c=cat&a=showcat" target="right">查看分类</a></li>
                                    <li class="son"><a href="index.php?m=admin&c=cat&a=setcat" target="right">添加分类</a></li>
                                </ul>
                            </li>
                            
                            <li class="first">
                                <span>内容管理</span>
                                <ul>
                                    <li class="son"><a href="index.php?m=admin&c=show&a=showcon" target="right">查看内容</a></li>
                                    <li class="son"><a href="index.php?m=admin&c=show&a=show" target="right">添加内容</a></li>
                                </ul>
                            </li>

                            <li class="first">
                                <span>留言管理</span>
                                <ul>
                                    <li class="son"><a href="index.php?m=admin&c=show&a=showmes" target="right">查看留言</a></li>
                                    <li class="son"><a href="index.php?m=admin&c=show&a=showrel" target="right">查看回复</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                
            </div>

            <div class="span10 content-right">
                <iframe src="Index2.html" class="iframe" name="right"></iframe>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="foot"></div>
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
Index.js"></script>
    <div style="text-align:center;">
</div>

</body>
<script>
    $("span").click(function(){
        $(this).finish()
        $(this).next().toggle(200);
    })
    $(".son").click(function(){
        $(".active").html($(this).find("a").text());
    })




//    显示当前时间
    var initializationTime=(new Date()).getTime();
    function showLeftTime()
    {
        var show_day=new Array('星期日','星期一','星期二','星期三','星期四','星期五','星期六');
        var time=new Date();
        var year=time.getFullYear();
        var month=time.getMonth()+1;
        var date=time.getDate();
        var day=time.getDay();
        var hour=time.getHours();
        var minutes=time.getMinutes();
        var second=time.getSeconds();
        /*  month<10?month='0'+month:month;  */
        hour<10?hour='0'+hour:hour;
        minutes<10?minutes='0'+minutes:minutes;
        second<10?second='0'+second:second;
        document.all.show.innerHTML='今天是：'+year+'年'+month+'月'+date+'日'+' '+show_day[day]+'';
//一秒刷新一次显示时间
        var timeID=setTimeout(showLeftTime,1000);
    }




</script>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
index.css">
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
jquery-3.1.0.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
index.js"></script>
</head>
<body>
<div class="header">
    <h1>欢迎<?php echo $_smarty_tpl->getVariable('auser')->value;?>
进入博客管理系统</h1>
</div>
<div class="left">
    <ul>
        <li class="father">
            <span>用户管理</span>
            <ul>
                <li><a href="index.php?m=admin&c=show&a=showuser" target="iframe">查看用户</a></li>
                <li>添加用户</li>
            </ul>
        </li>
        <li class="father">
            <span>分类管理</span>
            <ul>
                <li><a href="index.php?m=admin&c=cat&a=showcat" target="iframe">查看分类</a></li>
                <li><a href="index.php?m=admin&c=cat&a=setcat" target="iframe">添加分类</a></li>
            </ul>
        </li>
        <li class="father">
            <span>内容管理</span>
            <ul>
                <li><a href="index.php?m=admin&c=show&a=showcon" target="iframe">查看内容</a></li>
                <li><a href="index.php?m=admin&c=show&a=show" target="iframe">添加内容</a></li>
            </ul>
        </li>
        <li class="father">
            <span>留言管理</span>
            <ul>
                <li><a href="">查看留言</a></li>
                <li>留言</li>
            </ul>
        </li>
    </ul>
</div>
<div class="right">
    <iframe src="" frameborder="0" name="iframe"></iframe>
</div>
</body>
</html> -->