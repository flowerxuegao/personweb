<?php
class catControl extends main{
    //显示添加分类
    function setcat(){
        $db=new db("bcategory");
        $data=$db->select();

        $this->smarty->assign("trees",$this->tree($data,0,0));
        $this->smarty->display("setcat.html");
    }
    private function tree($data,$pid,$step){
        global $trees;
        foreach($data as $v){
            if($v['pid']==$pid){
                $flag=str_repeat("♛",$step);//
                $v['cname']=$flag.$v["cname"];
                $trees[]=$v;
                $this->tree($data,$v["cid"],$step+1);
            }
        }
        return $trees;
    }
//    添加分类
    function addcat(){
        $db=new db("bcategory");
        $pid=$_POST["pid"];
        $cname=$_POST["cname"];
        if($db->field("pid='{$pid}',cname='{$cname}'")->insert()>0){
            $this->smarty->assign("noticeTitle","插入成功");
            $this->smarty->assign("noticePage","添加分类");
            $this->smarty->assign("noticeUrl","index.php?m=admin&c=cat&a=setcat");
            $this->smarty->display("notice.html");
        }
    }
//    显示所有分类
    function showcat(){
        $db=new db("bcategory");
        $data=$db->select();
        $this->smarty->assign("trees",$this->tree($data,0,0));
        $this->smarty->display("showcat.html");
    }
    function delcat($param){
        $db=new db("bcategory");

        $cid=$param["cid"];
        $data=$db->select();
        if($this->sons($data,$cid)){
            $this->smarty->assign("noticeTitle","不能删除");
            $this->smarty->assign("noticePage","添加分类");
            $this->smarty->assign("noticeUrl","index.php?m=admin&c=cat&a=showcat");
            $this->smarty->display("notice.html");
        }else{
            if($db->where("cid={$cid}")->delete()>0){
            $this->smarty->assign("noticeTitle","删除成功");
            $this->smarty->assign("noticePage","查看分类");
            $this->smarty->assign("noticeUrl","index.php?m=admin&c=cat&a=showcat");
            $this->smarty->display("notice.html");
        }
        }
//        foreach ($data as $v) {
//            if($v["pid"]==$cid){
//                    $this->smarty->assign("noticeTitle","删除shibai");
//                    $this->smarty->assign("noticePage","查看分类");
//                    $this->smarty->assign("noticeUrl","index.php?m=admin&c=cat&a=showcat");
//                    $this->smarty->display("notice.html");
//                    exit;
//                }
//        }
//        if($db->where("cid={$cid}")->delete()>0){
//            $this->smarty->assign("noticeTitle","删除成功");
//            $this->smarty->assign("noticePage","查看分类");
//            $this->smarty->assign("noticeUrl","index.php?m=admin&c=cat&a=showcat");
//            $this->smarty->display("notice.html");
//        }
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
    function showedit($param){
        $db=new db("bcategory");
        $cid=$param["cid"];
        $data=$db->select();
        $this->smarty->assign("trees",$this->tree($data,0,0));
        $cname=$db->field("pid,cname")->where("cid={$cid}")->select();
        $this->smarty->assign("pid",$cname[0]["pid"]);
        $this->smarty->assign("cname",$cname[0]["cname"]);
        $this->smarty->assign("cid",$cid);
        $this->smarty->display("showedit.html");
    }
    function editcat($param){
        $db=new db("bcategory");
        $cid=$param["cid"];
        $cname=$_POST["cname"];
        if($db->field("cname='{$cname}'")->where("cid=$cid")->update()>0){
            $this->smarty->assign("noticeTitle","修改成功");
            $this->smarty->assign("noticePage","查看分类");
            $this->smarty->assign("noticeUrl","index.php?m=admin&c=cat&a=showedit&cid=$cid");
            $this->smarty->display("notice.html");
        }
    }
}
?>