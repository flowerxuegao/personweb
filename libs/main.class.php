<?php
	class main{
		function __construct(){
			$this->smarty=new Smarty();
			$this->smarty->setTemplateDir("tpl/admin");
			$this->smarty->setCompileDir("com");
			$this->smarty->assign("css",CSS_PATH);
			$this->smarty->assign("js",JS_PATH);
			$this->smarty->assign("img",IMG_PATH);
		}
	}
?>