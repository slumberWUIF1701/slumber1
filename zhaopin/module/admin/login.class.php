<?php
class login extends main{
    function init(){
        $this->smarty->display("admin/login.html");
        if($this->session->get("logined")=="yes"){
            echo "<script>location.href='index.php?d=admin&f=login&a=index';</script>";
        }
    }
    function code(){
        $obj=new code();
        $obj->output();
        $this->session->set("code",$obj->current);
    }
    function check(){
        if(strtolower($_POST["code"])!=$this->session->get("code")){
            echo "<script>alert('验证码错误');location.href='index.php?d=admin&f=login';</script>";
            exit();
        }
        $obj=new db('user');
        $result=$obj->select();
        foreach ($result as $v){
            if($_POST['user']==$v['uname']){
                if(md5($_POST['pass'])==$v['upass']){
                    $this->session->set("login","yes");
                    $this->session->set("logined","yes");
                    $this->session->set("name",$v["uname"]);
                    $this->session->set("id",$v['uid']);
                    $this->session->set("rid",$v['rid']);
                    echo "<script>alert('登录成功');location.href='index.php?d=admin&f=login&a=index';</script>";
                    exit();
                }
            }
        }
        echo "<script>alert('登录失败');location.href='index.php?d=admin&f=login';</script>";
    }
    function index(){
        if($this->session->get("logined")!="yes"){
            echo "<script>location.href='index.php?d=admin&f=login';</script>";
        }
        $this->smarty->assign("user",$this->session->get("name"));
        $this->smarty->assign("rid",$this->session->get("rid"));
        $this->smarty->display("admin/main.html");
    }
    function logout(){
        $this->session->clear();
        echo "<script>alert('退出成功');location.href='index.php?d=admin&f=login';</script>";

    }

    function reg(){
        $this->smarty->display("admin/zhuce.html");

    }
    function checkReg(){
        $uname=$_POST['uname'];
        $upass=$_POST['upass'];
        $zhiwei=$_POST['zhiwei'];
        if(empty($uname)){
            $this->jump("用户名不能为空","index.php?d=admin&f=login&a=reg");
        }
        $db=new db("user");
        $result=$db->setWhere("uname='{$uname}'")->select();
        if(count($result)>0){
            $this->jump("用户名已存在","index.php?d=admin&f=login&a=reg");
            exit;
        }
        if(empty($upass)){
            $this->jump("密码不能为空","index.php?d=admin&f=login&a=reg");
            exit;
        }
        $upass1=$_POST['upass1'];
        if(empty($upass1)){
            $this->jump("确认密码不能为空","index.php?d=admin&f=login&a=reg");
            exit;
        }
        if($upass!=$upass1){
            $this->jump("两次密码不同","index.php?d=admin&f=login&a=reg");
            exit;
        }
        $upass=md5($upass);
        if($db->insert("uname='{$uname}',upass='{$upass}',zhiwei='{$zhiwei}'")>0){
            $this->jump("注册成功","index.php?d=admin&f=login");
        }
    }
}