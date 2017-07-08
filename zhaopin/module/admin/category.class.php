<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/7/5
 * Time: 22:28
 */
class category extends main{
    function add(){
        $db1=new db("zhiwei");
        $result1=$db1->select();
        $this->smarty->assign("zhiwei",$result1);
        $db=new db('position');
        $result=$db->select();
        if(!empty($result)){
            $this->smarty->assign("result",$result);
        }
        $this->smarty->display("admin/addCon.html");
    }
    function addZhaopin(){

        $uid=$this->session->get("id");
        $zhiwei=$_POST['zhiwei'];
        $jingyan=$_POST['jingyan'];
        $xueli=$_POST['xueli'];
        $money=$_POST['money'];
        $fuli=$_POST['fuli'];
        $jineng=$_POST['jineng'];
        $con=$_POST['con'];
        $isshow=0;
        $posid=(!empty($_POST["posid"]))?implode(";",$_POST["posid"]):'0';
        $db=new db('zpmess');
        $result=$db->insert("uid={$uid},jingyan='{$jingyan}',xueli='{$xueli}',zhiwei='{$zhiwei}',money={$money},fuli='{$fuli}',con='{$con}',jineng='{$jineng}',posid='{$posid}',isshow={$isshow}");
        if($result>0){
            $this->jump("添加成功","index.php?d=admin&f=category&a=add");
        }
    }
}