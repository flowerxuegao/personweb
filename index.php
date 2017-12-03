<?php
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
?>