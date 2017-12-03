<?php
    class loginControl{
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
    function index(){
         session_start();
        if(isset($_SESSION["userlogin"])){
            // $this->smarty->assign("")
            echo "123";
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
//      $this->checkSession();
        $db=new db("buser");

        if(isset($_POST["username"])){
            $username=$_POST["username"];
            $data=$db->select();
            foreach($data as $v){
                if($v["username"]==$username){
                    $this->smarty->assign("noticeTitle","用户名已存在");
                    $this->smarty->assign("noticeUrl","index.php?m=index&c=login&a=reg");
                    $this->smarty->assign("noticePage","注册");
                    $this->smarty->display("notice.html");
                    exit;
                }
            }

        }else{
            $this->reg();
            exit;
        }
        if(isset($_POST["password"])){
            $password=md5($_POST["password"]);
        }else{
            $this->reg();
            exit;
        }



        if($db->field("username='{$username}',password='{$password}'")->insert()){
            $this->smarty->assign("noticeTitle","注册成功");
            $this->smarty->assign("noticeUrl","index.php?m=index&c=login&a=login");
            $this->smarty->assign("noticePage","登录");
            $this->smarty->display("notice.html");
        }

    }
    function checkLogin(){
        $db=new db("buser");
        if(isset($_POST["username"])){
            $username=$_POST["username"];
        }else{
            $this->login();
            exit;
        }
        if(isset($_POST["password"])){
            $password=md5($_POST["password"]);
        }else{
            $this->login();
            exit;
        }
        $data=$db->select();
        foreach ($data as $v) {
            if($v["username"]==$username){
                if($v["password"]==$password){
                    $_SESSION["userlogin"]=0;
                    $_SESSION["username"]=$username;
                    $_SESSION["password"]=$password;
                    $_SESSION["uid"]=$v["uid"];
                    $url = !empty($_SESSION["currenturl"])?$_SESSION["currenturl"]:"index.php?m=index";
                    $this->smarty->assign("noticeTitle","登录成功");
                    $this->smarty->assign("noticePage","主页");
                    if(isset($_SESSION["currenturl"])){
                        $this->smarty->assign("noticeUrl",$_SESSION["currenturl"]);
                        unset($_SESSION["currenturl"]);
                    }else{
                        $this->smarty->assign("noticeUrl","index.php");
                    }
                    $this->smarty->display("notice.html");
                    exit;
                }
            }
        }
        $this->smarty->assign("noticeTitle","登录失败");
        $this->smarty->assign("noticeUrl","index.php?m=index&c=login&a=login");
        $this->smarty->assign("noticePage","登录");
        $this->smarty->display("notice.html");

    }
    function checkPass(){
        $db=new db("buser");
        $username=$_GET["username"];
        $data=$db->select();
        foreach($data as $v){
            if($v["username"]==$username){
                echo "ok";
                exit;
            }
        }
    }
        public function loginout(){
             unset($_SESSION["userlogin"]);
             unset($_SESSION["username"]);
             unset($_SESSION["password"]);
             unset($_SESSION["uid"]);
             $this->smarty->assign("noticeTitle","退出成功");
             $this->smarty->assign("noticePage","进入首页");
             $this->smarty->assign("noticeUrl","index.php");
             $this->smarty->display("notice.html");
         }
    }
?>