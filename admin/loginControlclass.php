<?php
class loginControl{
	function __construct(){
		$this->db=new db("buser");
		$this->smarty=new smarty();
		$this->smarty->setTemplateDir("tpl");
		$this->smarty->setCompileDir("com");
	}
	function select(){
		$data=$this->db->select();
		$this->smarty->assign("aaa",$data);
		$this->smarty->display("login.html");
	}
}
?>