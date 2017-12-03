<?php
class messageControl{
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
    function add(){
        $con=$_POST["con"];
        $sid=$_POST["sid"];
        $db=new db("message");
        if(isset($_SESSION["uid"])){
            $uid=$_SESSION["uid"];
            $db1=new db("buser");
            $data1=$db1->where("uid={$uid}")->select();
            $u=$data1[0]["username"];
        }else{
            echo '{"result":"error"}';
            $_SESSION["currenturl"]="index.php?m=index&c=show&c=show&a=showcon&sid={$sid}";
            exit;
        };
        if($db->field("con='{$con}',sid={$sid},uid='{$u}'")->insert()>0){
            echo '{"result":"ok"}';
        }
    }
    function replay(){
        $con=$_POST["con"];
        $uid=$_SESSION["uid"];
        $db1=new db("buser");
        $data1=$db1->where("uid={$uid}")->select();
        $u=$data1[0]["username"];
        // echo $uid;
        $mid=$_POST["mid"];
        $db=new db("replay");
        if($db->field("con='{$con}',mid={$mid},uid='{$u}'")->insert()>0){
            echo '{"result":"ok"}';
        }else{
            echo '{"result":"error"}';
        };
    }
}
?>