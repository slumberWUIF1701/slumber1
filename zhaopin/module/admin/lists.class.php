<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/7/6
 * Time: 10:26
 */
class lists extends main{
    function chakan(){
        $id=$this->session->get('id');
        $db=new db('zpmess');
        $result=$db->setWhere("uid={$id}")->select();
        if(!empty($result)){
            $this->smarty->assign("result",$result);
            $this->smarty->display("admin/zhaopinMess.html");
        }

    }
}