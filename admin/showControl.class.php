<?php
class showControl extends main{
    function show(){
        $db=new db("bcategory");
        $data=$db->select();
        $this->smarty->assign("trees",$this->tree($data,0,0));
        $this->smarty->display("showcon.html");
    }
    function upload(){
        $file=$_FILES['file'];
        if(is_uploaded_file($file['tmp_name'])){
            $filename=UPLOAD_PATH.$file['name'];
            $filename1=WEB_PATH."upload/".$file['name'];
            move_uploaded_file($file['tmp_name'],$filename);
            echo $filename1;
        }
    }
    private function tree($data,$pid,$step){
        global $trees;
        foreach($data as $v){
            if($v['pid']==$pid){
                $flag=str_repeat("」",$step);//
                $v['cname']=$flag.$v["cname"];
                $trees[]=$v;
                $this->tree($data,$v["cid"],$step+1);
            }
        }
        return $trees;
    }
    function showadd(){
        session_start();
        $db=new db("shows");
        $title=$_POST["title"];
        $con=$_POST["con"];
        $status=$_POST["status"];
        $imgurl=$_POST["imgurl"];
        $aid=$_SESSION["aid"];
        $db1=new db("admin");
        $data1= $db1->where("aid='{$aid}'")->select();
        $name=$data1[0]["auser"];
        echo $name;
        $cid=$_POST["cid"];
        $url="http://".$_SERVER["HTTP_HOST"]."/mycms/index.php?m=index&c=show&a=show&id=";
        if($db->field("title='{$title}',con='{$con}',imgurl='{$imgurl}',status='{$status}',aid='{$name}',cid={$cid}")->insert()){
            $db->field("url='{$url}{$db->db->insert_id}'")->where("sid={$db->db->insert_id}")->update();
            $this->smarty->assign("noticeTitle","插入成功");
            $this->smarty->assign("noticeUrl","index.php?m=admin&c=show&a=showcon");
            $this->smarty->assign("noticePage","查看内容");
            $this->smarty->display("notice.html");
        }else{
            $this->smarty->assign("noticeTitle","插入失败");
            $this->smarty->assign("noticeUrl","index.php?m=admin&c=show&a=showcon");
            $this->smarty->assign("noticePage","查看内容");
            $this->smarty->display("notice.html");
        }
    }
    function showcon(){
        $db=new db("shows");
        $data=$db->select();
        $this->smarty->assign("data",$data);
        $this->smarty->display("showcontent.html");
    }
    function delcon(){
        $db=new db("shows");
        $sid=$_GET["sid"];
        if($db->where("sid='{$sid}'")->delete()){
            $this->smarty->assign("noticeTitle","删除成功");
            $this->smarty->assign("noticeUrl","index.php?m=admin&c=show&a=showcon");
            $this->smarty->assign("noticePage","查看内容");
            $this->smarty->display("notice.html");
        }
    }
    function showuser(){
        $db=new db("buser");
        $data=$db->select();
        $this->smarty->assign("data",$data);
        $this->smarty->display("showuser.html");
    }
    function deluser(){
        $db=new db("buser");
        $uid=$_GET["uid"];
        if($db->where("uid='{$uid}'")->delete()){
            $this->smarty->assign("noticeTitle","删除成功");
            $this->smarty->assign("noticeUrl","index.php?m=admin&c=show&a=showuser");
            $this->smarty->assign("noticePage","查看内容");
            $this->smarty->display("notice.html");
        }
    }
    function showmes(){
        $db=new db("message");
        $data=$db->select();
        $this->smarty->assign("data",$data);
        $this->smarty->display("showmes.html");
    }
    function showrel(){
        $db=new db("replay");
        $data=$db->select();
        $this->smarty->assign("data",$data);
        $this->smarty->display("showrel.html");
    }
    function delmes(){
        $db=new db("message");
        $mid=$_GET["mid"];
        $db1=new db("replay");
        if($db->where("mid='{$mid}'")->delete()){
            $db1->where("mid='{$mid}'")->delete();
            $this->smarty->assign("noticeTitle","删除成功");
            $this->smarty->assign("noticeUrl","index.php?m=admin&c=show&a=showmes");
            $this->smarty->assign("noticePage","查看内容");
            $this->smarty->display("notice.html");
        }
    }
    function delrel(){
        $rid=$_GET["rid"];
        $db=new db("replay");
        if($db->where("rid='{$rid}'")->delete()){
            $this->smarty->assign("noticeTitle","删除成功");
            $this->smarty->assign("noticeUrl","index.php?m=admin&c=show&a=showrel");
            $this->smarty->assign("noticePage","查看内容");
            $this->smarty->display("notice.html");
        }
    }
}
?>