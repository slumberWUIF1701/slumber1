<?php
class login extends main{
    function reg(){
        $uname=$_POST["uname"];
        if(empty($uname)){
            echo "用户不能为空";
            exit;
        }
        $db=new db("member");
        $result=$db->setWhere("mname='{$uname}'")->select();
        if(count($result)>0){
            echo "用户名已存在";
            exit;
        }
        $upass=$_POST["upass"];
        if(empty($upass)){
            echo "密码不能为空";
            exit;
        }
        $upass1=$_POST["upass1"];
        if(empty($upass1)){
            echo "确认密码不能为空";
            exit;
        }
        if($upass!=$upass1){
            echo "两次密码不一致";
            exit;
        }
        $upass=md5($upass);
        if($db->insert("mname='{$uname}',mpass='{$upass}'")){
            echo "ok";
            exit;
        }else{
            echo 'no';
            exit;
        }
    }
    function willLogin(){
        $uname=$_POST["uname"];
        if(empty($uname)){
            echo "用户不能为空";
            exit;
        }
        $upass=$_POST["upass"];
        if(empty($upass)){
            echo "密码不能为空";
            exit;
        }
        $db=new db("member");
        $result=$db->select();
        foreach ($result as $v){
            if($v["mname"]==$uname){
                if($v["mpass"]==md5($upass)){
                    $this->session->set("indexLogin","yes");
                    $this->session->set("uname",$v["mname"]);
                    $this->session->set("mid",$v["mid"]);
                    echo "ok";
                    exit();
                }
            }
        }
        echo "用户名或密码有误";
    }
    function logout(){
        $this->session->clear();
        echo "ok";
    }
}