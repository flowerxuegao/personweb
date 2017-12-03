<?php
class index{
    function __construct(){
        session_start();
        $this->smarty=new Smarty();
        $this->smarty->setTemplateDir("tpl/index");
        $this->smarty->setCompileDir("com");
        $this->smarty->assign("css",CSS_PATH);
        $this->smarty->assign("js",JS_PATH);
        $this->smarty->assign("img",IMG_PATH);
        if(isset($_SESSION["userlogin"])){
            $this->smarty->assign("userlogin",$_SESSION["userlogin"]);
        }else{
            $this->smarty->assign("userlogin",0);
        }
        if(isset($_SESSION["usename"])){
            $this->smarty->assign("username",$_SESSION["username"]);
        }else{
            $this->smarty->assign("username","");
        }
    }
}
?>