<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/6/23
 * Time: 18:19
 */
class main{
    function __construct()
    {
        $smarty=new Smarty();
        $smarty->setTemplateDir("template");
        $smarty->setCompileDir("compile");
        $this->smarty=$smarty;
        $this->session=new session();
    }
    function jump($mess,$url){
        echo "<script>alert(`{$mess}`);location.href=`{$url}`;</script>";
    }
}