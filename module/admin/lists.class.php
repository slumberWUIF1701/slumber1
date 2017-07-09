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
    function edit(){
        $id=$_REQUEST['id'];
        $db=new db('zpmess');
        $db1=new db('position');
        $result=$db->setWhere("zid={$id}")->select();
        $this->smarty->assign("result",$result[0]);
        $result1=$db1->select();
//        e($result1);
//        exit();
//        $arr=array();
        $this->smarty->assign("result1",$result1);
//        foreach($result1 as $v){
//            $posid=substr($result[0]['posid'],strrpos($result[0]['posid'],$v['posid']),1);
//            array_push($arr,$posid);
//        }
//        $this->smarty->assign("posid",$arr);
        $this->smarty->display("admin/editZhaopin.html");
    }

    function editZhaopin(){
        $zid=$_REQUEST['zid'];
        $db=new db('zpmess');
        $zhiwei=$_POST['zhiwei'];
        $jingyan=$_POST['jingyan'];
        $xueli=$_POST['xueli'];
        $money=$_POST['money'];
        $fuli=$_POST['fuli'];
        $jineng=$_POST['jineng'];
        $con=$_POST['con'];
        $posid=(!empty($_POST["posid"]))?implode(";",$_POST["posid"]):'0';
        $result=$db->setWhere("zid={$zid} and isshow=0")->update("jingyan='{$jingyan}',xueli='{$xueli}',zhiwei='{$zhiwei}',money={$money},fuli='{$fuli}',con='{$con}',jineng='{$jineng}',posid='{$posid}'");
        if($result>0){
            $this->jump("编辑成功","index.php?d=admin&f=lists&a=chakan");
        }
    }
}