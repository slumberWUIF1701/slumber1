<?php
class ms extends main{
    function yqcon(){
        $this->smarty->display("index/zw-yqmscon.html");
    }

    function yq(){
        $this->smarty->display("index/zw-yqms.html");
    }

    function mszt(){
        $this->smarty->display("index/zw-mszt.html");
    }
}