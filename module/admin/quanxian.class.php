<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/7/7
 * Time: 10:43
 */
class quanxian extends main{
    function chakan(){
        $db=new db('user');
        $result=$db->setWhere("rid=0")->select();
        if(!empty($result)){
            $this->smarty->assign("result",$result);
            $this->smarty->display("admin/hr.html");
        }else{
            $this->jump("没有用户","index.php?d=admin&f=login&a=index");
        }

    }
    function edit(){
        $uid=$_REQUEST['id'];
        $db=new db('user');
        $status=$db->setField("allow")->setWhere("uid={$uid}")->select();
        $this->smarty->assign("uid",$uid);
        $this->smarty->assign("status",$status[0]["allow"]);
        $this->smarty->display("admin/editHr.html");
    }

    function gaiStatus(){
        $uid=$_REQUEST['uid'];
        $allow=$_POST['allow'];
        $db=new db("user");
        $result=$db->setWhere("uid={$uid}")->update("allow={$allow}");
        if($result>0){
            $this->jump("编辑成功","index.php?d=admin&f=quanxian&a=chakan");
        }
    }
}