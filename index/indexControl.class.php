<?php
class indexControl{
    function __construct(){
        $this->smarty=new smarty();
        $this->smarty->setTemplateDir("tpl/index");
        $this->smarty->setCompileDir("com");
        $this->smarty->assign("css",CSS_PATH);
        $this->smarty->assign("js",JS_PATH);
        $this->smarty->assign("img",IMG_PATH);
        $this->smarty->assign("ROOT_PATH",ROOT_PATH);
            session_start();
            if(isset($_SESSION["username"])){
                $this->smarty->assign("username",$_SESSION["username"]);
            }else{
                $this->smarty->assign("username",0);
            }
            if(isset($_SESSION["userlogin"])){
                $this->smarty->assign("userlogin",$_SESSION["userlogin"]);
            }else{
                $this->smarty->assign("userlogin",0);
            }
    }
    function index(){
        $db=new db("bcategory");
        $data=$db->select();
         function aa($data,$cid){
            $i=0;
            foreach($data as $v){
                if($v["pid"]==$cid){
                    $array[$i]=$v;
                    foreach($data as $v1) {
                        if($v["cid"]==$v1["pid"]){
                            $array[$i]["son"][]=$v1;

                        }
                    }
                    $i++;
                }
            }
            return $array;
        }
        $this->smarty->assign("menu",aa($data,0));
        $db1=new db("shows");
        $data1=$db1->limit("5,6")->select();
        $this->smarty->assign("data1",$data1);
        $this->smarty->display("home1.html");
    }




    function aboutme(){
        $db=new db("bcategory");
        $data=$db->select();
        function aa($data,$cid){
            $i=0;
            foreach($data as $v){
                if($v["pid"]==$cid){
                    $array[$i]=$v;
                    foreach($data as $v1) {
                        if($v["cid"]==$v1["pid"]){
                            $array[$i]["son"][]=$v1;

                        }
                    }
                    $i++;
                }
            }
            return $array;
        }
        $this->smarty->assign("menu",aa($data,0));
        $db1=new db("shows");
        $data1=$db1->limit("5,6")->select();
        $this->smarty->assign("data1",$data1);
        $this->smarty->display("about.html");
    }



    function contact(){
        $db=new db("bcategory");
        $data=$db->select();
        function aa($data,$cid){
            $i=0;
            foreach($data as $v){
                if($v["pid"]==$cid){
                    $array[$i]=$v;
                    foreach($data as $v1) {
                        if($v["cid"]==$v1["pid"]){
                            $array[$i]["son"][]=$v1;

                        }
                    }
                    $i++;
                }
            }
            return $array;
        }
        $this->smarty->assign("menu",aa($data,0));
        $db1=new db("shows");
        $data1=$db1->limit("5,6")->select();
        $this->smarty->assign("data1",$data1);
        $this->smarty->display("contact.html");
    }











    function category(){
        $db=new db("bcategory");
        $data=$db->select();
        function aa($data,$cid){
            $i=0;
            foreach($data as $v){
                if($v["pid"]==$cid){
                    $array[$i]=$v;
                    foreach($data as $v1) {
                        if($v["cid"]==$v1["pid"]){
                            $array[$i]["son"][]=$v1;

                        }
                    }
                    $i++;
                }
            }
            return $array;
        }
        $this->smarty->assign("menu",aa($data,0));
        $this->smarty->display("fenlei.html");
    }
    private function sons($data,$cid){
        global $sons;
        foreach($data as $v){
            if($v['pid']==$cid){
                $sons[]=$v;
                $this->sons($data,$v["cid"]);
            }
        }
        return $sons;
    }
    function lists($arg){
        $cid=$arg["cid"];
        $db=new db("shows");
        $data=$db->where("cid={$cid}")->select();
        $this->smarty->assign("data",$data);
        $db1=new db("message");
        $data1=$db1->limit("5")->select();
        $this->smarty->assign("messdata",$data1);
        $db2=new db("bcategory");
        $data2=$db2->where("pid=23")->select();
        $this->smarty->assign("listdata",$data2);
        $this->smarty->display("list.html");
    }
    function listss($arg){
        $sid=$arg["cid"];
        $db=new db("shows");

        $data=$db->where("sid={$sid}")->select();

        $this->smarty->assign("data",$data);
//        $db1=new db("message");
//        $data1=$db1->limit("5")->select();
//        $this->smarty->assign("messdata",$data1);
//        $db2=new db("bcategory");
//        $data2=$db2->where("pid=23")->select();
        $this->smarty->assign("listdata",$data);
        $this->smarty->display("list1.html");
    }
}