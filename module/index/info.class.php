<?php
class info extends main{
    function reg(){
        $this->smarty->display("index/zw-zhuce.html");
    }

    function login(){
        $this->smarty->display("index/zw-login.html");
    }
}
