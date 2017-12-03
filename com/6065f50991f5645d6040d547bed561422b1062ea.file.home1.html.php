<?php /* Smarty version Smarty-3.0.6, created on 2017-12-03 03:58:06
         compiled from "tpl/index\home1.html" */ ?>
<?php /*%%SmartyHeaderCode:279145a23683ebffe33-29251705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6065f50991f5645d6040d547bed561422b1062ea' => 
    array (
      0 => 'tpl/index\\home1.html',
      1 => 1512269881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279145a23683ebffe33-29251705',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <!--兼容IE浏览器-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<!--缓冲图片  -->
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
                            <li class="active"><a href="index.php?m=index&c=index&a=index">Home</a></li>
                            <li><a href="index.php?m=index&c=show&a=works&id=27">Work</a></li>
                            <li class="has-dropdown"><a href="index.php?m=index&c=show&a=notes&id=28">Note</a></li>
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
myimg/img_bg_1.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
                                    <div class="slider-text-inner">
                                        <h1>如果你浪费了自己的年龄，那是挺可悲的。因为你的青春只能持续一点儿时间——很短的一点儿时间。</h1>
                                        <h2> —— 王尔德  </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/img_bg_2.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-push-3 slider-text">
                                    <div class="slider-text-inner">
                                        <h1>笨蛋自以为聪明，聪明人才知道自己是笨蛋。</h1>
                                        <h2> —— 莎士比亚</h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/img_bg_3.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container-fluids">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h1>从不浪费时间的人，没有工夫抱怨时间不够。</h1>
                                        <h2> —— 杰弗逊</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/img_bg_4.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-push-3 slider-text">
                                    <div class="slider-text-inner">
                                        <h1>把时间用在思考上是最能节省时间的事情。</h1>
                                        <h2> —— 卡曾斯</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>


        <div id="fh5co-work" class="fh5co-light-grey" style = "background:url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/qinxin1.jpg) no-repeat;background-size:cover;background-attachment:fixed;">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Work</h2>
                    <p>These are some of the projects I've done</p>
                </div>
            </div>
            <div class="row">
                <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data1')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
?>
                <div class="col-md-4 text-center animate-box">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['v1']->value["url"];?>
" class="work"  style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['v1']->value['imgurl'];?>
);" target = "_blank">
                        <div class="desc">
                            <h3>Project Name</h3>
                            <span><?php echo $_smarty_tpl->tpl_vars['v1']->value["title"];?>
</span>
                        </div>
                    </a>
                </div>
                <?php }} ?>

            </div>
        </div>

        <div class = "shicha" style = "width:100%;height:300px;background:url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/1.jpg);background-position:center;"></div>
        <div id="fh5co-counter" class="fh5co-counters">
            <div class="row">
                <div class=" resumes col-md-6 col-md-offset-3 text-center animate-box">
                    <h2>ABOUTME</h2>
                    <p>I'm a front end Engineer</p>
                </div>
            </div>

        </div>

        <div id="fh5co-blog" class="blog-flex">
            <div class="featured-blog" style="background-image: url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/psb.jpg);background-position:15px 0px;" >
                <!-- <div class="desc-t">
                    <div class="desc-tc">
                        <span class="featured-head">Featured Posts</span>
                        <h3><a href="#">Top 20 Best WordPress Themes 2017 Multi Purpose and Creative Websites</a></h3>
                        <span><a href="#" class="read-button">Learn More</a></span>
                    </div>
                </div> -->
            </div>
            <div class="blog-entry fh5co-light-grey">
                <div class="row animate-box">
                    <div class="col-md-12">
                        <h2>skill</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <a href="javascript:;" class="blog-post">
                            <span class="img" style="background-image: url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/blog-2.jpg);"></span>
                            <div class="desc">
                                <h3>html</h3>
                                <span class="cat">Collection</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 animate-box">
                        <a href="javascript:;" class="blog-post">
                            <span class="img" style="background-image: url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/blog-1.jpg);"></span>
                            <div class="desc">
                                <h3>css</h3>
                                <span class="cat">Collection</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 animate-box">
                        <a href="javascript:;" class="blog-post">
                            <span class="img" style="background-image: url(<?php echo $_smarty_tpl->getVariable('img')->value;?>
myimg/blog-3.jpg);"></span>
                            <div class="desc">
                                <h3>javascript</h3>
                                <span class="cat">Collection</span>
                            </div>
                        </a>
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
<!-- 向上箭头 -->
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
<script src = "<?php echo $_smarty_tpl->getVariable('js')->value;?>
home1js/shicha.js"></script>
</body>
</html>

