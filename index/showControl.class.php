<?php 
    class showControl{
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
        function show($arg){
            // var_dump($arg);
            $cid = $arg["id"];
            $db = new db("shows");
            $data = $db->where("cid = {$cid}")->select();
            $title = $data[0]["title"];
            $con = $data[0]["con"];
            $url = $data[0]["url"];
            $imgurl = $data[0]["imgurl"];
            $stime = $data[0]["stime"];
            $status = $data[0]["status"];
            $this->smarty->assign("cid",$cid);
//            $db = new db("message");//???
//            $messageDate = $db->where("sid = {$sid}")->select();
//            $arr = Array();
//            foreach($messageDate as $k =>$v){
//                $arr[$k] = $v;
//
//                $db->table ="replay";
//                // $db = new db("replay");
//                $arr[$k]["son"] = $db->where("mid={$v['mid']}")->select();
//            }
            if($status == "0"){
                // $this->smarty->assign("data",$data);
                $this->smarty->assign("title",$title);
                $this->smarty->assign("con",$con);
                $this->smarty->assign("imgurl",$imgurl);
                $this->smarty->assign("url",$url);
                $this->smarty->assign("stime",$stime);
//                $this->smarty->assign("arr",$arr);
                $this->smarty->display("show1.html");
            }else{
                if(isset($_SESSION["userlogin"])){
                    $this->smarty->assign("title",$title);
                    $this->smarty->assign("con",$con);
                    $this->smarty->assign("imgurl",$imgurl);
                    $this->smarty->assign("url",$url);
//                    $this->smarty->assign("arr",$arr);
                    $this->smarty->display("show1.html");
                }else{
                    $this->smarty->assign("noticeTitle","请登录");
                    $this->smarty->assign("noticeUrl","index.php?m=index&c=login");
                    $this->smarty->assign("noticePage","登陆页面");
                    $this->smarty->display("notice.html");
//                    $this->smarty->assign("arr",$arr);
//                    $_SESSION["currenturl"] = $url;
                }
                
            }
            
        }


        function works(){
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
            $data1=$db1->limit("4,8")->select();
            $this->smarty->assign("data1",$data1);
            $this->smarty->display("show1.html");
        }

        function notes(){
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
            $data1=$db1->limit("12,15")->select();
            $this->smarty->assign("data1",$data1);
            $this->smarty->display("note.html");
        }

    }
 ?>