<?php /* Smarty version Smarty-3.0.6, created on 2017-05-20 01:05:19
         compiled from "tpl/index\contact.html" */ ?>
<?php /*%%SmartyHeaderCode:25515591e9240b86458-63079326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9326304e536e4fc5e4c7860dc287f64aa18b5de8' => 
    array (
      0 => 'tpl/index\\contact.html',
      1 => 1495165502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25515591e9240b86458-63079326',
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
    <title>contact</title>
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
                            <li><a href="index.php?m=index&c=index&a=aboutme">aboutme</a></li>
                            <li class="active"><a href="javascript:;">Contact</a></li>
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
        <!-- <aside id="fh5co-hero">
            <div class="flexslider">
                <ul class="slides">
                   <li style="background-image: url(images/img_bg_3.jpg);">
                       <div class="overlay-gradient"></div>
                       <div class="container-fluids">
                           <div class="row">
                               <div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
                                   <div class="slider-text-inner text-center">
                                       <h1>Contact</h1>
                                        <h2>More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></h2>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </li>
                  </ul>
              </div>
        </aside> -->
        <div id="fh5co-contact">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Contact Me</h2>
                    <p>Welcome to contact me</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-push-1 animate-box">
                    <h3>My Address</h3>
                    <ul class="contact-info">
                        <li><i><img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/address.png" alt="" style = "width:10%;position:relative;top:-8px;left:10px"></i>山西省吕梁市吕梁学院</li>
                        <li><i><img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/phone.png" alt="" style = "width:10%;position:relative;top:-8px;left:10px"></i>182-3582-1690</li>
                        <li><i><img src="<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/qq.png" alt="" style = "width:10%;position:relative;top:-8px;left:10px"></i><a href="#">1057796814@qq.com</a></li>
                    </ul>
                </div>
                <div class="col-md-7 col-md-push-1 animate-box">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-modify">
                            </div>
                        </div>
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

