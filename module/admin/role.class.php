<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/6/28
 * Time: 16:16
 */
class role extends  main{
    function add(){
        $this->smarty->display("admin/addRole.html");
    }
    function addRole(){
        $rname=$_POST["rname"];
        $db=new db("role");
        $result=$db->setWhere("rname='{$rname}'")->select();
        if(!$result){
            $b=$db->insert("rname='{$rname}'");
            if($b>0){
                $this->jump("添加成功","index.php?d=admin&f=role&a=add");
            }else{
                $this->jump("添加失败","index.php?d=admin&f=role&a=add");
            }
        }else{
            $this->jump("角色已存在","index.php?d=admin&f=role&a=add");
        }

    }
}