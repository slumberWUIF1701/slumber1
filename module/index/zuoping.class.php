<?php
class zuoping extends main{
    function init(){
        $this->smarty->display("index/zn_zuoping.html");
    }
    function addcon(){
        $db=new db("works");
        $result=$db->select();
        echo json_encode($result);
    }
}