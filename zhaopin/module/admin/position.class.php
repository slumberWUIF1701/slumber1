<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/7/5
 * Time: 18:00
 */
class position extends main{
    function add(){
        $this->smarty->display("admin/addPos.html");
    }
    function addCon(){
        $posname=$_POST['posname'];
        $db=new db('position');
        if($db->insert("posname='{$posname}'")>0){
            $this->jump("添加成功","index.php?d=admin&f=position&a=add");
        }
    }
    function chakan(){
        $db=new db('position');
        $result=$db->select();
        if(!empty($result)){
            $this->smarty->assign("position",$result);
        }else{
            $this->jump("推荐位为空，请添加","index.php?d=admin&f=position&a=add");
        }
        $this->smarty->display("admin/editPos.html");
    }

    function del(){
        $pid=$_REQUEST['pid'];
        $db=new db('position');
        $result=$db->setWhere("posid={$pid}")->del();
        if($result>0){
            $this->jump("删除成功","index.php?d=admin&f=position&a=chakan");
        }
    }

    function edit(){
        $pid=$_REQUEST['pid'];
        $db=new db('position');
        $result=$db->setWhere("posid={$pid}")->select();
        $this->smarty->assign("pos",$result[0]);
        $this->smarty->display("admin/gaiPos.html");
    }

    function gaiPos(){
        $db=new db('position');
        $pid=$_POST['posid'];
        $posname=$_POST['posname'];
        $result=$db->setWhere("posid={$pid}")->update("posname='{$posname}'");
        if($result>0){
            $this->jump("修改成功","index.php?d=admin&f=position&a=chakan");
        }
    }
}