<?php /* Smarty version Smarty-3.0.6, created on 2017-05-20 01:04:57
         compiled from "tpl/index\note.html" */ ?>
<?php /*%%SmartyHeaderCode:10973591ea0306335e9-51876721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4059ffa8db8c372e4ccac95a39b30b3de63a594' => 
    array (
      0 => 'tpl/index\\note.html',
      1 => 1495179310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10973591ea0306335e9-51876721',
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
    <title>note</title>
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
                            <li class="has-dropdown active">
                                <a href="javascript:;">Note</a>
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
myimg/img_bg_3.jpg);background-position:center">
                        <div class="overlay-gradient"></div>
                        <div class="container-fluids">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
                                    <div class="slider-text-inner text-center">
                                        <h1>业精于勤，荒于嬉；行成于思，毁于随。</h1>
                                        <h2>——韩愈</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div id="fh5co-blog">
            <div class="row">
                <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data1')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
?>
                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="javascript:;" class="blog-bg" style="border:1px solid rgba(0, 0, 0, 0.05);border-bottom:0;background-image: url(<?php echo $_smarty_tpl->tpl_vars['v1']->value['imgurl'];?>
);background-size:inherit"></a>
                        <div class="blog-text">
                            <span class="posted_on"><?php echo $_smarty_tpl->tpl_vars['v1']->value['stime'];?>
</span>
                            <h3><a href="#"><?php echo $_smarty_tpl->tpl_vars['v1']->value['title'];?>
</a></h3>
                            <p style = "height:90px;line-height:18px;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 5;overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['v1']->value['con'];?>
</p>
                            <ul class="stuff">
                                <li><a href="index.php?m=index&c=index&a=listss&cid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['sid'];?>
">Read More<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php }} ?>
                <!--<div class="col-md-4">-->
                    <!--<div class="fh5co-blog animate-box">-->
                        <!--<a href="#" class="blog-bg" style="background-image: url(images/blog-2.jpg);"></a>-->
                        <!--<div class="blog-text">-->
                            <!--<span class="posted_on">Feb. 15th 2016</span>-->
                            <!--<h3><a href="#">Surfing at Philippines</a></h3>-->
                            <!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
                            <!--<ul class="stuff">-->
                                <!--<li><i class="icon-heart3"></i>249</li>-->
                                <!--<li><i class="icon-eye2"></i>1,308</li>-->
                                <!--<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>-->
                            <!--</ul>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
                <!--<div class="col-md-4">-->
                    <!--<div class="fh5co-blog animate-box">-->
                        <!--<a href="#" class="blog-bg" style="background-image: url(images/blog-3.jpg);"></a>-->
                        <!--<div class="blog-text">-->
                            <!--<span class="posted_on">Feb. 15th 2016</span>-->
                            <!--<h3><a href="#">Focus On Uderwater</a></h3>-->
                            <!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
                            <!--<ul class="stuff">-->
                                <!--<li><i class="icon-heart3"></i>249</li>-->
                                <!--<li><i class="icon-eye2"></i>1,308</li>-->
                                <!--<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>-->
                            <!--</ul>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
                <!--<div class="col-md-4">-->
                    <!--<div class="fh5co-blog animate-box">-->
                        <!--<a href="#" class="blog-bg" style="background-image: url(images/blog-1.jpg);"></a>-->
                        <!--<div class="blog-text">-->
                            <!--<span class="posted_on">Feb. 15th 2016</span>-->
                            <!--<h3><a href="#">Photoshoot On The Street</a></h3>-->
                            <!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
                            <!--<ul class="stuff">-->
                                <!--<li><i class="icon-heart3"></i>249</li>-->
                                <!--<li><i class="icon-eye2"></i>1,308</li>-->
                                <!--<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>-->
                            <!--</ul>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
                <!--<div class="col-md-4">-->
                    <!--<div class="fh5co-blog animate-box">-->
                        <!--<a href="#" class="blog-bg" style="background-image: url(images/blog-2.jpg);"></a>-->
                        <!--<div class="blog-text">-->
                            <!--<span class="posted_on">Feb. 15th 2016</span>-->
                            <!--<h3><a href="#">Surfing at Philippines</a></h3>-->
                            <!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
                            <!--<ul class="stuff">-->
                                <!--<li><i class="icon-heart3"></i>249</li>-->
                                <!--<li><i class="icon-eye2"></i>1,308</li>-->
                                <!--<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>-->
                            <!--</ul>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
                <!--<div class="col-md-4">-->
                    <!--<div class="fh5co-blog animate-box">-->
                        <!--<a href="#" class="blog-bg" style="background-image: url(images/blog-3.jpg);"></a>-->
                        <!--<div class="blog-text">-->
                            <!--<span class="posted_on">Feb. 15th 2016</span>-->
                            <!--<h3><a href="#">Focus On Uderwater</a></h3>-->
                            <!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
                            <!--<ul class="stuff">-->
                                <!--<li><i class="icon-heart3"></i>249</li>-->
                                <!--<li><i class="icon-eye2"></i>1,308</li>-->
                                <!--<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>-->
                            <!--</ul>-->
                        <!--</div>-->
                    <!--</div>-->
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

