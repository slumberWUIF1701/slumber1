<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/7/5
 * Time: 22:28
 */
class category extends main{
    function add(){
        $db=new db('position');
        $result=$db->select();
        if(!empty($result)){
            $this->smarty->assign("result",$result);
        }
        $this->smarty->display("admin/addCon.html");
    }
    function addZhaopin(){
        $uid=$this->session->get("id");
        $ch=$_POST['ch'];
        $en=$_POST['en'];
        $zhiwei=$_POST['zhiwei'];
        $money=$_POST['money'];
        $address=$_POST['address'];
        $con=$_POST['con'];
        $posid=(!empty($_POST["posid"]))?implode(";",$_POST["posid"]):'0';
        $db=new db('zpmess');
        $result=$db->insert("uid={$uid},ch='{$ch}',en='{$en}',zhiwei='{$zhiwei}',money={$money},address='{$address}',con='{$con}',posid='{$posid}'");
        if($result>0){
            $this->jump("添加成功","index.php?d=admin&f=category&a=add");
        }
    }
}