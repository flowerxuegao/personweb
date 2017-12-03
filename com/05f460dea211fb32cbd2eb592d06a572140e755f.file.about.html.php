<?php /* Smarty version Smarty-3.0.6, created on 2017-05-20 01:05:14
         compiled from "tpl/index\about.html" */ ?>
<?php /*%%SmartyHeaderCode:23950591d6f4af42205-20138541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05f460dea211fb32cbd2eb592d06a572140e755f' => 
    array (
      0 => 'tpl/index\\about.html',
      1 => 1495101236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23950591d6f4af42205-20138541',
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
    <title>aboutme </title>
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
                        <img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/logo1.png" alt="" style = "width:200px;">
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li><a href="index.php?m=index&c=index&a=index">Home</a></li>
                            <li><a href="index.php?m=index&c=show&a=works&id=27">Work</a></li>
                            <li class="has-dropdown"><a href="index.php?m=index&c=show&a=notes&id=28">Note</a></li>
                            <li class="active"><a href="javascript:;">aboutme</a></li>
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

        <div id="fh5co-about">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center heading-section">
                    <h3>About Me</h3>
                    <p>My name is Yuan Xiaoxiao, from Shanxi, is a front-end engineer, currently working in a Shanxi Technology Co., Ltd., engaged in front-end Engineer post. I am proficient in HTML, CSS, JavaScript, jQuery, HTML5, CSS3, bootstrap, nodejs and other technologies.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center animate-box">
                    <p><img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/cover_bg_3.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
                </div>
                <div class="col-md-8 col-md-offset-2 text-center animate-box">
                    <div class="about-desc">
                        <h3>Hi! I'm yuanxiaoxiao</h3>
                        <p>In front of the Engineer for about a year, feeling more and more love in this position, the front is also more and more interest, they will study some things, this site is a combination of the design theme (visual rolling in front of the application in Web), want to put this theme in my personal website</p>
                    </div>
                </div>
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

