<?php /* Smarty version Smarty-3.0.6, created on 2016-11-02 06:52:32
         compiled from "index.php" */ ?>
<?php /*%%SmartyHeaderCode:2894258197f200725e6-27217072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb6499b8e938f92a3695fff1afe57edea4b9efb7' => 
    array (
      0 => 'index.php',
      1 => 1477318513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2894258197f200725e6-27217072',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<<?php ?>?php
// var_dump($_SERVER);
//date_default_timezone_set("prc");
//$a=time();
//echo date("y-m-d h:i:s",$a);
define("ROOT_PATH", dirname($_SERVER["SCRIPT_FILENAME"])."/");
define("WEB_PATH","http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["REQUEST_URI"])."/");
define("WEB_URL", "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]."/");
define("CSS_PATH", WEB_PATH."static/css/");
define("JS_PATH", WEB_PATH."static/js/");
define("IMG_PATH", WEB_PATH."static/img/");
define("UPLOAD_PATH",ROOT_PATH."upload/");
include ROOT_PATH."libs/route.class.php";
include ROOT_PATH."libs/smarty/Smarty.class.php";
include ROOT_PATH."public/db.class.php";
include ROOT_PATH."public/main.class.php";
$route=new route();
// echo WEB_URL;
// echo UPLOAD_PATH;
// $route->init();
?<?php ?>>