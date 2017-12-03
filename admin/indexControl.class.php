<?php
class indexControl extends main{

	function index(){
//		开启session
//		session_start();
//		判断adminlogin是否存在于session中isset方法
		session_start();
		if(isset($_SESSION["adminlogin"])){
			$this->smarty->assign("auser",$_SESSION["auser"]);
			$this->smarty->display("index.html");
		}else{
			$this->login();
		}
	}
	function login(){
		$this->smarty->display("login.html");
	}
	function reg(){
		$this->smarty->display("reg.html");
	}
	function adduser(){
//		$this->checkSession();
		$db=new db("admin");

		if(isset($_POST["auser"])){
			$auser=$_POST["auser"];
			$data=$db->select();
			foreach($data as $v){
				if($v["auser"]==$auser){
					echo "<script>alert('用户名已存在')</script>";
					exit;
				}
			}

		}else{
			$this->reg();
			exit;
		}
		if(isset($_POST["apass"])){
			$apass=md5($_POST["apass"]);
		}else{
			$this->reg();
			exit;
		}



		if($db->field("auser='{$auser}',apass='{$apass}'")->insert()){
			$this->smarty->assign("noticeTitle","注册成功");
			$this->smarty->assign("noticeUrl","index.php?m=admin&c=index&a=index");
			$this->smarty->assign("noticePage","登录");
			$this->smarty->display("notice.html");
		}


//		}
//		private function checkSession(){
//			if (!isset($_SESSION["adminlogin"])) {
//				$this->login();
//				exit;
//			}
//		}
//		链接数据库
//		获取数据
//		插入数据库
	}
	function checkLogin(){
		session_start();
		$db=new db("admin");
		if(isset($_POST["auser"])){
			$auser=$_POST["auser"];
		}else{
			$this->login();
			exit;
		}
		if(isset($_POST["apass"])){
			$apass=md5($_POST["apass"]);
		}else{
			$this->login();
			exit;
		}
		$data=$db->select();
		foreach ($data as $v) {
			if($v["auser"]==$auser){
				if($v["apass"]==$apass){
					$_SESSION["adminlogin"]=1;
					$_SESSION["auser"]=$auser;
					$_SESSION["apass"]=$apass;
					$_SESSION["aid"]=$v["aid"];
					echo $_SESSION["aid"];
					$_SESSION["atime"]=$v["atime"];
					$this->smarty->assign("noticeTitle","登录成功");
					$this->smarty->assign("noticeUrl","index.php?m=admin");
					$this->smarty->assign("noticePage","主页");
					$this->smarty->display("notice.html");
					exit;
				}
			}
		}
		$this->smarty->assign("noticeTitle","登录失败");
		$this->smarty->assign("noticeUrl","index.php?m=admin&a=login");
		$this->smarty->assign("noticePage","登录");
		$this->smarty->display("notice.html");

	}
	function checkPass(){
		$db=new db("admin");
		$auser=$_GET["auser"];
		$data=$db->select();
		foreach($data as $v){
			if($v["auser"]==$auser){
				echo "ok";
				exit;
			}
		}
	}
	 public function loginout(){
		 session_start();
		 unset($_SESSION["adminlogin"]);
		 unset($_SESSION["auser"]);
		 unset($_SESSION["apass"]);
		 unset($_SESSION["aid"]);
		 $this->smarty->assign("noticeTitle","退出成功");
		 $this->smarty->assign("noticePage","进入首页");
		 $this->smarty->assign("noticeUrl","index.php?m=admin&a=login");
		 $this->smarty->display("notice.html");
	 }
}
?>