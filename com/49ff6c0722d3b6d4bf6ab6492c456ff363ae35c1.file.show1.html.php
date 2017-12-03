<?php /* Smarty version Smarty-3.0.6, created on 2017-05-20 01:04:51
         compiled from "tpl/index\show1.html" */ ?>
<?php /*%%SmartyHeaderCode:25759591e98aead6967-02530679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49ff6c0722d3b6d4bf6ab6492c456ff363ae35c1' => 
    array (
      0 => 'tpl/index\\show1.html',
      1 => 1495177390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25759591e98aead6967-02530679',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>work</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
home1css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
home1css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
home1css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
home1css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
home1css/flexslider.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
home1css/style.css">

    <!-- Modernizr JS -->
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
home1js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
home1js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="container-wrap">
            <div class="top-menu" style = "position:relative">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo">
                            <img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/logo1.png" alt="" style = "width:200px;">
                        </div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li><a href="index.php?m=index&c=index&a=index">Home</a></li>
                            <li class="active"><a href="javascript:;">Work</a></li>
                            <li class="has-dropdown">
                                <a href="index.php?m=index&c=show&a=notes&id=28">Note</a>

                            </li>
                            <li><a href="index.php?m=index&c=index&a=aboutme">aboutme</a></li>
                            <li><a href="index.php?m=index&c=index&a=contact">Contact</a></li>
                        </ul>
                    </div>
                </div>


                <!-- login register -->
                <div class = "login_register_box">

                    <?php if ($_smarty_tpl->getVariable('username')->value){?>
                    <a href="index.php?m=index&c=login&a=loginout">注销</a>
                    <?php }else{ ?>
                    <a href="index.php?m=index&c=login&a=login">login</a>
                    <a href="index.php?m=index&c=login&a=reg">reg</a>

                    <?php }?>

                </div>

            </div>
        </div>
    </nav>
    <div class="container-wrap">
        <aside id="fh5co-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/work.png);background-position:center;background-size:100%">
                        <div class="overlay-gradient"></div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
                                <div class="slider-text-inner text-center">
                                    <h1>当一个人用工作去迎接光明，光明很快就会来照耀着他。</h1>
                                    <h2>—— 冯学峰</h2>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div id="fh5co-work">
            <div class="row">
                <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data1')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
?>
                <div class="col-md-4 text-center animate-box">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['v1']->value['url'];?>
" class="work" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['v1']->value['imgurl'];?>
);" target = "_blank">
                        <div class="desc">
                            <h3>Project Name</h3>
                            <span><?php echo $_smarty_tpl->tpl_vars['v1']->value["title"];?>
</span>
                        </div>
                    </a>
                </div>
                <?php }} ?>
                <!--<div class="col-md-4 text-center animate-box">-->
                    <!--<a href="work-single.html" class="work" style="background-image: url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/portfolio-2.jpg);">-->
                        <!--<div class="desc">-->
                            <!--<h3>Project Name</h3>-->
                            <!--<span>Brading</span>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</div>-->
                <!--<div class="col-md-4 text-center animate-box">-->
                    <!--<a href="work-single.html" class="work" style="background-image: url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/portfolio-3.jpg);">-->
                        <!--<div class="desc">-->
                            <!--<h3>Project Name</h3>-->
                            <!--<span>Illustration</span>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</div>-->
                <!--<div class="col-md-4 text-center animate-box">-->
                    <!--<a href="work-single.html" class="work" style="background-image: url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/portfolio-4.jpg);">-->
                        <!--<div class="desc">-->
                            <!--<h3>Project Name</h3>-->
                            <!--<span>Illustration</span>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</div>-->
                <!--<div class="col-md-4 text-center animate-box">-->
                    <!--<a href="work-single.html" class="work" style="background-image: url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/portfolio-5.jpg);">-->
                        <!--<div class="desc">-->
                            <!--<h3>Project Name</h3>-->
                            <!--<span>Brading</span>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</div>-->
                <!--<div class="col-md-4 text-center animate-box">-->
                    <!--<a href="work-single.html" class="work" style="background-image: url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/portfolio-6.jpg);">-->
                        <!--<div class="desc">-->
                            <!--<h3>Project Name</h3>-->
                            <!--<span>Illustration</span>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</div>-->
            </div>
        </div>
    </div><!-- END container-wrap -->

    <div class="container-wrap">
        <footer id="fh5co-footer" role="contentinfo">
            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">© Copyright 2017 Xiaoxiao Yuan</small>
                    </p>
                </div>
            </div>
        </footer>
    </div>


</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i><img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/gotops.png" alt="" style = "width:50%"></i></a>
</div>

<!-- jQuery -->
<script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
home1js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
home1js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
home1js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
home1js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
home1js/jquery.flexslider-min.js"></script>
<!-- Magnific Popup -->
<script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
home1js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
home1js/magnific-popup-options.js"></script>
<!-- Counters -->
<script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
home1js/jquery.countTo.js"></script>
<!-- Main -->
<script src="<?php echo $_smarty_tpl->getVariable('js')->value;?>
home1js/main.js"></script>

</body>
</html>

