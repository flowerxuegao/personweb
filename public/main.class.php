<?php
class main{
	function __construct(){
//		$this->db=new db("con");
		$this->smarty=new smarty();
		$this->smarty->setTemplateDir("tpl/admin");
		$this->smarty->setCompileDir("com");
		$this->smarty->assign("css",CSS_PATH);
		$this->smarty->assign("js",JS_PATH);
		$this->smarty->assign("img",IMG_PATH);
	}
}
?>