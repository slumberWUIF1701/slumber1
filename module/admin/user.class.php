<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/6/28
 * Time: 15:58
 */
class user extends main{
    function __construct()
    {
        parent::__construct();
        $this->db=new db("user");
    }

    function editPass(){
        $this->smarty->assign("user",$this->session->get("name"));
        $this->smarty->display("admin/editPass.html");
    }
    function gaiPass(){
        $user=$_POST['user'];
        $oldpass=$_POST['oldpass'];
        $newpass=$_POST['newpass'];
        if(empty($newpass)){
            $this->jump("新密码不能为空","index.php?d=admin&f=user&a=editPass");
            exit;
        }
        $newpass1=$_POST['newpass1'];
        if(empty($newpass1)){
            $this->jump("确认密码不能为空","index.php?d=admin&f=user&a=editPass");
            exit;
        }
        if($newpass!=$newpass1){
            $this->jump("两次密码不同","index.php?d=admin&f=user&a=editPass");
            exit;
        }
        $newpass=md5($newpass);
        $result=$this->db->setField("upass")->setWhere("uname='{$user}'")->select();

        if(!empty($result)){
            if($result[0]['upass']==md5($oldpass)){
                    $result1=$this->db->setWhere("uname='{$user}'")->update("upass='{$newpass}'");
                    if($result1>0){
                        $this->session->clear();
                        echo "<script>alert('修改成功');top.location.href='index.php?d=admin&f=login&a=init';</script>";
                    }
            }else{
                $this->jump("原密码错误","index.php?d=admin&f=user&a=editPass");
            }
        }
    }
    function upload(){
        $obj=new upload();
        $obj->move();
    }
    function editMess(){
        $this->smarty->display("admin/editUser.html");
    }
    function editUser(){
        $sex=$_POST["sex"];
        $imgurl=$_POST["imgurl"];
        $uid=$this->session->get("id");
        $result=$this->db->setWhere("uid={$uid}")->update("sex='{$sex}',uphoto='{$imgurl}'");
        e($result);
        if($result>0){
            $this->jump("修改成功","index.php?d=admin&f=user&a=editMess");
        }

    }
}